<?php
namespace App\Helpers;
use App\Helpers\simple_html_dom;
use App\Models\City;
use App\Models\Price;
use App\Models\Area;
use App\Models\CounterValues;
use App\Models\CounterIps;
use App\Models\Settings;
use DB, Image, Auth;

class Helper
{
    public static $privateKey = 'enilnohngnaoh';

    public static function shout(string $string)
    {
        return strtoupper($string);
    }
  
    public static function seo($locale){
        if($locale == 'jp'){
            $lang_id = 1;
        }elseif($locale == 'en'){
            $lang_id = 2;
        }else{
            $lang_id = 3;
        }
        return DB::table('site_info')->join('site_info_lang', 'site_info.id', '=', 'site_info_lang.info_id')->where('lang_id', $lang_id)->pluck('content', 'info_key');
    }
    public static function setting(){
       
        return DB::table('settings')->pluck('value', 'name');
    }
   
    public static function view($object_id, $object_type){
        $rs = CounterValues::where(['object_id' => $object_id, 'object_type' => $object_type])->first();
        if($rs){
            return $rs->all_value;
        }else{
            return 0;
        }
    }
    public static function counter( $object_id, $object_type){
        // ip-protection in seconds
        $counter_expire = 600;

        // ignore agent list
        $counter_ignore_agents = array('bot', 'bot1', 'bot3');

        // ignore ip list
        //$counter_ignore_ips = array('127.0.0.2', '127.0.0.3');
        $counter_ignore_ips = [];
        // get basic information
        $counter_agent = $_SERVER['HTTP_USER_AGENT'];
        $counter_ip = $_SERVER['REMOTE_ADDR']; 
        $counter_time = time();

        $ignore = false; 
           
        // get counter information   
        $rs1 = CounterValues::where(['object_id' => $object_id, 'object_type' => $object_type])->first();   

        // fill when empty
        if (!$rs1)
        {   

            $tmpArr = [
                'object_id' => $object_id,
                'object_type' => $object_type,
                'day_id' => date("z"),
                'day_value' => 1,
                'all_value' => 1
            ];
          CounterValues::create($tmpArr);
          $rs1 = CounterValues::where(['object_id' => $object_id, 'object_type' => $object_type])->first();
          
          $ignore = true;
        }   
        
        $day_id = $rs1->day_id;
        $day_value = $rs1->day_value;
        $all_value = $rs1->all_value;
        // check ignore lists
        $length = sizeof($counter_ignore_agents);
        for ($i = 0; $i < $length; $i++)
        {
          if (substr_count($counter_agent, strtolower($counter_ignore_agents[$i])))
          {
             $ignore = true;
             break;
          }
        }

        $length = sizeof($counter_ignore_ips);
        for ($i = 0; $i < $length; $i++)
        {
          if ($counter_ip == $counter_ignore_ips[$i])
          {
             $ignore = true;
             break;
          }
        }

        
        // delete free ips
        if ($ignore == false)
        {           
            $time = time();
            CounterIps::where(['object_id' =>$object_id, 'object_type' => $object_type, 'ip' => $counter_ip])->whereRaw("$time-visit >= $counter_expire")->delete();
        }
 
        // check for entry
        if ($ignore == false)
        {
            $rs2 = CounterIps::where(['ip' => $counter_ip, 'object_id' => $object_id, 'object_type' => $object_type])->get();
          
          if ( $rs2->count() > 0)
          {
            $modelCouterIps = CounterIps::where('ip', $counter_ip)->where(['object_id' => $object_id, 'object_type' => $object_type]);
            $modelCouterIps->update(['visit' => time()]);   
            $ignore = true;          
          }
          else
          {
             // insert ip
             CounterIps::create(['ip' => $counter_ip, 'visit' => time(), 'object_id' => $object_id, 'object_type' => $object_type]);
          }       
        }
        // add counter
        if ($ignore == false)
        {
          // day
          if ($day_id == date("z")) 
          {
             $day_value++; 
          }
          else 
          {
             $day_value = 1;
             $day_id = date("z");
          }
          // all
          $all_value++; 

        $modelCouterValues = CounterValues::where(['object_id' => $object_id, 'object_type' => $object_type]);
        $modelCouterValues->update([
                'day_id' => $day_id,
                'day_value' => $day_value,
                'all_value' => $all_value
        ]);
         
        }
    }
    public static function xml_entities($string) {
        return str_replace(
                array("&", "<", ">", '"', "'"), array("&amp;", "&lt;", "&gt;", "&quot;", "&apos;"), $string
        );
    }
    public static function getNextOrder($table, $where = []){
        return DB::table($table)->where($where)->max('display_order') + 1;
    }
    
    public static function showImage($image_url, $type = 'original'){

        //return strpos($image_url, 'http') === false ? config('houseland.upload_url') . $type . '/' . $image_url : $image_url;        
        return strpos($image_url, 'http') === false ? env('APP_URL') . $image_url : $image_url;        

    }
    public static function showImageThumb($image_url, $object_type = 1, $folder = ''){             
        // type = 1 : original 2 : thumbs
        //object_type = 1 : product, 2 :article  3: project 
         $image_url = str_replace('/uploads/images/', '/uploads/images/thumbs/', $image_url);            
        if(strpos($image_url, 'http') === false){
            if($object_type == 1){
                return env('APP_URL') . $folder. $image_url;
            }elseif($object_type == 2){
                return env('APP_URL') . $folder. $image_url;
            }else{
                return env('APP_URL') . $folder. $image_url;
            }    
        }else{
            return $image_url;
        }
        
    }    
    
    public static function getName( $id, $table){
        $rs = DB::table($table)->where('id', $id)->first();

        return $rs ? $rs->name : "";
    }
    
   

    public static function uploadPhoto($file, $base_folder = '', $date_dir=false){
    
        $return = [];

        $basePath = '';

        $basePath = $base_folder ? $basePath .= $base_folder ."/" : $basePath = $basePath;

        $basePath = $date_dir == true ? $basePath .= date('Y/m/d'). '/'  : $basePath = $basePath;        
        
        $desPath = config('houseland.upload_path'). $basePath;
        $desThumbsPath = config('houseland.upload_thumbs_path'). $basePath;
        //set name for file
        $fileName = $file->getClientOriginalName();
        
        $tmpArr = explode('.', $fileName);

        // Get image extension
        $imgExt = array_pop($tmpArr);

        // Get image name exclude extension
        $imgNameOrigin = preg_replace('/(.*)(_\d+x\d+)/', '$1', implode('.', $tmpArr));        

        $imgName = str_slug($imgNameOrigin, '-');
        
        $imgName = $imgName."-".time();

        $newFileName = "{$imgName}.{$imgExt}";
       //var_dump($desPath, $newFileName);die;
        if( $file->move($desPath, $newFileName) ){            
            $imagePath = $basePath.$newFileName;
            $return['image_name'] = $newFileName;
            $return['image_path'] = $imagePath;
        }

        return $return;
    }

    public static function changeFileName($str) {
        $str = self::stripUnicode($str);
        $str = str_replace("?", "", $str);
        $str = str_replace("&", "", $str);
        $str = str_replace("'", "", $str);
        $str = str_replace("  ", " ", $str);
        $str = trim($str);
        $str = mb_convert_case($str, MB_CASE_LOWER, 'utf-8');
        $str = str_replace(" ", "-", $str);
        $str = str_replace("---", "-", $str);
        $str = str_replace("--", "-", $str);
        $str = str_replace('"', '', $str);
        $str = str_replace('"', "", $str);
        $str = str_replace(":", "", $str);
        $str = str_replace("(", "", $str);
        $str = str_replace(")", "", $str);
        $str = str_replace(",", "", $str);
        $str = str_replace(".", "", $str);
        $str = str_replace(".", "", $str);
        $str = str_replace(".", "", $str);
        $str = str_replace("%", "", $str);
        $str = str_replace("“", "", $str);
        $str = str_replace("”", "", $str);
        return $str;
    }

    public static function stripUnicode($str) {
        if (!$str)
            return false;
        $unicode = array(
            'a' => 'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',
            'A' => 'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'd' => 'đ',
            'D' => 'Đ',
            'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
            'E' => 'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'i' => 'í|ì|ỉ|ĩ|ị',
            'I' => 'Í|Ì|Ỉ|Ĩ|Ị',
            'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
            'O' => 'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
            'U' => 'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'y' => 'ý|ỳ|ỷ|ỹ|ỵ',
            'Y' => 'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
            '' => '?',
            '-' => '/'
        );
        foreach ($unicode as $khongdau => $codau) {
            $arr = explode("|", $codau);
            $str = str_replace($arr, $khongdau, $str);
        }
        return $str;
    }
}