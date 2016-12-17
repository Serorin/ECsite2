<?php
namespace App\Service;

use Illuminate\Support\Facades\DB;

// カートの中身を保持するクラス
class CartService
{
  public function addItem($id){
  $item = DB::table('Girls')->where('id',$id)->first();
  $items = session()->get("items",[]);
  $items[] = $item;
  session()->put("items",$items);
  }

  public function clear(){
    session()->flush();
  }

  public function removeItem($index){
    session()->forget("items.$index");
  }

  public function getItems(){
      $items = session()->get("items",[]);
    return $items;
  }
}
