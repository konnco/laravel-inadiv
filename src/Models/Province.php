<?php declare(strict_types=1);

namespace Konnco\Inadiv\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Province extends Model
{
    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }
}
