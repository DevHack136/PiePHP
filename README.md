👉Projet 'PiePHP'👈


- 👉Étape 1 => Architecture du Projet (MVC)👈

- 👉Étape 2 => Formulaire de type POST avec les champs « email » et « password », dont l’action s’effectuera sur « /index.php ».👈

- 👉Étape 3 => Afin de « débuguer » le début de votre conception, vous devez afficher dans le fichier « /index.php », ce que contiennent les variables
    « $_POST », « $_GET » et « $_SERVER ».👈

- 👉Étape 4 => Créer une classe « Core » dans un fichier « /Core/Core.php » et modifier votre fichier « /index.php »👈

- 👉Étape 5 => Ajoutez quelques images dans le dossier « /webroot/assets/ »👈

- 👉Étape 6 => Mettez un reset CSS 
    (https://goo.gl/ZWNVea) dans le dossier « /webroot/css/ »👈

- 👉Étape 7 => Puis la dernière librairie à
    jour de jQuery dans le dossier « /webroot/js/ »👈

- 👉Étape 8 => Créez donc une table « users » qui contient une clé primaire « id », un « email », et un « password »👈

- 👉Étape 9 => Créez également les classes du model (« /src/Model/UserModel.php ») qui seront associés à cette table👈

- 👉Étape 10 => Créez également les classes du controller (« /src/Controller/UserController ») qui seront associés à cette table👈

- 👉Étape 11 => Créer un router statique qui abstrait le nom de la route du nom du controller.
    Créez une classe Router et une classe Controller dans « /Core ». Tous vos controlleurs doivent hériter de \Core\Controller.👈

- 👉Étape 12 => Mettez à jour la méthode run de votre Core pour qu’elle charge votre fichier « /src/routes.php » qui contient les appels à la méthode
    connect, puis qu’elle utilise la méthode get de la classe Router afin de récupérer la route adéquate.👈