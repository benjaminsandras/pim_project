<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\notes; 

class NoteController extends Controller
{

  public function show(){

    if(isset($_GET["delete"])){
      $Note=notes::where('id',$_GET['delete'])->delete();
      $Note=notes::orderby('id', 'desc')->get();
      return view('note', ['Note'=> $Note]);
    }
    else{
      $Note=notes::orderby('id', 'desc')->get();
      return view('note', ['Note'=> $Note]);
    }
  }

  public function insert(Request $r){

    $Note = new notes;
    $Note->note_interne_emetteur = $r->input('commentFrom');
    $Note->note_interne_recepteur = $r->input('commentTO');
    $Note->note_interne_commentaire = $r->input('comment');
    $Note->save();

    return redirect('notes');
  }
}