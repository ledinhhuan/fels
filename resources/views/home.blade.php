@extends('layouts.home.master')

@section('content')
    <h2 class="h2 text-center">@lang('topic.free_english')</h2>
    <p class="text-center">@lang('topic.free_text')</p>

    @include('widgets.topic')
@endsection
