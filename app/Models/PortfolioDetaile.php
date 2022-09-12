<?php

namespace App\Models;

use App\Models\Client;
use App\Models\PortfolioCategry;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PortfolioDetaile extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function PortfolioCategry()
    {
        return $this->belongsTo(PortfolioCategry::class)->withDefault();
    }

    public function client()
    {
        return $this->belongsTo(Client::class)->withDefault();
    }

    public function PortfolioDetaileImages()
    {
        return $this->hasMany(PortfolioDetaileImage::class);
    }
}
