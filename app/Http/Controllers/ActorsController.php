<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActorsController extends Controller
{
    public function index(){

      //trae todos los actores del modelo Actor
      //es como un fetch_all, pero NO devuelve un array sino objetos.
      //me doy cuenta que esto es un MODELO porque esta cualdado suelto en APP (tmb lo puedo meter dentro de la carpeta Models dentro de App)
      $actors = \App\Actor::all();

      // dd($actors);
      //es como un var_dumo

      // foreach ($actors as $actor) {
        //tomo el first_name de cada objeto actor
        // este : $actor es como si hubiera instanciado el objeto con new Actor ...
        // echo $actor->first_name .' '.$actor->last_name . '<br>';
      //   echo $actor->getFullName().'<br>';
      // }



      //En vez de mostrarlo en el controlador, se lo paso a una vista
      return view('actors.actorsList')->with('actores' , $actors);
      //creo una variable que se llame actores, que va a contener lo que tiene $actors
    }




    public function show($id){

      $actors = \App\Actor::find($id);
      // dd($actors);

      return view('actors.actors')->with('actorID' , $actors);
    }


    public function search(){
          $actors = \App\Actor::where('last_name', 'LIKE' ,'%'.$_GET['busqueda'].'%' )
              ->orwhere('first_name', 'LIKE', '%'.$_GET['busqueda'].'%')->get();

          return view('actors.actorsList')->with('actores' , $actors);
    }
}
