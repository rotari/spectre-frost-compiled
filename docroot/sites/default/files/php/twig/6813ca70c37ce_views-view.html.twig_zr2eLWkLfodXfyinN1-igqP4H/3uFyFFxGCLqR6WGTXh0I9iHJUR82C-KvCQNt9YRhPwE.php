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

/* themes/custom/frost_theme/templates/views/views-view.html.twig */
class __TwigTemplate_1fd7074840847b71a1a40a233dcef4e8 extends Template
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
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 1), 1, $this->source), "html", null, true);
        echo ">
  ";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 2, $this->source), "html", null, true);
        echo "
  ";
        // line 3
        if (($context["title"] ?? null)) {
            // line 4
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 4, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 6
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 6, $this->source), "html", null, true);
        echo "
  ";
        // line 7
        if (($context["exposed"] ?? null)) {
            // line 8
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["filters_attributes"] ?? null), 8, $this->source), "html", null, true);
            echo ">
      ";
            // line 9
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 9, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 12
        echo "  ";
        if (($context["header"] ?? null)) {
            // line 13
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_attributes"] ?? null), 13, $this->source), "html", null, true);
            echo ">
      ";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 14, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 17
        echo "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 18
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before_attributes"] ?? null), 18, $this->source), "html", null, true);
            echo ">
      ";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 19, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 22
        echo "
  ";
        // line 23
        if (($context["rows"] ?? null)) {
            // line 24
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 24, $this->source), "html", null, true);
            echo ">
      ";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 25, $this->source), "html", null, true);
            echo "
    </div>
  ";
        } elseif (        // line 27
($context["empty"] ?? null)) {
            // line 28
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty_attributes"] ?? null), 28, $this->source), "html", null, true);
            echo ">
      ";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 29, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 32
        echo "
  ";
        // line 33
        if (($context["pager"] ?? null)) {
            // line 34
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 34, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 36
        echo "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 37
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after_attributes"] ?? null), 37, $this->source), "html", null, true);
            echo ">
      ";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 38, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 41
        echo "  ";
        if (($context["more"] ?? null)) {
            // line 42
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 42, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 44
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 45
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_attributes"] ?? null), 45, $this->source), "html", null, true);
            echo ">
      ";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 46, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 49
        echo "  ";
        if (($context["feed_icons"] ?? null)) {
            // line 50
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons_attributes"] ?? null), 50, $this->source), "html", null, true);
            echo ">
      ";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 51, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 54
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/frost_theme/templates/views/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 54,  186 => 51,  181 => 50,  178 => 49,  172 => 46,  167 => 45,  164 => 44,  158 => 42,  155 => 41,  149 => 38,  144 => 37,  141 => 36,  135 => 34,  133 => 33,  130 => 32,  124 => 29,  119 => 28,  117 => 27,  112 => 25,  107 => 24,  105 => 23,  102 => 22,  96 => 19,  91 => 18,  88 => 17,  82 => 14,  77 => 13,  74 => 12,  68 => 9,  63 => 8,  61 => 7,  56 => 6,  50 => 4,  48 => 3,  44 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/frost_theme/templates/views/views-view.html.twig", "/var/www/html/docroot/themes/custom/frost_theme/templates/views/views-view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3);
        static $filters = array("escape" => 1);
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
