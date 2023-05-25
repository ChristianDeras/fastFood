<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Inventario
 * 
 * @property int $id_inventario
 * @property string|null $Nombre_articulo
 * @property int|null $Stock
 * @property string|null $CodigoBarra
 * @property int|null $id_sucursal
 * @property int|null $id_categoria
 *
 * @package App\Models
 */
class Inventario extends Model
{
	protected $table = 'inventario';
	protected $primaryKey = 'id_inventario';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_inventario' => 'int',
		'Stock' => 'int',
		'id_sucursal' => 'int',
		'id_categoria' => 'int'
	];

	protected $fillable = [
		'Nombre_articulo',
		'Stock',
		'CodigoBarra',
		'id_sucursal',
		'id_categoria'
	];
}
