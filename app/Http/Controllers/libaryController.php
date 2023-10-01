<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;


class libaryController extends Controller
{
public function index(){
    $libary = response()->json(User::all());
    return $libary;
}
public function show($id){
    $libary = response()->json(User::find($id));
    return $libary;
}

public function listView()
{
$libary = libary::all();
return view('libary.list', ['tasks' => $users]);
}
$libary->name = $request->name;
$libary->Címe = $request->Címe;
$libary->nyitas = $request->nyitas;
$libary->zaras = $request->zaras;
$libary->save();
return redirect('/libary/list');
}

public function newView()
{
$libary = libary::all();
return view('libary.new', ['libary' => $libary]);
}
public function editView($id){
$libary = libary::all();
$libary= libary::find($id);
return view('libary.edit', ['libary' => $libary, 'libary' => $libary]);
}
public function listView()
{
$libary = libary::all();
return view('libary.list', ['libary' => $libary]);
}
}