<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
 protected $fillable = [
        'name',
        'project_id',
        'user_id',
        'days',
        'hours',
        'company_id',
        
    ];

        public function user(){
                return $this->belongstTo('App\User');
    }

        public function project(){
                return $this->belongstTo('App\Project');
    }

        public function company(){
                return $this->belongstTo('App\Company');
    }


    public function users(){
                return $this->belongstToMany('App\User');
    }

     public function comments()
    {

        return $this->morphMany('App\Comment', 'commentable');
    }

}
