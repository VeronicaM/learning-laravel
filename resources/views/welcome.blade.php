@extends('layouts.master')
@section('content')
<div class="row">
    <div class="row-md-12">
        <h1>Control Structures</h1>
         
         @if(false)
            <p>This shows only if true</p>
        @else
            <p>This shows only if false</p>
        @endif
        <hr>
        @for($i=0; $i < 5; $i++)
            <p> {{$i + 1}}</p>
        @endfor
    </div>
</div>

@endsection