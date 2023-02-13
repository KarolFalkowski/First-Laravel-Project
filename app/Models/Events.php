<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
// jeśli nie prowadzimy informacji timestamps
// to należy zadeklarować to w modelu
public $timestamps = false;
//Stałe opisujące dostępne kolumny:
public const FIELD_ID = 'id';
public const FIELD_NAZWA= 'nazwa';
public const FIELD_DATA = 'data';
public const FIELD_ILOSC_GOSCI = 'ilosc_gosci';
public const FIELD_ID_MENU = 'id_menu';

//Nazwa tabeli powiązanej z modułem
protected $table = 'wydarzenia';
//Klucz główny
protected $primaryKey = self::FIELD_ID;
//Pola, które mogą być wypełniane masowo
protected $fillable = [
 self::FIELD_NAZWA,
 self::FIELD_DATA,
 self::FIELD_ILOSC_GOSCI,
 self::FIELD_ID_MENU,
];
//Przy pomocy tej metody będzie można pobierać
// załogantów danego modułu statku
public function menu()
 {
   return $this->belongsTo('App\Models\Menu','id_menu','id');
 }
}
