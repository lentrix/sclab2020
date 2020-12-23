<div class="form-group">
    Status:
    &nbsp;&nbsp;&nbsp;&nbsp;
    {!! Form::radio("status", "pending", $labtest->status=='pending', ["id"=>'pending']) !!}
    {!! Form::label("pending", "Pending") !!}
    &nbsp;&nbsp;&nbsp;&nbsp;
    {!! Form::radio("status", "on-going", $labtest->status=='on-going', ["id"=>'on-going']) !!}
    {!! Form::label("on-going", "On-going") !!}
    &nbsp;&nbsp;&nbsp;&nbsp;
    {!! Form::radio("status", "available", $labtest->status=='available', ["id"=>'available']) !!}
    {!! Form::label("available", "Available") !!}
</div>
<div class="form-group">
    <button class="btn btn-primary">
        Save Changes
    </button>
    <a href='{{url("/labtests/reset/$labtest->id")}}' class="btn btn-info">Reset</a>
</div>
