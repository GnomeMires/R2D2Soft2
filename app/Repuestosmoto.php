<?php

namespace R2D2Soft;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RepuestosmotoController
 *
 * @author  The scaffold-interface created at 2016-08-12 09:00:38pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Repuestosmoto extends Model
{
    public $timestamps = false;

    protected $table = 'repuestosmotos';

	
	public function datosempresa()
	{
		return $this->belongsTo('R2D2Soft\Datosempresa','datosempresa_id');
	}

	
}
