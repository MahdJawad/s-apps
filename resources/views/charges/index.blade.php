@extends('layouts.app')

@section('content')
<div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Les charges familliales</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="col-md-12">
                                                        <a href="{{ route('charges.create') }}" class="btn btn-sm btn-primary" style=" float: right">
                                                            <i class="icofont icofont-user-alt-3"></i> Ajouter un nouveau
                                                        </a>
                                                    </div>
                                                    <div class="card-block">
                                                    
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Employe</th>
                                                                <th>Nom</th>
                                                                <th>Prenom</th>
                                                                <th>Lien de famille</th>
                                                                <th>Sexe</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach ($charges as $key => $charge)
                                                            <tr>
                                                                <td scope="row">{{ ++$i }}</th>
                                                                <td>{{ $charge->nom_emp }} {{ $charge->prenom_emp }}</td>
                                                                <td>{{ $charge->nom }}</td>
                                                                <td>{{ $charge->prenom }}</td>
                                                                <td>{{ $charge->lienFamille }}</td>
                                                                <td>{{ $charge->sexe }}</td>
                                                                
                                                                <td style="display: flex">
                                                                        <a class="btn btn-info" href="{{ route('charges.show',$charge->id) }}">Vue</a>

                                                                <a  class="btn btn-primary" href="{{ route('charges.edit',$charge->id) }}">Modifier</a>
                                                                {!! Form::open(['method' => 'DELETE','route' => ['charges.destroy', $charge->id],'style'=>'display:inline']) !!}

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

                                        @endsection