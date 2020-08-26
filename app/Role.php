<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Role extends Model {

    protected $table = 'role_content';
    protected $primaryKey = 'id';
    
    function getCategory(){
        return $this->hasOne('\App\Category', 'id', 'role_id');
    }

}
