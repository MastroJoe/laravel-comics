@extends('layouts.app')

@section('main')
<main class="container-fluid">
  <!-- title -->
  <div class="section">

  </div>
  <!-- card section -->
  <div class="container-center card-container">
    <!-- stampo tutte le cards con foreach -->
    @foreach ($comics as $comic)
    <div class="card">
      <img class="cover" src="{{ $comic['thumb'] }}" alt="thumb">
      <h4 class="upper title"><a href="#">{{ $comic['series'] }}</a></h4>
    </div>
    @endforeach
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
