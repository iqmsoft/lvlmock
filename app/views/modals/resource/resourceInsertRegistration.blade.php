@section('resourceInsertRegistration')
<!-- Modal -->
<div class="modal fade" id="resourceInsertRegistrationModal" tabindex="-1" role="dialog" aria-labelledby="resourceInsertRegistrationLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="resourceInsertRegistrationLabel">Insert A New Registration</h4>
            </div>
            <div class="modal-body">
                {{ Form::open(array( 'id' => 'resourceInsertRegistration', 'name' => 'resourceInsertRegistration', 'route' => 'postResourceInsertRegistration')) }}
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="sr-only" for="txtTag">Issued Tag Number</label>
                            <input type="text" class="form-control" id="txtTag" name="txtTag" placeholder="Issued Tag">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="sr-only" for="datepicker2">Expiration Date</label>
                            <input type="text" class="form-control" id="datepicker2" name="datepicker2" placeholder="Registration Expiration">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="txtPrice"> Amount Paid </label>
                            <input type="text" class="form-control" id="txtPrice" name="txtPrice" placeholder="Amount Paid (xx.xx)">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="sr-only" for="txtNotes">Notes</label>
                            <input type="text" class="form-control" id="txtNotes" name="txtNotes" placeholder="Note (If Any)">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="sr-only" for="txtNotes">Notes</label>
                            {{ Form::vehicles() }}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="file" class="form-control" id="image" name="image" accept="image/*" capture>
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