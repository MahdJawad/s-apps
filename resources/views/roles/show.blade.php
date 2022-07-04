@extends('layouts.app')


@section('content')

<div class="row">
        <!-- Color Open Accordion start -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-header-text">Etat des roles</h5>
                    </div>
                <div class="card-block accordion-block color-accordion-block">
                    <div class="color-accordion" id="color-accordion">
                        <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('roles.index') }}"> Retour</a>
                </div>
            <div class="accordion-desc">
                    <div class="form-group">

                        <strong>Nom complet:</strong>

                        {{ $role->name }}

                    </div>
                </div>
                    <div class="accordion-desc">
                        <div class="form-group">

                            <strong>Permissions:</strong>

                                @if(!empty($rolePermissions))

                                    @foreach($rolePermissions as $v)

                                        <label class="label label-success">{{ $v->name }},</label>

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