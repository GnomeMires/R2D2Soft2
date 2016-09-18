<?php

namespace R2D2Soft;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MotoController
 *
 * @author  The scaffold-interface created at 2016-08-12 08:38:23pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Moto extends Model
{
    public $timestamps = false;

    protected $table = 'motos';

	
	public function persona()
	{
		return $this->belongsTo('R2D2Soft\Persona','persona_id');
	}

	
}
