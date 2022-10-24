<?php
namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Product;
use App\Models\role_user;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{
    public function index()
    {   $users =  DB::table('role_user')
        ->join('users', 'users.id', '=', 'role_user.user_id')
        ->join('roles', 'roles.id', '=', 'role_user.role_id')
        ->where('roles.name','=','superadministrator')->get('users.id');
        $products = Product::all();

        $ids = array();
        foreach($users as $user){
            array_push($ids,$user->id);
        }

        return view('product.index', ['products' => $products, 'users_id'=> $ids]);
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('product.show', ['product' => $product]);
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(request $request)
    {
        $timestamp = Carbon::now('GMT+2')->toDateTimeString();

        $file_extention = $request->image->getClientOriginalExtension();
        $path = 'images';
        $filename = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/images/', $filename);
        $request->image->move($path, $filename);

        $product = new Product;       //name in form
        $product->name = $request->name;
        $product->details = $request->details;
        $product->image = $filename;
        $product->created_at = $timestamp;
        $product->updated_at = $timestamp;
        $product->save();
        return redirect()->route('product.index');
    }

    public function edit($key){
        // implement code here ...
    }

    public function update(Request $request, Product $product)
    {
        // $id
        // $product =product::find($id);
        // $product->name =$request->name;
        // $product->details=$request->details;
        // $product->image=$request->image;
        // $product->save();

        $product->update($request->all());
        return view('product.edit', ['product' => $product]);
    }



    public function destroy($key)
    {
        $image_path = 'images/'. Product::all()->find($key)->image;
        File::delete($image_path);
        DB::table('products')->where('id','=',$key)->delete();
        return redirect()->route('product.index');
    }
}
