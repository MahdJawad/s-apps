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



<div class="col-md-6">
<div class="card">
 <div class="card-header">
 <h5>Type conge</h5>
  <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
  </div>
<div class="card-block">
{!! Form::open(array('route' => 'type.store','method'=>'POST')) !!}
<form class="col-ms-10">
<div class="form-group form-default">
<select  name="type" id="type" value="{{old('type')}}" class="form-control">
<option selected>Choisir le type de conges</option>
<option value="normal">Normal</option>
<option value="maladie">Maladie</option>
<option value="autres">Autres</option>
 </select>

<span class="form-bar"></span>
 <label class="float-label">Type conge</label>
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