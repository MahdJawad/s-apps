@extends('layouts.app')


@section('content')

<div class="row">
        <!-- Color Open Accordion start -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-header-text">Etat des utilisateurs</h5>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('users.index') }}"> Retour</a>
                        </div>
                        <div class="color-accordion" id="color-accordion">
                        
               
                                                 <div class="accordion-desc">
                                                     <div class="form-group">

                                                      <strong>Nom complet:</strong>

                                                        {{ $user->name }}

                                                      </div>
                                                </div>
                                                <div class="accordion-desc">
                                                     <div class="form-group">

                                                      <strong>Email:</strong>
                                                      {{ $user->email }}

                                                      </div>
                                                </div>
                                                    <div class="accordion-desc">
                                                         <div class="form-group">

                                                          <strong>Roles:</strong>

                                                      @if(!empty($user->getRoleNames()))

                                                        @foreach($user->getRoleNames() as $v)

                                                          <label class="badge badge-success">{{ $v }}</label>

                                                        @endforeach

                                                      @endif

                            </div>
                        </div>
                                                   
                    </div>
                </div>
            </div>
        </div>
    <!-- Color Open Accordion ends -->
    </div>
    <!-- Row end -->
</div>

@endsection