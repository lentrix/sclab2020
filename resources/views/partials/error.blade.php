@if(count($errors)>0)
    <div class="card">
        <div class="card-body bg-danger text-white">
            <ul>
                @foreach($errors->all() as $err)
                    <li>{{$err}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@elseif($Error = session('Error'))
    <div class="card">
        <div class="card-body bg-danger text-white">
            {{$Error}}
        </div>
    </div>
@endif
