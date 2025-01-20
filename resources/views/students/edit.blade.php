@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Edit Student</h2>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('students.form', ['student' => $student])
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
