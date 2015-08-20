@section('writeupModal')
<!-- Modal -->
<div class="modal fade" id="writeupModal" tabindex="-1" role="dialog" aria-labelledby="writeupLabel"
     aria-hidden="true">

    <div class="modal-dialog">
        {{ Form::open(array( 'id' => 'insertWriteup', 'name' => 'insertWriteup', 'route' => 'postEmployeeWriteUp')) }}
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="writeupLabel">Insert A Writeup</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="sr-only" for="writeupDate">Date Occurred</label>
                            <input type="text" class="form-control datepicker" id="writeupDate" name="writeupDate" placeholder="Date Occurred">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <select name="selReason" class="form-control" required="required" id="selReason">
                                <option value="Uniform" selected="selected">Uniform</option>
                                <option value="Cell Phone">Cell Phone</option>
                                <option value="Customer Service">Customer Service</option>
                                <option value="Work Performance">Work Performance</option>
                                <option value="Insubordination">Insubordination</option>
                                <option value="Encore Experience">Encore Experience</option>
                                <option value="Tardiness/Absence">Tardiness/Absence</option>
                                <option value="Cash Register Over/Short">Cash Register Over/Short</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <select name="selNum" class="form-control" required="required" id="selNum">
                                <option value="1" selected="selected">1st Offense</option>
                                <option value="2">2nd Offense</option>
                                <option value="3">3rd Offense</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <select name="selPunishment" class="form-control" required="required" id="selPunishment">
                                <option value="Writeup" selected="selected">Writeup</option>
                                <option value="Suspension (1 Week)">Suspension(1 Week)</option>
                                <option value="Suspension (2 Weeks)">Suspension (2 Weeks)</option>
                                <option value="Termination">Termination</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="sr-only" for="mgrStatement">Manager Statement</label>
                            <textarea class="form-control" id="mgrStatement" rows="3" name="mgrStatement" placeholder="Manager Statement"></textarea>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="sr-only" for="empResponse">Employee Response</label>
                            <textarea class="form-control" id="empResponse" rows="3" name="empResponse" placeholder="Employee Response"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="sr-only" for="modSig">Manager Signature</label>
                            <input type="password" class="form-control" id="modSig" name="modSig" placeholder="MOD Signature">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="sr-only" for="empSig">Employee Signature</label>
                            <input type="password" class="form-control" id="empSig" name="empSig" placeholder="Employee Signature">
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


            </div>
            <div class="modal-footer">
                <button type="button" id="btn1" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" id="btn2" class="btn btn-primary">Submit</button>
            </div>
        </div>
        <!-- /.modal-content -->
        {{ Form::close() }}
    </div>

    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@stop