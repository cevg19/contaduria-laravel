
{!! Form::open(['route' => 'terceros.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) !!}
    <div class="form-group">
        {!! Form::number('identificacion', null, ['class'=> 'form-control', 'placeholder' => 'Identificacion']) !!}
    </div>
    <div class="form-group">
        {!! Form::text('ciudad', null, ['class'=> 'form-control', 'placeholder' => 'Ciudad']) !!}
    </div>
    <div class="form-group">
        {!! Form::text('activo', null, ['class'=> 'form-control', 'placeholder' => 'Activo']) !!}
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-default"><i class="bi bi-search"></i></button>
    </div>
{!! Form::close() !!}   
               