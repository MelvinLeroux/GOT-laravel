@extends('base')
@section('page-content')

            <ul class="characters-list">
                @foreach ( $characters ?? [] as $character )
                <li class="character-card">
                    <a href="">
                        <div class="avatar" >
                            <img src="/assets/img/{{ $character->image }}" alt="{{ $character->first_name }}">
                        </div>
                        <div class="name" style =>
                            <span>{{ $character->first_name }} {{ $character->last_name }}</span>
                            <br>
                            <span>Maison </span>
                        </div>
                    </a>
                </li>
                @endforeach
            </ul>
@endsection
