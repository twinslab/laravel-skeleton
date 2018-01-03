<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="description" content="{!! $page_desc or __('defaults.page_desc') !!}">
        <title>{!! isset($page_title) ? $page_title.' | App' : 'App' !!}</title>
    </head>
    <body>
        @include('includes/nav')

        @yield('content')

        @include('includes/footer')

        {{-- Page Specific Scripts --}}
        @yield('scripts')
    </body>
</html>
