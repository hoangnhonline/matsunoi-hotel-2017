<?php
namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\ContentLang;
use App\Models\Settings;
use App\Models\Nearby;
use App\Models\Services;

use Helper, Session, App;

class HomeController extends Controller
{

    public function __construct(){
    }        
    public function index(Request $request, $locale = 'jp')
    {  
        App::setLocale($locale);
       
        $seo = Helper::seo($locale);             
        $settingArr = Helper::setting();
        $socialImage = '';

        if($locale == 'jp'){
            $lang_id = 1;
        }elseif($locale == 'en'){
            $lang_id = 2;
        }else{
            $lang_id = 3;
        }
        $contentList = ContentLang::where('lang_id', $lang_id)->pluck('content', 'id');
        
        return view('frontend.home.index', compact('socialImage', 'seo', 'settingArr', 'locale', 'contentList'));

    }
    public function nearby(Request $request)
    {  
        if( $request->locale && in_array($request->locale, ['en', 'jp', 'vn'])){
            $locale = $request->locale;
        }else{
            $locale = 'jp';
        }
        App::setLocale($locale);
       
        $seo = Helper::seo($locale);             
        $settingArr = Helper::setting();
        $socialImage = '';

        if($locale == 'jp'){
            $lang_id = 1;
        }elseif($locale == 'en'){
            $lang_id = 2;
        }else{
            $lang_id = 3;
        }
        $nearbyList = Nearby::join('nearby_lang', 'nearby.id', '=', 'nearby_lang.nearby_id')->where('lang_id', $lang_id)->get();
        
        $contentList = ContentLang::where('lang_id', $lang_id)->pluck('content', 'id');
        return view('frontend.nearby.index', compact('socialImage', 'seo', 'settingArr', 'locale', 'contentList', 'nearbyList'));

    }

    public function gallery(Request $request)
    {  
        if( $request->locale && in_array($request->locale, ['en', 'jp', 'vn'])){
            $locale = $request->locale;
        }else{
            $locale = 'jp';
        }
        App::setLocale($locale);
       
        $seo = Helper::seo($locale);             
        $settingArr = Helper::setting();
        $socialImage = '';

        if($locale == 'jp'){
            $lang_id = 1;
        }elseif($locale == 'en'){
            $lang_id = 2;
        }else{
            $lang_id = 3;
        }
        $nearbyList = Nearby::join('nearby_lang', 'nearby.id', '=', 'nearby_lang.nearby_id')->where('lang_id', $lang_id)->get();
        
        $contentList = ContentLang::where('lang_id', $lang_id)->pluck('content', 'id');
        return view('frontend.gallery.index', compact('socialImage', 'seo', 'settingArr', 'locale', 'contentList', 'nearbyList'));

    }    
    

    public function services(Request $request)
    {  
        if( $request->locale && in_array($request->locale, ['en', 'jp', 'vn'])){
            $locale = $request->locale;
        }else{
            $locale = 'jp';
        }
        App::setLocale($locale);
       
        $seo = Helper::seo($locale);             
        $settingArr = Helper::setting();
        $socialImage = '';

        if($locale == 'jp'){
            $lang_id = 1;
        }elseif($locale == 'en'){
            $lang_id = 2;
        }else{
            $lang_id = 3;
        }
        
        $servicesList = Services::join('services_lang', 'services.id', '=', 'services_lang.services_id')->where('lang_id', $lang_id)->where('type', 1)->get();
        
        $services2List = Services::join('services_lang', 'services.id', '=', 'services_lang.services_id')->where('lang_id', $lang_id)->where('type', 2)->get();
        
        $contentList = ContentLang::where('lang_id', $lang_id)->pluck('content', 'id');

        return view('frontend.services.index', compact('socialImage', 'seo', 'settingArr', 'locale', 'contentList', 'servicesList', 'services2List'));

    }

}
