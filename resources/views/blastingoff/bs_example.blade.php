<!DOCTYPE html>
<html>
    <head>
        <link href="icons/employee.png" rel="shortcut icon" type="image/png"/>
        <!-- charset to allow for registered trademark to not break browser font rendering with random 'A' hat -->
        <meta charset="utf-8">
            <title>
                Blasting Off with Bootstrap
            </title>
            <link href="css/app.css" rel="stylesheet">
                <!-- must add our own custom css after Bootstrap to override -->
                <link href="css/bs_example.css" rel="stylesheet" type="text/css">
                    <!-- BS needs JQuery to function. Must import JQuery first before bootstrap.js -->
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
                    </script>
                    <script src="js/bootstrap.min.js">
                    </script>
                </link>
            </link>
        </meta>
    </head>
    <body>
        <!-- good idea to make div containers for logical chunks. e.g. header, body of content, footer -->
        <!-- navbar-inverse adds the background colour across the entire page -->
        <!-- navbar-static-top lets bootstrap know we want it at the always top (wont scroll) -->
        <!-- fixed poitions mean the navbar wont scroll with the page -->
        <!-- if you want to have it fixed then you will need to add some padding to counteract the overlap that the bar will have. add body { padding-top: 70px } to counteract this. -->
        <!-- nav and navbar: nav is a basic building block (e.g. tabs) and can have many per site, while navbar is for a navigation bar and should only have one per site -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <!-- container centres the content of our nav -->
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">
                        Blasting Off With Bootstrap
                    </a>
                    <!-- navigation bar class for unordered list -->
                    <!-- collapse will hide it, navbar collapse will bring it back for larger screens -->
                    <!-- navbar-toggle will float the element to the right -->
                    <!-- toggle the existence of the collapse class on an element that has the class navbar-collapse -->
                    <!-- data.* built in bootstrap js classes -->
                    <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
                        <span class="sr-only">
                            <!-- will only show for screen reading software -->
                            Toggle navigation
                        </span>
                        <span class="icon-bar">
                        </span>
                        <span class="icon-bar">
                        </span>
                        <span class="icon-bar">
                        </span>
                    </button>
                </div>
                <ul class="nav navbar-nav navbar-right collapse navbar-collapse">
                    <li>
                        <a href="#">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Tickets
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Stations
                        </a>
                    </li>
                    <li class="dropdown">
                        <!-- data toggle will add dropdown behaviour to about link -->
                        <!-- li is the parent of the a href tag. -->
                        <!-- if older browser with no js then will go to about.html, otherwise they will go to # since data-target is js only and hence must have js -->
                        <a data-target="#" data-toggle="dropdown" href="about.html">
                            About
                            <span class="caret">
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">
                                    Our Story
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Contact Us
                                </a>
                            </li>
                            <li class="divider">
                            </li>
                            <li>
                                <a href="#">
                                    Facebook
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Notes: -->
        <!-- container-fluid class allows for stretching if it is desired on larger screens. As opposed to container which keeps the size at a certain size as to wrap content. -->
        <!-- container class makes the content not wrap to the edge of the page. Adds responsive margins, centres, and wraps our content. -->
        <!-- <div class='col-md-3 col-md-offset-1'></div> this allows for an inivisible padding grid for spacing -->
        <!-- this div will be centred in the midle -->
        <div class="container">
            <!-- add row to every div/set of divs (cannot exceed 12) to let bootstrap know to expect a grid  -->
            <!-- <div class="row"> -->
            <!-- columns must sum up to 12 -->
            <!-- md: medium device (e.g. laptops) -->
            <!-- <div class="col-sm-12"> -->
            <!-- navbar-brand should be used for your brand logo, name, etc -->
            <!-- </div> -->
            <!-- </div> -->
            <!-- well gives a simple inset effect (inset: putin or inserted) -->
            <!-- well-lg will add more padding -->
            <div class="row well well-lg">
                <div class="col-sm-6">
                    <h2>
                        The Fastest Way to Space
                    </h2>
                    <!-- not a header but we want it to stand out more than the other text on the page. so we'll give it the class 'lead' -->
                    <p class="lead">
                        Make your way to space in the comfort of your own rocket, elevator or transporter.
                    </p>
                    <button class="btn btn-lg btn-default" type="button">
                        Take the Tour
                    </button>
                    <button class="btn btn-lg btn-primary" type="button">
                        Book Tickets Now
                    </button>
                </div>
                <!-- only show image for medium and large screens -->
                <!-- hidden-[size device e.g. sm]: hides for size device -->
                <!-- visible-[size device]: only shows for size device -->
                <div class="col-sm-6 visible-md visible-lg">
                    <img alt="Blasting Off!" src="images/blast.png"/>
                </div>
            </div>
            <!--         </div>  -->
            <!-- now this div will take up entire page -->
            <!--         <div class="container-fluid"> -->
            <!--         <div class="container">-->
            <!-- text-center class will centre all text in the row -->
            <div class="top-buffer">
            </div>
            <div class="row text-center features">
                <!-- col-sm-offset-0: overrides the x(tra) s(mall) attributes and allows sm (and above) to be applied -->
                <div class="col-sm-4 col-xs-10 col-xs-offset-1 col-sm-offset-0">
                    <!-- icon and italicise tag -->
                    <i class="glyphicon glyphicon-briefcase">
                    </i>
                    <h3>
                        Book Today!
                    </h3>
                    <p>
                        Even if you're traveling tomorrow, you can still get tickets today. We have a number of conveniently located ports around the globe to service anyone.
                    </p>
                </div>
                <div class="col-sm-4 col-xs-6">
                    <i class="glyphicon glyphicon-random">
                    </i>
                    <h3>
                        Go Anywhere
                    </h3>
                    <p>
                        If you need to get to space today, why not try out a transporter? Despite the claims, there have been no deaths in the last
                        <i>
                            6 weeks!
                        </i>
                    </p>
                </div>
                <div class="col-sm-4 col-xs-6">
                    <i class="glyphicon glyphicon-send">
                    </i>
                    <h3>
                        RocketBus®
                    </h3>
                    <p>
                        For cheapest fares, catch the next RocketBus® to the stars. Cheaper on your wallet, and easiest way to make friends.
                    </p>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-md-3 col-xs-6">
                        <h4>
                            Who We Are
                        </h4>
                        <p>
                            <i>
                                Blasting Off With Bootstrap
                            </i>
                            is the fastest way to space.
                            <a href="#">
                                Book your ticket today
                            </a>
                            !
                        </p>
                        <p>
                            <a href="#">
                                More About Us
                                <i class="glyphicon glyphicon-arrow-right">
                                </i>
                            </a>
                        </p>
                    </div>
                    <div class="col-sm-2 col-xs-6 col-md-offset-1">
                        <h4>
                            Links
                        </h4>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Tickets
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Stations
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- allows the container to wrap its floated children. here it i -->
                    <div class="clearfix visible-xs">
                    </div>
                    <div class="col-sm-2 col-xs-6">
                        <h4>
                            Stay in Touch
                        </h4>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">
                                    About
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Contact Us
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Twitter
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Facebook
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 col-md-offset-1 col-xs-6">
                        <h4>
                            Contact Us
                        </h4>
                        <ul class="list-unstyled">
                            <li>
                                <i class="glyphicon glyphicon-globe">
                                </i>
                                Orlando, FL
                                <li>
                                    <li>
                                        <i class="glyphicon glyphicon-phone">
                                        </i>
                                        1-555-blast-off
                                        <li>
                                            <li>
                                                <i class="glyphicon glyphicon-envelope">
                                                </i>
                                                <a href="mailto:#">
                                                    blastingoff@codeschool.com
                                                </a>
                                                <li>
                                                </li>
                                            </li>
                                        </li>
                                    </li>
                                </li>
                            </li>
                        </ul>
                        <p>
                            Blasting Off With Bootstrap ©2214.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
