<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BusinsseService;

class ProductAddController extends Controller
{
    public function index()
    {
        $product = BusinsseService::join('cagy_services', 'cagy_services.cagy_id', '=', 'businsse_services.cagy_id')->select('businsse_services.*', 'cagy_services.cagy_serv')->get();
        return view('Admin.product.index', compact('product'));
    }

    public function create()
    {
        return view('Admin.product.create');
    }

    public function store(Request $res)
    {
        $error = $res->validate([
            'product_name' => 'required|string',
            'product_detail' => 'required|string',
            'cagy_id' => 'required',
            'product_images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required',
            'status' => 'required|in:Y,N',
        ]);
        $product_value = new BusinsseService;
        $product_value->servic_name = $res->product_name;
        $product_value->servic_details = $res->product_detail;
        $product_value->cagy_id = $res->cagy_id;
        $product_value->price = $res->price;
        $product_value->status = $res->status;

        $image = $res->file('product_images');
        $imageName = time() . '.' . $res->file('product_images')->getClientOriginalExtension();
        $filePath = $image->move(public_path('product_images'), $imageName);
        $product_value->service_img = $imageName;

        $result = $product_value->save();
        if ($result) {
            return redirect()->route('product.index')->with('success', 'Product created successfully.');
        } else {
            return redirect()->route('product.create')->with('error', 'Product creation failed.');
        }
    }
    public function show($id)
    {
        $product = BusinsseService::findOrFail($id);
        return view('product.show', compact('product'));
    }
    
    public function edit($id)
    {
        $product = BusinsseService::where('ser_id', $id)->first();
        return view('Admin.product.edit', compact('product'));
    }
    public function update(Request $res, $id)
    {
        $error = $res->validate([
            'product_name' => 'required|string',
            'product_detail' => 'required|string',
            'cagy_id' => 'required',
            'price' => 'required',
            'status' => 'required|in:Y,N',
        ]);
        $cary_value = BusinsseService::where('ser_id', $id)->first();
        $cary_value->servic_name = $res->product_name;
        $cary_value->servic_details = $res->product_detail;
        $cary_value->cagy_id = $res->cagy_id;
        $cary_value->price = $res->price;
        $cary_value->status = $res->status;
        $result = $cary_value->save();
        if ($result) {
            return redirect()->route('product.index')->with('success', 'Product updated successfully.');
        } else {
            return redirect()->route('product.edit', ['id' => $id])->with('error', 'Product update failed.');
        }
    }
    public function destroy($id)
    {
        $product = BusinsseService::findOrFail($id);
        $product->delete();
        if (!$product) {
            return redirect()->route('product.index')->with('error', 'Product not found.');
        }
        return redirect()->route('product.index')->with('success', 'Product deleted successfully.');
    }

    public function productShow()
    {
        $product = BusinsseService::join('cagy_services', 'cagy_services.cagy_id', '=', 'businsse_services.cagy_id')->select('businsse_services.*', 'cagy_services.cagy_serv')->where('businsse_services.status', 'Y')->get();
        return view('ecommerce.index', compact('product'));
    }
}
