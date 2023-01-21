@extends('main')
@section('title', 'baru')

@section('content')
<ul>

    @foreach ($data as $item)
    <li>    
        {{ $item->name }}
    </li> 
    @endforeach
</ul>
@endsection
