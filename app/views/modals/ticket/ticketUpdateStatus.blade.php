@section('ticketUpdateStatus')
<!-- Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateLabel"
     aria-hidden="true" xmlns="http://www.w3.org/1999/html">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="updateLabel">Update Ticket Status</h4>
            </div>
            <div class="modal-body">
                {{ Form::open(array( 'id' => 'postTicketStatus', 'name' => 'postTicketStatus', 'route' =>
                'postTicketStatus')) }}
                <div class="col-lg-12">
                    <select name="statusSelect" class="form-control" required="required" id="statusSelect">
                        <option value="1"> Open</option>
                        <option value="3">Pending Parts</option>
                        <option value="4">Transferred To 3rd Party</option>
                        <option value="5">Closed</option>
                        <option value="7">Move To Wish List</option>
                    </select>
                </div>
                <div class="col-lg-12">
                    <select name="assignmentSelect" class="form-control" required="required" id="assignmentSelect">
                        <option disabled="disabled">Assign To:</option>
                        @foreach($ticket['employeeList'] as $employee)
                        <option value="{{$employee->emp_id}}">
                            {{ ucwords($employee->first); }}
                            {{ ucwords($employee->last); }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-12">
                    <input type="text" id="datepicker" name="datepicker" class="form-control"
                           placeholder="Tentatively Scheduled">

                    </input>
                </div>

                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-12">
                            <textarea class="form-control" name="ticketComment" placeholder="Enter your response."
                                      required="required" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <input type="text" hidden="hidden" name="ticket_id" value="{{ $ticket['detail']->ticket_id}}">
            </div>
            <div class="modal-footer">
                <button type="button" id="btn1" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" id="btn2" class="btn btn-primary" onClick="submitStatus()">Submit</button>
            </div>
            {{ Form::close() }}
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@stop