<?php

/*

Cette page récupere les informations du signal radio recu par le raspberry PI et effectue une action en fonction de ces dernières.



NB : Cette page est appellée en parametre du programme C 'radioReception', vous voupvez tout à fait appeller une autre page en renseignant le parametre lors de l'execution du programme C.
*/

//Récuperation des parametres du signal sous forme de variables

list($file,$sender,$group,$state,$interruptor) = $_SERVER['argv'];

//Affichages des valeurs dans la console a titre informatif

echo "\nemetteur : $sender,\n Groupe :$group,\n on/off :$state,\n boutton :$interruptor";

//En fonction de la rangé de bouton sur laquelle on à appuyé, on effectue une action

switch($interruptor){

	//Rangée d'interrupteur 1 

	case '0':

		system('gpio mode 3 out');

		//Bouton On appuyé

		if($state=='on'){

			echo 'Mise à 1 du PIN 3 (15 Pin physique)';

			system('gpio write 3 1');

		//Bouton off appuyé

		}else{

			echo 'Mise à 0 du PIN 3 (15 Pin physique)';

			system('gpio write 3 0');

		}

	break;

	

	//Rangée d'interrupteur 2

	case '1':

		//Bouton On appuyé

		if($state=='on'){

			//mettre quelque chose ici

		//Bouton off appuyé

		}else{

			//mettre quelque chose ici

		}

	break;

	

	///Rangée d'interrupteur 3

	case '2':

		if($state=='on'){

			//mettre quelque chose ici	

		}else{

			//mettre quelque chose ici

		}

	break;

}



?>
