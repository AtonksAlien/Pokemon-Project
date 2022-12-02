<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <title>Gotta Catch'em All</title>
</head>
<body>
    <div class="container">

        <div>
            <h1 class="titolone">Gotta Check'em All</h1>
        </div>

        <div class="sottotitolo">
            <h3>
                <strong> Benvenuto </strong>nel tuo motore di ricerca per Pokémon. Potrai inserire le caratteristiche di un <strong>Pémon fittizio </strong>e il back-end 
                cercherà grazie all’algoritmo di Machine Learning <strong>KNN (K-Nearest Neighbors) </strong>i 5 Pokémon più simili a quello che hai 
                inserito.
            </h3>
        </div>
    

        
        <form action="index.php" method="post">

            <div class="fields">
                <div class="input">
                    <label for="HP" class="txt_form">Punti Vita (HP):</label>
                    <input type="text" name="vita" placeholder="Inserisci un numero da 0 a 300" required>
                </div>

                <div class="input">
                    <label for="Attack" class="txt_form">Punti Attacco (Attack):</label>
                    <input type="text" name="attacco" placeholder="Inserisci un numero da 0 a 300" required>
                </div>

                <div class="input">
                    <label for="Defense" class="txt_form">Punti difesa (Defense)</label>
                    <input type="text" name="difesa" placeholder="Inserisci un numero da 0 a 300" required>
                </div>

                <div class="input">
                    <label for="Sp.Atk" class="txt_form">Punti Attacco Speciale (Sp. Atk):</label>
                    <input type="text" name="att_speciale" placeholder="Inserisci un numero da 0 a 300" required>
                </div>

                <div class="input">
                    <label for="Sp.Defense" class="txt_form">Punti Difesa Speciale (Sp. Defense):</label>
                    <input type="text" name="dif_speciale" placeholder="Inserisci un numero da 0 a 300" required>
                </div>

                <div class="input">
                    <label for="Speed" class="txt_form">Punti velocità (Speed)</label>
                    <input type="text" name="velocita" placeholder="Inserisci un numero da 0 a 300" required>
                </div>
            </div>
                
            <button type="submit"> CERCA </button>
        </form>

        <section id="section" >


            <?php
            require("../index.php");
            ?>
        </section>
        
    </div>

    <script src="../static/js/script.js"></script>
</body>
</html>