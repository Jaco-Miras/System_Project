<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Event;
class EventController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $events = \App\Event::all();
        return view('event.index',compact('events'));
    }


    public function create(){
        return view('event.create');
    }

    public function store(Request $request){
        //  dd($request->date);
        $data = request()->validate([
            'id'=>'required',
            'event_name'=>'required',
            'location'=>'required',
            'date'=>'required'
        ]);
        \App\Event::create($data);
        return redirect()->back()->with('alert', 'Event Added Successfully!');
          
    }
    public function show(\App\Event $event){
          return view('event.show', compact('event'));
        // dd($event);
       }
       public function update(\App\Event $event, Request $request){
        //  dd($request->event_name);
        $data = request()->validate([
          'event_name'=>'required',
          'location'=>'required',
          'date'=>'required'
          ]);
         $event->update($data);
         return redirect()->back()->with('alert', 'Event Updated Successfully!');
          
}
    public function participant($event){
        // dd($event);
        $participants = \App\Participant::where('event_id', $event)->get();
        return view('event.participant', compact('participants'));
        // dd($participants);
    }
// public function delete($id){
//     $event = Event::where('event_id','=',$id)->first();
//     $event->delete();
//     return redirect('/event');
// }
}
// public function test(){
//     dd('hello');
// }