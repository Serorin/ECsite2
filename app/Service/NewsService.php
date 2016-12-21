<?php
namespace App\Service;

use Illuminate\Support\Facades\DB;

class NewsService
{
    public function addNews(){

    }

    public function deleteNews(){

    }

    public function getNews(){
        $news = DB::table('News')->get();
        return $news;
    }


}
?>
