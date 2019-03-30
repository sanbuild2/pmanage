<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'company_id',
        'user_id',
        'days',

    ];

      public function user(){
                return $this->belongstToMany('App\User');
    }

        public function company(){
                return $this->belongstTo('App\Company');
    }
    
    public function comments()
    {

        return $this->morphMany('App\Comment', 'commentable');
    }

}
