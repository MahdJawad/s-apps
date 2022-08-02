@extends('layouts.app')

@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3>Creer un nouveau role</h3>
    
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('roles.index') }}"> Retour</a>
        </div>
        <div class="card-header-right">
        <ul class="list-unstyled card-option">
            <li><i class="fa fa fa-wrench open-card-option"></i></li>
            <li><i class="fa fa-window-maximize full-card"></i></li>
            <li><i class="fa fa-minus minimize-card"></i></li>
            <li><i class="fa fa-refresh reload-card"></i></li>
            <li><i class="fa fa-trash close-card"></i></li>
        </ul>
    </div>
</div>




@if (count($errors) > 0)

  <div class="alert alert-danger">

    <strong>Whoops!</strong> There were some problems with your input.<br><br>

    <ul>

       @foreach ($errors->all() as $error)

         <li>{{ $error }}</li>

       @endforeach

    </ul>

  </div>

@endif


<div class="card-block">
{!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}

<div class="card-body">

<div class="col-sm-12 mb-3 mt-3 mb-sm-0">

        <div class="form-group">

        
                <span style="color:red;">*</span>Nom complet</label>

            {!! Form::text('name', null, array('placeholder' => 'Entrer le nom complet','class' => 'form-control')) !!}

        </div>

    </div>

  
    <div class="col-sm-12 mb-3 mt-3 mb-sm-0">

        <div class="form-group">

        <span style="color:red;">*</span>Role</label>

            @foreach($permission as $value)

                <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}

                {{ $value->name }}</label>

            <br/>

            @endforeach

        </div>

    </div>

    <div class="card-footer text-center">

        <button type="submit" class="btn btn-primary">Submit</button>

    </div>
{!! Form::close() !!}
</div>
</div>
<p class="text-center text-primary">Sirba Communication</p>
</div>
</div>

@endsection