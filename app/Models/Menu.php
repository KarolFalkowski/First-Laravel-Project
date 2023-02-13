<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

public $timestamps = false;

public const FIELD_ID = 'id';
public const FIELD_NAZWA= 'nazwa';


protected $table = 'menu';
protected $primaryKey = self::FIELD_ID;

protected $fillable = [
 self::FIELD_NAZWA,
];



}
