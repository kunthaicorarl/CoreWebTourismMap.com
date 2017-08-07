<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Province;
class ProvinceController extends Controller
{
    public function index(Request $request)
    {
        $input = $request->all();
        if($request->get('search')){
            $items = Province::where("title_khmer", "LIKE", "%{$request->get('search')}%")
                ->paginate(5);      
        }else{
		  $items = Province::paginate(5);
        }
        return response($items);
    }
    public function store(Request $request)
    {
    	$input = $request->all();
        $create = Province::create($input);
        return response($create);
    }
    public function edit($id)
    {
        $item = Province::find($id);
        return response($item);
    }
    public function update(Request $request,$id)
    {
    	$input = $request->all();
        Province::where("id",$id)->update($input);
        $item = Province::find($id);
        return response($item);
    }
    public function destroy($id)
    {
        return Province::where('id',$id)->delete();
    }
}