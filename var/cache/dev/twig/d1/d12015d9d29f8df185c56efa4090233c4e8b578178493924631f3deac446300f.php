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
class __TwigTemplate_48b065d7224598d3c17ee6eea218f226575ac30a508f86c487ee2041207d93dc extends \Twig\Template
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

    <h1>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["room"] ?? null), "summary", [], "any", false, false, false, 10), "html", null, true);
        echo "</h1>

 <table class=\"table\">
    <tbody>
        <tr>
            <th scope=\"row\">Description</th>
            <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["room"] ?? null), "description", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th scope=\"row\">Capacité</th>
            <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["room"] ?? null), "capacity", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th scope=\"row\">Superficie</th>
            <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["room"] ?? null), "superficy", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th scope=\"row\">Prix</th>
            <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["room"] ?? null), "price", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th scope=\"row\">Adresse</th>
            <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["room"] ?? null), "address", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th scope=\"row\">Région</th>
            <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["room"] ?? null), "region", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th scope=\"row\">Date Indisponible</th>
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["room"] ?? null), "reservations", [], "any", false, false, false, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 41
            echo "            <td>";
            echo twig_escape_filter($this->env, $context["reservation"], "html", null, true);
            echo "</td>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tr>
        <tr>
            <th>Image</th>
            <td><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(($context["room"] ?? null), "imageFile"), "html", null, true);
        echo "\"/></td>
        </tr>
    </tbody>
    </table>

    ";
        // line 51
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OWNER")) {
            // line 52
            echo "    ";
            echo twig_include($this->env, $context, "room/_delete_form.html.twig");
            echo "
    ";
        }
        // line 54
        echo "

    ";
        // line 56
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CLIENT")) {
            // line 57
            echo "        <td> <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_new", ["id" => twig_get_attribute($this->env, $this->source, ($context["room"] ?? null), "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\">Faire une réservation</a></td>
    ";
        }
        // line 59
        echo "    <br>

    <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_index");
        echo "\">Retour</a>

    <br>
    ";
        // line 64
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OWNER")) {
            // line 65
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["room"] ?? null), "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\">Editer la chambre</a>
    ";
        }
        // line 67
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
        return array (  189 => 67,  183 => 65,  181 => 64,  175 => 61,  171 => 59,  165 => 57,  163 => 56,  159 => 54,  153 => 52,  151 => 51,  143 => 46,  138 => 43,  129 => 41,  125 => 40,  118 => 36,  111 => 32,  104 => 28,  97 => 24,  90 => 20,  83 => 16,  74 => 10,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig'%}



{% block body %}
\t

\t

    <h1>{{ room.summary }}</h1>

 <table class=\"table\">
    <tbody>
        <tr>
            <th scope=\"row\">Description</th>
            <td>{{ room.description }}</td>
        </tr>
        <tr>
            <th scope=\"row\">Capacité</th>
            <td>{{ room.capacity }}</td>
        </tr>
        <tr>
            <th scope=\"row\">Superficie</th>
            <td>{{ room.superficy }}</td>
        </tr>
        <tr>
            <th scope=\"row\">Prix</th>
            <td>{{ room.price }}</td>
        </tr>
        <tr>
            <th scope=\"row\">Adresse</th>
            <td>{{ room.address }}</td>
        </tr>
        <tr>
            <th scope=\"row\">Région</th>
            <td>{{ room.region }}</td>
        </tr>
        <tr>
            <th scope=\"row\">Date Indisponible</th>
            {% for reservation in room.reservations %}
            <td>{{ reservation }}</td>
            {% endfor %}
        </tr>
        <tr>
            <th>Image</th>
            <td><img src=\"{{ vich_uploader_asset(room, 'imageFile') }}\"/></td>
        </tr>
    </tbody>
    </table>

    {% if is_granted('ROLE_OWNER')  %}
    {{ include('room/_delete_form.html.twig') }}
    {% endif %}


    {% if is_granted('ROLE_CLIENT') %}
        <td> <a href=\"{{ path('reservation_new' , {'id' : room.id })  }}\">Faire une réservation</a></td>
    {% endif %}
    <br>

    <a href=\"{{ path('room_index') }}\">Retour</a>

    <br>
    {% if is_granted('ROLE_OWNER')  %}
        <a href=\"{{ path('room_edit', {'id': room.id}) }}\">Editer la chambre</a>
    {% endif %}





{% endblock %}
    
", "room/show.html.twig", "/home/serandour/AgVoyFin/AgVoy-Fin/templates/room/show.html.twig");
    }
}
