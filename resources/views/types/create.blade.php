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
 <h5>Type contrat</h5>
  <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
  </div>
<div class="card-block">
{!! Form::open(array('route' => 'types.store','method'=>'POST')) !!}
<form class="form-material">
<div class="col-ms-10">
<select id="type" value="type" name="type" class="form-control">
<option value="">Choisir le type de contrat</option>
<option value="CDI">CDI</option>
<option value="CDD">CDD</option>
<option value="STAGE">STAGE</option>
 </select>

<span class="form-bar"></span>
 <label class="float-label">Type contrat</label>
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