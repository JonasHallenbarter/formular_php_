<head>
    <title>Ergebis | Willkommen! | Jonas Hallenbarter</title>
    <meta charset="utf-8">
   	<html lang='de'>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="logo_web.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
  	<meta name="author" content="Jonas Hallenbarter">
  	<meta name='description' content='Hallo, ich bin Jonas Hallenbarter | Lernender Mediamatiker | Über mich | Email'>
	<!--Adobe Schriftart Gibson-->
    <link rel="stylesheet" href="https://use.typekit.net/clc0wrn.css">
    <!--Bootstap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!--Bootstap Javascript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body class="style2">

    <header class="bg-index">
            <a id="logoid"><img class="logoheader" src="roodoky-gross.png" alt="logo"></a>
            <h1>Ihre Meinung ist uns wichtig!</h1>
            <h3>www.roodoky.ch | artificial intelligent</h3>
    </header>
    
    <div class="card2">      
        <h1>Vielen Dank!</h1>
        <p>Gerne möchten wir uns in Form eines Gutscheines bei Ihnen Bedanken</p>
        <p>Folgende Daten wurden gespeichert:</p>
        <div>
            
            - <?php echo $_POST["geschlecht"]; ?><br>
            - <?php echo $_POST["vorname"]; ?> <?php echo $_POST["name"]; ?><br>
            <br>
            - Firma: <?php echo $_POST["firma"]; ?><br>
            - Adresse: <?php echo $_POST["strasse"]; ?> <?php echo $_POST["plz"]; ?> <?php echo $_POST["ort"]; ?><br>
            <br>
            - Mail: <?php echo $_POST["mail"]; ?><br>
            <br>
            - Zufrieden: <?php echo $_POST["auszufrieden"]; ?>/10<br>
            - Kommentar: <?php echo $_POST["kommentarzufriedenheit"]; ?><br>
            <br>
            - Preisleistungsverhältnis: <?php echo $_POST["leitsungsverhaeltnis"]; ?>/10<br>
            - Kommentar: <?php echo $_POST["leistungsverhaeltniskommentar"]; ?><br>
            <br>
            - Liebslingssortiment: <?php echo $_POST["speise-pizza"]; ?> <?php echo $_POST["speise-fastfood"]; ?> <?php echo $_POST["speise-dessert"]; ?><br>
            - Kommentar: <?php echo $_POST["verbesserungkommentar"]; ?><br>
            <br>
            - Bereich, in dem wir uns verbessern sollten: <?php echo $_POST["qualität"]; ?> <?php echo $_POST["guenstig"]; ?> <?php echo $_POST["preisleistung"]; ?> <?php echo $_POST["ort"]; ?> <?php echo $_POST["tisch"]; ?> <?php echo $_POST["mitarbeiter"]; ?><br>
            - Wünsche: <?php echo $_POST["wunschkommentar"]; ?><br>
            <br>
           
        </div>

        <h1 class="mt-5">Gutschein</h1>
    
        <div class="container">
            <div class="row">
                <div class="col">
                    <img class="qr" src="qrcode.png" alt="Rabattcode=183719" />
                </div>
                <div class="col">
                    <p>Sie erhalten einen Gutschein für eine Pizza. Mit diesem Code können Sie bei uns am Terminal einlösen. </p>
                </div>
                
            </div>
        </div>
    

    

    </div>


    <footer>
    <div class="container dfooter">
        <div class="row">
            <div class="col-12">
                <img src="roodoky-gross.png" class="footerlogo" alt="footerlogo">
            </div>
            <div class="col-12">
                Roodoky | A artificial intelligent | ©2022
            </div>
            
        </div>
        </div>

    </footer>


    
</body>

