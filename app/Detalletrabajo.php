<?php

namespace R2D2Soft;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetalletrabajoController
 *
 * @author  The scaffold-interface created at 2016-08-12 08:55:21pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Detalletrabajo extends Model
{
    public $timestamps = false;

    protected $table = 'detalletrabajos';

	
	public function trabajomoto()
	{
		return $this->belongsTo('R2D2Soft\Trabajomoto','trabajomoto_id');
	}

	
}
