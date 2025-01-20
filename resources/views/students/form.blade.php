<div class="form-group">
    <label>First Name</label>
    <input type="text" name="first_name" class="form-control" value="{{ $student->first_name ?? old('first_name') }}" required>
</div>
<div class="form-group">
    <label>Last Name</label>
    <input type="text" name="last_name" class="form-control" value="{{ $student->last_name ?? old('last_name') }}" required>
</div>
<div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control" value="{{ $student->email ?? old('email') }}" required>
</div>
<div class="form-group">
    <label>Student Number</label>
    <input type="text" name="student_number" class="form-control" value="{{ $student->student_number ?? old('student_number') }}" required>
</div>
<div class="form-group">
    <label>Class</label>
    <select name="class_id" class="form-control" required>
        <option value="">-- Select Class --</option>
        @foreach($classes as $class)
            <option value="{{ $class->id }}" {{ (isset($student) && $student->class_id == $class->id) ? 'selected' : '' }}>
                {{ $class->class_name }}
            </option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label>Status</label>
    <select name="status" class="form-control" required>
        <option value="Trial" {{ (isset($student) && $student->status == 'Trial') ? 'selected' : '' }}>Trial</option>
        <option value="Enrolled" {{ (isset($student) && $student->status == 'Enrolled') ? 'selected' : '' }}>Enrolled</option>
        <option value="Dropped" {{ (isset($student) && $student->status == 'Dropped') ? 'selected' : '' }}>Dropped</option>
    </select>
</div>
<div class="form-group">
    <label>Date of Birth</label>
    <input type="date" name="date_of_birth" class="form-control" value="{{ $student->date_of_birth ?? old('date_of_birth') }}" required>
</div>
