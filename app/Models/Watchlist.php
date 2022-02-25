<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watchlist extends Model
{
    use HasFactory;

    protected $guarded = [];

    
    public static function added($userId, $movieId)
    {
        $added = Watchlist::where([
            ['user_id', $userId],
            ['movie_id', $movieId]])->first();

        return $added;
    }

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
