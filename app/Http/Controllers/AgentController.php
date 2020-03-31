<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth; 
use RealRashid\SweetAlert\Facades\Alert;
use App\Agent;

class AgentController extends Controller
{
    public function index()
    {
        $agents = Agent::paginate(10);

        return view('admin.agents.index', compact('agents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.agents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alert::success('Success', 'Berhasil Terupload');

        Agent::create([
            'name' => request('name'),
            'jabatan' => request('jabatan'),
            'email' => request('email'),
            'telp' => request('telp'),
            'image' => request('image')->store('agents')
        ]);

        return redirect()->route('agent.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agents = Agent::find($id);

        return view('admin.agents.edit', compact('agents'));
    }

    public function update(Agent $agent)
    {
        
        if($agent->image){
            \Storage::delete($agent->image);
        }

        Alert::success('Success', 'Berhasil Terupdate');

        $agent->update([
            'name' => request('name'),
            'jabatan' => request('jabatan'),
            'email' => request('email'),
            'telp' => request('telp'),
            'image' => request('image')->store('agents')
        ]);

        return redirect()->route('agent.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agent $agent)
    {
        $agent->delete();

        \Storage::delete($agent->image);
    }
}
