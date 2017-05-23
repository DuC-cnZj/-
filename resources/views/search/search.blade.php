<!DOCTYPE HTML>

<html lang="{{ config('app.locale') }}">
    <head>
    <title>快递驿站</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('qian/css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('qian/css/icomoon.css')}}">
    <!-- Themify Icons-->
    <link rel="stylesheet" href="{{asset('qian/css/themify-icons.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('qian/css/bootstrap.css')}}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('qian/css/magnific-popup.css')}}">

    <!-- Bootstrap DateTimePicker -->
    <link rel="stylesheet" href="{{asset('qian/css/bootstrap-datetimepicker.min.css')}}">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{asset('qian/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('qian/css/owl.theme.default.min.css')}}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{asset('qian/css/style.css')}}">

    <!-- Modernizr JS -->
    <script src="{{asset('qian/js/modernizr-2.6.2.min.js')}}"></script>
      <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-default/index.css">
      {{-- <link rel="stylesheet" href="{{asset('qian/css/bootstrap.css')}}"> --}}
 <style>
        @font-face
        {
        font-family: myFirstFont;
        src: url('qian/fonts/duc/duc.ttf');
        }

      .gtco-section  {
                font-family:myFirstFont;
            }
      #gtco-counter
        {
            font-family:myFirstFont;
            font-size: 1.5em;
        }
 </style>

    </head>
    <body>
        
    <div class="gtco-loader"></div>
    
    <div id="page">

    
    <!-- <div class="page-inner"> -->
    <nav class="gtco-nav" role="navigation">
        <div class="gtco-container">
            
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div id="gtco-logo"><a href="{{ url('/') }}">快递驿站 <em>.</em></a></div>
                </div>
                <div class="col-xs-8 text-right menu-1">
                    <ul>
                                @if (Route::has('login'))
                                    <!-- <div class="top-right links"> -->
                                        @if (Auth::check())
                                            <li><a href="{{ url('/home') }}">Home</a></li>
                                        @else
                                            <li><a href="{{ url('/login') }}">Login</a></li>
                                            <li><a href="{{ url('/register') }}">Register</a></li>
                                        @endif
                                    <!-- </div> -->
                                @endif
                    </ul>   
                </div>
            </div>
            
        </div>
    </nav>
    
    <header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(qian/images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
     
        <div class="panel panel-info" style="  position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);z-index: 100">
            <div class="panel-heading">
                <h3 class="panel-title">快件编号：{{ $good->number }}----快递员 {{ $good->courier->name ?? '正在'}} 运送中</h3>
            </div>
            <div class="panel-body" style="width: 1200px;height: 250px">
                   <div id="app" class="container col-md-offset-1">
                          {{-- <el-step title="出发站" ></el-step> --}}
                          @foreach($collection->chunk(5) as $arra)
                                <div class="row"> 
                        <el-steps :space="200" :active="{{$count}}" finish-status="success" >
                                @foreach($arra as $k => $a)
                                     <el-step title="{{ $a }}" description=""></el-step>
                                 @endforeach
                        </el-steps>
                                 </div>
                          @endforeach
                          {{-- <el-step ></el-step> --}}
                </div>
            </div>
        </div>
    </header>

    
    
    <div class="gtco-section">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                    <h2 class="cursive-font primary-color">驿站服务</h2>
                    <p>为了保障生鲜类快件的配送时效和商品品质，实现同类产品优先配载、优先派送，面向寄递生鲜快件的客户推出的专属快递服务。</p>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="{{  asset('qian/images/img_1.jpg') }}" class="fh5co-card-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="{{ asset('qian/images/img_1.jpg') }}" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>快递服务</h2>
                            <p>顺丰依托自有丰富运力资源，通过多项不同的快递产品和增值服务...</p>
                            {{-- <p><span class="price cursive-font">$19.15</span></p> --}}
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="{{  asset('qian/images/img_2.jpg') }}" class="fh5co-card-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="{{ asset('qian/images/img_2.jpg') }}" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>Cheese and Garlic Toast</h2>
                            <p>来满足客户多样化、个性化的寄件需求通过推出多类收益风险...</p>
                            {{-- <p><span class="price cursive-font">$20.99</span></p> --}}
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="{{  asset('qian/images/img_3.jpg') }}" class="fh5co-card-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="{{ asset('qian/images/img_3.jpg') }}" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>理财</h2>
                            <p>不同的理财产品，为顺手付的用户提供专业可信赖的保值、增值理财服务...</p>
                            {{-- <p><span class="price cursive-font">$8.99</span></p> --}}

                        </div>
                    </a>
                </div>


                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="{{  asset('qian/images/img_4.jpg') }}" class="fh5co-card-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="{{ asset('qian/images/img_4.jpg') }}" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>Organic Egg</h2>
                            <p>顺丰依托自身强大的仓储和运输网络资源为食品&医药冷链客户..</p>
                            {{-- <p><span class="price cursive-font">$12.99</span></p> --}}
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="{{  asset('qian/images/img_5.jpg') }}" class="fh5co-card-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="{{ asset('qian/images/img_5.jpg') }}" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>仓储服务</h2>
                            <p>顺丰依托自身强大的仓储和运输网络资源，为电商客户打造的一站式物流服务。</p>
                            {{-- <p><span class="price cursive-font">$23.10</span></p> --}}
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="{{  asset('qian/images/img_6.jpg') }}" class="fh5co-card-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="{{ asset('qian/images/img_6.jpg') }}" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>冷运服务</h2>
                            <p>顺丰依托强大的冷链运输网和温控管理系统，提供专业的冷运服务...</p>
                            {{-- <p><span class="price cursive-font">$5.59</span></p> --}}
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
    
    <div id="gtco-features">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                    <h2 class="cursive-font">Our Services</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="ti-face-smile"></i>
                        </span>
                        <h3>Happy People</h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="ti-thought"></i>
                        </span>
                        <h3>Creative Culinary</h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="ti-truck"></i>
                        </span>
                        <h3>Food Delivery</h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    </div>
                </div>
                

            </div>
        </div>
    </div>


    <div class="gtco-cover gtco-cover-sm" style="background-image: url(qian/images/img_bg_1.jpg)"  data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="gtco-container text-center">
            <div class="display-t">
                <div class="display-tc">
                    <h1>&ldquo; Their high quality of service makes me back over and over again!&rdquo;</h1>
                    <p>&mdash; John Doe, CEO of XYZ Co.</p>
                </div>  
            </div>
        </div>
    </div>

    <div id="gtco-counter" class="gtco-section">
        <div class="gtco-container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                    <h2 class="cursive-font primary-color">Fun Facts</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>

            <div class="row">
                
                <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="feature-center">
                        <span class="counter js-counter" data-from="0" data-to="500" data-speed="5000" data-refresh-interval="50">1</span>
                        <span class="counter-label">旗下公司</span>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="feature-center">
                        <span class="counter js-counter" data-from="0" data-to="43" data-speed="5000" data-refresh-interval="50">1</span>
                        <span class="counter-label">运输国家</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="feature-center">
                        <span class="counter js-counter" data-from="0" data-to="26" data-speed="5000" data-refresh-interval="50">1</span>
                        <span class="counter-label">运输省市</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="feature-center">
                        <span class="counter js-counter" data-from="0" data-to="1996" data-speed="5000" data-refresh-interval="50">1</span>
                        <span class="counter-label">创建于</span>

                    </div>
                </div>
                    
            </div>
        </div>
    </div>


    <footer id="gtco-footer" role="contentinfo" style="background-image: url(qian/images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row row-pb-md">

                

                
                <div class="col-md-12 text-center">
                    <div class="gtco-widget">
                        <h3>Get In Touch</h3>
                        <ul class="gtco-quick-contact">
                            <li><a href="#"><i class="icon-phone"></i> +1 234 567 890</a></li>
                            <li><a href="#"><i class="icon-mail2"></i> info@GetTemplates.co</a></li>
                            <li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
                        </ul>
                    </div>
                    <div class="gtco-widget">
                        <h3>Get Social</h3>
                        <ul class="gtco-social-icons ">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>

            

        </div>
    </footer>
    <!-- </div> -->

    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>
    
    <!-- jQuery -->
    <script src="{{asset('qian/js/jquery.min.js')}}"></script>
    <!-- jQuery Easing -->
    <script src="{{asset('qian/js/jquery.easing.1.3.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('qian/js/bootstrap.min.js')}}"></script>
    <!-- Waypoints -->
    <script src="{{asset('qian/js/jquery.waypoints.min.js')}}"></script>
    <!-- Carousel -->
    <script src="{{asset('qian/js/owl.carousel.min.js')}}"></script>
    <!-- countTo -->
    <script src="{{asset('qian/js/jquery.countTo.js')}}"></script>

    <!-- Stellar Parallax -->
    <script src="{{asset('qian/js/jquery.stellar.min.js')}}"></script>

    <!-- Magnific Popup -->
    <script src="{{asset('qian/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('qian/js/magnific-popup-options.js')}}"></script>
    
    <script src="{{asset('qian/js/moment.min.js')}}"></script>
    <script src="{{asset('qian/js/bootstrap-datetimepicker.min.js')}}"></script>


    <!-- Main -->
    <script src="{{asset('qian/js/main.js')}}"></script>

      <!-- 先引入 Vue -->
  <script src="https://unpkg.com/vue/dist/vue.js"></script>
<script src="{{asset('qian/js/bootstrap.min.js')}}"></script>
  <!-- 引入组件库 -->
  <script src="https://unpkg.com/element-ui/lib/index.js"></script>
  <script>
    new Vue({
      el: '#app', 
  })
  </script>
    </body>
</html>

