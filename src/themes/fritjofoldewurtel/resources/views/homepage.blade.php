{{--
  Template Name: Homepage
--}}

@extends('layouts.app')

@section('content')
  @include('partials.page-hero-header')
  @include('partials.skills')
  @include('partials.clients')
  @include('partials.contact-form')
  @include('partials.author')
  @include('partials.accounts')
@endsection
