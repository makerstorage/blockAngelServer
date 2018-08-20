<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // project->user;

    public function user() {

    	return $this->belongsTo(User::class);
    }  

}
