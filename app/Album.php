<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
  protected $table='albums';
  protected $fillable = [
    'name','artist_id', 'release_year',
  ];


  public function artist()
  {
    return $this->belongsTo(Artist::class);
  }
}
