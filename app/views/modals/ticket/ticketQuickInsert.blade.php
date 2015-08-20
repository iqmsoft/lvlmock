@section('ticketQuickInsertModal')
<!-- Modal -->
<div class="modal fade" id="ticketQuickInsertModal" tabindex="-1" role="dialog" aria-labelledby="ticketQuickInsertLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="ticketQuickInsertLabel">Insert a Part or Fee</h4>
            </div>
            <div class="modal-body">
                {{ Form::open(array( 'id' => 'ticketQuickInsert', 'name' => 'ticketQuickInsert', 'route' =>
                'postTicketQuickInsert')) }}
                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-12">
                            <input type="text" hidden="hidden" name="ticket_id"
                                   value="{{ $ticket['detail']->ticket_id}}">
                            <input type="text" class="form-control" name="txtRecId" placeholder="Enter Receipt ID" required="required">
                            <input type="text" class="form-control" name="txtLocationPurchase" placeholder="Purchased From" required="required">
                            <input type="text" class="form-control" name="txtNumItems" placeholder="Number of Items" required="required">
                            <input type="text" class="form-control" name="txtTotal" placeholder="Enter Receipt Total (xx.xx)" required="required">
                            <select name="selPurchaseMethod" class="form-control" required="required" id="selPurchaseMethod">
                                <option value="" selected="selected" disabled="disabled">Payment Method</option>
                                <option value="Credit Card">Credit Card</option>
                                <option value="Charged To Account">Charged To Account</option>
                                <option value="Cash">Cash</option>
                            </select>
                            <textarea class="form-control" name="ticketItems" placeholder="List Items"
                                      required="required" rows="3"></textarea>
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