@extends('layouts.app')

@section('content')

<div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Direction</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="col-md-6">
                                                        <a href="{{ route('directions.create') }}" class="btn btn-sm btn-primary">
                                                            <i class="icofont icofont-user-alt-3"></i> Ajouter un nouveau
                                                        </a>
                                                    </div>
                                                    <div class="card-block">
                                                    @foreach ($directions as $key => $direction)
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Direction</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td scope="row">{{ ++$i }}</th>
                                                                <td>{{ $direction->nomDirection }}</</td>
                                                                <td style="display: flex">
                                                                            <a class="btn btn-info" href="{{ route('directions.show',$direction->idDirection) }}">Vue</a>

                                                                    <a  class="btn btn-primary" href="{{ route('directions.edit',$direction->idDirection) }}">Modifier</a>
                                                                    {!! Form::open(['method' => 'DELETE','route' => ['directions.destroy', $direction->idDirection],'style'=>'display:inline']) !!}

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
                                        </div>
                                        {!! $directions->render() !!}
                                        @endsection