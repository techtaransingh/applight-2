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

/* themes/applight/templates/paragraph--video.html.twig */
class __TwigTemplate_f65eb36fb4224de3cd35a1de7e75c99f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 44
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 44), 44, $this->source))), 2 => ((        // line 45
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 45, $this->source)))) : ("")), 3 => (( !twig_get_attribute($this->env, $this->source,         // line 46
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 46)) ? ("paragraph--unpublished") : (""))];
        // line 49
        echo "<section class=\"video-section prelative text-center white\">
<div class=\"section-padding video-overlay\">
";
        // line 51
        $this->displayBlock('paragraph', $context, $blocks);
        // line 76
        echo "  </div>
</section>

";
    }

    // line 51
    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "   <div class=\"container\">
      <h3>Watch Now</h3>
      <i class=\"fa fa-play\" id=\"video-icon\" aria-hidden=\"true\"></i>
    <div class=\"video-popup\">
      ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 73
        echo "    </div>
  </div>
";
    }

    // line 56
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "        <div class=\"video-src\">

            
            ";
        // line 60
        if ((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_iframe_source", [], "any", false, false, true, 60)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#items"] ?? null) : null)) {
            // line 61
            echo "              ";
            $context["link_item"] = twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_iframe_source", [], "any", false, false, true, 61)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#items"] ?? null) : null), 0, [], "any", false, false, true, 61);
            // line 62
            echo "                ";
            $context["link_url"] = twig_get_attribute($this->env, $this->source, ($context["link_item"] ?? null), "url", [], "any", false, false, true, 62);
            // line 63
            echo "                ";
            $context["link_title"] = twig_get_attribute($this->env, $this->source, ($context["link_item"] ?? null), "title", [], "any", false, false, true, 63);
            // line 64
            echo "              <div class=\"iframe-src\">
                <iframe src=\"";
            // line 65
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_url"] ?? null), 65, $this->source), "html", null, true);
            echo "\" allowfullscreen></iframe>
                </div>
            ";
        }
        // line 68
        echo "            
        </div>

        
       ";
    }

    public function getTemplateName()
    {
        return "themes/applight/templates/paragraph--video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 68,  100 => 65,  97 => 64,  94 => 63,  91 => 62,  88 => 61,  86 => 60,  81 => 57,  77 => 56,  71 => 73,  69 => 56,  63 => 52,  59 => 51,  52 => 76,  50 => 51,  46 => 49,  44 => 46,  43 => 45,  42 => 44,  41 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a paragraph.
 *
 * Available variables:
 * - paragraph: Full paragraph entity.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - paragraph.getCreatedTime() will return the paragraph creation timestamp.
 *   - paragraph.id(): The paragraph ID.
 *   - paragraph.bundle(): The type of the paragraph, for example, \"image\" or \"text\".
 *   - paragraph.getOwnerId(): The user ID of the paragraph author.
 *   See Drupal\\paragraphs\\Entity\\Paragraph for a full list of public properties
 *   and methods for the paragraph object.
 * - content: All paragraph items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - paragraphs: The current template type (also known as a \"theming hook\").
 *   - paragraphs--type-[type]: The current paragraphs type. For example, if the paragraph is an
 *     \"Image\" it would result in \"paragraphs--type--image\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - paragraphs--view-mode--[view_mode]: The View Mode of the paragraph; for example, a
 *     preview would result in: \"paragraphs--view-mode--preview\", and
 *     default: \"paragraphs--view-mode--default\".
 * - view_mode: View mode; for example, \"preview\" or \"full\".
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_paragraph()
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
    'paragraph',
    'paragraph--type--' ~ paragraph.bundle|clean_class,
    view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
    not paragraph.isPublished() ? 'paragraph--unpublished'
  ]
%}
<section class=\"video-section prelative text-center white\">
<div class=\"section-padding video-overlay\">
{% block paragraph %}
   <div class=\"container\">
      <h3>Watch Now</h3>
      <i class=\"fa fa-play\" id=\"video-icon\" aria-hidden=\"true\"></i>
    <div class=\"video-popup\">
      {% block content %}
        <div class=\"video-src\">

            
            {% if content.field_iframe_source['#items'] %}
              {% set link_item = content.field_iframe_source['#items'].0 %}
                {% set link_url = link_item.url %}
                {% set link_title = link_item.title %}
              <div class=\"iframe-src\">
                <iframe src=\"{{link_url}}\" allowfullscreen></iframe>
                </div>
            {% endif %}
            
        </div>

        
       {% endblock %}
    </div>
  </div>
{% endblock paragraph %}
  </div>
</section>

", "themes/applight/templates/paragraph--video.html.twig", "C:\\laragon\\www\\applight\\web\\themes\\applight\\templates\\paragraph--video.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 42, "block" => 51, "if" => 60);
        static $filters = array("clean_class" => 44, "escape" => 65);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape'],
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
