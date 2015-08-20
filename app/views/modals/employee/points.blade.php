@section('pointsModal')
{{ Form::open(array( 'id' => 'pointsEvaluation', 'files' => true, 'name' => 'pointsEvaluation', 'route' => 'postEmployeePoints')) }}
<!-- Modal -->
<div class="modal fade" id="pointsModal" tabindex="-1" role="dialog" aria-labelledby="pointsLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="pointsLabel">Insert Points Entry</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <tr>
                                <th>Reason</th>
                                <th>Points</th>
                            </tr>
                            <tr>
                                <td>No call, no show</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>Tardiness greater than 30 minutes w/o speaking to a manager</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>Calling in with less than an hour notice w/o documentation</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>Calling in at least one hour prior to your scheduled shift w/o documentation</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Tardiness greater than 30 minutes with a call to the mgr before scheduled shift</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>Tardiness of 10 to 30 minutes w/o calling the mgr</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>Missing a Mandatory Meeting</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>Calling in one hour prior to your scheduled shift with documentation</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>Tardiness of 10 to 30 minutes with a call to the mgr prior to scheduled shift</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>If you do not cover at least 50% of your shift and have to leave early</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>Calling out the day before with valid documentation</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Covering a shift with short notice (less than 8 hours)</td>
                                <td>-1</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <select name="txtEvent" class="form-control" id="txtEvent">
                                    <option value="0">Called Out (0)</option>
                                    <option value="1">Called Out (3)</option>
                                    <option value="2">Called Out (4)</option>
                                    <option value="3">Covered Shift (-1)</option>
                                    <option value="4">Did not cover 50% (1)</option>
                                    <option value="5">Late (1)</option>
                                    <option value="6">Late (2)</option>
                                    <option value="7">Late (4)</option>
                                    <option value="8">Missed Meeting (2)</option>
                                    <option value="9">No Call No Show (12)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="sr-only" for="txtDate">Date Occurred</label>
                                <input type="text" class="form-control datepicker" id="txtDate" name="txtDate" placeholder="Date Occurred">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="sr-only" for="txtDescription">Reason</label>
                                <textarea class="form-control" id="txtDescription" rows="5" name="txtDescription" placeholder="Reason"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="form-group">
                                <label class="sr-only" for="txtEmpID">employee ID</label>
                                <input type="text" class="form-control sr-only" id="txtEmpID" name="txtEmpID" placeholder="Employee ID" value="{{{Input::get('emp_id')}}}" hidden="hidden">
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" id="btn1" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" id="btn2" class="btn btn-primary">Submit</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
{{ Form::close() }}
@stop