<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>download</title>
</head>
<body>
  <div>
    @foreach($arch as $architettura)
      <!-- @ dd($architettura) messo qua visualizza il primo elemento della prima iterazione e poi non segue alcun codice. è una sua caratteristica, fa il var_dump e il codice non continua, per farlo continuare usa il @ dump  --> 
      <!-- @dump($architettura) messo qua si comporta come un normale var_dump -->
      <li>{{ $architettura }}</li>
      <!-- se diverso dal ultimo nell'arco dell'intero loop mi metti la virgola. Usata assieme al loop first per gestire le iterazioni all'interno dei cicli --> 
      @if(!$loop->last) ,
      @endif
    @endforeach
  </div>


   

<!--@php 
  foreach($arch as $architettura)
    echo $architettura;
@endphp-->

</body>
</html>
