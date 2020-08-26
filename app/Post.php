<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'content';
    protected $primaryKey = 'id';


    function permalink(){
        return '<a href="'.$this->getPermalink().'" class="text-dark">'. $this->getTitle->title .'</a>'; 
    }

    function getPermalink(){
        return url('content/'.$this->getTitle->id );
    }
    
    function getTitle(){
        return $this->hasOne('\App\Title', 'id', 'category_id');
    }

    function getRole(){
        return $this->hasOne('\App\Role', 'content_id', 'mime_type')->with('getCategory');
    }
}
