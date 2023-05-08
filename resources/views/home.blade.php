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
    <header class="d-flex mb-auto">
        <div id="logo" class="float-md-start mb-0">
            <a href="#">
                <img alt="logo" class="img-fluid" src="{{ asset("img/am-transparent-black-logo.svg") }}"  />
            </a>
        </div>
        <nav id="widescreen-nav" class="navbar-collapse nav nav-masthead justify-content-end float-md-end">
            <ul class="nav">
                <li><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                <li><a class="nav-link" href="#what-i-do">What I Do</a></li>
                <li><a class="nav-link" href="#experience">What I've Built</a></li><!---->
                <!--<li><a class="nav-link" href="projects">Projects</a></li>-->
            </ul>
        </nav>

        <nav id="mobile-nav" class="navbar-collapse justify-content-end float-md-end">
            <!-- Top Navigation Menu -->
            <div class="topnav d-flex justify-content-end">
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars fa-2xl"></i>
                </a>
            </div>
            <ul id="myLinks" class="nav justify-content-end">
                <li><a class="nav-link pr-0" aria-current="page" href="#">Home</a></li>
                <li><a class="nav-link pr-0" href="#what-i-do">What I Do</a></li>
                <!----><li><a class="nav-link" href="#experience">What I've Built</a></li><!---->
                <!--<li><a class="nav-link" href="projects">Projects</a></li>-->
            </ul>
        </nav>
    </header>

    <main class="px-1" >
        <div id="hero-section">
            <!-- FIRST ROW -->
            <div class="row d-flex align-middle">
                <div id="intro" class="col-lg-8 col-md-8 col-sm-12 col-xs-12 text-left">
                    <h1 id="title" class="fs-1">
                        <span class="fw-light">I'm</span>
                        <span class="fw-bold"> Andrew Muleke</span>
                    </h1>
                    <h3 id="byline" class="fw-light">Entreprenuer, Software Engineer with Systems Engineering experience and sometimes I write 🙂🤓</h3>
                    <a class="btn btn-outline-secondary" href="#what-id-do">Find Out More
                        <i class="fa fa-arrow-down"></i>
                    </a>
                </div>
                <div id="image" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 img-fluid">
                    <picture>
                        <source srcset="img/undraw_programming_re_kg9v.svg" type="image/svg+xml" />
                        <img alt="hero-graphic" class="img-fluid" src="{{ asset("img/undraw_programming_re_kg9v.svg") }}"  />
                    </picture>
                </div>
            </div>
            <!-- SECOND ROW -->
            <div class="row">

                <div id="social-icon-links-box" class="hero-footer d-flex justify-content-between position-absolute bottom-0 start-0">
                    <!-- SOCIAL ICONS -->
                    <ul id="social-icon-links" class="px-1">
                        <li class="px-2 py-3">
                            <a href="https://www.linkedin.com/in/andrew-muleke-b436676a/"><i class="fa-brands fa-linkedin-in"></i></a>
                        </li>
                        <li class="px-2 py-3">
                            <a href="https://github.com/Mllexx"><i class="fa-brands fa-github"></i></a>
                        </li>
                        <li class="px-2 py-3">
                            <a href="https://amuleke.medium.com/"><i class="fa-brands fa-medium"></i></a>
                        </li>
                    </ul>
                    <!-- EMAIL ADDRESS -->
                    <a class="px-0 py-3" href="mailto:mulekea3@gmail.com">mulekea3@gmail.com</a>
                </div>
            </div>

        </div>
        <!-- WHAT I DO SECTION -->
        <div id="what-i-do" class="px-0 py-5 content-segment">
            <h3 class="section-title text-start py-5" style="font-weight:bold;">What I do?</h3>
            <div class="section-content row align-items-center text-start">
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <i class="fa fa-2xl fa-laptop-code"></i>
                    <h4 class="segment-title py-2">Software Development</h4>
                    <p class="segment-details">
                        With a solid background in designing and building web-based solutions and scripting, I am passionate about solving problems and creating innovative solutions. Throughout my career, I have developed an array of solutions for businesses, including web applications, APIs, scripts, ETL pipelines, and reporting dashboards. My approach to problem-solving is technology-driven, and I thrive on tackling complex challenges.
                        <br>
                        Lets talk so you can learn more on how I can help you build the solution you need.
                    </p>
                    <!-- Stack -->
                    <h6>Stack:</h6>
                    <div class="section-content stack-icons row align-items-center text-start py-4">
                        <div class="col-lg-2 col-md-2 col-sm-6">
                            <i class="fa-brands fa-2xl fa-docker"></i>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6">
                            <i class="fa-brands fa-2xl fa-php"></i>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6">
                            <i class="fa-brands fa-2xl fa-laravel"></i>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6">
                            <i class="fa-brands fa-2xl fa-js"></i>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6">
                            <i class="fa-brands fa-2xl fa-github"></i>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <i class="fa fa-2xl fa-server"></i>
                    <h4 class="segment-title py-2">Systems Engineering</h4>
                    <p class="segment-details">
                        I have more than 5 years of collective experience in system administration and engineering, with expertise in developing system architectures for various scenarios and managing the day-to-day administration of systems.
                        My skill set includes BCP, disaster recovery, monitoring and observability, scripting, and performance optimization. I am proficient in both Linux and Windows environments and can configure and deploy systems on both platforms. Additionally, I am experienced in deploying and managing cloud-based systems.
                    </p>
                    <!-- Stack -->
                    <h6>Stack:</h6>
                    <div class="section-content stack-icons row align-items-center text-start py-4">
                        <div class="col-lg-2 col-md-2 col-sm-6">
                            <i class="fa-brands fa-2xl fa-linux"></i>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6">
                            <i class="fa-brands fa-2xl fa-windows"></i>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6">
                            <i class="fa-brands fa-2xl fa-python"></i>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6">
                            <i class="fa-brands fa-2xl fa-digital-ocean"></i>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6">
                            <i class="fa-brands fa-2xl fa-aws"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <i class="fa fa-2xl fa-users"></i>
                    <h4 class="segment-title py-2">DevOps/SRE</h4>
                    <p class="segment-details">
                        My experience in software development and systems engineering has enabled me to understand and appreciate the value of integrated processes with regard to how system management tenets of an organization can work with the software development teams to optimize the process of delivering value to businesses. I have and continue to utilize CI/CD and Agile concepts in my software development projects. I have a good understanding of Git, Docker, Azure DevOps and IaC among other key concepts of DevOps.
                    </p>
                    <!-- Stack -->
                    <h6>Stack:</h6>
                    <div class="section-content stack-icons row align-items-center text-start py-4">
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-2">
                            <i class="fa-brands fa-2xl fa-docker"></i>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-2">
                            <i class="fa-brands fa-2xl fa-atlassian col-xs-2"></i>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-2">
                            <i class="fa-brands fa-2xl fa-gitlab"></i>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-2">
                            <i class="fa-brands fa-2xl fa-hubspot"></i>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6">
                            <i class="fa-brands fa-2xl fa-git-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- WRITTINGS SECTION -->
        <div id="writtings" class="px-0 py-5 content-segment">
            <h3 class="section-title text-start py-5" style="font-weight:bold;">Sometimes I Write:</h3>
            <div class="section-content row align-items-center text-start">
                @include('home.medium-articles')
            </div>
        </div>
        <!-- CONTACT FORM & CALL TO ACTION -->
        <div id="footer" class="px-0 pt-5 pb-0 content-segment">
            <div class="row text-start px-0">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <h4 class="fw-bold py-3">Say hi</h4>
                        <p class="fs-3 py-4">I'm always open to discuss your project and talk about how I can help build solutions that deliver value.</p>
                        <div class="row">
                            <div class="col">
                                <span class="">Mail me at:</span>
                                <a class="d-block py-3" href="mailto:mulekea3@gmail.com">mulekea3@gmail.com</a>
                            </div>
                            <div class="col">
                                <span>Follow me:</span>
                                <ul id="social-icon-links" class="px-1">
                                    <li class="px-0 py-3">
                                        <a href="https://www.linkedin.com/in/andrew-muleke-b436676a/"><i class="fa-brands fa-linkedin-in"></i></a>
                                    </li>
                                    <li class="px-2 py-3">
                                        <a href="https://github.com/Mllexx"><i class="fa-brands fa-github"></i></a>
                                    </li>
                                    <!--
                                    <li class="px-2 py-3">
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    </li>
                                    -->
                                    <li class="px-2 py-3">
                                        <a href="https://amuleke.medium.com/"><i class="fa-brands fa-medium"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12 text-bg-dark">
                    <form name="website-contact-frm" id="website-contact-frm" method="post" class="form" action="{{ url('mailform') }}">
                        {{ csrf_field() }}
                        <input class="" type="text" id="name" required name="name" placeholder="Your name:"/>
                        <input class="" type="text" id="email_address" required name="email_address" placeholder="Your email address:"/>
                        <input class="" type="text" id="budget" name="budget" placeholder="Your budget:"/>
                        <textarea class="" rows="3" id="description" required name="description" placeholder="Your project's description:"></textarea>
                        <button class="btn btn-light">Submit</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <p class="pt-4 pb-0"> Copyright 	&copy; {{ Date('Y')  }}. All rights reserved</p>
            </div>
        </div>
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
