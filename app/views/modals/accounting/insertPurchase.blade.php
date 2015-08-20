@section('insertPurchaseModal')

<!-- Modal -->
<div class="modal fade" id="insertPurchaseModal" tabindex="-1" role="dialog" aria-labelledby="insertPurchaseLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="insertPurchaseLabel">Insert A Credit Card Purchase</h4>
            </div>
            {{ Form::open(array( 'id' => 'insertPurchase', 'files' => true, 'name' => 'insertPurchase', 'route' => 'postAccountingPurchase')) }}
            <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                <select name="selectCard" class="form-control" required="required" id="selectCard">
                                    <option value="" selected="selected">Select Card</option>
                                    @foreach(AccountingCreditCard::all() as $creditCard)
                                    <option value="{{{ $creditCard->card_id }}}">{{$creditCard->last_four}} - {{ EmployeeDef::find($creditCard->emp_id)->first }} {{ EmployeeDef::find($creditCard->emp_id)->last}} </option>
                                    @endforeach
                                </select>
                            </div>
                                </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="sr-only" for="txtPrevPayAmount">Purchased At</label>
                                <input type="text" class="form-control" id="purchased_at" name="purchased_at" placeholder="Purchased At">
                            </div>
                                </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                <select name="purchase_type" class="form-control" required="required" id="purchase_type">
                                    <option value="" selected="selected">Select Purchase Type</option>
                                    <option value="Service">Service</option>
                                    <option value="Product">Product</option>
                                </select>
                            </div>
                            </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                            <label class="sr-only" for="purchase_date">Purchase Date</label>
                                                            <input type="text" class="form-control datepicker" id="purchase_date" name="purchase_date" placeholder="Purchase Date">
                                                        </div>
                                                            </div>
                                </div>




                        </div>
                        <div class="row">
                                                <div class="form-group">
                                                    <div class="col-lg-4 col-lg-offset-4">
                                                        <label for="image">Upload a File</label>
                                                        <input type="file" id="image" name="image" capture>
                                                    </div>
                                                </div>
                                                <br>



                        </div>




                    <div class="row">
                        <div class="col-lg-12">

                                                        <div class="form-group">
                                                        <br>
                                                        <label class="sr-only" for="purchase_comment">Comment</label>
                                                        <input type="text" class="form-control" id="purchase_comment" name="purchase_comment" placeholder="Enter Comment">
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