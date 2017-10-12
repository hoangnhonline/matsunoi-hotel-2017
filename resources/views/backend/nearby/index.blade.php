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
    <li><a href="{{ route( 'nearby.index' ) }}">Nearby</a></li>
    <li class="active">List</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      @if(Session::has('message'))
      <p class="alert alert-info" >{{ Session::get('message') }}</p>
      @endif
      <a href="{{ route('nearby.create') }}" class="btn btn-info btn-sm" style="margin-bottom:5px">Add new</a>
    
      <div class="box">

        <div class="box-header with-border">
          <h3 class="box-title">Nearby List</h3>
        </div>
        
        <!-- /.box-header -->
        <div class="box-body">
          
          <table class="table table-bordered" id="table-list-data">
            <tr>
              <th style="width: 1%">#</th>
              
              <th width="170px">Image</th>              
              <th>Name</th>              
              <th width="1%;white-space:nowrap">Action</th>
            </tr>
            <tbody>
            @if( $items->count() > 0 )
              <?php $i = 0; ?>
              @foreach( $items as $item )
                <?php $i ++; 

                ?>
              <tr id="row-{{ $item->id }}">
                <td><span class="order">{{ $i }}</span></td>               
                <td>
                  <img class="img-thumbnail lazy" width="150" data-original="{{ $item->image_url ? Helper::showImage($item->image_url) : URL::asset('admin/dist/img/no-image.jpg') }}" alt="{{ $item->name }}" title="{{ $item->name }}" />
                </td>
                <td>                  
                  <a style="color:#333;font-weight:bold" href="{{ route( 'nearby.edit', [ 'id' => $item->id ]) }}">{{ $item->name }}</a>   
                  <br>
                  {{ $item->description }}               
                </td>
                <td style="white-space:nowrap; text-align:right">                                 
                  <a href="{{ route( 'nearby.edit', [ 'id' => $item->id ]) }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>                 

                  <a onclick="return callDelete('{{ $item->name_vi }}','{{ route( 'nearby.destroy', [ 'id' => $item->id ]) }}');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>

                </td>
              </tr> 
              @endforeach
            @else
            <tr>
              <td colspan="9">No data found.</td>
            </tr>
            @endif

          </tbody>
          </table>
         
        </div>        
      </div>
      <!-- /.box -->     
    </div>
    <!-- /.col -->  
  </div> 
</section>
<!-- /.content -->
</div>
<style type="text/css">
#searchForm div{
  margin-right: 7px;
}
</style>
@stop
@section('javascript_page')
<script type="text/javascript">
function callDelete(name, url){  
  swal({
    title: 'Are you sure you want to delete :  "' + name +'"?',
    text: "Data can't restore.",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes'
  }).then(function() {
    location.href= url;
  })
  return flag;
}
$(document).ready(function(){
  $('input.submitForm').click(function(){
    var obj = $(this);
    if(obj.prop('checked') == true){
      obj.val(1);      
    }else{
      obj.val(0);
    } 
    obj.parent().parent().parent().submit(); 
  });
  
  $('#loai_id').change(function(){
    $('#cate_id').val('');
    $('#searchForm').submit();
  });
  $('#cate_id').change(function(){
    $('#searchForm').submit();
  });
  $('#table-list-data tbody').sortable({
        placeholder: 'placeholder',
        handle: ".move",
        start: function (event, ui) {
                ui.item.toggleClass("highlight");
        },
        stop: function (event, ui) {
                ui.item.toggleClass("highlight");
        },          
        axis: "y",
        update: function() {
            var rows = $('#table-list-data tbody tr');
            var strOrder = '';
            var strTemp = '';
            for (var i=0; i<rows.length; i++) {
                strTemp = rows[i].id;
                strOrder += strTemp.replace('row-','') + ";";
            }     
            updateOrder("san_pham", strOrder);
        }
    });
});
function updateOrder(table, strOrder){
  $.ajax({
      url: $('#route_update_order').val(),
      type: "POST",
      async: false,
      data: {          
          str_order : strOrder,
          table : table
      },
      success: function(data){
          var countRow = $('#table-list-data tbody tr span.order').length;
          for(var i = 0 ; i < countRow ; i ++ ){
              $('span.order').eq(i).html(i+1);
          }                        
      }
  });
}
</script>
@stop