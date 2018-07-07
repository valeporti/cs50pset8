<!--

index.html

Computer Science 50
Problem Set 8

A mashup of Google Maps and Google News.

-->

<!DOCTYPE html>

<html>
    <head>

        <!-- http://getbootstrap.com/ -->
        <link href="/public/css/bootstrap.min.css" rel="stylesheet"/>

        <!-- app's own CSS -->
        <link href="/public/css/styles.css" rel="stylesheet"/>

        <!-- https://developers.google.com/maps/documentation/javascript/ -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>

        <!-- http://google-maps-utility-library-v3.googlecode.com/svn/tags/markerwithlabel/1.1.10/ -->
        <script src="/public/js/markerwithlabel_packed.js"></script>

        <!-- http://jquery.com/ -->
        <script src="/public/js/jquery-1.11.3.min.js"></script>

        <!-- http://getbootstrap.com/ -->
        <script src="/public/js/bootstrap.min.js"></script>

        <!-- http://underscorejs.org/ -->
        <script src="/public/js/underscore-min.js"></script>

        <!-- https://github.com/twitter/typeahead.js/ -->
        <script src="/public/js/typeahead.jquery.min.js"></script>

        <!-- app's own JavaScript -->
        <script src="/public/js/scripts.js"></script>

        <title>Mashup</title>

    </head>
    <body>

        <!-- fill viewport -->
        <div class="container-fluid">

            <!-- https://developers.google.com/maps/documentation/javascript/tutorial -->
            <div id="map-canvas"></div>

            <!-- http://getbootstrap.com/css/#forms -->
            <form class="form-inline" id="form" role="form">
                <div class="form-group">
                    <label class="sr-only" for="q">City, State, Postal Code</label>
                    <input class="form-control" id="q" placeholder="City, State, Postal Code" type="text"/>
                </div>
            </form>
        </div>

    </body>
</html>