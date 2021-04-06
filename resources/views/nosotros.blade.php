@extends('plantilla')
@section('contenido')

<h1 style="color: white;">este es mi quipo de trabajo</h1>
<div class="col s6 push-s2">
    <table style="background-color: #586063; color: black;" data-aos="fade-right">
        <tbody>
        @foreach ( $equipo as $contenido )
              <tr>
                <td  class="center"><a style="text-decoration: none;" href=" {{ route('about',$contenido) }} ">{{ $contenido }}</a></td>
              </tr>
        @endforeach
        </tbody>
    </table>
    <div class="section">
        @if (!empty($nombre))
            @switch($nombre)
                @case($nombre=='Ignacio')
                    <h2 class="center"> Tu nombre es {{ $nombre }}: </h2>
                    <p class="center">Bienvenido {{ $nombre }} disfruta la página</p>
                    @break
                @case($nombre=='Juan')
                    <h2 class="center"> Tu nombre es {{ $nombre }}: </h2>
                    <p class="center">Bienvenido {{ $nombre }} disfruta la página</p>
                    @break
                @case($nombre=='Ted')
                    <h2 class="center"> Tu nombre es {{ $nombre }}: </h2>
                    <p class="center">Bienvenido {{ $nombre }} disfruta la página</p>
                    @break
            
                @default
                    
            @endswitch
        @endif
    </div>
</div>
    
@endsection