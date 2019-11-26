{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile

  @component('components.modal-button', ['class' => 'btn btn-primary', 'data' => '#testModal'])
    Open modal
  @endcomponent

  @component('components.modal', ['id' => 'testModal'])
    @slot('title')
      Modal title
    @endslot
    Modal body text goes here.
  @endcomponent

  {{ FrontPage::showField() }}

@endsection
