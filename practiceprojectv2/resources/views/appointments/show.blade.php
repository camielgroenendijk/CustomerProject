<?php
?>

@extends('layouts.master')

@section('title')
    Appointments
@endsection
@section('content')
    <div class="container">
        <table class="table table-dark table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">customer ID</th>
                <th scope="col">Beschrijving</th>
                <th scope="col">Created_at</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">{{$appointment->id}}</th>
                <td>{{$appointment->customer_id}}</td>
                <td>{{$appointment->beschrijving}}</td>
                <td>{{$appointment->created_at}}</td>

            </tr>
            </tbody>
        </table>
        <div class="item buttons">
            <a class="btn" id="card_btn-edit" href="{{route('appointments.edit', $appointment->id)}}">Edit
                appointment</a>
            <form action="{{route('appointments.destroy', $appointment->id)}}" method="post">
                @method('delete')
                @csrf
                <input class="link" id="card_btn-del" type="submit" value="Delete appointment">
            </form>
        </div>
@endsection
