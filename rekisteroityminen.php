<?php
$title = "Rekisteröityminen";
$css = "rekisteroituminen.css";

include "headers.php";

?>
<body>
<?php include "navigointi.php"; ?>
<div class="container mt-5 pt-4">
<h2>Rekisteröityminen Tallin koulutuksiin</h2>
<form action="sendmail.php" method="POST" class="needs-validation" novalidate>
    <legend>Henkilötiedot</legend>
    <div class="form-group col-sm-6">
    <label for="nimi" class="label-responsive form-label-sm">Nimi:</label>
    <input type="text" id="nimi" name="nimi"  title="Kirjoita nimi (väh. 2 merkkiä) ilman erikoismerkkejä" class="form-control" pattern="[A-ZÅÄÖa-zåäö \-']{2,}" required>
    <div class="invalid-feedback">Anna nimi oikeassa muodossa</div>
    </div>
    

    <div class="form-group col-sm-6">
    <label for="katuosoite" class="label-responsive form-label-sm">Katuosoite:</label>
    <input type="text" class="form-control" id="katuosoite" name="katuosoite" title="Kirjoita katuosoitteesi" pattern="[A-ZÅÄÖa-zåäö0-9 \-]*" required>
    <div class="invalid-feedback">Anna katuosoite</div>
    </div>
    

    <div class="form-group col-sm-6">
    <label for="postinumero" class="label-responsive form-label-sm">Postinumero:</label>
    <input type="text" class="form-control" id="postinumero" name="postinumero" title="Kirjoita postinumerosi" pattern="\d{5}" required>
    <div class="invalid-feedback">Anna postinumer vain 5 numeroa</div>
    </div>
    
    
    <div class="form-group col-sm-6">
    <label for="kaupunki" class="label-responsive form-label-sm">Kaupunki:</label>
  <input type="text" class="form-control" id="kaupunki" name="kaupunki" list="kaupungit" title="Kirjoita kaupunkisi tai valitse listalta" pattern="[A-ZÅÄÖa-zåäö \-]+" required>
  <datalist id="kaupungit">
      <option value="Akaa">
      <option value="Alajärvi">
      <option value="Alavieska">
      <option value="Alavus">
      <option value="Asikkala">
      <option value="Askola">
      <option value="Aura">
      <option value="Brändö">
      <option value="Eckerö">
      <option value="Enonkoski">
      <option value="Enontekiö">
      <option value="Espoo">
      <option value="Eura">
      <option value="Eurajoki">
      <option value="Evijärvi">
      <option value="Finström">
      <option value="Forssa">
      <option value="Föglö">
      <option value="Geta">
      <option value="Haapajärvi">
      <option value="Haapavesi">
      <option value="Hailuoto">
      <option value="Halsua">
      <option value="Hamina">
      <option value="Hammarland">
      <option value="Hankasalmi">
      <option value="Hanko">
      <option value="Harjavalta">
      <option value="Hartola">
      <option value="Hattula">
      <option value="Hausjärvi">
      <option value="Heinola">
      <option value="Heinävesi">
      <option value="Helsinki">
      <option value="Hirvensalmi">
      <option value="Hollola">
      <option value="Huittinen">
      <option value="Humppila">
      <option value="Hyrynsalmi">
      <option value="Hyvinkää">
      <option value="Hämeenkoski">
      <option value="Hämeenlinna">
      <option value="Ii">
      <option value="Iisalmi">
      <option value="Iitti">
      <option value="Ikaalinen">
      <option value="Ilmajoki">
      <option value="Ilomantsi">
      <option value="Imatra">
      <option value="Inari">
      <option value="Inkoo">
      <option value="Isojoki">
      <option value="Isokyrö">
      <option value="Jalasjärvi">
      <option value="Janakkala">
      <option value="Joensuu">
      <option value="Jokioinen">
      <option value="Jomala">
      <option value="Joroinen">
      <option value="Joutsa">
      <option value="Juuka">
      <option value="Juupajoki">
      <option value="Juva">
      <option value="Jyväskylä">
      <option value="Jämijärvi">
      <option value="Jämsä">
      <option value="Järvenpää">
      <option value="Kaarina">
      <option value="Kaavi">
      <option value="Kajaani">
      <option value="Kalajoki">
      <option value="Kangasala">
      <option value="Kangasniemi">
      <option value="Kankaanpää">
      <option value="Kannonkoski">
      <option value="Kannus">
      <option value="Karijoki">
      <option value="Karkkila">
      <option value="Karstula">
      <option value="Karvia">
      <option value="Kaskinen">
      <option value="Kauhajoki">
      <option value="Kauhava">
      <option value="Kauniainen">
      <option value="Kaustinen">
      <option value="Keitele">
      <option value="Kemi">
      <option value="Kemijärvi">
      <option value="Keminmaa">
      <option value="Kemiönsaari">
      <option value="Kempele">
      <option value="Kerava">
      <option value="Keuruu">
      <option value="Kihniö">
      <option value="Kinnula">
      <option value="Kirkkonummi">
      <option value="Kitee">
      <option value="Kittilä">
      <option value="Kiuruvesi">
      <option value="Kivijärvi">
      <option value="Kokemäki">
      <option value="Kokkola">
      <option value="Kolari">
      <option value="Konnevesi">
      <option value="Kontiolahti">
      <option value="Korsnäs">
      <option value="Koski Tl">
      <option value="Kotka">
      <option value="Kouvola">
      <option value="Kristiinankaupunki">
      <option value="Kruunupyy">
      <option value="Kuhmo">
      <option value="Kuhmoinen">
      <option value="Kuopio">
      <option value="Kuortane">
      <option value="Kurikka">
      <option value="Kustavi">
      <option value="Kuusamo">
      <option value="Kyyjärvi">
      <option value="Kärkölä">
      <option value="Kärsämäki">
      <option value="Kökar">
      <option value="Lahti">
      <option value="Laihia">
      <option value="Laitila">
      <option value="Lapinjärvi">
      <option value="Lapinlahti">
      <option value="Lappajärvi">
      <option value="Lappeenranta">
      <option value="Lapua">
      <option value="Laukaa">
      <option value="Lemi">
      <option value="Lemland">
      <option value="Lempäälä">
      <option value="Leppävirta">
      <option value="Lestijärvi">
      <option value="Lieksa">
      <option value="Lieto">
      <option value="Liminka">
      <option value="Liperi">
      <option value="Loimaa">
      <option value="Loppi">
      <option value="Loviisa">
      <option value="Luhanka">
      <option value="Lumijoki">
      <option value="Lumparland">
      <option value="Luoto">
      <option value="Luumäki">
      <option value="Luvia">
      <option value="Maalahti">
      <option value="Maarianhamina">
      <option value="Marttila">
      <option value="Masku">
      <option value="Merijärvi">
      <option value="Merikarvia">
      <option value="Miehikkälä">
      <option value="Mikkeli">
      <option value="Muhos">
      <option value="Multia">
      <option value="Muonio">
      <option value="Mustasaari">
      <option value="Muurame">
      <option value="Mynämäki">
      <option value="Myrskylä">
      <option value="Mäntsälä">
      <option value="Mänttä-Vilppula">
      <option value="Mäntyharju">
      <option value="Naantali">
      <option value="Nakkila">
      <option value="Nivala">
      <option value="Nokia">
      <option value="Nousiainen">
      <option value="Nurmes">
      <option value="Nurmijärvi">
      <option value="Närpiö">
      <option value="Orimattila">
      <option value="Oripää">
      <option value="Orivesi">
      <option value="Oulainen">
      <option value="Oulu">
      <option value="Outokumpu">
      <option value="Padasjoki">
      <option value="Paimio">
      <option value="Paltamo">
      <option value="Parainen">
      <option value="Parikkala">
      <option value="Parkano">
      <option value="Pedersören kunta">
      <option value="Pelkosenniemi">
      <option value="Pello">
      <option value="Perho">
      <option value="Pertunmaa">
      <option value="Petäjävesi">
      <option value="Pieksämäki">
      <option value="Pielavesi">
      <option value="Pietarsaari">
      <option value="Pihtipudas">
      <option value="Pirkkala">
      <option value="Polvijärvi">
      <option value="Pomarkku">
      <option value="Pori">
      <option value="Pornainen">
      <option value="Porvoo">
      <option value="Posio">
      <option value="Pudasjärvi">
      <option value="Pukkila">
      <option value="Punkalaidun">
      <option value="Puolanka">
      <option value="Puumala">
      <option value="Pyhtää">
      <option value="Pyhäjoki">
      <option value="Pyhäjärvi">
      <option value="Pyhäntä">
      <option value="Pyhäranta">
      <option value="Pälkäne">
      <option value="Pöytyä">
      <option value="Raasepori">
      <option value="Raahe">
      <option value="Raasepori">
      <option value="Raisio">
      <option value="Rantasalmi">
      <option value="Ranua">
      <option value="Rauma">
      <option value="Rautalampi">
      <option value="Rautavaara">
      <option value="Rautjärvi">
      <option value="Reisjärvi">
      <option value="Riihimäki">
      <option value="Ristijärvi">
      <option value="Rovaniemi">
      <option value="Ruokolahti">
      <option value="Ruovesi">
      <option value="Rusko">
      <option value="Rääkkylä">
      <option value="Saarijärvi">
      <option value="Salla">
      <option value="Salo">
      <option value="Saltvik">
      <option value="Sauvo">
      <option value="Savitaipale">
      <option value="Savonlinna">
      <option value="Savukoski">
      <option value="Seinäjoki">
      <option value="Sievi">
      <option value="Siikainen">
      <option value="Siikajoki">
      <option value="Siikalatva">
      <option value="Siilinjärvi">
      <option value="Simo">
      <option value="Sipoo">
      <option value="Siuntio">
      <option value="Sodankylä">
      <option value="Soini">
      <option value="Somero">
      <option value="Sonkajärvi">
      <option value="Sotkamo">
      <option value="Sottunga">
      <option value="Sulkava">
      <option value="Sund">
      <option value="Suomussalmi">
      <option value="Suonenjoki">
      <option value="Sysmä">
      <option value="Taipalsaari">
      <option value="Taivalkoski">
      <option value="Taivassalo">
      <option value="Tammela">
      <option value="Tampere">
      <option value="Tervo">
      <option value="Tervola">
      <option value="Teuva">
      <option value="Tohmajärvi">
      <option value="Toholampi">
      <option value="Toivakka">
      <option value="Tornio">
      <option value="Turku">
      <option value="Tuusniemi">
      <option value="Tuusula">
      <option value="Tyrnävä">
      <option value="Ulvila">
      <option value="Urjala">
      <option value="Utajärvi">
      <option value="Utsjoki">
      <option value="Uurainen">
      <option value="Uusikaarlepyy">
      <option value="Uusikaupunki">
      <option value="Vaala">
      <option value="Vaasa">
      <option value="Valkeakoski">
      <option value="Vantaa">
      <option value="Varkaus">
      <option value="Vehmaa">
      <option value="Vesanto">
      <option value="Vesilahti">
      <option value="Veteli">
      <option value="Vieremä">
      <option value="Vihti">
      <option value="Viitasaari">
      <option value="Vimpeli">
      <option value="Virolahti">
      <option value="Virrat">
      <option value="Vårdö">
      <option value="Vöyri">
      <option value="Ylitornio">
      <option value="Ylivieska">
      <option value="Ylöjärvi">
      <option value="Ypäjä">
      <option value="Ähtäri">
      <option value="Äänekoski">
  </datalist>
  <div class="invalid-feedback">
      Valitse kaupunki listalta tai kirjoita se
    </div>
    </div>
  

    <div class="form-group col-sm-6">
    <label for="puhelinnumero" class="label-responsive form-label-sm">Puhelinnumero:</label>
    <input type="text" class="form-control" id="puhelinnumero" name="puhelinnumero" pattern="(\+?\d{1,3}[- ]?)?(\d{1,4}[- ]?)?(\d{1,4}[- ]?)?(\d{1,4}){1,15}" required>
    <div class="invalid-feedback">Anna puhelinnumero</div>
    </div>
    

    <div class="form-group col-sm-6">
    <label for="sahkoposti" class="label-responsive form-label-sm">Sähköposti:</label>
    <input type="email" class="form-control" id="sahkoposti" name="sahkoposti" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
    <div class="invalid-feedback">Anna Sähköposti</div>  
    </div>
    
  
    <div class="form-group col-sm-6">
    <label for="salasana" class="label-responsive form-label-sm">Salasana:</label>
    <input type="password" class="form-control" id="salasana" name="salasana" minlength="12" required>
    <div class="invalid-feedback">Kirjoita salasane vähintään 12 merkkiä</div>
    </div>
    
 
    <div class="form-group col-sm-6">
    <label for="salasana2" class="label-responsive form-label-sm">Salasana uudestaan:</label>
    <input type="password" class="form-control" id="salasana2" name="salasana2" minlength="12" required>
    <div class="invalid-feedback">Toista salasana</div>
  </div>
  

  <button type="submit" name="submitcontract" class="btn btn-primary mt-3">Rekisteröidy</button>
    
</form>
</div>
<?php include "footer.html"; ?>
</body>
