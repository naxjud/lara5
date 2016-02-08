<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table='flyer_photos';

    protected $fillable=['path'];
    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @param type var Description
     **/
    public function flyer()
    {
        return $this->belongsTo('App\Flyer');
    }
}
