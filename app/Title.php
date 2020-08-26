<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Post;

class Title extends Post
{
    //
    protected $table = 'links';
    protected $primaryKey = 'id';

    function permalink(){
        return '<a href="'.$this->getPermalink().'" class="text-dark">'. $this->title .'</a>';
    }

    function getPermalink(){
        if($this->getContent()->count() > 0)
            return url('content/'.$this->id);
        else
            return url('cat/'.$this->id);
    }

    function getTree(){ 

        $tree[] = \DB::Table('links')->where('id', $this->parent_id)->whereMenuId(6)->orderBy('title', 'ASC')->first();
        for ($i=0; $i < 10 ; $i++) { 
            if( isset($tree[$i]) &&  $tree[$i]->parent_id !== $tree[$i]->params ){
                $tree[] = \DB::Table('links')->where('id', $tree[$i]->parent_id )->whereMenuId(6)->where('params', '!=', '8888')->orderBy('title', 'ASC')->first();
            }
        }
        foreach( $tree as $key => $item ){
            if( !isset($item->id) ){
                unset($tree[$key]);
            }
        }

        return $tree;

    }

    function treeList(){

        $html = '';
        
        foreach( array_reverse( $this->getTree() ) as $item ){
            $title = explode('. ', $item->title);
            $html .= '<li class="list-inline-item"><a href="'.url('cat/'.$item->id).'" class="text-muted">'.( ( isset($title[1]) ) ? $title[1] : $title[0] ) .'</a></li>';
        }
        
        return $html;

    }

    function getContent(){
        return $this->hasOne('\App\Post', 'category_id', 'id');
    }

    function getSub2(){
        return $this->hasMany(self::class, 'parent_id', 'id')->where('status', 1)->orderBy('lft', 'ASC')->with('getContent');
    }

    function getSub(){
        return $this->hasMany(self::class, 'parent_id', 'id')->where('status', 1)->orderBy('lft', 'ASC')->with('getSub2')->with('getContent');
    }

    function getParents( ){
        
        return $this->hasMany(self::class, 'parent_id', 'params' )->where('status', 1)->with('getSub')->orderBy('lft', 'ASC')->with('getContent')->get();
        //return $items;
    }

    function getParant(){
        return $this->hasMany( self::class,  'parent_id', 'parent_id')->where('status', 1)->orderBy('lft', 'ASC');
    }

}

