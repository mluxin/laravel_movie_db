<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Personne
 * 
 * @property int $id_personne
 * @property string $nom
 * @property string $prenom
 * @property Carbon $date_naissance
 * @property string $email
 * @property string $adresse
 * @property string $cpostal
 * @property string $ville
 * @property string $pays
 *
 * @package App\Models
 */
class Personne extends Model
{
	protected $table = 'personnes';
	protected $primaryKey = 'id_personne';
	public $timestamps = false;

	protected $dates = [
		'date_naissance'
	];

	protected $fillable = [
		'nom',
		'prenom',
		'date_naissance',
		'email',
		'adresse',
		'cpostal',
		'ville',
		'pays'
	];
}
