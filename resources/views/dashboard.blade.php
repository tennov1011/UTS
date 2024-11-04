<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('/css/dashboard.css') }}">

</head>

<body>
    <div class="header">
        <!-- <a href="{{route('login')}}" class="logout-button">Log Out</a> -->
        <form role="form" method="POST" action="{{ route('logout') }}">
            @csrf
        <button type="submit" class="logout-button">Logout</button>
        </form>
        <!-- <button class="logout-button" onclick="logout()">Log Out</button> -->
        <h1>
            Tennov
        </h1>
        <div class="nav">
            <a href="#">
                Home
            </a>
            <a href="#">
                About
            </a>
            <a href="#">
                Services
            </a>
            <a href="#">
                Portfolio
            </a>
            <a href="#">
                Pricing
            </a>
            <a href="#">
                Blog
            </a>
            <a href="#">
                Contact
            </a>
        </div>
    </div>
    <div class="hero">
        <h2>
            Hi There!
            <br />
            I am Tennov
            <br />
            A Web Developer
        </h2>
        <p>
        </p>
        <div class="buttons">
            <a href="#">
                Hire Me
            </a>
            <a href="#">
                View Portfolio
            </a>
        </div>
        <div class="social">
            <a href="#">
                <i class="fab fa-facebook">
                </i>
            </a>
            <a href="#">
                <i class="fab fa-twitter">
                </i>
            </a>
            <a href="#">
                <i class="fab fa-linkedin">
                </i>
            </a>
        </div>
    </div>
    <div class="content">
        <img alt="Smiling man with arms crossed" height="400" src="./img/profilk.png" width="400" />
        <div class="tabs">
            <button class="active">
                ABOUT ME
            </button>
            <button>
                SKILLS
            </button>
            <button>
                EXPERIENCE
            </button>
        </div>
        <div class="text">
            <h3>
                My Story
            </h3>
            <p>
                A hard worker who never tires is an individual always ready to face challenges with high enthusiasm. They are disciplined and focused, striving to give their best in every task. Despite encountering difficulties, they do not give up easily and continuously seek solutions.
            </p>
            <p>
                <strong>
                    I Do Web Design &amp; Development since I was 18 Years Old
                </strong>
            </p>
        </div>
    </div>
</body>

</html>