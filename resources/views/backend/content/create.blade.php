@extends('backend.layout')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Content    
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{ route('content.index') }}">Content</a></li>
      <li class="active">Add new</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <a class="btn btn-default btn-sm" href="{{ route('content.index') }}" style="margin-bottom:5px">Back</a>
    <form role="form" method="POST" action="{{ route('content.store') }}" id="dataForm">
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
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                    
                    <div role="tabpanel" class="tab-pane active" id="home">                        
                        <div class="form-group" >                  
                          <label>Content <span class="red-star">*</span></label>                          
                          <textarea id="content_1" rows="10" class="form-control" name="content[1]"></textarea>
                        </div>                        
                    </div><!--end thong tin co ban--> 
                    <div role="tabpanel" class="tab-pane" id="homeEn">                        
                        <div class="form-group" >                  
                          <label>Content <span class="red-star">*</span></label>
                          <textarea id="content_2" rows="10" class="form-control" name="content[2]"></textarea>
                        </div>
                        
                    </div><!--end thong tin co ban--> 
                    <div role="tabpanel" class="tab-pane" id="homeVn">                        
                        <div class="form-group" >                  
                          <label>Content <span class="red-star">*</span></label>
                         <textarea id="content_3" rows="10" class="form-control" name="content[3]"></textarea>
                        </div>
                        
                    </div><!--end thong tin co ban-->
                   
                  </div>

                </div>
                  
            </div>
            <div class="box-footer">             
              <button type="button" class="btn btn-default" id="btnLoading" style="display:none"><i class="fa fa-spin fa-spinner"></i></button>
              <button type="submit" class="btn btn-primary" id="btnSave">Save</button>
              <a class="btn btn-default" class="btn btn-primary" href="{{ route('content.index')}}">Cancel</a>
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