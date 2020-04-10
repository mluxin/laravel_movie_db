<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Seance
 * 
 * @property int $id
 * @property int $id_film
 * @property int $id_salle
 * @property int $id_personne_ouvreur
 * @property int $id_personne_technicien
 * @property int $id_personne_menage
 * @property Carbon $debut_seance
 * @property Carbon $fin_seance
 *
 * @package App\Models
 */
class Seance extends Model
{
	protected $table = 'seances';
	public $timestamps = false;

	protected $casts = [
		'id_film' => 'int',
		'id_salle' => 'int',
		'id_personne_ouvreur' => 'int',
		'id_personne_technicien' => 'int',
		'id_personne_menage' => 'int'
	];

	protected $dates = [
		'debut_seance',
		'fin_seance'
	];

	protected $fillable = [
		'id_film',
		'id_salle',
		'id_personne_ouvreur',
		'id_personne_technicien',
		'id_personne_menage',
		'debut_seance',
		'fin_seance'
	];
}
