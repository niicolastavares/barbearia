<!DOCTYPE html>
<html lang="pt-BR">
<head>
    @include('partials.head')
<head>
<body>
    
    <div class="page-wrapper">

        @include('partials.header')

        <main>
            @yield('content')

            @include('site.home.hero')

            @include('site.home.about')

            @include('site.home.services')

            @include('site.home.schedule')

            @include('site.home.blog')
        </main>

        @include('partials.footer')
        

    </div>

    @include('partials.script')


</body>
</html>