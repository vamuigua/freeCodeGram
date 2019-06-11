@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fnbo5-1.fna.fbcdn.net/vp/2b516720aa07096164d4b4495fa58f6c/5D8CE438/t51.2885-19/s150x150/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=instagram.fnbo5-1.fna.fbcdn.net" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.fnbo5-1.fna.fbcdn.net/vp/b514b1c9070bd76c8eb03e9de668df50/5D8B454B/t51.2885-15/sh0.08/e35/c0.74.877.877a/s640x640/61129659_484895502256050_2457635576497186056_n.jpg?_nc_ht=instagram.fnbo5-1.fna.fbcdn.net" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fnbo5-1.fna.fbcdn.net/vp/33227c6cbb95510dd5614b542e821832/5D991213/t51.2885-15/sh0.08/e35/c0.0.749.749a/s640x640/62405980_352431338752162_8074657814463950764_n.jpg?_nc_ht=instagram.fnbo5-1.fna.fbcdn.net" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fnbo5-1.fna.fbcdn.net/vp/ea9ca0ae93fb52216b9a7c9e3d764afb/5D9C4049/t51.2885-15/sh0.08/e35/c0.78.883.883a/s640x640/60721114_308501250092136_1832984087716609793_n.jpg?_nc_ht=instagram.fnbo5-1.fna.fbcdn.net" class="w-100">
        </div>
    </div>
</div>
@endsection
