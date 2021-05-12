<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
      @include(partials.header)
      <main>
        @yield('main')
      </main>
      @include(partials.footer)
    </body>
</html>


<!-- Descrizione
Create un nuovo progetto Laravel, su cui lavoreremo sia oggi che domani.
Oggi concentratevi sul layout:
create un file di layout in cui inserire la struttura comune di tutte
le pagine del sito web (tag head, tag body, ...) eventualmente includendo header e footer
tramite due partials.
Create poi una rotta per visualizzare la lista di tutti i fumetti recuperati da un file
inserito nella cartella config e abbellite il tutto sfruttando Sass. -->
