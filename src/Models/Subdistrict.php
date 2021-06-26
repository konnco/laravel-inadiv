<?php declare(strict_types=1);

namespace Konnco\Inadiv\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Province extends Model
{
    public function city(): HasMany
    {
        return $this->hasMany(Subscription::class);
    }
}
