<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Fonction
 * 
 * @property int $id_fonction
 * @property string $nom
 * @property string $salaire
 * @property bool $cadre
 *
 * @package App\Models
 */
class Fonction extends Model
{
	protected $table = 'fonctions';
	protected $primaryKey = 'id_fonction';
	public $timestamps = false;

	protected $casts = [
		'cadre' => 'bool'
	];

	protected $fillable = [
		'nom',
		'salaire',
		'cadre'
	];
}
