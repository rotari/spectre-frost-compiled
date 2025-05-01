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

/* themes/custom/frost_theme/templates/page.html.twig */
class __TwigTemplate_c7e0470f3c0a1d14c719417c4d77d645 extends Template
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
        echo "<div class=\"page layout-container\">
  <header class=\"top-bar sticky--top\">
    ";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "alerts", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "
    ";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "utility", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "
    <div class=\"main-bar background-color--white padding-vertical--2\">
      <div class=\"inner display--flex position--relative appear-as-stripe\">
        ";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "
        ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_toggle"] ?? null), 8, $this->source), "html", null, true);
        // line 9
        echo "        <div id=\"main-navigation\" class=\"utility-and-nav mobile--tray flex--auto display--flex align-items--center\">
          ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  </header>
  ";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "splash", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "
  <main role=\"main\">
    <a href=\"";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 17, $this->source), "html", null, true);
        echo "#main-content\" id=\"main-content\" class=\"a11y--visually-hidden\" tabindex=\"-1\">
      ";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("You are at the start of the main content"));
        echo "
    </a>
    ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_content", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "
    <div class=\"content-and-sidebar display--flex layout--flex-row\">
      <div class=\"middle-column flex--auto\">
        ";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "
        ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "
        ";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        echo "
      </div>
      ";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo "
      ";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "
    </div>
    ";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "post_content", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        echo "
  </main>
  <footer class=\"footer-wrapper background-color--grey-dark color--white\">
    <div class=\"appear-as-stripe layout--flex-row display--flex padding-vertical--2\">
      <div class=\"flex--1 margin-vertical--4 padding-horizontal--4\">
        ";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
        echo "
      </div>
      <div class=\"flex--1 margin-vertical--4 padding-horizontal--4\">
        ";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
        echo "
      </div>
      <div class=\"flex--1 margin-vertical--4 padding-horizontal--4\">
        ";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_cta", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        echo "
      </div>
    </div>
    <div class=\"footer--utility-wrapper background-color--black padding-vertical--2\">
      ";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_utility", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo "
    </div>
  </footer>
</div>
";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "post_footer", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/frost_theme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 49,  139 => 45,  132 => 41,  126 => 38,  120 => 35,  112 => 30,  107 => 28,  103 => 27,  98 => 25,  94 => 24,  90 => 23,  84 => 20,  79 => 18,  75 => 17,  70 => 15,  62 => 10,  59 => 9,  57 => 8,  53 => 7,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/frost_theme/templates/page.html.twig", "/var/www/html/docroot/themes/custom/frost_theme/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 3, "t" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 't'],
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
