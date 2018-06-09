@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
            <div class="col">
                <h1>{{ __('Accounts') }}</h1>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h2>
                    {{ __('Active Accounts') }}
                </h2>
                <p>
                    {{ __('This is your account list, feel free to add one more or remove the existing ones.') }}
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <table cellspacing="0" cellpadding="0">
                    <thead>
                        <th>{{ __('Social Network') }}</th>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Creation Date') }}</th>
                    </thead>
                    <tbody>
                        @each('accounts._account', $accounts, 'account', 'accounts._empty')
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
