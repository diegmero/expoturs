<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalitySuite extends Model
{
    use HasFactory;

    protected $fillable = [
        'suite_number',
        'is_reserved',
        'company_name',
        'person_name',
        'reservation_date',
        'entry_date',
    ];

    protected $casts = [
        'is_reserved' => 'boolean',
        'reservation_date' => 'date',
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
