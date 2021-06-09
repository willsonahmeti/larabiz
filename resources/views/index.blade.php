@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Latest Bussiness Listings') }}</div>

                <div class="card-body">

                    @if(count($listings) > 0)
                        <ul class="list-group">
                            @foreach($listings as $listing)
                                <li class="list-group-item"><a class="page-link" href="/listings/{{$listing->id}}">{{ $listing->name }}</a></li>
                            @endforeach
                        </ul>
                        </table>
                    @else
                        <p>There are no listings found!</p>
                    @endif
                </div>

            </div>
        </div>
    </div>
@endsection
