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

/* themes/custom/frost_theme/templates/misc/address.html.twig */
class __TwigTemplate_f6a9dbcb36ebcd0e83b69286e570765a extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<address class=\"contact-info-address font-family--primary\" itemprop=\"address\" itemscope=\"\" itemtype=\"http://schema.org/PostalAddress\">
  ";
        // line 2
        if ((($context["street_address"] ?? null) || ($context["street_address_2"] ?? null))) {
            // line 3
            echo "    <div itemprop=\"streetAddress\">";
            if (($context["street_address"] ?? null)) {
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["street_address"] ?? null), 3, $this->source), "html", null, true);
            }
            if (($context["street_address_2"] ?? null)) {
                echo ", ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["street_address_2"] ?? null), 3, $this->source), "html", null, true);
            }
            echo "</div>
  ";
        }
        // line 5
        echo "  ";
        if (($context["locality"] ?? null)) {
            // line 6
            echo "    <span itemprop=\"addressLocality\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["locality"] ?? null), 6, $this->source), "html", null, true);
            echo "</span>,
  ";
        }
        // line 8
        echo "  ";
        if (($context["region"] ?? null)) {
            // line 9
            echo "    <span itemprop=\"addressRegion\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["region"] ?? null), 9, $this->source), "html", null, true);
            echo "</span>
  ";
        }
        // line 11
        echo "  ";
        if (($context["postal_code"] ?? null)) {
            // line 12
            echo "    <span itemprop=\"postalCode\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["postal_code"] ?? null), 12, $this->source), "html", null, true);
            echo "</span>
  ";
        }
        // line 14
        echo "</address>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/frost_theme/templates/misc/address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 14,  77 => 12,  74 => 11,  68 => 9,  65 => 8,  59 => 6,  56 => 5,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/frost_theme/templates/misc/address.html.twig", "/var/www/html/docroot/themes/custom/frost_theme/templates/misc/address.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2);
        static $filters = array("escape" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
