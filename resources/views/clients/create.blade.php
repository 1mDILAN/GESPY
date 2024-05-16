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
                        <label for="surname" class="col-md-2 col-form-label">Surname:</label>
                        <div class="col-md-10">
                            <input type="text" id="surname" name="surname" class="form-control" required>
                        </div>
                        <label for="phone" class="col-md-2 col-form-label">Phone:</label>
                        <div class="col-md-10">
                            <input type="text" id="phone" name="phone" class="form-control" required>
                        </div>
                        <label for="team_name" class="col-md-2 col-form-label">Team:</label>
                        <div class="col-md-10">
                            <select id="team_name" name="team_name" class="form-select" required>
                                @foreach($teams as $team)
                                    <option value="{{ $team->name }}">{{ $team->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <label for="project_name" class="col-md-2 col-form-label">Project:</label>
                        <div class="col-md-10">
                            <select id="project_name" name="project_name" class="form-select" required>
                                @foreach($projects as $project)
                                    <option value="{{ $project->name }}">{{ $project->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-outline-primary w-full">Create Client</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
