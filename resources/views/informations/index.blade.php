@extends('layouts.app')
@section('content')

<p class="pt-3 pr-5 pl-5 ">
  <a class="btn btn-primary btn-sm" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><img src="/img/menu.png" alt="create" class="resizeimage-img" >新しく投稿する</a>
</p>
<div class="row resizeadd-info pl-3 add-info-index">
  <div class="col" style="width: 100%" >
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body h5">
        <form class="info-form" method="POST" action="/informations" enctype="multipart/form-data">  
          {{ csrf_field() }}
          @csrf
            {{-- choese CatrgoryType --}}
            <label class=" bg-info rounded-pill" for="type">カテゴリータイプ</label>
            <select name="category_id" id="type">
              @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->maintype.$category->category }}</option>
              @endforeach
            </select>
            {{-- comment --}}
            <div class="mr-1" style="width: 100%">
              <label class=" bg-info rounded-pill" for="comment" maxlength='100'>ひとこと</label>
              <input type="string" style="width: 80%" name="comment" id="comment" required>
            </div>
            {{-- tittle --}}
            <div class="mr-1">
              <label for="tittle" class=" bg-info rounded-pill">場所名</label><input type="string" style="width: 38%" name="tittle" id="tittle" required>
            </div>
            {{-- pref --}}
            <div>
              <div> 
                <label class="bg-info rounded-pill">都道府県</label>
                  <select name="pref"  style="width: 100px">
                    @foreach ($prefs as $pref)
                      <option value="{{$pref->Pref}}">{{$pref->Pref}}</option>
                    @endforeach
                  </select>
                </div>
            {{-- city --}}
              <div>
                <label for="city" class="ml-3 bg-info rounded-pill">市区町村</label>
                <input type="string" id="city" name="city" class="ml-1" style="width: 100px" required>
              </div>
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
              <label for="carport" class='bg-info rounded-pill'>駐車場</label>
              無<input type="radio" id="carport" name="ParkingCar" value="0">
              有<input type="radio" id="carport" class="mr-2" name="ParkingCar" value="1">
              <label for="bycyclePort" class='bg-info rounded-pill'>駐輪場</label>
              無<input type="radio" id="bycyclePort" name="ParkingBicycles" value="0">
              有<input type="radio" id="bycyclePort" name="ParkingBicycles" value="1">
            </div>
            {{-- open --}}
            <div class='border border-info p-1 align-top'>
              <label class='bg-info rounded-pill'>営業時間</label>
              <label for="open">open</label>
              <input type="time" name="open" id="open" required>
            {{-- closes --}}
              <label for="close">close</label>
              <input type="time" name="close" id="close" required>
            </div>
            {{-- about --}}
            <div>
              <label for="about" class="bg-info rounded-pill align-top">about</label>
              <textarea name="about" class="ml-1 container-textarea" id="about"></textarea>
            </div>
            
            {{-- photo --}}
            <div class="form-inline mt-4 mb-4 row">
                <label for="product-image" class="bg-info rounded-pill">画像</label>
                <img src="#" id="product-image-preview">
                <input type="file" name="image" id="product-image" >
            </div>
            {{--button--}}  
            <p>
              <div>
                <button class="btn bg-warning border border-dark rounded-pill" type="submit">投稿</button>
              </div>
            </p>
        </form>
        
        <div class='preview-img bg-dark'>
          <img  id="preview" style="height: 100px">
          <script type="text/javascript">
            $('#myImage').on('change', function (e) {
              var reader = new FileReader();
              reader.onload = function (e) {
                  $("#preview").attr('src', e.target.result);
            }reader.readAsDataURL(e.target.files[0]);});
          </script>

        </div> 
      </div>
      

    </div>
  </div>
</div>

<div style="display: flex">


  {{-- content new add & top3 --}}
  {{-- new take6 --}}
  <div class="info-content">
    <div class="container">
      <div class="row mr-2">
        <p class="text-light col-12 ml-1 mt-2" style="font-size:150%;"><img src="/img/tourch.png" class="rounded-circle bg-light" alt="newinfo" style="width: 5%">新規投稿一覧</p>
        @foreach ($info as $information)         
          <p class="col-md-4 text-left text-light  border" style="height: 300px"> 
              {{$information->pref.'>'.$information->city}}<br>
              <a  style='font-size:200% ' href="{{route('informations.show', $information)}}">{{$information->tittle}}</a><br>
              {{'ひとこと:'.$information->comment}}<br>
            <br>
             <a class="text-center d-block mx-auto" href="{{route('informations.show', $information)}}">
              @if ($information->image !== "")
                <img src="{{ mix('storage/'.$information->image) }}" class="info-image ">
              @else
                <img src="{{ asset('img/dummy.png')}}" class="img-thumbnail">
              @endif
            </a>
          {{-- <a href="{{route('informations.edit', $information)}}">edit</a>  --}}
        </p>
        @endforeach
    </div>




  {{-- top3 --}}
    <div class="row">
      <p class="text-light col-12 ml-1 mt-2" style="font-size:150%;"><img src="/img/rank.png" class="rounded-circle bg-light" alt="newinfo" style="width: 5%">人気ランキング</p>
    </div>

      <?php $i=0;?>
      @foreach ($topinfo as $topinfor)
      <?php $i=$i+1;?>
    <div class="row mb-3 border border-primary Regular shadow" style="height: 12rem">
      <a href="{{route('informations.show', $information)}}" class="col-md-4  d-flex align-items-center text-center">    
        @if ($topinfor->image !== "")
            <img src="{{ mix('storage/'.$topinfor->image) }}" class="info-image">
            @else
            <img src="{{ asset('img/dummy.png')}}" class="img-thumbnail">
        @endif
      </a>
      <div class='text-light d-flex align-items-center col-md-8 h4' >  
        <div>
          <img src="/img/{{$i}}.png" class='bg-warning rounded-circle' alt="newinfo" style="width: 7%">{{$i.'位'}}
          <p class="text-nowrap h5">  
            {{$topinfor->pref.'>'.$topinfor->city}}
            
          </P>
            <a  style='font-size:120%' class="mt-3" href="{{route('informations.show', $information)}}">{{$topinfor->tittle}}</a>
            &ensp;URL:<a class="h5" href="{{$topinfor->URL}}">{{$topinfor->URL}}</a>
            <p class="h5 mt-3 shadow-lg">{{'ひとこと:'.$topinfor->comment}}</p>

            <?php
            if($information->ParkingCar===0)$judgeCar='駐車場有り';
            else$judgeCar='駐車場無し';
            if($information->ParkingBicycles===0)$judgeBycycle='駐輪場有り';
            else$judgeBycycle='駐輪場無し';
            ?>
           <span class="text-nowrap h5 mt-3"> {{$judgeCar."\t".$judgeBycycle}}</span>
       </div>
      </div>
    </div>
         @endforeach   

    
  </div> 
</div>
    



    

  <div class="info-afi">
    {{-- rakuten afiriate --}}
    <a href="https://hb.afl.rakuten.co.jp/hsc/20bca630.fcc5488e.20bca631.12bbb9d1/?link_type=pict&ut=eyJwYWdlIjoic2hvcCIsInR5cGUiOiJwaWN0IiwiY29sIjoxLCJjYXQiOiIxMjAiLCJiYW4iOiIxNDIxNzk5IiwiYW1wIjpmYWxzZX0%3D" target="_blank" rel="nofollow sponsored noopener" class='m-5' style="word-wrap:break-word;"  >
      <img src="https://hbb.afl.rakuten.co.jp/hsb/20bca630.fcc5488e.20bca631.12bbb9d1/?me_id=2100001&me_adv_id=1421799&t=pict" border="0" class='image-responsive' style="width:50%" alt="" title=""></a>
    
    {{-- rakutenCard --}}


  </div>
</div>

<script type="text/javascript">
     $("#product-image").change(function() {
         if (this.files && this.files[0]) {
             let reader = new FileReader();
             reader.onload = function(e) {
                 $("#product-image-preview").attr("src", e.target.result);
             }
             reader.readAsDataURL(this.files[0]);
         }
     });
 </script>
@endsection