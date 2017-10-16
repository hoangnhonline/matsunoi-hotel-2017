<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\ContentLang;

use Helper, Session, Auth;

class ContentController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return Response
    */
    public function index(Request $request)
    {           
        
        $items = ContentLang::where('lang_id', 2)->get();
       
        
        return view('backend.content.index', compact( 'items' ));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
    public function create(Request $request)
    {   
        return view('backend.content.create');
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
        foreach($dataArr['content'] as $lang_id => $content ){
            $detail['content'] = $content;
            $detail['lang_id'] = $lang_id;        
            ContentLang::create($detail);
        }

        Session::flash('message', 'Add new success.');

        return redirect()->route('content.index');
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

        $detailList = ContentLang::where('id', $id)->get();

        foreach($detailList as $dataLang){
            $detailArr[$dataLang->lang_id] = $dataLang;            
        }       
        return view('backend.content.edit', compact('detailArr', 'id'));
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
        
        $content_id = $dataArr['id'];       
        

        foreach($dataArr['content'] as $lang_id => $content ){                        

            $modelLang = ContentLang::where(['id' => $content_id, 'lang_id' => $lang_id])->update(['content' => $content]);
        }
          
        Session::flash('message', 'Update success');        

        return redirect()->route('content.edit', $dataArr['id']);
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
        $model = Content::find($id);
        $model->delete();

        // redirect
        Session::flash('message', 'Delete success.');
        return redirect()->route('content.index');
    }
}
