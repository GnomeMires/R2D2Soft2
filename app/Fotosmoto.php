<?php

namespace R2D2Soft;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FotosmotoController
 *
 * @author  The scaffold-interface created at 2016-08-12 08:47:17pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Fotosmoto extends Model
{
    public $timestamps = false;

    protected $table = 'fotosmotos';

	
	public function moto()
	{
		return $this->belongsTo('R2D2Soft\Moto','moto_id');
	}

	
}
