Step 1 : 

Créer une classe student

- firstname (string)
- lastname (string)
- marks (array)

Step 2 : 

Créer les méthodes suivantes dans la classe Student : 
- addMark (ajout d'une nouvelle note à l'étudiant)
- setFirstname (permet de d'ajouter/modifier le prénom de l'étudiant)
- setLastname (permet d'ajouter/modifier le nom de l'étudiant)
- getFirstName (permet de récupérer le prénom de l'étudiant)
- getLastName (permet de récupérer le nom de l'étudiant)
- getFullName (permet de récupérer le prénom et le nom de l'étudiant)
- getMarks(permet de récupérer toutes les notes de l'étudiant)
- getAverageMark (permet de calculer la moyenne actuelle de l'étudiant)


Step 3 : Instancier dans le même fichier deux élèves 
- avec prénom et nom différent
- ajoutée lui plusieurs notes
- calculer sa moyenne

Dire lequel des deux étudiants à la plus haute moyenne

--------------------------------------------------------

Step 1:

Créer une class Hero 

propriété : 
- name
- hp par défaut 100hp
- mana par défaut 50 mana
- level par défaut level 1

Step 2 : 

Créer les getters & setters pour toutes les propriétés

Condition : 
- Pour changer le name il faut que cela soit différent, si on donne le même name message d'erreur
- On ne peut monter que d'un niveau à la fois
- A chaque monté de niveau on gagne 50 pv et 25 de mana 
- On ne peut pas dépasser le niveau 10, une fois atteint on affiche message d'erreur que le niveau maximum a été atteint


__________________________________________________________

Step 3 : 

Créer 3 class qui vont hérité de votre Hero
- Warrior
- Mage
- Rogue

Rendre votre class hero non instanciable, maintenant que nous avons des classes plus aucune utilité d'instancier un 
Hero

Chacun des trois classes a une attaque basique 
- Attaquer qui enlève de 20hp à l'adversaire

Chacune des 3 class a une attaque spéciale
- Boule de feu pour le mage
- Coup d'épée pour le warrior
- Assasinat pour le rogue

Quelques règles : 
La boule de feu inflige 50 point de degat si c'est contre un warrior sinon seulement 10
Le coup d'épée inflige 50 point de dégat si c'est un rogue sinon seulement 10
L'assasinat inflige 50 point de dégat si c'est un mage sinon seulement 10


Quand un héro n'a plus de point de vie, afficher qu'il est mort lorsqu'on check ses HP

_________________________________________________________

Créer une class Vehicle

Il aura comme propriété : Marque,Roue,Nombre de place.

Méthode : 
- Démarrer
- Rouler
- Freiner

Créer les getter&setter nécessaire


Créer une class GasolineCar

Il peut 
- Démarrer
- Rouler (Tous les 100km, on va lui enlever 10L d'essence, si plus d'essence il ne peut plus rouler)
- Freiner
- Remplir le réservoir d'essence
- Capacité du réservoir 100L

Créer une class HybridCar
- Démarrer
- Rouler (Tous les 100km, on va lui enlever 10L d'essence, si plus d'essence la batterie s'active et faut lui 
  enlever 1KW par KM, si plus de batterie ni plus d'essence il ne peut plus rouler)
- Freiner
- Remplir le réservoir d'essence
- Recharger la batterie
- Capacité de la batterie 100KW
- Capacité du réservoir 100L

Créer une class ElectricCar
- Démarrer
- Rouler (Enlever 1KW par KM)
- Freiner
- Recharger la batterie
- Capacité de la batterie 500KW








