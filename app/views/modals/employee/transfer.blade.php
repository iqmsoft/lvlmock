@section('transferModal')
<!-- Modal -->
<div class="modal fade" id="transferModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    {{ Form::open(array( 'id' => 'insertTransfer', 'name' => 'insertTransfer', 'route' => 'postEmployeeTransfer')) }}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Insert A Transfer</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            {{Form:: roles() }}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            {{Form:: roles2() }}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            {{Form:: locations() }}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            {{Form:: locations2() }}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="sr-only" for="txtDate">Reason</label>
                            <input type="text" class="form-control" id="reason" name="reason" placeholder="Transfer Reason">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="sr-only" for="txtTransferDate">Date</label>
                            <input type="text" class="form-control datepicker" id="txtTransferDate" name="txtTransferDate" placeholder="Transfer Date">
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

        <!-- /.modal-content -->
    </div>
    {{ Form::close() }}
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@stop