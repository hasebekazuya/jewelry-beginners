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
        'chemical_composition' => 'required',
        'mohs_hardness' => 'required',
        'overview' => 'required',
        'maintenance' => 'required',
        'summary_notes' => 'required',
        'image' => 'required',
        'birthstone' => 'required',
    );
}
