@section('equipmentModal')
<!-- Modal -->
<div class="modal fade" id="equipmentModal" tabindex="-1" role="dialog" aria-labelledby="equipmentLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="equipmentLabel">Insert New Equipment</h4>
            </div>
            <div class="modal-body">
                {{ Form::open(array( 'id' => 'equipmentNewItem', 'name' => 'equipmentNewItem', 'route' =>
                'postNewEquipment')) }}
                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-12">
                            <select name="equipmentMod" class="form-control" required="required" id="equipmentMod">
                                <option value="">Category:</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-12">
                            <input type="text" class="form-control" name="equipmentName" id="equipmentName"
                                   placeholder="New Equipment Name" required="required">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn1" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" id="btn2" class="btn btn-primary">Submit
                </button>
            </div>
            {{ Form::close() }}
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

@stop