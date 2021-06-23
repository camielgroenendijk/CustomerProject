<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function appointments()
    {
        return $this->hasMany(Appointment::class)->orderBy('created_at', 'desc');
    }
}
