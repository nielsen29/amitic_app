@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            {{ Auth::user()->getRelations() }}
                        </div>
                    @endif

                    You are logged in!
                        {{ Auth::user()->name }}




                </div>
            </div>
        </div>
    </div>

    @if(Auth::user()->hasRole('admin'))


        @include('auth.admin')


    @else




    @endif
</div>
@endsection
