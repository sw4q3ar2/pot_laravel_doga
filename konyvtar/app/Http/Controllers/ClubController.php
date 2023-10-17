<?php

namespace App\Http\Controllers;

use App\Models\Clubs;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function index(){
        $clubs = response()->json(Clubs::all());
        return $clubs;
    }

    public function show(){
        $clubs = response()->json(Clubs::all());
        return $clubs;
    }

    public function destroy($id){
        return Clubs::find($id)->delete();
        return redirect('api/club/list');
    }

    public function store(Request $request){
        $clubs = new Clubs();
        $clubs->date = $request->date;
        $clubs->location = $request->location;
        $clubs->max_number = $request->max_number;
        $clubs->save();
    }

    public function update(Request $request, $id){
        $clubs = Clubs::find($id);
        $clubs->date = $request->date;
        $clubs->location = $request->location;
        $clubs->max_number = $request->max_number;
        $clubs->save();
    }

    public function newView(){

    }

    public function editView($id){
        
    }

    public function listView(){
        $clubs = Clubs::all();
        return view('club.list', ['clubs' => $clubs]);
    }
}
