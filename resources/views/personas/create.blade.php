@section('title') - Editar Persona  @endsection 
@extends('layouts.app') @section('content')
 <div class="card-header orange lighten-2 white-text">
        Editar Usuario
    </div>
     <div class="card-body">
 {{Form::open(array('route' => 'personas.store'))}}


<!-- Nav tabs -->
<div class="tabs-wrapper"> 
    <ul class="nav classic-tabs tabs-orange" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link waves-light active" data-toggle="tab" href="#panel61" role="tab"><i class="fa fa-user fa-2x" aria-hidden="true"></i><br> Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link waves-light" data-toggle="tab" href="#panel62" role="tab"><i class="fa fa-heart fa-2x" aria-hidden="true"></i><br> Follow</a>
        </li>
        <li class="nav-item">
            <a class="nav-link waves-light" data-toggle="tab" href="#panel63" role="tab"><i class="fa fa-envelope fa-2x" aria-hidden="true"></i><br> Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link waves-light" data-toggle="tab" href="#panel64" role="tab"><i class="fa fa-star fa-2x" aria-hidden="true"></i><br> Be awesome</a>
        </li>
    </ul>
</div>

<!-- Tab panels -->
<div class="tab-content card">

    <!--Panel 1-->
    <div class="tab-pane fade in show active" id="panel61" role="tabpanel">
       <h3>
           Datos Personales del Solicitante
       </h3> 
       <hr>
       <div class="row">
           <div class="col">
               
                <div class="md-form form-sm">
                    {{ Form::label('primerNombre', 'primer Nombre') }}
                    {{ Form::text('primerNombre', null, array('class' => 'form-control')) }}
                </div>

           </div>
           <div class="col">
               <div class="md-form form-sm">
                    {{ Form::label('segundoNombre', 'segundo Nombre') }}
                    {{ Form::text('segundoNombre', null, array('class' => 'form-control')) }}
               </div>
           </div>
           <div class="col">
               <div class="md-form form-sm">
                    {{ Form::label('tercerNombre', 'tercer Nombre') }}
                    {{ Form::text('tercerNombre', null, array('class' => 'form-control')) }}
               </div>
           </div>
       </div>
       <div class="row">
           <div class="col">
               
                <div class="md-form form-sm">
                    {{ Form::label('primerApellido', 'primer Apellido') }}
                    {{ Form::text('primerApellido', null, array('class' => 'form-control')) }}
                </div>

           </div>
           <div class="col">
               <div class="md-form form-sm">
                    {{ Form::label('segundoApellido', 'segundo Apellido') }}
                    {{ Form::text('segundoApellido', null, array('class' => 'form-control')) }}
               </div>
           </div>
           <div class="col">
               <div class="md-form form-sm">
                    {{ Form::label('tercerApellido', 'tercer Apellido') }}
                    {{ Form::text('tercerApellido', null, array('class' => 'form-control')) }}
               </div>

               <div class="md-form form-sm">
                    {{Form::label('fechaNacimiento', 'fecha de Nacimiento', array('class' => 'control-label active','style' => 'z-index: -1')) }}
                    {{Form::date('fechaNacimiento', \Carbon\Carbon::now(), array('class' => 'form-control ','style'=>'height: 35px')) }} <!-- fechaNacimiento_submit valor a guardar -->
               </div>
           </div>
       </div>
<a id='prueba' class="btn green lighten-1" onclick="tabs('panel62')">siguiente</a>

    </div>
    <!--/.Panel 1-->

    <!--Panel 2-->
    <div class="tab-pane fade" id="panel62" role="tabpanel">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, .wopariatur. Tempora, placeat ratione porro voluptate odit minima.</p>

<a id='prueba' class="btn orange" onclick="tabs('panel61')">atras</a>
<a id='prueba' class="btn green lighten-1" onclick="tabs('panel63')">siguiente</a>
    {{ Form::submit('Guardar', array('class' => 'btn green ')) }}

    </div>
    <!--/.Panel 2-->

    <!--Panel 3-->
    <div class="tab-pane fade" id="panel63" role="tabpanel">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>

    </div>
    <!--/.Panel 3-->

    <!--Panel 4-->
    <div class="tab-pane fade" id="panel64" role="tabpanel">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>

    </div>
    <!--/.Panel 4-->

</div>






    <div class="md-form form-sm">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    <div class="md-form form-sm">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', null, array('class' => 'form-control')) }}
    </div>    
    <div class="md-form form-sm ">
        {{ Form::label('rol', 'user Level', array('class' => 'control-label active','style' => '')) }}
        {{ Form::select('rol', [null => 'Elije un ROL', '1' => 'Administrador', '2' => 'Usuario'],0 , array('class' => 'mdb-select colorful-select  dropdown-warning','style' => ' font-size: .8rem;')) }}
    </div>
    <div class="md-form form-sm">
        {{ Form::label('password', 'password') }}
        {{ Form::password('password', null, array('class' => 'form-control')) }}
    </div>    
    <div class="md-form form-sm">
        {{ Form::label('password_confirmation', 'password_confirmation') }}
        {{ Form::password('password_confirmation', null, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Edit the user!', array('class' => 'btn orange lighten-2')) }}

{{ Form::close() }}
</div>
@endsection

@section('script')
<script type="text/javascript">
$(function() {
    $('[data-toggle="tooltip"]').tooltip()
    $('.datepicker').pickadate({
  monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
  weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mier', 'Jue', 'Vier', 'Sab'],
  today: 'Hoy',
  clear: 'limpiar',
  formatSubmit: 'dd/mm/yyyy'
})

})
//esta funcion redirecciona el clik a la lengüeta deseada en el parametro "NOMBRE"
function tabs(nombre){
     // alert('#myTab a[href="#'+ nombre + '"]'); 
$('#myTab a[href="#'+ nombre + '"]').tab('show'); // Select tab by name
}  

</script>
@endsection