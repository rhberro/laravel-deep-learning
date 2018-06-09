@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>{{ __('Projects') }}</h1>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h2>{{ __('My Projects') }}</h2>
                <p>{{ __('This is a list of projects created by you. You can create and name it the way you want or remove the existing ones.') }}</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <table cellspacing="0" cellpadding="0">
                    <thead>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Creation Date') }}</th>
                        <th>{{ __('') }}</th>
                    </thead>
                    <tbody>
                        @each('projects._project', $projects, 'project', 'projects._empty')
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
