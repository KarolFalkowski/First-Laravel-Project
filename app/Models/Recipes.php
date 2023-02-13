<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
    public $timestamps = false;

public const FIELD_ID = 'id';
public const FIELD_NAZWA= 'nazwa';
public const FIELD_OPIS = 'opis';

protected $table = 'przepisy';
protected $primaryKey = self::FIELD_ID;

protected $fillable = [
 self::FIELD_NAZWA,
 self::FIELD_OPIS,
];

}
