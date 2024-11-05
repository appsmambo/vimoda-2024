<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BannerHome extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'imagen',
        'enlace',
        'orden',
    ];

    public function getMaxOrder()
    {
        return DB::table('banner_homes')->max('orden');
    }
}
