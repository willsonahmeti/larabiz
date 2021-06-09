@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Listing') }} <a class="btn btn-sm btn-secondary float-right" href="/dashboard">Go back</a></div>

                <div class="card-body">
                    {!! Form::open(['action' => ['App\Http\Controllers\ListingsController@update', $listing->id], 'method' => 'POST']) !!}
                        {{ Form::bsText('name', $listing->name, ['placeholder' => 'Company name']) }}
                        {{ Form::bsText('website', $listing->website, ['placeholder' => 'Company website']) }}
                        {{ Form::bsText('email', $listing->email, ['placeholder' => 'Contact email']) }}
                        {{ Form::bsText('phone', $listing->phone, ['placeholder' => 'Contact phone']) }}
                        {{ Form::bsText('address', $listing->address, ['placeholder' => 'Bussiness address']) }}
                        {{ Form::bsTextArea('bio', $listing->bio, ['placeholder' => 'About this bussiness']) }}
                        {{ Form::hidden('_method', 'PUT') }}
                        {{ Form::bsSubmit('Done', ['class' => 'btn btn-outline-primary']) }}
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
@endsection
