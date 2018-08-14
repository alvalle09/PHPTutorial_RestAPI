<?php 
    if (!empty($_GET['location'])) {
        $maps_url = 'https://maps.googleapis.com/maps/api/geocode/json?address=' 
        .urlencode( $_GET['location']);
        //sample: https://maps.googleapis.com/maps/api/geocode/json?address=disneyland,ca
        
        //this returns json
        $maps_json = file_get_contents($maps_url);
        //convert to php array
        $maps_array = json_decode($maps_json, true );

        $lat = $maps_array['results'][0]['geometry']['location']['lat'];
        $lng = $maps_array['results'][0]['geometry']['location']['lng'];

        $instagram_url = 'https://api.instagram.com/media/search?lat=' . $lat . '&lang=' . $lng . 
                        '&client_id= aaaasdddfasdfdasff, myinstagram api key';

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Geogram</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
<form action="" method="get"> <!--leave action method blank to submit to the address of current page  -->
    <input type="text" name="location"/>   
    <button type="submit">submit</button>


</form>
<br/>
<div id="results" >
    <?php
    /*if () {        
        }
    }*/
    ?>
</div>
</body>
</html>