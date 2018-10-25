<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';

    protected $fillable = [
        'uuid',
        'name',
        'description',
        'start_date',
        'due_date',
        'owner',
        'company_id'
    ];

    protected $hidden = [
        'uuid',
        'name',
        'description',
        'start_date',
        'due_date',
        'owner',
        'company_id'
    ];    
}
