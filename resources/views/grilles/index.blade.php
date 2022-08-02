@extends('layouts.app')

@section('content')
<div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Grille</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="col-md-12">
                                                        <a href="{{ route('grilles.create') }}" class="btn btn-sm btn-primary" style=" float: right;">
                                                            <i class="icofont icofont-user-alt-3"></i> Ajouter un nouveau
                                                        </a>
                                                    </div>
                                                    <div class="card-block">
                                                    
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Categorie</th>
                                                                <th>Echelon</th>
                                                                <th>Indice</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach ($grilles as $key => $grille)
                                                            <tr>
                                                                <td scope="row">{{ ++$i }}</th>
                                                                <td>{{ $grille->libelleCat }}</td>
                                                                <td>{{ $grille->libelleEchelon }}</td>
                                                                <td>{{ $grille->indice }}</td>
                                                            </tr>
                                                            @endforeach 
                                                        </tbody>
                                                    </table>
                                                             
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            
                                        @endsection