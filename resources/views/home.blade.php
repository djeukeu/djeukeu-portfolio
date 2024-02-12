@extends('layouts.app')

@section('content')
    <!-- banner -->
    @include('sections.banner')
    <!-- banner -->

    <!-- about me -->
    @include('sections.about-me')
    <!-- about me -->

    <!-- counter -->
    {{-- @include('layouts.counter') --}}
    <!-- counter -->

    <!-- skills -->
    @include('sections.skills')
    <!-- skills -->

    <!-- work -->
    @include('sections.work')
    <!-- work-->

    <!-- blog -->
    @include('sections.blog')
    <!-- blog -->

    <!-- subscribe -->
    @include('sections.subscribe')
    <!-- subscribe -->

    <!-- education -->
    @include('sections.education')
    <!-- education-->
@endsection
