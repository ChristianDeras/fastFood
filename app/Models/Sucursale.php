<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sucursale
 * 
 * @property int $id_sucursal
 * @property string|null $NombreSucursal
 * @property string|null $Direccion
 *
 * @package App\Models
 */
class Sucursale extends Model
{
	protected $table = 'sucursales';
	protected $primaryKey = 'id_sucursal';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_sucursal' => 'int'
	];

	protected $fillable = [
		'NombreSucursal',
		'Direccion'
	];
}
