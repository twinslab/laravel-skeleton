@extends('master')

@section('content')
    <h1>{{ __('pages/contact.h1') }}</h1>

    @if (session()->has('alert-success'))
        {{ session('alert-success') }}
    @endif

    <form method="POST" action="{!! route('contact') !!}">
        {!! csrf_field() !!}

        <div class="field-label">{!! __('pages/contact.form.labels.name') !!}</div>
        <input type="text" name="name" value="{!! old('name') !!}" required>

        <div class="field-label">{!! __('pages/contact.form.labels.email') !!}</div>
        <input type="email" name="email" value="{!! old('email') !!}" required>

        <div class="field-label">{!! __('pages/contact.form.labels.message') !!}</div>
        <textarea name="message" required>{!! old('message') !!}</textarea>

        <button type="submit">{!! __('pages/contact.form.labels.submit') !!} </button>
    </form>
@endsection
