<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Incident
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property string $criticality
 * @property string $type
 * @property bool $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Incident extends Model
{
	protected $table = 'incidents';

	protected $casts = [
		'status' => 'bool'
	];

	protected $fillable = [
		'title',
		'description',
		'criticality',
		'type',
		'status'
	];

    /**
     * Set the status to int.
     *
     * @param  boolean  $value
     * @return void
     */
    public function setStatusAttribute($value)
    {
        $this->attributes['status'] = ($value) ? 1 : 0;
    }

}
