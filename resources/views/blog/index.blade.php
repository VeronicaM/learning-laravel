@extends('layouts.master')
@section('content')
<div class="row">
    <div class="row-md-12">
       <p class="blog"><a href="{{ route('blog.post', ['id' => 1]) }}"> A blog post here </a> </p>
       <p class="blog"><a href="{{ route('blog.post', ['id' => 2]) }}"> Another blog post here </a> </p>
</div>
</div>

@endsection