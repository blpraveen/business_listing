<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rating;

class Listing extends Model
{
    use HasFactory;

    protected $guarded =[];

    public $timestamps = false;

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
