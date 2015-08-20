@section('vacationModal')
<!-- Modal -->
<div class="modal fade" id="vacationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Insert A Vacation Request</h4>
            </div>
            <div class="modal-body">
                {{ Form::open(array( 'id' => 'data-remote', 'name' => 'data-remote')) }}
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" class="form-control" name="description" placeholder="Description"
                                   data-bind="value: wings" required="required">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" class="form-control" name="date" placeholder="Date Occurred"
                                   data-bind="value: fillets" required="required">
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" id="btn1" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" id="btn2" class="btn btn-primary" onClick="submitWriteup()">Submit</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    {{ Form::close() }}
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@stop