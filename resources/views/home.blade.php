<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La primera web</title>
</head>
<body>

    {{-- <h1>Hola mundo - <?php echo "Hola re mundo $nombre $apellido" ?></h1> --}}
    <h1>Hola mundo - {{"Hola re mundo $nombre $apellido"}}  </h1>

    @foreach ($Posts as $post)
        <p>{{$post}}</p>
    @endforeach


    @forelse ($Posts as $post)

    {{-- <?php dd($loop)?> --}}

    {{-- <?php var_dump($loop)?> --}}

  
    <li>

        @if($loop-> first)
        Primero :
      

        @elseif($loop-> last)
        Ultimo :

        @else
        Medio:
        
        @endif
    
        {{ $post }}
    
    </li>

 
@empty
    <p>No users</p>
@endforelse

    
</body>
</html>