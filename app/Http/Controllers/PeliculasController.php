<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    public function ​ buscarPeliculaId($id)​​{
      $peliculas = [
          1 => "Toy Story",
          2 => "Buscando a Nemo",
          3 => "Avatar",
          4 => "Star Wars: Episodio V",
          5 => "Up",
          6 => "Mary and Max"
      ];

      if (isset($peliculas($id))) {
        return $peliculas[$id];
      }
      return 'No se encontro la peli';
      // return $peliculas[$id] ?? 'No se encontro la peli';


    }

    public function buscarPeliculaNombre($nombre){
      $peliculas = [
          1 => "Toy Story",
          2 => "Buscando a Nemo",
          3 => "Avatar",
          4 => "Star Wars: Episodio V",
          5 => "Up",
          6 => "Mary and Max"
      ];

      foreach ($peliculas as $key => $value) {
        if ($value == $nombre) {
          $peli == $value;
          break;
        }
      }
      return $peli;
    }
}
