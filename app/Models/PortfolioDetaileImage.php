<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioDetaileImage extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function portfolioDetaile()
    {
        return $this->belongsTo(PortfolioDetaile::class);
    }
}
