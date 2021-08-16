@extends('layouts.app')
@section('content')


<p class="pt-3 pr-5 pl-5 ">
  <a class="btn btn-primary btn-sm" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><img src="/img/menu.png" alt="create" class="resizeimage-img" >新しく投稿する</a>
</p>
<div class="row resizeadd-info pl-3 add-info-index w-100">
  <div class="collapse multi-collapse" id="multiCollapseExample1">
    <div class="card card-body h5">
      <form class="info-form" method="POST" action="/informations" enctype="multipart/form-data">  
        {{ csrf_field() }}
          {{-- choese CatrgoryType --}}
          <label class=" bg-info rounded-pill" for="type">カテゴリータイプ</label>
          <select name="category_id" id="type">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->maintype.$category->category }}</option>
            @endforeach
          </select>
          {{-- comment --}}
          <div class="mr-1" style="width: 70%">
            <label class=" bg-info rounded-pill" for="comment" maxlength='100'>ひとこと</label>
            <input type="string" style="width: 70%" name="comment" id="comment" maxlength='50' required>
          </div>
          {{-- tittle --}}
          <div class="mr-1">
            <label for="tittle" class=" bg-info rounded-pill">場所名</label><input type="string" style="width: 40%" name="tittle" id="tittle" required>
          </div>
          {{-- pref --}}
            <div> 
              <label class="bg-info rounded-pill">都道府県</label>
              <select name="pref"  style="width: 100px">
                @foreach ($prefs as $pref)
                  <option value="{{$pref->Pref}}">{{$pref->Pref}}</option>
                @endforeach
              </select>
              &nbsp;
            </div>
          {{-- city --}}
            <div>
              &nbsp;
              <img src="/img/city.png" class="bikeorcar-img">
              <label for="city" class="bg-info rounded-pill">市区町村</label>
              <input type="string" id="city" name="city" class="ml-1" style="width: 100px" required>
            </div>
          {{-- URL --}}
          <div>
            <label class="ml-3 bg-info rounded-pill" for="URL">URL</label>
            <input type="url" name="URL" id="URL" style="width: 300px" required>
          </div>
          {{-- TEL --}}
          <div>
            <label class="ml-3 bg-info rounded-pill" for="TEL">TEL</label>
            <input type="tel" pattern="[0-9]{11}" placeholder="090-1234-5678" name="TEL" id="TEL" style="width: 300px" required>
          </div>
          {{-- parkingCar --}}
          <div>
            <img src="/img/carport.png" class="bikeorcar-img">
            <label for="carport" class='bg-info rounded-pill'>駐車場</label>
            無<input type="radio" id="carport" name="ParkingCar" value="0">
            有<input type="radio" id="carport" class="mr-2" name="ParkingCar" value="1">
            <img src="/img/bike.png" class="bikeorcar-img">
            <label for="bycyclePort" class='bg-info rounded-pill'>駐輪場</label>
            無<input type="radio" id="bycyclePort" name="ParkingBicycles" value="0">
            有<input type="radio" id="bycyclePort" name="ParkingBicycles" value="1">
          </div>
          
          {{-- open --}}
          <div class='p-1 align-top'>
            <label class='bg-info rounded-pill'>営業時間</label>
            <label for="open">open</label>
            <input type="time" name="open" id="open" style="width: 75px" required>
          {{-- closes --}}
            <label for="close">close</label>
            <input type="time" name="close" id="close" style="width: 75px" required>
          </div>

          {{-- about --}}
          <div style="width: 80%">
            <label for="about" class="bg-info rounded-pill align-top">about</label>
            <textarea name="about" class="ml-1 container-textarea" id="about">未入力</textarea>
          </div>
          
          {{-- photo --}}
          <div class="form-inline mt-4 mb-4 row">
              <label for="product-image" class="bg-info rounded-pill">画像</label>
              <input type="file" name="image" id="add-file"  accept="image/*">
          </div>


          {{--button--}}  
          <p>
            <div>
              <button class="btn bg-warning border border-dark rounded-pill" type="submit">投稿</button>
            </div>
          </p>
      </form>
    </div>
    

  </div>
</div>

<div>
  {{-- content new add & top3 --}}
  {{-- new take6 --}}
  <div class="info-content position-block" style="display:flex">
    <div class="container">
        <div class="row mr-2">
          <p class="text-light col-md-12 ml-1 mt-5 pt-5 h3" ><img src="/img/tourch.png" class="rounded-circle bg-light" alt="newinfo" style="width: 5%">新規投稿一覧</p>
        </div>
        <div class="row">  
            @foreach ($info as $information)        
            <?php
              $infoTime=str_replace(" ","日",substr($information->created_at,8));
              ?>
            <div class="col-md-4 mt-3 " style="height: 170px">
              <a class="text-center mx-auto" href="{{route('informations.show', $information)}}">
                @if ($information->image !== "")
                  <img src="{{$information->image}}" class="middleImageInfo1 rounded">
                @else 
                  <img src="{{ asset('img/dummy.png')}}" class="middleImageInfo1 rounded">
                @endif
              </a>
              <p class="text-left text-light rounded firstInfo ml-2"> 
                <span> {{$infoTime}}</span><br>
                {{$information->pref.'>'.$information->city}}<br>
                <a  class='h3' href="{{route('informations.show', $information)}}">{{$information->tittle}}</a><br>
                {{'ひとこと:'.$information->comment}}<br>
              </p>
            </div>
            @endforeach
        </div>



      
          {{-- top3 --}}
      <div class="row">
        <div class="col-md-12">
          <p class="text-light col-md-12 ml-1 mt-5 pt-5 h3"><img src="/img/rank.png" class="rounded-circle bg-light" alt="newinfo" style="width: 5%">人気ランキング</p>
        </div>

        <?php $i=0;?>
        @foreach ($topinfo as $topinfor)
          <?php $i=$i+1;?>
          <div class="col-md-12 mb-3 shadow text-light top3 rounded bg-dark">
            <div class="w-100">
              <span class="h1">
                {{$i.'位'}}  
              </span>

              <span class="text-nowrap h5">  
                {{$topinfor->pref.'>'.$topinfor->city}}
              </span>
            </div>
                
            <div class='align-items-center h4' >  
              <div class="container">
                <div class="row">  
                  <div class="col-md-5 m-0 text-center">  
                    <a href="{{route('informations.show', $topinfor)}}" class="align-items-center">    
                      @if ($topinfor->image !== "")
                          <img src="{{$topinfor->image}}" class="middleImageInfo2">
                          @else
                          <img src="{{ asset('img/dummy.png')}}" class="middleImageInfo2">
                      @endif
                    </a>
                  </div>

                  <div class="col-md-7">
                    <p><a class="mt-3 h1" href="{{route('informations.show', $topinfor)}}">{{$topinfor->tittle}}</a></p>
                    <a class="h6" href="{{$topinfor->URL}}">サイトを開く</a>
                    <p class="h5 mt-3 shadow-lg">{{'ひとこと:'.$topinfor->comment}}</p>

                    <?php
                        if($information->ParkingCar===0)$judgeCar='駐車場有り';
                      else$judgeCar='駐車場無し';
                        if($information->ParkingBicycles===0)$judgeBycycle='駐輪場有り';
                      else$judgeBycycle='駐輪場無し';
                    ?>
                      
                    <div class="text-nowrap h5 mt-3"> 
                      <span style="height: 10%"><img src="/img/carport.png" class="bikeorcar-img">{{$judgeCar}}</span>
                      <span><img src="/img/bike.png" class="bikeorcar-img">{{$judgeBycycle}}</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach  
    </div>    
  </div>

    <div class="info-afi d-none d-sm-block">
      {{-- rakuten afiriate --}}
      <div class="mb-5  mt-5 responsive-afi text-center">
        <a href="https://hb.afl.rakuten.co.jp/hsc/20bca630.fcc5488e.20bca631.12bbb9d1/?link_type=pict&ut=eyJwYWdlIjoic2hvcCIsInR5cGUiOiJwaWN0IiwiY29sIjoxLCJjYXQiOiIxMjAiLCJiYW4iOiIxNDIxNzk5IiwiYW1wIjpmYWxzZX0%3D" target="_blank" rel="nofollow sponsored noopener" class='m-5' style="word-wrap:break-word;">
          <img src="https://hbb.afl.rakuten.co.jp/hsb/20bca630.fcc5488e.20bca631.12bbb9d1/?me_id=2100001&me_adv_id=1421799&t=pict" border="0" class='image-responsive' style="width:70%" alt="" title=""></a>
      </div>
      {{-- rakuten afi map --}}
      <div class="responsive-afi text-center">  
        <a href="https://hb.afl.rakuten.co.jp/ichiba/20f005cf.bc61c761.20f005d0.b927bd33/?pc=https%3A%2F%2Fitem.rakuten.co.jp%2Fbook%2F16614202%2F&link_type=pict&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0Iiwic2l6ZSI6IjI0MHgyNDAiLCJuYW0iOjEsIm5hbXAiOiJyaWdodCIsImNvbSI6MSwiY29tcCI6ImRvd24iLCJwcmljZSI6MCwiYm9yIjowLCJjb2wiOjEsImJidG4iOjEsInByb2QiOjAsImFtcCI6ZmFsc2V9" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/20f005cf.bc61c761.20f005d0.b927bd33/?me_id=1213310&item_id=20261664&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F6612%2F9784398656612.jpg%3F_ex%3D240x240&s=240x240&t=pict" border="0" style="margin:2px" alt="" title=""><p>ツーリングマップル　北海道</p></a>
        <a href="https://hb.afl.rakuten.co.jp/ichiba/20f005cf.bc61c761.20f005d0.b927bd33/?pc=https%3A%2F%2Fitem.rakuten.co.jp%2Fbook%2F16614196%2F&link_type=pict&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0Iiwic2l6ZSI6IjI0MHgyNDAiLCJuYW0iOjEsIm5hbXAiOiJyaWdodCIsImNvbSI6MSwiY29tcCI6ImRvd24iLCJwcmljZSI6MCwiYm9yIjowLCJjb2wiOjEsImJidG4iOjEsInByb2QiOjAsImFtcCI6ZmFsc2V9" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/20f005cf.bc61c761.20f005d0.b927bd33/?me_id=1213310&item_id=20261658&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F6674%2F9784398656674.jpg%3F_ex%3D240x240&s=240x240&t=pict" border="0" style="margin:2px" alt="" title=""><p>ツーリングマップル　九州 沖縄</p></a>
      </div>
      <div class="responsive-afi text-center">
        <a href="https://hb.afl.rakuten.co.jp/hsc/20bf85ec.e6f606ee.20bca631.12bbb9d1/?link_type=pict&ut=eyJwYWdlIjoic2hvcCIsInR5cGUiOiJwaWN0IiwiY29sIjoxLCJjYXQiOiIxIiwiYmFuIjoiMTY3Mzk3IiwiYW1wIjpmYWxzZX0%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hsb/20bf85ec.e6f606ee.20bca631.12bbb9d1/?me_id=2101008&me_adv_id=167397&t=pict" border="0" style="margin:2px" alt="" title=""></a>
      </div>
    </div>
</div>
@endsection