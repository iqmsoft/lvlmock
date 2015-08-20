<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title>Larvel Test Application</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- END META SECTION -->
        
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
                
                <!-- page content wrapper -->
                <div class="page-content-wrap bg-light">
                    <!-- page content holder -->
                    <div class="page-content-holder no-padding">
                        <!-- page title -->
                        <div class="page-title">                            
                            <h1>Sign in to your account</h1>
                            <!-- breadcrumbs -->
                            <ul class="breadcrumb">
                                <li><a href="{{ URL::route('home') }}">Home</a></li>
                                
                                <li class="active">Sign In</li>
                            </ul>               
                            <!-- ./breadcrumbs -->
                        </div>
                        <!-- ./page title -->
                    </div>
                    <!-- ./page content holder -->
                </div>
                <!-- ./page content wrapper -->
                
                               
                
                
                <!-- page content wrapper -->
                <div class="page-content-wrap">                    
                    
                    <div class="divider"><div class="box"><span class="fa fa-angle-down"></span></div></div>                    
                    
                    <!-- page content holder -->
                    <div class="page-content-holder">
                    
                        <div class="row">
						<div class="col-md-2"></div>
                            <div class="col-md-7 this-animate" data-animate="fadeInLeft">
                                
                                <div class="text-column">
                                    <h4>Sign in to your account</h4>
                                    <div class="text-column-info">
                                        Proin luctus nulla fringilla massa euismod commodo. Donec sit amet elementum libero. Curabitur ut lorem id tellus malesuada tincidunt et eget purus. 
                                    </div>
                                </div>
                                
                                <div class="row">
								{{ Form::open(array('url' => 'loginAttempt')) }}
								@if($errors->any())
                        <div class="alert alert-error">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            {{ implode('', $errors->all('
                            <li class="error" style="color:#f00;">:message</li>
                            '))}}
                        </div>
                        @endif                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>E-mail <span class="text-hightlight">*</span></label>
                                             {{ Form::text('email', '', array('placeholder' => 'emailaddress', 'class' =>
                                    'form-control')) }} 
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Password <span class="text-hightlight">*</span></label>
                                             {{ Form::password('password', array('placeholder' => 'Password', 'class' =>
                                    'form-control')) }}
                                        </div>
										</div>
										<div class="col-md-12">
                                        
                                         {{ Form::submit('Login', array('class' => 'btn btn-success')) }}
                                    {{ Form::token() }}
                                    </div>
									{{ Form::close() }}
                                </div>
                                
                            </div>
                           <div class="col-md-2"></div>
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
        {{ HTML::script('temp/js/actions.js') }}   
                      
        <!-- ./page scripts -->
    </body>
</html>






