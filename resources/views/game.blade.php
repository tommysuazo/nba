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
            <div>
                <input class="date" type="date" name="fromDate" id="fromDate" value="{{ date("Y-m-d") }}">
                <input class="date" type="date" name="toDate" id="toDate" value="{{ date("Y-m-d") }}">
            </div>
            <button id="gamesubmit" type="submit">Registrar juegos</button>
        </form>
    </main>
@endsection

