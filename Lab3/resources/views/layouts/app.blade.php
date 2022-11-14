<html>
    <head>
        <title>
            @yield('title')
</title>

</head>
<body>
@yield('information')
@yield('phpempty')
@yield('content')  
<form method="POST" action="/register">	
{{csrf_field()}}
@yield('contentregister')	
</form>

    <form method="POST" action="/login">	
{{csrf_field()}}
@yield('contentlogin')	
</form>



<form method="POST" action="logout">
{{csrf_field()}}
@yield('contentlogout')	   
</form>

@yield('phpfill') 

</body>
</html>