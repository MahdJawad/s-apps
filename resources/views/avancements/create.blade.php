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

<div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Avancement</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                    {!! Form::open(array('route' => 'avancements.store','method'=>'POST')) !!}
                                                            <div class="form-group form-default">
                                                                <input type="string" name="num_arrete" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Numero Arrete</label>
                                                            </div>
                                                            <div class="col-md-6">                                  
                                                                <span class="form-bar"></span>
                                                                <select name="idCat" value="{{ old('idCat') }}" title="Selectionner la categorie" data-toggle="tooltip" id="idCat"  class="form-control">
                                                                @foreach($categories as $categorie)
                                                                    <option value="{{$categorie->idCat }}"> 
                                                                    {{$categorie->libelleCat}} </option>
                                                                @endforeach
                                                            </select>
                                                                <label class="float-label">categorie</label>
                                                            </div>
                                                             <div class="form-group form-default">
                                                                <input type="date" name="dateDecision" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Date decision</label>
                                                            </div>
                                                            <div class="card-footer text-center">

<button type="submit" class="btn btn-primary">Submit</button>

</div>
                                                            {!! Form::close() !!}
                                                    </div>
                                                    @endsection  