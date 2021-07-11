
@extends('layouts.app')
@section('content')

<script>
$('#myImage').on('change', function (e) {
  var reader = new FileReader();
  reader.onload = function (e) {
      $("#preview").attr('src', e.target.result);
  }reader.readAsDataURL(e.target.files[0]);});</script>

<p class="pt-3 pr-5 pl-5 ">
  <a class="btn btn-primary btn-sm" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><img src="/img/menu.png" alt="create" class="resizeimage-img" >新しく投稿する</a>
</p>
<div class="row resizeadd-info pl-3 add-info-index">
  <div class="col" style="width: 100%" >
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body h5">
        <form class="info-form">  
            {{-- comment --}}
            <div class="mr-1" style="width: 100%">
              <label class=" bg-info rounded-pill" for="comment" maxlength='100'>ひとこと</label><input type="string" style="width: 80%" name="comment" id="comment">
            </div>
              {{-- tittle --}}
            <div class="mr-1">
              <label for="tittle" class=" bg-info rounded-pill">場所名</label><input type="string" style="width: 38%" name="comment" id="tittle">
            </div>
            {{-- pref --}}
            <div> 
              <label class="bg-info rounded-pill">都道府県</label>
                <select name="pref"  style="width: 17%">
                  @foreach ($prefs as $pref)
                    <option value="{{$pref->Pref}}">{{$pref->Pref}}</option>
                  @endforeach
                </select>
              </div>
            {{-- city --}}
            <div>
              <label class="ml-3 bg-info rounded-pill">市区町村</label><input type="string" name="town" class="ml-1" style="width: 25%">
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
            {{-- about --}}
            <div>
              <label for="about" class="bg-info rounded-pill align-top">about</label>
              <textarea name="about" class="ml-1 container-textarea" id="about"></textarea>
            </div>
            {{-- photo --}}
            <div >
              <input type="file" id="myImage" accept="image/*">
            </div>
            {{--button--}}  
            <p>
              <div>
                <button class="btn bg-warning border border-dark rounded-pill" type="submit"><a href="{{route('informations.create')}}">New</a></button>
              </div>
            </p>
        </form>
        <div class='preview-img bg-dark'>
          <img  id="preview">
        </div> 
      </div>
      

    </div>
  </div>
</div>

<div style="display: flex">
  {{-- content new add & top3 --}}
  <div class="info-content">
    <div>
      <p class="text-light" style="font-size:150%;"><img src="/img/tourch.png" class="rounded-circle bg-light m-4" alt="newinfo" style="width: 5%">新規投稿一覧</p>
    @foreach ($info as $information)
        {{$information->comment}}
        {{$information->tittle}}
        {{$information->pref}}
        {{$information->URL}}
        {{$information->TEL}}
        {{$information->about}}
        {{$information->OfficeHour}}
        {{$information->ParkingCar}}
        {{$information->ParkingBicycles}}
        <a href="{{route('informations.show', $information)}}">Show</a>
        <a href="{{route('informations.edit', $information)}}">edit</a> 
    @endforeach
    </div>


    <div>
      <p class="text-light" style="font-size:150%;"><img src="/img/rank.png" class="rounded-circle bg-light m-4" alt="newinfo" style="width: 5%">人気ランキング</p>

    </div>
  </div> 

  <div class="info-afi">
    {{-- rakuten afiriate --}}
    <a href="https://hb.afl.rakuten.co.jp/hsc/20bca630.fcc5488e.20bca631.12bbb9d1/?link_type=pict&ut=eyJwYWdlIjoic2hvcCIsInR5cGUiOiJwaWN0IiwiY29sIjoxLCJjYXQiOiIxMjAiLCJiYW4iOiIxNDIxNzk5IiwiYW1wIjpmYWxzZX0%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >
      <img src="https://hbb.afl.rakuten.co.jp/hsb/20bca630.fcc5488e.20bca631.12bbb9d1/?me_id=2100001&me_adv_id=1421799&t=pict" border="0" class='image-responsive' style="margin:2px" alt="" title=""></a>
    
    {{-- rakutenCard --}}


  </div>
</div>
@endsection