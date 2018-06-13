@extends('layouts.default')
@section('content')
<div class="container">
    <h2>Personnages</h2>
    <div class=" justify-content-center d-flex flex-wrap">
        @foreach( $data as $value)
        <div class="card-name align-items-center  d-flex col-3 m-1"> 
            <p class="col-9 mt-2 mb-2" > {{ $value->name }} </p>
            <button class="col btn-secondary align-items-center mt-2 mb-2">voir</button>
        </div>
        @endforeach
    </div>
</div>
@stop