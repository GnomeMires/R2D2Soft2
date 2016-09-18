<?php

namespace R2D2Soft;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CompraController
 *
 * @author  The scaffold-interface created at 2016-08-15 04:04:40pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Compra extends Model
{
    public $timestamps = false;

    protected $table = 'compras';

	
	public function datosempresa()
	{
		return $this->belongsTo('R2D2Soft\Datosempresa','datosempresa_id');
	}

	
	public function repuestosmoto()
	{
		return $this->belongsTo('R2D2Soft\Repuestosmoto','repuestosmoto_id');
	}

	
	public function proovedor()
	{
		return $this->belongsTo('R2D2Soft\Proovedor','proovedor_id');
	}

	
}
