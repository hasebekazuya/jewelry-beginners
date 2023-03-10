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
                <a href="{{ route('admin.jewelry.top') }}"class="btn-flat-simple">
                    <i class="fa fa-caret-right"></i>>Top</a>
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
                    <table class="msr_table02">
                        <thead>
                            <tr>
                                <th>各行</th>
                                <th>宝石名</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($katakana as $key =>$gems)
                            <tr>
                                <td><h4>{{ $key}}行</h4></td>
                                @foreach($gems as $gem)
                                    <td><a href="{{ route('admin.jewelry.show', ['id' => $gem->id]) }}" target="_blank">{{$gem->gem_name}}</a></td>
                                @endforeach
                            </tr>    
                            @endforeach
                        </tbody>
                    </table>  
                </section>
            </div>
        </div>
@endsection        