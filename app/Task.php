<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function Project(){
        return $this->belongsTo('\App\Project::class');
    }
}
