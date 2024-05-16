<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', ['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::all();
        return view('clients.create', ['clients' => $clients]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $client = new Client();
        $client->name = $request->input('name');
        $client->surname = $request->input('surname');
        $client->position = $request->input('position');
        $client->client_id = $request->input('client_id');
        $client->hiring_date = $request->input('hiring_date');
        $client->salary = $request->input('salary');

        $client->save();

        return redirect()->route('clients.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        return view('clients.show', ['client' => $client]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        $clients = Client::all();
        return view('clients.edit', ['client' => $client, 'clients' => $clients]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        $client->fill($request->only(['name', 'surname', 'phone', 'team_name', 'project_name']));
        $client->save();

        return redirect()->route('clients.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        try {
            $client->delete();
            return redirect()->route('clients.index')->with('success', 'Client deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('clients.index')->with('error', 'Cannot delete client, it is related to attendances.');
        }
        return redirect()->route('clients.index')->with('status', 'Client deleted successfully');
    }
}
