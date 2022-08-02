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
                                                        <h5>Direction</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                    {!! Form::open(array('route' => 'directions.store','method'=>'POST')) !!}
                                                            <div class="form-group form-default">
                                                                <input type="text" name="nomDirection" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Direction</label>
                                                            </div>
                                                            <div class="card-footer text-center">

                                                              <button type="submit" class="btn btn-primary">Submit</button>

                                                          </div>
                                                             
                                                    </div>
                                              {!! Form::close() !!} 
                                            </div> 
                                            
                                             
                                                </div>
                                                @endsection  