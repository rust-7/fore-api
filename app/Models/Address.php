<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;
use App\Models\User;

class Address extends Model {
    use HasFactory;

    protected $fillable = [
        'name',
        'address_1',
        'city',
        'postal_code',
        'country_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function country() {
        return $this->hasOne(Country::class, 'id', 'country_id');
    }
}
