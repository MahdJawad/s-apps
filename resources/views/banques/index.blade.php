@extends('layouts.app')

@section('content')
<div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Banque</h5>
                                                        
                                                    </div>
                                                    <div class="col-md-12">
                                                        <a href="{{ route('banques.create') }}" class="btn btn-sm btn-primary">
                                                            <i class="icofont icofont-user-alt-3"></i> Ajouter un nouveau
                                                        </a>
                                                    </div>
                                                    <div class="card-block">
                                                    
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Banque</th>
                                                                <th>Adresse</th>
                                                                <th>Fax</th>
                                                                <th>Telephone</th>
                                                                
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach ($banques as $key => $banque)
                                                            <tr>
                                                                <td scope="row">{{ ++$i }}</th>
                                                                <td>{{ $banque->nonBanque }}</td>
                                                                <td>{{ $banque->adress  }}</td>
                                                                <td>{{ $banque->fax  }}</td>
                                                                <td>{{ $banque->telBanque }}</td>
                                                                
                                                                
                                                                <td style="display: flex">
                                                                        <a class="btn btn-info" href="{{ route('banques.show',$banque->idBanque) }}">Vue</a>

                                                                <a  class="btn btn-primary" href="{{ route('banques.edit',$banque->idBanque) }}">Modifier</a>
                                                                {!! Form::open(['method' => 'DELETE','route' => ['banques.destroy', $banque->idBanque],'style'=>'display:inline']) !!}

                                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

                                                            {!! Form::close() !!}
                                                                                    </td>
                                                                
                                                            </tr>
                                                            @endforeach 
                                                        </tbody>
                                                    </table>
                                                             
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {!! $banques->render() !!}
                                        @endsection