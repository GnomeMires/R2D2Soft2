<?php

namespace R2D2Soft;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RepuestosutilizadoController
 *
 * @author  The scaffold-interface created at 2016-08-12 09:55:14pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Repuestosutilizado extends Model
{
    public $timestamps = false;

    protected $table = 'repuestosutilizados';

	
	public function trabajomoto()
	{
		return $this->belongsTo('R2D2Soft\Trabajomoto','trabajomoto_id');
	}

	
	public function repuestosmoto()
	{
		return $this->belongsTo('R2D2Soft\Repuestosmoto','repuestosmoto_id');
	}

	
}
