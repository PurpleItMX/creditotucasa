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
            return redirect('/credit-types')->with('error', $message);
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

            $creditType = CreditType::findOrFail($id);
            return $creditType;
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
                $message = "Registro Creado";
            }else{
                $creditType  = CreditType::findOrFail($id);
                $message = "Registro Actualizado";
            }

            $creditType->name = $request['name'];
            if($request['url_hidden'] == NULL){
              $url_fisica = public_path()."/img/".$_FILES["url_img"]["name"];
              $url_actual = "img/".$_FILES["url_img"]["name"];
              move_uploaded_file($_FILES["url_img"]["tmp_name"], $url_fisica);
              $creditType->url_img =$url_actual;
            }else {
                $creditType->url_img = $request['url_hidden'];
            }
            $creditType->estatus = ($request['estatus'] == "on")?1:0;
            $creditType->save();
            if($request['id_credit_type_redirect'] == 'true'){
                return redirect('/credit-types')->with('success', $message);
            }else{
                return CreditType::all()->where('estatus',1);
            }
        }catch (QueryException $e){
            $message = $e->errorInfo[1] ."-".$e->errorInfo[2];
            return redirect('/credit-types')->with('error', $message);
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
            return redirect('/credit-types')->with('success', 'Registro Borrado');
        }catch (QueryException $e){
            $message = $e->errorInfo[1] ."-".$e->errorInfo[2];
            return redirect('/credit-types')->with('error', $message);
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
