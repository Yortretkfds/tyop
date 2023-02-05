<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="taxi.css"></rel>
    <link rel="stylesheet" href="header.css"></rel>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Co</title>
</head>
<header>
    <nav>
        <ul class='nav-bar'>
            <a id="name" href="index.php">Noktilas</a>
            <li class='logo'><a href='index.php'><img src='./img/loup.png'/></a></li>
            <input type='checkbox' id='check'/>
            <span class="menu">
                <li><a href="index.php">Bad'As</a></li>
                <li><a href="taxi.php">Taxi</a></li>
                <li><a href="sos.php">SOS</a></li>
                <li><a href="planning.php">Planning</a></li>
                <li><a href="sponsor.php">Sponsor</a></li>
                <li style="float:right"><a href="connexion.php">Connexion</a></li>
                <?php
                if (isset($_SESSION['loggedin'])) {
                ?>
                <li><a href="logout.php">Déconnexion</a></li>
                <?php
                }
                ?>
                <label for="check" class="close-menu"><i class="fas fa-times"></i></label>
            </span>
            <label for="check" class="open-menu"><i class="fas fa-bars"></i></label>
        </ul>
    </nav>
</header>
  
<body>
  <form method="post" action="enregistrement.php">
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required>
    <br>
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required>
    <br>
    <label for="tel">Téléphone :</label>
    <input type="tel" id="tel" name="tel" required>
    <br>
    <label for="place">Place :</label>
    <select class = "form-input" id="place" name="place">
      <option value="La catholique">La catholique</option>
      <option value="2">Chez-vous</option>
    </select>
    <div id="address-container" style="display: none;">
    <label for="address">Adresse :</label>
    <input type="text" id="address" name="address">
    
    </div>
    <br>
    <label for="heure">Heure :</label>
    <br>
    <article class="18h">
    <input type="checkbox" id="heure1" name="heure" value="18h">
    <div>
    18h
    </div>
    </article>
    <article class="19h">
    <input type="checkbox" id="heure2" name="heure" value="19h">
    <div>
    19h
    </div>
    </article>
    <article class="20h">
    <input type="checkbox" id="heure3" name="heure" value="20h">
    <div>
    20h
    </div>
    </article>
    <script>
      var checkboxes = document.querySelectorAll('input[name="heure"]');
        checkboxes.forEach((checkbox) => {
            checkbox.addEventListener("change", function () {
                checkboxes.forEach((checkbox) => {
                    if (checkbox !== this) {
                        checkbox.checked = false;
                    }
                });
            });
        });
      var place = document.getElementById("place");
        var addressContainer = document.getElementById("address-container");
        place.addEventListener("change", function() {
            if (place.value === "2") {
                addressContainer.style.display = "block";
            } else {
                addressContainer.style.display = "none";
            }
        });
    </script>
    <br>
    <input type="submit" value="Envoyer">
  </form>
  <section class="google-map">
        <div class="map-frame">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10121.094054929046!2d3.0541452!3d50.6406113!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3b25f4277d622982!2sClubtrotter%20restaurant!5e0!3m2!1sfr!2sfr!4v1674496910144!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
  </section>
  </body>    
</html>