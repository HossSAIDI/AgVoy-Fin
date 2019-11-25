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

/* @BootstrapMenu/link.html.twig */
class __TwigTemplate_f20e32574515559807963f728d1ab5db3bd2452900ca5e03bbe87862de3b28e3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BootstrapMenu/link.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BootstrapMenu/link.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "  ";
        if (((isset($context["label"]) || array_key_exists("label", $context)) && ((isset($context["route"]) || array_key_exists("route", $context)) || (isset($context["url"]) || array_key_exists("url", $context))))) {
            // line 3
            echo "  <li class=\"nav-item\">
    <a class=\"nav-link\" ";
            // line 4
            $this->loadTemplate("@BootstrapMenu/href.html.twig", "@BootstrapMenu/link.html.twig", 4)->display($context);
            echo ">";
            // line 5
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            // line 6
            echo "</a>
  </li>
  ";
        }
        $___internal_01a8925922e7251be817c9e7f0fa3687377bd341b63f1716fa09e3f6ddeb9a6d_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_01a8925922e7251be817c9e7f0fa3687377bd341b63f1716fa09e3f6ddeb9a6d_);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@BootstrapMenu/link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,  56 => 6,  54 => 5,  51 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply spaceless %}
  {% if label is defined and (route is defined or url is defined) %}
  <li class=\"nav-item\">
    <a class=\"nav-link\" {% include '@BootstrapMenu/href.html.twig' %}>
      {{- label -}}
    </a>
  </li>
  {% endif %}
{% endapply %}
", "@BootstrapMenu/link.html.twig", "/home/serandour/AgVoyFin/AgVoy-Fin/vendor/camurphy/bootstrap-menu-bundle/Resources/views/link.html.twig");
    }
}
