<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\Http;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myMenu = Menu::all();
        
        return view('menu.list', ['menu'=>$myMenu],);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.add');
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
            'module_name' => 'required|min:3|max:25|unique:ship_modules',
            'is_workable' => 'required',
        ]);
        */

        $validated = true;

        if ($validated) {
            $menu = new Menu();
            $menu->nazwa = $request->nazwa;
            
            $menu->save();
        
            return redirect('/menu/list');
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
        $menu = Menu::find($id);

        if($menu == null){
            $error_message = "Menu id= ".$id." not find";
            return view('menu.message',['message'=>$error_message,'type_of_message'=>'Error']);
        }
        if ($menu->count() > 0)
            return view('menu.show', ['menu' => $menu,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::find($id);
        
        if($menu == null){
            $error_message = "Menu id= ".$id." not find";
            return view('menu.message',['message'=>$error_message,'type_of_message'=>'Error']);
        }
        if ($menu->count() > 0)
            return view('menu.edit', ['menu' => $menu,]);
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
            $menu = Menu::find($id);
            //prepare data from request
            if ($menu != null){
                $menu->nazwa = $request->nazwa;
            
                $menu->save();
                
                return redirect('/menu/list');
            }
            else {
                $error_message = "Menu id= $id not find";
                return view('menu.message',['message'=>$error_message,'type_of-message'=>'Error']);
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
        $menu = Menu::find($id);

        if($menu != null){
            $menu->delete();

            return redirect('menu/list');
        }
        else{
            $msg = "Delete menu id = $id not find";
            return view('menu.message',['message'=>$msg, 'type_of_message'=>'Error']);
        }
    }
}
