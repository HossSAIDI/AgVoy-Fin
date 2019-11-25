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

/* room/show.html.twig */
class __TwigTemplate_365e05f7f954b3df66301363514f0c0236cae8eb9a9c4e2985b03f3b25bff831 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "room/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "room/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "room/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t

\t

    <h1>Room</h1>

 <table class=\"table\">
  <thead>
    <tr>
      <th scope=\"col\">critaire</th>
      <th scope=\"col\">value</th>
  
    </tr>
  </thead>
    <tbody>
        <tr>
      \t    <th scope=\"row\">Summary</th>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["room"] ?? null), "summary", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th scope=\"row\">Description</th>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["room"] ?? null), "description", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th scope=\"row\">Capacity</th>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["room"] ?? null), "capacity", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th scope=\"row\">Superficy</th>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["room"] ?? null), "superficy", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th scope=\"row\">Price</th>
            <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["room"] ?? null), "price", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th scope=\"row\">Address</th>
            <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["room"] ?? null), "address", [], "any", false, false, false, 43), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th scope=\"row\">Region</th>
            <td>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["room"] ?? null), "region", [], "any", false, false, false, 47), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
    </table>

    <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["room"] ?? null), "id", [], "any", false, false, false, 54)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 56
        echo twig_include($this->env, $context, "room/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "room/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 56,  142 => 54,  137 => 52,  129 => 47,  122 => 43,  115 => 39,  108 => 35,  101 => 31,  94 => 27,  87 => 23,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig'%}



{% block body %}
\t

\t

    <h1>Room</h1>

 <table class=\"table\">
  <thead>
    <tr>
      <th scope=\"col\">critaire</th>
      <th scope=\"col\">value</th>
  
    </tr>
  </thead>
    <tbody>
        <tr>
      \t    <th scope=\"row\">Summary</th>
            <td>{{ room.summary }}</td>
        </tr>
        <tr>
            <th scope=\"row\">Description</th>
            <td>{{ room.description }}</td>
        </tr>
        <tr>
            <th scope=\"row\">Capacity</th>
            <td>{{ room.capacity }}</td>
        </tr>
        <tr>
            <th scope=\"row\">Superficy</th>
            <td>{{ room.superficy }}</td>
        </tr>
        <tr>
            <th scope=\"row\">Price</th>
            <td>{{ room.price }}</td>
        </tr>
        <tr>
            <th scope=\"row\">Address</th>
            <td>{{ room.address }}</td>
        </tr>
        <tr>
            <th scope=\"row\">Region</th>
            <td>{{ room.region }}</td>
        </tr>
    </tbody>
    </table>

    <a href=\"{{ path('room_index') }}\">back to list</a>

    <a href=\"{{ path('room_edit', {'id': room.id}) }}\">edit</a>

    {{ include('room/_delete_form.html.twig') }}
{% endblock %}
    
", "room/show.html.twig", "/home/houssem_saidi/CSC4101/AgVoy/templates/room/show.html.twig");
    }
}
