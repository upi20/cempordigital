<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSlider extends Model
{
    use HasFactory, Loggable;
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $table = 'home_sliders';
    const tableName = 'home_sliders';
    const image_folder = '/assets/setting/home_sliders';
}
