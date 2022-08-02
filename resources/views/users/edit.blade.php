@extends('layouts.app')


@section('content')
<div class="col-md-12">
<div class="card">
<div class="card-header">
    <h3>Modifier un nouveau utilisateur</h3>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('users.index') }}"> Retour</a>
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
{!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
        <div class="form-group form-default form-static-label">
            <input type="text" name="name" class="form-control" placeholder="Entrer le nom " required="" value="{{$user->name}}">
                <span class="form-bar"></span>
                    <label class="float-label">Nom</label>
        </div>
        <div class="form-group form-default form-static-label">
            <input type="text" name="email" class="form-control" placeholder="Entrer Email" required="" value="{{$user->email}}">
                <span class="form-bar"></span>
                    <label class="float-label">Email (exa@gmail.com)</label>
        </div>
        <div class="form-group form-default form-static-label">
            <input type="password" name="password" class="form-control" placeholder="Entrer mot de passe" required="" >
                <span class="form-bar"></span>
                    <label class="float-label">Mot de passe</label>
        </div>
        <div class="form-group form-default form-static-label">
            <input type="password" name="confirm-password" class="form-control" placeholder="Confirmer mot de passe" required="">
                <span class="form-bar"></span>
                    <label class="float-label">Mot de passe confirmer</label>
        </div>                                                          
        <div class="form-group form-default form-static-label">
            {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
                <span class="form-bar"></span>
                    <label class="float-label">Role:</label>
        </div>
                                                           
        <div class="form-group form-default form-static-label text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        {!! Form::close() !!}
</div>


<p class="text-center text-primary"><small>Sirba Communication</small></p>
</div>
</div>
@endsection