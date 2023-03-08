@extends('layouts.admin')
@section('title', '誕生石から探す')

@section('content')
    <div class="container">
        <div class="row">
            <h2 class="contents__title">誕生石から探す</h2>
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
                    <h3 class="stonename">★誕生石一覧</h2>
                        <p>1月から12月までに指定されている誕生石を一覧表でまとめました。宝石名をクリックすると詳細を見ることができます。</p>
                        <table class="msr_table02">
                            <thead>
                                <tr>
                                    <th>各月</th>
                                    <th>宝石名</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 1; $i <= 12; $i++)
                                <tr>
                                    <td><h4>{{$i}}月</h4></td>
                                    @foreach($posts as $gem)
                                        @if($gem->birthstone == $i)
                                            <td><a href="{{ route('admin.jewelry.show', ['id' => $gem->id]) }}" target="_blank">{{$gem->gem_name}}</a></td>
                                        @endif
                                    @endforeach
                                </tr>    
                                @endfor
                            </tbody>
                        </table>
                </section>
            </div>
        </div>    
  @endsection                  