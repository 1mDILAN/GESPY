<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Employee') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('employees.update', $employee->id) }}" class="row g-3">
                        @csrf
                        @method('PUT')
                        <label for="name" class="col-md-2 col-form-label">Name:</label>
                        <div class="col-md-10">
                            <input type="text" id="name" name="name" value="{{ $employee->name }}" class="form-control" required>
                        </div>
                        <label for="surname" class="col-md-2 col-form-label">Surname:</label>
                        <div class="col-md-10">
                            <input type="text" id="surname" name="surname" value="{{ $employee->surname }}" class="form-control" required>
                        </div>
                        <label for="position" class="col-md-2 col-form-label">Position:</label>
                        <div class="col-md-10">
                            <input type="text" id="position" name="position" value="{{ $employee->position }}" class="form-control" required>
                        </div>
                        <label for="department_id" class="col-md-2 col-form-label">Department:</label>
                        <div class="col-md-10">
                            <select id="department_id" name="department_id" class="form-select" required>
                                @foreach($departments as $department)
                                    <option value="{{ $department->id }}" @if($department->id == $employee->department_id) selected @endif>{{ $department->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <label for="hiring_date" class="col-md-2 col-form-label">Hiring Date:</label>
                        <div class="col-md-10">
                            <input type="date" id="hiring_date" name="hiring_date" value="{{ $employee->hiring_date }}" class="form-control" required>
                        </div>
                        <label for="salary" class="col-md-2 col-form-label">Salary:</label>
                        <div class="col-md-10">
                            <input type="number" id="salary" name="salary" value="{{ $employee->salary }}" step="0.01" max="999999.99" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-outline-primary w-full">Update Employee</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
