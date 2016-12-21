<?php
use App\Service\NewsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
  $news = new NewsService();
    $newslist = $news->getNews();
  return view('top',compact('newslist'));
});

Route::get('/long',function(){
  return view('long');
});

Route::get('/medium',function(){
  return view('medium');
});

Route::get('/other',function(){
  return view('other');
});

Route::get('/cart',function(){
  return view('cart');
});

Route::get('/logout',function(){
  Auth::logout();
  return redirect('/');
});

Route::get('/menu',function(Request $request){
  $Item = [];
  $id = $request -> get('id');
  $Item = DB::table('Girls')->where("id",$id)->get();
  return view("menu",["Product"=>$Item]);
});

//カートに入れる
Route::post('/cart',function(Request $request){
  $id = $request->get("id");
  $cart = new \App\Service\CartService();
  $cart->addItem($id);
  return redirect("/cart");//カートページへのリダイレクト
});


//カートの中を一覧表示
Route::get('/cart',function(){
  $cart = new \App\Service\CartService();
  return view("cart",[//データを渡してビューを表示
    "items"=>$cart->getItems()
  ]);
});

//商品を削除
Route::get('/delete',function(Request $request){
  $index = $request->get("index");//削除した商品のindexを取得
  $cart = new \App\Service\CartService();
  $cart->removeItem($index);
  return redirect("/cart");
});

//カートを空にする
Route::get('/delete/all',function(){
  $cart = new \App\Service\CartService();
  $cart->clear();
  return redirect("/cart");//カートページヘのリダイレクト
});

Auth::routes();
Route::get('/home', 'HomeController@index');
