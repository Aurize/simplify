@extends('front.layouts.layout')

@section('content')
    <section class="section">
        <div class="container">
            <offers-list page="{{ $page }}" limit="{{ $limit }}"></offers-list>
        </div>
    </section>
@endsection
