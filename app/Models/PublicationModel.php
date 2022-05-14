<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicationModel extends Model
{
    use HasFactory;
    public $table = 'publications';
    protected $fillable = ["content", "taille", "id_user", "path"];
}
