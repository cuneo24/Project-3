<?php
?>

        <!DOCTYPE html>
<html lang='en' xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>@yield('title')</title>
    @yield('styles')
</head>

<body>
<div id='wrapperForm'>
    <h2>Harvard Campus Services - Business Card Generator</h2>
    @yield('logo')
    @yield('form')
    @yield('errors')
</div>

<!-- business card output - uses spans to handle "sloppy" formatting necessary for complexity - this was based on an actual Campus Services business card-->
@yield('businessCard')
</body>
</html>