@section('title') - Editar Persona  @endsection 
@extends('layouts.app') @section('content')
 <div class="card-header orange lighten-2 white-text">
        Crear Persona
    </div>
    <div class="card-body"></div> 
 {{Form::open(array('route' => 'personas.store'))}}

<!-- Nav tabs -->
<div class="tabs-wrapper"> 
    <ul class="nav classic-tabs tabs-orange" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link waves-light active" data-toggle="tab" href="#panel61" role="tab"><i class="fa fa-bullseye fa-2x" aria-hidden="true"></i><br>Razon</a>
        </li>
        <li class="nav-item">
            <a class="nav-link waves-light" data-toggle="tab" href="#panel62" role="tab"><i class="fa fa-user fa-2x" aria-hidden="true"></i><br>Persona</a>
        </li>
        <li class="nav-item">
            <a class="nav-link waves-light" data-toggle="tab" href="#panel63" role="tab"><i class="fa fa-share-alt fa-2x" aria-hidden="true"></i><br> Referencias</a>
        </li>
        <li class="nav-item">
            <a class="nav-link waves-light" data-toggle="tab" href="#panel64" role="tab"><i class="fa fa-calculator fa-2x" aria-hidden="true"></i><br>Record</a>
        </li>
    </ul>
</div>

<!-- Tab panels -->
<div class="tab-content card">

    <!--Panel 1-->
    <div class="tab-pane fade in show active" id="panel61" role="tabpanel">
     <h3>
           Datos de la Persona Obligada
       </h3> 
       <hr>
       <div class="row">
           <div class="col">
                <div class="md-form form-sm">
                    {{ Form::label('lugar', 'Lugar') }}
                    {{ Form::text('lugar', null, array('class' => 'form-control')) }}
                </div>
           </div>
       </div>
       <div class="row">
           <div class="col">
                <div class="md-form form-sm">
                    {{ Form::label('razonSocial', 'Razon Social y Nombre Comercial') }}
                    {{ Form::text('razonSocial', null, array('class' => 'form-control')) }}
                </div>
           </div>
       </div>
       <div class="row">
           <div class="col">
                <div class="md-form form-sm">
                    {{ Form::label('cooperativa', 'Nombre de la central, sucursal o agencia') }}
                    {{ Form::text('cooperativa', null, array('class' => 'form-control')) }}
                </div>
           </div>
           <div class="col">
                <div class="md-form form-sm">
                    {{ Form::label('codigoCooperativa', 'Código de agencia o sucursal') }}
                    {{ Form::text('codigoCooperativa', null, array('class' => 'form-control')) }}
                </div>
           </div>
       </div>         
<a id='prueba' class="btn green lighten-1" onclick="tabs('panel62')">siguiente</a>

    </div>
    <!--/.Panel 1-->

    <!--Panel 2-->
    <div class="tab-pane fade" id="panel62" role="tabpanel">
        <h3>
           Datos Personales del Solicitante
       </h3> 
       <hr>
       <div class="row">
           <div class="col">
               
                <div class="md-form form-sm">
                    {{ Form::label('primerNombre', 'Primer Nombre') }}
                    {{ Form::text('primerNombre', null, array('class' => 'form-control')) }}
                </div>

           </div>
           <div class="col">
               <div class="md-form form-sm">
                    {{ Form::label('segundoNombre', 'Segundo Nombre') }}
                    {{ Form::text('segundoNombre', null, array('class' => 'form-control')) }}
               </div>
           </div>
           <div class="col">
               <div class="md-form form-sm">
                    {{ Form::label('tercerNombre', 'Otros Nombres') }}
                    {{ Form::text('tercerNombre', null, array('class' => 'form-control')) }}
               </div>
           </div>
       </div>

       <div class="row">
           <div class="col">
               
                <div class="md-form form-sm">
                    {{ Form::label('primerApellido', 'Primer Apellido') }}
                    {{ Form::text('primerApellido', null, array('class' => 'form-control')) }}
                </div>

           </div>
           <div class="col">
               <div class="md-form form-sm">
                    {{ Form::label('segundoApellido', 'Segundo Apellido') }}
                    {{ Form::text('segundoApellido', null, array('class' => 'form-control')) }}
               </div>
           </div>
           <div class="col">
               <div class="md-form form-sm">
                    {{ Form::label('casadaApellido', 'Apellido de Casada') }}
                    {{ Form::text('casadaApellido', null, array('class' => 'form-control')) }}
               </div>
           </div>
       </div>

       <div class="row">
          <div class="col">
               <div class="md-form form-sm">
                    {{Form::label('fechaNacimiento', 'Fecha de Nacimiento', array('class' => 'control-label active','style' => 'z-index: -1')) }}
                    {{Form::date('fechaNacimiento', \Carbon\Carbon::now(), array('class' => 'form-control ','style'=>'height: 35px')) }} <!-- fechaNacimiento_submit valor a guardar -->
               </div>
          </div> 
           <div class="col">
               <div class="md-form form-sm">
                    {{ Form::label('nacionalidad', 'Nacionalidad') }}
                    {{ Form::text('nacionalidad', null, array('class' => 'form-control')) }}
               </div>
           </div>  
           <div class="col">
               <div class="md-form form-sm">
                    {{ Form::label('otraNacionalidad', 'Otra Nacionalidad') }}
                    {{ Form::text('otraNacionalidad', null, array('class' => 'form-control')) }}
               </div>
           </div>
           <div class="col">
               <div class="md-form form-sm">
                    {{ Form::label('lugarNacimiento', 'Lugar de Nacimiento') }}
                    {{ Form::text('lugarNacimiento', null, array('class' => 'form-control')) }}
               </div>
           </div>                                   
       </div>

       <div class="row">
           <div class="col">
                <div class="md-form form-sm">
                    {{ Form::label('genero', 'Género') }}
                    {{ Form::text('genero', null, array('class' => 'form-control')) }}
               </div>
           </div>
           <div class="col">
                <div class="md-form form-sm">
                    {{ Form::label('estadoCivil', 'Estado Civil') }}
                    {{ Form::text('estadoCivil', null, array('class' => 'form-control')) }}
               </div>
           </div>
            <div class="col">
                <div class="md-form form-sm">
                    {{ Form::label('profesionOficio', 'Profesión u Oficio') }}
                    {{ Form::text('profesionOficio', null, array('class' => 'form-control')) }}
               </div>
           </div>                                      
       </div>
        <h5>
           Documento de Identificación:
       </h5> 
       <div class="row">
           <div class="col">
                <div class="md-form form-sm">
                    {{ Form::label('tipoDocumentoIdentificacion', 'Tipo') }}
                    {{ Form::text('tipoDocumentoIdentificacion', null, array('class' => 'form-control')) }}
               </div>
           </div>
           <div class="col">
                <div class="md-form form-sm">
                    {{ Form::label('numeroIdentificacion', 'Número') }}
                    {{ Form::number('numeroIdentificacion', null, array('class' => 'form-control')) }}
               </div>
           </div>
            <div class="col">
                <div class="md-form form-sm">
                    {{ Form::label('departamentoEmision', 'Departamento Emisión') }}
                    {{ Form::text('departamentoEmision', null, array('class' => 'form-control')) }}
               </div>
           </div>
           <div class="col">
                <div class="md-form form-sm">
                    {{ Form::label('municipioEmision', 'Municipio Emisión') }}
                    {{ Form::text('municipioEmision', null, array('class' => 'form-control')) }}
               </div>
           </div>
           <div class="col">
                <div class="md-form form-sm">
                    {{ Form::label('paisEmision', 'paisEmision') }}
                    {{ Form::text('paisEmision', null, array('class' => 'form-control')) }}
               </div>
           </div>                                      
       </div>

       <div class="row">
           <div class="col">
                <div class="md-form form-sm">
                    {{ Form::label('nit', 'NIT') }}
                    {{ Form::text('nit', null, array('class' => 'form-control')) }}
               </div>
           </div>
           <div class="col">
                <div class="md-form form-sm">
                    {{ Form::label('telFijo', 'telFijo') }}
                    {{ Form::number('telFijo', null, array('class' => 'form-control')) }}
               </div>
           </div>
            <div class="col">
                <div class="md-form form-sm">
                    {{ Form::label('telMovil', 'telMovil') }}
                    {{ Form::number('telMovil', null, array('class' => 'form-control')) }}
               </div>
           </div>
           <div class="col">
                <div class="md-form form-sm">
                    {{ Form::label('email', 'email') }}
                    {{ Form::email('email', null, array('class' => 'form-control')) }}
               </div>
           </div>                                      
       </div>

        <h5>
           Dirección particular completa:
       </h5> 

       <div class="row">
           <div class="col">
                <div class="md-form form-sm">
                    {{ Form::label('zonaDireccion', 'Dirección Completa') }}
                    {{ Form::text('zonaDireccion', null, array('class' => 'form-control')) }}
               </div>
           </div>
           <div class="col">
                <div class="md-form form-sm">
                    {{ Form::label('departamentoDireccion', 'Departamento') }}
                    {{ Form::text('departamentoDireccion', null, array('class' => 'form-control')) }}
               </div>
           </div>
            <div class="col">
                <div class="md-form form-sm">
                    {{ Form::label('municipioDireccion', 'Municipio') }}
                    {{ Form::text('municipioDireccion', null, array('class' => 'form-control')) }}
               </div>
           </div>
           <div class="col">
                <div class="md-form form-sm">
                    {{ Form::label('paisDireccion', 'Pais') }}
                    {{ Form::text('paisDireccion', null, array('class' => 'form-control')) }}
               </div>
           </div>                                      
       </div>



<a id='prueba' class="btn orange" onclick="tabs('panel61')">atras</a>
<a id='prueba' class="btn green lighten-1" onclick="tabs('panel63')">siguiente</a>

    </div>
    <!--/.Panel 2-->

    <!--Panel 3-->
    <div class="tab-pane fade" id="panel63" role="tabpanel">
       <h3>
           REFERENCIAS DEL SOLICITANTE
       </h3> 



<a id='prueba' class="btn orange" onclick="tabs('panel62')">atras</a>
<a id='prueba' class="btn green lighten-1" onclick="tabs('panel64')">siguiente</a>

    </div>
    <!--/.Panel 3-->

    <!--Panel 4-->
    <div class="tab-pane fade" id="panel64" role="tabpanel">

       <h3>
           INFORMACIÓN ECONOMICO-FINANCIERA DEL SOLICITANTE
       </h3> 
      
<a id='prueba' class="btn orange" onclick="tabs('panel63')">atras</a>
    {{ Form::submit('Guardar', array('class' => 'btn green ')) }}


    </div>
    <!--/.Panel 4-->
</div>





<!-- 
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
@endsection -->

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