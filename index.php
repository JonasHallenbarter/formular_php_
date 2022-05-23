<head>
    <title>Willkommen! | Jonas Hallenbarter</title>
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
    
    <!--Form-->
    <form action="ergebnis.php" method="post" class="needs-validation backgroundform" novalidate>
    

    <div class="card2">      
        
        
        <!--Text 1-->
        <div class="textarea">
            <h1>Zu Ihrer Person</h1>
            <p>Geben Sie Angaben zu Ihrer Person ein</p>
        </div>

        
            <div class="col-md-4">
                    <label for="inputgeschlecht" class="form-label">Geschlecht</label>
                    <select name="geschlecht" id="inputState" class="form-select">
                    <option selected>Geschlecht</option>
                        <option>Herr</option>
                        <option>Frau</option>
                        <option>Anderes</option>
                    </select>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Vorname*</label>
                    <input type="vorname" name="vorname" class="form-control" id="inputEmail4" required>
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Name*</label>
                    <input type="name" name="name" class="form-control" id="inputEmail4" required>
                </div>
            
            </div><!--Div Row-->
            


            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Firma</label>
                <input type="firma" name="firma" class="form-control" id="inputEmail4">
            </div>   

            <div class="row">
                <div class="col-4">
                    <label for="inputstrasse" class="form-label">Strasse</label>
                    <input type="text" name="strasse" class="form-control" id="inputAddress" placeholder="Gewerbestrasse 2" required>
                </div>
                <div class="col-4">
                    <label for="inputplz" class="form-label">PLZ</label>
                    <input type="number" name="plz" class="form-control" id="inputAddress2" placeholder="3930" required>
                </div>
                
                <div class="col-md-4">
                    <label for="inputort" class="form-label">Ort</label>
                    <input type="text" name="ort" class="form-control" id="inputCity" placeholder="Visp" required>
                </div>
            </div><!--Div Row-->

            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" name="mail" class="form-control" id="inputEmail4" required>
            </div>

            
            </div>
            
            

        
        </div>

        <!--NEUE FRAGE-->
     
        <div class="card3">
            
            <!--Text-->
                <div class="textarea">
                    <h1>Wie zufrieden sind Sie mit Rodooky</h1>
                    <p>Falls Sie eine Anmerkung dazu haben, können Sie und dies in den Kommentaren gerne wissen lassen</p>
                </div>

        
            <div class="col-md-4 mb-3">
                    <label for="inputzufrieden" class="form-label">Auswahl</label>
                    <select id="inputState" name="auszufrieden" class="form-select" required>
                        <option selected></option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                        </select>
            </div>
            
            <div class="form-floating">
                <textarea name="kommentarzufriedenheit" class="form-control" placeholder="Kommentar" id="floatingTextarea"></textarea>
                <label for="floatingTextarea">Comments</label>
            </div>

            
        </div><!--end card 3-->

        <div class="card3">
            
            <!--Text-->
                <div class="textarea">
                    <h1>Preis / Leistungsverhältnis</h1>
                    <p>Stimmt der Preis für die erbrachte Leistung?</p>
                </div>

        
            <div class="col-md-4 mb-3">
                    <label for="inputleistungsverhaeltnis" class="form-label">Preis / Leistungsverhältnis</label>
                    <select name="leitsungsverhaeltnis" id="inputState" class="form-select" required>
                        <option selected></option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                        </select>
            </div>
            
            <div class="form-floating">
                <textarea name="leistungsverhaeltniskommentar" class="form-control" placeholder="Kommentar" id="floatingTextarea"></textarea>
                <label for="floatingTextarea">Comments</label>
            </div>

            
        </div><!--end card 3-->

        <div class="card3">
            
        

            <!--Text-->
            <div>    
                <div class="textarea">
                    <h1>Welche Speise essen Sie bei uns am liebsten?</h1>
                    <p>Wir bieten Pizzas, Fastfood & verschiedene Desserts an</p>
                </div>

                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" value="Pizza" type="radio" name="speise-pizza" id="exampleRadios1">
                        <label class="form-check-label" for="exampleRadios1">
                            Pizza
                        </label>
                    </div>
                        <div class="form-check">
                        <input class="form-check-input" value="Fastfood" type="radio" name="speise-fastfood" id="exampleRadios1">
                        <label class="form-check-label" for="exampleRadios1">
                            Fastfood
                        </label>
                    </div>
                    </div>
                        <div class="form-check">
                        <input class="form-check-input" value="Desserts" type="radio" name="speise-dessert" id="exampleRadios1">
                        <label class="form-check-label" for="exampleRadios1">
                            Desserts
                        </label>
                    </div>
                    
                    
                </div>
                            
            <div class="form-floating">
                <textarea class="form-control" placeholder="Kommentar" id="floatingTextarea"></textarea>
                <label name="verbesserungkommentar" for="floatingTextarea">Comments</label>
            </div>

            

            
            
        </div>

        <div class="card3">
            

            <!--Text-->
                <div class="textarea">
                    <h1>Welche Produkte fehlen</h1>
                    <p>In welchem Segment sollten wir die Produktpalette vergrössern?</p>
                </div>

                <div class="mb-3">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Pizza">
                        <label class="form-check-label" for="inlineCheckbox1">Pizza</label>
                        
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Fastfood">
                        <label class="form-check-label" for="inlineCheckbox2">Fastfood</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Dessert">
                        <label class="form-check-label" for="inlineCheckbox3">Dessert</label>
                    </div>
                    
                    
                </div>
                            
            <div class="form-floating">
                <textarea name="verbesserungkommentar" class="form-control" placeholder="Kommentar" id="floatingTextarea"></textarea>
                <label for="floatingTextarea">Kommentar</label>
            </div>

            

            
        </div>

        <div class="card3">
            

            <!--Text-->
                <div class="textarea">
                    <h1>Auf welche Punkte legen Sie besonders Wert</h1>
                </div>

                <div class="mb-3">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="qualität" name="qualität">
                        <label class="form-check-label" for="inlineCheckbox1">Qualität</label>
                        
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="guenstig" name="guenstig">
                        <label class="form-check-label" for="inlineCheckbox2">Günstig</label>
                    </div>
                    <div class="form-check form-check-inline    ">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="preisleistung" name="preisleistung">
                        <label class="form-check-label" for="inlineCheckbox3">Preis / Leistungsverhältnis</label>
                    </div>
                    <div class="form-check form-check-inline    ">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="ort" name="ort">
                        <label class="form-check-label" for="inlineCheckbox3">Ort</label>
                    </div>
                    <div class="form-check form-check-inline    ">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="tisch" name="tisch">
                        <label class="form-check-label" for="inlineCheckbox3">Tische vor Ort</label>
                    </div>
                    <div class="form-check form-check-inline    ">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="mitarbeiter" name="mitarbeiter">
                        <label class="form-check-label" for="inlineCheckbox3">Mitarbeiter</label>
                    </div>
                    
                </div>
                            
            <div class="form-floating">
                <textarea name="wunschkommentar" class="form-control" placeholder="Kommentar" id="floatingTextarea"></textarea>
                <label for="floatingTextarea">Kommentar</label>
            </div>

            

            <button type="submit" class="btn btn-primary mt-4">Submit</button>
            
        </div>

        </form><!--end form-->


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

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
                })
            })()

    </script>
</body>

