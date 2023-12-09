@extends("main")

@section("content")
    <main>
        <table class="bets">
            @foreach ($games as $game)

            <thead>
                <tr class="title">
                    <th class="team">{{ $game->awayteam->name . " vs " . $game->hometeam->name }}</th>
                </tr>
            
            </thead>

                @foreach ([$game->awayteam, $game->hometeam] as $team)
                    <thead>
                        <tr class="headings">
                            <th>{{ $team->code }}</th>
                            <th>pts</th>
                            <th>ast</th>
                            <th>reb</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($team->players as $player)
                            <tr id="{{ 'player-' . $player->id }}" class="stats">
                                @php
                                    $stat = $player->stats->take(5);
                                @endphp
                                <td>{{ $player->name }}</td>
                                <td class="pts">
                                    <input type="text" name="pts-{{ $player->id }}" id="pts-{{ $player->id }}" value="{{ $player->pts }}">
                                    @foreach ($stat as $s)
                                        <span>{{ $s->pts }}</span>
                                    @endforeach
                                </td>
                                <td class="ast">
                                    <input type="text" name="ast-{{ $player->id }}" id="ast-{{ $player->id }}" value="{{ $player->ast }}">
                                    @foreach ($stat as $s)
                                        <span>{{ $s->ast }}</span>
                                    @endforeach
                                </td>
                                <td class="reb">
                                    <input type="text" name="reb-{{ $player->id }}" id="reb-{{ $player->id }}" value="{{ $player->reb }}">
                                    @foreach ($stat as $s)
                                        <span>{{ $s->reb }}</span>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                @endforeach {{-- END TEAMS --}}
            @endforeach {{-- END GAME --}}
        </table>
    </main>
    
@endsection
