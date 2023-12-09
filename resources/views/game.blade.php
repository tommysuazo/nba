@extends("main")

@section("content")
    <main class="game">

        @if (!empty($successful))
            <p class="successful_messages">{{ $successful }}</p>
        @endif

        <h1 class="title">Game Registration</h1>
        
        @error("game")
            <p class="error_messages">{{ $errors->first('game') }}</p>
        @enderror


        <form action="{{ route("game.store") }}" method="POST" id="game_store">
            @csrf
            <textarea name="game" class="textarea" cols="100" rows="25"></textarea>
            <button id="gamesubmit" type="submit">Registrar juego</button>
        </form>
    </main>
@endsection

