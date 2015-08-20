@section('testModal')
<!-- Modal -->
<div class="modal fade" id="testModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Insert A Test</h4>
            </div>
            <div class="modal-body">
                {{ Form::open(array( 'id' => 'insertTest', 'name' => 'insertTest', 'route' => 'postEmployeeTest')) }}
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="sr-only" for="testDate">Date Occurred</label>
                            <input type="text" class="form-control datepicker" id="testDate" name="testDate" placeholder="Date Test Taken">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            {{ Form::tests() }}

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="sr-only" for="txtScore">Employee Score</label>
                            <input type="text" class="form-control" id="txtScore" name="txtScore" placeholder="Test Score">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="form-group">
                                <label class="sr-only" for="txtEmpID">employee ID</label>
                                <input type="text" class="form-control sr-only" id="txtEmpID" name="txtEmpID" placeholder="Employee ID" value="{{{Input::get('emp_id')}}}">
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" id="btn1" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" id="btn2" class="btn btn-primary">Submit</button>
            </div>
        </div>
        {{ Form::close() }}
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@stop