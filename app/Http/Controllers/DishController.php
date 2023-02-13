<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;
use App\Models\Recipes;
use App\Models\Contractor;
use Illuminate\Support\Facades\Http;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myEvents = Dish::all();
        
        return view('dish.list', ['dish'=>$myEvents],);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $recipes = Recipes::all();
        $con = Contractor::all();
        return view('dish.add',['recipes' => $recipes],['con' => $con],);
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
            $event = new Dish();
            $event->id_przepisu = $request->id_przepisu;
            $event->id_wykonawcy = $request->id_wykonawcy;
            
            $event->save();
        
            return redirect('/dish/list');
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
        $event = Dish::find($id);

        if($event == null){
            $error_message = "Dish id= ".$id." not find";
            return view('dish.message',['message'=>$error_message,'type_of_message'=>'Error']);
        }
        if ($event->count() > 0)
            return view('dish.show', ['dish' => $event,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $myEvent = Dish::find($id);

        $recipes = Recipes::all();
        $con = Contractor::all();
        
        if($myEvent == null){
            $error_message = "Dish id= ".$id." not find";
            return view('dish.message',['message'=>$error_message,'type_of_message'=>'Error']);
        }
        if ($myEvent->count() > 0)
            return view('dish.edit', ['dish' => $myEvent, 'recipe' => $recipes ,'con' => $con],);
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
            $event = Dish::find($id);
            //prepare data from request
            if ($event != null){
                $event->id_przepisu = $request->id_przepisu;
                $event->id_wykonawcy = $request->id_wykonawcy;
                //save to database
                $event->save();
                
                return redirect('/dish/list');
            }
            else {
                $error_message = "Dish id= $id not find";
                return view('dish.message',['message'=>$error_message,'type_of-message'=>'Error']);
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
        $event = Dish::find($id);

        if($event != null){
            $event->delete();

            return redirect('dish/list');
        }
        else{
            $msg = "Delete dish id = $id not find";
            return view('dish.message',['message'=>$msg, 'type_of_message'=>'Error']);
        }
    }
}
