<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;


class raktarController extends Controller
{
public function index(){
    $raktar = response()->json(raktar::all());
    return $raktar;
}
public function show($id){
    $raktar = response()->json(raktar::find($id));
    return $raktar;
}

public function listView()
{
$raktar = raktar::all();
return view('raktar.list', ['tasks' => $raktar]);
}
$raktar = raktar::find($id);
$raktar->címe = $request->címe;
$raktar->Nev = $request->Nev;
$raktar->kiadas_eve = $request->kiadas_eve;
$raktar->save();
return redirect('/task/list');


    public function newView()
    {
    $raktar = raktar::all();
    return view('raktar.new', ['users' => $users]);
    }
    public function editView($id){
    $raktar = raktar::all();
    $raktar= raktar::find($id);
    return view('raktar.edit', ['users' => $raktar, 'task' => $raktar]);
    }
    public function listView()
    {
    $raktar = raktar::all();
    return view('raktar.list', ['tasks' => $raktar]);
    }
}