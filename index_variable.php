<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP exo</title>
  </head>
  <body>

      <?php

// exo 1 ( afficher un nom )
        function nom() {
          $nom = "johanna";
          echo "bonjour $nom, comment ça va ?<br />";
        }
        nom();

// exo 2 (afficher nom, prenom, age )
         function npa() {
           $nom = "poutine";
           $prenom = "michelle";
           $age = 15;
           echo " salut $prenom $nom, alors comme ça on a seulement $age ans ?<br />";
         }
         npa();

// exo 3 (cree une variable km et l'initialiser a 1, puis 3 puis 125,afficher les contenue)
          function kilometre() {
            $km = 1;
            echo " $km";
            $km = 3;
            echo " maintenant c'est $km";
            $km = 125;
            echo " ha bah non en faite c'est $km <br />";
          }
          kilometre();

// exo 4 cree une var string, une autre int, float, boolean, et les initialiser avec la valeur que je veut.
           function valeur() {
             $culotte = "je suis une string";
             $nb = 25;
             $nbdecimal = 2.3;
             $trufal = true;
             echo "type string: $culotte <br /> type int: $nb <br /> type float: $nbdecimal<br /> type bollean: $trufal";

           }
           valeur();

// exo 5 cree une var int et l'initier avec rien, l'afficher puis donner une valeur quelquonque et l'afficher
             function riensur20() {
               $varint = 0;
               echo " <br /> la variable int et egale à: $varint";
               $varint = 42;
               echo " <br /> maintenant int et egale à: $varint";

             }
             riensur20();

// exo 6 cree une var nom,... bah en faite je l'ai deja fait dans l'exo 2 lol.
// pareil pour l'exo 7..
// exo 8 cree 3 variable 1( mettre le resultat de l'operation 3+4, puis 5*20, puis 45/5 puis afficher)

              function troisptitchat() {
                $resu1 = 3+4;
                $resu2 = 5*20;
                $resu3 = 45/5;
                echo "<br /> 3+4= $resu1, <br /> 5*20= $resu2, <br /> 45/5= $resu3.";
              }
              troisptitchat();
       ?>       
  </body>
</html>
