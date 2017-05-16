<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    <link rel="shortcut icon" href="img/favicon.png">

    <title>{{ config('app.name', 'Duc') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->    
    <link href="{{ asset('hou/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{ asset('hou/css/bootstrap-theme.css') }}" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{ asset('hou/css/elegant-icons-style.css') }}" rel="stylesheet" />
    <link href="{{ asset('hou/css/font-awesome.min.css') }}" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="{{ asset('hou/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css') }}" rel="stylesheet" />
	<link href="{{ asset('hou/assets/fullcalendar/fullcalendar/fullcalendar.css') }}" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="{{ asset('hou/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') }}" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('hou/css/owl.carousel.css') }}" type="text/css">
	<link href="{{ asset('hou/css/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="{{ asset('hou/css/fullcalendar.css') }}">
	<link href="{{ asset('hou/css/widgets.css') }}" rel="stylesheet">
    <link href="{{ asset('hou/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('hou/css/style-responsive.css') }}" rel="stylesheet" />
	<link href="{{ asset('hou/css/xcharts.min.css') }}" rel=" stylesheet">	
	<link href="{{ asset('hou/css/jquery-ui-1.10.4.min.css') }}" rel="stylesheet">
    <!-- =======================================================
        Theme Name: NiceAdmin
        Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
     
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="{{ url('/') }}" class="logo">快递<span class="lite">驿站</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form" method="post" action={{ route('search') }}>
                        {{csrf_field()}}
                            <input class="form-control" placeholder="Search" type="text" name="number">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="{{ asset('thumbnails/'. auth()->user()->avatar) }}">
                            </span>
                            <span class="username">{{ Auth::user()->name }}</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="{{ route('user.create') }}"><i class="icon_profile"></i> 修改头像</a>
                            </li>
  
                            <li>
                                <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="icon_key_alt"></i> 
                                Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                                </form>
                            </li>
 
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

          <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
                <ul class="sidebar-menu">     
                      <li class="active">
                      <a class="" href="{{ route('home') }}">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
{{-- 分公司管理 --}}
                    <li>
                      <a class="" href="{{ route('company.index') }}">
                          <i class="fa fa-tags"></i>
                          <span>旗下分公司</span>
                      </a>
                  </li>
{{-- 分公司管理 --}}
{{-- 分站管理 --}}
               <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="fa fa-tasks"></i>
                          <span>分站管理</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                      @foreach($subComp as $company)
                          <li><a class="" href="{{ route('company.station.index', $company->id) }}">{{  $company->name  }}</a></li>
                      @endforeach
                      </ul>
                  </li>
{{-- 分站管理 --}}
{{-- 揽件管理 --}}
          <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>揽件管理</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="{{ route('thing.index') }}">index</a></li>
                          <li><a class="" href="{{ route('thing.create') }}">添加运输物件</a></li>                          
                      </ul>
                  </li>       
{{-- 揽件管理 --}}
{{-- 发货管理 --}}
                  <li>                     
                      <a class="" href="{{ route('deliver') }}">
                          <i class="icon_piechart"></i>
                          <span>发货管理</span>
                      </a>
                  </li>
{{-- 发货管理 --}}
{{-- 统计功能 --}}
                  <li>
                      <a class="" href="{{ route('statistics') }}">
                          <i class="icon_genius"></i>
                          <span>统计功能</span>
                      </a>
                  </li>
{{-- 统计功能 --}}
       
                </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
    <section id="main-content">
        <section class="wrapper">            
            @yield('main')
        </section>
    </section>
          <!-- javascripts -->
    <script src="{{ asset('hou/js/jquery.js')}}"></script>
    <script src="{{ asset('hou/js/jquery-ui-1.10.4.min.js')}}"></script>
    <script src="{{ asset('hou/js/jquery-1.8.3.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('hou/js/jquery-ui-1.9.2.custom.min.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('hou/js/bootstrap.min.js')}}"></script>
    <!-- nice scroll -->
    <script src="{{ asset('hou/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{ asset('hou/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="{{ asset('hou/assets/jquery-knob/js/jquery.knob.js')}}"></script>
    <script src="{{ asset('hou/js/jquery.sparkline.js')}}" type="text/javascript"></script>
    <script src="{{ asset('hou/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
    <script src="{{ asset('hou/js/owl.carousel.js')}}" ></script>
    <!-- jQuery full calendar -->
    <<script src="{{ asset('hou/js/fullcalendar.min.js')}}"></script> <!-- Full Google Calendar - Calendar -->
    <script src="{{ asset('hou/assets/fullcalendar/fullcalendar/fullcalendar.js')}}"></script>
    <!--script for this page only-->
    <script src="{{ asset('hou/js/calendar-custom.js')}}"></script>
    <script src="{{ asset('hou/js/jquery.rateit.min.js')}}"></script>
    <!-- custom select -->
    <script src="{{ asset('hou/js/jquery.customSelect.min.js')}}" ></script>
    <script src="{{ asset('hou/assets/chart-master/Chart.js')}}"></script>
   
    <!--custome script for all page-->
    <script src="{{ asset('hou/js/scripts.js')}}"></script>
    <!-- custom script for this page-->
    <script src="{{ asset('hou/js/sparkline-chart.js')}}"></script>
    <script src="{{ asset('hou/js/easy-pie-chart.js')}}"></script>
    <script src="{{ asset('hou/js/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{ asset('hou/js/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{ asset('hou/js/xcharts.min.js')}}"></script>
    <script src="{{ asset('hou/js/jquery.autosize.min.js')}}"></script>
    <script src="{{ asset('hou/js/jquery.placeholder.min.js')}}"></script>
    <script src="{{ asset('hou/js/gdp-data.js')}}"></script>  
    <script src="{{ asset('hou/js/morris.min.js')}}"></script>
    <script src="{{ asset('hou/js/sparklines.js')}}"></script>    
    <script src="{{ asset('hou/js/charts.js')}}"></script>
    <script src="{{ asset('hou/js/jquery.slimscroll.min.js')}}"></script>
    <script src="https://cdn.bootcss.com/layer/3.0.1/layer.js"></script>    
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
      
      /* ---------- Map ---------- */
    $(function(){
      $('#map').vectorMap({
        map: 'world_mill_en',
        series: {
          regions: [{
            values: gdpData,
            scale: ['#000', '#000'],
            normalizeFunction: 'polynomial'
          }]
        },
        backgroundColor: '#eef3f7',
        onLabelShow: function(e, el, code){
          el.html(el.html()+' (GDP - '+gdpData[code]+')');
        }
      });
    });

  </script>

  </body>
</html>