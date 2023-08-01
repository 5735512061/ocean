<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Product;
use App\Model\Contact;

use Validator;

class FrontendsController extends Controller
{
    public function index(Request $request) {
        $NUM_PAGE = 6;
        $products = Product::paginate($NUM_PAGE);
        return view('frontend/index')->with('NUM_PAGE',$NUM_PAGE)
                                     ->with('products',$products);
    }

    public function contactUs() {
        return view('frontend/page-contact');
    }

    public function aboutUs() {
        return view('frontend/about-us');
    }

    public function product() {
        $products = Product::get();
        return view('frontend/product')->with('products',$products);
    }

    public function content() {
        return view('frontend/content');
    }

    public function sendMessage(Request $request) {
        $validator = Validator::make($request->all(), $this->rules_sendMessage(), $this->messages_sendMessage());
        if($validator->passes()) {
            $contact = $request->all();
            $contact = Contact::create($contact);
            $request->session()->flash('alert-success', 'ส่งข้อความติดต่อเจ้านางแซ่บสำเร็จ');
            return redirect()->action('Frontend\\FrontendsController@contactUs');
        } else {
            $request->session()->flash('alert-danger', 'ส่งข้อความติดต่อเจ้านางแซ่บไม่สำเร็จ กรุณาตรวจสอบข้อมูลอีกครั้ง');
            return back()->withErrors($validator)->withInput();
        }
    }

    public function rules_sendMessage() {
        return [
            'name' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ];
    }

    public function messages_sendMessage() {
        return [
            'name.required' => 'กรุณากรอกขื่อคุณลูกค้า',
            'phone.required' => 'กรุณากรอกเบอร์ติดต่อกลับ',
            'message.required' => 'กรุณากรอกข้อความที่ต้องการติดต่อ',
        ];
    }
}
