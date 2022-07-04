@extends('layouts.app')

@section('content')
<div class="card">
                <div class="card-header">
                <h5>Les utilisateurs</h5>
                <span> <div class="row">
                <div class="col-md-6">
                    <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary">
                        <i class="icofont icofont-user-alt-3"></i> Ajouter un nouveau
                    </a>
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
                                                                <th>Email</th>
                                                                <th>Role</th>
										    <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
										 @foreach ($data as $key => $user)
                                                            <tr>
                                                                <th scope="row">{{ ++$i }}</th>
                                                                <td>{{ $user->name }}</td>
                                                                <td>{{ $user->email }}</td>
                                                                <td>
										
        @if(!empty($user->getRoleNames()))

        @foreach($user->getRoleNames() as $v)

           <label class="badge badge-success">{{ $v }}</label>

        @endforeach

      @endif
								</td>
            <td style="display: flex">
              <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Vue</a>

       <a  class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Modifier</a>
       {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}

{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

{!! Form::close() !!}
                        </td>
                                </tr>
                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    {!! $data->render() !!}


<p class="text-center text-primary">Sirba Communication</p>
                                                </div>
                                            </div>
                                        </div>

    

@endsection