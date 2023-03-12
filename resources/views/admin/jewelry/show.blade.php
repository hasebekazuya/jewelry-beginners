@extends('layouts.admin')
@section('title', '宝石の詳細')

@section('content')
    <div class="container">
                    
        <div class="row">
            <h2>宝石の詳細</h2>
        </div>
         <nav class="header_list_index">
            <ul>
                <li>
                    <a href="{{ route('admin.jewelry.top') }}" class="btn-flat-simple">Top</a>
                    <span class="menu_border"></span>
                    <span class="menu_line"></span>
                </li>
                <li>
                    <a href="{{ route('admin.jewelry.search') }}" class="btn-flat-simple">★宝石から探す</a>
                 <span class="menu_border"></span>
                    <span class="menu_line"></span>
                </li>
            </ul>
        </nav> 
        <div class="list-jewelry col-md-10 mx-auto">
            <div class="image">    
                <img src="{{ secure_asset('storage/image/' . $gem->image_path) }}">
            </div> 
            <h4 class="content">宝石名</h4>
                <p>{{ $gem->gem_name }}</p>
                <br/>
            <h4 class="content">化学組成</h4>
                <p>{{ $gem->chemical_composition }}</p>
                <br/>
            <h4 class="content">モース硬度</h4>
                <p>{{ $gem->mohs_hardness }}</p>
                <br/>
            <h4 class="content">概要</h4>
                <p>{{ $gem->overview }}</p>
                <br/>
            <h4 class="content">お手入れ</h4>
                <p>{{ $gem->maintenance }}</p>
                <br/>
            <h4 class="content">まとめ＆注意点</h4>
                <p>{{ $gem->summary_notes }}</p>
                <br/>
            <h4 class="content">誕生石月</h4>
                <p>{{ $gem->birthstone }}</p>
            <div>
                <form action="{{ route('admin.favorite.create') }}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="gem_id" value="{{$gem->id}}">
                    <input type="submit" class="btn-btn-primary" value="お気に入り">
                </form>
            </div>
        </div>
    </div>
@endsection