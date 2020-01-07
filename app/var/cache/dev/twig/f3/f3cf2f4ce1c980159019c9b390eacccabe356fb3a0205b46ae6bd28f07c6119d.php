<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* shit.html.twig */
class __TwigTemplate_e462972177320b18c886d258e83a14e22d721bea53f677bceec10e36d11baf53 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shit.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"ltr\" lang=\"en\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"ltr\" lang=\"en\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"ltr\" lang=\"en\">
<!--<![endif]-->

<head>
\t<meta charset=\"UTF-8\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<title>Eposi 1 - Responsive Opencart Theme</title>
\t<!--base href=\"http://demo.towerthemes.com/tt_eposi/\" /-->
\t<meta name=\"description\" content=\"Eposi, Responsive, Opencart Theme, Fashion Theme\" />
\t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugin/owl-carousel/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugin/owl-carousel/owl.theme.green.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/ocmegamenu/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/opentheme/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugin/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\" />
\t<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/ionicons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/opentheme/ocslideshow/ocslideshow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t<link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\" rel=\"stylesheet\" />
\t<link href=\"https://fonts.googleapis.com/css?family=Karla:400,700\" rel=\"stylesheet\" />
\t<link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/stylesheet.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugin/jquery/jquery-2.1.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugin/owl-carousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugin/jquery/jquery.plugin.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugin/jquery/jquery.countdown.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/ocmegamenu/menu.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/opentheme/ocslideshow/jquery.nivo.slider.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugin/cloudzoom/cloud-zoom.1.0.2.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugin/cloudzoom/zoom.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/ocquickview/ocquickview.js"), "html", null, true);
        echo "\"></script>
\t<link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/ocquickview/ocquickview.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/ocajaxlogin/ocajaxlogin.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
\t<link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugin/bootstrap/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
\t<link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/ocpagebuilder.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
\t<script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugin/jquery/jquery.bpopup.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugin/jquery/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/ocajaxlogin/ocajaxlogin.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugin/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugin/moment/moment-with-locales.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugin/bootstrap/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript/common.js"), "html", null, true);
        echo "\"></script>
\t<link href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/cart.png"), "html", null, true);
        echo "\" rel=\"icon\" />
\t<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugin/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
</head>

<body class=\"common-home home1\">
\t<div class=\"wrapper\">

\t\t<header>
\t\t\t<div class=\"header-inner fix\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"container-inner\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t<div class=\"inner-inner\">
\t\t\t\t\t\t\t\t<div class=\"col-menu-mobile\">
\t\t\t\t\t\t\t\t\t<style>
\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .oc-menu-bar {
\t\t\t\t\t\t\t\t\t\t\tbackground: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t\tcolor: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t\tpadding: 14px 15px 14px 15px;
\t\t\t\t\t\t\t\t\t\t\tposition: relative;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8790.oc-menu-bar {
\t\t\t\t\t\t\t\t\t\t\tbackground: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t\tcolor: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .ul-top-items .li-top-item {
\t\t\t\t\t\t\t\t\t\t\tbackground: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t\tcolor: #292929;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .ul-top-items .li-top-item .a-top-link {
\t\t\t\t\t\t\t\t\t\t\tpadding: 5px 20px 5px 20px;
\t\t\t\t\t\t\t\t\t\t\tcolor: #292929;
\t\t\t\t\t\t\t\t\t\t\tfont-size: 12px;
\t\t\t\t\t\t\t\t\t\t\tline-height: 25px;
\t\t\t\t\t\t\t\t\t\t\ttext-transform: uppercase;
\t\t\t\t\t\t\t\t\t\t\tfont-weight: 600;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .ul-top-items .li-top-item:hover,
\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .ul-top-items .li-top-item.active {
\t\t\t\t\t\t\t\t\t\t\tbackground: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t\tcolor: #EE3333;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .ul-top-items .li-top-item:hover .a-top-link,
\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .ul-top-items .li-top-item.active .a-top-link {
\t\t\t\t\t\t\t\t\t\t\tcolor: #EE3333;
\t\t\t\t\t\t\t\t\t\t\tfont-weight: 600;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .mega-menu-container {
\t\t\t\t\t\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t\t\t\t\t\t\tbackground: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t\tpadding: 30px 30px 30px 30px;

\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .mega-menu-container .a-mega-second-link,
\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .mega-menu-container .widget-html-title {
\t\t\t\t\t\t\t\t\t\t\tcolor: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .mega-menu-container .a-mega-third-link {
\t\t\t\t\t\t\t\t\t\t\tcolor: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .ul-second-items .li-second-items {
\t\t\t\t\t\t\t\t\t\t\tbackground: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t\tcolor: #292929;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .ul-second-items .li-second-items:hover,
\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .ul-second-items .li-second-items.active {
\t\t\t\t\t\t\t\t\t\t\tbackground: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t\tcolor: #EE3333;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .ul-second-items .li-second-items .a-second-link {
\t\t\t\t\t\t\t\t\t\t\tcolor: #292929;
\t\t\t\t\t\t\t\t\t\t\tfont-size: 12px;
\t\t\t\t\t\t\t\t\t\t\ttext-transform: uppercase;
\t\t\t\t\t\t\t\t\t\t\tfont-weight: 600;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .ul-second-items .li-second-items:hover .a-second-link,
\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .ul-second-items .li-second-items.active .a-second-link {
\t\t\t\t\t\t\t\t\t\t\tcolor: #EE3333;
\t\t\t\t\t\t\t\t\t\t\tfont-weight: 600;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .ul-third-items .li-third-items {
\t\t\t\t\t\t\t\t\t\t\tbackground: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .ul-third-items .li-third-items:hover,
\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .ul-third-items .li-third-items.active {
\t\t\t\t\t\t\t\t\t\t\tbackground: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .ul-third-items .li-third-items .a-third-link {
\t\t\t\t\t\t\t\t\t\t\tcolor: #707070;
\t\t\t\t\t\t\t\t\t\t\tfont-size: 12px;
\t\t\t\t\t\t\t\t\t\t\ttext-transform: capitalize;
\t\t\t\t\t\t\t\t\t\t\tfont-weight: 400;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .ul-third-items .li-third-items:hover .a-third-link,
\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .ul-third-items .li-third-items.active .a-third-link {
\t\t\t\t\t\t\t\t\t\t\tcolor: #EE3333;
\t\t\t\t\t\t\t\t\t\t\tfont-weight: 400;
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t</style>


\t\t\t\t\t\t\t\t\t<div class=\"oc-menu mobile-menu hidden-lg \" id=\"oc-menu-8790\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"menu-effect-8790\" class=\"menu-effect\" value=\"none\" />
\t\t\t\t\t\t\t\t\t\t<div class=\"oc-menu-bar\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"left\"><i class=\"ion-android-menu\"></i> <span>Mobile Menu</span></div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-top-items\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-top-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"a-top-link a-item\" href=\"index.php?route=common/home\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Home</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-top-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"a-top-link a-item\"
\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Shop</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"top-click-show a-click-show\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sub-menu-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_307\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">Bedroom</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"second-click-show a-click-show\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flyout-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_307_414\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Brushes Kits</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_307_416\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Eye Brushes</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_307_360\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Face Brushes</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_307_417\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Lip Brushes</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_48\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">Storage</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"second-click-show a-click-show\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flyout-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_48_361\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">4G LTE Tablets</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_48_358\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Apple iPad</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_48_365\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">E-Readers</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_48_364\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">iPad &amp; Tablet
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAccessories</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_50\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">Decoration</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"second-click-show a-click-show\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flyout-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_50_472\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Face Palettes</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_50_420\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Face Primer</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_50_418\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Lipstick </span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_50_421\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Mascara</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_304\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">Lighting</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"second-click-show a-click-show\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flyout-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_304_474\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Body Cleansing</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_304_424\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Creams &amp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMoisturizers</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_304_423\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Face</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_304_422\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Face Moisturizers</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_304_359\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Masks</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_304_473\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Mousse</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_304_475\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Skin Care Sets &amp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tKits</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-top-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"a-top-link a-item\"
\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Eyes</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"top-click-show a-click-show\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sub-menu-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_84\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">Brushes</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"second-click-show a-click-show\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flyout-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_84_329\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Bags &amp; Cases</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_84_330\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Binoculars &amp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tScopes</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_84_331\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Digital Cameras</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_84_332\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Film Photography</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_84_334\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Lighting &amp; Studio</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_86\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">Mascara</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"second-click-show a-click-show\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flyout-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_86_396\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">DSLR Body &amp; Lens</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_86_397\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">DSLR Body Only</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_86_399\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">DSLR Lenses</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_86_398\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">DSLR Package Deals</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_62\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">Eye Shadow</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"second-click-show a-click-show\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flyout-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_62_401\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Camera Lenses</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_62_400\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">DSLR Lenses</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_62_402\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Lens Accessories</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_62_408\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Lowepro</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_62_410\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">SanDisk</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_91\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">Eye Brushes</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"second-click-show a-click-show\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flyout-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_91_407\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Bower</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_91_411\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Celestron</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_91_412\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Flipbac</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_91_409\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Gary Fong</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_91_413\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">GigaPan</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-top-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"a-top-link a-item\"
\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=451\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Lips</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"top-click-show a-click-show\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sub-menu-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=451_452\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">Brake Tools</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=451_453\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">Drive shafts</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=451_455\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">Emergency Brake</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=451_454\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">Spools</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-top-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"a-top-link a-item\"
\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=456\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Face</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"top-click-show a-click-show\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sub-menu-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=456_457\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">2-Stroke</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=456_460\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">4-Stroke</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=456_459\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">Diesel</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=456_458\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">Gasoline</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-top-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"a-top-link a-item\"
\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"index.php?route=information/information&amp;information_id=4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>About us</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-top-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"a-top-link a-item\" href=\"index.php?route=information/contact\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Contact us</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-top-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"a-top-link a-item\" href=\"index.php?route=product/special\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Specials</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-top-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"a-top-link a-item\" href=\"index.php?route=blog/blog\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Blog</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"logo-container\">
\t\t\t\t\t\t\t\t\t<div id=\"logo\">
\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=common/home\"><img
\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 581
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/logo/logo.png"), "html", null, true);
        echo "\"title=\"Eposi1\" alt=\"Eposi1\" class=\"img-responsive\" /></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-hoz \">
\t\t\t\t\t\t\t\t\t<style>
\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .oc-menu-bar {
\t\t\t\t\t\t\t\t\t\t\tbackground: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t\tcolor: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t\tpadding: 15px 15px 15px 15px;
\t\t\t\t\t\t\t\t\t\t\tposition: relative;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8524.oc-menu-bar {
\t\t\t\t\t\t\t\t\t\t\tbackground: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t\tcolor: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .ul-top-items .li-top-item {
\t\t\t\t\t\t\t\t\t\t\tbackground: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t\tcolor: #292929;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .ul-top-items .li-top-item .a-top-link {
\t\t\t\t\t\t\t\t\t\t\tpadding: 14px 20px 14px 20px;
\t\t\t\t\t\t\t\t\t\t\tcolor: #292929;
\t\t\t\t\t\t\t\t\t\t\tfont-size: 12px;
\t\t\t\t\t\t\t\t\t\t\tline-height: 26px;
\t\t\t\t\t\t\t\t\t\t\ttext-transform: uppercase;
\t\t\t\t\t\t\t\t\t\t\tfont-weight: 600;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .ul-top-items .li-top-item:hover,
\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .ul-top-items .li-top-item.active {
\t\t\t\t\t\t\t\t\t\t\tbackground: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t\tcolor: #EE3333;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .ul-top-items .li-top-item:hover .a-top-link,
\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .ul-top-items .li-top-item.active .a-top-link {
\t\t\t\t\t\t\t\t\t\t\tcolor: #EE3333;
\t\t\t\t\t\t\t\t\t\t\tfont-weight: 600;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .mega-menu-container {
\t\t\t\t\t\t\t\t\t\t\twidth: 1020px;
\t\t\t\t\t\t\t\t\t\t\tbackground: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t\tpadding: 45px 50px 50px 50px;

\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .mega-menu-container .a-mega-second-link,
\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .mega-menu-container .widget-html-title {
\t\t\t\t\t\t\t\t\t\t\tcolor: #292929;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .mega-menu-container .a-mega-third-link {
\t\t\t\t\t\t\t\t\t\t\tcolor: #707070;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .ul-second-items .li-second-items {
\t\t\t\t\t\t\t\t\t\t\tbackground: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t\tcolor: #292929;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .ul-second-items .li-second-items:hover,
\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .ul-second-items .li-second-items.active {
\t\t\t\t\t\t\t\t\t\t\tbackground: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t\tcolor: #EE3333;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .ul-second-items .li-second-items .a-second-link {
\t\t\t\t\t\t\t\t\t\t\tcolor: #292929;
\t\t\t\t\t\t\t\t\t\t\tfont-size: 12px;
\t\t\t\t\t\t\t\t\t\t\ttext-transform: uppercase;
\t\t\t\t\t\t\t\t\t\t\tfont-weight: 600;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .ul-second-items .li-second-items:hover .a-second-link,
\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .ul-second-items .li-second-items.active .a-second-link {
\t\t\t\t\t\t\t\t\t\t\tcolor: #EE3333;
\t\t\t\t\t\t\t\t\t\t\tfont-weight: 600;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .ul-third-items .li-third-items {
\t\t\t\t\t\t\t\t\t\t\tbackground: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .ul-third-items .li-third-items:hover,
\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .ul-third-items .li-third-items.active {
\t\t\t\t\t\t\t\t\t\t\tbackground: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .ul-third-items .li-third-items .a-third-link {
\t\t\t\t\t\t\t\t\t\t\tcolor: #707070;
\t\t\t\t\t\t\t\t\t\t\tfont-size: 12px;
\t\t\t\t\t\t\t\t\t\t\ttext-transform: capitalize;
\t\t\t\t\t\t\t\t\t\t\tfont-weight: 400;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .ul-third-items .li-third-items:hover .a-third-link,
\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .ul-third-items .li-third-items.active .a-third-link {
\t\t\t\t\t\t\t\t\t\t\tcolor: #EE3333;
\t\t\t\t\t\t\t\t\t\t\tfont-weight: 400;
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t</style>
\t\t\t\t\t\t\t\t\t<div class=\"oc-menu horizontal-menu oc-menu-bar visible-lg \" id=\"oc-menu-8524\">

\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"menu-effect-8524\" class=\"menu-effect\" value=\"none\" />
\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-top-items\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-top-item left \" style=\"float: left\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"a-top-link\" href=\"index.php?route=common/home\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Home</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-top-item left has-child\" style=\"float: left\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"a-top-link\" href=\"index.php?route=product/category&amp;path=20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Shop</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Mega Menu -->


\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mega-menu-container sub-menu-container left \">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 sub-item2-content sub-item2-category-content\" data-cols=\"3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a class=\"a-mega-second-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=307\">Bedroom</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sub_item3-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><a class=\"a-mega-third-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=307_414\">Brushes
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tKits</a></h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><a class=\"a-mega-third-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=307_416\">Eye
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tBrushes</a></h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><a class=\"a-mega-third-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=307_360\">Face
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tBrushes</a></h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><a class=\"a-mega-third-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=307_417\">Lip
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tBrushes</a></h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>



\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 sub-item2-content sub-item2-category-content\" data-cols=\"3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a class=\"a-mega-second-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=124\">Living
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tRoom</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sub_item3-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><a class=\"a-mega-third-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=124_305\">Handbag</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><a class=\"a-mega-third-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=124_362\">Kids'
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTable</a></h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><a class=\"a-mega-third-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=124_133\">Clothing</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><a class=\"a-mega-third-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=124_137\">Shoes</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>



\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 sub-item2-content sub-item2-category-content\" data-cols=\"3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a class=\"a-mega-second-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=50\">Decoration</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sub_item3-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><a class=\"a-mega-third-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=50_472\">Face
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPalettes</a></h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><a class=\"a-mega-third-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=50_420\">Face
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPrimer</a></h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><a class=\"a-mega-third-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=50_418\">Lipstick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a></h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><a class=\"a-mega-third-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=50_421\">Mascara</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>



\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 sub-item2-content sub-item2-category-content\" data-cols=\"3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a class=\"a-mega-second-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=48\">Storage</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sub_item3-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><a class=\"a-mega-third-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=48_361\">4G
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLTE Tablets</a></h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><a class=\"a-mega-third-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=48_358\">Apple
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tiPad</a></h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><a class=\"a-mega-third-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=48_365\">E-Readers</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><a class=\"a-mega-third-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=48_364\">iPad
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&amp; Tablet Accessories</a></h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>





\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 sub-item2-content\" data-cols=\"12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"widget-html-title\"></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"banner-static static-bottom-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&amp;path=20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 801
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/img-bottom-menu.jpg"), "html", null, true);
        echo "\" alt=\"img-bottom-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<!-- Flyout Menu -->
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-top-item left has-child\" style=\"float: left\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"a-top-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Accessories</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Mega Menu -->

\t\t\t\t\t\t\t\t\t\t\t\t<!-- Flyout Menu -->

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flyout-menu-container sub-menu-container left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_84\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">Brushes</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flyout-third-items left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_84_329\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Bags &amp; Cases</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_84_330\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Binoculars &amp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tScopes</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_84_331\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Digital Cameras</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_84_332\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Film Photography</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_84_334\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Lighting &amp; Studio</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_86\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">Mascara</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flyout-third-items left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_86_396\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">DSLR Body &amp; Lens</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_86_397\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">DSLR Body Only</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_86_399\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">DSLR Lenses</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_86_398\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">DSLR Package Deals</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_62\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">Eye Shadow</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flyout-third-items left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_62_401\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Camera Lenses</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_62_400\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">DSLR Lenses</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_62_402\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Lens Accessories</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_62_408\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Lowepro</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_62_410\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">SanDisk</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_91\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">Eye Brushes</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flyout-third-items left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_91_407\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Bower</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_91_411\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Celestron</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_91_412\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Flipbac</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_91_409\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Gary Fong</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_91_413\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">GigaPan</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-top-item left \" style=\"float: left\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"a-top-link\" href=\"index.php?route=information/contact\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Contact us</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-top-item left \" style=\"float: left\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"a-top-link\" href=\"index.php?route=product/special\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Specials</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-top-item left \" style=\"float: left\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"a-top-link\" href=\"index.php?route=blog/blog\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Blog</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t</div>




\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box-cart\">
\t\t\t\t\t\t\t\t\t<div id=\"search-by-category\" class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-toggle search-button\" data-toggle=\"dropdown\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu search-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button-close\"><i class=\"ion-ios-close-empty\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"search-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"categories-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hover-cate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p><span class=\"cate-selected\" data-value=\"0\">All Categories</span><i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-caret-down\"></i></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"cate-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"item-cate\" data-value=\"0\">All Categories</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"56\" class=\"item-cate\">accessories</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"84\" class=\"item-cate f1\">Brushes</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"329\" class=\"item-cate f2\">Bags &amp; Cases</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"330\" class=\"item-cate f2\">Binoculars &amp; Scopes</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"331\" class=\"item-cate f2\">Digital Cameras</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"332\" class=\"item-cate f2\">Film Photography</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"334\" class=\"item-cate f2\">Lighting &amp; Studio</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"86\" class=\"item-cate f1\">Mascara</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"396\" class=\"item-cate f2\">DSLR Body &amp; Lens</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"397\" class=\"item-cate f2\">DSLR Body Only</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"399\" class=\"item-cate f2\">DSLR Lenses</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"398\" class=\"item-cate f2\">DSLR Package Deals</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"62\" class=\"item-cate f1\">Eye Shadow</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"401\" class=\"item-cate f2\">Camera Lenses</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"400\" class=\"item-cate f2\">DSLR Lenses</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"402\" class=\"item-cate f2\">Lens Accessories</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"408\" class=\"item-cate f2\">Lowepro</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"410\" class=\"item-cate f2\">SanDisk</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"91\" class=\"item-cate f1\">Eye Brushes</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"407\" class=\"item-cate f2\">Bower</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"411\" class=\"item-cate f2\">Celestron</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"412\" class=\"item-cate f2\">Flipbac</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"409\" class=\"item-cate f2\">Gary Fong</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"413\" class=\"item-cate f2\">GigaPan</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"461\" class=\"item-cate\">Car Seats</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"463\" class=\"item-cate f1\">Booster</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"462\" class=\"item-cate f1\">Convertible</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"464\" class=\"item-cate f1\">Infant</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"465\" class=\"item-cate f1\">Toddler</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"312\" class=\"item-cate\">Chairs</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"386\" class=\"item-cate f1\">Bridge</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"385\" class=\"item-cate f1\">Hub</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"384\" class=\"item-cate f1\">Repeater</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"387\" class=\"item-cate f1\">Switch</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"308\" class=\"item-cate f1\">Video Games Cosoles</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"373\" class=\"item-cate f2\">PlayStation 3</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"372\" class=\"item-cate f2\">PlayStation 4</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"375\" class=\"item-cate f2\">Xbox 360</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"374\" class=\"item-cate f2\">Xbox One</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"309\" class=\"item-cate\">Engine Parts</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"376\" class=\"item-cate f1\">Calculators</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"425\" class=\"item-cate f1\">Check Trousers</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"377\" class=\"item-cate f1\">Ink &amp; Toner</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"426\" class=\"item-cate f1\">Low-Cut Jeans</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"431\" class=\"item-cate\">House Plants</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"21\" class=\"item-cate\">Lawn Care</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"440\" class=\"item-cate f1\">Hoes</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"438\" class=\"item-cate f1\">Shovels &amp; Trowels</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"436\" class=\"item-cate f1\">Trowels</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"437\" class=\"item-cate f1\">Workseats</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"451\" class=\"item-cate\">Lips</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"452\" class=\"item-cate f1\">Brake Tools</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"453\" class=\"item-cate f1\">Drive shafts</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"455\" class=\"item-cate f1\">Emergency Brake</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"454\" class=\"item-cate f1\">Spools</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"427\" class=\"item-cate\">Perfomance Filters</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"441\" class=\"item-cate\">Power Tools</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"442\" class=\"item-cate f1\">Battery Packs</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"444\" class=\"item-cate f1\">Chainsaws</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"445\" class=\"item-cate f1\">Cultivators &amp; Tillers</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"443\" class=\"item-cate f1\">Hedge Trimmers</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"466\" class=\"item-cate\">Repair parts</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"467\" class=\"item-cate f1\">Bearings</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"469\" class=\"item-cate f1\">Rim Screws</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"468\" class=\"item-cate f1\">Seals &amp; Hubs</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"470\" class=\"item-cate f1\">Simulators</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"430\" class=\"item-cate\">Seals &amp; Hubs</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"20\" class=\"item-cate\">Shop</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"307\" class=\"item-cate f1\">Bedroom</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"414\" class=\"item-cate f2\">Brushes Kits</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"416\" class=\"item-cate f2\">Eye Brushes</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"360\" class=\"item-cate f2\">Face Brushes</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"417\" class=\"item-cate f2\">Lip Brushes</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"124\" class=\"item-cate f1\">Living Room</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"305\" class=\"item-cate f2\">Handbag</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"362\" class=\"item-cate f2\">Kids' Table</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"133\" class=\"item-cate f2\">Clothing</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"137\" class=\"item-cate f2\">Shoes</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"48\" class=\"item-cate f1\">Storage</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"361\" class=\"item-cate f2\">4G LTE Tablets</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"358\" class=\"item-cate f2\">Apple iPad</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"365\" class=\"item-cate f2\">E-Readers</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"364\" class=\"item-cate f2\">iPad &amp; Tablet Accessories</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"50\" class=\"item-cate f1\">Decoration</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"472\" class=\"item-cate f2\">Face Palettes</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"420\" class=\"item-cate f2\">Face Primer</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"418\" class=\"item-cate f2\">Lipstick </li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"421\" class=\"item-cate f2\">Mascara</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"304\" class=\"item-cate f1\">Lighting</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"474\" class=\"item-cate f2\">Body Cleansing</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"424\" class=\"item-cate f2\">Creams &amp; Moisturizers</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"423\" class=\"item-cate f2\">Face</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"422\" class=\"item-cate f2\">Face Moisturizers</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"359\" class=\"item-cate f2\">Masks</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"473\" class=\"item-cate f2\">Mousse</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"475\" class=\"item-cate f2\">Skin Care Sets &amp; Kits</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"456\" class=\"item-cate\">Sofas</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"457\" class=\"item-cate f1\">2-Stroke</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"460\" class=\"item-cate f1\">4-Stroke</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"459\" class=\"item-cate f1\">Diesel</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"458\" class=\"item-cate f1\">Gasoline</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"search\" id=\"text-search\" value=\"\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tplaceholder=\"Search entire store here ...\" class=\"\" />

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"sp-btn-search\" class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"btn-search-category\" class=\"btn btn-default btn-lg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Search</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"search-ajax\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ajax-loader-container\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 1102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/AjaxLoader.gif"), "html", null, true);
        echo "\" class=\"ajax-load-img\" width=\"30\" height=\"30\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"plazathemes.com\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ajax-result-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Content of search results -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"ajax-search-enable\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\$(document).ready(function () {
\t\t\t\t\t\t\t\t\t\t\tvar flag = false;
\t\t\t\t\t\t\t\t\t\t\tvar ajax_search_enable = \$('#ajax-search-enable').val();

\t\t\t\t\t\t\t\t\t\t\tvar current_cate_value = \$('ul.cate-items li.selected').data('value');
\t\t\t\t\t\t\t\t\t\t\tvar current_cate_text = \$('ul.cate-items li.selected').html();

\t\t\t\t\t\t\t\t\t\t\t\$('.cate-selected').attr('data-value', current_cate_value);
\t\t\t\t\t\t\t\t\t\t\t\$('.cate-selected').html(current_cate_text);

\t\t\t\t\t\t\t\t\t\t\t\$('.hover-cate p').click(function () {
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".cate-items\").toggle(\"slow\");
\t\t\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t\t\t\$('.ajax-result-container').hover(
\t\t\t\t\t\t\t\t\t\t\t\tfunction () {
\t\t\t\t\t\t\t\t\t\t\t\t\tflag = true;
\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\tfunction () {
\t\t\t\t\t\t\t\t\t\t\t\t\tflag = false;
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t);

\t\t\t\t\t\t\t\t\t\t\t\$('.hover-cate').hover(
\t\t\t\t\t\t\t\t\t\t\t\tfunction () {
\t\t\t\t\t\t\t\t\t\t\t\t\tflag = true;
\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\tfunction () {
\t\t\t\t\t\t\t\t\t\t\t\t\tflag = false;
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t);

\t\t\t\t\t\t\t\t\t\t\t\$('#search-by-category').focusout(function () {
\t\t\t\t\t\t\t\t\t\t\t\tif (flag == true) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.ajax-result-container').show();
\t\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.ajax-result-container').hide();
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t\t\t\$('#search-by-category').focusin(function () {
\t\t\t\t\t\t\t\t\t\t\t\t\$('.ajax-result-container').show();
\t\t\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t\t\t\$('#btn-search-category').click(function () {
\t\t\t\t\t\t\t\t\t\t\t\tvar url = 'http://demo.towerthemes.com/tt_eposi/index.php?route=product/search';
\t\t\t\t\t\t\t\t\t\t\t\tvar text_search = \$('#text-search').val();
\t\t\t\t\t\t\t\t\t\t\t\tif (text_search) {
\t\t\t\t\t\t\t\t\t\t\t\t\turl += '&search=' + encodeURIComponent(text_search);
\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\tvar category_search = \$('.cate-selected').attr(\"data-value\");
\t\t\t\t\t\t\t\t\t\t\t\tif (category_search) {
\t\t\t\t\t\t\t\t\t\t\t\t\turl += '&category_id=' + encodeURIComponent(category_search);
\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\tlocation = url;
\t\t\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t\t\tif (ajax_search_enable == '1') {
\t\t\t\t\t\t\t\t\t\t\t\t\$('#text-search').keyup(function (e) {
\t\t\t\t\t\t\t\t\t\t\t\t\tvar text_search = \$(this).val();
\t\t\t\t\t\t\t\t\t\t\t\t\tvar cate_search = \$('.cate-selected').attr(\"data-value\");
\t\t\t\t\t\t\t\t\t\t\t\t\tif (text_search != null && text_search != '') {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tajaxSearch(text_search, cate_search);
\t\t\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.ajax-result-container').html('');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.ajax-loader-container').hide();
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t\t\t\t\$('ul.cate-items li.item-cate').click(function () {
\t\t\t\t\t\t\t\t\t\t\t\t\tvar cate_search = \$(this).data('value');
\t\t\t\t\t\t\t\t\t\t\t\t\tvar text_search = \$('#text-search').val();
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.cate-selected').attr('data-value', cate_search);
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.cate-selected').html(\$(this).html());
\t\t\t\t\t\t\t\t\t\t\t\t\tif (text_search != null && text_search != '') {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tajaxSearch(text_search, cate_search);
\t\t\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.ajax-result-container').html('');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.ajax-loader-container').hide();
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\".cate-items\").hide();
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#text-search').focus();
\t\t\t\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\tfunction ajaxSearch(text_search, cate_search) {
\t\t\t\t\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\t\t\t\t\turl: 'http://demo.towerthemes.com/tt_eposi/index.php?route=extension/module/ocsearchcategory/ajaxSearch',
\t\t\t\t\t\t\t\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\t\t\t\t\t\t\t\tdata: { text_search: text_search, cate_search: cate_search },
\t\t\t\t\t\t\t\t\t\t\t\t\tbeforeSend: function () {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.ajax-loader-container').show();
\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\tsuccess: function (json) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (json['success'] == true) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.ajax-result-container').html(json['result_html']);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.ajax-loader-container').hide();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t});    
\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t<div id=\"cart\" class=\"btn-group btn-block\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"dropdown\" data-loading-text=\"Loading...\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"btn dropdown-toggle\"><span id=\"cart-total\"><span class=\"txt_number\">0</span><span
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"txt_items\">My Cart </span><span class=\"total-price\">\$0.00</span></span></button>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu pull-right\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-center cart-empty\">Your shopping cart is empty!</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"box-setting\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-toggle setting-button\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t<span></span><span></span><span></span></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu setting-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"account\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-link btn-link-current\">My Account <i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-arrow-down\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\" id=\"top-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-account list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"a-register-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=account/register\">Register</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"a-login-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=account/login\">Login</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"currency\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"http://demo.towerthemes.com/tt_eposi/index.php?route=common/currency/currency\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tmethod=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left hidden-xs hidden-sm hidden-md text-ex\">Currency:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-link btn-link-current\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tUSD
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-arrow-down\"></i>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"EUR\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t€

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEuro
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"GBP\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t£

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPound Sterling
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"item-selected currency-select btn btn-link btn-block\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"USD\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tUS Dollar
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"code\" value=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"http://demo.towerthemes.com/tt_eposi/index.php?route=common/home\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"http://demo.towerthemes.com/tt_eposi/index.php?route=common/language/language\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tmethod=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left hidden-xs hidden-sm hidden-md text-ex\">Language:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-link btn-link-current\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ten-gb
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-arrow-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><button class=\"btn btn-link btn-block language-select item-selected\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"en-gb\"><img src=\"";
        // line 1313
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/language/en-gb.png"), "html", null, true);
        echo "\"alt=\"English\" title=\"English\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEnglish</button></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"de-de\"><img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 1316
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/language/de-de.png"), "html", null, true);
        echo "\"alt=\"Germany\" title=\"Germany\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tGermany</button></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"code\" value=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"http://demo.towerthemes.com/tt_eposi/index.php?route=common/home\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>

\t\t<div id=\"content\">

\t\t\t<div class=\"main-row fluid-width\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"main-col col-sm-12 col-md-12\">
\t\t\t\t\t\t\t<div class=\"row sub-row\">
\t\t\t\t\t\t\t\t<div class=\"sub-col col-sm-12 col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"newletter-popup\">
\t\t\t\t\t\t\t\t\t\t<div id=\"boxes\" class=\"newletter-container\">
\t\t\t\t\t\t\t\t\t\t\t<div id=\"dialog\" class=\"window\">
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"popup2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"b-close\"><span>Close</span></span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"newletter-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>Newsletter</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-content newleter-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Subscribe to our newsletters now and stay up-to-date with new collections, the latest
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tlookbooks and exclusive offers.</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"frm_subscribe\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form name=\"subscribe\" id=\"subscribe_popup\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <span class=\"required\">*</span><span>Enter you email address here...</span>-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"\" name=\"subscribe_pemail\" id=\"subscribe_pemail\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tplaceholder=\"Enter you email address here...\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"\" name=\"subscribe_pname\" id=\"subscribe_pname\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"notification\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"button\" onclick=\"email_subscribepopup()\"><span>Subscribe</span></a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"subscribe-bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"newsletter_popup_dont_show_again\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"newsletter_popup_dont_show_again\">Don't show this popup again</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /#frm_subscribe -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.box-content -->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tfunction email_subscribepopup() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\t\t\t\t\t\t\t\t\turl: 'index.php?route=extension/module/newslettersubscribe/subscribepopup',
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata: \$(\"#subscribe_popup\").serialize(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\tsuccess: function (html) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \$.cookie('shownewsletter', '1');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttry {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\teval(html);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcatch (e) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\tfunction email_unsubscribepopup() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\t\t\t\t\t\t\t\t\turl: 'index.php?route=extension/module/newslettersubscribe/unsubscribe',
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata: \$(\"#subscribe_popup\").serialize(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\tsuccess: function (html) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttry {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\teval(html);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcatch (e) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('html, body').delay(1500).animate({ scrollTop: 0 }, 'slow');
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\t\$(document).ready(function () {

\t\t\t\t\t\t\t\t\t\t\t\t\t/*if (\$.cookie('shownewsletter') == 1) \$('.newletter-popup').hide();
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#subscribe_pemail').keypress(function (e) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (e.which == 13) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\te.preventDefault();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\temail_subscribepopup();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar name = \$(this).val();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#subscribe_pname').val(name);
\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#subscribe_pemail').change(function () {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar name = \$(this).val();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#subscribe_pname').val(name);
\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t//transition effect
\t\t\t\t\t\t\t\t\t\t\t\t\tif (\$.cookie(\"shownewsletter\") != 1) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.newletter-popup').bPopup();
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#newsletter_popup_dont_show_again').on('change', function () {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (\$.cookie(\"shownewsletter\") != 1) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$.cookie(\"shownewsletter\", '1')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$.cookie(\"shownewsletter\", '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t});*/
\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div><!-- /.box -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"ajax-login-block\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"ajax-loader\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 1448
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/AjaxLoader.gif"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ajax-body-login\">
\t\t\t\t\t\t\t\t\t\t<div class=\"account-login\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"page-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1>Login or create an account</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"a-close-frm\"
\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocajaxlogin.closeForm();\"><span>Close</span></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ajax-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ajax-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"login-form-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>Returning Customer</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p><strong>I am a returning customer</strong></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"#\" method=\"post\" id=\"ajax-login-form\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-email\">E-Mail Address</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" value=\"\" placeholder=\"E-Mail Address\" id=\"input-email\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-password\">Password</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"\" placeholder=\"Password\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"input-password\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"forgotten\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=account/forgotten\">Forgotten
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPassword</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocajaxlogin.loginAction(document.getElementById('input-email').value, document.getElementById('input-password').value)\"><span>Login</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocajaxlogin.appendRegisterForm()\"><span>Create an account</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"ajax-load-img\" alt=\"\" src=\"";
        // line 1481
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/AjaxLoader.gif"), "html", null, true);
        echo "\" width=\"30\" height=\"30\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\$(document).ready(function () {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar keycode = '';

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#input-email').keypress(function (e) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tkeycode = (e.keyCode ? e.keyCode : e.which);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (keycode == '13') {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tocajaxlogin.loginAction(ocajaxlogin.loginAction(document.getElementById('input-email').value, document.getElementById('input-password').value));
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#input-password').keypress(function (e) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tkeycode = (e.keyCode ? e.keyCode : e.which);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (keycode == '13') {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tocajaxlogin.loginAction(ocajaxlogin.loginAction(document.getElementById('input-email').value, document.getElementById('input-password').value));
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t\t\t\t</script>


\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"account-register\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"page-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1>Login or create an account</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"a-close-frm\"
\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocajaxlogin.closeForm();\"><span>Close</span></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ajax-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ajax-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"register-form-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h1>Register Account</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>If you already have an account with us, please login at the <a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocajaxlogin.appendLoginForm()\" href=\"javascript:void(0);\">login form</a>.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\taction=\"http://demo.towerthemes.com/tt_eposi/index.php?route=extension/module/ajaxregister\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmethod=\"post\" id=\"ajax-register-form\" enctype=\"multipart/form-data\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-horizontal\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset id=\"account\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>Your Personal Details</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\" style=\"display:  none ;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">Customer Group</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"customer_group_id\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDefault</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-firstname\">First Name</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"First Name\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"input-firstname\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Error First Name -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"for-error error-firstname\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-lastname\">Last Name</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"Last Name\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"input-lastname\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Error Last Name -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"for-error error-lastname\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-register-email\">E-Mail</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"\" placeholder=\"E-Mail\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"input-register-email\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Error Email -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"for-error error-email\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-telephone\">Telephone</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"tel\" name=\"telephone\" value=\"\" placeholder=\"Telephone\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"input-telephone\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Error Phone -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"for-error error-telephone\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>Your Password</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-register-password\">Password</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"\" placeholder=\"Password\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"input-register-password\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Error Password -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"for-error error-password\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-confirm\">Password Confirm</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"confirm\" value=\"\" placeholder=\"Password Confirm\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"input-confirm\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Error Confirm Password -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"for-error error-confirm\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>Newsletter</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">Subscribe</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"newsletter\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tYes</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNo</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-right\">I have read and agree to the <a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=information/information/agree&amp;information_id=3\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"agree\"><b>Privacy Policy</b></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" onclick=\"ocajaxlogin.registerAction();\" value=\"Continue\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"btn btn-primary\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"ajax-load-img\" alt=\"\" src=\"";
        // line 1620
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/AjaxLoader.gif"), "html", null, true);
        echo "\" width=\"30\" height=\"30\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger for-error error-warning\"><i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-exclamation-circle\"></i><span></span></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<script>< !--
\t\t\t\t\t\t\t\t\t\t\t\t\t\t// Sort the custom fields
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#account .form-group[data-sort]').detach().each(function () {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (\$(this).attr('data-sort') > \$('#account .form-group').length) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#account .form-group:last').after(this);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#account .form-group:first').before(this);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#address .form-group[data-sort]').detach().each(function () {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#address .form-group').length) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#address .form-group').eq(\$(this).attr('data-sort')).before(this);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (\$(this).attr('data-sort') > \$('#address .form-group').length) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#address .form-group:last').after(this);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (\$(this).attr('data-sort') < -\$('#address .form-group').length) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#address .form-group:first').before(this);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t\t\t\t\t\$('input[name=\\'customer_group_id\\']').on('change', function () {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\turl: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsuccess: function (json) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.custom-field').hide();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.custom-field').removeClass('required');

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcustom_field = json[i];

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#custom-field' + custom_field['custom_field_id']).show();

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (custom_field['required']) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#custom-field' + custom_field['custom_field_id']).addClass('required');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tconsole.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t\t\t\t\t\$('input[name=\\'customer_group_id\\']:checked').trigger('change');
    //--></script>
\t\t\t\t\t\t\t\t\t\t\t\t<script>< !--
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('button[id^=\\'button-custom-field\\']').on('click', function () {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar element = this;

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#form-upload').remove();

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (typeof timer != 'undefined') {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclearInterval(timer);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttimer = setInterval(function () {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclearInterval(timer);

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcache: false,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcontentType: false,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tprocessData: false,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbeforeSend: function () {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(element).button('loading');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcomplete: function () {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(element).button('reset');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsuccess: function (json) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(element).parent().find('.text-danger').remove();

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(element).parent().find('input').val(json['code']);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}, 500);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
    //--></script>
\t\t\t\t\t\t\t\t\t\t\t\t<script>< !--
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.date').datetimepicker({
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tlanguage: document.cookie.match(new RegExp('language=([^;]+)'))[1],
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpickTime: false
\t\t\t\t\t\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.time').datetimepicker({
\t\t\t\t\t\t\t\t\t\t\t\t\t\tlanguage: document.cookie.match(new RegExp('language=([^;]+)'))[1],
\t\t\t\t\t\t\t\t\t\t\t\t\t\tpickDate: false
\t\t\t\t\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.datetime').datetimepicker({
\t\t\t\t\t\t\t\t\t\t\t\t\t\tlanguage: document.cookie.match(new RegExp('language=([^;]+)'))[1],
\t\t\t\t\t\t\t\t\t\t\t\t\t\tpickDate: true,
\t\t\t\t\t\t\t\t\t\t\t\t\t\tpickTime: true
\t\t\t\t\t\t\t\t\t\t\t\t\t});
    //--></script>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"account-success\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ajax-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ajax-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"success-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"page-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h1>Your Account Has Been Created!</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Thank you for registering with Eposi1!</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>You will be notified by e-mail once your account has been activated by the store owner.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>If you have ANY questions about the operation of this online shop, please <a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=information/contact\">contact
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tthe store owner</a>.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-right\"><button class=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"window.location.href='http://demo.towerthemes.com/tt_eposi/index.php?route=account/account'\"><span>Continue</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"logout-success\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ajax-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ajax-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"success-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"page-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h1>Account Logout</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>You have been logged off your account. It is now safe to leave the computer.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Your shopping cart has been saved, the items inside it will be restored whenever you log
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tback into your account.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-right\"><button class=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"window.location.href='http://demo.towerthemes.com/tt_eposi/index.php?route=common/home'\"><span>Continue</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"opc-hidden\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"input-opc-status\" value=\"1\" />
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"banner7\">
\t\t\t\t\t\t\t\t\t\t<div class=\"oc-banner7-container\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"flexslider oc-nivoslider\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"oc-loading\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"oc-inivoslider1\" class=\"nivoSlider\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"display: none;\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 1812
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/slider/slider2-eposi1-1820x785.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\" title=\"#banner7-caption2\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"display: none;\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 1817
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/slider/slider3-eposi1-1820x785.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\" title=\"#banner7-caption3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"display: none;\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 1822
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/slider/slider1-eposi1-1820x785.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\" title=\"#banner7-caption4\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t</div>





\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"banner7-caption2\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"banner7-caption nivo-html-caption nivo-caption move-slides-effect\"
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-class=\"slide-movetype2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeloading\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\" banner7-content slider-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"container-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"title1\">amazing product!</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"sub-title\">Decor chair</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"banner7-des\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>An elegant selection of chairs combining comfort &amp; practicality. Providing
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tthe perfect solution for large &amp; small scale exhibition seating.</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"banner7-readmore\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"link-more\" href=\"#\">Shopping Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>




\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"banner7-caption3\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"banner7-caption nivo-html-caption nivo-caption move-slides-effect\"
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-class=\"slide-movetype3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeloading\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\" banner7-content slider-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"container-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"title1\">Walnut Time signal</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"sub-title\">wall clock</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"banner7-des\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>A striking centrepiece is conveyed through this Clock's graphically styled
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tintegration with any modern.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"banner7-readmore\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"link-more\" href=\"#\">Shopping Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>




\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"banner7-caption4\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"banner7-caption nivo-html-caption nivo-caption move-slides-effect\"
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-class=\"slide-movetype1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeloading\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\" banner7-content slider-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"container-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"title1\">amazing product!</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"sub-title\">Wall Clock</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"banner7-des\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Let your Wall reflect the luxurious side of you with our Unique Design 24ct.gold
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tplated Wall Clock.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"banner7-readmore\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"link-more\" href=\"#\">Shopping Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\$(window).load(function () {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#oc-inivoslider1').nivoSlider({
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\teffect: \"random\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tslices: 15,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tboxCols: 8,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tboxRows: 4,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmanualAdvance: false,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tanimSpeed: 500,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpauseTime: 5000,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstartSlide: 0,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcontrolNav: true,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdirectionNav: true,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcontrolNavThumbs: false,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpauseOnHover: true,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tprevText: '<i class=\"ion-chevron-left\"></i>',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tnextText: '<i class=\"ion-chevron-right\"></i>',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tafterLoad: function () {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.oc-loading').css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.timeloading').css('animation-duration', \" 5000ms \");
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"main-row \">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"main-col col-sm-12 col-md-12\">
\t\t\t\t\t\t\t<div class=\"row sub-row\">
\t\t\t\t\t\t\t\t<div class=\"sub-col col-sm-12 col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"banner-static static-top-store1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&amp;path=20_48\"><img src=\"";
        // line 1968
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/img1-top-eposi1.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"img1\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Storage</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&amp;path=20_48\">Shop Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&amp;path=20_304\"><img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 1979
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/img2-top-eposi1.jpg"), "html", null, true);
        echo "\" alt=\"img2\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Lighting</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&amp;path=20_304\">Shop Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&amp;path=20_50\"><img src=\"";
        // line 1988
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/img3-top-eposi1.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"img3\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Decoration</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&amp;path=20_50\">Shop Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&amp;path=20_124\"><img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 1999
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/img4-top-eposi1.jpg"), "html", null, true);
        echo "\" alt=\"img4\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Living Room</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&amp;path=20_124\">Shop Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tt_tabsproduct_module tabs-category-slider\" id=\"product_module656\">
\t\t\t\t\t\t\t\t\t\t<div class=\"module-title\">

\t\t\t\t\t\t\t\t\t\t\t<h2>Our Products</h2>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"module-description\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum
\t\t\t\t\t\t\t\t\t\t\t\t\tformas. </p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-tab\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tab-heading tabs-categorys\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"pill\" href=\"#tab-6560\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Decoration</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"pill\" href=\"#tab-6561\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Lighting</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"pill\" href=\"#tab-6562\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Storage</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"pill\" href=\"#tab-6563\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Living Room</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t\t\t\t\t\t\t</div>



\t\t\t\t\t\t\t\t\t\t<div class=\"box-style\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-product\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"owl-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tt-product \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"tab-container-656  owl-carousel owl-theme  tab-pane tab-product-container  fade \"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"tab-6560\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=53\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"";
        // line 2069
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//2_1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Sony XBR-55X900E 55-inch 4K HDR Ultra HD\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 2071
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//2-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Sony XBR-55X900E 55-inch 4K HDR Ultra HD\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Sony XBR-55X900E 55-inch 4K HDR Ultra HD\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\"><span>-2% </span></div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('53');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('53');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('53');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=53')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=5\">HTC</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating3\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=53\">Sony
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tXBR-55X900E 55-inch 4K HDR Ultra HD</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">\$78.80</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">\$80.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$64.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=56\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"";
        // line 2143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//11_1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Roush Mustang 4-Piston Black Front Brake Kit\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 2145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//11-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Roush Mustang 4-Piston Black Front Brake Kit\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Roush Mustang 4-Piston Black Front Brake Kit\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('56');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('56');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('56');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=56')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating2\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=56\">Roush
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMustang 4-Piston Black Front Brake Kit</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$92.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$75.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=54\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"";
        // line 2215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//12_1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Koss Porta Pro On Ear Headphones with Case\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 2217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//12-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Koss Porta Pro On Ear Headphones with Case\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Koss Porta Pro On Ear Headphones with Case\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\"><span>-7% </span></div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('54');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('54');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('54');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=54')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating5\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=54\">Koss
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPorta Pro On Ear Headphones with Case</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">\$80.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">\$86.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$65.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=51\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"";
        // line 2289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//8_1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Bose SoundLink Micro  Bluetooth Speaker\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 2291
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//8-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Bose SoundLink Micro  Bluetooth Speaker\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Bose SoundLink Micro  Bluetooth Speaker\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\"><span>-20% </span></div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('51');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('51');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('51');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=51')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=9\">Canon</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating3\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=51\">Bose
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSoundLink Micro Bluetooth Speaker</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">\$98.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">\$122.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$80.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=55\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"";
        // line 2363
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//7_1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats Solo3 Wireless  On-Ear Headphones\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 2365
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//7-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats Solo3 Wireless  On-Ear Headphones\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Beats Solo3 Wireless  On-Ear Headphones\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('55');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('55');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('55');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=55')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=10\">Sony</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating4\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=55\">Beats
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSolo3 Wireless On-Ear Headphones</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$1,202.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$1,000.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=61\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"";
        // line 2435
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//6_1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats Solo2 Solo 2  Wired On-Ear Headphone\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 2437
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//6-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats Solo2 Solo 2  Wired On-Ear Headphone\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Beats Solo2 Solo 2  Wired On-Ear Headphone\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('61');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('61');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('61');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=61')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating3\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=61\">Beats
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSolo2 Solo 2 Wired On-Ear Headphone</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$602.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$500.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=62\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"";
        // line 2507
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//5_1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats solo wireless on ear headphones\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 2509
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//5-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats solo wireless on ear headphones\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Beats solo wireless on ear headphones\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('62');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('62');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('62');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=62')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=7\">Hewlett-Packard</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating5\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=62\">Beats
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsolo wireless on ear headphones</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$241.99</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$199.99</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=59\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"";
        // line 2579
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//4_1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Apple iPhone SE Unlocked Phone -16 GB Retail\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 2581
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//4-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Apple iPhone SE Unlocked Phone -16 GB Retail\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Apple iPhone SE Unlocked Phone -16 GB Retail\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('59');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('59');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('59');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=59')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating3\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=59\">Apple
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tiPhone SE Unlocked Phone -16 GB Retail</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$104.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$85.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"tab-container-656  owl-carousel owl-theme  tab-pane tab-product-container  fade \"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"tab-6561\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=139\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"";
        // line 2658
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//9_1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"JBL Flip 3 Splashproof  Portable Bluetooth\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 2660
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//9-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"JBL Flip 3 Splashproof  Portable Bluetooth\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"JBL Flip 3 Splashproof  Portable Bluetooth\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('139');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('139');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('139');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=139')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating3\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=139\">JBL
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFlip 3 Splashproof Portable Bluetooth</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$602.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$500.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=138\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"";
        // line 2730
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//3_1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats EP Wired On-Ear  Headphone-Black\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 2732
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//3-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats EP Wired On-Ear  Headphone-Black\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Beats EP Wired On-Ear  Headphone-Black\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\"><span>-20% </span></div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('138');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('138');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('138');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=138')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=9\">Canon</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating4\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=138\">Beats
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEP Wired On-Ear Headphone-Black</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">\$98.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">\$122.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$80.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=53\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"";
        // line 2804
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//2_1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Sony XBR-55X900E 55-inch 4K HDR Ultra HD\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 2806
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//2-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Sony XBR-55X900E 55-inch 4K HDR Ultra HD\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Sony XBR-55X900E 55-inch 4K HDR Ultra HD\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\"><span>-2% </span></div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('53');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('53');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('53');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=53')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=5\">HTC</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating3\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=53\">Sony
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tXBR-55X900E 55-inch 4K HDR Ultra HD</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">\$78.80</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">\$80.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$64.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=51\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"";
        // line 2878
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//8_1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Bose SoundLink Micro  Bluetooth Speaker\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 2880
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//8-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Bose SoundLink Micro  Bluetooth Speaker\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Bose SoundLink Micro  Bluetooth Speaker\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\"><span>-20% </span></div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('51');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('51');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('51');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=51')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=9\">Canon</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating3\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=51\">Bose
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSoundLink Micro Bluetooth Speaker</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">\$98.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">\$122.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$80.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=55\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"";
        // line 2952
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//7_1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats Solo3 Wireless  On-Ear Headphones\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 2954
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//7-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats Solo3 Wireless  On-Ear Headphones\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Beats Solo3 Wireless  On-Ear Headphones\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('55');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('55');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('55');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=55')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=10\">Sony</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating4\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=55\">Beats
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSolo3 Wireless On-Ear Headphones</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$1,202.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$1,000.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=62\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"";
        // line 3024
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//5_1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats solo wireless on ear headphones\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 3026
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//5-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats solo wireless on ear headphones\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Beats solo wireless on ear headphones\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('62');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('62');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('62');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=62')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=7\">Hewlett-Packard</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating5\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=62\">Beats
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsolo wireless on ear headphones</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$241.99</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$199.99</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"tab-container-656  owl-carousel owl-theme  tab-pane tab-product-container  fade \"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"tab-6562\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=143\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"";
        // line 3103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//14_1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Nokia | Steel HR Hybrid Smartwatch - Activity\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 3105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//14-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Nokia | Steel HR Hybrid Smartwatch - Activity\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Nokia | Steel HR Hybrid Smartwatch - Activity\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_new\"><span>New</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('143');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('143');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('143');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=143')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating5\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=143\">Nokia
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t| Steel HR Hybrid Smartwatch - Activity</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$116.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$95.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=60\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"";
        // line 3176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//10_1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Kodak PIXPRO Astro Zoom AZ421 16 MP\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 3178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//10-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Kodak PIXPRO Astro Zoom AZ421 16 MP\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Kodak PIXPRO Astro Zoom AZ421 16 MP\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('60');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('60');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('60');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=60')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating4\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=60\">Kodak
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPIXPRO Astro Zoom AZ421 16 MP</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$116.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$95.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=55\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"";
        // line 3248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//7_1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats Solo3 Wireless  On-Ear Headphones\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 3250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//7-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats Solo3 Wireless  On-Ear Headphones\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Beats Solo3 Wireless  On-Ear Headphones\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('55');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('55');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('55');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=55')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=10\">Sony</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating4\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=55\">Beats
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSolo3 Wireless On-Ear Headphones</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$1,202.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$1,000.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=62\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"";
        // line 3320
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//5_1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats solo wireless on ear headphones\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 3322
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//5-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats solo wireless on ear headphones\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Beats solo wireless on ear headphones\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('62');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('62');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('62');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=62')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=7\">Hewlett-Packard</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating5\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=62\">Beats
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsolo wireless on ear headphones</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$241.99</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$199.99</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=59\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"";
        // line 3392
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//4_1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Apple iPhone SE Unlocked Phone -16 GB Retail\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 3394
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//4-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Apple iPhone SE Unlocked Phone -16 GB Retail\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Apple iPhone SE Unlocked Phone -16 GB Retail\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('59');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('59');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('59');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=59')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating3\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=59\">Apple
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tiPhone SE Unlocked Phone -16 GB Retail</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$104.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$85.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=57\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"";
        // line 3464
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//1_1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Amazon Cloud Cam Indoor Security Camera\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 3466
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Amazon Cloud Cam Indoor Security Camera\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Amazon Cloud Cam Indoor Security Camera\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('57');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('57');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('57');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=57')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating4\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=57\">Amazon
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCloud Cam Indoor Security Camera</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$98.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$80.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"tab-container-656  owl-carousel owl-theme  tab-pane tab-product-container  fade \"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"tab-6563\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=143\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"";
        // line 3543
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//14_1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Nokia | Steel HR Hybrid Smartwatch - Activity\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 3545
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//14-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Nokia | Steel HR Hybrid Smartwatch - Activity\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Nokia | Steel HR Hybrid Smartwatch - Activity\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_new\"><span>New</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('143');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('143');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('143');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=143')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating5\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=143\">Nokia
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t| Steel HR Hybrid Smartwatch - Activity</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$116.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$95.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=140\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"";
        // line 3616
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//13_1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Marshall Kilburn Portable Bluetooth Speaker\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 3618
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//13-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Marshall Kilburn Portable Bluetooth Speaker\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Marshall Kilburn Portable Bluetooth Speaker\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_new\"><span>New</span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\"><span>-7% </span></div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('140');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('140');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('140');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=140')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating4\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=140\">Marshall
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tKilburn Portable Bluetooth Speaker</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">\$80.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">\$86.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$65.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=139\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"";
        // line 3691
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//9_1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"JBL Flip 3 Splashproof  Portable Bluetooth\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 3693
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//9-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"JBL Flip 3 Splashproof  Portable Bluetooth\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"JBL Flip 3 Splashproof  Portable Bluetooth\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('139');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('139');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('139');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=139')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating3\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=139\">JBL
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFlip 3 Splashproof Portable Bluetooth</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$602.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$500.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=138\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"";
        // line 3763
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//3_1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats EP Wired On-Ear  Headphone-Black\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 3765
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//3-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats EP Wired On-Ear  Headphone-Black\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Beats EP Wired On-Ear  Headphone-Black\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\"><span>-20% </span></div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('138');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('138');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('138');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=138')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=9\">Canon</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating4\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=138\">Beats
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEP Wired On-Ear Headphone-Black</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">\$98.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">\$122.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$80.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=56\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"";
        // line 3837
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//11_1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Roush Mustang 4-Piston Black Front Brake Kit\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 3839
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//11-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Roush Mustang 4-Piston Black Front Brake Kit\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Roush Mustang 4-Piston Black Front Brake Kit\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('56');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('56');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('56');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=56')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating2\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=56\">Roush
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMustang 4-Piston Black Front Brake Kit</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$92.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$75.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=54\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"";
        // line 3909
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//12_1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Koss Porta Pro On Ear Headphones with Case\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 3911
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//12-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Koss Porta Pro On Ear Headphones with Case\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Koss Porta Pro On Ear Headphones with Case\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\"><span>-7% </span></div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('54');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('54');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('54');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=54')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating5\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=54\">Koss
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPorta Pro On Ear Headphones with Case</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">\$80.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">\$86.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$65.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=60\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"";
        // line 3983
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//10_1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Kodak PIXPRO Astro Zoom AZ421 16 MP\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 3985
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//10-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Kodak PIXPRO Astro Zoom AZ421 16 MP\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Kodak PIXPRO Astro Zoom AZ421 16 MP\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('60');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('60');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('60');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=60')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating4\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=60\">Kodak
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPIXPRO Astro Zoom AZ421 16 MP</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$116.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$95.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=55\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"";
        // line 4055
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//7_1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats Solo3 Wireless  On-Ear Headphones\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 4057
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//7-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats Solo3 Wireless  On-Ear Headphones\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Beats Solo3 Wireless  On-Ear Headphones\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('55');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('55');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('55');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=55')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=10\">Sony</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating4\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=55\">Beats
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSolo3 Wireless On-Ear Headphones</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$1,202.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$1,000.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\$(document).ready(function () {
\t\t\t\t\t\t\t\t\t\t\t\$('a[href=\"#tab-6560\"]').trigger(\"click\");
\t\t\t\t\t\t\t\t\t\t\t\$(\".tab-container-656\").owlCarousel({
\t\t\t\t\t\t\t\t\t\t\t\titems: 4,
\t\t\t\t\t\t\t\t\t\t\t\tloop: false,
\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0,
\t\t\t\t\t\t\t\t\t\t\t\tnav: true,
\t\t\t\t\t\t\t\t\t\t\t\tdots: false,
\t\t\t\t\t\t\t\t\t\t\t\tautoplay: false,
\t\t\t\t\t\t\t\t\t\t\t\tautoplayTimeout: 1000,
\t\t\t\t\t\t\t\t\t\t\t\tautoplayHoverPause: true,
\t\t\t\t\t\t\t\t\t\t\t\tautoplaySpeed: 1000,
\t\t\t\t\t\t\t\t\t\t\t\tnavSpeed: 1000,
\t\t\t\t\t\t\t\t\t\t\t\tdotsSpeed: 1000,
\t\t\t\t\t\t\t\t\t\t\t\tlazyLoad: true,
\t\t\t\t\t\t\t\t\t\t\t\tresponsive: {
\t\t\t\t\t\t\t\t\t\t\t\t\t0: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\titems: 1,
\t\t\t\t\t\t\t\t\t\t\t\t\t\tnav: false
\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t375: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\titems: 2,
\t\t\t\t\t\t\t\t\t\t\t\t\t\tnav: false
\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t480: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\titems: 2,
\t\t\t\t\t\t\t\t\t\t\t\t\t\tnav: false
\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t768: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\titems: 2
\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t992: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\titems: 3
\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t1200: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\titems: 4
\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t1600: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\titems: 4
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\tonInitialized: function () {
\t\t\t\t\t\t\t\t\t\t\t\t\tvar count = \$(\".tab-container-656 .owl-item.active\").length;
\t\t\t\t\t\t\t\t\t\t\t\t\tif (count == 1) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\".tab-container-656 .owl-item\").removeClass('first');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\".tab-container-656 .owl-item.active\").addClass('first');
\t\t\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\".tab-container-656 .owl-item\").removeClass('first');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\".tab-container-656 .owl-item.active:first\").addClass('first');
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\tonTranslated: function () {
\t\t\t\t\t\t\t\t\t\t\t\t\tvar count = \$(\".tab-container-656 .owl-item.active\").length;
\t\t\t\t\t\t\t\t\t\t\t\t\tif (count == 1) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\".tab-container-656 .owl-item\").removeClass('first');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\".tab-container-656 .owl-item.active\").addClass('first');
\t\t\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\".tab-container-656 .owl-item\").removeClass('first');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\".tab-container-656 .owl-item.active:first\").addClass('first');
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t});


\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t</script>


\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"main-row fluid-width\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"main-col col-sm-12 col-md-12\">
\t\t\t\t\t\t\t<div class=\"row sub-row\">
\t\t\t\t\t\t\t\t<div class=\"sub-col col-sm-12 col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"testimonial-container\">
\t\t\t\t\t\t\t\t\t\t<div class=\"container\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"module-title\">

\t\t\t\t\t\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\t\t\t\t\t\tClient Testimonials
\t\t\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"module-description\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>What they say</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t<div class=\"block-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"owl-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"slides\" class=\"owl-carousel owl-theme\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-images\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 4231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/testimonial/testimor1-72x72.png"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Rebecka Filson\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"title\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/octestimonial\">A
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\treally great experience</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/octestimonial\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tThis is Photoshops version of Lorem Ipsum. Proin gravida nibh vel velit.Lorem
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tipsum dolor sit amet, consectetur adipiscing elit. In molestie augue magna.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPellentesque felis lorem, pulvinar sed eros non, sagittis consequat urna.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProin id dui tempor, imperdiet nisi et, hendrerit quam. Quisque tempus..</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"testimonial-author\">Rebecka Filson</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--testimonial-content-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-images\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 4261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/testimonial/testimor2-72x72.png"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Nathanael Jaworski\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"title\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/octestimonial\">A
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\treally great experience</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/octestimonial\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMauris blandit, metus a venenatis lacinia, felis enim tincidunt est,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcondimentum vulputate orci augue eu metus. Fusce dictum, nisi et semper
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tultricies, felis tortor blandit odio, egestas consequat purus nisi eu est.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMorbi porttitor porta nunc in elementum. Aliquam congue, nibh at dignissim
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsceleris..</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"testimonial-author\">Nathanael Jaworski</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--testimonial-content-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-images\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 4292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/testimonial/testimor3-72x72.png"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Magdalena Valencia\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"title\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/octestimonial\">A
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\treally great experience</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/octestimonial\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSed vel urna at dui iaculis gravida. Maecenas pretium, velit vitae placerat
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfaucibus, velit quam facilisis elit, sit amet lacinia est est id ligula. Duis
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfeugiat quam non justo faucibus, in gravida diam tempor. Nam viverra enim non
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tipsum ornare, condimentum blandit diam mattis. Maecenas gravida mol..</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"testimonial-author\">Magdalena Valencia</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--testimonial-content-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!--block-content-->


\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--testimonial-container-->
\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\$(document).ready(function () {
\t\t\t\t\t\t\t\t\t\t\t\$(\"#slides\").owlCarousel({
\t\t\t\t\t\t\t\t\t\t\t\tautoPlay: 1,

\t\t\t\t\t\t\t\t\t\t\t\tloop: false,
\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0,
\t\t\t\t\t\t\t\t\t\t\t\tnavSpeed: 1000,
\t\t\t\t\t\t\t\t\t\t\t\tdotsSpeed: 1000,
\t\t\t\t\t\t\t\t\t\t\t\tautoplaySpeed: 1000,
\t\t\t\t\t\t\t\t\t\t\t\tnav: true,
\t\t\t\t\t\t\t\t\t\t\t\tdots: false,
\t\t\t\t\t\t\t\t\t\t\t\tlazyLoad: true,
\t\t\t\t\t\t\t\t\t\t\t\tnavText: ['<i class=\"ion-ios-arrow-left\"></i>', '<i class=\"ion-ios-arrow-right\"></i>'],
\t\t\t\t\t\t\t\t\t\t\t\tresponsive: {
\t\t\t\t\t\t\t\t\t\t\t\t\t0: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\titems: 1
\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t480: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\titems: 1
\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t768: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\titems: 1
\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t992: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\titems: 1
\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t1200: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\titems: 1
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"main-row \">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"main-col col-sm-12 col-md-12\">
\t\t\t\t\t\t\t<div class=\"row sub-row\">
\t\t\t\t\t\t\t\t<div class=\"sub-col col-sm-12 col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"tt_product_module \" id=\"product_module336\">
\t\t\t\t\t\t\t\t\t\t<div class=\"module-title\">


\t\t\t\t\t\t\t\t\t\t\t<h2>Latest Arrivals</h2>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"module-description\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum
\t\t\t\t\t\t\t\t\t\t\t\t\tformas. </p>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t<div class=\"box-style\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-product\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"owl-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tt-product  owl-carousel owl-theme \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items  odd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=143\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"";
        // line 4398
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//14_1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Nokia | Steel HR Hybrid Smartwatch - Activity\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 4400
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//14-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Nokia | Steel HR Hybrid Smartwatch - Activity\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Nokia | Steel HR Hybrid Smartwatch - Activity\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('143');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\" title=\"Add to Wish List\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"wishlist.add('143');\"><span>Add to Wish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\" onclick=\"compare.add('143');\"><span>Compare
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tthis Product</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=143')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating5\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=143\">Nokia
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t| Steel HR Hybrid Smartwatch - Activity</a></h4>




\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$116.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$95.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"available\">Available:<span class=\"ex-text\">In Stock</span></p>



\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items  even\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=140\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"";
        // line 4476
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//13_1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Marshall Kilburn Portable Bluetooth Speaker\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 4478
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//13-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Marshall Kilburn Portable Bluetooth Speaker\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Marshall Kilburn Portable Bluetooth Speaker\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\"><span>-7% </span></div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('140');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\" title=\"Add to Wish List\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"wishlist.add('140');\"><span>Add to Wish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\" onclick=\"compare.add('140');\"><span>Compare
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tthis Product</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=140')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating4\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=140\">Marshall
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tKilburn Portable Bluetooth Speaker</a></h4>




\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">\$80.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">\$86.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$65.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"available\">Available:<span class=\"ex-text\">In Stock</span></p>



\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items  odd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=139\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"";
        // line 4556
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//9_1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"JBL Flip 3 Splashproof  Portable Bluetooth\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 4558
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//9-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"JBL Flip 3 Splashproof  Portable Bluetooth\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"JBL Flip 3 Splashproof  Portable Bluetooth\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('139');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\" title=\"Add to Wish List\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"wishlist.add('139');\"><span>Add to Wish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\" onclick=\"compare.add('139');\"><span>Compare
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tthis Product</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=139')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating3\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=139\">JBL
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFlip 3 Splashproof Portable Bluetooth</a></h4>




\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$602.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$500.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"available\">Available:<span class=\"ex-text\">In Stock</span></p>



\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items  even\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=138\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"";
        // line 4634
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//3_1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats EP Wired On-Ear  Headphone-Black\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 4636
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//3-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats EP Wired On-Ear  Headphone-Black\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Beats EP Wired On-Ear  Headphone-Black\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\"><span>-20% </span></div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('138');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\" title=\"Add to Wish List\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"wishlist.add('138');\"><span>Add to Wish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\" onclick=\"compare.add('138');\"><span>Compare
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tthis Product</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=138')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=9\">Canon</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating4\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=138\">Beats
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEP Wired On-Ear Headphone-Black</a></h4>




\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">\$98.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">\$122.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$80.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"available\">Available:<span class=\"ex-text\">In Stock</span></p>



\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items  odd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=53\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"";
        // line 4714
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//2_1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Sony XBR-55X900E 55-inch 4K HDR Ultra HD\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 4716
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//2-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Sony XBR-55X900E 55-inch 4K HDR Ultra HD\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Sony XBR-55X900E 55-inch 4K HDR Ultra HD\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\"><span>-2% </span></div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('53');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\" title=\"Add to Wish List\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"wishlist.add('53');\"><span>Add to Wish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\" onclick=\"compare.add('53');\"><span>Compare
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tthis Product</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=53')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=5\">HTC</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating3\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=53\">Sony
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tXBR-55X900E 55-inch 4K HDR Ultra HD</a></h4>




\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">\$78.80</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">\$80.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$64.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"available\">Available:<span class=\"ex-text\">In Stock</span></p>



\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items  even\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=56\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"";
        // line 4794
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//11_1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Roush Mustang 4-Piston Black Front Brake Kit\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 4796
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//11-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Roush Mustang 4-Piston Black Front Brake Kit\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Roush Mustang 4-Piston Black Front Brake Kit\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('56');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\" title=\"Add to Wish List\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"wishlist.add('56');\"><span>Add to Wish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\" onclick=\"compare.add('56');\"><span>Compare
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tthis Product</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=56')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating2\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=56\">Roush
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMustang 4-Piston Black Front Brake Kit</a></h4>




\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$92.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$75.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"available\">Available:<span class=\"ex-text\">In Stock</span></p>



\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items  odd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=54\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"";
        // line 4872
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//12_1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Koss Porta Pro On Ear Headphones with Case\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 4874
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//12-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Koss Porta Pro On Ear Headphones with Case\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Koss Porta Pro On Ear Headphones with Case\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\"><span>-7% </span></div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('54');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\" title=\"Add to Wish List\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"wishlist.add('54');\"><span>Add to Wish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\" onclick=\"compare.add('54');\"><span>Compare
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tthis Product</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=54')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating5\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=54\">Koss
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPorta Pro On Ear Headphones with Case</a></h4>




\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">\$80.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">\$86.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$65.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"available\">Available:<span class=\"ex-text\">In Stock</span></p>



\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items  even\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=60\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"";
        // line 4952
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//10_1-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Kodak PIXPRO Astro Zoom AZ421 16 MP\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 4954
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/product//10-600x800.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Kodak PIXPRO Astro Zoom AZ421 16 MP\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Kodak PIXPRO Astro Zoom AZ421 16 MP\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('60');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\" title=\"Add to Wish List\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"wishlist.add('60');\"><span>Add to Wish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\" onclick=\"compare.add('60');\"><span>Compare
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tthis Product</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=60')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating4\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=60\">Kodak
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPIXPRO Astro Zoom AZ421 16 MP</a></h4>




\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$116.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$95.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"available\">Available:<span class=\"ex-text\">In Stock</span></p>



\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\tvar product_owlCarousel = \$(\"#product_module336 .tt-product\");
\t\t\t\t\t\t\t\t\t\tproduct_owlCarousel.owlCarousel({
\t\t\t\t\t\t\t\t\t\t\tloop: false,
\t\t\t\t\t\t\t\t\t\t\tmargin: 0,
\t\t\t\t\t\t\t\t\t\t\tnav: true,
\t\t\t\t\t\t\t\t\t\t\tdots: false,
\t\t\t\t\t\t\t\t\t\t\tautoplay: false,
\t\t\t\t\t\t\t\t\t\t\tautoplayTimeout: 1000,
\t\t\t\t\t\t\t\t\t\t\tautoplayHoverPause: true,
\t\t\t\t\t\t\t\t\t\t\tautoplaySpeed: 1000,
\t\t\t\t\t\t\t\t\t\t\tnavSpeed: 1000,
\t\t\t\t\t\t\t\t\t\t\tdotsSpeed: 1000,
\t\t\t\t\t\t\t\t\t\t\tlazyLoad: true,
\t\t\t\t\t\t\t\t\t\t\tresponsive: {
\t\t\t\t\t\t\t\t\t\t\t\t0: {
\t\t\t\t\t\t\t\t\t\t\t\t\titems: 1,
\t\t\t\t\t\t\t\t\t\t\t\t\tnav: false
\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t375: {
\t\t\t\t\t\t\t\t\t\t\t\t\titems: 2,
\t\t\t\t\t\t\t\t\t\t\t\t\tnav: false
\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t480: {
\t\t\t\t\t\t\t\t\t\t\t\t\titems: 2,
\t\t\t\t\t\t\t\t\t\t\t\t\tnav: false
\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t768: {
\t\t\t\t\t\t\t\t\t\t\t\t\titems: 2
\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t992: {
\t\t\t\t\t\t\t\t\t\t\t\t\titems: 3
\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t1200: {
\t\t\t\t\t\t\t\t\t\t\t\t\titems: 4
\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t1600: {
\t\t\t\t\t\t\t\t\t\t\t\t\titems: 4
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\tonInitialized: function () {
\t\t\t\t\t\t\t\t\t\t\t\towlAction();
\t\t\t\t\t\t\t\t\t\t\t\tvar i = 0;
\t\t\t\t\t\t\t\t\t\t\t\t\$('.owl-dots > .owl-dot').each(function () {
\t\t\t\t\t\t\t\t\t\t\t\t\t\$(this).addClass('clk-' + i);
\t\t\t\t\t\t\t\t\t\t\t\t\ti++;
\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\tonTranslated: function () {
\t\t\t\t\t\t\t\t\t\t\t\towlAction();

\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\tfunction owlAction() {
\t\t\t\t\t\t\t\t\t\t\t\$(\"#product_module336 .tt-product .owl-item\").removeClass('first');
\t\t\t\t\t\t\t\t\t\t\t\$(\"#product_module336 .tt-product .owl-item\").removeClass('last');
\t\t\t\t\t\t\t\t\t\t\t\$(\"#product_module336 .tt-product .owl-item\").removeClass('before-active');
\t\t\t\t\t\t\t\t\t\t\t\$(\"#product_module336 .tt-product .owl-item.active:first\").addClass('first');
\t\t\t\t\t\t\t\t\t\t\t\$(\"#product_module336 .tt-product .owl-item.active:last\").addClass('last');
\t\t\t\t\t\t\t\t\t\t\t\$('#product_module336 .tt-product .owl-item.active:first').prev().addClass('before-active');
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t</script>

\t\t\t\t\t\t\t\t\t<div class=\"banner-static static-middle-store1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=product/special\"><img src=\"";
        // line 5096
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/img1-middle-eposi1.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"img1\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Black Friday</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Save Up To 50% Off</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=product/special\">shop now</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&amp;path=20_124\"><img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 5108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/img2-middle-eposi1.jpg"), "html", null, true);
        echo "\" alt=\"img2\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Best Selling !</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Living Room Up To 70% Off</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&amp;path=20_124\">shop now</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"policy-block\">
\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col \">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Free Shipping Worldwide</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>We offer free shipping via Standard Shipping on orders over \$200.00</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col \">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Money Back Guarantee</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>If you're not satisfied with our product, we'll refund the purchase price*.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col \">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>online support 24/7 </h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Our friendly support team is available to help you 24 hours a day, seven days a week</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div id=\"blog_home\" class=\"menu-recent\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog-title module-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2>Latest Blog Posts</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"module-description\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit
\t\t\t\t\t\t\t\t\t\t\t\t\t\tlitterarum formas. </p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-style\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"owl-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"articles-container owl-carousel owl-theme\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"articles-inner \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"articles-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=blog/article&amp;article_id=10\"><img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 5165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/blog/4-370x235.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Buy Used Engines and Used Transmissions\" /><span
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-view\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"date-time-post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"year-post\">2018</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"month-post\">Sep</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date-post\">06</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"aritcles-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"articles-name\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=blog/article&amp;article_id=10\">Buy
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tUsed Engines and Used Transmissions</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"author-name\">by <span>Plaza Themes</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"articles-intro\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>It's no secret, engines and transmissions can be very expensive...</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> <a class=\"read-more\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=blog/article&amp;article_id=10\">Read
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmore</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"articles-inner \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"articles-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=blog/article&amp;article_id=8\"><img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 5194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/blog/1-370x235.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Get Your Car or Truck Ready for the Summer Heat!\" /><span
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-view\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"date-time-post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"year-post\">2017</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"month-post\">Oct</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date-post\">30</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"aritcles-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"articles-name\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=blog/article&amp;article_id=8\">Get
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tYour Car or Truck Ready for the Summer Heat!</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"author-name\">by <span>Plaza Themes</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"articles-intro\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Summer is beautiful in Colorado but we can get some very, very, hot daytime
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttemps...</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> <a class=\"read-more\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=blog/article&amp;article_id=8\">Read
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmore</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"articles-inner \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"articles-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=blog/article&amp;article_id=16\"><img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 5224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/blog/5-370x235.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Minor Wreck? We Got The Auto Parts!\" /><span class=\"icon-view\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"date-time-post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"year-post\">2018</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"month-post\">Nov</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date-post\">08</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"aritcles-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"articles-name\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=blog/article&amp;article_id=16\">Minor
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWreck? We Got The Auto Parts!</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"author-name\">by <span>Plaza Themes</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"articles-intro\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>It’s winter in Colorado and we’ve had a number of snowy days and hairy
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcommutes...</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> <a class=\"read-more\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=blog/article&amp;article_id=16\">Read
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmore</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"articles-inner \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"articles-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=blog/article&amp;article_id=5\"><img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 5253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/blog/2-370x235.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Purchasing New Auto Parts in our Online Store\" /><span
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-view\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"date-time-post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"year-post\">2017</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"month-post\">Oct</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date-post\">30</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"aritcles-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"articles-name\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=blog/article&amp;article_id=5\">Purchasing
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNew Auto Parts in our Online Store</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"author-name\">by <span>Plaza Themes</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"articles-intro\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Central Auto Parts has been a quality provider of used automotive parts in the
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDenver...</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> <a class=\"read-more\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=blog/article&amp;article_id=5\">Read
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmore</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"articles-inner \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"articles-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=blog/article&amp;article_id=6\"><img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 5283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/blog/3-370x235.jpg"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"The Life Cycle of Used Auto Parts and Wrecked Vehicles\" /><span
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-view\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"date-time-post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"year-post\">2017</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"month-post\">Oct</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date-post\">30</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"aritcles-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"articles-name\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=blog/article&amp;article_id=6\">The
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLife Cycle of Used Auto Parts and Wrecked Vehicles</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"author-name\">by <span>Plaza Themes</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"articles-intro\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>I am often asked questions about my business when people find out what I do for
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ta living.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> <a class=\"read-more\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=blog/article&amp;article_id=6\">Read
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmore</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\$(document).ready(function () {
\t\t\t\t\t\t\t\t\t\t\t\$(\".articles-container\").owlCarousel({
\t\t\t\t\t\t\t\t\t\t\t\tautoPlay: false,
\t\t\t\t\t\t\t\t\t\t\t\titems: 3,
\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0,
\t\t\t\t\t\t\t\t\t\t\t\tloop: false,
\t\t\t\t\t\t\t\t\t\t\t\tnavSpeed: 1000,
\t\t\t\t\t\t\t\t\t\t\t\tdotsSpeed: 1000,
\t\t\t\t\t\t\t\t\t\t\t\tautoplaySpeed: 1000,
\t\t\t\t\t\t\t\t\t\t\t\tnav: false,
\t\t\t\t\t\t\t\t\t\t\t\tdots: false,
\t\t\t\t\t\t\t\t\t\t\t\tresponsive: {
\t\t\t\t\t\t\t\t\t\t\t\t\t0: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\titems: 1,
\t\t\t\t\t\t\t\t\t\t\t\t\t\tnav: false
\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t480: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\titems: 2,
\t\t\t\t\t\t\t\t\t\t\t\t\t\tnav: false
\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t768: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\titems: 2
\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t992: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\titems: 3
\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t1200: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\titems: 3
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>




\t\t</div>
\t\t<footer>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"newletter-subscribe-container\">
\t\t\t\t\t<div class=\"container-inner\">
\t\t\t\t\t\t<div class=\"newletter-subscribe\">
\t\t\t\t\t\t\t<div id=\"boxes-normal\" class=\"newletter-container\">
\t\t\t\t\t\t\t\t<div style=\"\" id=\"dialog-normal\">
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"newletter-title\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"sub-title\">Special Ofers For Subscribers</p>
\t\t\t\t\t\t\t\t\t\t\t<h5>Ten Percent Member Discount</h5>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"des\">Subscribe to our newsletters now and stay up to date with new collections, the
\t\t\t\t\t\t\t\t\t\t\t\tlatest lookbooks and exclusive offers.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-content newleter-content\">

\t\t\t\t\t\t\t\t\t\t\t<div id=\"frm_subscribe-normal\">
\t\t\t\t\t\t\t\t\t\t\t\t<form name=\"subscribe\" id=\"subscribe-normal\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"\" name=\"subscribe_email\" id=\"subscribe_email-normal\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tplaceholder=\"Enter you email address here...\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"\" name=\"subscribe_name\" id=\"subscribe_name\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn\" onclick=\"email_subscribe()\" title=\"Subscribe\"><span>Subscribe</span></a>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"notification-normal\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t\t\t\t\t</div><!-- /#frm_subscribe -->

\t\t\t\t\t\t\t\t\t\t</div><!-- /.box-content -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\tfunction email_subscribe() {
\t\t\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\t\t\t\t\t\turl: 'index.php?route=extension/module/newslettersubscribe/subscribe',
\t\t\t\t\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\t\t\t\t\tdata: \$(\"#subscribe-normal\").serialize(),
\t\t\t\t\t\t\t\t\t\t\tsuccess: function (html) {
\t\t\t\t\t\t\t\t\t\t\t\ttry {
\t\t\t\t\t\t\t\t\t\t\t\t\teval(html);
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\tcatch (e) {
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\tfunction email_unsubscribe() {
\t\t\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\t\t\t\t\t\turl: 'index.php?route=extension/module/newslettersubscribe/unsubscribe',
\t\t\t\t\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\t\t\t\t\tdata: \$(\"#subscribe\").serialize(),
\t\t\t\t\t\t\t\t\t\t\tsuccess: function (html) {
\t\t\t\t\t\t\t\t\t\t\t\ttry {
\t\t\t\t\t\t\t\t\t\t\t\t\teval(html);
\t\t\t\t\t\t\t\t\t\t\t\t} catch (e) {
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\$('html, body').delay(1500).animate({ scrollTop: 0 }, 'slow');
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\$(document).ready(function () {
\t\t\t\t\t\t\t\t\t\t\$('#subscribe_email').keypress(function (e) {
\t\t\t\t\t\t\t\t\t\t\tif (e.which == 13) {
\t\t\t\t\t\t\t\t\t\t\t\te.preventDefault();
\t\t\t\t\t\t\t\t\t\t\t\temail_subscribe();
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\tvar name = \$(this).val();
\t\t\t\t\t\t\t\t\t\t\t\$('#subscribe_name').val(name);
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\$('#subscribe_email').change(function () {
\t\t\t\t\t\t\t\t\t\t\tvar name = \$(this).val();
\t\t\t\t\t\t\t\t\t\t\t\$('#subscribe_name').val(name);
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<div class=\"footer-bottom \">
\t\t\t\t<div class=\"footer-bottom-inner \">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"container-inner\">
\t\t\t\t\t\t\t<div class=\"logo-footer\">
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 5449
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/logo/logo.png"), "html", null, true);
        echo "\"alt=\"logo-footer\"></a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"footer-copyright\">
\t\t\t\t\t\t\t\t<p>Copyright &copy; 2019 <a href=\"http://www.plazathemes.com\">PlazaThemes</a>.<span> All Right
\t\t\t\t\t\t\t\t\t\tReserved.</span></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"follow\">
\t\t\t\t\t\t\t\t<label>Follow Us On Social:</label>
\t\t\t\t\t\t\t\t<ul class=\"link-follow\">
\t\t\t\t\t\t\t\t\t<li><a class=\"facebook fa fa-facebook\" title=\"Facebook\" target=\"_blank\"
\t\t\t\t\t\t\t\t\t\t\thref=\"https://www.facebook.com/plazathemes1\"><span>facebook</span></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"twitter fa fa-twitter\" title=\"Twitter\" target=\"_blank\"
\t\t\t\t\t\t\t\t\t\t\thref=\"https://twitter.com/plazathemes\"><span>twitter</span></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"google fa fa-google-plus\" title=\"Google\" target=\"_blank\" href=\"#\"><span>google
\t\t\t\t\t\t\t\t\t\t\t</span></a></li>

\t\t\t\t\t\t\t\t\t<li><a class=\"youtube fa fa-youtube\" title=\"Youtube\" target=\"_blank\"
\t\t\t\t\t\t\t\t\t\t\thref=\"https://www.youtube.com/user/plazathemes\"><span>youtube </span></a></li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"back-top\"><span>Back to top</span><i class=\"ion-chevron-right\"></i><i class=\"ion-chevron-right\"></i>
\t\t\t</div>
\t\t</footer>
\t\t<script>
\t\t\t\$(document).ready(function () {
\t\t\t\t// hide #back-top first
\t\t\t\t\$(\"#back-top\").hide();
\t\t\t\t// fade in #back-top
\t\t\t\t\$(function () {
\t\t\t\t\t\$(window).scroll(function () {
\t\t\t\t\t\tif (\$(this).scrollTop() > \$('body').height() / 3) {
\t\t\t\t\t\t\t\$('#back-top').fadeIn();
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$('#back-top').fadeOut();
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t// scroll body to 0px on click
\t\t\t\t\t\$('#back-top').click(function () {
\t\t\t\t\t\t\$('body,html').animate({ scrollTop: 0 }, 800);
\t\t\t\t\t\treturn false;
\t\t\t\t\t});
\t\t\t\t});
\t\t\t});
\t\t</script>
\t</div><!-- wrapper -->
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "shit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  5877 => 5449,  5708 => 5283,  5675 => 5253,  5643 => 5224,  5610 => 5194,  5578 => 5165,  5518 => 5108,  5503 => 5096,  5358 => 4954,  5353 => 4952,  5272 => 4874,  5267 => 4872,  5188 => 4796,  5183 => 4794,  5102 => 4716,  5097 => 4714,  5016 => 4636,  5011 => 4634,  4932 => 4558,  4927 => 4556,  4846 => 4478,  4841 => 4476,  4762 => 4400,  4757 => 4398,  4648 => 4292,  4614 => 4261,  4581 => 4231,  4404 => 4057,  4399 => 4055,  4326 => 3985,  4321 => 3983,  4246 => 3911,  4241 => 3909,  4168 => 3839,  4163 => 3837,  4088 => 3765,  4083 => 3763,  4010 => 3693,  4005 => 3691,  3929 => 3618,  3924 => 3616,  3850 => 3545,  3845 => 3543,  3765 => 3466,  3760 => 3464,  3687 => 3394,  3682 => 3392,  3609 => 3322,  3604 => 3320,  3531 => 3250,  3526 => 3248,  3453 => 3178,  3448 => 3176,  3374 => 3105,  3369 => 3103,  3289 => 3026,  3284 => 3024,  3211 => 2954,  3206 => 2952,  3131 => 2880,  3126 => 2878,  3051 => 2806,  3046 => 2804,  2971 => 2732,  2966 => 2730,  2893 => 2660,  2888 => 2658,  2808 => 2581,  2803 => 2579,  2730 => 2509,  2725 => 2507,  2652 => 2437,  2647 => 2435,  2574 => 2365,  2569 => 2363,  2494 => 2291,  2489 => 2289,  2414 => 2217,  2409 => 2215,  2336 => 2145,  2331 => 2143,  2256 => 2071,  2251 => 2069,  2178 => 1999,  2164 => 1988,  2152 => 1979,  2138 => 1968,  1989 => 1822,  1981 => 1817,  1973 => 1812,  1778 => 1620,  1636 => 1481,  1600 => 1448,  1465 => 1316,  1459 => 1313,  1245 => 1102,  941 => 801,  718 => 581,  182 => 48,  178 => 47,  174 => 46,  170 => 45,  166 => 44,  162 => 43,  158 => 42,  154 => 41,  150 => 40,  146 => 39,  142 => 38,  138 => 37,  134 => 36,  130 => 35,  126 => 34,  122 => 33,  118 => 32,  114 => 31,  110 => 30,  106 => 29,  102 => 28,  98 => 27,  94 => 26,  88 => 23,  84 => 22,  80 => 21,  76 => 20,  72 => 19,  68 => 18,  64 => 17,  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"ltr\" lang=\"en\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"ltr\" lang=\"en\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"ltr\" lang=\"en\">
<!--<![endif]-->

<head>
\t<meta charset=\"UTF-8\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<title>Eposi 1 - Responsive Opencart Theme</title>
\t<!--base href=\"http://demo.towerthemes.com/tt_eposi/\" /-->
\t<meta name=\"description\" content=\"Eposi, Responsive, Opencart Theme, Fashion Theme\" />
\t<link href=\"{{ asset('plugin/owl-carousel/owl.carousel.min.css') }}\" rel=\"stylesheet\" />
\t<link href=\"{{ asset('plugin/owl-carousel/owl.theme.green.min.css') }}\" rel=\"stylesheet\" />
\t<link href=\"{{ asset('theme/ocmegamenu/menu.css') }}\" rel=\"stylesheet\" />
\t<link href=\"{{ asset('theme/opentheme/animate.css') }}\" rel=\"stylesheet\" />
\t<link href=\"{{ asset('plugin/bootstrap/bootstrap.min.css') }}\" rel=\"stylesheet\" media=\"screen\" />
\t<link href=\"{{ asset('theme/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"{{ asset('theme/ionicons.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"{{ asset('theme/opentheme/ocslideshow/ocslideshow.css') }}\" rel=\"stylesheet\" />
\t<link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\" rel=\"stylesheet\" />
\t<link href=\"https://fonts.googleapis.com/css?family=Karla:400,700\" rel=\"stylesheet\" />
\t<link href=\"{{ asset('theme/stylesheet.css') }}\" rel=\"stylesheet\" />
\t<script src=\"{{ asset('plugin/jquery/jquery-2.1.1.min.js') }}\"></script>
\t<script src=\"{{ asset('plugin/owl-carousel/owl.carousel.min.js') }}\"></script>
\t<script src=\"{{ asset('plugin/jquery/jquery.plugin.min.js') }}\"></script>
\t<script src=\"{{ asset('plugin/jquery/jquery.countdown.min.js') }}\"></script>
\t<script src=\"{{ asset('theme/ocmegamenu/menu.js') }}\"></script>
\t<script src=\"{{ asset('theme/opentheme/ocslideshow/jquery.nivo.slider.js') }}\"></script>
\t<script src=\"{{ asset('plugin/cloudzoom/cloud-zoom.1.0.2.min.js') }}\"></script>
\t<script src=\"{{ asset('plugin/cloudzoom/zoom.js') }}\"></script>
\t<script src=\"{{ asset('theme/ocquickview/ocquickview.js') }}\"></script>
\t<link href=\"{{ asset('theme/ocquickview/ocquickview.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"{{ asset('theme/ocajaxlogin/ocajaxlogin.css') }}\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
\t<link href=\"{{ asset('plugin/bootstrap/bootstrap-datetimepicker.min.css') }}\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
\t<link href=\"{{ asset('theme/ocpagebuilder.css') }}\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
\t<script src=\"{{ asset('plugin/jquery/jquery.bpopup.min.js') }}\"></script>
\t<script src=\"{{ asset('plugin/jquery/jquery.cookie.js') }}\"></script>
\t<script src=\"{{ asset('theme/ocajaxlogin/ocajaxlogin.js') }}\"></script>
\t<script src=\"{{ asset('plugin/moment/moment.min.js') }}\"></script>
\t<script src=\"{{ asset('plugin/moment/moment-with-locales.min.js') }}\"></script>
\t<script src=\"{{ asset('plugin/bootstrap/bootstrap-datetimepicker.min.js') }}\"></script>
\t<script src=\"{{ asset('javascript/common.js') }}\"></script>
\t<link href=\"{{ asset('image/cart.png') }}\" rel=\"icon\" />
\t<script src=\"{{ asset('plugin/bootstrap/bootstrap.min.js') }}\"></script>
</head>

<body class=\"common-home home1\">
\t<div class=\"wrapper\">

\t\t<header>
\t\t\t<div class=\"header-inner fix\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"container-inner\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t<div class=\"inner-inner\">
\t\t\t\t\t\t\t\t<div class=\"col-menu-mobile\">
\t\t\t\t\t\t\t\t\t<style>
\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .oc-menu-bar {
\t\t\t\t\t\t\t\t\t\t\tbackground: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t\tcolor: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t\tpadding: 14px 15px 14px 15px;
\t\t\t\t\t\t\t\t\t\t\tposition: relative;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8790.oc-menu-bar {
\t\t\t\t\t\t\t\t\t\t\tbackground: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t\tcolor: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .ul-top-items .li-top-item {
\t\t\t\t\t\t\t\t\t\t\tbackground: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t\tcolor: #292929;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .ul-top-items .li-top-item .a-top-link {
\t\t\t\t\t\t\t\t\t\t\tpadding: 5px 20px 5px 20px;
\t\t\t\t\t\t\t\t\t\t\tcolor: #292929;
\t\t\t\t\t\t\t\t\t\t\tfont-size: 12px;
\t\t\t\t\t\t\t\t\t\t\tline-height: 25px;
\t\t\t\t\t\t\t\t\t\t\ttext-transform: uppercase;
\t\t\t\t\t\t\t\t\t\t\tfont-weight: 600;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .ul-top-items .li-top-item:hover,
\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .ul-top-items .li-top-item.active {
\t\t\t\t\t\t\t\t\t\t\tbackground: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t\tcolor: #EE3333;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .ul-top-items .li-top-item:hover .a-top-link,
\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .ul-top-items .li-top-item.active .a-top-link {
\t\t\t\t\t\t\t\t\t\t\tcolor: #EE3333;
\t\t\t\t\t\t\t\t\t\t\tfont-weight: 600;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .mega-menu-container {
\t\t\t\t\t\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t\t\t\t\t\t\tbackground: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t\tpadding: 30px 30px 30px 30px;

\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .mega-menu-container .a-mega-second-link,
\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .mega-menu-container .widget-html-title {
\t\t\t\t\t\t\t\t\t\t\tcolor: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .mega-menu-container .a-mega-third-link {
\t\t\t\t\t\t\t\t\t\t\tcolor: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .ul-second-items .li-second-items {
\t\t\t\t\t\t\t\t\t\t\tbackground: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t\tcolor: #292929;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .ul-second-items .li-second-items:hover,
\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .ul-second-items .li-second-items.active {
\t\t\t\t\t\t\t\t\t\t\tbackground: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t\tcolor: #EE3333;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .ul-second-items .li-second-items .a-second-link {
\t\t\t\t\t\t\t\t\t\t\tcolor: #292929;
\t\t\t\t\t\t\t\t\t\t\tfont-size: 12px;
\t\t\t\t\t\t\t\t\t\t\ttext-transform: uppercase;
\t\t\t\t\t\t\t\t\t\t\tfont-weight: 600;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .ul-second-items .li-second-items:hover .a-second-link,
\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .ul-second-items .li-second-items.active .a-second-link {
\t\t\t\t\t\t\t\t\t\t\tcolor: #EE3333;
\t\t\t\t\t\t\t\t\t\t\tfont-weight: 600;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .ul-third-items .li-third-items {
\t\t\t\t\t\t\t\t\t\t\tbackground: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .ul-third-items .li-third-items:hover,
\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .ul-third-items .li-third-items.active {
\t\t\t\t\t\t\t\t\t\t\tbackground: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .ul-third-items .li-third-items .a-third-link {
\t\t\t\t\t\t\t\t\t\t\tcolor: #707070;
\t\t\t\t\t\t\t\t\t\t\tfont-size: 12px;
\t\t\t\t\t\t\t\t\t\t\ttext-transform: capitalize;
\t\t\t\t\t\t\t\t\t\t\tfont-weight: 400;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .ul-third-items .li-third-items:hover .a-third-link,
\t\t\t\t\t\t\t\t\t\t#oc-menu-8790 .ul-third-items .li-third-items.active .a-third-link {
\t\t\t\t\t\t\t\t\t\t\tcolor: #EE3333;
\t\t\t\t\t\t\t\t\t\t\tfont-weight: 400;
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t</style>


\t\t\t\t\t\t\t\t\t<div class=\"oc-menu mobile-menu hidden-lg \" id=\"oc-menu-8790\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"menu-effect-8790\" class=\"menu-effect\" value=\"none\" />
\t\t\t\t\t\t\t\t\t\t<div class=\"oc-menu-bar\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"left\"><i class=\"ion-android-menu\"></i> <span>Mobile Menu</span></div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-top-items\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-top-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"a-top-link a-item\" href=\"index.php?route=common/home\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Home</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-top-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"a-top-link a-item\"
\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Shop</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"top-click-show a-click-show\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sub-menu-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_307\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">Bedroom</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"second-click-show a-click-show\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flyout-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_307_414\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Brushes Kits</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_307_416\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Eye Brushes</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_307_360\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Face Brushes</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_307_417\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Lip Brushes</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_48\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">Storage</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"second-click-show a-click-show\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flyout-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_48_361\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">4G LTE Tablets</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_48_358\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Apple iPad</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_48_365\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">E-Readers</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_48_364\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">iPad &amp; Tablet
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAccessories</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_50\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">Decoration</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"second-click-show a-click-show\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flyout-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_50_472\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Face Palettes</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_50_420\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Face Primer</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_50_418\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Lipstick </span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_50_421\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Mascara</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_304\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">Lighting</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"second-click-show a-click-show\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flyout-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_304_474\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Body Cleansing</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_304_424\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Creams &amp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMoisturizers</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_304_423\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Face</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_304_422\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Face Moisturizers</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_304_359\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Masks</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_304_473\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Mousse</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=20_304_475\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Skin Care Sets &amp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tKits</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-top-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"a-top-link a-item\"
\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Eyes</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"top-click-show a-click-show\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sub-menu-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_84\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">Brushes</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"second-click-show a-click-show\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flyout-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_84_329\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Bags &amp; Cases</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_84_330\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Binoculars &amp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tScopes</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_84_331\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Digital Cameras</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_84_332\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Film Photography</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_84_334\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Lighting &amp; Studio</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_86\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">Mascara</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"second-click-show a-click-show\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flyout-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_86_396\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">DSLR Body &amp; Lens</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_86_397\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">DSLR Body Only</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_86_399\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">DSLR Lenses</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_86_398\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">DSLR Package Deals</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_62\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">Eye Shadow</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"second-click-show a-click-show\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flyout-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_62_401\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Camera Lenses</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_62_400\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">DSLR Lenses</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_62_402\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Lens Accessories</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_62_408\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Lowepro</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_62_410\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">SanDisk</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_91\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">Eye Brushes</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"second-click-show a-click-show\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flyout-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_91_407\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Bower</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_91_411\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Celestron</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_91_412\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Flipbac</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_91_409\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Gary Fong</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_91_413\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">GigaPan</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-top-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"a-top-link a-item\"
\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=451\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Lips</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"top-click-show a-click-show\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sub-menu-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=451_452\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">Brake Tools</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=451_453\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">Drive shafts</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=451_455\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">Emergency Brake</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=451_454\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">Spools</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-top-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"a-top-link a-item\"
\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=456\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Face</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"top-click-show a-click-show\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sub-menu-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=456_457\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">2-Stroke</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=456_460\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">4-Stroke</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=456_459\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">Diesel</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=456_458\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">Gasoline</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-top-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"a-top-link a-item\"
\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"index.php?route=information/information&amp;information_id=4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>About us</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-top-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"a-top-link a-item\" href=\"index.php?route=information/contact\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Contact us</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-top-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"a-top-link a-item\" href=\"index.php?route=product/special\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Specials</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-top-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"a-top-link a-item\" href=\"index.php?route=blog/blog\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Blog</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"logo-container\">
\t\t\t\t\t\t\t\t\t<div id=\"logo\">
\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=common/home\"><img
\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/logo/logo.png') }}\"title=\"Eposi1\" alt=\"Eposi1\" class=\"img-responsive\" /></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-hoz \">
\t\t\t\t\t\t\t\t\t<style>
\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .oc-menu-bar {
\t\t\t\t\t\t\t\t\t\t\tbackground: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t\tcolor: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t\tpadding: 15px 15px 15px 15px;
\t\t\t\t\t\t\t\t\t\t\tposition: relative;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8524.oc-menu-bar {
\t\t\t\t\t\t\t\t\t\t\tbackground: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t\tcolor: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .ul-top-items .li-top-item {
\t\t\t\t\t\t\t\t\t\t\tbackground: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t\tcolor: #292929;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .ul-top-items .li-top-item .a-top-link {
\t\t\t\t\t\t\t\t\t\t\tpadding: 14px 20px 14px 20px;
\t\t\t\t\t\t\t\t\t\t\tcolor: #292929;
\t\t\t\t\t\t\t\t\t\t\tfont-size: 12px;
\t\t\t\t\t\t\t\t\t\t\tline-height: 26px;
\t\t\t\t\t\t\t\t\t\t\ttext-transform: uppercase;
\t\t\t\t\t\t\t\t\t\t\tfont-weight: 600;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .ul-top-items .li-top-item:hover,
\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .ul-top-items .li-top-item.active {
\t\t\t\t\t\t\t\t\t\t\tbackground: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t\tcolor: #EE3333;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .ul-top-items .li-top-item:hover .a-top-link,
\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .ul-top-items .li-top-item.active .a-top-link {
\t\t\t\t\t\t\t\t\t\t\tcolor: #EE3333;
\t\t\t\t\t\t\t\t\t\t\tfont-weight: 600;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .mega-menu-container {
\t\t\t\t\t\t\t\t\t\t\twidth: 1020px;
\t\t\t\t\t\t\t\t\t\t\tbackground: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t\tpadding: 45px 50px 50px 50px;

\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .mega-menu-container .a-mega-second-link,
\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .mega-menu-container .widget-html-title {
\t\t\t\t\t\t\t\t\t\t\tcolor: #292929;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .mega-menu-container .a-mega-third-link {
\t\t\t\t\t\t\t\t\t\t\tcolor: #707070;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .ul-second-items .li-second-items {
\t\t\t\t\t\t\t\t\t\t\tbackground: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t\tcolor: #292929;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .ul-second-items .li-second-items:hover,
\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .ul-second-items .li-second-items.active {
\t\t\t\t\t\t\t\t\t\t\tbackground: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t\tcolor: #EE3333;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .ul-second-items .li-second-items .a-second-link {
\t\t\t\t\t\t\t\t\t\t\tcolor: #292929;
\t\t\t\t\t\t\t\t\t\t\tfont-size: 12px;
\t\t\t\t\t\t\t\t\t\t\ttext-transform: uppercase;
\t\t\t\t\t\t\t\t\t\t\tfont-weight: 600;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .ul-second-items .li-second-items:hover .a-second-link,
\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .ul-second-items .li-second-items.active .a-second-link {
\t\t\t\t\t\t\t\t\t\t\tcolor: #EE3333;
\t\t\t\t\t\t\t\t\t\t\tfont-weight: 600;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .ul-third-items .li-third-items {
\t\t\t\t\t\t\t\t\t\t\tbackground: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .ul-third-items .li-third-items:hover,
\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .ul-third-items .li-third-items.active {
\t\t\t\t\t\t\t\t\t\t\tbackground: #FFFFFF;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .ul-third-items .li-third-items .a-third-link {
\t\t\t\t\t\t\t\t\t\t\tcolor: #707070;
\t\t\t\t\t\t\t\t\t\t\tfont-size: 12px;
\t\t\t\t\t\t\t\t\t\t\ttext-transform: capitalize;
\t\t\t\t\t\t\t\t\t\t\tfont-weight: 400;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .ul-third-items .li-third-items:hover .a-third-link,
\t\t\t\t\t\t\t\t\t\t#oc-menu-8524 .ul-third-items .li-third-items.active .a-third-link {
\t\t\t\t\t\t\t\t\t\t\tcolor: #EE3333;
\t\t\t\t\t\t\t\t\t\t\tfont-weight: 400;
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t</style>
\t\t\t\t\t\t\t\t\t<div class=\"oc-menu horizontal-menu oc-menu-bar visible-lg \" id=\"oc-menu-8524\">

\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"menu-effect-8524\" class=\"menu-effect\" value=\"none\" />
\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-top-items\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-top-item left \" style=\"float: left\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"a-top-link\" href=\"index.php?route=common/home\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Home</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-top-item left has-child\" style=\"float: left\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"a-top-link\" href=\"index.php?route=product/category&amp;path=20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Shop</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Mega Menu -->


\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mega-menu-container sub-menu-container left \">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 sub-item2-content sub-item2-category-content\" data-cols=\"3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a class=\"a-mega-second-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=307\">Bedroom</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sub_item3-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><a class=\"a-mega-third-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=307_414\">Brushes
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tKits</a></h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><a class=\"a-mega-third-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=307_416\">Eye
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tBrushes</a></h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><a class=\"a-mega-third-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=307_360\">Face
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tBrushes</a></h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><a class=\"a-mega-third-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=307_417\">Lip
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tBrushes</a></h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>



\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 sub-item2-content sub-item2-category-content\" data-cols=\"3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a class=\"a-mega-second-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=124\">Living
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tRoom</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sub_item3-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><a class=\"a-mega-third-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=124_305\">Handbag</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><a class=\"a-mega-third-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=124_362\">Kids'
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTable</a></h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><a class=\"a-mega-third-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=124_133\">Clothing</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><a class=\"a-mega-third-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=124_137\">Shoes</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>



\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 sub-item2-content sub-item2-category-content\" data-cols=\"3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a class=\"a-mega-second-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=50\">Decoration</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sub_item3-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><a class=\"a-mega-third-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=50_472\">Face
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPalettes</a></h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><a class=\"a-mega-third-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=50_420\">Face
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPrimer</a></h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><a class=\"a-mega-third-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=50_418\">Lipstick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a></h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><a class=\"a-mega-third-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=50_421\">Mascara</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>



\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 sub-item2-content sub-item2-category-content\" data-cols=\"3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a class=\"a-mega-second-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=48\">Storage</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sub_item3-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><a class=\"a-mega-third-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=48_361\">4G
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLTE Tablets</a></h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><a class=\"a-mega-third-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=48_358\">Apple
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tiPad</a></h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><a class=\"a-mega-third-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=48_365\">E-Readers</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><a class=\"a-mega-third-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=48_364\">iPad
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&amp; Tablet Accessories</a></h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>





\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 sub-item2-content\" data-cols=\"12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"widget-html-title\"></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"banner-static static-bottom-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&amp;path=20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('image/img-bottom-menu.jpg') }}\" alt=\"img-bottom-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<!-- Flyout Menu -->
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-top-item left has-child\" style=\"float: left\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"a-top-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Accessories</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Mega Menu -->

\t\t\t\t\t\t\t\t\t\t\t\t<!-- Flyout Menu -->

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flyout-menu-container sub-menu-container left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_84\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">Brushes</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flyout-third-items left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_84_329\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Bags &amp; Cases</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_84_330\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Binoculars &amp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tScopes</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_84_331\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Digital Cameras</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_84_332\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Film Photography</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_84_334\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Lighting &amp; Studio</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_86\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">Mascara</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flyout-third-items left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_86_396\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">DSLR Body &amp; Lens</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_86_397\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">DSLR Body Only</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_86_399\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">DSLR Lenses</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_86_398\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">DSLR Package Deals</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_62\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">Eye Shadow</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flyout-third-items left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_62_401\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Camera Lenses</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_62_400\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">DSLR Lenses</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_62_402\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Lens Accessories</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_62_408\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Lowepro</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_62_410\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">SanDisk</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-second-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_91\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-second-link a-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"a-second-title\">Eye Brushes</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flyout-third-items left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_91_407\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Bower</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_91_411\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Celestron</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_91_412\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Flipbac</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_91_409\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">Gary Fong</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-third-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/category&amp;path=56_91_413\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"a-third-link\"><span class=\"a-third-title\">GigaPan</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-top-item left \" style=\"float: left\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"a-top-link\" href=\"index.php?route=information/contact\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Contact us</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-top-item left \" style=\"float: left\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"a-top-link\" href=\"index.php?route=product/special\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Specials</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"li-top-item left \" style=\"float: left\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"a-top-link\" href=\"index.php?route=blog/blog\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Blog</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t</div>




\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box-cart\">
\t\t\t\t\t\t\t\t\t<div id=\"search-by-category\" class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-toggle search-button\" data-toggle=\"dropdown\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu search-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button-close\"><i class=\"ion-ios-close-empty\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"search-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"categories-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hover-cate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p><span class=\"cate-selected\" data-value=\"0\">All Categories</span><i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-caret-down\"></i></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"cate-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"item-cate\" data-value=\"0\">All Categories</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"56\" class=\"item-cate\">accessories</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"84\" class=\"item-cate f1\">Brushes</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"329\" class=\"item-cate f2\">Bags &amp; Cases</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"330\" class=\"item-cate f2\">Binoculars &amp; Scopes</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"331\" class=\"item-cate f2\">Digital Cameras</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"332\" class=\"item-cate f2\">Film Photography</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"334\" class=\"item-cate f2\">Lighting &amp; Studio</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"86\" class=\"item-cate f1\">Mascara</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"396\" class=\"item-cate f2\">DSLR Body &amp; Lens</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"397\" class=\"item-cate f2\">DSLR Body Only</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"399\" class=\"item-cate f2\">DSLR Lenses</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"398\" class=\"item-cate f2\">DSLR Package Deals</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"62\" class=\"item-cate f1\">Eye Shadow</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"401\" class=\"item-cate f2\">Camera Lenses</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"400\" class=\"item-cate f2\">DSLR Lenses</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"402\" class=\"item-cate f2\">Lens Accessories</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"408\" class=\"item-cate f2\">Lowepro</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"410\" class=\"item-cate f2\">SanDisk</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"91\" class=\"item-cate f1\">Eye Brushes</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"407\" class=\"item-cate f2\">Bower</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"411\" class=\"item-cate f2\">Celestron</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"412\" class=\"item-cate f2\">Flipbac</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"409\" class=\"item-cate f2\">Gary Fong</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"413\" class=\"item-cate f2\">GigaPan</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"461\" class=\"item-cate\">Car Seats</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"463\" class=\"item-cate f1\">Booster</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"462\" class=\"item-cate f1\">Convertible</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"464\" class=\"item-cate f1\">Infant</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"465\" class=\"item-cate f1\">Toddler</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"312\" class=\"item-cate\">Chairs</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"386\" class=\"item-cate f1\">Bridge</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"385\" class=\"item-cate f1\">Hub</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"384\" class=\"item-cate f1\">Repeater</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"387\" class=\"item-cate f1\">Switch</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"308\" class=\"item-cate f1\">Video Games Cosoles</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"373\" class=\"item-cate f2\">PlayStation 3</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"372\" class=\"item-cate f2\">PlayStation 4</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"375\" class=\"item-cate f2\">Xbox 360</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"374\" class=\"item-cate f2\">Xbox One</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"309\" class=\"item-cate\">Engine Parts</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"376\" class=\"item-cate f1\">Calculators</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"425\" class=\"item-cate f1\">Check Trousers</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"377\" class=\"item-cate f1\">Ink &amp; Toner</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"426\" class=\"item-cate f1\">Low-Cut Jeans</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"431\" class=\"item-cate\">House Plants</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"21\" class=\"item-cate\">Lawn Care</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"440\" class=\"item-cate f1\">Hoes</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"438\" class=\"item-cate f1\">Shovels &amp; Trowels</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"436\" class=\"item-cate f1\">Trowels</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"437\" class=\"item-cate f1\">Workseats</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"451\" class=\"item-cate\">Lips</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"452\" class=\"item-cate f1\">Brake Tools</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"453\" class=\"item-cate f1\">Drive shafts</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"455\" class=\"item-cate f1\">Emergency Brake</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"454\" class=\"item-cate f1\">Spools</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"427\" class=\"item-cate\">Perfomance Filters</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"441\" class=\"item-cate\">Power Tools</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"442\" class=\"item-cate f1\">Battery Packs</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"444\" class=\"item-cate f1\">Chainsaws</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"445\" class=\"item-cate f1\">Cultivators &amp; Tillers</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"443\" class=\"item-cate f1\">Hedge Trimmers</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"466\" class=\"item-cate\">Repair parts</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"467\" class=\"item-cate f1\">Bearings</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"469\" class=\"item-cate f1\">Rim Screws</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"468\" class=\"item-cate f1\">Seals &amp; Hubs</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"470\" class=\"item-cate f1\">Simulators</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"430\" class=\"item-cate\">Seals &amp; Hubs</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"20\" class=\"item-cate\">Shop</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"307\" class=\"item-cate f1\">Bedroom</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"414\" class=\"item-cate f2\">Brushes Kits</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"416\" class=\"item-cate f2\">Eye Brushes</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"360\" class=\"item-cate f2\">Face Brushes</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"417\" class=\"item-cate f2\">Lip Brushes</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"124\" class=\"item-cate f1\">Living Room</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"305\" class=\"item-cate f2\">Handbag</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"362\" class=\"item-cate f2\">Kids' Table</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"133\" class=\"item-cate f2\">Clothing</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"137\" class=\"item-cate f2\">Shoes</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"48\" class=\"item-cate f1\">Storage</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"361\" class=\"item-cate f2\">4G LTE Tablets</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"358\" class=\"item-cate f2\">Apple iPad</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"365\" class=\"item-cate f2\">E-Readers</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"364\" class=\"item-cate f2\">iPad &amp; Tablet Accessories</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"50\" class=\"item-cate f1\">Decoration</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"472\" class=\"item-cate f2\">Face Palettes</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"420\" class=\"item-cate f2\">Face Primer</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"418\" class=\"item-cate f2\">Lipstick </li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"421\" class=\"item-cate f2\">Mascara</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"304\" class=\"item-cate f1\">Lighting</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"474\" class=\"item-cate f2\">Body Cleansing</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"424\" class=\"item-cate f2\">Creams &amp; Moisturizers</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"423\" class=\"item-cate f2\">Face</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"422\" class=\"item-cate f2\">Face Moisturizers</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"359\" class=\"item-cate f2\">Masks</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"473\" class=\"item-cate f2\">Mousse</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"475\" class=\"item-cate f2\">Skin Care Sets &amp; Kits</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"456\" class=\"item-cate\">Sofas</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"457\" class=\"item-cate f1\">2-Stroke</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"460\" class=\"item-cate f1\">4-Stroke</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"459\" class=\"item-cate f1\">Diesel</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-value=\"458\" class=\"item-cate f1\">Gasoline</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"search\" id=\"text-search\" value=\"\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tplaceholder=\"Search entire store here ...\" class=\"\" />

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"sp-btn-search\" class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"btn-search-category\" class=\"btn btn-default btn-lg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Search</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"search-ajax\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ajax-loader-container\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('image/AjaxLoader.gif') }}\" class=\"ajax-load-img\" width=\"30\" height=\"30\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"plazathemes.com\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ajax-result-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Content of search results -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"ajax-search-enable\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\$(document).ready(function () {
\t\t\t\t\t\t\t\t\t\t\tvar flag = false;
\t\t\t\t\t\t\t\t\t\t\tvar ajax_search_enable = \$('#ajax-search-enable').val();

\t\t\t\t\t\t\t\t\t\t\tvar current_cate_value = \$('ul.cate-items li.selected').data('value');
\t\t\t\t\t\t\t\t\t\t\tvar current_cate_text = \$('ul.cate-items li.selected').html();

\t\t\t\t\t\t\t\t\t\t\t\$('.cate-selected').attr('data-value', current_cate_value);
\t\t\t\t\t\t\t\t\t\t\t\$('.cate-selected').html(current_cate_text);

\t\t\t\t\t\t\t\t\t\t\t\$('.hover-cate p').click(function () {
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".cate-items\").toggle(\"slow\");
\t\t\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t\t\t\$('.ajax-result-container').hover(
\t\t\t\t\t\t\t\t\t\t\t\tfunction () {
\t\t\t\t\t\t\t\t\t\t\t\t\tflag = true;
\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\tfunction () {
\t\t\t\t\t\t\t\t\t\t\t\t\tflag = false;
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t);

\t\t\t\t\t\t\t\t\t\t\t\$('.hover-cate').hover(
\t\t\t\t\t\t\t\t\t\t\t\tfunction () {
\t\t\t\t\t\t\t\t\t\t\t\t\tflag = true;
\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\tfunction () {
\t\t\t\t\t\t\t\t\t\t\t\t\tflag = false;
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t);

\t\t\t\t\t\t\t\t\t\t\t\$('#search-by-category').focusout(function () {
\t\t\t\t\t\t\t\t\t\t\t\tif (flag == true) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.ajax-result-container').show();
\t\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.ajax-result-container').hide();
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t\t\t\$('#search-by-category').focusin(function () {
\t\t\t\t\t\t\t\t\t\t\t\t\$('.ajax-result-container').show();
\t\t\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t\t\t\$('#btn-search-category').click(function () {
\t\t\t\t\t\t\t\t\t\t\t\tvar url = 'http://demo.towerthemes.com/tt_eposi/index.php?route=product/search';
\t\t\t\t\t\t\t\t\t\t\t\tvar text_search = \$('#text-search').val();
\t\t\t\t\t\t\t\t\t\t\t\tif (text_search) {
\t\t\t\t\t\t\t\t\t\t\t\t\turl += '&search=' + encodeURIComponent(text_search);
\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\tvar category_search = \$('.cate-selected').attr(\"data-value\");
\t\t\t\t\t\t\t\t\t\t\t\tif (category_search) {
\t\t\t\t\t\t\t\t\t\t\t\t\turl += '&category_id=' + encodeURIComponent(category_search);
\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\tlocation = url;
\t\t\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t\t\tif (ajax_search_enable == '1') {
\t\t\t\t\t\t\t\t\t\t\t\t\$('#text-search').keyup(function (e) {
\t\t\t\t\t\t\t\t\t\t\t\t\tvar text_search = \$(this).val();
\t\t\t\t\t\t\t\t\t\t\t\t\tvar cate_search = \$('.cate-selected').attr(\"data-value\");
\t\t\t\t\t\t\t\t\t\t\t\t\tif (text_search != null && text_search != '') {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tajaxSearch(text_search, cate_search);
\t\t\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.ajax-result-container').html('');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.ajax-loader-container').hide();
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t\t\t\t\$('ul.cate-items li.item-cate').click(function () {
\t\t\t\t\t\t\t\t\t\t\t\t\tvar cate_search = \$(this).data('value');
\t\t\t\t\t\t\t\t\t\t\t\t\tvar text_search = \$('#text-search').val();
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.cate-selected').attr('data-value', cate_search);
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.cate-selected').html(\$(this).html());
\t\t\t\t\t\t\t\t\t\t\t\t\tif (text_search != null && text_search != '') {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tajaxSearch(text_search, cate_search);
\t\t\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.ajax-result-container').html('');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.ajax-loader-container').hide();
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\".cate-items\").hide();
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#text-search').focus();
\t\t\t\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\tfunction ajaxSearch(text_search, cate_search) {
\t\t\t\t\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\t\t\t\t\turl: 'http://demo.towerthemes.com/tt_eposi/index.php?route=extension/module/ocsearchcategory/ajaxSearch',
\t\t\t\t\t\t\t\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\t\t\t\t\t\t\t\tdata: { text_search: text_search, cate_search: cate_search },
\t\t\t\t\t\t\t\t\t\t\t\t\tbeforeSend: function () {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.ajax-loader-container').show();
\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\tsuccess: function (json) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (json['success'] == true) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.ajax-result-container').html(json['result_html']);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.ajax-loader-container').hide();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t});    
\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t<div id=\"cart\" class=\"btn-group btn-block\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"dropdown\" data-loading-text=\"Loading...\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"btn dropdown-toggle\"><span id=\"cart-total\"><span class=\"txt_number\">0</span><span
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"txt_items\">My Cart </span><span class=\"total-price\">\$0.00</span></span></button>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu pull-right\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-center cart-empty\">Your shopping cart is empty!</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"box-setting\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-toggle setting-button\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t<span></span><span></span><span></span></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu setting-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"account\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-link btn-link-current\">My Account <i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-arrow-down\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\" id=\"top-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-account list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"a-register-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=account/register\">Register</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"a-login-link\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=account/login\">Login</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"currency\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"http://demo.towerthemes.com/tt_eposi/index.php?route=common/currency/currency\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tmethod=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left hidden-xs hidden-sm hidden-md text-ex\">Currency:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-link btn-link-current\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tUSD
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-arrow-down\"></i>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"EUR\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t€

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEuro
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"GBP\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t£

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPound Sterling
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"item-selected currency-select btn btn-link btn-block\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"USD\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tUS Dollar
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"code\" value=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"http://demo.towerthemes.com/tt_eposi/index.php?route=common/home\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"http://demo.towerthemes.com/tt_eposi/index.php?route=common/language/language\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tmethod=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left hidden-xs hidden-sm hidden-md text-ex\">Language:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-link btn-link-current\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ten-gb
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-arrow-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><button class=\"btn btn-link btn-block language-select item-selected\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"en-gb\"><img src=\"{{ asset('image/language/en-gb.png') }}\"alt=\"English\" title=\"English\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEnglish</button></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"de-de\"><img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/language/de-de.png') }}\"alt=\"Germany\" title=\"Germany\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tGermany</button></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"code\" value=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"http://demo.towerthemes.com/tt_eposi/index.php?route=common/home\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>

\t\t<div id=\"content\">

\t\t\t<div class=\"main-row fluid-width\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"main-col col-sm-12 col-md-12\">
\t\t\t\t\t\t\t<div class=\"row sub-row\">
\t\t\t\t\t\t\t\t<div class=\"sub-col col-sm-12 col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"newletter-popup\">
\t\t\t\t\t\t\t\t\t\t<div id=\"boxes\" class=\"newletter-container\">
\t\t\t\t\t\t\t\t\t\t\t<div id=\"dialog\" class=\"window\">
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"popup2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"b-close\"><span>Close</span></span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"newletter-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>Newsletter</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-content newleter-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Subscribe to our newsletters now and stay up-to-date with new collections, the latest
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tlookbooks and exclusive offers.</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"frm_subscribe\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form name=\"subscribe\" id=\"subscribe_popup\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <span class=\"required\">*</span><span>Enter you email address here...</span>-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"\" name=\"subscribe_pemail\" id=\"subscribe_pemail\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tplaceholder=\"Enter you email address here...\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"\" name=\"subscribe_pname\" id=\"subscribe_pname\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"notification\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"button\" onclick=\"email_subscribepopup()\"><span>Subscribe</span></a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"subscribe-bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"newsletter_popup_dont_show_again\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"newsletter_popup_dont_show_again\">Don't show this popup again</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /#frm_subscribe -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.box-content -->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tfunction email_subscribepopup() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\t\t\t\t\t\t\t\t\turl: 'index.php?route=extension/module/newslettersubscribe/subscribepopup',
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata: \$(\"#subscribe_popup\").serialize(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\tsuccess: function (html) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \$.cookie('shownewsletter', '1');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttry {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\teval(html);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcatch (e) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\tfunction email_unsubscribepopup() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\t\t\t\t\t\t\t\t\turl: 'index.php?route=extension/module/newslettersubscribe/unsubscribe',
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata: \$(\"#subscribe_popup\").serialize(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\tsuccess: function (html) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttry {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\teval(html);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcatch (e) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('html, body').delay(1500).animate({ scrollTop: 0 }, 'slow');
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\t\$(document).ready(function () {

\t\t\t\t\t\t\t\t\t\t\t\t\t/*if (\$.cookie('shownewsletter') == 1) \$('.newletter-popup').hide();
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#subscribe_pemail').keypress(function (e) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (e.which == 13) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\te.preventDefault();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\temail_subscribepopup();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar name = \$(this).val();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#subscribe_pname').val(name);
\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#subscribe_pemail').change(function () {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar name = \$(this).val();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#subscribe_pname').val(name);
\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t//transition effect
\t\t\t\t\t\t\t\t\t\t\t\t\tif (\$.cookie(\"shownewsletter\") != 1) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.newletter-popup').bPopup();
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#newsletter_popup_dont_show_again').on('change', function () {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (\$.cookie(\"shownewsletter\") != 1) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$.cookie(\"shownewsletter\", '1')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$.cookie(\"shownewsletter\", '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t});*/
\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div><!-- /.box -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"ajax-login-block\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"ajax-loader\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('image/AjaxLoader.gif') }}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ajax-body-login\">
\t\t\t\t\t\t\t\t\t\t<div class=\"account-login\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"page-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1>Login or create an account</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"a-close-frm\"
\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocajaxlogin.closeForm();\"><span>Close</span></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ajax-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ajax-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"login-form-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>Returning Customer</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p><strong>I am a returning customer</strong></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"#\" method=\"post\" id=\"ajax-login-form\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-email\">E-Mail Address</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" value=\"\" placeholder=\"E-Mail Address\" id=\"input-email\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-password\">Password</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"\" placeholder=\"Password\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"input-password\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"forgotten\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=account/forgotten\">Forgotten
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPassword</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocajaxlogin.loginAction(document.getElementById('input-email').value, document.getElementById('input-password').value)\"><span>Login</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocajaxlogin.appendRegisterForm()\"><span>Create an account</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"ajax-load-img\" alt=\"\" src=\"{{ asset('image/AjaxLoader.gif') }}\" width=\"30\" height=\"30\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\$(document).ready(function () {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar keycode = '';

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#input-email').keypress(function (e) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tkeycode = (e.keyCode ? e.keyCode : e.which);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (keycode == '13') {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tocajaxlogin.loginAction(ocajaxlogin.loginAction(document.getElementById('input-email').value, document.getElementById('input-password').value));
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#input-password').keypress(function (e) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tkeycode = (e.keyCode ? e.keyCode : e.which);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (keycode == '13') {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tocajaxlogin.loginAction(ocajaxlogin.loginAction(document.getElementById('input-email').value, document.getElementById('input-password').value));
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t\t\t\t</script>


\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"account-register\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"page-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1>Login or create an account</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"a-close-frm\"
\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocajaxlogin.closeForm();\"><span>Close</span></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ajax-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ajax-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"register-form-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h1>Register Account</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>If you already have an account with us, please login at the <a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocajaxlogin.appendLoginForm()\" href=\"javascript:void(0);\">login form</a>.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\taction=\"http://demo.towerthemes.com/tt_eposi/index.php?route=extension/module/ajaxregister\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmethod=\"post\" id=\"ajax-register-form\" enctype=\"multipart/form-data\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-horizontal\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset id=\"account\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>Your Personal Details</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\" style=\"display:  none ;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">Customer Group</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"customer_group_id\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDefault</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-firstname\">First Name</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"First Name\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"input-firstname\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Error First Name -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"for-error error-firstname\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-lastname\">Last Name</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"Last Name\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"input-lastname\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Error Last Name -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"for-error error-lastname\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-register-email\">E-Mail</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"\" placeholder=\"E-Mail\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"input-register-email\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Error Email -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"for-error error-email\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-telephone\">Telephone</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"tel\" name=\"telephone\" value=\"\" placeholder=\"Telephone\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"input-telephone\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Error Phone -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"for-error error-telephone\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>Your Password</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-register-password\">Password</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"\" placeholder=\"Password\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"input-register-password\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Error Password -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"for-error error-password\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-confirm\">Password Confirm</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"confirm\" value=\"\" placeholder=\"Password Confirm\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"input-confirm\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Error Confirm Password -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"for-error error-confirm\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>Newsletter</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">Subscribe</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"newsletter\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tYes</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNo</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-right\">I have read and agree to the <a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=information/information/agree&amp;information_id=3\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"agree\"><b>Privacy Policy</b></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" onclick=\"ocajaxlogin.registerAction();\" value=\"Continue\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"btn btn-primary\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"ajax-load-img\" alt=\"\" src=\"{{ asset('image/AjaxLoader.gif') }}\" width=\"30\" height=\"30\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger for-error error-warning\"><i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-exclamation-circle\"></i><span></span></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<script>< !--
\t\t\t\t\t\t\t\t\t\t\t\t\t\t// Sort the custom fields
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#account .form-group[data-sort]').detach().each(function () {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (\$(this).attr('data-sort') > \$('#account .form-group').length) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#account .form-group:last').after(this);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#account .form-group:first').before(this);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#address .form-group[data-sort]').detach().each(function () {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#address .form-group').length) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#address .form-group').eq(\$(this).attr('data-sort')).before(this);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (\$(this).attr('data-sort') > \$('#address .form-group').length) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#address .form-group:last').after(this);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (\$(this).attr('data-sort') < -\$('#address .form-group').length) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#address .form-group:first').before(this);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t\t\t\t\t\$('input[name=\\'customer_group_id\\']').on('change', function () {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\turl: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsuccess: function (json) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.custom-field').hide();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.custom-field').removeClass('required');

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcustom_field = json[i];

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#custom-field' + custom_field['custom_field_id']).show();

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (custom_field['required']) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#custom-field' + custom_field['custom_field_id']).addClass('required');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tconsole.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t\t\t\t\t\$('input[name=\\'customer_group_id\\']:checked').trigger('change');
    //--></script>
\t\t\t\t\t\t\t\t\t\t\t\t<script>< !--
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('button[id^=\\'button-custom-field\\']').on('click', function () {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar element = this;

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#form-upload').remove();

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (typeof timer != 'undefined') {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclearInterval(timer);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttimer = setInterval(function () {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclearInterval(timer);

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcache: false,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcontentType: false,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tprocessData: false,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbeforeSend: function () {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(element).button('loading');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcomplete: function () {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(element).button('reset');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsuccess: function (json) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(element).parent().find('.text-danger').remove();

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(element).parent().find('input').val(json['code']);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}, 500);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
    //--></script>
\t\t\t\t\t\t\t\t\t\t\t\t<script>< !--
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.date').datetimepicker({
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tlanguage: document.cookie.match(new RegExp('language=([^;]+)'))[1],
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpickTime: false
\t\t\t\t\t\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.time').datetimepicker({
\t\t\t\t\t\t\t\t\t\t\t\t\t\tlanguage: document.cookie.match(new RegExp('language=([^;]+)'))[1],
\t\t\t\t\t\t\t\t\t\t\t\t\t\tpickDate: false
\t\t\t\t\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.datetime').datetimepicker({
\t\t\t\t\t\t\t\t\t\t\t\t\t\tlanguage: document.cookie.match(new RegExp('language=([^;]+)'))[1],
\t\t\t\t\t\t\t\t\t\t\t\t\t\tpickDate: true,
\t\t\t\t\t\t\t\t\t\t\t\t\t\tpickTime: true
\t\t\t\t\t\t\t\t\t\t\t\t\t});
    //--></script>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"account-success\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ajax-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ajax-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"success-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"page-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h1>Your Account Has Been Created!</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Thank you for registering with Eposi1!</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>You will be notified by e-mail once your account has been activated by the store owner.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>If you have ANY questions about the operation of this online shop, please <a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=information/contact\">contact
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tthe store owner</a>.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-right\"><button class=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"window.location.href='http://demo.towerthemes.com/tt_eposi/index.php?route=account/account'\"><span>Continue</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"logout-success\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ajax-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ajax-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"success-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"page-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h1>Account Logout</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>You have been logged off your account. It is now safe to leave the computer.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Your shopping cart has been saved, the items inside it will be restored whenever you log
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tback into your account.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-right\"><button class=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"window.location.href='http://demo.towerthemes.com/tt_eposi/index.php?route=common/home'\"><span>Continue</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"opc-hidden\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"input-opc-status\" value=\"1\" />
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"banner7\">
\t\t\t\t\t\t\t\t\t\t<div class=\"oc-banner7-container\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"flexslider oc-nivoslider\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"oc-loading\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"oc-inivoslider1\" class=\"nivoSlider\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"display: none;\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/slider/slider2-eposi1-1820x785.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\" title=\"#banner7-caption2\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"display: none;\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/slider/slider3-eposi1-1820x785.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\" title=\"#banner7-caption3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"display: none;\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/slider/slider1-eposi1-1820x785.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\" title=\"#banner7-caption4\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t</div>





\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"banner7-caption2\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"banner7-caption nivo-html-caption nivo-caption move-slides-effect\"
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-class=\"slide-movetype2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeloading\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\" banner7-content slider-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"container-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"title1\">amazing product!</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"sub-title\">Decor chair</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"banner7-des\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>An elegant selection of chairs combining comfort &amp; practicality. Providing
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tthe perfect solution for large &amp; small scale exhibition seating.</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"banner7-readmore\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"link-more\" href=\"#\">Shopping Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>




\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"banner7-caption3\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"banner7-caption nivo-html-caption nivo-caption move-slides-effect\"
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-class=\"slide-movetype3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeloading\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\" banner7-content slider-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"container-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"title1\">Walnut Time signal</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"sub-title\">wall clock</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"banner7-des\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>A striking centrepiece is conveyed through this Clock's graphically styled
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tintegration with any modern.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"banner7-readmore\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"link-more\" href=\"#\">Shopping Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>




\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"banner7-caption4\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"banner7-caption nivo-html-caption nivo-caption move-slides-effect\"
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-class=\"slide-movetype1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeloading\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\" banner7-content slider-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"container-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"title1\">amazing product!</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"sub-title\">Wall Clock</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"banner7-des\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Let your Wall reflect the luxurious side of you with our Unique Design 24ct.gold
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tplated Wall Clock.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"banner7-readmore\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"link-more\" href=\"#\">Shopping Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\$(window).load(function () {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#oc-inivoslider1').nivoSlider({
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\teffect: \"random\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tslices: 15,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tboxCols: 8,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tboxRows: 4,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmanualAdvance: false,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tanimSpeed: 500,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpauseTime: 5000,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstartSlide: 0,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcontrolNav: true,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdirectionNav: true,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcontrolNavThumbs: false,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpauseOnHover: true,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tprevText: '<i class=\"ion-chevron-left\"></i>',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tnextText: '<i class=\"ion-chevron-right\"></i>',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tafterLoad: function () {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.oc-loading').css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.timeloading').css('animation-duration', \" 5000ms \");
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"main-row \">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"main-col col-sm-12 col-md-12\">
\t\t\t\t\t\t\t<div class=\"row sub-row\">
\t\t\t\t\t\t\t\t<div class=\"sub-col col-sm-12 col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"banner-static static-top-store1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&amp;path=20_48\"><img src=\"{{ asset('image/img1-top-eposi1.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"img1\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Storage</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&amp;path=20_48\">Shop Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&amp;path=20_304\"><img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/img2-top-eposi1.jpg') }}\" alt=\"img2\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Lighting</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&amp;path=20_304\">Shop Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&amp;path=20_50\"><img src=\"{{ asset('image/img3-top-eposi1.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"img3\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Decoration</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&amp;path=20_50\">Shop Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&amp;path=20_124\"><img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/img4-top-eposi1.jpg') }}\" alt=\"img4\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Living Room</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&amp;path=20_124\">Shop Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tt_tabsproduct_module tabs-category-slider\" id=\"product_module656\">
\t\t\t\t\t\t\t\t\t\t<div class=\"module-title\">

\t\t\t\t\t\t\t\t\t\t\t<h2>Our Products</h2>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"module-description\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum
\t\t\t\t\t\t\t\t\t\t\t\t\tformas. </p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-tab\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tab-heading tabs-categorys\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"pill\" href=\"#tab-6560\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Decoration</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"pill\" href=\"#tab-6561\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Lighting</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"pill\" href=\"#tab-6562\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Storage</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"pill\" href=\"#tab-6563\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Living Room</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t\t\t\t\t\t\t</div>



\t\t\t\t\t\t\t\t\t\t<div class=\"box-style\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-product\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"owl-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tt-product \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"tab-container-656  owl-carousel owl-theme  tab-pane tab-product-container  fade \"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"tab-6560\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=53\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"{{ asset('image/product//2_1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Sony XBR-55X900E 55-inch 4K HDR Ultra HD\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/product//2-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Sony XBR-55X900E 55-inch 4K HDR Ultra HD\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Sony XBR-55X900E 55-inch 4K HDR Ultra HD\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\"><span>-2% </span></div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('53');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('53');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('53');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=53')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=5\">HTC</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating3\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=53\">Sony
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tXBR-55X900E 55-inch 4K HDR Ultra HD</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">\$78.80</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">\$80.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$64.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=56\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"{{ asset('image/product//11_1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Roush Mustang 4-Piston Black Front Brake Kit\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/product//11-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Roush Mustang 4-Piston Black Front Brake Kit\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Roush Mustang 4-Piston Black Front Brake Kit\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('56');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('56');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('56');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=56')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating2\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=56\">Roush
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMustang 4-Piston Black Front Brake Kit</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$92.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$75.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=54\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"{{ asset('image/product//12_1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Koss Porta Pro On Ear Headphones with Case\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/product//12-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Koss Porta Pro On Ear Headphones with Case\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Koss Porta Pro On Ear Headphones with Case\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\"><span>-7% </span></div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('54');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('54');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('54');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=54')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating5\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=54\">Koss
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPorta Pro On Ear Headphones with Case</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">\$80.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">\$86.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$65.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=51\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"{{ asset('image/product//8_1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Bose SoundLink Micro  Bluetooth Speaker\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/product//8-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Bose SoundLink Micro  Bluetooth Speaker\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Bose SoundLink Micro  Bluetooth Speaker\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\"><span>-20% </span></div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('51');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('51');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('51');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=51')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=9\">Canon</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating3\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=51\">Bose
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSoundLink Micro Bluetooth Speaker</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">\$98.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">\$122.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$80.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=55\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"{{ asset('image/product//7_1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats Solo3 Wireless  On-Ear Headphones\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/product//7-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats Solo3 Wireless  On-Ear Headphones\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Beats Solo3 Wireless  On-Ear Headphones\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('55');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('55');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('55');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=55')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=10\">Sony</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating4\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=55\">Beats
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSolo3 Wireless On-Ear Headphones</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$1,202.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$1,000.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=61\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"{{ asset('image/product//6_1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats Solo2 Solo 2  Wired On-Ear Headphone\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/product//6-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats Solo2 Solo 2  Wired On-Ear Headphone\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Beats Solo2 Solo 2  Wired On-Ear Headphone\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('61');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('61');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('61');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=61')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating3\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=61\">Beats
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSolo2 Solo 2 Wired On-Ear Headphone</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$602.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$500.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=62\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"{{ asset('image/product//5_1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats solo wireless on ear headphones\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/product//5-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats solo wireless on ear headphones\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Beats solo wireless on ear headphones\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('62');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('62');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('62');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=62')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=7\">Hewlett-Packard</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating5\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=62\">Beats
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsolo wireless on ear headphones</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$241.99</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$199.99</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=59\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"{{ asset('image/product//4_1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Apple iPhone SE Unlocked Phone -16 GB Retail\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/product//4-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Apple iPhone SE Unlocked Phone -16 GB Retail\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Apple iPhone SE Unlocked Phone -16 GB Retail\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('59');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('59');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('59');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=59')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating3\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=59\">Apple
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tiPhone SE Unlocked Phone -16 GB Retail</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$104.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$85.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"tab-container-656  owl-carousel owl-theme  tab-pane tab-product-container  fade \"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"tab-6561\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=139\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"{{ asset('image/product//9_1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"JBL Flip 3 Splashproof  Portable Bluetooth\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/product//9-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"JBL Flip 3 Splashproof  Portable Bluetooth\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"JBL Flip 3 Splashproof  Portable Bluetooth\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('139');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('139');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('139');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=139')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating3\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=139\">JBL
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFlip 3 Splashproof Portable Bluetooth</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$602.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$500.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=138\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"{{ asset('image/product//3_1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats EP Wired On-Ear  Headphone-Black\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/product//3-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats EP Wired On-Ear  Headphone-Black\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Beats EP Wired On-Ear  Headphone-Black\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\"><span>-20% </span></div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('138');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('138');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('138');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=138')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=9\">Canon</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating4\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=138\">Beats
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEP Wired On-Ear Headphone-Black</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">\$98.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">\$122.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$80.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=53\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"{{ asset('image/product//2_1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Sony XBR-55X900E 55-inch 4K HDR Ultra HD\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/product//2-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Sony XBR-55X900E 55-inch 4K HDR Ultra HD\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Sony XBR-55X900E 55-inch 4K HDR Ultra HD\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\"><span>-2% </span></div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('53');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('53');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('53');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=53')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=5\">HTC</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating3\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=53\">Sony
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tXBR-55X900E 55-inch 4K HDR Ultra HD</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">\$78.80</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">\$80.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$64.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=51\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"{{ asset('image/product//8_1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Bose SoundLink Micro  Bluetooth Speaker\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/product//8-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Bose SoundLink Micro  Bluetooth Speaker\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Bose SoundLink Micro  Bluetooth Speaker\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\"><span>-20% </span></div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('51');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('51');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('51');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=51')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=9\">Canon</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating3\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=51\">Bose
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSoundLink Micro Bluetooth Speaker</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">\$98.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">\$122.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$80.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=55\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"{{ asset('image/product//7_1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats Solo3 Wireless  On-Ear Headphones\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/product//7-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats Solo3 Wireless  On-Ear Headphones\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Beats Solo3 Wireless  On-Ear Headphones\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('55');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('55');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('55');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=55')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=10\">Sony</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating4\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=55\">Beats
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSolo3 Wireless On-Ear Headphones</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$1,202.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$1,000.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=62\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"{{ asset('image/product//5_1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats solo wireless on ear headphones\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/product//5-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats solo wireless on ear headphones\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Beats solo wireless on ear headphones\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('62');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('62');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('62');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=62')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=7\">Hewlett-Packard</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating5\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=62\">Beats
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsolo wireless on ear headphones</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$241.99</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$199.99</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"tab-container-656  owl-carousel owl-theme  tab-pane tab-product-container  fade \"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"tab-6562\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=143\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"{{ asset('image/product//14_1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Nokia | Steel HR Hybrid Smartwatch - Activity\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/product//14-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Nokia | Steel HR Hybrid Smartwatch - Activity\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Nokia | Steel HR Hybrid Smartwatch - Activity\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_new\"><span>New</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('143');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('143');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('143');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=143')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating5\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=143\">Nokia
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t| Steel HR Hybrid Smartwatch - Activity</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$116.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$95.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=60\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"{{ asset('image/product//10_1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Kodak PIXPRO Astro Zoom AZ421 16 MP\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/product//10-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Kodak PIXPRO Astro Zoom AZ421 16 MP\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Kodak PIXPRO Astro Zoom AZ421 16 MP\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('60');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('60');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('60');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=60')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating4\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=60\">Kodak
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPIXPRO Astro Zoom AZ421 16 MP</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$116.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$95.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=55\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"{{ asset('image/product//7_1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats Solo3 Wireless  On-Ear Headphones\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/product//7-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats Solo3 Wireless  On-Ear Headphones\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Beats Solo3 Wireless  On-Ear Headphones\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('55');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('55');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('55');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=55')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=10\">Sony</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating4\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=55\">Beats
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSolo3 Wireless On-Ear Headphones</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$1,202.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$1,000.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=62\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"{{ asset('image/product//5_1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats solo wireless on ear headphones\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/product//5-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats solo wireless on ear headphones\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Beats solo wireless on ear headphones\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('62');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('62');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('62');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=62')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=7\">Hewlett-Packard</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating5\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=62\">Beats
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsolo wireless on ear headphones</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$241.99</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$199.99</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=59\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"{{ asset('image/product//4_1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Apple iPhone SE Unlocked Phone -16 GB Retail\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/product//4-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Apple iPhone SE Unlocked Phone -16 GB Retail\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Apple iPhone SE Unlocked Phone -16 GB Retail\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('59');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('59');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('59');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=59')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating3\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=59\">Apple
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tiPhone SE Unlocked Phone -16 GB Retail</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$104.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$85.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=57\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"{{ asset('image/product//1_1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Amazon Cloud Cam Indoor Security Camera\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/product//1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Amazon Cloud Cam Indoor Security Camera\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Amazon Cloud Cam Indoor Security Camera\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('57');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('57');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('57');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=57')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating4\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=57\">Amazon
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCloud Cam Indoor Security Camera</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$98.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$80.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"tab-container-656  owl-carousel owl-theme  tab-pane tab-product-container  fade \"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"tab-6563\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=143\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"{{ asset('image/product//14_1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Nokia | Steel HR Hybrid Smartwatch - Activity\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/product//14-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Nokia | Steel HR Hybrid Smartwatch - Activity\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Nokia | Steel HR Hybrid Smartwatch - Activity\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_new\"><span>New</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('143');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('143');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('143');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=143')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating5\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=143\">Nokia
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t| Steel HR Hybrid Smartwatch - Activity</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$116.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$95.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=140\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"{{ asset('image/product//13_1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Marshall Kilburn Portable Bluetooth Speaker\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/product//13-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Marshall Kilburn Portable Bluetooth Speaker\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Marshall Kilburn Portable Bluetooth Speaker\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_new\"><span>New</span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\"><span>-7% </span></div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('140');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('140');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('140');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=140')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating4\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=140\">Marshall
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tKilburn Portable Bluetooth Speaker</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">\$80.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">\$86.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$65.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=139\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"{{ asset('image/product//9_1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"JBL Flip 3 Splashproof  Portable Bluetooth\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/product//9-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"JBL Flip 3 Splashproof  Portable Bluetooth\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"JBL Flip 3 Splashproof  Portable Bluetooth\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('139');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('139');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('139');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=139')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating3\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=139\">JBL
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFlip 3 Splashproof Portable Bluetooth</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$602.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$500.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=138\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"{{ asset('image/product//3_1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats EP Wired On-Ear  Headphone-Black\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/product//3-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats EP Wired On-Ear  Headphone-Black\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Beats EP Wired On-Ear  Headphone-Black\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\"><span>-20% </span></div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('138');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('138');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('138');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=138')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=9\">Canon</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating4\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=138\">Beats
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEP Wired On-Ear Headphone-Black</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">\$98.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">\$122.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$80.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=56\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"{{ asset('image/product//11_1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Roush Mustang 4-Piston Black Front Brake Kit\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/product//11-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Roush Mustang 4-Piston Black Front Brake Kit\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Roush Mustang 4-Piston Black Front Brake Kit\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('56');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('56');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('56');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=56')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating2\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=56\">Roush
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMustang 4-Piston Black Front Brake Kit</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$92.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$75.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=54\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"{{ asset('image/product//12_1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Koss Porta Pro On Ear Headphones with Case\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/product//12-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Koss Porta Pro On Ear Headphones with Case\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Koss Porta Pro On Ear Headphones with Case\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\"><span>-7% </span></div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('54');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('54');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('54');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=54')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating5\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=54\">Koss
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPorta Pro On Ear Headphones with Case</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">\$80.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">\$86.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$65.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=60\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"{{ asset('image/product//10_1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Kodak PIXPRO Astro Zoom AZ421 16 MP\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/product//10-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Kodak PIXPRO Astro Zoom AZ421 16 MP\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Kodak PIXPRO Astro Zoom AZ421 16 MP\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('60');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('60');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('60');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=60')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating4\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=60\">Kodak
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPIXPRO Astro Zoom AZ421 16 MP</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$116.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$95.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=55\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"{{ asset('image/product//7_1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats Solo3 Wireless  On-Ear Headphones\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/product//7-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats Solo3 Wireless  On-Ear Headphones\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Beats Solo3 Wireless  On-Ear Headphones\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('55');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Add to Wish List\" onclick=\"wishlist.add('55');\"><span>Add to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"compare.add('55');\"><span>Compare this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=55')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=10\">Sony</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating4\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=55\">Beats
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSolo3 Wireless On-Ear Headphones</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$1,202.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$1,000.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\$(document).ready(function () {
\t\t\t\t\t\t\t\t\t\t\t\$('a[href=\"#tab-6560\"]').trigger(\"click\");
\t\t\t\t\t\t\t\t\t\t\t\$(\".tab-container-656\").owlCarousel({
\t\t\t\t\t\t\t\t\t\t\t\titems: 4,
\t\t\t\t\t\t\t\t\t\t\t\tloop: false,
\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0,
\t\t\t\t\t\t\t\t\t\t\t\tnav: true,
\t\t\t\t\t\t\t\t\t\t\t\tdots: false,
\t\t\t\t\t\t\t\t\t\t\t\tautoplay: false,
\t\t\t\t\t\t\t\t\t\t\t\tautoplayTimeout: 1000,
\t\t\t\t\t\t\t\t\t\t\t\tautoplayHoverPause: true,
\t\t\t\t\t\t\t\t\t\t\t\tautoplaySpeed: 1000,
\t\t\t\t\t\t\t\t\t\t\t\tnavSpeed: 1000,
\t\t\t\t\t\t\t\t\t\t\t\tdotsSpeed: 1000,
\t\t\t\t\t\t\t\t\t\t\t\tlazyLoad: true,
\t\t\t\t\t\t\t\t\t\t\t\tresponsive: {
\t\t\t\t\t\t\t\t\t\t\t\t\t0: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\titems: 1,
\t\t\t\t\t\t\t\t\t\t\t\t\t\tnav: false
\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t375: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\titems: 2,
\t\t\t\t\t\t\t\t\t\t\t\t\t\tnav: false
\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t480: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\titems: 2,
\t\t\t\t\t\t\t\t\t\t\t\t\t\tnav: false
\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t768: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\titems: 2
\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t992: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\titems: 3
\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t1200: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\titems: 4
\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t1600: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\titems: 4
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\tonInitialized: function () {
\t\t\t\t\t\t\t\t\t\t\t\t\tvar count = \$(\".tab-container-656 .owl-item.active\").length;
\t\t\t\t\t\t\t\t\t\t\t\t\tif (count == 1) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\".tab-container-656 .owl-item\").removeClass('first');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\".tab-container-656 .owl-item.active\").addClass('first');
\t\t\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\".tab-container-656 .owl-item\").removeClass('first');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\".tab-container-656 .owl-item.active:first\").addClass('first');
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\tonTranslated: function () {
\t\t\t\t\t\t\t\t\t\t\t\t\tvar count = \$(\".tab-container-656 .owl-item.active\").length;
\t\t\t\t\t\t\t\t\t\t\t\t\tif (count == 1) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\".tab-container-656 .owl-item\").removeClass('first');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\".tab-container-656 .owl-item.active\").addClass('first');
\t\t\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\".tab-container-656 .owl-item\").removeClass('first');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\".tab-container-656 .owl-item.active:first\").addClass('first');
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t});


\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t</script>


\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"main-row fluid-width\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"main-col col-sm-12 col-md-12\">
\t\t\t\t\t\t\t<div class=\"row sub-row\">
\t\t\t\t\t\t\t\t<div class=\"sub-col col-sm-12 col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"testimonial-container\">
\t\t\t\t\t\t\t\t\t\t<div class=\"container\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"module-title\">

\t\t\t\t\t\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\t\t\t\t\t\tClient Testimonials
\t\t\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"module-description\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>What they say</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t<div class=\"block-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"owl-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"slides\" class=\"owl-carousel owl-theme\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-images\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/testimonial/testimor1-72x72.png') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Rebecka Filson\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"title\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/octestimonial\">A
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\treally great experience</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/octestimonial\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tThis is Photoshops version of Lorem Ipsum. Proin gravida nibh vel velit.Lorem
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tipsum dolor sit amet, consectetur adipiscing elit. In molestie augue magna.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPellentesque felis lorem, pulvinar sed eros non, sagittis consequat urna.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProin id dui tempor, imperdiet nisi et, hendrerit quam. Quisque tempus..</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"testimonial-author\">Rebecka Filson</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--testimonial-content-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-images\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/testimonial/testimor2-72x72.png') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Nathanael Jaworski\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"title\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/octestimonial\">A
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\treally great experience</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/octestimonial\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMauris blandit, metus a venenatis lacinia, felis enim tincidunt est,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcondimentum vulputate orci augue eu metus. Fusce dictum, nisi et semper
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tultricies, felis tortor blandit odio, egestas consequat purus nisi eu est.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMorbi porttitor porta nunc in elementum. Aliquam congue, nibh at dignissim
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsceleris..</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"testimonial-author\">Nathanael Jaworski</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--testimonial-content-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-images\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/testimonial/testimor3-72x72.png') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Magdalena Valencia\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"title\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/octestimonial\">A
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\treally great experience</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/octestimonial\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSed vel urna at dui iaculis gravida. Maecenas pretium, velit vitae placerat
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfaucibus, velit quam facilisis elit, sit amet lacinia est est id ligula. Duis
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfeugiat quam non justo faucibus, in gravida diam tempor. Nam viverra enim non
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tipsum ornare, condimentum blandit diam mattis. Maecenas gravida mol..</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"testimonial-author\">Magdalena Valencia</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--testimonial-content-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!--block-content-->


\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--testimonial-container-->
\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\$(document).ready(function () {
\t\t\t\t\t\t\t\t\t\t\t\$(\"#slides\").owlCarousel({
\t\t\t\t\t\t\t\t\t\t\t\tautoPlay: 1,

\t\t\t\t\t\t\t\t\t\t\t\tloop: false,
\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0,
\t\t\t\t\t\t\t\t\t\t\t\tnavSpeed: 1000,
\t\t\t\t\t\t\t\t\t\t\t\tdotsSpeed: 1000,
\t\t\t\t\t\t\t\t\t\t\t\tautoplaySpeed: 1000,
\t\t\t\t\t\t\t\t\t\t\t\tnav: true,
\t\t\t\t\t\t\t\t\t\t\t\tdots: false,
\t\t\t\t\t\t\t\t\t\t\t\tlazyLoad: true,
\t\t\t\t\t\t\t\t\t\t\t\tnavText: ['<i class=\"ion-ios-arrow-left\"></i>', '<i class=\"ion-ios-arrow-right\"></i>'],
\t\t\t\t\t\t\t\t\t\t\t\tresponsive: {
\t\t\t\t\t\t\t\t\t\t\t\t\t0: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\titems: 1
\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t480: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\titems: 1
\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t768: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\titems: 1
\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t992: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\titems: 1
\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t1200: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\titems: 1
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"main-row \">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"main-col col-sm-12 col-md-12\">
\t\t\t\t\t\t\t<div class=\"row sub-row\">
\t\t\t\t\t\t\t\t<div class=\"sub-col col-sm-12 col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"tt_product_module \" id=\"product_module336\">
\t\t\t\t\t\t\t\t\t\t<div class=\"module-title\">


\t\t\t\t\t\t\t\t\t\t\t<h2>Latest Arrivals</h2>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"module-description\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum
\t\t\t\t\t\t\t\t\t\t\t\t\tformas. </p>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t<div class=\"box-style\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-product\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"owl-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tt-product  owl-carousel owl-theme \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items  odd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=143\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"{{ asset('image/product//14_1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Nokia | Steel HR Hybrid Smartwatch - Activity\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/product//14-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Nokia | Steel HR Hybrid Smartwatch - Activity\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Nokia | Steel HR Hybrid Smartwatch - Activity\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('143');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\" title=\"Add to Wish List\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"wishlist.add('143');\"><span>Add to Wish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\" onclick=\"compare.add('143');\"><span>Compare
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tthis Product</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=143')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating5\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=143\">Nokia
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t| Steel HR Hybrid Smartwatch - Activity</a></h4>




\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$116.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$95.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"available\">Available:<span class=\"ex-text\">In Stock</span></p>



\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items  even\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=140\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"{{ asset('image/product//13_1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Marshall Kilburn Portable Bluetooth Speaker\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/product//13-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Marshall Kilburn Portable Bluetooth Speaker\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Marshall Kilburn Portable Bluetooth Speaker\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\"><span>-7% </span></div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('140');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\" title=\"Add to Wish List\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"wishlist.add('140');\"><span>Add to Wish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\" onclick=\"compare.add('140');\"><span>Compare
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tthis Product</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=140')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating4\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=140\">Marshall
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tKilburn Portable Bluetooth Speaker</a></h4>




\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">\$80.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">\$86.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$65.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"available\">Available:<span class=\"ex-text\">In Stock</span></p>



\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items  odd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=139\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"{{ asset('image/product//9_1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"JBL Flip 3 Splashproof  Portable Bluetooth\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/product//9-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"JBL Flip 3 Splashproof  Portable Bluetooth\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"JBL Flip 3 Splashproof  Portable Bluetooth\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('139');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\" title=\"Add to Wish List\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"wishlist.add('139');\"><span>Add to Wish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\" onclick=\"compare.add('139');\"><span>Compare
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tthis Product</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=139')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating3\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=139\">JBL
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFlip 3 Splashproof Portable Bluetooth</a></h4>




\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$602.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$500.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"available\">Available:<span class=\"ex-text\">In Stock</span></p>



\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items  even\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=138\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"{{ asset('image/product//3_1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats EP Wired On-Ear  Headphone-Black\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/product//3-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beats EP Wired On-Ear  Headphone-Black\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Beats EP Wired On-Ear  Headphone-Black\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\"><span>-20% </span></div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('138');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\" title=\"Add to Wish List\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"wishlist.add('138');\"><span>Add to Wish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\" onclick=\"compare.add('138');\"><span>Compare
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tthis Product</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=138')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=9\">Canon</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating4\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=138\">Beats
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEP Wired On-Ear Headphone-Black</a></h4>




\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">\$98.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">\$122.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$80.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"available\">Available:<span class=\"ex-text\">In Stock</span></p>



\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items  odd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=53\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"{{ asset('image/product//2_1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Sony XBR-55X900E 55-inch 4K HDR Ultra HD\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/product//2-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Sony XBR-55X900E 55-inch 4K HDR Ultra HD\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Sony XBR-55X900E 55-inch 4K HDR Ultra HD\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\"><span>-2% </span></div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('53');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\" title=\"Add to Wish List\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"wishlist.add('53');\"><span>Add to Wish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\" onclick=\"compare.add('53');\"><span>Compare
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tthis Product</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=53')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=5\">HTC</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating3\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=53\">Sony
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tXBR-55X900E 55-inch 4K HDR Ultra HD</a></h4>




\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">\$78.80</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">\$80.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$64.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"available\">Available:<span class=\"ex-text\">In Stock</span></p>



\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items  even\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=56\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"{{ asset('image/product//11_1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Roush Mustang 4-Piston Black Front Brake Kit\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/product//11-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Roush Mustang 4-Piston Black Front Brake Kit\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Roush Mustang 4-Piston Black Front Brake Kit\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('56');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\" title=\"Add to Wish List\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"wishlist.add('56');\"><span>Add to Wish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\" onclick=\"compare.add('56');\"><span>Compare
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tthis Product</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=56')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating2\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=56\">Roush
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMustang 4-Piston Black Front Brake Kit</a></h4>




\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$92.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$75.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"available\">Available:<span class=\"ex-text\">In Stock</span></p>



\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items  odd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=54\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"{{ asset('image/product//12_1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Koss Porta Pro On Ear Headphones with Case\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/product//12-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Koss Porta Pro On Ear Headphones with Case\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Koss Porta Pro On Ear Headphones with Case\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\"><span>-7% </span></div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('54');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\" title=\"Add to Wish List\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"wishlist.add('54');\"><span>Add to Wish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\" onclick=\"compare.add('54');\"><span>Compare
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tthis Product</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=54')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating5\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=54\">Koss
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPorta Pro On Ear Headphones with Case</a></h4>




\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">\$80.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">\$86.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$65.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"available\">Available:<span class=\"ex-text\">In Stock</span></p>



\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Grid -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items  even\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=60\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r\" src=\"{{ asset('image/product//10_1-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Kodak PIXPRO Astro Zoom AZ421 16 MP\" /> <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/product//10-600x800.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Kodak PIXPRO Astro Zoom AZ421 16 MP\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Kodak PIXPRO Astro Zoom AZ421 16 MP\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive has-rotator\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" title=\"Add to Cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"cart.add('60');\"><span>Add to Cart</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\" title=\"Add to Wish List\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"wishlist.add('60');\"><span>Add to Wish List</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Compare this Product\" onclick=\"compare.add('60');\"><span>Compare
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tthis Product</span></button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\" title=\"Quick View\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"ocquickview.ajaxView('http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=60')\"><span>Quick
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">Apple</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating4\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=product/product&amp;product_id=60\">Kodak
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPIXPRO Astro Zoom AZ421 16 MP</a></h4>




\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">\$116.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">Ex Tax: \$95.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"available\">Available:<span class=\"ex-text\">In Stock</span></p>



\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- product-layout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\tvar product_owlCarousel = \$(\"#product_module336 .tt-product\");
\t\t\t\t\t\t\t\t\t\tproduct_owlCarousel.owlCarousel({
\t\t\t\t\t\t\t\t\t\t\tloop: false,
\t\t\t\t\t\t\t\t\t\t\tmargin: 0,
\t\t\t\t\t\t\t\t\t\t\tnav: true,
\t\t\t\t\t\t\t\t\t\t\tdots: false,
\t\t\t\t\t\t\t\t\t\t\tautoplay: false,
\t\t\t\t\t\t\t\t\t\t\tautoplayTimeout: 1000,
\t\t\t\t\t\t\t\t\t\t\tautoplayHoverPause: true,
\t\t\t\t\t\t\t\t\t\t\tautoplaySpeed: 1000,
\t\t\t\t\t\t\t\t\t\t\tnavSpeed: 1000,
\t\t\t\t\t\t\t\t\t\t\tdotsSpeed: 1000,
\t\t\t\t\t\t\t\t\t\t\tlazyLoad: true,
\t\t\t\t\t\t\t\t\t\t\tresponsive: {
\t\t\t\t\t\t\t\t\t\t\t\t0: {
\t\t\t\t\t\t\t\t\t\t\t\t\titems: 1,
\t\t\t\t\t\t\t\t\t\t\t\t\tnav: false
\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t375: {
\t\t\t\t\t\t\t\t\t\t\t\t\titems: 2,
\t\t\t\t\t\t\t\t\t\t\t\t\tnav: false
\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t480: {
\t\t\t\t\t\t\t\t\t\t\t\t\titems: 2,
\t\t\t\t\t\t\t\t\t\t\t\t\tnav: false
\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t768: {
\t\t\t\t\t\t\t\t\t\t\t\t\titems: 2
\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t992: {
\t\t\t\t\t\t\t\t\t\t\t\t\titems: 3
\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t1200: {
\t\t\t\t\t\t\t\t\t\t\t\t\titems: 4
\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t1600: {
\t\t\t\t\t\t\t\t\t\t\t\t\titems: 4
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\tonInitialized: function () {
\t\t\t\t\t\t\t\t\t\t\t\towlAction();
\t\t\t\t\t\t\t\t\t\t\t\tvar i = 0;
\t\t\t\t\t\t\t\t\t\t\t\t\$('.owl-dots > .owl-dot').each(function () {
\t\t\t\t\t\t\t\t\t\t\t\t\t\$(this).addClass('clk-' + i);
\t\t\t\t\t\t\t\t\t\t\t\t\ti++;
\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\tonTranslated: function () {
\t\t\t\t\t\t\t\t\t\t\t\towlAction();

\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\tfunction owlAction() {
\t\t\t\t\t\t\t\t\t\t\t\$(\"#product_module336 .tt-product .owl-item\").removeClass('first');
\t\t\t\t\t\t\t\t\t\t\t\$(\"#product_module336 .tt-product .owl-item\").removeClass('last');
\t\t\t\t\t\t\t\t\t\t\t\$(\"#product_module336 .tt-product .owl-item\").removeClass('before-active');
\t\t\t\t\t\t\t\t\t\t\t\$(\"#product_module336 .tt-product .owl-item.active:first\").addClass('first');
\t\t\t\t\t\t\t\t\t\t\t\$(\"#product_module336 .tt-product .owl-item.active:last\").addClass('last');
\t\t\t\t\t\t\t\t\t\t\t\$('#product_module336 .tt-product .owl-item.active:first').prev().addClass('before-active');
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t</script>

\t\t\t\t\t\t\t\t\t<div class=\"banner-static static-middle-store1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=product/special\"><img src=\"{{ asset('image/img1-middle-eposi1.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"img1\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Black Friday</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Save Up To 50% Off</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=product/special\">shop now</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&amp;path=20_124\"><img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/img2-middle-eposi1.jpg') }}\" alt=\"img2\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Best Selling !</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Living Room Up To 70% Off</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&amp;path=20_124\">shop now</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"policy-block\">
\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col \">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Free Shipping Worldwide</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>We offer free shipping via Standard Shipping on orders over \$200.00</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col \">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Money Back Guarantee</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>If you're not satisfied with our product, we'll refund the purchase price*.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col \">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>online support 24/7 </h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Our friendly support team is available to help you 24 hours a day, seven days a week</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div id=\"blog_home\" class=\"menu-recent\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog-title module-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2>Latest Blog Posts</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"module-description\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit
\t\t\t\t\t\t\t\t\t\t\t\t\t\tlitterarum formas. </p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-style\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"owl-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"articles-container owl-carousel owl-theme\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"articles-inner \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"articles-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=blog/article&amp;article_id=10\"><img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/blog/4-370x235.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Buy Used Engines and Used Transmissions\" /><span
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-view\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"date-time-post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"year-post\">2018</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"month-post\">Sep</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date-post\">06</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"aritcles-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"articles-name\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=blog/article&amp;article_id=10\">Buy
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tUsed Engines and Used Transmissions</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"author-name\">by <span>Plaza Themes</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"articles-intro\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>It's no secret, engines and transmissions can be very expensive...</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> <a class=\"read-more\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=blog/article&amp;article_id=10\">Read
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmore</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"articles-inner \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"articles-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=blog/article&amp;article_id=8\"><img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/blog/1-370x235.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Get Your Car or Truck Ready for the Summer Heat!\" /><span
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-view\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"date-time-post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"year-post\">2017</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"month-post\">Oct</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date-post\">30</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"aritcles-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"articles-name\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=blog/article&amp;article_id=8\">Get
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tYour Car or Truck Ready for the Summer Heat!</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"author-name\">by <span>Plaza Themes</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"articles-intro\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Summer is beautiful in Colorado but we can get some very, very, hot daytime
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttemps...</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> <a class=\"read-more\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=blog/article&amp;article_id=8\">Read
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmore</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"articles-inner \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"articles-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=blog/article&amp;article_id=16\"><img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/blog/5-370x235.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Minor Wreck? We Got The Auto Parts!\" /><span class=\"icon-view\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"date-time-post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"year-post\">2018</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"month-post\">Nov</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date-post\">08</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"aritcles-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"articles-name\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=blog/article&amp;article_id=16\">Minor
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWreck? We Got The Auto Parts!</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"author-name\">by <span>Plaza Themes</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"articles-intro\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>It’s winter in Colorado and we’ve had a number of snowy days and hairy
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcommutes...</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> <a class=\"read-more\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=blog/article&amp;article_id=16\">Read
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmore</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"articles-inner \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"articles-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=blog/article&amp;article_id=5\"><img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/blog/2-370x235.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Purchasing New Auto Parts in our Online Store\" /><span
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-view\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"date-time-post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"year-post\">2017</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"month-post\">Oct</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date-post\">30</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"aritcles-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"articles-name\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=blog/article&amp;article_id=5\">Purchasing
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNew Auto Parts in our Online Store</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"author-name\">by <span>Plaza Themes</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"articles-intro\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Central Auto Parts has been a quality provider of used automotive parts in the
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDenver...</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> <a class=\"read-more\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=blog/article&amp;article_id=5\">Read
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmore</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row_items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"articles-inner \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"articles-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=blog/article&amp;article_id=6\"><img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ asset('image/blog/3-370x235.jpg') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"The Life Cycle of Used Auto Parts and Wrecked Vehicles\" /><span
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-view\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"date-time-post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"year-post\">2017</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"month-post\">Oct</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date-post\">30</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"aritcles-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"articles-name\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=blog/article&amp;article_id=6\">The
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLife Cycle of Used Auto Parts and Wrecked Vehicles</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"author-name\">by <span>Plaza Themes</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"articles-intro\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>I am often asked questions about my business when people find out what I do for
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ta living.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> <a class=\"read-more\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"http://demo.towerthemes.com/tt_eposi/index.php?route=blog/article&amp;article_id=6\">Read
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmore</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\$(document).ready(function () {
\t\t\t\t\t\t\t\t\t\t\t\$(\".articles-container\").owlCarousel({
\t\t\t\t\t\t\t\t\t\t\t\tautoPlay: false,
\t\t\t\t\t\t\t\t\t\t\t\titems: 3,
\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0,
\t\t\t\t\t\t\t\t\t\t\t\tloop: false,
\t\t\t\t\t\t\t\t\t\t\t\tnavSpeed: 1000,
\t\t\t\t\t\t\t\t\t\t\t\tdotsSpeed: 1000,
\t\t\t\t\t\t\t\t\t\t\t\tautoplaySpeed: 1000,
\t\t\t\t\t\t\t\t\t\t\t\tnav: false,
\t\t\t\t\t\t\t\t\t\t\t\tdots: false,
\t\t\t\t\t\t\t\t\t\t\t\tresponsive: {
\t\t\t\t\t\t\t\t\t\t\t\t\t0: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\titems: 1,
\t\t\t\t\t\t\t\t\t\t\t\t\t\tnav: false
\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t480: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\titems: 2,
\t\t\t\t\t\t\t\t\t\t\t\t\t\tnav: false
\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t768: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\titems: 2
\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t992: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\titems: 3
\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t1200: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\titems: 3
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>




\t\t</div>
\t\t<footer>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"newletter-subscribe-container\">
\t\t\t\t\t<div class=\"container-inner\">
\t\t\t\t\t\t<div class=\"newletter-subscribe\">
\t\t\t\t\t\t\t<div id=\"boxes-normal\" class=\"newletter-container\">
\t\t\t\t\t\t\t\t<div style=\"\" id=\"dialog-normal\">
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"newletter-title\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"sub-title\">Special Ofers For Subscribers</p>
\t\t\t\t\t\t\t\t\t\t\t<h5>Ten Percent Member Discount</h5>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"des\">Subscribe to our newsletters now and stay up to date with new collections, the
\t\t\t\t\t\t\t\t\t\t\t\tlatest lookbooks and exclusive offers.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-content newleter-content\">

\t\t\t\t\t\t\t\t\t\t\t<div id=\"frm_subscribe-normal\">
\t\t\t\t\t\t\t\t\t\t\t\t<form name=\"subscribe\" id=\"subscribe-normal\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"\" name=\"subscribe_email\" id=\"subscribe_email-normal\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tplaceholder=\"Enter you email address here...\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"\" name=\"subscribe_name\" id=\"subscribe_name\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn\" onclick=\"email_subscribe()\" title=\"Subscribe\"><span>Subscribe</span></a>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"notification-normal\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t\t\t\t\t</div><!-- /#frm_subscribe -->

\t\t\t\t\t\t\t\t\t\t</div><!-- /.box-content -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\tfunction email_subscribe() {
\t\t\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\t\t\t\t\t\turl: 'index.php?route=extension/module/newslettersubscribe/subscribe',
\t\t\t\t\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\t\t\t\t\tdata: \$(\"#subscribe-normal\").serialize(),
\t\t\t\t\t\t\t\t\t\t\tsuccess: function (html) {
\t\t\t\t\t\t\t\t\t\t\t\ttry {
\t\t\t\t\t\t\t\t\t\t\t\t\teval(html);
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\tcatch (e) {
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\tfunction email_unsubscribe() {
\t\t\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\t\t\t\t\t\turl: 'index.php?route=extension/module/newslettersubscribe/unsubscribe',
\t\t\t\t\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\t\t\t\t\tdata: \$(\"#subscribe\").serialize(),
\t\t\t\t\t\t\t\t\t\t\tsuccess: function (html) {
\t\t\t\t\t\t\t\t\t\t\t\ttry {
\t\t\t\t\t\t\t\t\t\t\t\t\teval(html);
\t\t\t\t\t\t\t\t\t\t\t\t} catch (e) {
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\$('html, body').delay(1500).animate({ scrollTop: 0 }, 'slow');
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\$(document).ready(function () {
\t\t\t\t\t\t\t\t\t\t\$('#subscribe_email').keypress(function (e) {
\t\t\t\t\t\t\t\t\t\t\tif (e.which == 13) {
\t\t\t\t\t\t\t\t\t\t\t\te.preventDefault();
\t\t\t\t\t\t\t\t\t\t\t\temail_subscribe();
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\tvar name = \$(this).val();
\t\t\t\t\t\t\t\t\t\t\t\$('#subscribe_name').val(name);
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\$('#subscribe_email').change(function () {
\t\t\t\t\t\t\t\t\t\t\tvar name = \$(this).val();
\t\t\t\t\t\t\t\t\t\t\t\$('#subscribe_name').val(name);
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<div class=\"footer-bottom \">
\t\t\t\t<div class=\"footer-bottom-inner \">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"container-inner\">
\t\t\t\t\t\t\t<div class=\"logo-footer\">
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"{{ asset('image/logo/logo.png') }}\"alt=\"logo-footer\"></a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"footer-copyright\">
\t\t\t\t\t\t\t\t<p>Copyright &copy; 2019 <a href=\"http://www.plazathemes.com\">PlazaThemes</a>.<span> All Right
\t\t\t\t\t\t\t\t\t\tReserved.</span></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"follow\">
\t\t\t\t\t\t\t\t<label>Follow Us On Social:</label>
\t\t\t\t\t\t\t\t<ul class=\"link-follow\">
\t\t\t\t\t\t\t\t\t<li><a class=\"facebook fa fa-facebook\" title=\"Facebook\" target=\"_blank\"
\t\t\t\t\t\t\t\t\t\t\thref=\"https://www.facebook.com/plazathemes1\"><span>facebook</span></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"twitter fa fa-twitter\" title=\"Twitter\" target=\"_blank\"
\t\t\t\t\t\t\t\t\t\t\thref=\"https://twitter.com/plazathemes\"><span>twitter</span></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"google fa fa-google-plus\" title=\"Google\" target=\"_blank\" href=\"#\"><span>google
\t\t\t\t\t\t\t\t\t\t\t</span></a></li>

\t\t\t\t\t\t\t\t\t<li><a class=\"youtube fa fa-youtube\" title=\"Youtube\" target=\"_blank\"
\t\t\t\t\t\t\t\t\t\t\thref=\"https://www.youtube.com/user/plazathemes\"><span>youtube </span></a></li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"back-top\"><span>Back to top</span><i class=\"ion-chevron-right\"></i><i class=\"ion-chevron-right\"></i>
\t\t\t</div>
\t\t</footer>
\t\t<script>
\t\t\t\$(document).ready(function () {
\t\t\t\t// hide #back-top first
\t\t\t\t\$(\"#back-top\").hide();
\t\t\t\t// fade in #back-top
\t\t\t\t\$(function () {
\t\t\t\t\t\$(window).scroll(function () {
\t\t\t\t\t\tif (\$(this).scrollTop() > \$('body').height() / 3) {
\t\t\t\t\t\t\t\$('#back-top').fadeIn();
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$('#back-top').fadeOut();
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t// scroll body to 0px on click
\t\t\t\t\t\$('#back-top').click(function () {
\t\t\t\t\t\t\$('body,html').animate({ scrollTop: 0 }, 800);
\t\t\t\t\t\treturn false;
\t\t\t\t\t});
\t\t\t\t});
\t\t\t});
\t\t</script>
\t</div><!-- wrapper -->
</body>

</html>", "shit.html.twig", "C:\\Users\\onepi\\Documents\\Estiam\\Bonne pratique et méthodologie de développement\\Examen\\ESTIAM-Car-Rental\\app\\templates\\shit.html.twig");
    }
}
