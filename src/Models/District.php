<?php declare(strict_types=1);

namespace Konnco\Inadiv\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class District extends Model
{
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function subdistricts():HasMany
    {
        return $this->hasMany(Subdistrict::class);
    }
}
