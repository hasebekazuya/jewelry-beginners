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
        <div class="row">
            <div class="list-jewelry col-md-8 mx-auto">
                <table class="table-table-light table-hover">
                    <tr>
                        <th width="20%">宝石名</th>
                    </tr>
                    <tr>
                        <td>{{ $gem->gem_name }}</td>
                    </tr>
                    <tr>
                        <th width="20%">化学組成</th>
                    </tr>  
                    <tr>
                        <td>{{ $gem->chemical_composition }}</td>
                    </tr>
                    <tr>
                        <th width="20%">モース硬度</th>
                    </tr>
                    <tr>
                        <td>{{ $gem->mohs_hardness }}</td>
                    </tr> 
                    <tr>
                        <th width="20%">概要</th>
                    </tr>
                    <tr>
                        <td>{{ $gem->overview }}</td>
                    </tr> 
                     <tr>
                        <th width="20%">お手入れ</th>
                    </tr>
                    <tr>
                        <td>{{ $gem->maintenance }}</td>
                    </tr>
                     <tr>
                        <th width="20%">まとめ＆注意点</th>
                    </tr>
                    <tr>
                        <td>{{ $gem->summary_notes }}</td>
                    </tr>
                    <tr>

                    <tr>
                     <div class="image">    
                     <img src="{{ secure_asset('storage/image/' . $gem->image_path) }}">
                    </tr>
                    <tr>
                        <th width="20%">誕生石月</th>
                    </tr>
                    <tr>
                        <td>{{ $gem->birthstone }}</td>
                    </tr>
                </table>
                    <div>
                        <form action="{{ route('admin.favorite.create') }}" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="gem_id" value="{{$gem->id}}">
                            <input type="submit" class="btn-btn-primary" value="お気に入り">
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection