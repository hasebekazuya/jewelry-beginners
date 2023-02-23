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
        </nav