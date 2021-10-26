<body>
    @extends('layouts.app')
    @section('content')
    <div class="text-light">
    <h3 class="row m-2">{{$User."の検索結果"}}</h3>
        @foreach ($info as $info)
            <div class="row search-circle searchshow-parent mx-5 my-3" style="height: 15rem">
                <div class="col-md-5 h-100 p-0">
                    <a href="{{route('informations.edit', $info)}}" class="align-items-center">
                        @if ($info->image !== "")
                            <img src="{{$info->image}}" class="middleImageInfo3">
                            @else
                            <img src="{{ asset('img/dummy.png')}}" class="middleImageInfo3">
                        @endif
                    </a>
                </div>
                <div class="col-md-7 my-3 h-100 searchshow-viewing">
                    <h5>{{$info->pref.">".$info->city}}</h5>
                    <h1>{{$info->tittle}}</h1>
                    <p>
                        <span>{{"TEL : ".$info->tel."\n"}}</span><br>
                        <span>{{"time : ".$info->open."-".$info->close}}</span>
                    </p>

                    <form action="{{route('informations.destroy', $info)}}" method="post" class="float-right w-100">
                        @csrf
                        @method('delete')
                    <input type="submit" value="削除" class="btn text-light btn-danger" onclick='return confirm("削除しますか？");'>
                </div>
            </div>
        @endforeach
    @endsection
</div>
    </body> 