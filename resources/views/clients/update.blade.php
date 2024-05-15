<form method="POST" action="{{ route('employees.update', $employee->id) }}">
    @csrf
    @method('PATCH')
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{ $employee->name }}" required><br><br>
    <label for="surname">Surname:</label>
    <input type="text" id="surname" name="surname" value="{{ $employee->surname }}" required><br><br>
    <label for="position">Position:</label>
    <input type="text" id="position" name="position" value="{{ $employee->position }}" required><br><br>
    <label for="department_id">Department:</label>
    <select id="department_id" name="department_id" required>
        @foreach($departments as $department)
            <option value="{{ $department->id }}" @if($department->id == $employee->department_id) selected @endif>{{ $department->name }}</option>
        @endforeach
    </select><br><br>
    <label for="hiring_date">Hiring Date:</label>
    <input type="date" id="hiring_date" name="hiring_date" value="{{ $employee->hiring_date }}" required><br><br>
    <label for="salary">Salary:</label>
    <input type="number" id="salary" name="salary" value="{{ $employee->salary }}" step="0.01" required><br><br>
    <button type="submit">Update Employee</button>
</form>