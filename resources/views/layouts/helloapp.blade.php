<html>
<head>
<title>@yield('title')</title>
<style>
body {font-size:16pt;}
h1 {font-size:50pt;}
.menutitle {font-size:50pt;}
</style>
</head>
<body>
 <h1> @yield('title') </h1>
 @section('menubar')
 <h2 class="mnutitile">メニュー</h2>
 <ul>
  <li>@show</li>
</ul>
<hr size="1">

</body>
</html>
