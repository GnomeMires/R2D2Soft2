<?php

namespace R2D2Soft;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InformeentregaController
 *
 * @author  The scaffold-interface created at 2016-09-02 05:31:54am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Informeentrega extends Model
{
    public $timestamps = false;

    protected $table = 'informeentregas';

	
	public function persona()
	{
		return $this->belongsTo('R2D2Soft\Persona','persona_id');
	}

	
	public function trabajomoto()
	{
		return $this->belongsTo('R2D2Soft\Trabajomoto','trabajomoto_id');
	}

	
}
