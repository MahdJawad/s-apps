@extends('layouts.app')

@section('content')
<div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Mission</h5>
                                                        
                                                    </div>
                                                    <div class="col-md-12">
                                                        <a href="{{ route('missions.create') }}" class="btn btn-sm btn-primary">
                                                            <i class="icofont icofont-user-alt-3"></i> Ajouter un nouveau
                                                        </a>
                                                    </div>
                                                    <div class="card-block">
                                                    
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Numero ordre de mission</th>
                                                                <th>Objet mission</th>
                                                                <th>Destination</th>
                                                                <th>Date de depart</th>
                                                                <th>Date de retour</th>
                                                                <th>Moyen de deplacement</th>
                                                                
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach ($missions as $key => $mission)
                                                            <tr>
                                                                <td scope="row">{{ ++$i }}</th>
                                                                <td>{{ $mission->numOrdre }}</td>
                                                                <td>{{ $mission->objetMission  }}</td>
                                                                <td>{{ $mission->destination  }}</td>
                                                                <td>{{ $mission->dateDepart }}</td>
                                                                <td>{{ $mission->dateRetour }}</td>
                                                                <td>{{ $mission->moyen  }}</td>
                                                                
                                                                
                                                                <td style="display: flex">
                                                                        <a class="btn btn-info" href="{{ route('missions.show',$mission->numOrdre) }}">Vue</a>

                                                                <a  class="btn btn-primary" href="{{ route('missions.edit',$mission->numOrdre) }}">Modifier</a>
                                                                {!! Form::open(['method' => 'DELETE','route' => ['missions.destroy', $mission->numOrdre],'style'=>'display:inline']) !!}

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
                                        {!! $missions->render() !!}
                                        @endsection