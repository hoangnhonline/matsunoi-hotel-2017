@extends('backend.layout')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Nearby    
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{ route('nearby.index') }}">Nearby</a></li>
      <li class="active">Add new</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <a class="btn btn-default btn-sm" href="{{ route('nearby.index') }}" style="margin-bottom:5px">Back</a>
    <form role="form" method="POST" action="{{ route('nearby.store') }}" id="dataForm">
    <div class="row">
      <!-- left column -->

      <div class="col-md-8">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Add new</h3>
          </div>
          <!-- /.box-header -->               
            {!! csrf_field() !!}          
            <div class="box-body">
                @if (count($errors) > 0)
                  <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                  </div>
                @endif
                <div>

                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    
                    <li role="presentation"  class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><img src="{{ URL::asset('public/assets/images/jp.png') }}" title="JP" alt="JP" ></a></li>
                    <li role="presentation"><a href="#homeEn" aria-controls="homeEn" role="tab" data-toggle="tab"><img src="{{ URL::asset('public/assets/images/en.gif') }}" title="En" alt="En" ></a></li>
                    <li role="presentation"><a href="#homeVn" aria-controls="homeEn" role="tab" data-toggle="tab"><img src="{{ URL::asset('public/assets/images/vn.png') }}" title="VN" alt="VN" ></a></li>
                    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">IMAGE</a></li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                    
                    <div role="tabpanel" class="tab-pane active" id="home">                        
                        <div class="form-group" >                  
                          <label>Name <span class="red-star">*</span></label>
                          <input type="text" class="form-control" name="name[1]" value="">
                        </div>
                        <div class="form-group">                  
                          <label>Description</label>                  
                          <input type="text" class="form-control" name="description[1]" value="">
                        </div>  
                    </div><!--end thong tin co ban--> 
                    <div role="tabpanel" class="tab-pane" id="homeEn">                        
                        <div class="form-group" >                  
                          <label>Name <span class="red-star">*</span></label>
                          <input type="text" class="form-control" name="name[2]" value="">
                        </div>
                        <div class="form-group">                  
                          <label>Description</label>                  
                          <input type="text" class="form-control" name="description[2]" value="">
                        </div>
                    </div><!--end thong tin co ban--> 
                    <div role="tabpanel" class="tab-pane" id="homeVn">                        
                        <div class="form-group" >                  
                          <label>Name <span class="red-star">*</span></label>
                          <input type="text" class="form-control" name="name[3]" value="">
                        </div>
                        <div class="form-group">                  
                          <label>Description</label>                  
                          <input type="text" class="form-control" name="description[3]" value="">
                        </div> 
                    </div><!--end thong tin co ban-->
                    <div role="tabpanel" class="tab-pane " id="settings">
                        <div class="form-group" style="margin-top:10px;margin-bottom:10px">                            
                          <div class="col-md-9">
                            <img id="thumbnail_image" src="{{ old('image_url') ? Helper::showImage(old('image_url')) : URL::asset('public/admin/dist/img/img.png') }}" class="img-thumbnail" width="150" height="85">
                            
                            <input type="file" id="file-image" style="display:none" />                    
                            <button class="btn btn-default btn-sm btnSingleUpload" data-set="image_url" data-image="thumbnail_image" type="button"><span class="glyphicon glyphicon-upload" aria-hidden="true"></span> Upload</button>
                            <input type="hidden" name="image_url" id="image_url" value="{{ old('image_url') }}"/>
                          </div>
                          <div style="clear:both"></div>
                        </div>
                     </div><!--end hinh anh-->   
                  </div>

                </div>
                  
            </div>
            <div class="box-footer">             
              <button type="button" class="btn btn-default" id="btnLoading" style="display:none"><i class="fa fa-spin fa-spinner"></i></button>
              <button type="submit" class="btn btn-primary" id="btnSave">Save</button>
              <a class="btn btn-default" class="btn btn-primary" href="{{ route('nearby.index')}}">Cancel</a>
            </div>
            
        </div>
        <!-- /.box -->     

      </div>
      <div class="col-md-4">      
        
      <!--/.col (left) -->      
    </div> 
    </form>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>

<style type="text/css">
  .nav-tabs>li.active>a{
    color:#FFF !important;
    background-color: #28AA4A !important;
  }

</style>
@stop