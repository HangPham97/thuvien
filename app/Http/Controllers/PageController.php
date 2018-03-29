<?php

namespace App\Http\Controllers;

use App\Slide;

use Illuminate\Http\Request;
use App\Book;
use App\Cate;
use App\Cart;
use App\Customer;
use App\Bill;
use App\BillDetail;
use App\BillUser;
use App\BillUserDetail;
use Auth;
use Session;
use DB;
class PageController extends Controller
{
    function getIndex()
    {
        $slide = Slide::all();
        $book = Book::all();
        return view('page.home',compact('slide','book'));
    }

    function getCategory($type)
    {
        $book_type = Book::where('category',$type)->get();
        $other_type = Book::where('category','<>',$type)->paginate(3);
        $cate = Cate::all();
        $book_cate = Cate::where('id',$type)->first();
        return view('page.category',compact('book_type','other_type','cate','book_cate'));
    }
    //
    function getDetail(Request $req)
    {
        $book = Book::where('id',$req->id)->first();
        return view('page.detail_book', compact('book','cate'));
    }
    function getContact()
    {
        return view('page.contact');
    }

    function getAbout()
    {
        return view('page.about');
    }

    function getAdd(Request $req, $id)
    {
        $book=Book::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart  = New Cart($oldCart);
        $cart->add($book,$id);
        $cart->add($book,$id);
        $req->session()->put('cart',$cart);
        return redirect()->back();
    }

    function getDel($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items) > 0){
            Session::put('cart',$cart);
        } else {
            Session::forget ('cart');
        }
        return redirect()->back();
    }

    public function getCheckout(){
        return view('page.get_book');
    }

    function postCheckout1(Request $req){
        $cart = Session::get('cart');

        $custom = new Customer;

        $custom->name = $req->name;
        $custom->gender = $req->gender;
        $custom->email = $req->email;
        $custom->adress = $req->address;
        $custom->phone_number = $req->phone;
        $custom->save();
        $bill = new Bill;
        $bill->id_customer = $custom->id;
        $bill->total = $cart->totalQty / 2;
        $bill->save();
        foreach ($cart->items as $key => $value) {
            $bill_detail = new BillDetail;
            $bill_detail->id_bill = $bill->id;
            $bill_detail->id_book = $key;
            $bill_detail->quantity = $value['qty'] / 2;
            $bill_detail->status = 1;
            $bill_detail->give_back_date = $req->give_back_date;
            $bill_detail->save();
        }
        Session::forget('cart');
        return redirect()->back()->with('thongbao','Đã mượn sách thành công, mời bạn đến thư viện để nhận sách!');

    }
    function postCheckout2(Request $req){
        $cart = Session::get('cart');
        $user = Auth::user();
        $custom = new Customer;

        $custom->name = $user->name;
        $custom->gender = $req->gender;
        $custom->email = $user->email;
        $custom->adress = $req->address;
        $custom->phone_number = $req->phone;
        $custom->save();

        $bill_user = new BillUser;
        $bill_user->id_user  = Auth::id();;
        $bill_user->total = $cart->totalQty/2;
        $bill_user->save();
        foreach($cart->items as $key=>$value) {
            $bill_user_detail = new BillUserDetail;
            $bill_user_detail->id_bill_user = $bill_user->id;
            $bill_user_detail->id_book = $key;
            $bill_user_detail->quantity = $value['qty']/2;
            $bill_user_detail->status = 1;
            $bill_user_detail->give_back_date = $req->give_back_date;
            $bill_user_detail->save();
        }
        Session::forget('cart');
        return redirect()->back()->with('thongbao','Đã mượn sách thành công, mời bạn đến thư viện để nhận sách!');

    }
    function postLogout(){
        Auth::logout();
        if(Session('cart'))
            Session::forget('cart');
        return redirect()->route('index');
    }

    function search(Request $req){
        $book = Book::where('name','like','%'.$req->key.'%')->get();
        return view('page.search',compact('book'));
    }

    function getInform(){
        $bill_detail = DB::table('book')
            ->join('bill_user_detail','book.id','=','bill_user_detail.id_book')
            ->join('bill_user','bill_user_detail.id_bill_user','=','bill_user.id')
            ->join('users','bill_user.id_user','=','users.id')
            ->where('bill_user_detail.status',1)
            ->select('quantity','book.name','bill_user_detail.created_at','bill_user_detail.give_back_date')
            ->get();
        return view('page.inform',compact('bill_detail'));
    }

    function demo() {
        return view('admin.add');
    }
}
