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

		$title = 'Agence de conseil, création et communication Web en Tunisie';

		$description = "L’@gence Com accompagne les professionnels & les entreprises dans leurs projets de communication globale : conseil, création, internet, marketing digital, photo & vidéo.";
		
		$keywords = "L’agence Com, Agence de conseil, création et communication Web,";

	    return view('homepage/index', compact('objects', 'title', 'description', 'keywords'));
	}	
}