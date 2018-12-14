<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\State;

class StateController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $states = State::all();
        return view('state.index')
        ->with('states',$states);
    }

     /**
     * Show the form for create new State.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){}


    /**
     * Show the form for edit State.
     *
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        try{
            $state = State::findOrFail($id);
            return $state;
        }catch (QueryException $e){
        	$message = $e->errorInfo[1] ."-".$e->errorInfo[2];
            return redirect('/states')->with('error', $message);
       }
    }

    /**
     * Action for save State
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        try{
            $id = $request['id_state'];
            if($id == NULL){
              $state = new State();
              $message = "Registro Creado";
            }else{
                $state  = State::findOrFail($id);
                $message = "Registro Actualizado";
            }
              $state->name = $request['name'];
              $state->save();

            if($request['id_state_redirect'] == 'true'){
                return redirect('/states')->with('success', $message);
            }else{
                return State::all();
            }
        }catch (QueryException $e){
            $message = $e->errorInfo[1] ."-".$e->errorInfo[2];
            return redirect('/states')->with('error', $message);
       }
    }

    /**
     * Action for delete State
     *
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        try{
            $state = State::findOrFail($id);
    	    $state->delete();
            return redirect("/states")->with("success","Registro borrado");
        }catch (QueryException $e){
            $message = $e->errorInfo[1] ."-".$e->errorInfo[2];
            return redirect('/states')->with('error', $message);
       }
    }    

    /**
    * Action search if the data exist in the bd.
    *
    * @return \Illuminate\Http\Response
    */
    public function search(Request $request)
    {
       if($request['id'] != NULL){
           $state = State::where($request['column'], 'like', $request['val'])
           ->where('id_state', '!=', $request['id'])->get();
       }else{
           $state = State::where($request['column'], 'like', $request['val'])->get();
       }

       return $state;
     }

}

