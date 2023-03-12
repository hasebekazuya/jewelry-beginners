@extends('layouts.admin')
@section('title', 'ジュエリー初心者')

@section('content')
    <div class="container">
        <div class="col-md-8 mx-auto">
            <h1 class="mein_title">ジュエリー初心者</h1>
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