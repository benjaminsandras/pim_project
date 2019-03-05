<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\attribute_groups;

class AttributeGroupController extends Controller
{
    public function get_attribute_group_form()
    {
        return view('add_attribute_group');
	}

	public function post_attribute_group_form(Request $request)
	{

        $attribute_group = new attribute_groups;
        $attribute_group->label = $request->input('label');  
        $attribute_group->save();
        
        return redirect('add_attribute_group')->with(['success', 'attribut sauvegardé']);
	}
}
