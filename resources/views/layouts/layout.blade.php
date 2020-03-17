@include('layouts.partials._header')

    <header>
      @yield('header')
    </header>

    <main>
      @yield('main-content')
    </main>

    <footer>
      @yield('footer')
    </footer>
  
@include('layouts.partials._footer')