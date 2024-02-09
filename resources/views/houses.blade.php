@extends('base')

@section('page-content')
            <ul class="houses-list">

                @foreach( $houses ?? [] as $house )
                <li class="house-logo" style="background: #{{ $house->colour }};">
                <a href="{{ route('main.house', ['id' =>  $house->id]) }}">
                        <img src="assets/img/houses/{{ $house->image }}" alt="Stark">
                    </a>
                </li>
                @endforeach

            </ul>
@endsection
