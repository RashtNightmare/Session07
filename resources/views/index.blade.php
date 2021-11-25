<html>
<head>
<style> @yield("css")  </style>
 <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    @include("header")
    @yield("content")
    @include("footer")
    @yield("js")

</body>

</html> 