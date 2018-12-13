<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\URL;
use App\House;
use App\HouseImage;

class HouseController extends Controller
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
            $houses = House::all();
            return view('house.index')
            ->with('houses',$houses);
         }catch (QueryException $e){
            $message = $e->errorInfo[1] ."-".$e->errorInfo[2];
            return view('house.index')
            ->withErrors([$message]);
       }
    }

     /**
     * Show the form for create new House.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){}


    /**
     * Show the form for edit House.
     *
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        try{
            $house = House::findOrFail($id);
            return $house;
        }catch (QueryException $e){
        	$houses = House::all();
            $message = $e->errorInfo[1] ."-".$e->errorInfo[2];
            return view('house.index')
            ->with('houses',$houses)
            ->withErrors([$message]);
       }
    }

    /**
     * Action for save House
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        try{
            $id = $request['id_house'];
            if($id == NULL){
              $house = new House();
              $message = "Registro Creado";
            }else{
                $house  = House::findOrFail($id);
                $message = "Registro Actualizado";
            }
              $house->clave = $request['clave'];
              $house->colony = $request['colony'];
              $house->municipality = $request['municipality'];
              $house->price = $request['price'];
              $house->credito_casa = $request['credito_casa'];
              $house->n_room = $request['n_room'];
              $house->n_bathroom = $request['n_bathroom'];
              $house->estatus = ($request['estatus'] == "on")?1:0;
              $house->save();

            /*forach($arrayImages as $img){
                $houseImage = new houseImage();
                $houseImage->id_house($house->id_house);
                $houseImage->url($img["url"]);
                $houseImage->save();
            }*/
            if($request['id_house_redirect'] == 'true'){
                $houses = House::all();
                return view('house.index')
                ->with('houses',$houses)
                ->withSuccess($message);
            }else{
                return House::all()->where('estatus',1);
            }
        }catch (QueryException $e){
            $houses = House::all();
            $message = $e->errorInfo[1] ."-".$e->errorInfo[2];
            return view('house.index')
            ->with('houses',$houses)
            ->withErrors([$message]);
       }
    }

    /**
     * Action for delete House
     *
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        try{
            $house = House::findOrFail($id);
    	    $house->delete();
            return redirect("/houses")->with("success","Registro borrado");
        }catch (QueryException $e){
            $message = $e->errorInfo[1] ."-".$e->errorInfo[2];
            return redirect("/houses")->with("success",$message);
       }
    }

    public function searchImg($id)
    {
        $houseImages = HouseImage::all()->where('id_house',$id)->get();
        return $houseImages;
    }

    /**
    * Action search if the data exist in the bd.
    *
    * @return \Illuminate\Http\Response
    */
    public function search(Request $request)
    {
       if($request['id'] != NULL){
           $house = House::where($request['column'], 'like', $request['val'])
           ->where('id_house', '!=', $request['id'])->get();
       }else{
           $house = House::where($request['column'], 'like', $request['val'])->get();
       }

       return $house;
     }

     /**
     * Action search if the data exist in the bd.
     *
     * @return \Illuminate\Http\Response
     */
    public function saveImage(Request $request){
        $url = app('url')->asset("img/");
        file_put_contents($_FILES["file"]["tmp_name"], $url."/".$_FILES["file"]["name"]);
        return $url."/".$_FILES["file"]["name"];
        //return $_FILES["file"]["name"];
    }
}
