@component('mail::message')
# Hey admin !

@component('mail::panel')

Votre Formulaire de contact: 

<ul>
	<li>De: {{ $name }} </li>
	<li>Email: {{ $email }} </li> 

	<br>

	<li>Corps du message: <br>
		{{ $message }}
	</li>
</ul>

@endcomponent

<small style="font-size: .7em;">Ceci est un message automatique généré par le serveur de messagerie: [mail.lagence-com.com].</small>

@endcomponent
