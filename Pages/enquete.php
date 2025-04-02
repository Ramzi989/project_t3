<?php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../styles/HomePagina.css">
        <link rel="stylesheet" href="../styles/enquete.css">
        <title>Enquete</title>
    </head>
    <header>

    </header>
    <body>
        <div class="enquete-container">
                <div class="enquete-inhoud">
                    <form  method="post">
                        <h1>
                            Wat is uw naam?
                        </h1>
                        <input type="text" name="naam">
                        <p>
                            Wat is uw hoogst behaalde opleidingsniveau?
                        </p>
                        <input type="checkbox" name="opleidingsniveau" value="VMBO" required>VMBO <br>
                        <input type="checkbox" name="opleidingsniveau" value="HAVO" >HAVO <br>
                        <input type="checkbox" name="opleidingsniveau" value="VWO" >VWO <br>
                        <input type="checkbox" name="opleidingsniveau" value="MBO" >MBO <br>
                        <input type="checkbox" name="opleidingsniveau" value="HBO" >HBO <br>
                        <input type="checkbox" name="opleidingsniveau" value="UNI" >UNI <br>
                        <p>
                            Heeft u voorkeur voor een fulltime of parttime baan?
                        </p>
                        <input type="radio" name="dienstverband" value="fulltime" required>Fulltime<br>
                        <input type="radio" name="dienstverband" value="Parttime" required>Parttime<br>
                        <input type="radio" name="dienstverband" value="Stage" required>Stage<br>
                        <p>
                            In welke sector heeft u al werkervaring?
                        </p>
                        <input type="checkbox" name="werkervaring" value="Gezondheidszorg en welzijn" required>Gezondheidszorg en welzijn<br>
                        <input type="checkbox" name="werkervaring" value="Handel en dienstverlening" required>Handel en dienstverlening<br>
                        <input type="checkbox" name="werkervaring" value="ICT" required>ICT<br>
                        <input type="checkbox" name="werkervaring" value="Justitie, veiligheid en openbaar bestuur" required>Justitie, veiligheid en openbaar bestuur<br>
                        <input type="checkbox" name="werkervaring" value="Landbouw, natuur en visserij" required>Landbouw, natuur en visserij<br>
                        <input type="checkbox" name="werkervaring" value="Media en communicatie" required>Media en communicatie<br>
                        <input type="checkbox" name="werkervaring" value="Onderwijs, cultuur en wetenschap" required>Onderwijs, cultuur en wetenschap<br>
                        <input type="checkbox" name="werkervaring" value="Techniek, productie en bouw" required>Techniek, productie en bouw<br>
                            <input type="checkbox" name="werkervaring" value="Toerisme, recreatie en horeca" required>Toerisme, recreatie en horeca<br>
                        <input type="checkbox" name="werkervaring" value="Transport en logistiek" required>Transport en logistiek<br>
                        <input type="checkbox" name="werkervaring" value="ander" required>ander<br>
                        <p>
                            Wat zijn uw sterke punten op de werkvloer?
                        </p>
                        <input type="text" name="sterke-punten" required><br>
                        <p>
                            Wat vindt u belangrijk in een baan? (bijv. salaris, flexibiliteit, uitdaging)
                        </p>
                        <input type="checkbox" name="belangrijk" value="salaris" required>Salaris<br>
                        <input type="checkbox" name="belangrijk" value="flexibiliteit">Flexibiliteit<br>
                        <input type="checkbox" name="belangrijk" value="uitdaging">Uitdaging<br>
                        <input type="checkbox" name="belangrijk" value="doorgroeimogelijkheden">Doorgroeimogelijkheden<br>
                         andere:<input type="text" name="belangrijk">
                        <p>
                            Bent u bereid om in ploegendiensten te werken?
                        </p>
                        <input type="radio" name="ploegendiensten" value="ja" required>Ja<br>
                        <input type="radio" name="ploegendiensten" value="nee" required>Nee<br>
                        <p>
                            Hoe ver bent u bereid te reizen voor werk?
                        </p>
                        <input type="radio" name="reizen" value="Minder dan 10KM" required>Minder dan 10km<br>
                        <input type="radio" name="reizen" value="Tussen de 10 en 30km" >Tussen de 10 en 30km<br>
                        <input type="radio" name="reizen" value="Tussen de 30 en 50km" >Tussen de 30 en 50km<br>
                        <input type="radio" name="reizen" value="Meer dan 50km" >Meer dan 50km<br>
                        <p>
                            Heeft u een rijbewijs en/of eigen vervoer?
                        </p>
                        <input type="radio" name="rijbewijs" value="ja, rijbewijs en eigen vervoer" required>Ja, rijbewijs en eigen vervoer<br>
                        <input type="radio" name="rijbewijs" value="ja, alleen rijbewijs" >Ja, alleen rijbewijs<br>
                        <input type="radio" name="rijbewijs" value="Nee, geen rijbewijs en geen eigen vervoer" >Nee, geen rijbewijs en geen eigen vervoer<br>
                        <p>
                            Werkt u liever zelfstandig of in teamverband?
                        </p>
                        <input type="radio" name="zelfstandig/teamverband" value="zelfstandig" required>Zelfstandig<br>
                        <input type="radio" name="zelfstandig/teamverband" value="teamverband" >teamverband<br>
                        <p>
                            Wat voor soort werkomgeving spreekt u het meest aan? (bijv. kantoor, buiten, productie)
                        </p>
                        <input type="radio" name="werkomgeving" value="Kantoor" required>Kantoor<br>
                        <input type="radio" name="werkomgeving" value="Buiten" >Buiten<br>
                        <input type="radio" name="werkomgeving" value="Productie" >Productie<br>
                        ander: <input type="text" name="werkomgeving"><br>
                        <p>
                            Heeft u ervaring met klantenservice of verkoop?
                        </p>
                        <input type="radio" name="ervaring" value="ja, klantenservice" required>Ja, klantenservice<br>
                        <input type="radio" name="ervaring" value="ja, verkoop" >Ja, verkoop<br>
                        <input type="radio" name="ervaring" value="nee" >nee<br>
                        <p>
                            Bent u fysiek in staat om zware werkzaamheden te verrichten?
                        </p>
                        <input type="radio" name="fysiek" value="ja" required>ja<br>
                        <input type="radio" name="fysiek" value="nee" >nee<br>
                        <p>
                            Hoeveel uren per week wilt u werken?
                        </p>
                        <input type="radio" name="uren" value="Minder dan 20 uur" required>Minder dan 20uur<br>
                        <input type="radio" name="uren" value="20 tot 30 uur" >20 tot 30 uur<br>
                        <input type="radio" name="uren" value="30 tot 40 uur" >30 tot 40 uur<br>
                        <input type="radio" name="uren" value="Meer dan 40 uur" >Meer dan 40 uur<br>
                        <p>
                            Bent u op zoek naar tijdelijk of vast werk?
                        </p>
                        <input type="radio" name="vast" value="tijdelijk" required>Tijdelijk<br>
                        <input type="radio" name="vast" value="vast" >Vast<br>
                        <p>
                            Heeft u voorkeur voor specifieke bedrijven of sectoren?
                        </p>
                        <input type="radio" name="voorkeuren" value="ja" required>ja<br>
                        <input type="radio" name="voorkeurena" value="nee" >nee<br>


                        <input type="submit" value="verzenden">
                    </form>
                </div>
        </div>
    </body>
</html>
