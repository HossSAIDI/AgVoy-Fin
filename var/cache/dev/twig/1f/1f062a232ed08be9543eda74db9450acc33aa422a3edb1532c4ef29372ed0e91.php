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

/* @BootstrapMenu/dropDownItem.html.twig */
class __TwigTemplate_7cf3c8b82f9b30b80c689e35aa3f0269ccd114e88c2163aa8f809686b8fb187c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BootstrapMenu/dropDownItem.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BootstrapMenu/dropDownItem.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "  ";
        if (($context["is_divider"] ?? null)) {
            // line 3
            echo "    ";
            if ((($context["index"] ?? null) > 0)) {
                // line 4
                echo "      <div class=\"dropdown-divider\"></div>
    ";
            }
            // line 6
            echo "
    ";
            // line 7
            if ((isset($context["label"]) || array_key_exists("label", $context))) {
                // line 8
                echo "      <h6 class=\"dropdown-header\">";
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "</h6>
    ";
            }
            // line 10
            echo "  ";
        } else {
            // line 11
            echo "    <a class=\"dropdown-item\" ";
            $this->loadTemplate("@BootstrapMenu/href.html.twig", "@BootstrapMenu/dropDownItem.html.twig", 11)->display($context);
            echo ">";
            // line 12
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            // line 13
            echo "</a>
  ";
        }
        $___internal_a2d647609fa294d3af49256839b7724814eaa5cb20483ecf3fa7ab2e30890d19_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_a2d647609fa294d3af49256839b7724814eaa5cb20483ecf3fa7ab2e30890d19_);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@BootstrapMenu/dropDownItem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 1,  75 => 13,  73 => 12,  69 => 11,  66 => 10,  60 => 8,  58 => 7,  55 => 6,  51 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply spaceless %}
  {% if is_divider %}
    {% if index > 0 %}
      <div class=\"dropdown-divider\"></div>
    {% endif %}

    {% if label is defined %}
      <h6 class=\"dropdown-header\">{{ label }}</h6>
    {% endif %}
  {% else %}
    <a class=\"dropdown-item\" {% include '@BootstrapMenu/href.html.twig' %}>
      {{- label -}}
    </a>
  {% endif %}
{% endapply %}
", "@BootstrapMenu/dropDownItem.html.twig", "/home/serandour/AgVoyFin/AgVoy-Fin/vendor/camurphy/bootstrap-menu-bundle/Resources/views/dropDownItem.html.twig");
    }
}
