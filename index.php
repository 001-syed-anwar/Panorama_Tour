<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panorama</title>
    <link rel="stylesheet" href="pannellum/pannellum.css">
    <script src="pannellum/pannellum.js"></script>
    <style>
        #panorama {
            width: 600px;
            height: 400px;
        }
    </style>
</head>

<body>
    <div id="panorama"></div>
    <script>
        pannellum.viewer('panorama', {
            "default": {
                "firstScene": "room1"
            },
            "scenes": {
                "room1": {
                    "type": "equirectangular",
                    "panorama": "images/room1.jpg",
                    "vaov": 54.15,
                    "yaw": 250,
                    "autoLoad": true,
                    "hotSpots": [
                        {
                            "hotSpotDebug": true,
                            "pitch": -10,
                            "yaw": 250,
                            "type": "scene",
                            "sceneId": "room2"
                        }]
                },
                "room2": {
                    "type": "equirectangular",
                    "panorama": "images/room2.jpg",
                    "vaov": 54.15,
                    "yaw": 100,
                    "autoLoad": true,
                    "hotSpots": [
                        {
                            "hotSpotDebug": true,
                            "pitch": -10,
                            "yaw": -60,
                            "type": "scene",
                            "sceneId": "room1",
                            "targetYaw": 100
                        }]
                }
            }
        });
    </script>

</body>

</html>
