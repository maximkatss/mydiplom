<?php

// session_start();


// require "libs/rb.php";

// R::setup( 'mysql:host=localhost;dbname=only',
//         'root', 'root' );
	session_start();

	require "rb.php";
	R::setup( 'mysql:host=localhost;dbname=onlydb',
        'root', 'root' );


	$data = $_POST;
	if( isset($data['goo']) ) 
	{
		//регистрация
		$errors = array();
		if( trim($data['name']) == '' ) 
		{
			$errors[] = 'Введите имя!';
		}

		if( trim($data['telephone']) == '' ) 
		{
			$errors[] = 'Введите телефон!';
		}

		if( trim($data['content']) == '' ) 
		{
			$errors[] = 'Введите сообщение!';
		}


		if( empty($errors) ) 
		{
			//если нет ошибок, регистрируем
			$message = R::dispense('messages');
			$message->name =$data['name'];
			$message->telephone =$data['telephone'];
			$message->content =$data['content'];
			R::store($message);
			echo header('location: index.html');
		}
	}





?>