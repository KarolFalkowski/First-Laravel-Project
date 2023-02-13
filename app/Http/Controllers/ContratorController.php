<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contractor;
use Illuminate\Support\Facades\Http;

class ContratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myEvents = Contractor::all();
        
        return view('contrator.list', ['contrator'=>$myEvents],);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contrator.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = true;

        if ($validated) {
            $event = new Contractor();
            $event->nazwa = $request->nazwa;
            
            $event->save();
        
            return redirect('/contrator/list');
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
        $event = Contractor::find($id);

        if($event == null){
            $error_message = "Contrator id= ".$id." not find";
            return view('contrator.message',['message'=>$error_message,'type_of_message'=>'Error']);
        }
        if ($event->count() > 0)
            return view('contrator.show', ['contrator' => $event,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $myEvent = Contractor::find($id);
        
        if($myEvent == null){
            $error_message = "Contrator id= ".$id." not find";
            return view('contrator.message',['message'=>$error_message,'type_of_message'=>'Error']);
        }
        if ($myEvent->count() > 0)
            return view('contrator.edit', ['contrator' => $myEvent,]);
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
        $validated = true;

        if($validated){
            $event = Contractor::find($id);
            //prepare data from request
            if ($event != null){
                $event->nazwa = $request->nazwa;
                //save to database
                $event->save();
                
                return redirect('/contrator/list');
            }
            else {
                $error_message = "Contrator id= $id not find";
                return view('contrator.message',['message'=>$error_message,'type_of-message'=>'Error']);
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
        $event = Contractor::find($id);

        if($event != null){
            $event->delete();

            return redirect('contrator/list');
        }
        else{
            $msg = "Delete contrator id = $id not find";
            return view('contrator.message',['message'=>$msg, 'type_of_message'=>'Error']);
        }
    }
}
