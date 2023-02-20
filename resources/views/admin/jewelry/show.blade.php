@extends('layouts.admin')
@section('title', '宝石の詳細')

@section('content')
    <div class="container">
        <div class="row">
            <h2>宝石の詳細</h2>
        </div>
        <div class="row">
            <div class="list-jewelry col-md-12 mx-auto">
                <div class="row">
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
                                <th width="20%">画像</th>
                            </tr>
                            <tr>
                             <img src="{{ secure_asset('public/image/' . $gem->image_path) }}">
                            </tr>
                            <tr>
                                <th width="20%">誕生石</th>
                            </tr>
                            <tr>
                                <td>{{ $gem->birthstone }}</td>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection