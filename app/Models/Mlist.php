<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mlist extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function movies(){
        return $this->belongsToMany(Movie::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
