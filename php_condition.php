<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exo php 2</title>
  </head>
  <body>
<h1>gyughiu</h1>

      <?php

  // exo 1 cree une var age valeur0, si l'age et sup a 18 alors ecrire " vous ete majeur" ou alors vous etes mineur

         $age = 1545;
         if($age >= 18)
            {
              echo "vous avez $age ans, vous êtes majeur.";
            }
         else
            {
              echo "vous avez $age ans, vous êtes mineur.";
            }
// exo 2 cree une var iseasy de type boolean, l'initier avec une valeur,if true afficher 'c'est facile' sinon 'cest difficile'


          $isEasy = true;

          if($isEasy = true)
              {
                echo " c'est fastoche !";
              }
          else
              {
                echo " it's too complicate :( ";

              }

// exo 3 faire un truc avec l'âge et les genre homme/femme
        echo "<br>";
            $age = 35;
            $genre = "homme" || "femme";

            if (($age >= 18) && ($genre == "homme"))
            {
                echo "vous avez $age ans donc mageur, vous êtes un homme.";
            }
           elseif (($age < 18) && ($genre == "homme"))
            {
                echo "vous êtes un homme, vous avez $age ans et vous êtes mineur.";
            }
            elseif (($age < 18) && ($genre == "femme"))
             {
                 echo "vous êtes une femme, vous avez $age ans et vous êtes mineur.";
             }
             elseif (($age >= 18) && ($genre == "femme"))
              {
                  echo "vous êtes une femme, vous avez $age ans et vous êtes majeur.";
              }
// exo 4
              echo "<br>";
              $magnitude = 2;
              if ($magnitude == 1) {
              	echo "Micro-séisme impossible à ressentir.";
              }
              elseif ($magnitude == 2) {
              	echo "Micro-séisme impossible à resentir mais enregistrable par les sismomètres.";
              }
              elseif ($magnitude == 3) {
              	echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
              }
              elseif ($magnitude == 4) {
              	echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
              }
              elseif ($magnitude == 5) {
              	echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction.";
              }
              elseif ($magnitude == 6) {
              	echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.  ";
              }
              elseif ($magnitude == 7) {
              	echo " Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
              }
              elseif ($magnitude == 8) {
              	echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
              }
              elseif ($magnitude == 9) {
              	echo "Séisme capable de tout détruire sur une très vaste zone.  ";
              }

              //exo 5
              echo "<br>";
              $maVariable = "femme";
              if ($maVariable == "homme") {
              	echo "C'est un développeur !";
              }
              else {
              	echo "c'est une développeuse ! ";
              }
              //exo 6
              echo "<br>";
              $monAge = 18;
              if ($monAge >= 18) {
              	echo "Tu es majeur !";
              }
              else {
              	echo "Tu n'est pas majeur !";
              }
              //exo 7
              echo "<br>";
              $maVariable = True;
              if ($maVariable == True) {
               	echo "c'est Ok !";
               }
               else{
               	echo "c'est pas Ok !";
               }
               // exo 8
               if ($maVariable) {
                 echo "ok !";
               }
               else {
                 echo "c'est pas ok !";
               }
      ?>

  </body>
</html>
