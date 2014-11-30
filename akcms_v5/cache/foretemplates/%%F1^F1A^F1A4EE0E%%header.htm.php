<?php /* Smarty version 2.6.13, created on 2014-11-28 07:47:05
         compiled from header.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'getcategories', 'header.htm', 38, false),)), $this); ?>
<!--top menu-->
<section id="top-menu">
    <div class="container">
        <div class="row">
        </div>
    </div>
</section>

<!--header-->
<header id="header">
    <div class="container">
        <div class="row header-top">
            <div class="span5 logo">
                <a class="logo-img" href="./index.html" title="responsive template"><img src="example/logo.png" alt="Tabulate" /></a>
                <p class="tagline">Responsive Website Template</p>
            </div>
            <div class="span7 social-container">
                <p class="phone hidden-phone"><i class="icon-envelope"></i>supper520love@126.com</p><p class="phone hidden-phone"><i class="icon-bell"></i> QQ  754730072</p>
                <div class="top-social">
                    <a data-original-title="Facebook" rel="tooltip" data-placement="top" class="facebook" href="#"></a>

                   <a data-original-title="Twitter" rel="tooltip" data-placement="top" class="twitter2" href="#"></a>

                    <a data-original-title="Dribble" rel="tooltip" data-placement="top" class="dribbble" href="#"></a>

                    <a data-original-title="Digg" rel="tooltip" data-placement="top" class="digg" href="#"></a>

                    <a data-original-title="DeviantArt" rel="tooltip" data-placement="top" class="dart" href="#"></a>

                    <a data-original-title="Market" rel="tooltip" data-placement="top" class="market" href="#"></a>
                </div>
            </div>
        </div>
        <div class="row header-nav">
            <div class="span12">
                <nav id="menu" class="clearfix">
                    <ul>
                       <?php echo getcategories(array('num' => '20','template' => "<li><a href=()[url]()>[category]</a></li>"), $this);?>

                    </ul>
                </nav>
                <!--<form class="top-search pull-right">-->
                <!--<input type="text" placeholder="text here..." class="span3">-->
                <!--<button type="button" class="btn"><i class="icon-search-form"></i></button>-->
                <!--</form>-->
            </div>
        </div>
    </div>
</header>