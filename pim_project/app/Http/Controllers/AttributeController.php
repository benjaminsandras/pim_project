<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\attribute;
use App\attribute_group;


class AttributeController extends Controller
{
    public function get_attribute_form()
    {
        $attribute_group = attribute_group::all();
        return view('add_attribute', [ "attribute_group" => $attribute_group ]);
	}

	public function post_attribute_form(Request $request)
	{

        // $data = $request->validate ([
        //     'Nom'=>'required',
        //     'Prenom'=>'required',
        // ]);

        $attribute = new attribute;
        $attribute->label = $request->input('label'); 
		$attribute->type = $request->input('type'); 
        $attribute->fk_attribute_group = $request->input('fk_attribute_group'); 
        $attribute->save();
        
        return redirect('add_attribute')->with(['success', 'attribut sauvegardé']);
	}
}
