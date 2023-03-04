@extends('layouts.admin')
@section('title', 'お気に入り宝石一覧')

@section('content')
    <div class="container">
                    
        <div class="row">
                <h2>お気に入り宝石一覧</h2>
        </div>
    </div>
         <nav class="header_list_index">
        <ul>
             <li>
                <a href="{{ route('admin.jewelry.top') }}">Top</a>
                    <span class="menu_border"></span>
                    <span class="menu_line"></span>
             </li>
        </ul>
        </navs>
        <div class="stonename">
            <div class="col-md-8 mx-auto">
                <section>
                <h3 class="stonename">★お気に入り宝石名一覧（五十音順）</h3>
                 <p>宝石名をクリックすると詳細を見ることができます。</p>
                    <h4>ア行</h4>
                    @foreach($gems as $gem)
                        <a href="{{ route('admin.jewelry.show', ['id' => $gem->id]) }}" target="_blank">{{$gem->gem_name}}</a>
                    @endforeach
                    <h4>カ行</h4>
                    @foreach($gems as $gem)
                        <a href="{{ route('admin.jewelry.show', ['id' => $gem->id]) }}" target="_blank">{{$gem->gem_name}}</a>
                    @endforeach
                    <h4>サ行</h4>
                    @foreach($gems as $gem)
                        <a href="{{ route('admin.jewelry.show', ['id' => $gem->id]) }}" target="_blank">{{$gem->gem_name}}</a>
                    @endforeach
                    <h4>タ行</h4>
                    @foreach($gems as $gem)
                        <a href="{{ route('admin.jewelry.show', ['id' => $gem->id]) }}" target="_blank">{{$gem->gem_name}}</a>
                    @endforeach
                    <h4>ナ・ハ・マ行</h4>
                    @foreach($gems as $gem)
                       <a href="{{ route('admin.jewelry.show', ['id' => $gem->id]) }}" target="_blank">{{$gem->gem_name}}</a>
                    @endforeach
                    <h4>ラ行</h4>
                    @foreach($gems as $gem)
                        <a href="{{ route('admin.jewelry.show', ['id' => $gem->id]) }}" target="_blank">{{$gem->gem_name}}</a>
                    @endforeach
                </section>
            </div>
         </div>
@endsection