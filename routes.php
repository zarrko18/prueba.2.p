<?php
  Route::get('/', function () { return view('Inicio'); });
  Route::get('Libro1', function () { return view('Libro1'); });
  Route::get('Libro2', function () { return view('Libro2'); });
  Route::get('Libro3', function () { return view('Libro3'); });
  Route::get('Libro4', function () { return view('Libro4'); });
  Route::dispatch();
?>