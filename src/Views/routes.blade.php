@extends('laralum::layouts.master')
@section('icon', 'ion-soup-can')
@section('title', __('laralum_routes::general.routes'))
@section('subtitle', __('laralum_routes::general.routes_desc'))
@section('breadcrumb')
    <ul class="uk-breadcrumb">
        <li><a href="{{ route('laralum::index') }}">@lang('laralum_routes::general.home')</a></li>
        <li><span>@lang('laralum_routes::general.routes')</span></li>
    </ul>
@endsection
@section('content')
    <div class="uk-container uk-container-large">
        <div uk-grid>
            <div class="uk-width-1-5@l uk-width-1-1@m"></div>
            <div class="uk-width-3-5@l uk-width-1-1@m">
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        @lang('laralum_routes::general.routes')
                    </div>
                    <div class="uk-card-body">
                        <div class="uk-overflow-auto">
                            <table class="uk-table uk-table-striped">
                                <thead>
                                    <tr>
                                        <th>@lang('laralum_CRUD::general.name')</th>
                                        <th>second row{{-- @lang('laralum_CRUD::general.actions') --}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($routes as $route)
                                        <tr>
                                            <td>{{ $route->name }}</td>
                                            <td class="uk-table-shrink">
                                                {{-- <div class="uk-button-group">
                                                    <a class="uk-button uk-button-default uk-button-small" href="{{ route('laralum::CRUD.row.index', ['table' => $table]) }}">
                                                        @lang('laralum_CRUD::general.view')
                                                    </a>
                                                </div> --}}
                                                Some Route
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-5@l uk-width-1-1@m"></div>
        </div>
    </div>
@endsection
