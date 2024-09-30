<!DOCTYPE html>
<html>
<?php
$title = "Javascript koulutus";
$css = "koulutuksiencss.css";
include 'headers.php';
?>
<body>
    <?php include 'navigointi.html'; ?>  

    <div class="content">
      
        <h1 class="left">Javascript Koulutus</h1>
        
      
        <p class="left">
            JavaScript on yksi tärkeimmistä ohjelmointikielistä, jota käytetään laajasti web-kehityksessä. 
            Se mahdollistaa dynaamiset ja interaktiiviset verkkosivut. Koulutuksessa opit perusasiat 
            JavaScriptistä, sekä kuinka sitä käytetään web-sovellusten kehittämiseen.
        </p>

       
        <div class="form-container">
          
            <div class="login-box">
                <h2>Kirjaudu sisään</h2>
                <form action="login.php" method="POST">
                    <label for="username">Käyttäjätunnus:</label><br>
                    <input type="text" id="username" name="username" required><br><br>

                    <label for="password">Salasana:</label><br>
                    <input type="password" id="password" name="password" required><br><br>

                    <button type="submit">Kirjaudu</button>
                </form>
            </div>

            
            <div class="register-box">
                <h2>Rekisteröidy</h2>
                <p>Jos sinulla ei ole vielä tiliä, rekisteröidy nyt!</p>
                <a href="rekisteroityminen.php" class="register-link">Rekisteröidy tästä</a>
            </div>
        </div>
    </div>

    <?php include 'footer.html'; ?>
</body>
</html>
