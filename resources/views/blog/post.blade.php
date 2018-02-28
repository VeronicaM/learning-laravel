@extends('layouts.master')
@section('content')
<div class="row">
    <div class="row-md-12">
       <p class="blog">{{$post['title']}}</p>
       <div class="content">
           {{$post['content']}}
       </div>
</div>
</div>

@endsection