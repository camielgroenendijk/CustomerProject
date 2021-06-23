<?php
?>

@extends('layouts.master')

@section('title')
    Appointments
@endsection
@section('content')
    <form method=POST action="{{route('customers.store')}}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Customer Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('name')
            {{$message}}
            @enderror
        </div>
        <input type="submit" value="submit">
    </form>

    <a class="btn" href="{{route('customers.index')}}">Terug naar het overzicht</a>
@endsection
