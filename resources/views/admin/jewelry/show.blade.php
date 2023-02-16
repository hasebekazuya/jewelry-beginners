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
                                <td>{{ Str::limit($gem->gem_name, 30) }}</td>
                            </tr>
                            <tr>
                                <th width="20%">化学組成</th>
                            </tr>  
                            <tr>
                                <td>{{ Str::limit($gem->chemical_composition, 20) }}</td>
                            </tr>
                            <tr>
                                <th width="20%">モース硬度</th>
                            </tr>
                            <tr>
                                <td>{{ Str::limit($gem->mohs_hardness, 11) }}</td>
                            </tr> 
                            <tr>
                                <th width="20%">概要</th>
                            </tr>
                            <tr>
                                <td>{{ Str::limit($gem->overview,500) }}</td>
                            </tr> 
                             <tr>
                                <th width="20%">お手入れ</th>
                            </tr>
                            <tr>
                                <td>{{ Str::limit($gem->maintenance,1000) }}</td>
                            </tr>
                             <tr>
                                <th width="20%">まとめ＆注意点</th>
                            </tr>
                            <tr>
                                <td>{{ Str::limit($gem->summary_notes,1000) }}</td>
                            </tr>
                            <tr>
                                <th width="20%">画像</th>
                            </tr>
                            <tr>
                                <td>{{ Str::limit($gem->birthstone,5) }}</td>
                            </tr>
                            <tr>
                                <th width="20%">誕生石</th>
                            </tr>
                            <tr>
                                <td>{{ Str::limit($gem->birthstone,5) }}</td>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection