<?php
?>

@extends('layouts.master')

@section('title')
    Appointments
@endsection
@section('content')
<div class="row row-cols-1 row-cols-md-4 g-4">
    <div class="col">
        @foreach($appointments as $appointment)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$appointment->beschrijving}}</h5>
                    <a type="button" class="btn btn-outline-primary" href="{{route('appointments.show', $appointment->id)}}">Show details</a>
                </div>
            </div>
    </div>
    <div class="col">
        @endforeach
    </div>
</div>
<a class="btn" href="{{route('appointments.create')}}">Create a new appointment</a>
</div>
@endsection
