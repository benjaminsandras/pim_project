<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\attribute_group;

class AttributeGroupController extends Controller
{
    public function get_attribute_group_form()
    {
        return view('add_attribute_group');
	}

	public function post_attribute_group_form(Request $request)
	{

        $attribute_group = new attribute;
        $attribute->label = $request->input('label');  
        $attribute->save();
        
        return redirect('add_attribute_group')->with(['success', 'attribut sauvegardé']);
	}
}