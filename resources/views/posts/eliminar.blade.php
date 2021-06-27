  
@extends('layouts.app')

@section('content')


<div class="container-fluid">

    <body>
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>

        </tr>
    </body>
    <h2> ¡Bienvenido! {{ auth()->user()->name }} </h2>
    <td class="container-fluid" colspan=2 ><a href="{{ 'posts/'}}" class="btn btn-info" style="text-align:right">publicaciones</a></td>
    <td class="container-fluid" colspan=2 ><a href="{{ 'posts/'}}" class="btn btn-info" style="text-align:right">editar</a></td>
    <td class="container-fluid" colspan=2 ><a href="{{ 'posts/'}}" class="btn btn-info" style="text-align:right">eliminar</a></td>

 </div>

@endsection