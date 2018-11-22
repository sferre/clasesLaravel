<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
  // public $first_name;
  // public $last_name;
  //no es necesario ponerlo porque Eloquent toma los campos de la tabla y los convierte en atributos

    protected $guarded = [];

    //Si la tabla se llama igual que el nombre del modelo, no hace falta aclarar esto. Si tiene otro nombre o quiero trabajar con otra tabla lo declaro aqui.
    //OJO! hay que actualizar composer (xq guarda una libreria de clases)
    // En consola: freno el servidor (crl + c), despues: composer dump-autoload y por ultimo vuelvo a correr el serve.
    // protected $table = 'actors'

    public function getFullName(){
      return $this->first_name. ' ' . $this->last_name ;
    }

    
}
