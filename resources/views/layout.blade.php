<!DOCTYPE doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            @yield('header')
            <title>
                Document
            </title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
                {{-- Stylesheets --}}
                <link href="/css/app.css" rel="stylesheet" type="text/css">
                    {{-- override --}}
                    {{--
                    <link href="/css/style.css" rel="stylesheet" type="text/css">
                        --}}
                    </link>
                </link>
            </link>
        </meta>
    </head>
    <body>
        {{-- take the section called 'content' and insert it here --}}
        {{-- this means that we can now pass this page around and add HTML to where the content yield is --}}
        <div class="container">
            @yield('content')
        </div>
        @yield('footer')
    </body>
</html>