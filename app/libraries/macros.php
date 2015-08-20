<?php
Form::macro('states', function () {
    return '<select name="state" class="form-control" required="required" id="state">
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District of Columbia</option>
	<option value="FL" selected="selected">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select>';
});

Form::macro('cities', function () {
    return '<select name="city" class="form-control" required="required" id="city">
    <option value="jacksonville">Jacksonville</option>
    <option value="fernandina beach">Fernandina Beach</option>
    <option value="orange park">Orange Park</option>
    <option value="middleburg">MiddleBurg</option>
    <option value="st augustine">St. Augustine</option>
    </select>';
});
Form::macro('locations', function () {
    $locations = SettingsLocationDef::get();
    $locationSelect = '<select name="location" class="form-control" id="location">';
    foreach ($locations as $location)
    {
        $locationSelect .= '<option value="'.$location->location_id.'">'.$location->name.'</option>';
    }
    $locationSelect .= '</select>';
    return $locationSelect;
});

Form::macro('locations2', function () {
    $locations = SettingsLocationDef::get();
    $locationSelect = '<select name="location2" class="form-control" id="location2">';
    foreach ($locations as $location)
    {
        $locationSelect .= '<option value="'.$location->location_id.'">'.$location->name.'</option>';
    }
    $locationSelect .= '</select>';
    return $locationSelect;
});




Form::macro('vehicles', function () {
    $vehicles = ResourceVehicleDef::get();
    $vehicleSelect = '<select name="vehicle_id" class="form-control" id="vehicle_id">';
    foreach ($vehicles as $vehicle)
    {
        $vehicleSelect .= '<option value="'.$vehicle->vehicle_id.'">'.$vehicle->description.'</option>';
    }
    $vehicleSelect .= '</select>';
    return $vehicleSelect;
});

Form::macro('roles', function () {
    $roles = SettingsEmployeeRole::get();
    $roleSelect = '<select name="role_id" class="form-control" id="role_id">';
    foreach ($roles as $role)
    {
        $roleSelect .= '<option value="'.$role->role_id.'">'.$role->name.'</option>';
    }
    $roleSelect .= '</select>';
    return $roleSelect;
});

Form::macro('roles2', function () {
    $roles = SettingsEmployeeRole::get();
    $roleSelect = '<select name="role_id2" class="form-control" id="role_id2">';
    foreach ($roles as $role)
    {
        $roleSelect .= '<option value="'.$role->role_id.'">'.$role->name.'</option>';
    }
    $roleSelect .= '</select>';
    return $roleSelect;
});

Form::macro('tests', function () {
    $tests = TestsType::get();
    $testSelect = '<select name="test_id" class="form-control" id="test_id">';
    foreach ($tests as $test)
    {
        $testSelect .= '<option value="'.$test->test_id.'">'.$test->type.'</option>';
    }
    $testSelect .= '</select>';
    return $testSelect;
});




Form::macro('empType', function () {
    return '<select name="store" class="form-control" required="required" id="store">
    <option value="AL">Alabama</option>
    </select>';
});
Form::macro('race', function () {
    return '<select name="store" class="form-control" required="required" id="store">
    <option value="AL">Alabama</option>
    </select>';
});


