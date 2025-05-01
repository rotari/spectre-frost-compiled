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

/* themes/custom/frost_theme/templates/field/field.html.twig */
class __TwigTemplate_0205af8b54cf87bf91729734f57b81e8 extends Template
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
        if (($context["wrapped"] ?? null)) {
            // line 2
            echo "<";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_tag"] ?? null), 2, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 2), 2, $this->source), "html", null, true);
            echo ">
";
        }
        // line 4
        if ((($context["label"] ?? null) &&  !($context["label_hidden"] ?? null))) {
            echo "<strong";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 4), 4, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 4, $this->source), "html", null, true);
            echo "</strong>";
        }
        // line 5
        if (((($context["label_display"] ?? null) && (($context["label_display"] ?? null) == "inline")) && ($context["layout_carousel"] ?? null))) {
            // line 6
            echo "  <div class=\"field-contents layout--horizontal\">
";
        } elseif ((        // line 7
($context["label_display"] ?? null) && (($context["label_display"] ?? null) == "inline"))) {
            // line 8
            echo "  <div class=\"field-contents\">
";
        } elseif (        // line 9
($context["layout_carousel"] ?? null)) {
            // line 10
            echo "  <div class=\"layout--carousel\">
";
        }
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        if (((($context["label_display"] ?? null) && (($context["label_display"] ?? null) == "inline")) && ($context["layout_carousel"] ?? null))) {
            // line 14
            echo "  </div>
";
        } elseif ((        // line 15
($context["label_display"] ?? null) && (($context["label_display"] ?? null) == "inline"))) {
            // line 16
            echo "  </div>
";
        } elseif (        // line 17
($context["layout_carousel"] ?? null)) {
            // line 18
            echo "  </div>
";
        }
        // line 20
        if (($context["wrapped"] ?? null)) {
            // line 21
            echo "</";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_tag"] ?? null), 21, $this->source), "html", null, true);
            echo ">
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/frost_theme/templates/field/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 21,  97 => 20,  93 => 18,  91 => 17,  88 => 16,  86 => 15,  83 => 14,  81 => 13,  72 => 12,  68 => 10,  66 => 9,  63 => 8,  61 => 7,  58 => 6,  56 => 5,  48 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/frost_theme/templates/field/field.html.twig", "/var/www/html/docroot/themes/custom/frost_theme/templates/field/field.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "for" => 12);
        static $filters = array("escape" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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
