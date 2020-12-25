<h1 class="d-print-none">
    View Laboratory Test
    @if($labtest->status=="available")
    <button class="btn btn-secondary float-right" onclick="window.print()">
        Print Result
    </button>
    @endif
    @if($labtest->status!="available" && auth()->user()->role=="medtech")
    <a href='{{url("labtests/edit-results/$labtest->id")}}' class="btn btn-info float-right">Edit Results</a>
    @endif
</h1>
<br>
<div style="color: #e36602; text-align:center">
    <img src="{{asset('images/sclab_logo.png')}}" style="float:left; height: 50px" alt="">
    <div style="font-size: 1.3em; font-weight: bold; border-bottom: 3px solid #e36602; margin: 0 150px">
        STARS AND COMET MEDICAL CLINIC & LABORATORY
    </div>
    <div>
        Pooc Occidental, Tubigon, Bohol. Cell No.: 0948.594.8216 / Tel.No.: 508-8055<br>
        Email Address: stars.comet_laboratory@yahoo.com.ph <br>
        DOH License No.: GCL-7-2017-173-P
    </div>
</div>

<br>
<table class="table table-bordered result-table">
    <tr>
        <th style="width: 170px">Patient Name:</th><td colspan="3">{{$labtest->patient->name}}</td>
        <th>Physician:</th><td>{{$labtest->physician}}</td>
    </tr>
    <tr>
        <th>Age:</th><td>{{$labtest->patient->bdate->age}} Y.O.</td>
        <th>Sex:</th><td>{{$labtest->patient->gender}}</td>
        <th>Date & Time:</th><td>{{$labtest->created_at->toDayDateTimeString()}}</td>
    </tr>
</table>

<h1 style="text-align:center; text-transform: uppercase">{{ \App\LabTestBlueprint::labsList()[$labtest->formal_name] }}</h1>
