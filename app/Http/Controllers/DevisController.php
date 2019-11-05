<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use App\Http\Requests\RequestDevisForm;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifAdminDevis;

class DevisController extends Controller
{

	public function store(RequestDevisForm $request)
	{

		try {
		    \Log::info('Mail Done !');

		    Mail::to('houssem.baklouty@gmail.com')
		        ->bcc('houssem.bak.1993@gmail.com')
		        ->send(
		            new NotifAdminDevis(
		                $request->name,
		                $request->email,
		                $request->service,
		                $request->message
		            )
		        );
		}

		catch (\Exception $e) {

			\Log::info($e->getMessage());
			
			return response()->json(
				['errors' =>
					['error' => 'Une erreur s\'est produite.'] 
				], 404)
			;
		}

		return response()->json(['success'=>"Nous avons reçu votre demande et nous allons vous répondre aussitôt que possible."], 200);
	}
}
