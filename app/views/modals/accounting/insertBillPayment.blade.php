@section('insertBillPaymentModal')

<!-- Modal -->
<div class="modal fade" id="insertBillPaymentModal" tabindex="-1" role="dialog" aria-labelledby="insertBillPaymentLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="insertBillPaymentLabel">Insert A New Bill Payment</h4>
            </div>
            {{ Form::open(array( 'id' => 'insertBillPayment', 'class' => 'insertBillPaymentForm', 'files' => true, 'name' => 'insertBillPayment', 'route' => 'postAccountingBillPayment')) }}
            <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="form-group">
                                <label class="sr-only" for="template_id">Enter Bill Template</label>
                                <input type="text" class="form-control billPicker" placeholder='Enter Bill Template' id="template_id" name="template_id">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="sr-only" for="amount_paid">Amount Paid</label>
                                <input type="text" class="form-control" placeholder='Amount Paid' id="amount_paid" name="amount_paid">

                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                            <label class="sr-only" for="date_paid">Date Paid</label>
                            <input type="text" class="form-control datepicker" id="date_paid" name="date_paid" placeholder="Date Paid">
                            </div>
                            </div>
                                </div>
                        </div>

                    <div class="row">
                        <div class="col-lg-12">
                        <div class="col-md-6">
                         <div class="form-group">
                                <select name="payment_method" class="form-control" required="required" id="payment_method">
                                    <option value="" selected="selected">Select Payment Method</option>
                                    <option value="Credit Card">Credit Card</option>
                                    <option value="Check">Check</option>
                                </select>
                                                    </div>
                                                    </div>

                                                 <div class="col-md-6">
                                                 <div class="form-group">
                                                         <label class="sr-only" for="confirmation">Confirmation</label>
                                                         <input type="text" class="form-control" id="confirmation" name="confirmation" placeholder="Confirmation or Check">
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