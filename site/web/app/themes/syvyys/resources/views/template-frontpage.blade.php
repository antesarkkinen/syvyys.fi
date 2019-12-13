{{--
  Template Name: Frontpage Template
--}}

@extends('layouts.app')

@section('content')
  @include('blocks.about')
  @include('blocks.yogis')
  @include('blocks.contact')
  @if ($cta_block)
    @include('blocks.cta', array('position' => 'block'))
  @endif
@endsection
