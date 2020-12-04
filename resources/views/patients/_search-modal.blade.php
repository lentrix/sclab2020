<!-- Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Search Patient</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        {!! Form::open(['url'=>'/patients/search', 'method'=>'post']) !!}
        <div class="modal-body">


            <div class="form-group">
                {{Form::label('lname', 'Last Name')}}
                {{Form::text('lname',null,['class'=>'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('fname', 'First Name')}}
                {{Form::text('fname',null,['class'=>'form-control'])}}
            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Search Patient</button>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
