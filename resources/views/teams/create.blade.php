<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Client') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('clients.store') }}" class="row g-3">
                        @csrf
                        <label for="name" class="col-md-2 col-form-label">Name:</label>
                        <div class="col-md-10">
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <label for="location" class="col-md-2 col-form-label">Location:</label>
                        <div class="col-md-10">
                            <input type="text" id="location" name="location" class="form-control" required>
                        </div>
                        <label for="phone_number" class="col-md-2 col-form-label">Phone Number:</label>
                        <div class="col-md-10">
                            <input type="text" id="phone_number" name="phone_number" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-outline-primary w-full">Create Department</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>