@extends('layouts.admin')
@section('title', 'ジュエリー初心者')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="search">
                    <h1>ジュエリー初心者</h1>
                    <div class="search_list1">
                        <a href="{{ route('admin.jewelry.search') }}">宝石から探す</a>
                        <a href="{{ route('admin.jewelry.birth') }}">誕生石から探す</a>
                        <a href="{{ route('admin.jewelry.detail') }}">ジュエリーとは？</a>
                    </div>
                    <br/>
                    <div class="search_list2">
                        <a href="{{ route('admin.jewelry.trivia') }}">豆知識</a>
                        <a href="{{ route('admin.favorite.create') }}">お気に入り</a>
                    </div>    
                </div>    
            </div> 
        </div>
@endsection        