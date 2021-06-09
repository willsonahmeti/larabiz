@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Listing') }} <a class="btn btn-sm btn-secondary float-right" href="/dashboard">Go back</a></div>

                <div class="card-body">
                    {!! Form::open(['action' => 'App\Http\Controllers\ListingsController@store', 'method' => 'POST']) !!}
                        {{ Form::bsText('name', '', ['placeholder' => 'Company name']) }}
                        {{ Form::bsText('website', '', ['placeholder' => 'Company website']) }}
                        {{ Form::bsText('email', '', ['placeholder' => 'Contact email']) }}
                        {{ Form::bsText('phone', '', ['placeholder' => 'Contact phone']) }}
                        {{ Form::bsText('address', '', ['placeholder' => 'Bussiness address']) }}
                        {{ Form::bsTextArea('bio', '', ['placeholder' => 'About this bussiness']) }}
                        {{ Form::bsSubmit('Create', ['class' => 'btn btn-outline-success']) }}
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
@endsection
