<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Andrew Muleke - Systems Engineer, Software Developer">
    <meta name="author" content="Andrew Muleke<mulekea3@gmail.com>">
    <title>Andrew Muleke</title>

    <link rel="canonical" href="https://amuleke.co.ke">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.typekit.net/xnq0kyk.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <style>
        .topnav {
            overflow: hidden;
            position: relative;
        }

        /* Hide the links inside the navigation menu (except for logo/home) */
        #mobile-nav .nav {
            display: none;
        }

        /* Style navigation menu links */
        .topnav a {
            color: white;
            text-decoration: none;
            font-size: 17px;
            display: block;
        }

        /* Style the hamburger menu */
        .topnav a.icon {
            /* background: black; */
            display: block;
            right: 0;
            top: 0;
            color: white;
        }

        /* Add a grey background color on mouse-over */
        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>
<body class="d-flex h-100 text-center text-bg-light">
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

    <main class="px-1" >
        @include('components.header')
        @section('body')
        @include('components.footer')
    </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    function myFunction() {
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }
</script>
</body>
</html>
