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

/* themes/applight/templates/paragraph--team.html.twig */
class __TwigTemplate_bdb694deeb489bb2a47eb9d45cc04d14 extends \Twig\Template
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
        echo "<section class=\"team section-padding\" data-scroll-index='2'>
<div class=\"container\">
";
        // line 51
        $this->displayBlock('paragraph', $context, $blocks);
        // line 100
        echo "  </div>
</section>

";
    }

    // line 51
    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "  <div class=\"row\">
    <div class=\"col-md-12\">
      ";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 97
        echo "    </div>
  </div>
";
    }

    // line 54
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "        <div class=\"sectioner-header text-center\">
            
            ";
        // line 57
        if ((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_section_title", [], "any", false, false, true, 57)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#items"] ?? null) : null)) {
            // line 58
            echo "              <h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_section_title", [], "any", false, false, true, 58)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#items"] ?? null) : null), 0, [], "any", false, false, true, 58), "value", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
            echo "</h3>
            ";
        }
        // line 60
        echo "            <span class=\"line\"></span>

            ";
        // line 62
        if ((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_section_description", [], "any", false, false, true, 62)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#items"] ?? null) : null)) {
            // line 63
            echo "              <p>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_section_description", [], "any", false, false, true, 63)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#items"] ?? null) : null), 0, [], "any", false, false, true, 63), "value", [], "any", false, false, true, 63), 63, $this->source));
            echo "</p>
            ";
        }
        // line 65
        echo "            
        </div>

         ";
        // line 68
        if ((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_members", [], "any", false, false, true, 68)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#items"] ?? null) : null)) {
            // line 69
            echo "          <div class=\"section-content text-center\">
              <div class=\"row\"> 
            ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_members", [], "any", false, false, true, 71)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#items"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 72
                echo "                ";
                $context["referenced_paragraph"] = twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 72);
                // line 73
                echo "                 <div class=\"col-md-4\">
                     <div class=\"team-detail wow bounce\" data-wow-delay=\"0.2s\">
                        
                        ";
                // line 76
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["referenced_paragraph"] ?? null), "field_image", [], "any", false, false, true, 76))) {
                    // line 77
                    echo "                            ";
                    // line 78
                    echo "                            ";
                    $context["file_item"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["referenced_paragraph"] ?? null), "field_image", [], "any", false, false, true, 78), 0, [], "any", false, false, true, 78);
                    // line 79
                    echo "                            ";
                    $context["file_url"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["file_item"] ?? null), "entity", [], "any", false, false, true, 79), "uri", [], "any", false, false, true, 79), "value", [], "any", false, false, true, 79);
                    // line 80
                    echo "                            ";
                    $context["alt_text"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["referenced_paragraph"] ?? null), "field_image", [], "any", false, false, true, 80), "alt", [], "any", false, false, true, 80);
                    // line 81
                    echo "                            
                            <img src=\"";
                    // line 82
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(($context["file_url"] ?? null), 82, $this->source)), "html", null, true);
                    echo "\" alt=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["alt_text"] ?? null), 82, $this->source), "html", null, true);
                    echo "\" />
                        ";
                }
                // line 84
                echo "                     
                        <h4>";
                // line 85
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["referenced_paragraph"] ?? null), "field_name", [], "any", false, false, true, 85), 0, [], "any", false, false, true, 85), "value", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                echo "</h4>
                        <p>";
                // line 86
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["referenced_paragraph"] ?? null), "field_designation", [], "any", false, false, true, 86), 0, [], "any", false, false, true, 86), "value", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                echo "</p>
                    </div>
                    
                </div>
                
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "             </div>
          </div>  
        ";
        }
        // line 95
        echo "        
       ";
    }

    public function getTemplateName()
    {
        return "themes/applight/templates/paragraph--team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 95,  168 => 92,  156 => 86,  152 => 85,  149 => 84,  142 => 82,  139 => 81,  136 => 80,  133 => 79,  130 => 78,  128 => 77,  126 => 76,  121 => 73,  118 => 72,  114 => 71,  110 => 69,  108 => 68,  103 => 65,  97 => 63,  95 => 62,  91 => 60,  85 => 58,  83 => 57,  79 => 55,  75 => 54,  69 => 97,  67 => 54,  63 => 52,  59 => 51,  52 => 100,  50 => 51,  46 => 49,  44 => 46,  43 => 45,  42 => 44,  41 => 42,);
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
<section class=\"team section-padding\" data-scroll-index='2'>
<div class=\"container\">
{% block paragraph %}
  <div class=\"row\">
    <div class=\"col-md-12\">
      {% block content %}
        <div class=\"sectioner-header text-center\">
            
            {% if content.field_team_section_title['#items'] %}
              <h3>{{ content.field_team_section_title['#items'].0.value }}</h3>
            {% endif %}
            <span class=\"line\"></span>

            {% if content.field_team_section_description['#items'] %}
              <p>{{ content.field_team_section_description['#items'].0.value|raw }}</p>
            {% endif %}
            
        </div>

         {% if content.field_members['#items'] %}
          <div class=\"section-content text-center\">
              <div class=\"row\"> 
            {% for item in content.field_members['#items'] %}
                {% set referenced_paragraph = item.entity %}
                 <div class=\"col-md-4\">
                     <div class=\"team-detail wow bounce\" data-wow-delay=\"0.2s\">
                        
                        {% if referenced_paragraph.field_image|length %}
                            {# Check if the image field has a value #}
                            {% set file_item = referenced_paragraph.field_image.0 %}
                            {% set file_url = file_item.entity.uri.value %}
                            {% set alt_text = referenced_paragraph.field_image.alt %}
                            
                            <img src=\"{{ file_url(file_url) }}\" alt=\"{{ alt_text }}\" />
                        {% endif %}
                     
                        <h4>{{referenced_paragraph.field_name.0.value}}</h4>
                        <p>{{referenced_paragraph.field_designation.0.value}}</p>
                    </div>
                    
                </div>
                
            {% endfor %}
             </div>
          </div>  
        {% endif %}
        
       {% endblock %}
    </div>
  </div>
{% endblock paragraph %}
  </div>
</section>

", "themes/applight/templates/paragraph--team.html.twig", "C:\\laragon\\www\\applight\\web\\themes\\applight\\templates\\paragraph--team.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 42, "block" => 51, "if" => 57, "for" => 71);
        static $filters = array("clean_class" => 44, "escape" => 58, "raw" => 63, "length" => 76);
        static $functions = array("file_url" => 82);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'for'],
                ['clean_class', 'escape', 'raw', 'length'],
                ['file_url']
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
