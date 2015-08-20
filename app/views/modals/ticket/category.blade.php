@section('categoryModal')
<!-- Modal -->
<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="categoryLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="categoryLabel">Insert A New Category</h4>
            </div>
            <div class="modal-body">
                {{ Form::open(array( 'id' => 'categoryNewItem', 'name' => 'categoryNewItem', 'route' =>
                'postNewCategory')) }}
                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-12">
                            <select name="categoryMod" class="form-control" required="required" id="categoryMod">
                                @foreach($departments as $department)
                                <option value="{{$department->department_id}}">{{$department->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-12">
                            <input type="text" class="form-control" name="catName" placeholder="New Category Name"
                                   required="required">
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