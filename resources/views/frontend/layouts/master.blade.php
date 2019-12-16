<!DOCTYPE html>
<html lang="en">
    @include('frontend.layouts._head')
    @include('frontend.layouts._header')

    @yield('content')
    @yield('scripts')

    @include('frontend.layouts._foot')
    @include('frontend.layouts._script')
    
    
  
    </body>
</html>