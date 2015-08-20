@section('resourceAddVehicleToPolicy')
<!-- Modal -->
<div class="modal fade" id="resourceAddVehicleToPolicyModal" tabindex="-1" role="dialog" aria-labelledby="resourceAddVehicleToPolicyLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="resourceAddVehicleToPolicyLabel">Insert A New Registration</h4>
            </div>
            <div class="modal-body">
                {{ Form::open(array( 'id' => 'resourceAddVehicleToPolicy', 'name' => 'resourceAddVehicleToPolicy', 'route' => 'postResourceAddVehicleToPolicy')) }}
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="sr-only" for="txtVehicle_id">Issued Tag Number</label>
                            <input type="text" class="form-control sr-only" id="txtVehicle_id" name="txtVehicle_id" placeholder="Vehicle ID" value=" {{ Input::get('vehicle_id') }}" hidden="hidden">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="sr-only" for="selPolicy">Notes</label>
                                <select name="selPolicy" class="form-control" required="required" id="selPolicy">
                                    <option value="" selected="selected">Select Insurance Policy</option>
                                    @foreach($vehicle['allInsurance'] as $policy)
                                    <option value=" {{$policy->insurance_id}} ">{{$policy->policy_id}}</option>
                                    @endforeach
                                    </select>
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