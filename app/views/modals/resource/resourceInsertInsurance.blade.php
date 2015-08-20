@section('resourceInsertInsurance')
<!-- Modal -->
<div class="modal fade" id="resourceInsertInsuranceModal" tabindex="-1" role="dialog" aria-labelledby="resourceInsertInsuranceLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="resourceInsertInsuranceLabel">Insert/Update Insurance</h4>
            </div>
            <div class="modal-body">
                {{ Form::open(array( 'id' => 'resourceInsertInsurance', 'name' => 'resourceInsertInsurance', 'route' => 'postResourceInsertInsurance')) }}
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="sr-only" for="txtPolicy">Policy ID</label>
                            <input type="text" class="form-control" id="txtPolicy" name="txtPolicy" placeholder="Issued Policy">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="sr-only" for="datepicker3">Expiration Date</label>
                            <input type="text" class="form-control" id="datepicker3" name="datepicker3" placeholder="Registration Expiration">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="vendor_id"> Vendor ID </label>
                            <input type="text" class="form-control" id="vendor_id" name="vendor_id" placeholder="Enter Vendor">
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