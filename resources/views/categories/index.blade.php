@extends('layouts.app')

@section('content')
<div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Categorie</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="col-md-12">
                                                        <a href="{{ route('categories.create') }}" class="btn btn-sm btn-primary" style=" float:right;">
                                                            <i class="icofont icofont-user-alt-3"></i> Ajouter un nouveau
                                                        </a>
                                                    </div>
                                                    <div class="card-block">
                                                    
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Categorie</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach ($categories as $key => $categorie)
                                                            <tr>
                                                                <td scope="row">{{ ++$i }}</th>
                                                                <td>{{ $categorie->libelleCat }}</</td>
                                                                <td style="display: flex">
                                                                            <a class="btn btn-info" href="{{ route('categories.show',$categorie->idCat) }}">Vue</a>

                                                                    <a  class="btn btn-primary" href="{{ route('categories.edit',$categorie->idCat) }}">Modifier</a>
                                                                    {!! Form::open(['method' => 'DELETE','route' => ['categories.destroy', $categorie->idCat],'style'=>'display:inline']) !!}

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
                                        {!! $categories->render() !!}
                                        @endsection