<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'roles';
    protected $primaryKey = 'id';

    function getParent(){ 
        return $this->hasOne( self::class , 'id', 'parent_id');
    }

    function permalink($class = 'text-dark'){
        return '<a href="'.$this->getPermalink().'" class="'.$class.'">'. $this->title .'</a>';
    }

    function getPermalink($type = null){
        if(is_null($type))
            return url('c/'.$this->id);
        else
            return url('m/'.$this->id);
    }

    function role(){
        return $this->hasOne('\App\Rolemenu', 'role_id', 'id')->with('getCategory');
    }

    function getSub(){ 
        return $this->hasMany( self::class , 'parent_id', 'id')->orderBy('lft')->with('role');
    }
    
    public static function allMenus(){
        $items = self::whereIn('id', [1,2])->with('getSub')->get();
        return $items;
    }

    
}
