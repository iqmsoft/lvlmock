@section('issueModal')
<!-- Modal -->
<div class="modal fade" id="issueModal" tabindex="-1" role="dialog" aria-labelledby="issueLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="issueLabel">Insert A New Issue</h4>
            </div>
            <div class="modal-body">
                {{ Form::open(array( 'id' => 'issueNewItem', 'name' => 'issueNewItem', 'route' => 'postNewIssue')) }}
                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-12">
                            <select name="issueMod" class="form-control" required="required" id="issueMod">
                                <option value="">Equipment</option>
                            </select>
                        </div>
                    </div>
                </div>
                            <div class="row">
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            <select name="issuePriority" class="form-control" required="required" id="issuePriority">
                                                <option value="">Select Priority</option>
                                                <option value="5">5 (Lowest Priority)</option>
                                                <option value="4">4</option>
                                                <option value="3">3</option>
                                                <option value="2">2</option>
                                                <option value="1">1 (Highest Priority)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                                            <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="col-lg-12">
                                                                         <label class="sr-only" for="issueGoal">Resolution Goal Time</label>
                                                                                                        <input type="text" class="form-control" placeholder='Resolution Goal In Hours (ex. 2 days = 48)' id="issueGoal" name="issueGoal">

                                                                        </div>
                                                                    </div>
                                                                </div>

                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-12">
                            <input type="text" class="form-control" id="issueName" name="issueName"
                                   placeholder="New Issue" required="required">
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