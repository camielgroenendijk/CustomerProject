<?php
?>

@extends('layouts.master')

@section('title')
    Customers
@endsection

@section('content')
<div class="row row-cols-1 row-cols-md-4 g-4">
    <div class="col">
        @foreach($customers as $customer)    <?php //de foreach loop gaat één voor één door alle customers heen en geeft deze aan ons door een variabele aan te maken genaamkt $customer ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$customer->name}}</h5>
                    <a type="button" class="btn btn-outline-primary" href="{{route('customers.show', $customer->id)}}">Show details</a>
                </div>
            </div>
    </div>
    <div class="col">
        @endforeach
    </div>
</div>
<a class="btn" href="{{route('customers.create')}}">Create a new customer</a>
</div>
@endsection
