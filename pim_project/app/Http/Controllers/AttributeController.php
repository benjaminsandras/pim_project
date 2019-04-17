<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\attributes;
use App\attribute_groups;


class AttributeController extends Controller
{
    public function get_attribute_form()
    {

        if(isset($_GET["delete"])){
            $attribute=attributes::where('id',$_GET['delete'])->delete();
            $attribute_group=attribute_groups::all();
            $attribute = attributes::orderBy('label','desc')->get();
            return view('add_attribute', 
            [ 
                "attribute_group" => $attribute_group, 
                "attribute" => $attribute, 
            ]);
        }
        else{
            $attribute_group=attribute_groups::all();
            $attribute = attributes::orderBy('label','desc')->get();
            return view('add_attribute', 
            [ 
                "attribute_group" => $attribute_group, 
                "attribute" => $attribute, 
            ]);

        }
        
        
	}

	public function post_attribute_form(Request $request)
	{

        // $data = $request->validate ([
        //     'Nom'=>'required',
        //     'Prenom'=>'required',
        // ]);

        $attribute = new attributes;
        $attribute->label = $request->input('label'); 
		$attribute->type = $request->input('type'); 
        $attribute->fk_attribute_group = $request->input('fk_attribute_group'); 
        $attribute->save();
        
        return redirect('add_attribute')->with(['success', 'attribut sauvegardé']);
	}
}
