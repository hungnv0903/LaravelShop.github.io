
<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
</head>

<body> {{-- class="animsition" --}}
	
@include('header')


@include('cart')
	
@yield('content')

@include('footer')
</body>
</html>