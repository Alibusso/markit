@extends('layouts.app')

@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <h2 class="page-title">
                {{ __('Users') }}
            </h2>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">

            <div class="alert alert-info">
                <div class="alert-title">Sample table page</div>
            </div>

            <div class="card">
                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>{{ __('FirstName') }}</th>
                                <th>{{ __('LastName') }}</th>
                                <th>{{ __('Email Address') }}</th>
                                <th>{{ __('PhoneNumber') }}</th>
                                <th>{{ __('Gender') }}</th>
                                <th>{{ __('BirthDate') }}</th>
                                <th>{{ __('Address') }}</th>
                                {{-- <th>{{ __('Product he saled/bought') }}</th> --}}
                                <th>{{ __('Created at') }}</th>
                                <th>{{ __('Updated in') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->firstname }}</td>
                                <td>{{ $user->lastname }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->is_male }}</td>
                                <td>{{ $user->birthdate }}</td>
                                <td>{{ $adresses->area_name }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>{{ $user->updated_at->diffForhumans() }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                @if( $users->hasPages() )
                <div class="card-footer pb-0">
                    {{ $users->links() }}
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
