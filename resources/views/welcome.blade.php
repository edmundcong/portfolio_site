<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="icons/employee.png" rel="shortcut icon" type="image/png"/>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <meta content="width=device-width, initial-scale=1" name="viewport">
                    <title>
                        Edmund Cong
                    </title>
                    {{-- scripts --}}
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
                    </script>
                    <script src="/js/app.js">
                    </script>
                    <!-- Fonts -->
                    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
                        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
                            <!-- Styles -->
                            {{--
                            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
                                --}}
                                <link href="/css/app.css" rel="stylesheet" type="text/css">
                                    <link href="/css/style.css" rel="stylesheet" type="text/css">
                                    </link>
                                </link>
                            </link>
                        </link>
                    </link>
                </meta>
            </meta>
        </meta>
    </head>
    <body>
        {{-- include flash blade file --}}
        <div class="row" id="index-header">
            <div class="navbar-brand">
                <a href="https://au.linkedin.com/in/edmund-cong-6b41a4107">
                    <img alt="Brand" src="/icons/In-White-34px-TM.png">
                    </img>
                </a>
                <a href="https://github.com/edmundcong">
                    <img alt="Brand" src="/icons/GitHub-Mark-Light-32px.png">
                    </img>
                </a>
            </div>
        </div>
        @include ('flash')
        <div class="content" id="main_text">
            <div class="title m-b-md">
                <h5>
                    Edmund Cong
                </h5>
                <p class="lead">
                    A portfolio project
                </p>
            </div>
            <div class="row">
                <div class="links">
                    <div class="col-md-4">
                        <a href="/construction">
                            About Me
                        </a>
                    </div>
                    <div class="col-md-4" id="projectsDiv">
                        <div class="dropdown" id="buttonDiv">
                            <button aria-expanded="true" aria-haspopup="true" class="btn btn-success btn-block dropdown-toggle" data-toggle="dropdown" id="dropdownMenu1" type="button">
                                Projects
                                <span class="caret">
                                </span>
                            </button>
                            <ul aria-labelledby="dropdownMenu1" class="dropdown-menu">
                                <li>
                                    <a href="/cards/">
                                        Cards
                                    </a>
                                </li>
                                <li>
                                    <a href="/blastingoff">
                                        Blast Off with Bootstrap
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <a href="/construction">
                            Contact
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="iconInfoDiv" class="col-sm-1">
        <button aria-controls="collapseButton" aria-expanded="false" class="btn btn-link" data-target="#collapseButton" data-toggle="collapse" type="button">
            Wow! that is a
            <i>
                cool
            </i>
            favicon!
        </button>
        <div class="collapse" id="collapseButton">
            <div style="background-color: rgba(14, 10, 8, 0.85); width: 35vw;">
                Icons made by
                <a href="http://www.flaticon.com/authors/freepik" title="Freepik">
                    Freepik
                </a>
                from
                <a href="http://www.flaticon.com" title="Flaticon">
                    www.flaticon.com
                </a>
                is licensed by
                <a href="http://creativecommons.org/licenses/by/3.0/" target="_blank" title="Creative Commons BY 3.0">
                    CC 3.0 BY
                </a>
            </div>
        </div>
        </div>
    </body>
</html>
<script type="text/javascript">
    // find message and fade out after 3 seconds
        $("#alert_id").animate({opacity: 0}, 10000);

        $(function(){
            $(".dropdown").hover(            
                    function() {
                        $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                        $(this).toggleClass('open');
                        $('b', this).toggleClass("caret caret-up");                
                    },
                    function() {
                        $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                        $(this).toggleClass('open');
                        $('b', this).toggleClass("caret caret-up");                
                    });
            });
</script>
