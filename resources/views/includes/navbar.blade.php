<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <a class="navbar-brand" href="{{ url('dashboard') }}">{{ config('app.name') }}</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="{{ url('dashboard') }}">
          <i class="fa fa-fw fa-dashboard"></i>
          <span class="nav-link-text">Dashboard</span>
        </a>
      </li>

      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Stuffs">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseStuffs" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-stack-exchange"></i>
          <span class="nav-link-text">Stuffs</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseStuffs">
          <li>
            <a href="{{ url('dashboard/stuff') }}">Stuff list</a>
          </li>
          <li>
            <a href="{{ url('dashboard/stuff/category') }}">Category</a>
          </li>
          <li>
            <a href="#">Drop</a>
          </li>
          <li>
            <a href="#">Person In Charge</a>
            </li>
        </ul>
      </li>
      
    </ul>
    <ul class="navbar-nav sidenav-toggler">
      <li class="nav-item">
        <a class="nav-link text-center" id="sidenavToggler">
          <i class="fa fa-fw fa-angle-left"></i>
        </a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
          <i class="fa fa-fw fa-sign-out"></i>Logout</a>
      </li>
    </ul>
  </div>
</nav>
