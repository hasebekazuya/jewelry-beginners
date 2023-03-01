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