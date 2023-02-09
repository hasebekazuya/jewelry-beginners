<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gem extends Model
{
    use HasFactory;
    
    protected $guarded = array('id');
    
    public static $rules = array(
        'gem_name' => 'required',
        'chemical composition' => 'required',
        'Mohs hardness' => 'required',
        'overview' => 'required',
        'maintenance' => 'required',
        'Summary & Notes' => 'required',
        'image' => 'required',
        'birth_month' => 'required',
    );
}
