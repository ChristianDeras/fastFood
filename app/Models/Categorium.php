<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;

/**
 * Class Categorium
 * 
 * @property int $id_categoria
 * @property string|null $Nombre_categoria
 * @property string|null $Tipo
 *
 * @package App\Models
 */
class Categorium extends Model
{
	protected $table = 'categoria';
	protected $primaryKey = 'id_categoria';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_categoria' => 'int'
	];

	protected $fillable = [
		'Nombre_categoria',
		'Tipo'
	];
}
