<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkin extends Model
{
    protected $fillable =['user_id','place_id',];
    protected $table = 'checkins';
    use HasFactory;



    public function user()
    {
        return $this->belongsTo(User::class);
//        return $this->belongsTo('User');
    }



    public function place()
    {
        return $this->belongsTo(Place::class);
//        return $this->belongsTo('Place');
    }
}
