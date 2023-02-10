@extends('layout.admin')
@section('title', '登録済み各宝石一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>登録済み各宝石一覧</h2>
        </div>
        <div class="row">
            <div class="clo-md-4">
                <a href="{{ route('admin.jewelry.add') }}" role="button" class="btn-btn-primary">新規登録</a>
            </div>
            <div class="clo-md-8">
                <form action="{{ route('admin.jewelry.index') }}" method="get">
                    <div class="form-group row">
                        <label class="clo-md-2">宝石名</label>
                        <div class="clo-md-8">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="clo-md-2">
                            @csrf
                            <input type="submit" class="btn-btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-jewelry clo-md-12 mx-auto">
                <div class="row">
                    <table class="table-table-light table-hover">
                        <thead>
                            <tr>
                                <th width="5%">ID</th>
                                <th width="10%">宝石名</th>
                                <th width="10%">化学組成</th>
                                <th width="5%">モース硬度</th>
                                <th width="20%">概要</th>
                                <th width="20%">お手入れ</th>
                                <th width="20%">まとめ＆注意点</th>
                                <th width="20%">誕生石</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $gem)
                                <tr>
                                    <th>{{ $gem->id }}</th>
                                    <td>{{ Str::limit($gem->gem_name, 15) }}</td>
                                    <td>{{ Str::limit($gem->chemical, 15) }}</td>
                                    <td>{{ Str::limit($gem->Mohshardness, 5) }}</td>
                                    <td>{{ Str::limit($gem->overview, 250) }}</td>
                                    <td>{{ Str::limit($gem->maintenance,100) }}</td>
                                    <td>{{ Str::limit($gem->SummaryNotes,250) }}</td>
                                    <td>{{ Str::limit($gem->birthstone,5) }}</td>
                                        <div>
                                            <a href="{{ rout('admin.jewelry.edit', ['id' => $gem->id]) }}">編集</a>
                                        </div>
                                        <div>
                                            <a href="{{ rout('admin.jewelry.delete', ['id' => $gem->id]) }}">削除</a>
                                        </div>
                                    </td>    
                                </tr>
                            @endforeach    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>