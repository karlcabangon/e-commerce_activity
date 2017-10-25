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
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu" align="center">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
                        <a href="home"><img src="images/logo4.png" alt=""/></a>
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
  <div align="center" style="margin-top: 50px;" > 

            <h4 ><b>Please fill up the following</b></h4>
                <form action="/shippinginfo" method="get" style="margin-top: 30px;">

                  First name:&nbsp;&nbsp;&nbsp;&nbsp;<input style="margin-bottom:5px;" type="text" name="firstname" required ><br>

                  Last name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input style="margin-bottom:5px;" type="text" name="lastname" required ><br>
                  
                  Complete Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input style="margin-bottom:5px;" type="text" name="completeaddress" required ><br>

                  contact number:&nbsp;&nbsp;<input style="margin-bottom:5px;" type="number" name="contactnumber" maxlength="15" required ><br><br>

                 <h5><b>Select method</b></h5>
                  cash on delivery &nbsp; <input type="radio" name="paymentmethod" value="cash on delivery" required>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; paypal &nbsp; <input type="radio" name="paymentmethod" value="paypal" required><br><br><br>
                  <button style="margin-bottom:10px;" type="submit"><b>Proceed</button>
                </form>
                <div>
                    <a href="backtocart"><b>Back to Cart</button></b></a>
      </div>
    </div>
  </ul>
  </div>
  </div>
  </div>
  </div>
  </div>
  <script src="{{ asset('js/app.js') }}"></script>
  </body>
  </html>

