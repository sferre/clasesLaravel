<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
// Route::get('/', function () {
//     return view('welcome');
// });
//
// Route::get('/miRuta',function(){
//   return '<h1>Mi primer ruta!</h1>';
// });
//
// Route::get('/peliculas', function(){
//   $peliculas = [
// ['title' => 'Avatar', 'poster' => '/images/avatar.jpg' , 'genre' => 'Ciencia Ficción'],
// ['title' => 'Infinity War', 'poster' => '/images/avengers.jpg' , 'genre' => 'Acción'],
// ['title' => 'DeadPool', 'poster' => '/images/deadpool1.jpg' , 'genre' => 'Acción'],
// ['title' => 'Dragon Ball', 'poster' => '/images/dragonball.jpg' , 'genre' => 'Animé'],
// ['title' => 'Dunkerque', 'poster' => '/images/dunkirk.jpg' , 'genre' => 'Belico'],
// ['title' => 'Emoji', 'poster' => '/images/emoji.jpg' , 'genre' => 'Animada'],
// ['title' => 'Inception', 'poster' => '/images/inception1.jpg' , 'genre' => 'Drama'],
// ['title' => 'Moana', 'poster' => '/images/moana.jpg' , 'genre' => 'Animada'],
// ['title' => 'Rogue One', 'poster' => '/images/rogueone.jpg' , 'genre' => 'Acción'],
// ['title' => 'Titanic','poster' => '/images/titanic.jpg' , 'genre' => 'Drama'],
// ];
//
//   echo '<h2>Listado de Pelis</h2>
//           <br>';
//
//   foreach ($peliculas as $peli) {
//     echo '<a href="http://localhost:8000/peliculas/'.$peli['title'].'"><li>'.$peli['title'].'</li></a>';
//     echo '<li><img src="'.$peli['poster'].'" width="40px"> </li>';
//     };
//
// });
//
//
//
//
// Route::get('/peliculas/{titulo}', function($title){
//
//   $peliculas = [
//   ['title' => 'Avatar', 'poster' => '/images/avatar.jpg' , 'genre' => 'Ciencia Ficción'],
//   ['title' => 'Infinity War', 'poster' => '/images/avengers.jpg' , 'genre' => 'Acción'],
//   ['title' => 'DeadPool', 'poster' => '/images/deadpool1.jpg' , 'genre' => 'Acción'],
//   ['title' => 'Dragon Ball', 'poster' => '/images/dragonball.jpg' , 'genre' => 'Animé'],
//   ['title' => 'Dunkerque', 'poster' => '/images/dunkirk.jpg' , 'genre' => 'Belico'],
//   ['title' => 'Emoji', 'poster' => '/images/emoji.jpg' , 'genre' => 'Animada'],
//   ['title' => 'Inception', 'poster' => '/images/inception1.jpg' , 'genre' => 'Drama'],
//   ['title' => 'Moana', 'poster' => '/images/moana.jpg' , 'genre' => 'Animada'],
//   ['title' => 'Rogue One', 'poster' => '/images/rogueone.jpg' , 'genre' => 'Acción'],
//   ['title' => 'Titanic','poster' => '/images/titanic.jpg' , 'genre' => 'Drama'],
//   ];
//
//   foreach ($peliculas as $peli) {
//     if ($title == $peli['title']) {
//       return '<br> '.$peli['title'];
//     }
//   }
//   echo 'No está la peli';
//
// });
//
//
// Route::get('/resultado/{numero}', function($numero){
//   if ($numero%2==0) {
//     echo 'El numero es PAR';
//   } else {
//     echo "El numero es IMPAR";
//   }
// });
//
// Route::get('/resultado/{numero}/{multi?}', function($numero, $multi='x'){
// if ($multi!=='x') {
//   $producto = $numero * $multi;
//   echo 'EL resultado es:'.$producto;
// }
// else {
//       if ($numero%2==0) {
//         echo 'El numero es PAR';
//       } else {
//         echo "El numero es IMPAR";
//       }
// }
//
//
// });

//para que no se pisen le pongo buscar ( o cualquier cosa)
// Route::get('/peliculas/buscar/{titulo}', PeliculasController@buscarPeliculaId)
Route::get('/peliculas/{id}', 'PeliculasController@buscarPeliculaId');
