<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\attributes;
use App\attribute_groups;
use App\families;
use App\attribute_group_families;
use App\attribute_families;

class FamiliesController extends Controller
{
    public function get_family_form()
    {
        $attribute_group = attribute_groups::all();
        $attribute = attributes::all();
        return view('add_families', 
            [ 
                "attribute_group" => $attribute_group,
                "attribute" => $attribute
            ]);
	}

	public function post_family_form(Request $request)
	{

        $family = new families;
        $family->label = $request->input('label'); 
        $family->image = $request->input('image');
        $family->save(); 
        
        $attribute_group = new attribute_group_families;
        $attribute_group->fk_attribute_group = $request->input('fk_attribute_group'); 
        $attribute_group->save();

        $attribute = new attribute_families;
        $attribute->fk_attribute = $request->input('fk_attribute');
        $attribute->save(); 
        
        return redirect('add_families')->with(['success', 'attribut sauvegardé']);
	}
}
