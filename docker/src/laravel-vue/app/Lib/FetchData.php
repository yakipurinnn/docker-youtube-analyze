<?php
namespace App\Lib;

use App\Models\VideoStats;

class FetchData
{
    public static function fetchData($order){
        if (empty($order)){
            $order = 'view_count';
        };

        //where句で投稿日時が記録されていない(0000-00-00 00:00:00)を除外
        if ($order == 'published_date_asc'){
            $videos = VideoStats::orderBy('published_date', 'ASC')->where('published_date', '<>', '0000-00-00 00:00:00')->take(50)->get();
        }else{
            $videos = VideoStats::orderBy($order, 'DESC')->where('published_date', '<>', '0000-00-00 00:00:00')->take(50)->get();
        }

        $videos = self::editData($videos);
        return $videos;
    }

    public static function editData($videos){
        //投稿日時から秒数を消去
        foreach($videos as $index => $video){
            $video->published_date = date('Y-m-d H:i', strtotime($video->published_date));
        }
        return $videos;
    }
}