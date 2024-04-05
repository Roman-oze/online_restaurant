<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout._head')
</head>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark p-2">
    @include('layout._nav')
    
</nav>
<header>
    @include("layout._header")
</header>

<div>
    @yield('main_content')
</div>

<footer>
    <div class="container-fluid ">
    @include('layout._footer')
    </div>
</footer>

<script>
    @include('layout._script')
</script>

</body>
</html>