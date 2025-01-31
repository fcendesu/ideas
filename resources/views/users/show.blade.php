@extends('layout.layout')
@section('content')
    <div class="row">
        <div class="col-3">
            @include('shared/left-shared-bar')
        </div>
        <div class="col-6">
            @include('shared.success-message')



            <div class="mt-3">
                @include('shared.user-card')
            </div>
            <hr>

            @forelse ($ideas as $idea)
                <div class="mt-3">
                    @include('shared.idea-card')
                </div>
            @empty
                <div class="alert alert-warning">
                    No ideas found.
                </div>
            @endforelse

        </div>

        <div class="col-3">
            @include('shared/search-bar')
            @include('shared/follow-box')
        </div>
    </div>
@endsection
