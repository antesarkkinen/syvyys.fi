{{--
  Template Name: Frontpage Template
--}}

@extends('layouts.app')

@section('content')
  @include('blocks.hero')
  @include('blocks.about')
  @include('blocks.yogis')
  @include('blocks.contact')
  @include('blocks.cta')
@endsection
