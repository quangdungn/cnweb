@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Add Student</h2>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        @include('students.form')
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
