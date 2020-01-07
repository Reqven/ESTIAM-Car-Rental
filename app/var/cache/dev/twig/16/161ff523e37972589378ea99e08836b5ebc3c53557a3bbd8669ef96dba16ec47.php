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

/* template.html.twig */
class __TwigTemplate_61de1fa69d169880689266192830bc8f09135b7f2878a403d358e05e9516ad02 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'content' => [$this, 'block_content'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template.html.twig"));

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

  ";
        // line 50
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 52
        echo "
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
        // line 585
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
        // line 805
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
        // line 1106
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
        // line 1317
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/language/en-gb.png"), "html", null, true);
        echo "\"alt=\"English\" title=\"English\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEnglish</button></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"de-de\"><img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 1320
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
      ";
        // line 1344
        $this->displayBlock('content', $context, $blocks);
        // line 1346
        echo "\t\t</div>
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
\t\t\t\t\t\t\t\t<!--script>
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
\t\t\t\t\t\t\t\t</!--script>
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
\t\t\t\t\t\t\t\t</script-->
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
        // line 1438
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
  </div><!-- wrapper -->
  
  ";
        // line 1491
        $this->displayBlock('javascript', $context, $blocks);
        // line 1493
        echo "
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 50
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 51
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1344
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 1345
        echo "      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1491
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 1492
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1717 => 1492,  1707 => 1491,  1697 => 1345,  1687 => 1344,  1677 => 51,  1667 => 50,  1655 => 1493,  1653 => 1491,  1597 => 1438,  1503 => 1346,  1501 => 1344,  1474 => 1320,  1468 => 1317,  1254 => 1106,  950 => 805,  727 => 585,  192 => 52,  190 => 50,  185 => 48,  181 => 47,  177 => 46,  173 => 45,  169 => 44,  165 => 43,  161 => 42,  157 => 41,  153 => 40,  149 => 39,  145 => 38,  141 => 37,  137 => 36,  133 => 35,  129 => 34,  125 => 33,  121 => 32,  117 => 31,  113 => 30,  109 => 29,  105 => 28,  101 => 27,  97 => 26,  91 => 23,  87 => 22,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  46 => 1,);
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

  {% block stylesheet %}
  {% endblock %}

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
      {% block content %}
      {% endblock %}
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
\t\t\t\t\t\t\t\t<!--script>
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
\t\t\t\t\t\t\t\t</!--script>
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
\t\t\t\t\t\t\t\t</script-->
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
  </div><!-- wrapper -->
  
  {% block javascript %}
  {% endblock %}

</body>
</html>", "template.html.twig", "C:\\Users\\onepi\\Documents\\Estiam\\Bonne pratique et méthodologie de développement\\Examen\\ESTIAM-Car-Rental\\app\\templates\\template.html.twig");
    }
}
