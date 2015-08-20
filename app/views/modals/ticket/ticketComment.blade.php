@section('ticketCommentModal')
<!-- Modal -->
<div class="modal fade" id="commentModal" tabindex="-1" role="dialog" aria-labelledby="commentLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="commentLabel">Insert A New Category</h4>
            </div>
            <div class="modal-body">
                {{ Form::open(array( 'id' => 'newTicketComment', 'name' => 'newTicketComment', 'route' =>
                'postNewTicketComment')) }}
                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-12">
                            <input type="text" hidden="hidden" name="ticket_id"
                                   value="{{ $ticket['detail']->ticket_id}}">
                            <textarea class="form-control" name="ticketComment" placeholder="Enter your response."
                                      required="required" rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn1" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" id="btn2" class="btn btn-primary" onClick="submitComment()">Submit</button>
            </div>
            {{ Form::close() }}
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@stop