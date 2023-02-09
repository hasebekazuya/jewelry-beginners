@extends('layouts.admin')

@section('title', '各宝石登録画')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>各宝石登録画面</h2>
                <form action="{{ route('admin.jewelry.create') }}" method="post" enctype="multipart/form-data">
                    
                    @if (count($errors) > 0 )
                        <ul>
                            @foreach ($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="forme-group row">
                        <label class="clo-md-2">宝石名</label>
                        <div class ="clo-md-10">
                            <input type="texst" class="form-control" name="gem_name" value="{{ old('gem_name') }}">
                        </div>
                    </div>
                    <div class="form-guroup row">
                        <label class="col-md-2">化学組成</label>
                        <div class="clo-md-8">
                            <input type="texst" class="form-control" name="chemical composition"　value="{{ old('chemical composition') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="clo-md-2">モース硬度</label>
                        <div class="clo-md-8">
                            <input type="texst" class="form-control" name="Mohs hardness"　value="{{ old('Mohs hardness') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="clo-md-2">概要</label>
                        <div class="clo-md-10">
                            <textarea class="form-control" name="overview" rows="8">{{ old('overview') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="clo-md-2">お手入れ</label>
                        <div class="clo-md-10">
                            <textarea class="form-control" name="maintenance" rows="5">{{ old('maintenance') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="clo-md-2">まとめ＆注意点</label>
                        <div class="clo-md-10">
                            <textarea class="form-control" name="Summary & Notes" row="20" cols="20">{{ old('Summary & Notes') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="clo-md-2">画像</label>
                        <div class="clo-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="clo-md-2">誕生月</label>
                        <div class="clo-md-10">
                            <input type="texst" class="form-control" name="birth_month value="{{ old('birth_month') }}">
                        </div>
                    </div>
                    @csrf
                    <input type="submit" class="btn btn-primary" value="登録">
                </form>
            </div>
        </div>
    </div>
@endsection    