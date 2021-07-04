<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $maintypes=['観光','宿泊','飲食'];
        $see_categories=['自然','建物','買い物','体験','施設','イベント','その他'];
        $stay_categories=['旅館','ホテル','民宿','ゲストハウス','キャンプ場','車中泊','ライダーハウス','その他'];
        $eat_categories=['ご当地グルメ','和食','洋食','ファストフード','ファミレス','喫茶店','居酒屋','エスニック','ジョイフル','その他'];
        foreach($maintypes as $maintype)
        {
            if($maintype == '観光'){
                foreach($see_categories as $see_category){
                    Category::create([
                        'maintype' => $maintype,
                        'category' => $see_category
                    ]);
                };
            };
            if($maintype == '宿泊'){
                foreach($stay_categories as $stay_category){
                    Category::create([
                        'maintype' => $maintype,
                        'category' => $stay_category
                    ]);
                };
            };
            if($maintype == '飲食'){
                foreach($eat_categories as $eat_category){
                    Category::create([
                        'maintype' => $maintype,
                        'category' => $eat_category
                    ]);
                };
            };
        };
        
    }
}