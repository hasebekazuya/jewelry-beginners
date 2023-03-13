@extends('layouts.admin')
@section('title', 'ジュエリー初心者')

@section('content')
    <div class="container">
        <div class="col-md-8 mx-auto">
            <h1 class="mein_title">ジュエリー・宝石初心者向情報</h1>
                <p>ここでは宝石、宝飾基礎知識、誕生石、貴金属の知識など宝石に関する様々な情報をわかりやすく解説しています。</p>
            <div class="search_list1">
                <a href="{{ route('admin.jewelry.search') }}" class="link">宝石から探す</a>
            </div>    
            <div class="search_list1">
                <a href="{{ route('admin.jewelry.birth') }}">誕生石から探す</a>
            </div>
            <div class="search_list1">
                <a href="{{ route('admin.jewelry.detail') }}">ジュエリーとは？</a>
            </div>
            <br/>
            <div class="search_list2">
                <a href="{{ route('admin.jewelry.trivia') }}">豆知識</a>
                <div class="ease trivia"></div>
            </div>    
            <div class="search_list2">    
                <a href="{{ route('admin.favorite.create') }}">お気に入り</a>
                <div class="ease create"></div>
            </div>    
        </div>    
    </div>
@endsection        