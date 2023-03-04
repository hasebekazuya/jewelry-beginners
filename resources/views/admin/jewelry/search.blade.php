@extends('layouts.admin')
@section('title', '宝石から探す')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2 class="contents__title">宝石から探す</h2>
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
        </nav>
        <div class="stonename">
            <div class="col-md-8 mx-auto">
                <section>
                    <h3 class="stonename">★宝石名一覧（五十音順）</h3>
                    <p>宝石名をクリックすると詳細を見ることができます。</p>
                    <h4>ア行</h4>
                    @foreach($posts as $gem)
                        <a href="{{ route('admin.jewelry.show', ['id' => $gem->id]) }}" target="_blank">{{$gem->gem_name}}</a>
                    @endforeach
                    <h4>カ行</h4>
                    @foreach($posts2 as $gem)
                        <a href="{{ route('admin.jewelry.show', ['id' => $gem->id]) }}" target="_blank">{{$gem->gem_name}}</a>
                    @endforeach
                    <h4>サ行</h4>
                    @foreach($posts3 as $gem)
                        <a href="{{ route('admin.jewelry.show', ['id' => $gem->id]) }}" target="_blank">{{$gem->gem_name}}</a>
                    @endforeach
                    <h4>タ行</h4>
                    @foreach($posts4 as $gem)
                        <a href="{{ route('admin.jewelry.show', ['id' => $gem->id]) }}" target="_blank">{{$gem->gem_name}}</a>
                    @endforeach
                    <h4>ナ・ハ・マ行</h4>
                    @foreach($posts5 as $gem)
                       <a href="{{ route('admin.jewelry.show', ['id' => $gem->id]) }}" target="_blank">{{$gem->gem_name}}</a>
                    @endforeach
                    <h4>ラ行</h4>
                    @foreach($posts6 as $gem)
                        <a href="{{ route('admin.jewelry.show', ['id' => $gem->id]) }}" target="_blank">{{$gem->gem_name}}</a>
                    @endforeach
                </section>
            </div>
        </div>
@endsection        