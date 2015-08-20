@include('internalLayout.header')
             
            @include('internalLayout.navigationBar')
            
                              
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                   
                  
                    <li class="active">Items</li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span> List of Items</h2>
                </div>
                <!-- END PAGE TITLE -->                

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
					<div class="col-md-4">
					<div class="panel panel-default">
					<div class="panel-heading">  
					<h3 class="panel-title">New Item</h3>
					</div>
					@if($errors->any())
                        <div class="alert alert-error">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            {{ implode('', $errors->all('
                            <li class="error" style="color:#f00">:message</li>
                            '))}}
                        </div>
                        @endif     
					 {{ Form::open(array('method' => 'POST', 'action' => 'ItemController@postNewItem','class'=>'form-horizontal')) }}
					 <input type="hidden" name="item_id" id="item_id"/>
					 <div class="panel-body"> 
					 <div class="form-group">
                                       
                                        <div class="col-md-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                {{ Form::text('itemname', '', array('class' => 'form-control', 'id' => 'itemname', 'placeholder' => 'Item Name')) }}
                                            </div>                                            
                                            
                                        </div>
                                    </div>
									 <div class="form-group">
                                        
                                        <div class="col-md-12">                                            
                                            {{ Form::textarea('description', '', array('class' => 'form-control', 'id' => 'description', 'placeholder' => 'Item Description')) }}
                                            
                                        </div>
                                    </div>
									<div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                 {{ Form::number('price', '', array('class' => 'form-control', 'id' => 'price', 'placeholder' => 'Price')) }}
                                                <span class="input-group-addon">.00</span>
                                            </div>
                                        </div>
                                    </div>
					  </div>
					  <div class="panel-footer">
					   {{ Form::reset('Clear Form', array('class' => 'btn btn-default')) }}
                                                                      {{ Form::submit('Save', array('class' => 'btn btn-primary pull-right')) }}
                                    
                                </div>
					  {{ Form::close() }}
					</div>
					</div>
                        <div class="col-md-7">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Items List</h3>
                                                                   
                                </div>
                                <div class="panel-body">
                                    <table class="table table-striped table-bordered table-hover datatable" id="example">
                                        <thead>
                                            <tr>  
											                                          
												<th>Name</th>
                                                <th>Description</th>
                                                <th>Price</th>
												 <th>Remove</th>                                            
                                             </tr>
                                        </thead>
                                       <tbody></tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->
      <script type="text/javascript">
$(function(){
	 $('#example').dataTable({
            "ajax": {
                "url": "{{ URL::route('getAllItem') }}",
                "type": "POST"
            },
            "columns": [
               
				{ "data": "itemname" },
                { "data": "description" },
                { "data": "price" } ,              
                { "data": "item_id"}
            ]
        });
		
		
		$(document).on('click','.btn-danger',function(){
		var id = $(this).attr('id');
	       var conf = confirm("Are you sure you want to delete this item?");
		   if(conf){
		    var data = {
                'id':id
            };
			$.ajax({
                url: '{{ URL::route('removeItem') }}' ,				
                type: "POST",
				 data : data,
				success: function() {
            location.reload();
        }
           });
		   }   
		});
		
		$(document).on('click','.edit',function(){
		var id = $(this).attr('id');
	
		 var data = {
                'id':id
            };
		$.ajax({
                url: '{{ URL::route('getItemdetails') }}' ,				
                 type: 'GET',
				 data : data,
				success: function(result) {
           var str = result.split('~');
		   $('#item_id').val(id);
		   $('#itemname').val(str[0]);
		   $('#description').val(str[1]);
		   $('#price').val(str[2]);
        }
           });
		
		});
});
</script>
                        

                        </div>
                    </div>                                
                    
                </div>
                <!-- PAGE CONTENT WRAPPER -->                                
            </div>    
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->       
        
       @include('internalLayout.footer')
	   
   
        {{ HTML::script('admin/js/plugins/datatables/jquery.dataTables.min.js') }} 
        


    </body>
	
</html>






