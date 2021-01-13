<?php
//exercice 1 avec solution
echo"<p>Écrire un lien qui doit ouvrir la page2.php, lorsque la page 2 s'ouvre le message suivant doit s'afficher : abricot</p>";
//SOLUTION
echo"<a href='exercice1_lien.php?type=fruit'>solution abricot</a>";

//exercice 2
echo"<p>Écrire un lien qui doit ouvrir la page2.php, lorsque la page 2 s'ouvre le message suivant doit s'afficher : abricot et chien</p>";
echo"<a href='exercice1_lien.php?type2=animal&type=fruit'>solution chien</a>";
//exercice 3
echo"<p>Écrire un lien qui doit ouvrir la page2.php, lorsque la page 2 s'ouvre le message suivant doit s'afficher : 7</p>";
echo"<a href='exercice1_lien.php?calcul=addition&a=5&b=2'>solution 7</a>";

//exercice 4
echo"<p>Écrire un lien qui doit ouvrir la page2.php, lorsque la page 2 s'ouvre le message suivant doit s'afficher : php</p>";
echo"<a href='exercice1_lien.php?simple=php&message'>solution php</a>";
