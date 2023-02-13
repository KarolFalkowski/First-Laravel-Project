<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    // jeśli nie prowadzimy informacji timestamps
// to należy zadeklarować to w modelu
public $timestamps = false;
//Stałe opisujące dostępne kolumny:
public const FIELD_ID = 'id';
public const FIELD_ID_PRZEPISU= 'id_przepisu';
public const FIELD_ID_WYKONAWCY = 'id_wykonawcy';

//Nazwa tabeli powiązanej z modułem
protected $table = 'dania';
//Klucz główny
protected $primaryKey = self::FIELD_ID;
//Pola, które mogą być wypełniane masowo
protected $fillable = [
 self::FIELD_ID_PRZEPISU,
 self::FIELD_ID_WYKONAWCY,
 
];

public function recipe()
 {
   return $this->belongsTo('App\Models\Recipes','id_przepisu','id');
 }
 public function contractor()
 {
   return $this->belongsTo('App\Models\Contractor','id_wykonawcy','id');
 }
}
