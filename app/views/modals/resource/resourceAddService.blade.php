@section('resourceAddService')
<!-- Modal -->
<div class="modal fade" id="resourceAddServiceModal" tabindex="-1" role="dialog" aria-labelledby="resourceAddServiceLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="resourceAddServiceLabel">Insert a Service</h4>
            </div>
            <div class="modal-body">
                {{ Form::open(array( 'id' => 'resourceAddService', 'name' => 'resourceAddService', 'route' => 'postResourceAddService')) }}
                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-12">
                            <div class="row">
                            <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="sr-only" for="txtServiceName">Quantity</label>
                                        <input type="text" class="form-control" placeholder='Service/Fee Name' id="txtServiceName" name="txtServiceName">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="sr-only" for="txtRate">Quantity</label>
                                        <input type="text" class="form-control" placeholder='Service Rate (xxx.xx)' id="txtRate" name="txtRate">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <select name="selDepartment" class="form-control" required="required" id="selDepartment">
                                    @foreach($departments as $department)
                                    <option value="{{$department->department_id}}">{{$department->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn1" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" id="btn2" class="btn btn-primary">Submit</button>
            </div>
            {{ Form::close() }}
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@stop