<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use TCPDF_FONTS;

class HomeController extends Controller
{
    //

    function __construct()
    {
        
        $this->data['pageTitle'] = 'Тусламжийн төв | БСМС баг';
        $this->data['active'] = [];
        $this->data['qval'] = null;

    }

    public function index(){

        $lastTopic = 
            \App\Post::where('type', 'post')
                ->whereNotNull('category_id')
                ->where('mime_type', '!=', '8888')
                ->orderBy('created', 'desc')
                ->with('getTitle')
                ->take(21)
                ->get();


        $this->data['lastTopic'] = $lastTopic;

        return view('index', $this->data);
    }

    public function content( $id, $contenID = null ){

        $topic = \App\Title::where('id', $id)->with('getContent')->first();

        if( is_null($topic) ){
            return redirect('/');
        }
        
        $menu = \App\Rolemenu::where('menu_id', $topic->params)->with('getRole')->first();


        $this->data['topic'] = $topic;
        $this->data['pageTitle'] = $topic->title;

        $treeGet = $topic->getTree();

        
        if(count($treeGet) > 3){
            $this->data['active'][] = $treeGet[(count($treeGet) - 3)]->parent_id;
        }elseif($treeGet){
            $this->data['active'][] = $treeGet[0]->parent_id;
        }

        $this->data['id'] = $id;
        $this->data['active'][] = $menu->getRole->parent_id ;
        $this->data['active'][] = $menu->getRole->id ;
        $this->data['active'][] = $topic->parent_id;
        $this->data['active'][] = (int)$contenID;
        $this->data['active'][] = (int)$id;
        $this->data['menu'] = $menu;


        $this->data['items'] = $topic->getSub()->get();

        $this->data['leftitems'] = $topic->getParents();
        
        $this->data['contentID'] = $id;
        $this->data['pageTitle'] = $topic->title;
        
        return view('content', $this->data);

    }

    function category($id){

        $menu = \App\Category::whereId($id)->first();
        $this->data['id'] = (int)$id;
        $this->data['active'][] = (int)$id;

        $this->data['pageTitle'] = $menu->title.' цахим гарын авлага';
        
        return view('category', $this->data);

    }

    function scategory ($id){
        
        $topic = \App\Title::whereId($id)->first();
        $menu = \App\Rolemenu::where('menu_id', $topic->params)->with('getRole')->first();

        if(!$menu){
            $menu = \App\Rolemenu::where('menu_id', $id)->with('getRole')->first();
        }

        if( $menu ){
            $this->data['active'][] = $menu->getRole->parent_id;
            $this->data['active'][] = $menu->getRole->id;
        }

        $this->data['active'][] = $topic->parent_id;
        $this->data['active'][] = $id;

        $this->data['pageTitle'] = $topic->title;
        $this->data['topic'] = $topic;

        $this->data['items'] = $topic->getParents();
        $this->data['menu'] = $menu;

        return view('categories', $this->data);

    }


    function search( \Illuminate\Http\Request $request){

        $q = strip_tags($request->input('q'));

        $this->data['qval'] = $q;
        $this->data['pageTitle'] = '"'.$q .'" хайтанд тохирох илэрцүүд';
        
        return view('search', $this->data);

    }


    function pdf($id){

        $topic = \App\Title::whereId($id)->first();

        $this->data['topic'] = $topic;

        $html = view('pdf', $this->data);

        // return $html;

        PDF::SetTitle($topic->title);
        PDF::SetFont('freesans', '', 11);
        PDF::AddPage();
        PDF::writeHTML($html ,  true, false, false, false, '' );
        PDF::Output( 'ESIS Guide Topic '. $topic->id .'.pdf' );
        PDF::reset();

    }

    function pdfs($id){

        $topic = \App\Title::whereId($id)->first();
        $menu = \App\Rolemenu::where('menu_id', $topic->params)->with('getRole')->first();

        $this->data['topic'] = $topic;
        $this->data['topics'] = $menu;

        $html = view('pdfs', $this->data);


        PDF::SetTitle($topic->title);
        PDF::SetFont('freesans', '', 11);
        PDF::AddPage();
        PDF::writeHTML($html ,  true, false, false, false, '' );
        PDF::Output( 'ESIS Guide Topics '. $topic->id .'.pdf' );
        PDF::reset();

    }

    function pdfmsfont($id){

        $html = view('pdfMs');

        //return $html;

        // return public_path('fonts/LD-MONG150702-BT.ttf');

        $fontname = TCPDF_FONTS::addTTFfont( public_path('fonts/LD-MONG150702-BT.ttf') , 'TrueTypeUnicode', '', 96);

        $pdf = new \TCPDF('L', 'mm', 'A4', true, 'UTF-8', false);

        $pdf->SetTitle('Монгол бичиг');
        $pdf->AddPage();
        $pdf->StartTransform();
        $pdf->Rotate(270, 50, 60);
        $pdf->SetFont($fontname, '', 14, '', false);
        $pdf->Text(0,0, 'ᠲᠡᠭᠦᠰᠴᠦ ᠰᠠᠭᠤᠷᠢ ᠪᠣᠯᠪᠠᠰᠤᠷᠠᠯ ᠡᠵᠡᠮᠰᠢᠭᠰᠡᠨ ᠢ ᠭᠡᠷᠡᠴᠢᠯᠡᠨ');
        $pdf->StopTransform();
        $pdf->Output( 'ESIS Guide Topics ms.pdf' );
        $pdf->reset();
    }

}
