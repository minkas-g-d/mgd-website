<?php

	$haystack = explode( '.', $_SERVER['REQUEST_URI'] )[ 0 ];
	$needle = '/';
	$pos = strpos( $haystack, $needle );
	$page = '';

	if ($pos !== false) {
		$page = substr_replace($haystack, $replace, $pos, strlen($needle));
	}

	$title = '';
	$metaDescription = '';
	$metaKeywords = '';
	switch ( $page ) {
		case 'mineralni-i-trapezni-vodi':
			$title = '<meta name="title" content="Доставка на минерална и трапезна вода" />';
			$metaDescription = '<meta name="description" content="Доставяме трапезна вода Савина и минерална вода Хисаря и Княжевска" />';
			$metaKeywords = '<meta name="keywords" content="доставка трапезна вода, доставка минерална вода, Савина, Хисаря, Княжевска" />';
			break;
		case 'konservirani-i-paketirani-hrani':
			$title = '<meta name="title" content="Доставка на консервирани и пакетирани храни" />';
			$metaDescription = '<meta name="description" content="Доставка на доматени продукти,консервирани храни, плодови сладка, пакетирани храни (ориз, леща, боб) за Велико Търново, Габрово и региона" />';
			$metaKeywords = '<meta name="keywords" content="доматени консерви, доматени продукти, лютеница, сладко, конфитюри, сладка, доставка на лютеници, доставка на доматени консерви, доставка топинги, доставка на доматено пюре, Велико Търново, Габрово" />';
			break;
		case 'podpravki-i-susheni-producti':
			$title = '<meta name="title" content="Доставка на подправки и сушени плодове и зеленчуци" />';
			$metaDescription = '<meta name="description" content="Предлагаме традиционни и екзотични подправки и сушени плодове и зеленчуци за Велико Търново, Габрово и района" />';
			$metaKeywords = '<meta name="keywords" content="доставка на традиционни подправки, доставка подправки, доставка на екзотични подправки, доставка на сушени плодове, доставка на сушени зеленчуци" />';
			break;
		default: 
			$title = '<meta name="title" content="Доставка на минерална вода и диспенсъри до офиса и дома" />';
			$metaDescription = '<meta name="description" content="Доставка на минерална вода и трапезна вода до офиса и дома. Безплатно ползване и продажба на диспенсъри за Велико Търново, Габрово и района." />';
			$metaKeywords = '<meta name="keywords" content="минерална вода, трапезна вода, доставка на вода, вода за офиса, вода за дома, доставка на диспенсъри, безплатна доставка, безплатно ползване, продажба на вода, продажба на диспенсъри, търновo, минерална вода хисаря, трапезна вода савина, mineralna voda, trapezna voda, mineralna voda za doma, mineralna voda za ofisa, доставка севлиево" />';
			break;
	}

	$markup = 
	'<head>
		<title>Доставка на минерална вода и диспенсъри до офиса и дома - mina-tarnovo.com</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

		<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
		<link rel="manifest" href="favicons/manifest.json">
		<link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="theme-color" content="#ffffff">

		' . $title . $metaDescription . $metaKeywords . '
	</head>';

	echo $markup;
?>