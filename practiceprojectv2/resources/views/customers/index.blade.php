<?php
?>

@extends('layouts.master')

@section('title')
    Customers
@endsection

@section('content')
    <div class="container">
        <table class="table table-dark table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">name</th>
                <th scope="col">Details</th>

            </tr>
            </thead>
            <tbody>
            @foreach($customers as $customer) <?php //de foreach loop gaat één voor één door alle customers heen en geeft deze aan ons door een variabele aan te maken genaamkt $customer?>
                <tr>
                    <th> {{$customer->id}}</th>
                    <td>{{$customer->name}}</td>
                    <td><a href="{{route('customers.show', $customer->id)}}">Details</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a class="btn" href="{{route('customers.create')}}">Create a new customer</a>
    </div>
@endsection
