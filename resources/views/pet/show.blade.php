@extends('layouts.app')

@section('template_title')
    {{ $pet->name ?? 'Show Pet' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Pet</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pets.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $pet->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $pet->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $pet->edad }}
                        </div>
                        <div class="form-group">
                            <strong>Enfermedades:</strong>
                            {{ $pet->enfermedades }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
