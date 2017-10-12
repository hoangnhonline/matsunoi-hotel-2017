<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Services;
use App\Models\ServicesLang;

use Helper, Session, Auth;

class ServicesController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return Response
    */
    public function index(Request $request)
    {           
        
        $items = Services::whereRaw('1')
        ->join('services_lang', 'services.id', '=', 'services_lang.services_id')->where('lang_id', 2)->orderBy('type')->orderBy('display_order')->get();
       
        
        return view('backend.services.index', compact( 'items' ));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
    public function create(Request $request)
    {   
        return view('backend.services.create');
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
        $dataArr['type'] = 2;
        $dataArr['display_order'] = Helper::getNextOrder('services', ['type' => 2]);

        $rs = Services::create($dataArr);

        $services_id = $rs->id;
        $detail['services_id'] = $services_id;
        foreach($dataArr['name'] as $lang_id => $name ){
            $detail['name'] = $name;
            $detail['lang_id'] = $lang_id;
            $detail['description'] = isset($dataArr['description'][$lang_id]) ? $dataArr['description'][$lang_id] : null;
            ServicesLang::create($detail);
        }

        Session::flash('message', 'Add new success.');

        return redirect()->route('services.index');
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
        $detail = Services::find($id);

        $detailList = Services::where('id', $id)->leftJoin('services_lang', 'services.id', '=', 'services_lang.services_id')->get();
        foreach($detailList as $dataLang){
            $detailArr[$dataLang->lang_id] = $dataLang;
        }       
        return view('backend.services.edit', compact('detailArr', 'detail'));

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
        
        $services_id = $dataArr['id'];
        
        $detail['services_id'] = $services_id;

        $model = Services::find($services_id);

        $model->update($dataArr);  

        foreach($dataArr['name'] as $lang_id => $name ){
            $detail['name'] = $name;
            $detail['lang_id'] = $lang_id;

            $modelLang = ServicesLang::where(['services_id' => $services_id, 'lang_id' => $lang_id])->update(['name' => $name, 'description' => $dataArr['description'][$lang_id]]);
        }
        
        Session::flash('message', 'Update success');         

        return redirect()->route('services.edit', $dataArr['id']);
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
        $model = Services::find($id);
        $model->delete();

        // redirect
        Session::flash('message', 'Xóa thành công');
        return redirect()->route('services.index');
    }
}
