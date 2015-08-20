@section('evaluationModal')
{{ Form::open(array( 'id' => 'employeeEvaluation', 'files' => true, 'name' => 'employeeEvaluation', 'route' => 'postEmployeeEvaluation')) }}
<!-- Modal -->
<div class="modal fade" id="evaluationModal" tabindex="-1" role="dialog" aria-labelledby="evaluationLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="evaluationLabel">Insert An Evaluation</h4>
            </div>
            <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                <select name="prevPayType" class="form-control" required="required" id="prevPayType">
                                    <option value="" selected="selected">Select Old Pay Type</option>
                                    <option value="Hourly">Hourly</option>
                                    <option value="Salary">Salary</option>
                                </select>
                            </div>
                                </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="sr-only" for="txtPrevPayAmount">Previous Pay Amount</label>
                                <input type="text" class="form-control" id="txtPrevPayAmount" name="txtPrevPayAmount" placeholder="Previous Pay Amount">
                            </div>
                                </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                <select name="newPayType" class="form-control" required="required" id="newPayType">
                                    <option value="" selected="selected">Select New Pay Type</option>
                                    <option value="Sedan">Hourly</option>
                                    <option value="Van">Salary</option>
                                </select>
                            </div>
                                </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="sr-only" for="txtNewPayAmount">Previous Pay Amount</label>
                                <input type="text" class="form-control" id="txtNewPayAmount" name="txtNewPayAmount" placeholder="New Pay Amount">
                            </div>
                                </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="sr-only" for="txtEvalDate">Evaluation Date</label>
                                <input type="text" class="form-control datepicker" id="txtEvalDate" name="txtEvalDate" placeholder="Evaluation Date">
                            </div>
                                </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="sr-only" for="txtEffectiveDate">Effective Date</label>
                                <input type="text" class="form-control datepicker" id="txtEffectiveDate" name="txtEffectiveDate" placeholder="Effective Date">
                            </div>
                                </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::roles() }}
                            </div>
                                </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::roles2() }}
                        </div>
                                </div>
                    </div>
                        </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <select name="selReason" class="form-control" required="required" id="selReason">
                                    <option value="" selected="selected">Select Evaluation Reason</option>
                                    <option value="12 month evaluation">12 month evaluation</option>
                                    <option value="6 month evaluation">6 month evaluation</option>
                                    <option value="Excellent performance">Excellent performance</option>
                                </select>
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