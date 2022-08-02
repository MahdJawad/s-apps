@extends('layouts.app')


@section('content')
<div class="col-md-12">
<div class="card">
<div class="card-header">
    <h3>Editer un role</h3>
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
    <strong>Whoops!</strong> Erreur au niveau des entrer.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>

       @endforeach

    </ul>

  </div>

@endif
                                       
<div class="card-block">                                                        
{!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
        <div class="form-group form-default form-static-label">
            <input type="text" name="name" class="form-control" placeholder="Entrer le nom " required="" value="{{$role->name}}">
                <span class="form-bar"></span>
                    <label class="float-label">Nom</label>
        </div>
                                              
        <div class="form-group form-default form-static-label">
            @foreach($permission as $value)

                <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}

                {{ $value->name }}</label>

            <br/>

            @endforeach
                <span class="form-bar"></span>
                    <label class="float-label">Permission:</label>
        </div>
                                                           
        <div class="form-group form-default form-static-label text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        {!! Form::close() !!}
</div>


<p class="text-center text-primary">Sirba Communication</p>
</div>
</div>
@endsection