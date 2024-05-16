@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Employees') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('employees.create') }}" class="btn btn-outline-primary w-full">Create Employee</a>
                    <table class="table table-hover table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Surname </th>
                                <th scope="col">Position</th>
                                <th scope="col">Department</th>
                                <th scope="col">Hiring Date</th>
                                <th scope="col">Salary</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($employees as $employee)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $employee->id }}</td>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->surname }}</td>
                                    <td>{{ $employee->position }}</td>
                                    <td>{{ $employee->department->name }}</td>
                                    <td>{{ $employee->hiring_date }}</td>
                                    <td>{{ $employee->salary }}</td>
                                    <td>
                                        <div class="btn-group w-full">
                                            <a href="{{ route('employees.edit', $employee->id) }}"
                                                class="btn btn-outline-warning">Edit</a>
                                            <form method="POST"
                                                action="{{ route('employees.destroy', $employee->id) }}"
                                                style="display: none;" id="delete-form-{{ $employee->id }}">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <a href="#" class="btn btn-outline-danger"
                                                onclick="event.preventDefault(); document.getElementById('delete-form-{{ $employee->id }}').submit();">
                                                Delete
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">No departments found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
