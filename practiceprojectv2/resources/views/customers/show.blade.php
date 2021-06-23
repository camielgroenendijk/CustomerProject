<?php
?>

@extends('layouts.master')

@section('title')
    Appointments
@endsection
@section('content')
<table>
    <thead>
    <tr>
        <th>Customer ID</th>
        <th>
            Beschrijving
        </th>
        <th>Created at</th>
    </tr>
    </thead>
    <tbody>
    @forelse($customer->appointments as $appointment)
        <tr>
            <td>{{ $appointment->customer_id }}</td>
            <td><a href="{{ route('appointments.show', $appointment->id) }}">{{ $appointment->title }} </a></td>
            <td>{{ $appointment->beschrijving }}</td>
            <td>{{ $appointment->created_at }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="3">Er zijn geen afsrpaken gemaakt met deze customer</td>
        </tr>
    @endforelse
    </tbody>
</table>

<div class="item buttons">
    <a class="btn" id="card_btn-edit" href="{{route('customers.edit', $customer->id)}}">Edit Customer</a>
    <form action="{{route('customers.destroy', $customer->id)}}" method="post">
        @method('delete')
        @csrf
        <input class="link" id="card_btn-del" type="submit" value="Delete Customer">
    </form>
</div>
@endsection
