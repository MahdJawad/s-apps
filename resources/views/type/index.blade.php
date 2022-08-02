@extends('layouts.app')

@section('content')
<div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Type conge</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="col-md-12">
                                                        <a href="{{ route('type.create') }}" class="btn btn-sm btn-primary" style=" float:right">
                                                            <i class="icofont icofont-user-alt-3"></i> Ajouter un nouveau
                                                        </a>
                                                    </div>
                                                    <div class="card-block">
                                                    
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Type conge</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach ($types as $key => $type)
                                                            <tr>
                                                                <td scope="row">{{ ++$i }}</th>
                                                                <td>{{ $type->type }}</td>
                                                                <td style="display: flex">
                                                                            <a class="btn btn-info" href="{{ route('type.show',$type->idTypeConge) }}">Vue</a>

                                                                    <a  class="btn btn-primary" href="{{ route('type.edit',$type->idTypeConge) }}">Modifier</a>
                                                                    {!! Form::open(['method' => 'DELETE','route' => ['type.destroy', $type->idTypeConge],'style'=>'display:inline']) !!}

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
                                        {!! $types->render() !!}
                                        @endsection