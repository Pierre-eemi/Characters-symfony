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

/* personnage/perso.html.twig */
class __TwigTemplate_2479c12ec3eb12c16da0ef0a68a4f3be8fa80aa76e0d8a329a900e79b35b91d3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'monTitre' => [$this, 'block_monTitre'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "personnage/perso.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "personnage/perso.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "personnage/perso.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Personnages";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_monTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "monTitre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "monTitre"));

        // line 5
        echo "Personnage ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["perso"]) || array_key_exists("perso", $context) ? $context["perso"] : (function () { throw new RuntimeError('Variable "perso" does not exist.', 5, $this->source); })()), "nom", [], "any", false, false, false, 5), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"row\">
    <div class=\"col-2\">
        <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("images/personnages/" . twig_get_attribute($this->env, $this->source, (isset($context["perso"]) || array_key_exists("perso", $context) ? $context["perso"] : (function () { throw new RuntimeError('Variable "perso" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12)) . ".png")), "html", null, true);
        echo "\" >
    </div>
    <div class=\"col\">
        <h2>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["perso"]) || array_key_exists("perso", $context) ? $context["perso"] : (function () { throw new RuntimeError('Variable "perso" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), "html", null, true);
        echo "</h2>
        <div>
            ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, (isset($context["perso"]) || array_key_exists("perso", $context) ? $context["perso"] : (function () { throw new RuntimeError('Variable "perso" does not exist.', 17, $this->source); })()), "sexe", [], "any", false, false, false, 17)) {
            // line 18
            echo "                        Homme
                    ";
        } else {
            // line 20
            echo "                        Femme
                    ";
        }
        // line 22
        echo "        </div>
        <h3>Les caractéristiques</h3>
        <ul>
            <li>Force : ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["perso"]) || array_key_exists("perso", $context) ? $context["perso"] : (function () { throw new RuntimeError('Variable "perso" does not exist.', 25, $this->source); })()), "carac", [], "any", false, false, false, 25), "force", [], "any", false, false, false, 25), "html", null, true);
        echo "</li>
            <li>Agilité : ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["perso"]) || array_key_exists("perso", $context) ? $context["perso"] : (function () { throw new RuntimeError('Variable "perso" does not exist.', 26, $this->source); })()), "carac", [], "any", false, false, false, 26), "agi", [], "any", false, false, false, 26), "html", null, true);
        echo "</li>
            <li>Intelligence : ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["perso"]) || array_key_exists("perso", $context) ? $context["perso"] : (function () { throw new RuntimeError('Variable "perso" does not exist.', 27, $this->source); })()), "carac", [], "any", false, false, false, 27), "intel", [], "any", false, false, false, 27), "html", null, true);
        echo "</li>
        </ul>

    </div>
</div>

    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "personnage/perso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 27,  146 => 26,  142 => 25,  137 => 22,  133 => 20,  129 => 18,  127 => 17,  122 => 15,  116 => 12,  112 => 10,  102 => 9,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Personnages{% endblock %}
{% block monTitre %}
Personnage {{ perso.nom }}
{% endblock %}


{% block body %}
<div class=\"row\">
    <div class=\"col-2\">
        <img src=\"{{ asset('images/personnages/' ~ perso.nom ~ '.png') }}\" >
    </div>
    <div class=\"col\">
        <h2>{{ perso.nom }}</h2>
        <div>
            {% if perso.sexe %}
                        Homme
                    {% else %}
                        Femme
                    {% endif %}
        </div>
        <h3>Les caractéristiques</h3>
        <ul>
            <li>Force : {{ perso.carac.force }}</li>
            <li>Agilité : {{ perso.carac.agi }}</li>
            <li>Intelligence : {{ perso.carac.intel }}</li>
        </ul>

    </div>
</div>

    
{% endblock %}
", "personnage/perso.html.twig", "/Users/macbook/Desktop/Realisations/1-persos/templates/personnage/perso.html.twig");
    }
}
