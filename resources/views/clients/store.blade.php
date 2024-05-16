<form method="POST" action="{{ route('clients.store') }}">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>
    <label for="surname">Surname:</label>
    <input type="text" id="surname" name="surname" required><br><br>
    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" required><br><br>
    <label for="team_name">Team:</label>
    <select id="team_name" name="team_name" required>
        @foreach($teams as $team)
            <option value="{{ $team->name }}">{{ $team->name }}</option>
        @endforeach
    </select><br><br>
    <label for="project_name">Project:</label>
    <select id="project_name" name="project_name" required>
        @foreach($projects as $project)
            <option value="{{ $project->name }}">{{ $project->name }}</option>
        @endforeach
    </select><br><br>
    <button type="submit">Create Client</button>
</form>
