<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Nearby;
use App\Models\NearbyLang;

use Helper, Session, Auth;

class NearbyController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return Response
    */
    public function index(Request $request)
    {           
        
        $items = Nearby::whereRaw('1')
        ->join('nearby_lang', 'nearby.id', '=', 'nearby_lang.nearby_id')->where('lang_id', 2)->orderBy('display_order')->get();
       
        
        return view('backend.nearby.index', compact( 'items' ));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
    public function create(Request $request)
    {   
        return view('backend.nearby.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  Request  $request
    * @return Response
    */
    public function store(Request $request)
    {
        $dataArr = $request->all();                                        
        
        $dataArr['display_order'] = Helper::getNextOrder('nearby');

        $rs = Nearby::create($dataArr);

        $nearby_id = $rs->id;
        $detail['nearby_id'] = $nearby_id;
        foreach($dataArr['name'] as $lang_id => $name ){
            $detail['name'] = $name;
            $detail['lang_id'] = $lang_id;
            $detail['description'] = isset($dataArr['description'][$lang_id]) ? $dataArr['description'][$lang_id] : null;
            NearbyLang::create($detail);
        }

        Session::flash('message', 'Add new success.');

        return redirect()->route('nearby.index');
    }
   
    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
    public function show($id)
    {
    //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
    public function edit($id)
    {
        $detailArr = [];
        $detail = Nearby::find($id);

        $detailList = Nearby::where('id', $id)->leftJoin('nearby_lang', 'nearby.id', '=', 'nearby_lang.nearby_id')->get();
        foreach($detailList as $dataLang){
            $detailArr[$dataLang->lang_id] = $dataLang;
        }       
        return view('backend.nearby.edit', compact('detailArr', 'detail'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  Request  $request
    * @param  int  $id
    * @return Response
    */
    public function update(Request $request)
    {
        $dataArr = $request->all();
        
        $nearby_id = $dataArr['id'];
        
        $detail['nearby_id'] = $nearby_id;

        $model = Nearby::find($nearby_id);

        $model->update($dataArr);  

        foreach($dataArr['name'] as $lang_id => $name ){
            $detail['name'] = $name;
            $detail['lang_id'] = $lang_id;

            $modelLang = NearbyLang::where(['nearby_id' => $nearby_id, 'lang_id' => $lang_id])->update(['name' => $name, 'description' => $dataArr['description'][$lang_id]]);
        }
        
             
  
        Session::flash('message', 'Update success');        

        return redirect()->route('nearby.edit', $dataArr['id']);
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
    public function destroy($id)
    {
        // delete
        $model = Nearby::find($id);
        $model->delete();

        // redirect
        Session::flash('message', 'Xóa thành công');
        return redirect()->route('nearby.index');
    }
}
