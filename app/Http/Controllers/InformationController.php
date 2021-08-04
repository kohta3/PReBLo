<?php

namespace App\Http\Controllers;

use App\Information;
use App\Prefecture;
use App\Category;
use App\Like;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use GuzzleHttp\Client;
use RakutenRws_Client;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info=Information::all()->sortBy('crated_at')->take(6);
        $topinfo=Information::all()->sortBy('id')->take(3);
        $prefs=Prefecture::all();
        $categories=Category::all();

        return view('informations.index',compact('info','prefs','categories','topinfo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('informations.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $information=new Information();
        $information->comment=$request->input('comment');
        $information->tittle=$request->input('tittle');
        $information->pref=$request->input('pref');
        $information->city=$request->input('city');
        $information->URL=$request->input('URL');
        $information->TEL=$request->input('TEL');
        $information->about=$request->input('about');
        $information->open=$request->input('open');
        $information->close=$request->input('close');
        $information->ParkingCar=$request->input('ParkingCar');
        $information->ParkingBicycles=$request->input("ParkingBicycles");
        $information->category_id = $request->input('category_id');
        
        if ($request->file('image') !== null) {
            $image = $request->file('image');
            $path=Storage::disk('s3')->putFile('/starage', $image,'public');
            $imagePath=Storage::disk('s3')->url($path);
            $information->image =$imagePath;
            // $image = $request->file('image')->store('public');
        } else {
            $information->image = '';
        }

        $information->save();

        return redirect()->route('informations.show', ['information' => $information->id])->with('flash_message', '投稿が完了しました');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function show(Information $information)
    {
        $client = new Client();

        $freeword=$information->city." ".$information->pref;
        
        
                // リクエスト送信
                
                    $json_res = $client->request('GET','https://app.rakuten.co.jp/services/api/Travel/KeywordHotelSearch/20170426?',['query' =>[
                        'applicationId'=>'1001393711643575856',    
                        'format'=>'json',
                        'affiliateId'=>'20c8801b.9bc4906b.20c8801c.3a69e429',
                        'keyword'=>$freeword,
                        'hits'=>3,
                        
                        ]]
                        )->getBody()->getContents();    
                    $response = json_decode($json_res,true);
                    $hotelInfo = [];
                    $i=0;
                    foreach($response['hotels'] as $result){
                        $hotelInfo[$i]=$result['hotel'][0]['hotelBasicInfo'];
                        $i=$i+1;
                    };
 
                    $PARAMS = ["key"=>'f0d3cc012ab27202', "count"=>3, "keyword"=>$information->pref , "format"=>'json'];
                    $client = new Client();
                    $json_res = $client->request('GET', "http://webservice.recruit.co.jp/hotpepper/gourmet/v1/", ['query' => $PARAMS])->getBody()->getContents(); 
                    $response = json_decode($json_res,true);
                       $eatInfo = [];
                       $i=0;
                       foreach($response['results']['shop'] as $result){
                           $eatInfo[$i]=$result;
                           $i=$i+1;
                       };
                       

        return view('informations.show', compact('information','hotelInfo','eatInfo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function edit(Information $information)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Information $information)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function destroy(Information $information)
    {
        //
    }





    /**
  * 引数のIDに紐づくリプライにLIKEする
  *
  * @param $id リプライID
  * @return \Illuminate\Http\RedirectResponse
  */
  public function like($id)
  {
    Like::create([
      'information_id' => $id,
      'user_id' => Auth::id(),
    ]);
    session()->flash('success', 'You Liked the info.');

    return redirect()->back();
  }

  /**
   * 引数のIDに紐づくリプライにUNLIKEする
   *
   * @param $id リプライID
   * @return \Illuminate\Http\RedirectResponse
   */
  public function unlike($id)
  {
    $like = Like::where('information_id', $id)->where('user_id', Auth::id())->first();
    $like->delete();

    session()->flash('success', 'You Unliked the info.');

    return redirect()->back();
  }
}
