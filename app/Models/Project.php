<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Activity;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 'description', 'type', 'language', 'expiration_date', 'user_id'
    ];

    /**
     * Get the activities for the project.
     */
    public function activities(): HasMany {
        return $this->hasMany(Activity::class);
    }
}
