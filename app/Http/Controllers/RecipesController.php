<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipes;
use Illuminate\Support\Facades\Http;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myEvents = Recipes::all();
        
        return view('recipes.list', ['recipes'=>$myEvents],);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipes.add');
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
            $event = new Recipes();
            $event->nazwa = $request->nazwa;
            $event->opis = $request->opis;
            
            $event->save();
        
            return redirect('/recipes/list');
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
        $event = Recipes::find($id);

        if($event == null){
            $error_message = "Recipes id= ".$id." not find";
            return view('recipes.message',['message'=>$error_message,'type_of_message'=>'Error']);
        }
        if ($event->count() > 0)
            return view('recipes.show', ['recipes' => $event,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $myEvent = Recipes::find($id);
        
        if($myEvent == null){
            $error_message = "Recipes id= ".$id." not find";
            return view('recipes.message',['message'=>$error_message,'type_of_message'=>'Error']);
        }
        if ($myEvent->count() > 0)
            return view('recipes.edit', ['recipes' => $myEvent,]);
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
            $event = Recipes::find($id);
            //prepare data from request
            if ($event != null){
                $event->nazwa = $request->nazwa;
                $event->opis = $request->opis;
                //save to database
                $event->save();
                
                return redirect('/recipes/list');
            }
            else {
                $error_message = "Recipes id= $id not find";
                return view('recipes.message',['message'=>$error_message,'type_of-message'=>'Error']);
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
        $event = Recipes::find($id);

        if($event != null){
            $event->delete();

            return redirect('recipes/list');
        }
        else{
            $msg = "Delete recipes id = $id not find";
            return view('recipes.message',['message'=>$msg, 'type_of_message'=>'Error']);
        }
    }
}
