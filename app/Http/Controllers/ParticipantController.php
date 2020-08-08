<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Participant;
class ParticipantController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
}
    public function index(){
        $participants = \App\Participant::all();
      
        return view('members.index',compact('participants'));
      }
    

    public function create(){
      $events = \App\Event::all();
      return view('members.create',compact('events'));
    }

       public function store(Request $request){
     // dd($request->firstname);
        $data = request()->validate([ 
          'id'=>'required',
          'firstname'=>'required',
          'lastname'=>'required',
          'department'=>'required',
          'event_id'=>'required'
          ]);
          \App\Participant::create($data);
          return redirect()->back()->with('alert', 'Participant Added Successfully!');

       }

       public function show(\App\Participant $participant){
        // dd($participant);
          return view('members.show', compact('participant'));
       }

       public function update(\App\Participant $participant, Request $request){
        // dd($participant);
        $data = request()->validate([
          'firstname'=>'required',
          'lastname'=>'required',
          'department'=>'required'
          ]);
         $participant->update($data);
          return redirect()->back()->with('alert', 'Participant Updated Successfully!');
       }

    //    public function destroy($id)
    // {
    //     $participant =  \App\Participant::find($id);
    //     $participant->delete();
    //     $participant->save();
    //     return redirect()->back();
    // }
 
}