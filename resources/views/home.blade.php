@extends('layouts.app')

@section('content')
    <!-- banner -->
    @include('sections.banner')
    <!-- banner -->

    <!-- counter -->
    {{-- @include('sections.counter') --}}
    <!-- counter -->

    <!-- work -->
    @include('sections.work')
    <!-- work-->

    <!-- skills -->
    @include('sections.skills')
    <!-- skills -->

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
