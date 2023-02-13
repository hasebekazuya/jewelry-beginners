@extends ('layouts.admin')
@section ('title','宝石の編集画面')

@section ('content')
    <div class="container">
        <div class="row">
            <di class="col-md-8 mx-auto">
                <h2>宝石の編集画面</h2>
                <form action="{{ route('admin.jewelry.update') }}" method="posts" enctye="multipart/form-data">
                    @if (count($errors) > 0 )
                        <ul>
                            @foreach ($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach    
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="gem_name">宝石名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="gem_name" value="{{ $gem_form->gem_name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="clo-md-2" for="chemical">化学組成</label>
                        <div class="clo-md-10">
                            <input type="text" class="form-control" name="chemical" value="{{ $gem_form->chemical }}">
                        </div> 
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="Mohs_hardness">モース硬度</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="Mohs_hardness" value="{{ $gem_form->Mohs_hardness }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="overview">概要</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="overview" row="8">{{ old('overview') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="maintenance">お手入れ</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="maintenance" row="8">{{ old('maintenance') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="Summary & Notes">まとめ＆注意点</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="Summary & Notes" row="20">{{ old('Summary & Notes') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="image">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name"image">
                            <div class="form-text text-info">
                                設定中: {{ $gem_form->image_path }}
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>    
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $gem_form->id }}">
                            @csrf
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
            </di>
        </div>
    </div>
@endsection    