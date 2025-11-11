<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NegotiationTable extends Model
{
    use HasFactory;

    protected $fillable = [
        'table_number',
        'is_reserved',
        'company_name',
        'person_name',
        'entry_date',
    ];

    protected $casts = [
        'is_reserved' => 'boolean',
        'entry_date' => 'date',
    ];

    public function scopeReserved($query)
    {
        return $query->where('is_reserved', true);
    }

    public function scopeAvailable($query)
    {
        return $query->where('is_reserved', false);
    }
}
