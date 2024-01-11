@extends('layouts.app')

@section('content')
    <!-- banner -->
    @include('sections.banner')
    <!-- banner -->

    <!-- counter -->
    {{-- @include('layouts.counter') --}}
    <!-- counter -->

    <!-- skills -->
    @include('sections.skills')
    <!-- skills -->

    <!-- work -->
    @include('sections.work')
    <!-- work-->

    <!-- education -->
    @include('sections.education')
    <!-- education-->

    <!-- blog -->
    {{-- @include('layouts.blog') --}}
    <!-- blog -->

    <!-- contact -->
    @include('sections.contact')
    <!-- contact -->
@endsection
