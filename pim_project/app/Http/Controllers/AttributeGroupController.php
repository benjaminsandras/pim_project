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
        if(isset($_GET["delete"])){
            $attribute_group=attribute_groups::where('id',$_GET['delete'])->delete();
            $attribute_group = attribute_groups::orderBy('label','desc')->get();
            return view('add_attribute_group', 
            [ 
                "attribute_group" => $attribute_group, 
            ]);
        }
        else{
            $attribute_group = attribute_groups::orderBy('label','desc')->get();
            return view('add_attribute_group', 
            [ 
                "attribute_group" => $attribute_group, 
            ]);
        }  
	}

	public function post_attribute_group_form(Request $request)
	{

        $attribute_group = new attribute_groups;
        $attribute_group->label = $request->input('label');  
        $attribute_group->type = $request->input('type');  
        $attribute_group->save();
        
        return redirect('add_attribute_group')->with(['success', 'attribut sauvegardé']);
	}
}
