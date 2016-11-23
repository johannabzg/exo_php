<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>fonction php</title>
  </head>
  <body>

     <?php

// exo 1 Faire une fonction qui retourne true.
            function exo1() {
              $pouf = true;
              echo $pouf;
            }
            exo1();

// exo 2 faire une fonction qui prend en paramètre
// une chaine de caractères et qui retourne cette même chaine.

              function jesuisnul() {
                echo "<br />";
                echo 'je suis une chaine de caractère putain lol';
              }
              jesuisnul();

// exo 3 Faire une fonction qui prend en paramètre deux chaines de caractères
// et qui revoit la concaténation de ces deux chaines

              function exo3() {
                $vartexte1 = 'je suis une chaine';
                $vartexte2 = ', moi aussi mdr';
                echo "<br />";
                echo  $vartexte1, $vartexte2;
              }
              exo3();

// exo 4 Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
//Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
//Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
//Les deux nombres sont identiques si les deux nombres sont égaux

                echo "<br />";

                function exo4() {
                  $nb1 = 4;
                  $nb2 = 7;
                  if ($nb1 > $nb2){
                    echo "le premier nombre et plus grand!";
                  }
                  elseif ($nb1 < $nb2) {
                    echo "le deuxieme et plus grand!";
                  }

                  else {
                    echo "string";
                  }
                }
                exo4();

// exo 5 Faire une fonction qui prend en paramètre un nombre et une chaine de caractères
// et qui renvoit la concaténation de ces deux paramètres.

                echo "<br />";

                function exo5() {
                  $nb = 42;
                  $tex = 'je suis un texte';
                  echo $tex, $nb;
                }
                exo5();

// exo 6 Faire une fonction qui prend trois paramètres : nom, prenom et age. Elle doit renvoyer une chaine de la forme :
// "Bonjour" + nom + prenom + ",tu as" + age + "ans".

                  echo "<br />";

                  function exo6() {
                    $nom = 'nom';
                    $prenom = 'prenom';
                    $age = 85;
                    echo "Bonjour $nom  $prenom ,tu as $age ans";
                  }
                  exo6();

// exo 7 Faire une fonction qui prend deux paramètres : age et genre. Le paramètre genre peut prendre comme valeur :
//Homme/ femme
                  echo "<br />";

                  function exo7() {
                    $age = 45;
                    $genre = "homme" || "femme";
                      if (($age >= 18) && ($genre == "homme")) {
                        echo 'vous êtes un homme et vous êtes mageur';
                      }
                      elseif (($age >= 18) && ($genre == "femme")) {
                        echo 'vous êtes une femme et vous êtes mageur';
                      }
                      elseif (($age <= 18) && ($genre == "homme")) {
                        echo 'vous êtes un homme et vous êtes mineur';
                      }
                      elseif (($age <= 18) && ($genre == "femme")) {
                        echo 'vous êtes une femme et vous êtes mineur';
                      }
                  }
                  exo7();

// exo 8 Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
// Tous les paramètres doivent avoir une valeur par défaut.

                        echo "<br />";

                      function exo8() {
                        $nb1 = 45;
                        $nb2 = 78;
                        $nb3 = 48;
                        $resu = $nb1+$nb2+$nb3;
                        echo "j'additionne $nb1 avec $nb2 et $nb3, ce qui donne : $resu";
                      }
                      exo8();
     ?>
  </body>
</html>
