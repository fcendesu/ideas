@extends('layout.layout')
@section('content')
    <div class="row">
        <div class="col-3">
            @include('shared/left-shared-bar')
        </div>
        <div class="col-6">
            @include('shared.success-message')

            <hr>

            <div class="mt-3">
                @include('shared.idea-card')
            </div>

        </div>

        <div class="col-3">
            @include('shared/search-bar')
            @include('shared/follow-box')
        </div>
    </div>
@endsection
