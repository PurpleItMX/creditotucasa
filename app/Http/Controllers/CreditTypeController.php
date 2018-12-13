<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\CreditType;

class CreditTypeController extends Controller
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
        try{
            $creditTypes = CreditType::all();
            return view('credit-type.index')
            ->with('creditTypes',$creditTypes);
         }catch (QueryException $e){
            $message = $e->errorInfo[1] ."-".$e->errorInfo[2];
            return view('credit-type.index')
            ->withErrors([$message]);
       }
    }

     /**
     * Show the form for create new CreditType.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){}


    /**
     * Show the form for edit CreditType.
     *
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        try{
            $creditType = CreditType::findOrFail($id);
            return $creditType;
        }catch (QueryException $e){
            $message = $e->errorInfo[1] ."-".$e->errorInfo[2];
            return view('credit-type.index')
            ->withErrors([$message]);
       }
    }

    /**
     * Action for save CreditType
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        try{
            $id = $request['id_credit_type'];
            if($id == NULL){
                $creditType = new CreditType();
    	        $creditType->name = $request['name'];
    	        $creditType->url_img = "sdadd"; //$request['url_img'];
    	        $creditType->estatus = ($request['estatus'] == "on")?1:0;
                $message = "Registro Creado";
            }else{
                $creditType  = CreditType::findOrFail($id);
                $creditType->name = $request['name'];
    	        $creditType->url_img = "sdadd"; //$request['url_img'];
    	        $creditType->estatus = ($request['estatus'] == "on")?1:0;
                $message = "Registro Actualizado";
            }
            $creditType->save();
            if($request['id_credit_type_redirect'] == 'true'){
                $creditTypes = CreditType::all();
                return view('credit-type.index')
                ->with('creditTypes',$creditTypes)
                ->withSuccess($message);
            }else{
                return CreditType::all()->where('estatus',1);
            }
        }catch (QueryException $e){
            $creditTypes = CreditType::all();
            $message = $e->errorInfo[1] ."-".$e->errorInfo[2];
            return view('credit-type.index')
            ->with('creditTypes',$creditTypes)
            ->withErrors([$message]);
       }
    }

    /**
     * Action for delete Warehouse
     *
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        try{
            $creditType = CreditType::findOrFail($id);
    	    $creditType->delete();
            $creditTypes = CreditType::all();
            return view('credit-type.index')
            ->with('creditTypes',$creditTypes)
            ->withSuccess('Registro Borrado');
        }catch (QueryException $e){
            $creditTypes = CreditType::all();
            $message = $e->errorInfo[1] ."-".$e->errorInfo[2];
            return view('credit-type.index')
            ->with('creditTypes',$creditTypes)
            ->withErrors([$message]);
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
            $creditType = CreditType::where($request['column'], 'like', $request['val'])
            ->where('id_credit_type', '!=', $request['id'])->get();
        }else{
            $creditType = CreditType::where($request['column'], 'like', $request['val'])->get();
        }

        return $creditType;
    }
}
