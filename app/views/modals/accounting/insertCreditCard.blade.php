@section('insertCreditCardModal')

<!-- Modal -->
<div class="modal fade" id="insertCreditCardModal" tabindex="-1" role="dialog" aria-labelledby="insertCreditCardLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="insertCreditCardLabel">Insert A New Credit Card</h4>
            </div>
            {{ Form::open(array( 'id' => 'insertCreditCard', 'class' => 'insertCardForm', 'files' => true, 'name' => 'insertCreditCard', 'route' => 'postAccountingCreditCard')) }}
            <div class="modal-body">

                    <div class="row">
                        <div class="col-lg-12">
                        <div class="col-lg-12">
                        <div class="form-group">
                                <label class="sr-only" for="txtEmployeeName">Enter Employee Name</label>
                                <input type="text" class="form-control employeePicker" placeholder='Enter Card User' id="txtEmployeeName" name="txtEmployeeName">
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                <select name="card_type" class="form-control" required="required" id="card_type">
                                    <option value="" selected="selected">Select Card Type</option>
                                    <option value="American Express Gold">American Express Gold</option>
                                    <option value="American Express">American Express</option>
                                    <option value="VISA">VISA</option>
                                    <option value="Mastercard">Mastercard</option>
                                    <option value="Discover">Discover</option>
                                </select>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                            <label class="sr-only" for="card_expiration">Expiration Date</label>
                            <input type="text" class="form-control datepickerYear" id="card_expiration" name="card_expiration" placeholder="Expiration Date">
                            </div>
                            </div>
                                </div>


                        </div>

                    <div class="row">
                        <div class="col-lg-12">
                        <div class="col-md-6">
                         <div class="form-group">
                               <label class="sr-only" for="card_limit">Card Limit</label>
                               <input type="text" class="form-control" id="card_limit" name="card_limit" placeholder="Enter Card Limit">
                                                    </div>
                                                    </div>

                                                 <div class="col-md-6">
                                                 <div class="form-group">

                                                         <label class="sr-only" for="last_four">Last Four Digits</label>
                                                         <input type="text" class="form-control" id="last_four" name="last_four" placeholder="Last Four Digits">
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