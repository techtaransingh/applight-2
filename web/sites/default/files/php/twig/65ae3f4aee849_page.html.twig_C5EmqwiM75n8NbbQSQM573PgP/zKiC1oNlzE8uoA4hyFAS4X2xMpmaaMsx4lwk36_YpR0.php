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

/* themes/applight/templates/page/page.html.twig */
class __TwigTemplate_a0ce67141164875a5e1629389f18309f extends \Twig\Template
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
        echo "<!-- Navbar Region Start Here  -->

";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_region", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "

<!-- Navbar Region End Here -->
";
        // line 6
        if (($context["is_front"] ?? null)) {
            // line 7
            echo "<!-------Banner Start------->
<section class=\"banner\" data-scroll-index='0'>

    ";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "

</section>
";
        }
        // line 14
        echo "<!-------Banner End------->

<!-- Dynamic Content Start -->
<div class=\"wcp-dynamic-content\">
    ";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "
</div>

<!-- Dynamic Content End Here -->

<!-------Footer Start Here -------> 
    ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_region", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "
<!-------Footer End Here -------> 





";
    }

    public function getTemplateName()
    {
        return "themes/applight/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 24,  69 => 18,  63 => 14,  56 => 10,  51 => 7,  49 => 6,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Navbar Region Start Here  -->

{{page.navbar_region}}

<!-- Navbar Region End Here -->
{% if is_front %}
<!-------Banner Start------->
<section class=\"banner\" data-scroll-index='0'>

    {{page.banner}}

</section>
{% endif %}
<!-------Banner End------->

<!-- Dynamic Content Start -->
<div class=\"wcp-dynamic-content\">
    {{page.content}}
</div>

<!-- Dynamic Content End Here -->

<!-------Footer Start Here -------> 
    {{page.footer_region}}
<!-------Footer End Here -------> 





", "themes/applight/templates/page/page.html.twig", "C:\\laragon\\www\\applight\\web\\themes\\applight\\templates\\page\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 6);
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
