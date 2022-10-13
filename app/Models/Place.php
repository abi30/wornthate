<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Checkin;

class Place extends Model
{
    protected $table = 'places';
    use HasFactory;

    protected $fillable = [
        'name',
        'lat',
        'lon',
        'address1',
        'city',
        'state',
        'zip',
        'website',
        'phone'];

    public function checkins()
    {
        return $this->hasMany('Checkin');
    }
}
