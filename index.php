<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Television</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        * {
            box-sizing: border-box;
        }

        #myVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
        }

        .content {
            position: fixed;
            text-align: center;
            width: 100%;
        }

        .container {
            display: flex;
            /* convierte el contenedor en un contenedor flexible */
            justify-content: center;
            /* alinea horizontalmente el contenido al centro */
            align-items: center;
            /* alinea verticalmente el contenido al centro */
            max-width: 100%;
        }

        @media (max-width: 100%) {
            .container {
                margin: 0 10px;
            }
        }

        #myBtn {
            background-color: #555555;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;

        }

        .btn {
            background-color: black;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;

        }

        #myBtn:hover {
            background: #ddd;
            color: black;
        }

        #iframe {
            position: fixed;
            top: 0px;
            left: 0px;
            bottom: 0px;
            right: 0px;
            width: 100%;
            height: 100%;
            border: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            z-index: 999999;
        }
    </style>
</head>

<body>
    <!-- <a href="#" onclick="loadContent('https')">Cargar</a> -->
    <!-- <iframe id="iframe" width="505" height="400" src="https://embed.pelotalibre.com/mpdk.html?get=Ly9saXZlNC1vdHQuaXp6aWdvLnR2L291dC91L2Rhc2gvQVpURUNBLTctSEQvZGVmYXVsdC5tcGQ=&key=Y2U4Zjg2ZDJmMGQxNjM4NTc0MjM3YWRhOGFjMmU4MmE=&key2=NjQyNzcyZWJmMTgzMmYxZjJmYTU4Y2I3ZThmY2ZkMDU="></iframe> -->
    <?php
    $host = '156.67.73.101';
    $user = 'u569132287_utselva';
    $password = 'p8YVz5HD6=P';
    $db = 'u569132287_utselva';
    $conn = mysqli_connect($host, $user, $password, $db);
    if (!$conn) {
        die("Connection error: " . mysqli_connect_error());
    }
    $conn = new mysqli($host, $user, $password, $db);
    if ($conn->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    } else {
        $result = $conn->query("SELECT * FROM canales");
    }
    ?>

    <div class="content">
        <div class="w3-container">
            <div id="modal01" class="w3-modal">
                <?php
                if ($result == true) {
                    while ($row = $result->fetch_row()) {
                        $canal = $row[0];
                        $link = $row[4];
                        $nombre = $row[2];
                        $descripcion = $row[3];
                        echo "<a class='btn' href='$link' target='_blank'>$nombre</a>";
                    }
                    $result->close();
                }
                ?>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        // function loadContent(url) {
        //     console.log('hola mundio');
        //     document.getElementById("iframe").src = url;
        // }
        // $("a").click(function(event) {
        //     event.preventDefault(); // Evita la acción predeterminada del enlace
        //     $(this).prop("disabled", true); // Deshabilita el enlace
        // });


        $(document).ready(function() {
            $(".ad").remove(); // Elimina todos los elementos con la clase "ad"
        });
    </script>

</body>

</html>