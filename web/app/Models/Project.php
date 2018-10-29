<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB; 

class Project extends Model
{
    protected $table = 'projects';

    // protected  $primaryKey = 'uuid';

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

    public function existProyect($uuid, $name){
        $project = DB::table('projects')->where('uuid', $uuid)->orWhere('name', $name)->first();  
        if($project){
            return true;
        }else{
            return false;
        }
    }
}
