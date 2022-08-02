@extends('layouts.app')

@section('content')
<div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Service</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="col-md-12">
                                                        <a href="{{ route('services.create') }}" class="btn btn-sm btn-primary" style=" float: right;">
                                                            <i class="icofont icofont-user-alt-3"></i> Ajouter un nouveau
                                                        </a>
                                                    </div>
                                                    <div class="card-block">
                                                    
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Departement</th>
                                                                <th>Service</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach ($services as $key => $service)
                                                            <tr>
                                                                <td scope="row">{{ ++$i }}</th>
                                                                <td>{{ $service->nomDepartement }}</td>
                                                                <td>{{ $service->nomService }}</td>
                                                                
                                                                <td style="display: flex">
                                                                        <a class="btn btn-info" href="{{ route('services.show',$service->idService) }}">Vue</a>

                                                                <a  class="btn btn-primary" href="{{ route('services.edit',$service->idService) }}">Modifier</a>
                                                                {!! Form::open(['method' => 'DELETE','route' => ['services.destroy', $service->idService],'style'=>'display:inline']) !!}

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