<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;
use App\Models\Menu;
use Illuminate\Support\Facades\Http;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myEvents = Events::all();
        
        return view('events.list', ['events'=>$myEvents],);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::all();

        return view('events.add',['menus' => $menus],);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        $validated = $request->validate([
            'nazwa' => 'required',
            'data' => 'required',
            'ilosc_gosci' => 'required',
            'id_menu' => 'required',
        ]);
        */

        $validated = true;

        if ($validated) {
            $event = new Events();
            $event->nazwa = $request->nazwa;
            $event->data = $request->data;
            $event->ilosc_gosci = $request->ilosc_gosci;
            $event->id_menu = $request->id_menu;
            
            $event->save();
        
            return redirect('/events/list');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Events::find($id);

        if($event == null){
            $error_message = "Event id= ".$id." not find";
            return view('events.message',['message'=>$error_message,'type_of_message'=>'Error']);
        }
        if ($event->count() > 0)
            return view('events.show', ['events' => $event,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $myEvent = Events::find($id);
        $menus = Menu::all();
        
        if($myEvent == null){
            $error_message = "Event id= ".$id." not find";
            return view('events.message',['message'=>$error_message,'type_of_message'=>'Error']);
        }
        if ($myEvent->count() > 0)
            return view('events.edit', ['events' => $myEvent],['menus' => $menus],);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /*
        $validated = $request->validate([
            'data' => 'required|data',
        ]);
        */
        

        $validated = true;

        if($validated){
            $event = Events::find($id);
            //prepare data from request
            if ($event != null){
                $event->nazwa = $request->nazwa;
                $event->data = $request->data;
                $event->ilosc_gosci = $request->ilosc_gosci;
                $event->id_menu = $request->id_menu;
                //save to database
                $event->save();
                
                return redirect('/events/list');
            }
            else {
                $error_message = "Event id= $id not find";
                return view('events.message',['message'=>$error_message,'type_of-message'=>'Error']);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Events::find($id);

        if($event != null){
            $event->delete();

            return redirect('events/list');
        }
        else{
            $msg = "Delete event id = $id not find";
            return view('events.message',['message'=>$msg, 'type_of_message'=>'Error']);
        }
    }
}
