<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
	protected $table='artists';


    protected $fillable = [
        'name','photo','bio',
    ];

		public function albumes()
		{
			return $this->hasMany(Album::class);
		}
}
