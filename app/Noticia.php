<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Noticia.
 *
 * @author  The scaffold-interface created at 2019-01-07 10:01:31pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Noticia extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'noticias';

	
}
