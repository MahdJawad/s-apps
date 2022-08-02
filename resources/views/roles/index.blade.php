@extends('layouts.app')

@section('content')
<div class="card">
                <div class="card-header">
                <h5>Gestion des roles</h5>
                <span> <div class="row">
                <div class="col-md-6">
                <a href="{{ route('roles.create') }}" class="btn btn-sm btn-primary">
                        <i class="icofont icofont-user-alt-3"></i> Ajouter un nouveau
                    </a>
                 @can('role-create')
                   
                     @endcan
                </div> </span>
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
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Nom</th>
                                                                
                        <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                     @foreach ($roles as $key => $role)
                                                            <tr>
                                                                <th scope="row">{{ ++$i }}</th>
                                                                <td>{{ $role->name }}</td>
           
            <td style="display: flex">
              <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Vue</a>

       <a  class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Modifier</a>
        @can('role-delete')

                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}

                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

                {!! Form::close() !!}

            @endcan
                        </td>
                                </tr>
                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    {!! $roles->render() !!}


<p class="text-center text-primary">Sirba Communication</p>
                                                </div>
                                            </div>
                                        </div>

    

@endsection