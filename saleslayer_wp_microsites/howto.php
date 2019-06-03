<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title data-i18n="howto.title"></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	</head>

	<body>
		<div id="slyr_catalogue_admin">
		<header>
			<div id="logo">
				<a href="#"><img src="<?php echo plugin_dir_url( __FILE__ ).'images/'.SLYR_name_logo; ?>" title="logotipo de Sales Layer"></a>
			</div>
			<h3>How To Start</h3>
		</header>
		<main>
			<section class="howtoinfo">
				<p><strong><?php echo SLYR_name; ?></strong> plugin allows you to add in your Wordpress website all your catalogue super easily. To do so, the catalog automatically imports and syncs all the product information.</p>
				<p>First of all the plugin needs the <strong>connector ID code</strong> and the <strong>private key</strong>. You will find them in the connector details of  <strong><?php echo SLYR_name; ?></strong>.</p>
			</section>
			<section class="steps">
				<ol>
					<li>Go to <a href="<?php echo admin_url() ?>admin.php?page=slyr_config"><?php echo SLYR_name; ?> > Configuration</a> </li>
					<li>Add connection credentials.</li>
					<li>Import categories, products, formats and locations.</li>
					<li>Copy and paste the shortcode <strong>[<?php echo SLYR_short_code; ?>]</strong> inside the body of a page.</li>
				</ol>
			</section>
		</main>
		</div>
	</body>
</html>