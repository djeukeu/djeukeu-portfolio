@extends('layouts.app')

@section('content')
    <!-- banner -->
    @include('sections.banner')
    <!-- banner -->

    <!-- counter -->
    {{-- @include('sections.counter') --}}
    <!-- counter -->

    <!-- about -->
    @include('sections.about')
    <!-- about -->

    <!-- skills -->
    @include('sections.skills')
    <!-- skills -->

    <!-- work -->
    @include('sections.work')
    <!-- work-->

    <!-- resume -->
    @include('sections.resume')
    <!-- resume -->

    <!-- blog -->
    @include('sections.blog')
    <!-- blog -->
@endsection
