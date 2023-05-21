@extends( 'layout.main' )

@section( 'title', 'NCC - Home' )

@section( 'content' )

<div class="grid container">
    {{-- Profile info --}}
    <div class="profile">
        <img src="{{ asset('img/profile.jpg') }}" alt="profile" class="profile__img">
        <h2 class="profile__name">Naruto Uzumaki</h2>
        <a href="#" class="link">Ver perfil</a>
        <a href="#" class="link">Sair</a>
    </div>
    {{-- end Profile info --}}

    {{-- Posts --}}
    <div class="posts">

    </div>
    {{-- end Posts --}}

    {{-- News --}}
    <aside class="news">

    </aside>
    {{-- end News --}}


</div>

@endsection