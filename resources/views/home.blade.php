@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div ></div>

                <div   style="text-align: center; font-size:50px">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    BIENVENIDO A MEDFLIX !
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
