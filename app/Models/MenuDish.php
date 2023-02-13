<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuDish extends Model
{
    // jeśli nie prowadzimy informacji timestamps
// to należy zadeklarować to w modelu
public $timestamps = false;
//Stałe opisujące dostępne kolumny:
public const FIELD_ID = 'id';
public const FIELD_ID_MENU= 'id_menu';
public const FIELD_ID_DANIA = 'id_dania';

protected $table = 'menu_dania';
//Klucz główny
protected $primaryKey = self::FIELD_ID;
//Pola, które mogą być wypełniane masowo
protected $fillable = [
 self::FIELD_ID_MENU,
 self::FIELD_ID_DANIA,
];
//Przy pomocy tej metody będzie można pobierać
public function menu()
 {
    return $this->hasMany(Menu::class);
 }
 public function dish()
 {
    return $this->hasMany(Dish::class);
 }
}
