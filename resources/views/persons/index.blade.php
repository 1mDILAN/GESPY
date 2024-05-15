<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('clients.create') }}" class="btn btn-outline-primary w-full">Create
                        Department</a>
                    <table class="table table-hover table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Location</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($departments as $department)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $department->id }}</td>
                                    <td>{{ $department->name }}</td>
                                    <td>{{ $department->location }}</td>
                                    <td>{{ $department->phone_number }}</td>
                                    <td>
                                        <div class="btn-group w-full">
                                            <a href="{{ route('departments.edit', $department->id) }}"
                                                class="btn btn-outline-warning">Edit</a>
                                            <form method="POST"
                                                action="{{ route('departments.destroy', $department->id) }}"
                                                style="display: none;" id="delete-form-{{ $department->id }}">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <a href="#" class="btn btn-outline-danger"
                                                onclick="event.preventDefault(); document.getElementById('delete-form-{{ $department->id }}').submit();">
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