<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\attributes;
use App\attribute_groups;
use App\families;


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

        $attribute_family = new attribute_families;
        $attribute_family->fk_attribute = $request->input('fk_attribute');
        $attribute_family->fk_family = $family->id;
        $attribute_family->save();

        $attribute_group_family = new attribute_group_families;
        $attribute_group_family->fk_attribute_group = $request->input('fk_attribute_group');
        $attribute_group_family->fk_family = $family->id;
        $attribute_group_family->save();
        
        return redirect('add_families')->with(['success', 'attribut sauvegardé']);
	}
}
