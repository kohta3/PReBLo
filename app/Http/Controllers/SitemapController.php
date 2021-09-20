<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use App\Information;

class SitemapController extends Controller
{
     /**
     * @return \Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $sitemap = App::make("sitemap");

        // Topページ
        $sitemap->add(URL::to('/'), now(), '1.0', 'always');

        // DBのデータを元に動的URL生成
        $infos = Information::query()->orderBy('updated_at', 'desc')->get();
        foreach ($infos as $info) {
            $sitemap->add(route('informations.show', ['information' => $info->id], compact('info')), $info->updated_at, '0.8', 'monthly');
          }

        // 出力
        return $sitemap->render('xml');
        // XMLファイルで出力する場合
        // $sitemap->store('xml', 'mysitemap');
    }
}
