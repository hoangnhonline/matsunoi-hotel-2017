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
      <li class="active">Update</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <a class="btn btn-default btn-sm" href="{{ route('nearby.index') }}" style="margin-bottom:5px">
      <i class="fa fa-arrow-left"></i> Back      
    </a>
    <form role="form" method="POST" action="{{ route('nearby.update') }}" id="dataForm">
    <input type="hidden" name="id" value="{{ $detail->id }}">

    <div class="row">
      <!-- left column -->

      <div class="col-md-8">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Update</h3>
          </div>
          <!-- /.box-header -->               
            {!! csrf_field() !!}          
            <div class="box-body">
              @if(Session::has('message'))
              <p class="alert alert-info" >{{ Session::get('message') }}</p>
              @endif
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
                          <input type="text" class="form-control" name="name[1]" value="{{ $detailArr[1]->name }}">
                        </div>
                        <div class="form-group">                  
                          <label>Description</label>                  
                          <input type="text" class="form-control" name="description[1]" value="{{ $detailArr[1]->description }}">
                        </div>  
                    </div><!--end thong tin co ban--> 
                    <div role="tabpanel" class="tab-pane" id="homeEn">                        
                        <div class="form-group" >                  
                          <label>Name <span class="red-star">*</span></label>
                          <input type="text" class="form-control" name="name[2]" value="{{ $detailArr[2]->name }}">
                        </div>
                        <div class="form-group">                  
                          <label>Description</label>                  
                          <input type="text" class="form-control" name="description[2]" value="{{ $detailArr[2]->description }}">
                        </div>
                    </div><!--end thong tin co ban--> 
                    <div role="tabpanel" class="tab-pane" id="homeVn">                        
                        <div class="form-group" >                  
                          <label>Name <span class="red-star">*</span></label>
                          <input type="text" class="form-control" name="name[3]" value="{{ $detailArr[3]->name }}">
                        </div>
                        <div class="form-group">                  
                          <label>Description</label>                  
                          <input type="text" class="form-control" name="description[3]" value="{{ $detailArr[3]->description }}">
                        </div> 
                    </div><!--end thong tin co ban-->
                    <div role="tabpanel" class="tab-pane " id="settings">
                        <div class="form-group" style="margin-top:10px;margin-bottom:10px">                            
                          <div class="col-md-9">
                            <img id="thumbnail_image" src="{{ old('image_url', $detail->image_url) ? Helper::showImage(old('image_url', $detail->image_url)) : URL::asset('public/admin/dist/img/img.png') }}" class="img-thumbnail" width="150" height="85">
                            
                            <input type="file" id="file-image" style="display:none" />                    
                            <button class="btn btn-default btn-sm btnSingleUpload" data-set="image_url" data-image="thumbnail_image" type="button"><span class="glyphicon glyphicon-upload" aria-hidden="true"></span> Upload</button>
                            <input type="hidden" name="image_url" id="image_url" value="{{ old('image_url', $detail->image_url) }}"/>
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
<input type="hidden" id="route_upload_tmp_image_multiple" value="{{ route('image.tmp-upload-multiple') }}">
<input type="hidden" id="route_upload_tmp_image" value="{{ route('image.tmp-upload') }}">
<style type="text/css">
  .nav-tabs>li.active>a{
    color:#FFF !important;
    background-color: #28AA4A !important;
  }

</style>
@stop
@section('javascript_page')
<script type="text/javascript">
$(document).on('click', '.remove-image', function(){
  if( confirm ("Bạn có chắc chắn không ?")){
    $(this).parents('.col-md-3').remove();
  }
});
    $(document).ready(function(){         
     
      $(".select2").select2();
      $('#dataForm').submit(function(){
        
        if( $('#loai_id').val() == 0){
          swal("Lỗi!", "Chưa chọn danh mục cha", "error");
          return false;
        }
       
        if( $('#cate_id').val() == 0){
          swal("Lỗi!", "Chưa chọn danh mục con", "error");
          return false;
        }  
        $('#btnSave').hide();
        $('#btnLoading').show();
      });
      var editor = CKEDITOR.replace( 'description_vi',{
          language : 'vi',
          height: 300,
          filebrowserBrowseUrl: "{{ URL::asset('/backend/dist/js/kcfinder/browse.php?type=files') }}",
          filebrowserImageBrowseUrl: "{{ URL::asset('/backend/dist/js/kcfinder/browse.php?type=images') }}",
          filebrowserFlashBrowseUrl: "{{ URL::asset('/backend/dist/js/kcfinder/browse.php?type=flash') }}",
          filebrowserUploadUrl: "{{ URL::asset('/backend/dist/js/kcfinder/upload.php?type=files') }}",
          filebrowserImageUploadUrl: "{{ URL::asset('/backend/dist/js/kcfinder/upload.php?type=images') }}",
          filebrowserFlashUploadUrl: "{{ URL::asset('/backend/dist/js/kcfinder/upload.php?type=flash') }}"
      });
      var editor2 = CKEDITOR.replace( 'description_en',{
          language : 'vi',
          height: 300,
          filebrowserBrowseUrl: "{{ URL::asset('/backend/dist/js/kcfinder/browse.php?type=files') }}",
          filebrowserImageBrowseUrl: "{{ URL::asset('/backend/dist/js/kcfinder/browse.php?type=images') }}",
          filebrowserFlashBrowseUrl: "{{ URL::asset('/backend/dist/js/kcfinder/browse.php?type=flash') }}",
          filebrowserUploadUrl: "{{ URL::asset('/backend/dist/js/kcfinder/upload.php?type=files') }}",
          filebrowserImageUploadUrl: "{{ URL::asset('/backend/dist/js/kcfinder/upload.php?type=images') }}",
          filebrowserFlashUploadUrl: "{{ URL::asset('/backend/dist/js/kcfinder/upload.php?type=flash') }}"
      });
      
      $('#btnUploadImage').click(function(){        
        $('#file-image').click();
      }); 
     
      var files = "";
      $('#file-image').change(function(e){
         files = e.target.files;
         
         if(files != ''){
           var dataForm = new FormData();        
          $.each(files, function(key, value) {
             dataForm.append('file[]', value);
          });   
          
          dataForm.append('date_dir', 0);
          dataForm.append('folder', 'tmp');

          $.ajax({
            url: $('#route_upload_tmp_image_multiple').val(),
            type: "POST",
            async: false,      
            data: dataForm,
            processData: false,
            contentType: false,
            success: function (response) {
                $('#div-image').append(response);
                if( $('input.thumb:checked').length == 0){
                  $('input.thumb').eq(0).prop('checked', true);
                }
            },
            error: function(response){                             
                var errors = response.responseJSON;
                for (var key in errors) {
                  
                }
                //$('#btnLoading').hide();
                //$('#btnSave').show();
            }
          });
        }
      });
     

      $('#name_vi').change(function(){
         var name = $.trim( $(this).val() );
         if( name != '' ){
            $.ajax({
              url: $('#route_get_slug').val(),
              type: "POST",
              async: false,      
              data: {
                str : name
              },              
              success: function (response) {
                if( response.str ){                  
                  $('#slug_vi').val( response.str );
                }                
              },
              error: function(response){                             
                  var errors = response.responseJSON;
                  for (var key in errors) {
                    
                  }
                  //$('#btnLoading').hide();
                  //$('#btnSave').show();
              }
            });
         }
      });
      $('#name_en').change(function(){
         var name = $.trim( $(this).val() );
         if( name != '' ){
            $.ajax({
              url: $('#route_get_slug').val(),
              type: "POST",
              async: false,      
              data: {
                str : name
              },              
              success: function (response) {
                if( response.str ){                  
                  $('#slug_en').val( response.str );
                }                
              },
              error: function(response){                             
                  var errors = response.responseJSON;
                  for (var key in errors) {
                    
                  }
                  //$('#btnLoading').hide();
                  //$('#btnSave').show();
              }
            });
         }
      });
    });
    
</script>
@stop
