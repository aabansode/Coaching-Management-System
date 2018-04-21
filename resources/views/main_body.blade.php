<!DOCTYPE html>
<html>
<head>
    {{--Every child page should inject page title through section name title--}}
    @include('partial_parts.head')
    @yield('OuterInclude')
</head>

<body>
<hr>
@include('partial_parts.navbar')


<div id="ContentOfBody" class="container">
    @yield('ContentOfBody')
</div>

</body>

</html>
