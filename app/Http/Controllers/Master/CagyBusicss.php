<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CagyService;
use Redirect;

class CagyBusicss extends Controller
{
    public function index()
    {
        $category = CagyService::all();
        return view('Admin.category.index', compact('category'));
    }

    public function create()
    {
        return view('Admin.category.create');
    }
    public function store(Request $res)
    {
        $error = $res->validate([
            'cagy_name' => 'required|min:2|string',
            'cagy_detail' => 'required|string',
        ]);
        $cary_value = new CagyService;
        $cary_value->cagy_serv = $res->cagy_name;
        $cary_value->detail_cagy = $res->cagy_detail;
        $result = $cary_value->save();
        if ($result) {
            return redirect()->route('category.index')->with('success', 'Category created successfully.');
        } else {
            return redirect()->route('category.create')->with('error', 'Category creation failed.');
        }
    }
    public function show()
    {
        $cagy = CagyService::all();
        $option = compact('cagy');
        return view('viw')->with($option);
    }
    public function edit($id)
    {
        $edit = CagyService::where('cagy_id', $id)->first();
        if (is_null($edit)) {
            return redirect()->back();
        } else {
            return view('Admin.category.edit', compact('edit'));
        }
    }
    public function update(Request $res, $id)
    {
        $error = $res->validate([
            'cagy_name' => 'required|min:2|string',
            'cagy_detail' => 'required|string',
        ]);
        $cary_value = CagyService::where('cagy_id', $id)->first();
        $cary_value->cagy_serv = $res->cagy_name;
        $cary_value->detail_cagy = $res->cagy_detail;
        $result = $cary_value->save();
        if ($result) {
            return redirect()->route('category.index')->with('success', 'Category updated successfully.');
        } else {
            return redirect()->route('category.edit', ['id' => $id])->with('error', 'Category update failed.');
        }
    }
    public function destroy($id)
    {
        $cary_value = CagyService::where('cagy_id', $id)->first();
        if (is_null($cary_value)) {
            return redirect()->back();
        } else {
            CagyService::where('cagy_id', $id)->first()->delete();
            return redirect()->route('category.index')->with('success', 'Category deleted successfully.');
        }
    }
}
