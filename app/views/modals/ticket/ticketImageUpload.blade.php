@section('imageModal')
<!-- Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="imageLabel">Insert A New Image</h4>
            </div>
            <div class="modal-body">
                {{ Form::open(array( 'id' => 'imageNewItem', 'name' => 'imageNewItem', 'route' => 'postTicketImage',
                'files' => true)) }}
                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-12">
                            {{ Form::file('image') }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-12">
                            <input type="area" class="form-control" id="photoComment" name="photoComment"
                                   placeholder="Add Image Comment">
                        </div>
                    </div>
                </div>
            </div>
            <input type="text" id="ticket_id" name="ticket_id" value="{{ $ticket['detail']->ticket_id}}"
                   hidden="hidden">

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