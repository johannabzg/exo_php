<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exo php boucle</title>
  </head>
  <body>


      <?php

//exo 1 cree une var et l'initialiser a 0, tant qe la var n'atteint pas 10 il faut: 'lafficher et l'incrementer
        $debut = 0;
        while ($debut <= 10) {
          echo 'je suis la variable "debut"<br />';
          $debut++;
        }
// exo 2 cree deux var, la preums a 0, et la deuxs a 20,
//tant que la var n'est pas sup a 20,
//multiplie la preums avec la deuxs puis affiche le tout
// incrementer la premiere
        $var10 = 0;
         $var20 = 20;
         while ($var10 <= 20) {
           $var10 * $var20;
           echo ''.$var10.'';
           $var10++;
         }

         echo "<br />";
// exo 3 cree deux var, initialiser la preums a 100 et la deuxs a 42, condition= tant que la premiere et et superieur ou egale a 10:
// multiplier la premiere variable avec la deuxieme
// afficher le resultat
// decrementer la premiere var
         $var1 = 100;
         $var2 = 42;
         while ($var1 >= 10) {
           $var1 * $var2 ;
           echo '' .$var1. '';
           $var1--;
        }
// exo 4 cree une var et linitialiser a 1,
// tant que var n'atteint pas 10, l'afficher et l'incrementer de la moitier de ça valeur.
          $va4 = 1;
          while ($va4 <= 10) {
            echo '<br />'.$va4.'';
            $var4 / 2;
            $va4++;
        }
// exo 5 en allant de 1 a 15 avec un pas de 1, afficher la mess 'c'est preque bon'.
         $pas = 1;
         while ($pas <= 15) {
           echo "<br />on y est presque.";
           $pas++;
         }
// exo 6 la même chose avec 20 a 0, en pas de 1.
          $pas1 = 20;
          while ($pas1 >= 0) {
            echo "<br />c'est presque bon.";
            $pas1--;
          }
// exo 7 pareil, de 1 a 100 avec des pas de 15.

          for ($pa2 = 1; $pa2 <= 100; $pa2 += 14) {
            echo " $pa2 on tient le bon bout";

          }
// En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.
          for ($fi = 200; $fi >= 0; $fi -= 11)
              {
                echo ''.$fi. ' Enfin !!';
              }


      ?>

  </body>
</html>
