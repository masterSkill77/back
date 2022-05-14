<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forfait extends Model
{
    use HasFactory;
    public $primaryKey = 'id';
    protected $fillable = ['forfait_name', 'typeData', 'limiteMax', 'price', 'emplacement', 'duration', 'extension', 'priceUnit'];
    public $timestamps = false;
}
