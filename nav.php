<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="css/nav.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!--
<nav class="navbar navbar-expand-sm navbar-dark sticky-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li id="home" class="nav-item active">
                <a class="nav-link" href="index.php">Home </a>
            </li>
            <li id="cv" class="nav-item">
                <a class="nav-link" href="cv.php">cv</a>
            </li>
            <li id="projects" class="nav-item">
                <a class="nav-link" href="projects.php">projects</a>
            </li>
        </ul>
    </div>
</nav>
-->
<nav class="navbar navbar-expand-sm navbar-dark sticky-top">
    <a class="navbar-brand" href="#">Noah Kühne</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
            <li id="home" class="nav-item active">
                <a class="nav-link" href="index.php">Home </a>
            </li>
            <li id="cv" class="nav-item">
                <a class="nav-link" href="cv.php">cv</a>
            </li>
            <li id="projects" class="nav-item">
                <a class="nav-link" href="projects.php">projects</a>
            </li>
        </ul>
    </div>
</nav>

<script>
    $(function (){
        const path = window.location.pathname;
        switch (path){
            case "/wabsideTest/index.php":
                $("#home").attr("class",'nav-item active')
                $("#cv").attr("class", "nav-item")
                $("#projects").attr("class",'nav-item')
                break;
            case "/wabsideTest/cv.php":
                $("#cv").attr("class",'nav-item active')
                $("#home").attr("class",'nav-item ')
                $("#projects").attr("class",'nav-item')
                break;
            case "/wabsideTest/projects.php":
                $("#home").attr("class",'nav-item')
                $("#cv").attr("class","nav-item")
                $("#projects").attr("class",'nav-item active')
                break;
        }
    })

</script>
