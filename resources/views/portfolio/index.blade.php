@extends('layouts.app')

@section('content')

    @include('portfolio.sections.hero')
    @include('portfolio.sections.about')
    @include('portfolio.sections.projects')
    @include('portfolio.sections.skills')
    @include('portfolio.sections.experience')
    @include('portfolio.sections.contact')
    @include('portfolio.sections.footer')

@endsection
