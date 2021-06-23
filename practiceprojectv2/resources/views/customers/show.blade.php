<?php
?>

@extends('layouts.master')

@section('title')
    Appointments
@endsection
@section('content')


    <div class="card">
        <div class="card-header">
            <p>{{$customer->id}}</p>
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$customer->name}}</h5>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Beschrijving</th>
                    <th scope="col">Created at</th>
                </tr>
                </thead>
                <tbody>
                @forelse($customer->appointments as $appointment)
                    <tr>
                        <td>{{ $appointment->beschrijving }}</td>
                        <td>{{ $appointment->created_at }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">Er zijn geen afspraken gemaakt met deze customer</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
            <a href="{{route('customers.edit', $customer->id)}}" class="btn btn-primary">Edit</a>
            <div class="item buttons">
                <form action="{{route('customers.destroy', $customer->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <input   class="btn btn-danger" id="card_btn-del" type="submit" value="Delete Customer">
                </form>
            </div>
        </div>
    </div>
@endsection
