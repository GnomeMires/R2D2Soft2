<?php

namespace R2D2Soft;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrabajomotoController
 *
 * @author  The scaffold-interface created at 2016-08-12 08:44:08pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Trabajomoto extends Model
{
    public $timestamps = false;

    protected $table = 'trabajomotos';

	
	public function moto()
	{
		return $this->belongsTo('R2D2Soft\Moto','moto_id');
	}

	
	public function user()
	{
		return $this->belongsTo('R2D2Soft\User','user_id');
	}

	
}
