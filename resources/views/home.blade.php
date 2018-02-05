@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Bienvenido</h3></div>
                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif @if(Auth::user()->hasRole('admin'))
                    <div>Acceso como administrador</div>
                    @else
                    <div>Acceso usuario</div>
                    @endif Has iniciado sesión con éxito!
                </div>
            </div>
        </div>
    </div>
</div>
<!-- -->

@endsection
@section('script')
<script type="text/javascript">
</script>
@endsection