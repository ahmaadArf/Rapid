<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PortfolioDetaileImage extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function portfolioDetaile()
    {
        return $this->belongsTo(PortfolioDetaile::class);
    }
}
