@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Dashboard') }} <span class="float-right"><a href="/listings/create" class="btn btn-success btn-xs">Add listing</a></span></div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{ __('You are logged in!') }}

                <h2 class="mt-5">Your listings</h2>
                @if(count($listings) > 0)
                    <table class="table table-striped">
                        <tr>
                            <th>Company</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($listings as $listing)
                            <tr>
                                <td>{{ $listing->name }}</td>
                                <td><a href="/listings/{{$listing->id}}/edit" class="btn btn-sm btn-outline-secondary float-right">Edit</a></td>
                                <td>
                                    {!! Form::open(['action' => ['App\Http\Controllers\ListingsController@destroy', $listing->id], 'method' => 'POST', 'class' => 'float-left', 'onsubmit' => 'return confirm("Are you sure?")']) !!}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::bsSubmit('Delete', ['class' => 'btn btn-sm btn-danger']) }}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                @endif
            </div>

        </div>
    </div>
</div>
@endsection
