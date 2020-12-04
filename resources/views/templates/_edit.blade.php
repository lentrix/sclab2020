<button class="btn btn-info btn-sm" data-toggle="modal" data-target="#updateItemModal{{$id}}">...</button>

<div class="modal fade" id="updateItemModal{{$id}}" tabindex="-1" aria-labelledby="updateItemModal{{$id}}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateItemModal{{$id}}Label">Update Test Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!! Form::open(['url'=>"/templates/update-item", 'method'=>'post']) !!}
            <div class="modal-body">
                {{Form::hidden('lbt_template_id', $template->id)}}
                {{Form::hidden('id', $id)}}
                <div class="form-group">
                    {{Form::label('test', 'Test Name')}}
                    {{Form::text('test',$test,['class'=>'form-control','required'])}}
                </div>
                <div class="form-group">
                    {{Form::label('normal', 'Normal Values')}}
                    {{Form::textarea('normal',$normal,['class'=>'form-control'])}}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update Item</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
