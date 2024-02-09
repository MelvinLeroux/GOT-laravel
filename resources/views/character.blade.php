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
        <?php if(count($character->houses) >1) :?>

            <div class="avatar" style="background: linear-gradient(to right,#{{ $character->houses[0]->colour }} 0%,#{{ $character->houses[0]->colour }} 50%, #{{ $character->houses[1]->colour }} 50%,#{{ $character->houses[1]->colour }} 100%)">
            <img src="/assets/img/{{ $character->image }}" alt="{{ $character->first_name }}">
            </div>
        <?php else :?>
            <div class="avatar" style="background: #{{ $character->houses[0]->colour }}">
            <img src="/assets/img/{{ $character->image }}" alt="{{ $character->first_name }}">
            </div>
        <?php endif ?>
        <div class="infos">
        <h3>Maisons</h3>
            <div class="houses">
            <ul>
                @foreach( $character->houses as $house )
                    <li class="house-logo" style="background: #{{ $house->colour }};">
                        <a href="{{ route('main.house', ['id' =>  $house->id]) }}">
                            <img src="/assets/img/houses/{{ $house->image }}" alt="Stark">
                        </a>
                    </li>
                    @endforeach
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
