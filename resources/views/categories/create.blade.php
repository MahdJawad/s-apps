@extends('layouts.app')

@section('content')
<div class="col-md-12">


@if (count($errors) > 0)

  <div class="alert alert-danger">

    <strong>Whoops!</strong> There were some problems with your input.<br><br>

    <ul>

       @foreach ($errors->all() as $error)

         <li>{{ $error }}</li>

       @endforeach

    </ul>

  </div>

@endif



<div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Categorie</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                    {!! Form::open(array('route' => 'categories.store','method'=>'POST')) !!}
                                                            <div class="form-group form-default">
                                                                <input type="text" name="libelleCat" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Libelle Categorie</label>
                                                            </div>
                                                            <div class="card-footer text-center">

<button type="submit" class="btn btn-primary">Submit</button>

</div>
{!! Form::close() !!} 
                                                    </div>
                                                </div>
   
                                            </div>
                                            @endsection  