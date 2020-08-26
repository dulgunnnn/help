<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Rolemenu extends Model {

    protected $table = 'role_menu';
    protected $primaryKey = 'id';
    

    function getCategory(){
        return $this->hasMany('\App\Title', 'parent_id', 'menu_id');
    }

    function getRole(){
        return $this->hasOne('\App\Category', 'id', 'role_id');
    }

    public static function list($id){

        $items = self::where('role_id', $id)->with('getCategory')->first();
        
        $res = [];

        foreach( $items->getCategory as $key => $item ){
            $res[] = '<a href="'.url('cat/'.$item->id).'" class="text-dark">'.$item->title.'</a>';
        }
        
        return join(', ' , $res);

    }


}