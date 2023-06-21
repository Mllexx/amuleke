<header class="d-flex mb-auto">
    <div id="logo" class="float-md-start mb-0">
        <a href="{{ url('/') }}">
            <img alt="logo" class="img-fluid" src="{{ asset("img/am-transparent-black-logo.svg") }}"  />
        </a>
    </div>
    <nav id="widescreen-nav" class="navbar-collapse nav nav-masthead justify-content-end float-md-end">
        <ul class="nav">
            <li><a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a></li>
            <li><a class="nav-link" href="#what-i-do">What I Do</a></li>
            <!--<li><a class="nav-link" href="{{ url('projects') }}">What I've Built</a></li>-->
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
            <li><a class="nav-link pr-0" aria-current="page" href="{{ url('/') }}">Home</a></li>
            <li><a class="nav-link pr-0" href="#what-i-do">What I Do</a></li>
            <!--<li><a class="nav-link" href="{{ url('projects') }}">What I've Built</a></li>-->
            <!--<li><a class="nav-link" href="projects">Projects</a></li>-->
        </ul>
    </nav>
</header>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EM0L4WRGTY"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-EM0L4WRGTY');
</script>
