@extends('base')
@section('page-content')

<section class="character-page">
    <div class="col-8">
        <h2>{{ $character->first_name }} {{ $character->last_name }} </h2>
        <div class="bio">
            <h3>Biographie</h3>
            <p>
                {{ $character->biography }}
            </p>
        </div>
    </div>
    <div class="col-4">
            <div class="avatar" >
            <img src="/assets/img/{{ $character->image }}" alt="{{ $character->first_name }}">
            </div>

        <div class="infos">
            <h3>Maisons</h3>
            <div class="houses">
            <ul>
                
            </ul>
            </div>
            <ul class="meta">
                <li><span>Rang : </span> {{ $character->title->name }}</li>
                <li><span>Mère : </span>
                    @if( $character->mother !== null)
                    {{ $character->mother->first_name }}
                    {{ $character->mother->last_name }}
                    @endif
                </li>
                <li><span>Père : </span>
                    @if( $character->father !== null)

                    {{ $character->father->first_name }}
                    {{ $character->father->last_name }}
                    @endif

                </li>
            </ul>
        </div>
    </div>
</section>

@endsection
