<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{

	public function Conseil()
	{
		$title = 'Conseil';
		$description = "L’@gence Com, réalise met en scène & diffuse vos clips vidéos d’entreprise et vos animations.";

		return view('services/Conseil/index', compact('title', 'description'));
	}

	public function Conseil_diagnostic_strategique()
	{
		$title = 'Diagnostic strategique';
		$description = "L’@gence Com, vous permet d’avoir une nouvelle vision de votre entreprise.";

		return view('services/Conseil/Diagnostic_strategique', compact('title', 'description'));
	}

	public function Conseil_strategie_communication()
	{
		$title = 'Conseil strategie communication';
		$description = "L’@gence Com, guide les entreprises dans leur stratégie de communication.";

		return view('services/Conseil/Conseil_strategie_communication', compact('title', 'description'));
	}



	public function Accompagnement()
	{
		$title = 'Accompagnement';
		$description = "";

		return view('services/Accompagnement/index', compact('title', 'description'));
	}

	
	public function Identite_visuelle()
	{
		$title = 'Identité visuelle';
		$description = "L’@gence Com, conceptualise et réalise l’essence graphique de votre entreprise.";


		return view('services/Identite_visuelle/index', compact('title', 'description'));
	}	

	public function Identite_visuelle_Identite_visuelle()
	{
		$title = 'Identité visuelle';
		$description = "L’@gence Com, conceptualise et réalise l’essence graphique de votre entreprise.";

		return view('services/Identite_visuelle/Identite_visuelle', compact('title', 'description'));
	}	

	public function Identite_visuelle_Naming()
	{
		$title = 'Naming';
		$description = "L’@gence Com, met sa créativité,sa méthode et ses idées au service de la création de noms.";

		return view('services/Identite_visuelle/Naming', compact('title', 'description'));
	}	

	public function Identite_visuelle_Marketing_publicitaire()
	{
		$title = 'Marketing Publicitaire';
		$description = "L’@gence Com, assure la conception et la réalisation de vos supports de communication.";

		return view('services/Identite_visuelle/Marketing_publicitaire', compact('title', 'description'));
	}

	
	public function Site_internet()
	{
		$title = 'Création Site Web en Tunisie';
		$description = "L’@gence Com accompagne les PME/PMI dans leur projet de création de site internet.";

		return view('services/Web_digital/Site_internet', compact('title', 'description'));
	}
	
	public function Referencement()
	{
		$title = 'Référencement naturel SEO en Tunisie';
		$description = "L’@gence Com accompagne les PME/PMI pour optimiser le positionnement de votre site web sur les moteurs de recherche.";

		return view('services/Web_digital/Referencement', compact('title', 'description'));
	}
	
	public function Webmarketing()
	{
		$title = 'Web Marketing Tunisie';
		$description = "L’@gence Com, vous accompagne dans votre stratégie webmarketing";

		return view('services/Web_digital/Webmarketing', compact('title', 'description'));
	}
	
	public function Community_management()
	{
		$title = 'Community Management Tunisie';
		$description = "L’@gence Com, vous accompagne dans l’intégration du community management dans votre entreprise, afin qu’il soutienne votre stratégie de marque.";

		return view('services/Web_digital/Community_management', compact('title', 'description'));
	}

	public function Photographie()
	{
		$title = 'Photographie';
		$description = "L’@gence Com, réalise vos photos d’entreprise & met en lumière votre savoir faire et vos talents.";

		return view('services/Image_video/Photographie', compact('title', 'description'));
	}	
	public function Video_Animation()
	{
		$title = 'Video Animation';
		$description = "L’@gence Com, réalise met en scène & diffuse vos clips vidéos d’entreprise et vos animations.";

		return view('services/Image_video/Video_Animation', compact('title', 'description'));
	}


}
