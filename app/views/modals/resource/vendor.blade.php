@section('vendorModal')
<!-- Modal -->
<div class="modal fade" id="vendorModal" tabindex="-1" role="dialog" aria-labelledby="vendorLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="vendorLabel">Insert A Vendor</h4>
            </div>
            <div class="modal-body">
                {{ Form::open(array( 'id' => 'vendorNewItem', 'name' => 'vendorNewItem', 'route' => 'postAddVendor')) }}
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" class="form-control" name="txtDescription" placeholder="Vendor Name"
                                   id="txtDescription" required="required">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <select name="txtDepartment" class="form-control" required="required" id="txtDepartment">
                                @foreach($departments as $department)
                                <option value="{{$department->department_id}}">{{$department->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" class="form-control" name="txtWebsite" placeholder="Vendor Website"
                                   id="txtWebsite" required="required">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" class="form-control" name="txtStreet" placeholder="Street Address"
                                   id="txtStreet" required="required">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" class="form-control" name="txtCity" placeholder="City Address"
                                   id="txtCity" required="required">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" class="form-control" name="txtState" placeholder="State Address"
                                   id="txtState" required="required">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" class="form-control" name="txtZip" placeholder="Zip Address" id="txtZip"
                                   required="required">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" class="form-control" name="txtCustId" placeholder="Customer ID"
                                   id="txtCustId" required="required">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" class="form-control" name="txtContactNum" placeholder="Contact Number"
                                   id="txtContactNum" required="required">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" class="form-control" name="txtContactName" placeholder="Contact Name"
                                   id="txtContactName" required="required">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn1" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" id="btn2" class="btn btn-primary" onClick="submitVendor()">Submit</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@stop