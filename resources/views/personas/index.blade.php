@section('title') - Personas @endsection 
@extends('layouts.app') @section('content')
<table class="table table-hover table-sm">
    <thead class="blue-grey lighten-4">
        <tr>
            <th>#</th>
            <th>Primer Nombre</th>
            <th>Segundo Nombre</th>
            <th>Primer Apellido</th>
            <th>Segundo Apellido</th>
            <th>E-mail</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($persons as $person)
        <tr>
            <th scope="row"> {{ $person->id}}</th>
            <td> {{ $person->primerNombre }}</td>
            <td> {{ $person->segundoNombre }}</td>
            <td> {{ $person->primerApellido }}</td>
            <td> {{ $person->segundoApellido }}</td>
            <td> {{ $person->email }}</td>
            <td>
                <div class="row">
                    <div class="col">
                        <a class="btn-floating orange  btn-sm " href=><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    </div>
                    <div class="col">
                        {{ Form::open(array('url' => 'personas/' . $person->id, 'id' => 'delete' . $person->id)) }} 
                        {{ Form::hidden('_method', 'DELETE') }}
                        <a class="btn-floating red  btn-sm " onclick='$( "#delete{{$person->id}}" ).submit()'><i class="fa fa-trash" aria-hidden="true"></i>
                        </a>
                        {{ Form::close() }}
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="row">
    <div class="col  text-right">
    </div>
    <div class="col  text-center">
        <div class="row">
            {{ $persons->links() }}
        </div>
    </div>
    <div  class="fixed-action-btn " style="top: 60px; right: 2%; z-index: 1;">
        <a onclick="  window.location =' {{ url('/personas/create') }}';" href="{{ url('/personas/create') }}" class="btn-floating green waves-effect waves-light" data-toggle="tooltip" data-placement="left" title="Nuevo">
                <i class="fa fa-plus"></i>
            </a>
    </div>
</div>
@endsection @section('script')
<script type="text/javascript">
$(function() {
    $('[data-toggle="tooltip"]').tooltip()
})
</script>
@endsection