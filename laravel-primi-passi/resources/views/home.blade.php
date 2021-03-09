<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>home</title>
</head>
<body>
  <ul>
    <!--stampiamo un elemento di data --> 
    <li>la mia meta agognata è {{ $meta_preferita }}</li>
  </ul>

  <div>
    @foreach($name as $nome)
      <!-- stampiamo il contenuto del array--> 
      <li>{{ $nome }}</li>
    @endforeach
  </div>

  <div>
    <!--un ciclo che eseguirà l'azione di empty se non ci sono dati--> 
    @forelse($vuoto as $empty)
      <li>{{ $empty }}</li>
    @empty
      <li>no data</li>
    @endforelse
  </div>


  <div>
    <!--se $name ha una lunghezza esegui il ciclo--> 
    @if(count($name))
      @foreach($name as $nome)
        <li>{{ $nome }}</li>
      @endforeach
    @else
      <li>l'array è vuoto, non ha una lunghezza</li>
    @endif
  </div>

</body>
</html>
