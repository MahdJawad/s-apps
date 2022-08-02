@extends('layouts.app')

@section('content')
<div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Fonction</h5>
                                                        <!--<span>Renseigner les informations relatives pour employetag</span>-->
                                                        </div>
                                                        <div class="col-md-12">
                                                        <a href="{{ route('fonctions.create') }}" class="btn btn-sm btn-primary" style=" float: right;">
                                                            <i class="icofont icofont-user-alt-3"></i> Ajouter un nouveau
                                                        </a>
                                                        
                                                    </div>
                                                    <div class="card-block">
                                        
                                                   
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Fonction</th>
                                                                <th>Action</th>
                                                          
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach ($fonctions as $key => $fonction)
                                                            <tr>
                                                                <td scope="row">{{ ++$i }}</th>
                                                                <td>{{ $fonction->intituleFonction }}</td>
                                                                <td style="display: flex">
                                                                  <a class="btn btn-info" href="{{ route('fonctions.show',$fonction->idFonction) }}">Vue</a>

                                                                  <a  class="btn btn-primary" href="{{ route('fonctions.edit',$fonction->idFonction) }}">Modifier</a>
                                                                  {!! Form::open(['method' => 'DELETE','route' => ['fonctions.destroy', $fonction->idFonction],'style'=>'display:inline']) !!}

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
                                            {!! $fonctions->render() !!}
                                            @endsection
                                            