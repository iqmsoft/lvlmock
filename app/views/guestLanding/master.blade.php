<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title>Larvel Test Application</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- END META SECTION -->
        {{ HTML::style('temp/css/revolution-slider/extralayers.css') }}
		{{ HTML::style('temp/css/revolution-slider/settings.css') }}
		{{ HTML::style('temp/css/styles.css') }}
                          

    </head>
    <body>
        <!-- page container -->
        <div class="page-container">
            
            <!-- page header -->
            <div class="page-header">
                
                <!-- page header holder -->
                <div class="page-header-holder">
                    
                    <!-- page logo -->
                    <div class="logo">
                        <a href="#"></a>
                    </div>
                    <!-- ./page logo -->
                    

                    <!-- search -->
                    <div class="search">
                        <div class="search-button"><span class="fa fa-search"></span></div>
                        <div class="search-container animated fadeInDown">
                            <form action="#" method="post">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search..."/>
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><span class="fa fa-search"></span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- ./search -->

                    <!-- nav mobile bars -->
                    <div class="navigation-toggle">
                        <div class="navigation-toggle-button"><span class="fa fa-bars"></span></div>
                    </div>
                    <!-- ./nav mobile bars -->
                    
                    <!-- navigation -->
                    <ul class="navigation">
                        <li><a href="#">Tour</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Customers</a></li>
                        <li><a href="{{ URL::route('login') }}">Sign In</a> </li>
                        <li><a href="#">Sign Up</a></li>
                    </ul>
                    <!-- ./navigation -->                        

                    
                </div>
                <!-- ./page header holder -->
                
            </div>
            <!-- ./page header -->
            
            <!-- page content -->
            <div class="page-content">
                
                
                <!-- revolution slider -->
                <div class="banner-container">
                    <div class="banner">

                        <ul>
                            
                            <li data-transition="fade" data-slotamount="1" data-masterspeed="500"  data-saveperformance="on">
                                <img src="temp/img/backgrounds/bg-2.jpg" />
                                
                                <div class="tp-caption lft customout rs-parallaxlevel-0"
                                    data-x="150"
                                    data-y="80" 
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="500"
                                    data-start="700"
                                    data-easing="Power3.easeInOut"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    style="z-index: 2;">
                                    <img src="temp/assets/slider-layers/atlant-title.png" alt="Atlant"/>
                                </div>
                                
                                
                                <div class="tp-caption lft customout rs-parallaxlevel-0"
                                    data-x="550"
                                    data-y="230" 
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="700"
                                    data-start="1200"
                                    data-easing="Power3.easeInOut"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    style="z-index: 3;">
                                    <img src="temp/assets/slider-layers/atlant_monitor.png" alt="Atlant"/>
                                </div>
                                
                                <div class="tp-caption black_thin_34 customin tp-resizeme rs-parallaxlevel-0"
                                    data-x="0"
                                    data-y="230" 
                                    data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                    data-speed="500"
                                    data-start="1000"
                                    data-easing="Back.easeOut"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    style="z-index: 4;">
                                    <img src="temp/assets/slider-layers/atlant_responsive.png" alt="Atlant"/>
                                </div>
                                
                                <div class="tp-caption black_thin_34 customin tp-resizeme rs-parallaxlevel-0"
                                    data-x="0"
                                    data-y="330" 
                                    data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                    data-speed="500"
                                    data-start="1100"
                                    data-easing="Back.easeOut"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    style="z-index: 5;">
                                    <img src="temp/assets/slider-layers/atlant_tempalte.png" alt="Atlant"/>
                                </div>
                                
                            </li>                                    
                                                        
                          <!--  <li data-transition="fade" data-slotamount="1" data-masterspeed="700" >
                                <img src="temp/assets/video/video_typing_cover.jpg"  alt="video_typing_cover"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">                                
                                
                                <div class="tp-caption tp-fade fadeout fullscreenvideo"
                                    data-x="0"
                                    data-y="0"
                                    data-speed="1000"
                                    data-start="1100"
                                    data-easing="Power4.easeOut"
                                    data-elementdelay="0.01"
                                    data-endelementdelay="0.1"
                                    data-endspeed="1500"
                                    data-endeasing="Power4.easeIn"
                                    data-autoplay="true"
                                    data-autoplayonlyfirsttime="false"
                                    data-nextslideatend="true"
                                    data-volume="mute" data-forceCover="1" data-aspectratio="16:9" data-forcerewind="on" style="z-index: 2;">

                                    <video class="" preload="none" width="100%" height="100%" poster="assets/video/video_typing_cover.jpg"> 
                                        <source src='temp/assets/video/computer_typing.mp4' type='video/mp4'/>
                                        <source src='temp/assets/video/computer_typing.webm' type='video/webm'/>
                                    </video>
                                </div>
                                
                                <div class="tp-caption customin ltl"
                                        data-x="600"
                                        data-y="280" 
                                        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                        data-speed="500"
                                        data-start="1500"
                                        data-easing="Power4.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.01"
                                        data-endelementdelay="0.1"
                                        data-endspeed="1000"
                                        data-endeasing="Power4.easeIn"
                                        style="z-index: 3;">
                                        <img src="temp/assets/slider-layers/second_1.png"/>
                                </div>                                
                                
                                <div class="tp-caption customin ltl"
                                        data-x="600"
                                        data-y="320" 
                                        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                        data-speed="500"
                                        data-start="1700"
                                        data-easing="Power4.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.01"
                                        data-endelementdelay="0.1"
                                        data-endspeed="1000"
                                        data-endeasing="Power4.easeIn"
                                        style="z-index: 3;">
                                        <img src="temp/assets/slider-layers/second_2.png"/>
                                </div>
                                
                                <div class="tp-caption customin ltl"
                                        data-x="600"
                                        data-y="362" 
                                        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                        data-speed="500"
                                        data-start="1900"
                                        data-easing="Power4.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.01"
                                        data-endelementdelay="0.1"
                                        data-endspeed="1000"
                                        data-endeasing="Power4.easeIn"
                                        style="z-index: 3;">
                                        <img src="temp/assets/slider-layers/second_3.png"/>
                                </div>
                                
                                <div class="tp-caption customin ltl"
                                        data-x="600"
                                        data-y="404" 
                                        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                        data-speed="500"
                                        data-start="2100"
                                        data-easing="Power4.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.01"
                                        data-endelementdelay="0.1"
                                        data-endspeed="1000"
                                        data-endeasing="Power4.easeIn"
                                        style="z-index: 3;">
                                        <img src="temp/assets/slider-layers/second_4.png"/>
                                </div>
                                
                                <div class="tp-caption customin ltl"
                                        data-x="600"
                                        data-y="446" 
                                        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                        data-speed="500"
                                        data-start="2200"
                                        data-easing="Power4.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.01"
                                        data-endelementdelay="0.1"
                                        data-endspeed="1000"
                                        data-endeasing="Power4.easeIn"
                                        style="z-index: 3;">
                                        <img src="temp/assets/slider-layers/second_5.png"/>
                                </div>
                                
                                <div class="tp-caption customin ltl"
                                        data-x="600"
                                        data-y="488" 
                                        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                        data-speed="500"
                                        data-start="2400"
                                        data-easing="Power4.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.01"
                                        data-endelementdelay="0.1"
                                        data-endspeed="1000"
                                        data-endeasing="Power4.easeIn"
                                        style="z-index: 3;">
                                        <img src="temp/assets/slider-layers/second_6.png"/>
                                </div>
                                
                            </li>-->
                        </ul>
                        
                    </div>
                </div>                        
                <!-- ./revolution slider -->                        
                
                                     

                <!-- page content wrapper -->
                <div class="page-content-wrap bg-img-1">

                    <div class="divider"><div class="box"><span class="fa fa-angle-down"></span></div></div>                    
                    
                    <!-- page content holder -->
                    <div class="page-content-holder">
                        
                        <div class="row">
                            <div class="col-md-8 this-animate" data-animate="fadeInLeft">
                                
                                <div class="block-heading block-heading-centralized">
                                    <h2 class="heading-underline">Optimized for mobile devices</h2>
                                    <div class="block-heading-text">
                                        Proin luctus nulla fringilla massa euismod commodo. Donec sit amet elementum libero. Curabitur ut lorem id tellus malesuada tincidunt et eget purus. Cras molestie, velit quis viverra ultrices, tortor erat suscipit arcu, a ullamcorper neque lorem et massa. Praesent facilisis tellus nec rutrum luctus. Curabitur non venenatis metus, vitae rhoncus risus. Donec quis mattis est. Proin ut augue vel odio condimentum ornare.
                                    </div>
                                </div>
                                <div class="block this-animate" data-animate="fadeInLeft">
                                    <img src="temp/assets/atlant_technologies.png" class="img-responsive"/>
                                </div>
                            </div>
                            <div class="col-md-4 this-animate text-center" data-animate="fadeInRight">
                                <img src="temp/assets/atlant_responsive.png" class="img-responsive-mobile"/>
                            </div>
                        </div>
                        
                        
                        
                    </div>
                    <!-- ./page content holder -->
                </div>
                <!-- ./page content wrapper -->                
                
                <!-- page content wrapper -->
                <div class="page-content-wrap bg-texture-1 bg-dark light-elements">
                    
                    <div class="divider"><div class="box"><span class="fa fa-angle-down"></span></div></div>
                    
                    <!-- page content holder -->
                    <div class="page-content-holder">
                                                
                        <div class="row">
                            
                            <div class="col-md-4">                                
                                <div class="text-column text-column-centralized tex-column-icon-lg this-animate" data-animate="fadeInLeft">
                                    <div class="text-column-icon">
                                        <span class="fa fa-support"></span>
                                    </div>
                                    <h4>Free Updates & Support</h4>
                                    <div class="text-column-info">
                                        We provide <strong>free</strong> support for each customer who purchase template. We will do our best to help you.
                                    </div>
                                </div>                                
                            </div>
                            
                            <div class="col-md-4">                                
                                <div class="text-column text-column-centralized tex-column-icon-lg this-animate" data-animate="fadeInUp">
                                    <div class="text-column-icon">
                                        <span class="fa fa-expand"></span>
                                    </div>
                                    <h4>Responsive & Retina Ready</h4>
                                    <div class="text-column-info">
                                        Template builded using newest technologies, that gives you possibilities use it wherever you want.
                                    </div>
                                </div>                                
                            </div>
                            
                            <div class="col-md-4">                                
                                <div class="text-column text-column-centralized tex-column-icon-lg this-animate" data-animate="fadeInRight">
                                    <div class="text-column-icon">
                                        <span class="fa fa-clock-o"></span>
                                    </div>
                                    <h4>Time Saver</h4>
                                    <div class="text-column-info">
                                        With this template you will save really many time. And it's <strong>only $23</strong>.
                                    </div>
                                </div>                                
                            </div>
                            
                        </div>
                        
                    </div>
                    <!-- ./page content holder -->
                </div>
                <!-- ./page content wrapper -->

                <!-- page content wrapper -->                
                <div class="page-content-wrap bg-light bg-texture-1">
                    
                    <div class="divider"><div class="box"><span class="fa fa-angle-down"></span></div></div>                    
                    
                    <!-- page content holder -->
                    <div class="page-content-holder">                        
                        
                        <div class="quote this-animate" data-animate="fadeInDown">
                            <div class="row">
                                <div class="col-md-9">
                                    <h3>Responsive Bootstrap Admin Template</h3>
                                </div>
                                <div class="col-md-3">
                                    
                                </div>
                            </div>
                        </div>                        
                        
                    </div>
                    <!-- ./page content holder -->
                </div>
                <!-- ./page content wrapper -->                    
                                    
               
            </div>
            <!-- ./page content -->
            
            <!-- page footer -->
            <div class="page-footer">
                
                <!-- page footer wrap -->
                <div class="page-footer-wrap bg-dark-gray">
                    <!-- page footer holder -->
                    <div class="page-footer-holder page-footer-holder-main">
                                                
                        <div class="row">
                            
                            <!-- about -->
                            <div class="col-md-3">
                                <h3>About Template</h3>
                                <p>Lorem ipsum dolor natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                            </div>
                            <!-- ./about -->
                            
                            <!-- quick links -->
                            <div class="col-md-3">
                                <h3>Quick links</h3>
                                
                                <div class="list-links">
                                    <a href="#">Home</a>                                    
                                    <a href="#">Pages</a>
                                    <a href="#">Portfolio</a>
                                    <a href="#">Shortcodes</a>
                                </div>                                
                            </div>
                            <!-- ./quick links -->
                            
                            <!-- recent tweets -->
                            <div class="col-md-3">
                                <h3>Recent Tweets</h3>
                                
                                <div class="list-with-icon small">
                                    <div class="item">
                                        <div class="icon">
                                            <span class="fa fa-twitter"></span>
                                        </div>
                                        <div class="text">
                                            <a href="#">@JohnDoe</a> Hello, here is my new front-end template. Check it out
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="icon">
                                            <span class="fa fa-twitter"></span>
                                        </div>
                                        <div class="text">
                                            <a href="#">@Aqvatarius</a> Release of new update for Atlant is done and ready to use
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="icon">
                                            <span class="fa fa-twitter"></span>
                                        </div>
                                        <div class="text">
                                            <a href="#">@Aqvatarius</a> Check out my new admin template Atlant, it's realy awesome template
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- ./recent tweets -->
                            
                            <!-- contacts -->
                            <div class="col-md-3">
                                <h3>Contacts</h3>
                                
                                <div class="footer-contacts">
                                    <div class="fc-row">
                                        <span class="fa fa-home"></span>
                                        000 StreetName, Suite 111,<br/> 
                                        City Name, ST 01234
                                    </div>
                                    <div class="fc-row">
                                        <span class="fa fa-phone"></span>
                                        (123) 456-7890
                                    </div>
                                    <div class="fc-row">
                                        <span class="fa fa-envelope"></span>
                                        <strong>John Doe</strong><br>
                                        <a href="mailto:#">johndoe@domain.com</a>
                                    </div>                                    
                                </div>
                                
                                <h3>Subscribe</h3>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Your email"/>
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><span class="fa fa-paper-plane"></span></button>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- ./contacts -->
                            
                        </div>
                        
                    </div>
                    <!-- ./page footer holder -->
                </div>
                <!-- ./page footer wrap -->
                
                <!-- page footer wrap -->
                <div class="page-footer-wrap bg-darken-gray">
                    <!-- page footer holder -->
                    <div class="page-footer-holder">
                        
                        <!-- copyright -->
                        <div class="copyright">
                            &copy; <?php echo date('Y'); ?>  All Rights Reserved                            
                        </div>
                        <!-- ./copyright -->
                        
                        <!-- social links -->
                        <div class="social-links">
                            <a href="#"><span class="fa fa-facebook"></span></a>
                            <a href="#"><span class="fa fa-twitter"></span></a>
                            <a href="#"><span class="fa fa-google-plus"></span></a>
                            <a href="#"><span class="fa fa-linkedin"></span></a>
                            <a href="#"><span class="fa fa-vimeo-square"></span></a>
                            <a href="#"><span class="fa fa-dribbble"></span></a>
                        </div>                        
                        <!-- ./social links -->
                        
                    </div>
                    <!-- ./page footer holder -->
                </div>
                <!-- ./page footer wrap -->
                
            </div>
            <!-- ./page footer -->
            
        </div>        
        <!-- ./page container -->
        
        <!-- page scripts -->
		{{ HTML::script('temp/js/plugins/jquery/jquery.min.js') }}
		{{ HTML::script('temp/js/plugins/bootstrap/bootstrap.min.js') }}
		{{ HTML::script('temp/js/jplugins/mixitup/jquery.mixitup.js') }}
		{{ HTML::script('temp/js/plugins/appear/jquery.appear.js') }}
		{{ HTML::script('temp/js/plugins/revolution-slider/jquery.themepunch.tools.min.js') }}
		{{ HTML::script('temp/js/plugins/revolution-slider/jquery.themepunch.revolution.min.js') }}
		{{ HTML::script('temp/js/actions.js') }}
		{{ HTML::script('temp/js/slider.js') }}              
               
        
        <!-- ./page scripts -->
    </body>
</html>





