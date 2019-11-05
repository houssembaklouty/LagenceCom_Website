<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{

	public function index()
	{

		$objects = [
		    ['name' => 'Campagnes: FB Ads - Google Ads',],
		    ['name' => 'Référencement SEO',],
		    ['name' => 'Création Site Web',],
		    ['name' => 'Community Management',],
		    ['name' => 'Autre',]
		];

		$description = "L’@gence Com accompagne les professionnels & les entreprises dans leurs projets de communication globale : conseil, création, internet, marketing digital, photo & vidéo.";
		
		$keywords = "keywords1, keywords2, keywords3";

	    return view('homepage/index', compact('objects', 'description', 'keywords'));
	}	
}
