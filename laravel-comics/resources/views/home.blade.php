@extends('layouts.app')

@section('main')
<main class="container-fluid">
  <!-- title section -->
  <!-- <div class="title">
    <h1 class="upper"></h1>
  </div> -->
  <!-- card section -->
  <div class="container-center card-container">
    <!-- stampo tutte le cards con foreach -->
    @foreach ($comics as $index => $comic)
      <div class="card pt-50">
        <a href="{{ route('detail', ['id' => $index]) }}">
          <img class="cover" src="{{ $comic['thumb'] }}" alt="thumb">
        </a>
        <h4 class="upper title pt-20"><a href="#">{{ $comic['series'] }}</a></h4>
      </div>
    @endforeach
  </div>
  <!-- button -->
  <div class="button-container container-fluid">
    <button class="button button1"><a class="upper" href="#">load more</a></button>
  </div>
</main>
@endsection


<!-- Descrizione
Create un nuovo progetto Laravel, su cui lavoreremo sia oggi che domani.
Oggi concentratevi sul layout:
create un file di layout in cui inserire la struttura comune di tutte
le pagine del sito web (tag head, tag body, ...) eventualmente includendo header e footer
tramite due partials.
Create poi una rotta per visualizzare la lista di tutti i fumetti recuperati da un file
inserito nella cartella config e abbellite il tutto sfruttando Sass. -->
