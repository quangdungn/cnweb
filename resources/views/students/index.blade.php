@extends('layouts.app')

@section('content')
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Students <b>Management</b></h2>
					</div>
					
					<div class="col-sm-6">
						<a href="{{ route('students.create') }}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add Student</span></a>
												
					</div>
				</div>
			</div>
			@if(session('success'))
				<div class="alert alert-success">
					{{ session('success') }}
				</div>
			@endif
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Student ID</th>
                        <th>Fullname</th>
                        <th>Class Name</th>
                        <th>Email</th>
                        <th>Date of Birth</th>
                        <th>Status</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->first_name }} {{ $student->last_name }}</td>
                            <td>{{ $student->class->class_name }}</td>
                            <td>{{ $student->email}}</td>
                            <td>{{ $student->date_of_birth }}</td>
                            <td>{{ $student->status }}</td>
                            <td>
                                {{-- <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">Sửa</a>\ --}}
								<a href="{{ route('students.edit', $student->id) }}" class="edit" ><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
        
                                <!-- Nút xóa kèm modal xác nhận -->
                                {{-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $student->id }}">
                                    Delete
                                </button> --}}
								<a href="#deleteModal{{ $student->id }}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
        
                                <!-- Modal xác nhận xóa -->
                                <div class="modal fade" id="deleteModal{{ $student->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $student->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel{{ $student->id }}">Delete</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are You Sure?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
			</table>
			{{-- Phân trang nếu cần --}}
			<div class="d-flex justify-content-center">
				{{ $students->links('pagination::bootstrap-4') }}
			</div>
		</div>
	</div>        
</div>
@endsection