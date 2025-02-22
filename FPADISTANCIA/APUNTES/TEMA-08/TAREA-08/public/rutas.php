<?php
if (!isset($_POST['wp'])) {
    header('Location:repartos.php');
    die();
}
$wp = $_POST['wp'];

?>
<!DOCTYPE html>
<html>

<head>
    <title>Ruta de Reparto</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="utf-8" />
    <script type='text/javascript'>
        function getParameterByName(name) {
            name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
            var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
                results = regex.exec(location.search);
            return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
        }
        var map, directionsManager;

        function GetMap() {
            map = new Microsoft.Maps.Map('#myMap', {
                credentials: 'PON_TU_KEY'
            });

            //Load the directions module.
            Microsoft.Maps.loadModule('Microsoft.Maps.Directions', function() {
                //Create an instance of the directions manager.
                directionsManager = new Microsoft.Maps.Directions.DirectionsManager(map);
                <?php
                for ($i = 0; $i < count($wp); $i++) {
                    //añadimos los puntos a la ruta, incluidos los del almacen
                    echo  "directionsManager.addWaypoint(new Microsoft.Maps.Directions.Waypoint({ location: new Microsoft.Maps.Location($wp[$i]) }));\n";
                }
                ?>


                //Set the request options that avoid highways and uses kilometers.
                directionsManager.setRequestOptions({
                    distanceUnit: Microsoft.Maps.Directions.DistanceUnit.km,
                    routeAvoidance: [Microsoft.Maps.Directions.RouteAvoidance.avoidLimitedAccessHighway]
                });

                //Make the route line thick and green. Replace the title of waypoints with an empty string to hide the default text that appears.
                directionsManager.setRenderOptions({
                    drivingPolylineOptions: {
                        strokeColor: 'green',
                        strokeThickness: 6
                    },
                    waypointPushpinOptions: {
                        title: ''
                    }
                });

                //Calculate directions.
                directionsManager.calculateDirections();
            });
        }
    </script>
    <script type='text/javascript' src='https://www.bing.com/api/maps/mapcontrol?callback=GetMap' async defer></script>
</head>

<body style="background:#00bfa5;">
    <div class="container mt-3 ">
        <div class="d-flex justify-content-center">
            <div id="myMap" style="width:650px;height:420px;"></div>
        </div>
        <div class="d-flex justify-content-center mt-3">
            <a href='repartos.php' class='btn btn-warning'>Volver</a>
        </div>
    </div>
</body>

</html>
