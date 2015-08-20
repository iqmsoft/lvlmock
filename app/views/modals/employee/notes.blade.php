@section('notesModal')
<!-- Modal -->
<div class="modal fade" id="notesModal" tabindex="-1" role="dialog" aria-labelledby="notesLabel"
     aria-hidden="true">
    {{ Form::open(array( 'id' => 'insertNote', 'name' => 'insertNote', 'route' => 'postEmployeeNote')) }}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="notesLabel">Insert A Note</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="sr-only" for="txtNote">Note</label>
                            <textarea class="form-control" id="txtNote" rows="3" name="txtNote" placeholder="Enter Your Note"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <div class="form-group">
                            <label class="sr-only" for="txtEmpID">employee ID</label>
                            <input type="text" class="form-control sr-only" id="txtEmpID" name="txtEmpID" placeholder="Employee ID" value="{{{Input::get('emp_id')}}}">
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal-footer">
                <button type="button" id="btn1" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" id="btn2" class="btn btn-primary">Submit Note</button>
            </div>
        </div>
        {{ Form::close() }}
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@stop