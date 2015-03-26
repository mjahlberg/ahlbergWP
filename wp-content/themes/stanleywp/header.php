<?php
/**
 * Header Template
 *
 *
 * @file           header.php
 * @package        StanleyWP 
 * @author         Brad Williams & Carlos Alvarez 
 * @copyright      2011 - 2014 Gents Themes
 * @license        license.txt
 * @version        Release: 3.0.3
 * @link           http://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29
 * @since          available since Release 1.0
 */
?>
<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>

<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<title><?php wp_title('&#124;', true, 'right'); ?><?php bloginfo('name'); ?></title>
<?php if( bi_get_data('custom_favicon') !== '' ) : ?>
        <link rel="icon" type="image/png" href="<?php echo bi_get_data('custom_favicon'); ?>" />
    <?php endif; ?>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/fonts/font-awesome-4.3.0/css/font-awesome.css">

    <!-- Google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Cinzel:900,700,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css"/>


  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php get_template_directory_uri();?>/js/html5shiv.js"></script>
      <script src="<?php get_template_directory_uri();?>/js/respond.min.js"></script>
    <![endif]-->


    <section class="header">
        <div class="cbp-af-header">
            <div class="cbp-af-inner">

                <nav>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown smoothScroll"><a href="#row1" data-toggle="modal" data-target=".bs-modal-sm"> About</a></li>
                        <li class="dropdown"><a href="/work" data-toggle="modal" data-target=".bs-modal-sm"> Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div style="text-align: center; color: #1f1f1f;  padding-top: 130px;">
            <div class="liner" style="background-color: #1f1f1f; width: 2px;"></div>
            <p style="font-size: 70px; font-weight: 600; text-align: center; color: #1f1f1f; font-family: 'Cinzel', serif; letter-spacing: 3px;">matthew ahlberg</p>
            <p style="font-size: 30px; font-weight: 300; text-align: center; color: #1f1f1f; font-family: 'Cinzel', serif;">junior developer</p>
            <div class="liner" style="background-color: #1f1f1f; width: 2px;"></div>
        </div>
    </section>

</head>

<body <?php body_class(); ?>>
                 
<?php gents_container(); // before container hook ?>

         
    <?php gents_header(); // before header hook ?>
    <header>
   
    <?php gents_in_header(); // header hook ?>


           
 
    </header><!-- end of header -->
    <?php gents_header_end(); // after header hook ?>
    
	<?php gents_wrapper(); // before wrapper ?>
    
        <div id="wrapper" class="clearfix">
    
    <?php gents_in_wrapper(); // wrapper hook ?>
