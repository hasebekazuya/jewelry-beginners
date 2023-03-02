@extends('layouts.admin')
@section('title', 'お気に入り画面')

@section('content')
    <div class="container">
                    
        <div class="row">
            <h2>お気に入り</h2>
        </div>
         <nav class="header_list_index">
            <ul>
                <li>
                    <a href="{{ route('admin.jewelry.top') }}">Top</a>
                </li>
            </ul>
        </nav>
    <div class="fav">
            <div class="col-md-8 mx-auto">
                <div class="fav">
                    <h4 class="fav">★お気に入り宝石</h4>
                    <p>宝石名をクリックすると詳細を見ることができます。</p>
                    @if(isset($_SESSION['users'])) {
                    
                    @endif
@endsection                    