<?php
defined('_JEXEC') or die;
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$menu = $app->getMenu();
$lang = JFactory::getLanguage();

$template_url = $this->baseurl . '/templates/' . $this->template;
$doc->addStyleSheet($template_url . '/css/template.css');
$doc->addStyleSheet($template_url . '/css/main.css');
$doc->addStyleSheet($template_url . '/css/font-awesome.min.css');

$doc->addStyleSheet($template_url . '/bootstrap/css/bootstrap.css');
$doc->addStyleSheet($template_url . '/bootstrap/css/bootstrap-theme.css');
$doc->addStyleSheet($template_url . '/bootstrap/css/bootstrap-theme.min.css');
$doc->addStyleSheet($template_url . '/bootstrap/css/bootstrap.min.css');

$doc->addScript($template_url . '/bootstrap/js/bootstrap.js');
$doc->addScript($template_url . '/bootstrap/js/bootstrap.min.js');

$doc->addScript($template_url . '/js/jquery.min.js');
$doc->addScript($template_url . '/js/skel.min.js');
$doc->addScript($template_url . '/js/util.js');
$doc->addScript($template_url . '/js/main.js');

$is_home_page = $menu->getActive() == $menu->getDefault($lang->getTag());
?>

    <!DOCTYPE HTML>

    <html>

    <head>
        <title>УСП "Трест"Реммотажстрой"</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <jdoc:include type="head" />
    </head>

    <body>
        <!-- Wrapper -->
        <div id="wrapper">

            <!-- Main -->
            <div id="main">
                <div class="inner">

                    <!-- Footer -->
                    <header id="header">
                        <a href="index.php" class="logo">
                        <img src="<?php echo $template_url;?>/images/logo.png" align="left" alt="">
                        <h2 align="center">УСП "ТРЕСТ" РЕММОНТАЖСТРОЙ"</h2>
                        </a>
                    </header>

                    <!-- Header -->
                    <jdoc:include type="modules" name="breadcrumbs" />
                    <div class="inner">
                        <jdoc:include type="modules" name="position0" />
                    </div>
                    <jdoc:include type="modules" name="position1" />
                    <jdoc:include type="modules" name="position2" />
                    <jdoc:include type="modules" name="position3" />
                    <br>
                    <jdoc:include type="component" />


                </div>
            </div>

            <!-- Sidebar -->
            <div id="sidebar">
                <div class="inner">

                    <!-- Search -->
                    <jdoc:include type="modules" name="search" />

                    <!-- Menu -->
                    <nav id="menu">
                        <header class="major">
                            <h2>Меню:</h2>
                        </header>
                        <jdoc:include type="modules" name="menu" />
                    </nav>

                    <!-- Footer -->
                    <footer id="footer">
                        <p align="center">Унитарное строительное предприятие
                            <br>«Трест«Реммонтажстрой»
                            <br>ул. Строителей, 24, каб.302, 223710,
                            <br>г. Солигорск Минской области.
                            <br>т/ф: +375174 22 63 66</p>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <p align="center" class="copyright">&copy&nbsp2017&nbspУСП&nbsp"Трест"Реммонтажстрой"</p>
                    </footer>

                </div>

            </div>

        </div>

    </body>

    </html>