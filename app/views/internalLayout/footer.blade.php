 <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="{{URL::route('logout')}}" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
		
        <audio id="audio-alert" src="admin/audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="admin/audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                  
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
		                 
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->  
		{{ HTML::script('admin/js/plugins/bootstrap/bootstrap.min.js') }}  
		{{ HTML::script('admin/js/plugins/icheck/icheck.min.js') }}              
              {{ HTML::script('admin/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js') }}  
       {{ HTML::script('admin/js/plugins/scrolltotop/scrolltopcontrol.js') }}   
        {{ HTML::script('admin/js/plugins/morris/raphael-min.js') }}   
        
       {{ HTML::script('admin/js/plugins/morris/morris.min.js') }} 
	   {{ HTML::script('admin/js/plugins/rickshaw/d3.v3.js') }}     
              
        {{ HTML::script('admin/js/plugins/rickshaw/rickshaw.min.js') }}   
       {{ HTML::script('admin/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}   
        {{ HTML::script('admin/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}   
        {{ HTML::script('admin/js/plugins/bootstrap/bootstrap-datepicker.js') }}                  
        {{ HTML::script('admin/js/plugins/owl/owl.carousel.min.js') }}                   
        {{ HTML::script('admin/js/plugins/moment.min.js') }}                    
        
        {{ HTML::script('admin/js/plugins/daterangepicker/daterangepicker.js') }}   
        
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
		
		{{ HTML::script('admin/js/plugins.js') }} 
		{{ HTML::script('admin/js/actions.js') }}
		{{ HTML::script('admin/js/demo_dashboard.js') }}          
       
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>