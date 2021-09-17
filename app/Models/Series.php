<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    use HasFactory;
    protected $fillable=['name','creator','genre_id'];
    public function genre(){
        return $this->hasOne(Genre::class);
    }
}
