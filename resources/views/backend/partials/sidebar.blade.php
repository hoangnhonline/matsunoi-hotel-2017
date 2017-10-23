<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ URL::asset('public/admin/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->display_name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->    
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>    
      
        <li {{ in_array(\Request::route()->getName(), ['services.edit', 'services.index', 'services.create']) ? "class=active" : "" }}>
          <a href="{{ route('services.index') }}">
            <i class="fa fa-pencil-square-o"></i> 
            <span>Services</span>          
          </a>       
        </li>
      <li {{ in_array(\Request::route()->getName(), ['nearby.edit', 'nearby.index', 'nearby.create']) ? "class=active" : "" }}>
          <a href="{{ route('nearby.index') }}">
            <i class="fa fa-pencil-square-o"></i> 
            <span>Nearby</span>          
          </a>       
        </li>
        <li {{ in_array(\Request::route()->getName(), ['content.edit', 'content.index', 'content.create']) ? "class=active" : "" }}>
          <a href="{{ route('content.index') }}">
            <i class="fa fa-pencil-square-o"></i> 
            <span>Content</span>          
          </a>       
        </li>      
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<style type="text/css">
  .skin-blue .sidebar-menu>li>.treeview-menu{
    padding-left: 15px !important;
  }
</style>