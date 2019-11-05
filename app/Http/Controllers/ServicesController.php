<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{

	public function Conseil()
	{
		return view('services/Conseil/index');
	}

	public function Conseil_diagnostic_strategique()
	{
		return view('services/Conseil/Diagnostic_strategique');
	}

	public function Conseil_strategie_communication()
	{
		return view('services/Conseil/Conseil_strategie_communication');
	}



	public function Accompagnement()
	{

		return view('services/Accompagnement/index');
	}


	
	public function Identite_visuelle()
	{
		return view('services/Identite_visuelle/index');
	}	

	public function Identite_visuelle_Identite_visuelle()
	{
		return view('services/Identite_visuelle/Identite_visuelle');
	}	

	public function Identite_visuelle_Naming()
	{
		return view('services/Identite_visuelle/Naming');
	}	

	public function Identite_visuelle_Marketing_publicitaire()
	{
		return view('services/Identite_visuelle/Marketing_publicitaire');
	}

	
	public function Site_internet()
	{
		return view('services/Web_digital/Site_internet');
	}
	
	public function Referencement()
	{
		return view('services/Web_digital/Referencement');
	}
	
	public function Webmarketing()
	{
		return view('services/Web_digital/Webmarketing');
	}
	
	public function Community_management()
	{
		return view('services/Web_digital/Community_management');
	}

	public function Photographie()
	{
		return view('services/Image_video/Photographie');
	}	
	public function Video_Animation()
	{
		return view('services/Image_video/Video_Animation');
	}


}
