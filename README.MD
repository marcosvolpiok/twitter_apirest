En una consola posicionarse en el directorio "public" y ejecutar el comando:

	php -S localhost:9999 -t . index.php

Ejecutará en la siguiente URL: http://localhost:9999 la API REST.


* tweets/{username} *
Devuelve últimos 10 tweets de usuario espepecificado.

Ejemplo:

http://localhost:9999/tweets/cuervotinelli




	[
	  {
	    "created_at": "Wed Jul 11 15:54:06 +0000 2018",
	    "text": "RT @baronjimena: Cuando se junta el fanatismo por Luismi con la emoci\u00f3n del Bailando. https:\/\/t.co\/QvNz4mzpvS"
	  },
	  {
	    "created_at": "Wed Jul 11 13:30:53 +0000 2018",
	    "text": "RT @escuelatablones: \ud83d\udca3Tema nuevo de @SanLorenzo 2018 #escueladetablones \" Es esta camiseta la que me llena el alma\" \ud83c\udfbc\ud83e\udd41\ud83c\udfba@Fonseca #arroyito @\u2026"
	  },
	  {
	    "created_at": "Wed Jul 11 01:01:25 +0000 2018",
	    "text": "Jajajajaja genial https:\/\/t.co\/JdcnZDG6Pt"
	  },
	  {
	    "created_at": "Wed Jul 11 00:59:17 +0000 2018",
	    "text": "RT @LafliaOk: #LosEspecialistasDelShow  \ud83d\udd0d\ud83d\udd75\ufe0f\u200d\u2642\ufe0f\n\nMuy Pronto x @eltreceoficial \u2764\ufe0f\ud83d\udcfa https:\/\/t.co\/KDCTz3WzWf"
	  },
	  {
	    "created_at": "Wed Jul 11 00:20:29 +0000 2018",
	    "text": "RT @ShowMatch: Los especialistas del show calientan motores y advierten: \u201cNo se hagan los amigos con nosotros\u201d\nhttps:\/\/t.co\/Ki0UDb818T"
	  },
	  {
	    "created_at": "Wed Jul 11 00:14:10 +0000 2018",
	    "text": "RT @eltreceoficial: #LosEspecialistasDelShow est\u00e1n llegando a #eltrece. No te pierdas lo que nos cuentan dos de ellas: @Okmajomartino y @fe\u2026"
	  },
	  {
	    "created_at": "Tue Jul 10 20:12:00 +0000 2018",
	    "text": "Estoy muy feliz de producirte un programa, querido @MarceloPolino . Vamos con #LosEspecialistasDelShow @LafliaOk https:\/\/t.co\/6iP0V253vM"
	  },
	  {
	    "created_at": "Tue Jul 10 20:08:40 +0000 2018",
	    "text": "RT @CASLABasquet: \ud83d\udcfd El nuevo jugador de #SanLorenzo tuvo una gran labor en la pasada @Ligamericas. Aqu\u00ed un compacto con lo mejor de @foreig\u2026"
	  },
	  {
	    "created_at": "Tue Jul 10 20:06:45 +0000 2018",
	    "text": "RT @TelevisionComAr: As\u00ed se preparan #LosEspecialistasDelShow para debutar en eltrece https:\/\/t.co\/1Dbqe7YmKL https:\/\/t.co\/0hvkuvXqkl"
	  },
	  {
	    "created_at": "Tue Jul 10 19:25:49 +0000 2018",
	    "text": "RT @ferigle: Se viene Los especialistas del show por @eltreceoficial https:\/\/t.co\/aYXwDBTlNe"
	  }
	]

