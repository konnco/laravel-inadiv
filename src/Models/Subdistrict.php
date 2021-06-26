<?php declare(strict_types=1);

namespace Konnco\Inadiv\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Subdistrict extends Model
{
    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }
}
