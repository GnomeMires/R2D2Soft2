<?php

namespace R2D2Soft;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InformecontratoController
 *
 * @author  The scaffold-interface created at 2016-08-28 07:26:57am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Informecontrato extends Model
{
    public $timestamps = false;

    protected $table = 'informecontratos';

	
	public function trabajomoto()
	{
		return $this->belongsTo('R2D2Softs\Trabajomoto','trabajomoto_id');
	}

	
}
