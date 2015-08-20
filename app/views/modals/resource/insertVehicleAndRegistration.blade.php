@section('resourceInsertVehicle')
<!-- Modal -->
<div class="modal fade" id="resourceInsertVehicleModal" tabindex="-1" role="dialog" aria-labelledby="resourceInsertVehicleLabel"
     aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title" id="resourceInsertVehicleLabel">Insert A Vehicle</h4>
</div>
<div class="modal-body">
{{ Form::open(array( 'id' => 'resourceInsertVehicle', 'files' => true, 'name' => 'resourceInsertVehicle', 'route' => 'postResourceInsertVehicle')) }}
<div class="form-group">
    <div class="row">
        <div class="col-md-12">
            <label class="sr-only" for="txtVIN">VIN Number</label>
            <input type="text" class="form-control" id="txtVIN" name="txtVIN" placeholder="VIN Number">
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-12">
            <label class="sr-only" for="txtDescription">Description</label>
            <input type="text" class="form-control" id="txtDescription" name="txtDescription" placeholder="Vehicle Description (Ex. Van - Small)">
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-md-12">
            <label for="location">Primary Storage Location</label>
            {{ Form::locations() }}
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-md-12">
            <label class="sr-only" for="txtVehicleYear">Purchase Amount</label>
            <input type="text" class="form-control" id="txtVehicleYear" name="txtVehicleYear" placeholder="Make Year (xxxx)">
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-md-12">
            <label class="sr-only" for="txtMake">Make</label>
            <input type="text" class="form-control" id="txtMake" name="txtMake" placeholder="Vehicle Make or Manufacturer">
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-12">
            <label class="sr-only" for="txtModel">Vehicle Model</label>
            <input type="text" class="form-control" id="txtModel" name="txtModel" placeholder="Model">
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-md-12">
            <label class="sr-only" for="selectBody">Body Type</label>
            <select name="selectBody" class="form-control" required="required" id="selectBody">
                <option value="" selected="selected">Select Body</option>
                <option value="Sedan">Sedan</option>
                <option value="Van">Van</option>
                <option value="Truck">Truck</option>
                <option value="SUV">SUV</option>
                <option value="Fire Truck">Fire Truck</option>
                <option value="Bucket Truck">Bucket Truck</option>
                <option value="Bucket Truck">Trailer</option>
            </select>
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-md-12">
            <label class="sr-only" for="txtPurchaseDate">Purchase Date</label>
            <input type="text" class="form-control" id="datepicker" name="datepicker" placeholder="Purchase Date">
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-12">
            <label class="sr-only" for="txtPurchaseAmount">Purchase Amount</label>
            <input type="text" class="form-control" id="txtPurchaseAmount" name="txtPurchaseAmount" placeholder="Purchase Amount (15000.50)">
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-12">
            <label class="sr-only" for="selectPurchaseMethod">Purchase Method</label>
            <select name="selectPurchaseMethod" class="form-control" required="required" id="selectPurchaseMethod">
                <option value="" selected="selected">Select Purchase Method</option>
                <option value="Loan">Loan</option>
                <option value="Check">Check</option>
                <option value="Other">Other</option>
            </select>
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-md-12">
            <label class="sr-only" for="selectColor">Purchase Method</label>
            <select name="selectColor" class="form-control" required="required" id="selectColor">
                <option value="" selected="selected">Select Color</option>
                <option value="White">White</option>
                <option value="Black">Black</option>
                <option value="Yellow">Yellow</option>
                <option value="Blue">Blue</option>
                <option value="Green">Green</option>
                <option value="Red">Red</option>
                <option value="Orange">Orange</option>
                <option value="Brown">Brown</option>
            </select>
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-md-12">
            <label class="sr-only" for="selectFuel">Select Fuel Type</label>
            <select name="selectFuel" class="form-control" required="required" id="selectFuel">
                <option value="" selected="selected">Select Fuel Type</option>
                <option value="Regular">Regular</option>
                <option value="High Grade">High Grade</option>
                <option value="Premium Grade">Premium Grade</option>
                <option value="Diesel">Diesel</option>
                <option value="Oil">Oil</option>
                <option value="Water">Water</option>
                <option value="Electric">Electric</option>
            </select>
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-md-12">
            <label class="sr-only" for="selectTransmission">Select Fuel Type</label>
            <select name="selectTransmission" class="form-control" required="required" id="selectTransmission">
                <option value="" selected="selected">Select Transmission</option>
                <option value="Automatic">Automatic</option>
                <option value="Manual">Manual</option>
            </select>
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-md-12">
            <label class="sr-only" for="selectEngine">Select Engine</label>
            <select name="selectEngine" class="form-control" required="required" id="selectEngine">
                <option value="" selected="selected">Select engine</option>
                <option value="V4">V4</option>
                <option value="Inline 4">Inline 4</option>
                <option value="V6">V6</option>
                <option value="V8">V8</option>
                <option value="V10">V10</option>
                <option value="V12">V12</option>
            </select>
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-md-6">
            <input type="file" class="form-control" id="image" name="image" accept="image/*" capture>
        </div>
    </div>
</div>




<div class="form-group">
    <div class="row">
        <div class="col-md-12">
            <label for="txtTag"> Only Enter Remaining Fields If You Have Registration Also: </label>
            <label class="sr-only" for="txtTag">Issued Tag Number</label>
            <input type="text" class="form-control" id="txtTag" name="txtTag" placeholder="Issued Tag">
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-12">
            <label class="sr-only" for="datepicker2">Expiration Date</label>
            <input type="text" class="form-control" id="datepicker2" name="datepicker2" placeholder="Registration Expiration">
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-md-12">
            <label class="sr-only" for="txtPrice">Notes</label>
            <input type="text" class="form-control" id="txtPrice" name="txtPrice" placeholder="Amount Paid (xx.xx)">
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-md-12">
            <label class="sr-only" for="txtNotes">Notes</label>
            <input type="text" class="form-control" id="txtNotes" name="txtNotes" placeholder="Note (If Any)">
        </div>
    </div>
</div>


<div class="form-group">
    <div class="row">
        <div class="col-md-6">
            <input type="file" class="form-control" id="image" name="image" accept="image/*" capture>
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