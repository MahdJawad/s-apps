@extends('layouts.app')

@section('content')
<div class="col-md-12">


@if (count($errors) > 0)

  <div class="alert alert-danger">

    <strong>Whoops!</strong> probleme au niveau des entrees.<br><br>

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
 <h5>Echelon</h5>
  <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
  </div>
<div class="card-block">
{!! Form::open(array('route' => 'echelons.store','method'=>'POST')) !!}
<form class="form-material">
<div class="col-ms-10">                                  
                                                                

<select name="idCat" value="{{ old('idCat') }}" title="Selectionner la categorie" data-toggle="tooltip" id="idCat"  class="form-control">

    <option value="">Choisir la categorie</option>
    @foreach($categories as $categorie)
    <option value="{{$categorie->idCat }}"> {{$categorie->libelleCat}} </option>
@endforeach
</select>
<span class="form-bar"></span>
<label class="float-label">Categorie</label>
</div>
<div class="form-group form-default form-static-label">
 <input type="number" name="libelleEchelon" class="form-control" required="" min="0" placeholder="veuillez renseigner un echelon">
<span class="form-bar"></span>
 <label class="float-label">Echelon</label>
  </div>
  <div class="card-footer text-center">

<button type="submit" class="btn btn-primary">Ajouter</button>

</div>
</form>
{!! Form::close() !!} 
 </div>
   </div>
   
  </div>
@endsection  