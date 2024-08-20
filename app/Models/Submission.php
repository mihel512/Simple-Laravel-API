<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * 
 *
 * @method static Builder|Submission newModelQuery()
 * @method static Builder|Submission newQuery()
 * @method static Builder|Submission query()
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $message
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Submission whereCreatedAt($value)
 * @method static Builder|Submission whereEmail($value)
 * @method static Builder|Submission whereId($value)
 * @method static Builder|Submission whereMessage($value)
 * @method static Builder|Submission whereName($value)
 * @method static Builder|Submission whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Submission extends Model
{
    use HasFactory;
    protected $guarded = [];
}
