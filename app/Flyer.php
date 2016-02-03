<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{

/**
* fillable fields for a Flyer
*
*/
  protected $table='flyers';

  protected $fillable=[
    'street',
    'city',
    'zip',
    'state',
    'country',
    'price',
    'description'
  ];
    /**
     * A Flyer is composed of many Photos
     *
     * @return
     **/

    public function photos(){
      return $this->hasMany('App\Photo');
    }
}
