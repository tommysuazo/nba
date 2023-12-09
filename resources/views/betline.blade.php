@extends("main")

@section("content")
    <main class="betline">

        <h1 class="title">SportLine Registration</h1>
        @error("game")
            <p class="error_messages">{{ $errors->first('game') }}</p>
        @enderror

        <form action="{{ route("line.store") }}" method="POST" id="game_store">
            @csrf
            <textarea name="lineboard" class="textarea" cols="100" rows="25"></textarea>
            <button id="linesubmit" type="submit">Registrar apuestas</button>
        </form>
        
        <form action="{{ route("line.destroy") }}" method="POST" id="game_destroy">
            @csrf
            @method('DELETE')
            <button id="linedestroy" type="submit">Borrar Apuestas</button>
        </form>
    </main>

@endsection