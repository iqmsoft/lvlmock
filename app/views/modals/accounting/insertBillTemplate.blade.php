@section('insertBillTemplateModal')

<!-- Modal -->
<div class="modal fade" id="insertBillTemplateModal" tabindex="-1" role="dialog" aria-labelledby="insertBillTemplateLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="insertBillTemplateLabel">Insert A New Bill Template</h4>
            </div>
            {{ Form::open(array( 'id' => 'insertBillTemplate', 'class' => 'insertBillTemplateForm', 'files' => true, 'name' => 'insertBillTemplate', 'route' => 'postAccountingBillTemplate')) }}
            <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="form-group">
                                <label class="sr-only" for="txtVendorName">Enter Vendor</label>
                                <input type="text" class="form-control vendorPicker" placeholder='Enter Vendor' id="txtVendorName" name="txtVendorName">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                {{ Form:: locations() }}
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                            <label class="sr-only" for="due_date">First Due Date</label>
                            <input type="text" class="form-control datepicker" id="due_date" name="due_date" placeholder="First Due Date">
                            </div>
                            </div>
                                </div>
                        </div>

                    <div class="row">
                        <div class="col-lg-12">
                        <div class="col-md-6">
                         <div class="form-group">
                               <label class="sr-only" for="contract_start">Contract Start</label>
                               <input type="text" class="form-control datepickerYear" id="contract_start" name="contract_start" placeholder="Contract Start">
                                                    </div>
                                                    </div>

                                                 <div class="col-md-6">
                                                 <div class="form-group">
                                                         <label class="sr-only" for="contract_end">Contract End</label>
                                                         <input type="text" class="form-control datepicker" id="contract_end" name="contract_end" placeholder="Contract End">
                                                     </div>
                                                         </div>
                        </div>
                    </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                            <div class="form-group">
                                                    <label class="sr-only" for="description">Enter Description</label>
                                                    <input type="text" class="form-control" placeholder='Enter Description' id="description" name="description">
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