<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout._head')
</head>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark p-2">
    @include('layout._nav')
    
</nav>
<header>
    @yield('header_page')
</header>

<div>
    @yield('main_content')
</div>
<br>
<br>
<br>
<footer>
    @include('layout._footer')
</footer>

<script>
    @include('layout._script')
</script>

</body>
</html>