@extends('base')

@section('content')

@include("lab_tests.results._header")

<div class="page">

<?php $data = json_decode($labtest->data); ?>
<br><br>
<h2>Remarks: </h2>
<br>
<pre style="border: 1px solid #888; padding: 20px; font-family:'Courier New', Courier; font-size: 1.2em">{{$data[1]->result}}</pre>

<br>
<p>
    <strong><u>{{$data[2]->result}}</u></strong><br>
    <i>Cariologist/Internist</i>
</p>

</div>

@stop
