<nav id="sidebar">
  <!-- Sidebar Header-->
  <div class="sidebar-header d-flex align-items-center">
    <div class="avatar"><img src="{{asset('Admin/img/avatar-6.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
    <div class="title">
      <h1 class="h5">Manabendra Das</h1>
      <p>Admin</p>
    </div>
  </div>
  <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
  <ul class="list-unstyled">
    <li class="active"><a href="{{asset('/home')}}"> <i class="icon-home"></i>Home </a></li>

    <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Car Manage</a>
      <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
        <li><a href="{{url('car_page')}}">Add Cars</a></li>
        <li><a href="{{url('CarListPage')}}">Car List</a></li>
        <li><a href="#">Page</a></li>
      </ul>
    </li>

    <li><a href="{{url('bookings')}}"> <i class="icon-grid"></i>Booking </a></li>



  </ul>

</nav>