<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Social extends Model
{
    use HasFactory;

    protected $fillable = ["alias", 'api_token', 'name', 'store_id'];

    public function store(): BelongsTo
    {
        return $this->belongsTo(Store::class);
    }

}
