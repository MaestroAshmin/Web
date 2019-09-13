<!DOCTYPE html>
<html lang="en">
<head>
    @include("dashboard.common.style")
</head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">  
              @include('dashboard.common.header')
              @include('dashboard.common.sidebar')
          </div>
        </div>
          @include('dashboard.common.top_navigation')

          <div class="right_col" role="main">
              <div class="row tittle_count">
                  @yield('content')
              </div>
          </div>
          @include('dashboard.common.footer')
      </div>
    </div>
    @include('dashboard.common.script')
  </body>
</html>  