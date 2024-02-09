@extends('base')
@section('page-content')

<ul class="characters-list">
    @foreach ( $characters ?? [] as $character )
    <li class="character-card">
        <a href="{{ route('main.character', ['id' => $character->id]) }}">
            <?php if(count($character->houses) >1) :?>
                <div class="avatar" style="background: linear-gradient(to right,#{{ $character->houses[0]->colour }} 0%,#{{ $character->houses[0]->colour }} 50%, #{{ $character->houses[1]->colour }} 50%,#{{ $character->houses[1]->colour }} 100%)">
                    <img src="/assets/img/{{ $character->image }}" alt="{{ $character->first_name }}">
                </div>
            <?php else :?>
                <div class="avatar" style="background: #{{ $character->houses[0]->colour }}">
                    <img src="/assets/img/{{ $character->image }}" alt="{{ $character->first_name }}">
                </div>
            <?php endif ?>
            <div class="name">
                <span>{{ $character->first_name }} {{ $character->last_name }}</span>
                <br>
                <?php if(count($character->houses)>1): ?>
                    <span>Maison {{ $character->houses[0]->name }} et Maison {{ $character->houses[1]->name }}</span>
                <?php elseif (count($character->houses)==1): ?>
                    <span>Maison {{  $character->houses[0]->name }} </span>
                <?php endif?>
            </div>
        </a>
    </li>
    @endforeach
</ul>

@endsection
