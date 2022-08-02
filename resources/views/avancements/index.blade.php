@extends('layouts.app')

@section('content')
<div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Avancement</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                    <div class="col-md-6">
                                                        <a href="{{ route('avancements.create') }}" class="btn btn-sm btn-primary">
                                                            <i class="icofont icofont-user-alt-3"></i> Ajouter un nouveau
                                                        </a>
                                                    </div>
                                                    @foreach ($avancements as $key => $avancement)     
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Numero Arrete</th>
                                                               
                                                                <th>categorie</th>
                                                                
                                                                <th>Date decision</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>{{ $avancement->num_arrete }}</th>
                                                                @if(!empty($categorie->getlibelleCat()))
                                                                @foreach($categorie->getlibelleCat() as $v)
                                                                <th>{{ $v }}</th>
                                                                @endforeach
                                                                @endif
                                                                <td>{{ $avancement->dateDecision }}</td>
                                                                <td style="display: flex">
                                                                        <a class="btn btn-info" href="{{ route('avancements.show',$avancement->num_arrete) }}">Vue</a>

                                                                <a  class="btn btn-primary" href="{{ route('avancements.edit',$avancement->num_arrete) }}">Modifier</a>
                                                                {!! Form::open(['method' => 'DELETE','route' => ['avancements.destroy', $avancement->num_arrete],'style'=>'display:inline']) !!}

                                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

                                                            {!! Form::close() !!}
                                                                                    </td>
                
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            {!! $avancements->render() !!}
                                            @endsection