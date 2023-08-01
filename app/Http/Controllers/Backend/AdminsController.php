<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Admin;
use App\Model\Product;
use App\Model\Contact;

use DB;
use Auth;
use Validator;

class AdminsController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }

    public function product(Request $request) {
        $NUM_PAGE = 10;
        $products = Product::paginate($NUM_PAGE);
        $page = $request->input('page');
        $page = ($page != null)?$page:1;
        return view('backend/admin/product/index')->with('NUM_PAGE',$NUM_PAGE)
                                                  ->with('page',$page)
                                                  ->with('products',$products);
    }

    public function createProduct(Request $request) {
        return view('backend/admin/product/create-product');
    }

    public function createProductPost(Request $request) {
        $validator = Validator::make($request->all(), $this->rules_createProductPost(), $this->messages_createProductPost());
        if($validator->passes()) {
            if($request->hasFile('image')){
                $image = $request->file('image');
                $filename = md5(($image->getClientOriginalName(). time()) . time()) . "_o." . $image->getClientOriginalExtension();
                $image->move('image_upload/image_product/', $filename);
                $path = 'image_upload/image_product/'.$filename;

                DB::table('products')->insert([
                    'image' => $filename,
                    'product_name' => $request->get('product_name'),
                    'product_name_eng' => $request->get('product_name_eng'),
                    'price' => $request->get('price'),
                    'price_eng' => $request->get('price_eng'),
                    'detail' => $request->get('detail'),
                    'detail_eng' => $request->get('detail_eng'),
                ]);

            }
            $request->session()->flash('alert-success', 'เพิ่มข้อมูลสินค้าสำเร็จ');
            return redirect()->action('Backend\AdminsController@product');
        } else {
            $request->session()->flash('alert-danger', 'เพิ่มข้อมูลสินค้าไม่สำเร็จ กรุณาตรวจสอบข้อมูลอีกครั้ง');
            return back()->withErrors($validator)->withInput();
        }
    }

    public function productDelete($id) {
        Product::findOrFail($id)->delete();
        return back();
    }

    public function editProduct($id) {
        $product = Product::findOrFail($id);
        return view('backend/admin/product/edit-product')->with('product',$product);
    }

    public function updateProduct(Request $request) {
        $validator = Validator::make($request->all(), $this->rules_updateProduct(), $this->messages_updateProduct());
        if($validator->passes()) {
            $id = $request->get('id');
            $product = Product::findOrFail($id);
            $product->update($request->all());

            if($request->hasFile('image')) {
                $image = $request->file('image');
                $filename = md5(($image->getClientOriginalName(). time()) . time()) . "_o." . $image->getClientOriginalExtension();
                $image->move('image_upload/image_product/', $filename);
                $path = 'image_upload/image_product/'.$filename;
                $product = Product::findOrFail($id);
                $product->image = $filename;
                $product->save();
            }

            $request->session()->flash('alert-success', 'แก้ไขข้อมูลสินค้าสำเร็จ');
            return redirect()->action('Backend\AdminsController@product');
        } else {
            $request->session()->flash('alert-danger', 'แก้ไขข้อมูลสินค้าไม่สำเร็จ กรุณาตรวจสอบข้อมูลอีกครั้ง');
            return back()->withErrors($validator)->withInput();
        }
    }

    public function contact(Request $request) {
        $NUM_PAGE = 10;
        $contacts = Contact::paginate($NUM_PAGE);
        $page = $request->input('page');
        $page = ($page != null)?$page:1;
        return view('backend/admin/contact/index')->with('NUM_PAGE',$NUM_PAGE)
                                                  ->with('page',$page)
                                                  ->with('contacts',$contacts);
    }

    public function rules_createProductPost() {
        return [
            'product_name' => 'required',
            'product_name_eng' => 'required',
            'detail' => 'required',
            'detail_eng' => 'required',
            'price' => 'required',
            'price_eng' => 'required',
            'image' => 'required',
        ];
    }

    public function messages_createProductPost() {
        return [
            'product_name.required' => 'กรุณากรอกขื่อสินค้า',
            'product_name_eng.required' => 'กรุณากรอกขื่อสินค้า (ภาษาอังกฤษ)',
            'detail.required' => 'กรุณากรอกรายละเอียดสินค้า',
            'detail_eng.required' => 'กรุณากรอกรายละเอียดสินค้า (ภาษาอังกฤษ)',
            'price.required' => 'กรุณากรอกราคาสินค้า',
            'price_eng.required' => 'กรุณากรอกราคาสินค้า (ภาษาอังกฤษ)',
            'image.required' => 'กรุณาแนบไฟล์รูปภาพ ขนาด 378*300 pixel',
        ];
    }

    public function rules_updateProduct() {
        return [
            'product_name' => 'required',
            'product_name_eng' => 'required',
            'detail' => 'required',
            'detail_eng' => 'required',
            'price' => 'required',
        ];
    }

    public function messages_updateProduct() {
        return [
            'product_name.required' => 'กรุณากรอกขื่อสินค้า',
            'product_name_eng.required' => 'กรุณากรอกขื่อสินค้า (ภาษาอังกฤษ)',
            'detail.required' => 'กรุณากรอกรายละเอียดสินค้า',
            'detail_eng.required' => 'กรุณากรอกรายละเอียดสินค้า (ภาษาอังกฤษ)',
            'price.required' => 'กรุณากรอกราคาสินค้า',
        ];
    }
    
}
