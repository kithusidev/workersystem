<?php

namespace App\Http\Controllers;

use App\Models\worker;
use Illuminate\Http\Request;

class WorkersController extends Controller
{
    public function index()
    {
        $workers=worker::latest()->paginate(2);
        return view('workers.index',compact('workers'))
        ->with('i',(request()->input('page',1)-1)*2);
    }

    public function create()
    {
        return view('workers.create');
    }

    public function store(Request $request)
    {
        $request->validate=([
            'name'=>'required',
            'position'=>'required'

        ]);
        worker::create($request->all());
        return redirect()->route('workers.index')
        ->with('success','workers created successfully');
    }

    public function edit(worker $worker)
    {
        return view('workers.edit', compact('worker'));
    }

    public function update(Request $request, worker $worker)
    {
        $request->validate([

        ]);
        $worker->update($request->all());
        return redirect()->route('workers.index')
        ->with('success','worker updated successfully');
    }

    public function destroy(worker $worker)
    {
        $worker->delete();
        return redirect()->route('workers.index')
        ->with('success','worker deleted successfully');
    }
}
