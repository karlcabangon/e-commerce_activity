<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Guitar Shop</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<!--<script src="js/jquery.easydropdown.js"></script>-->
<!--start slider -->
<link rel="stylesheet" href="css/fwslider.css" media="all">
<script src="js/jquery-ui.min.js"></script>
<script src="js/fwslider.js"></script>
<!--end slider -->
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
</head>
<body>
    <div class="header">
    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"              aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu" align="center">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="   display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                 <div class="header-left">
                     <div class="logo">
                        <a href="/home"><img src="images/logo4.png" alt=""/></a>
                     </div>                    
                    <div class="clear"></div>
                </div>
                <div class="header_right">
                  <!-- start search-->
                      <div class="search-box">
                            <div id="sb-search" class="sb-search">
                                <form>
                                    <input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
                                    <input class="sb-search-submit" type="submit" value="">
                                    <span class="sb-icon-search"> </span>
                                </form>
                            </div>
                        </div>
                        <!----search-scripts---->
            <script src="js/classie.js"></script>
            <script src="js/uisearch.js"></script>
            <script>
              new UISearch( document.getElementById( 'sb-search' ) );
            </script>
            <!----//search-scripts---->
            <ul class="icon1 sub-icon1 profile_img">
              <div class="product_control_buttons">
               <div class="clear"></div>
               <div class="check_button">
               <div class="clear"></div>
              </div>
              <div class="clear"></div>
            </ul>
           </li>
           </ul>
               <div class="clear"></div>
         </div>
        </div>
     </div>
      </div>
  </div>
    <div class="features">
        <div class="container">
            <h3 class="m_3">PRODUCTS</h3>
            <div class="close_but"><i class="close1"> </i></div>
              @foreach ($new_prod as $prod_cont)
              <div class="row">
                <div class="col-md-3 top_box">
                  <div class="view view-ninth"><a href="single.html">
                    <img src="images/p1.jpg" class="img-responsive" alt=""/>
                    <div class="mask mask-1"> </div>
                    <div class="mask mask-2"> </div>
                      <div class="content">
                        <h2>{{$prod_cont->name}}</h2>{{$prod_cont->description}}<br><br>Php {{$prod_cont->price}}.00          
                      </div>
                   </a> </div
                  </div>
                  <ul class="buttons">
                    <li class="cart"><a href="addtocart/{{ $prod_cont->id}}">ADD TO CART</a></li>
                    <div class="clear"> </div><br><br><br><br><br><br>
                  </ul>
                </div>
                @endforeach
              <div align="center">  
                <div class="container">

                    <h3 class="m_3">items on cart ({{ $show_count }})</h3>
                      <a href="/viewcart">view cart</a>
                        </div><br><br><br>
                        <div class="footer">
                        <div class="container">
                     <div class="clear"></div>
                  </div>
              </div>
           </div>
        </div>
  </div>
                   
<script src="{{ asset('js/app.js') }}"></script>
</body> 
</html>
