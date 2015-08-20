@section('payrollDeductionModal')
<!-- Modal -->
<div class="modal fade" id="payrollDeductionModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Insert A Payroll Deduction</h4>
            </div>
            <div class="modal-body">
                {{ Form::open(array( 'id' => 'insertDeduction', 'name' => 'insertDeduction', 'route' => 'postEmployeeDeduction')) }}
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="sr-only" for="txtDate">Date Occurred</label>
                            <input type="text" class="form-control datepicker" id="dateOccurred" name="dateOccurred" placeholder="Date Occurred">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="sr-only" for="txtDate">Reason</label>
                            <input type="text" class="form-control" id="reason" name="reason" placeholder="Deduction Reason">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="sr-only" for="txtDate">Deduction Amount</label>
                            <input type="text" class="form-control" id="amount" name="amount" placeholder="Deduction Amount">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="sr-only" for="txtDate">MOD Signature</label>
                            <input type="password" class="form-control" id="modSig" name="modSig" placeholder="MOD Signature">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="sr-only" for="txtDate">Employee Signature</label>
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
        {{Form::close()}}
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@stop