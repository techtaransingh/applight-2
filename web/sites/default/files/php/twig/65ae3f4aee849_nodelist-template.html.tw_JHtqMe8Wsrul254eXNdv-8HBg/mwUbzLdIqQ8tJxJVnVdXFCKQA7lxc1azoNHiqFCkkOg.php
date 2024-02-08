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

/* modules/wcp_page/templates/nodelist-template.html.twig */
class __TwigTemplate_49b04a3a903ce9d74c99c8f4995744a8 extends \Twig\Template
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
        // line 2
        if (($context["node_list"] ?? null)) {
            // line 3
            echo "  <table class=\"table table-striped\">
    <thead>
      <tr>
        <th>Title</th>
        <th>Body</th>
        <th>Article</th>
        <th>Form Type</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      ";
            // line 15
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["node_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["node"]) {
                // line 16
                echo "        <tr>
        ";
                // line 18
                echo "          <td>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["node"], "title", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "</td>
        ";
                // line 20
                echo "          <td>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["node"], "body", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "</td>
          <td>
          ";
                // line 23
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["node"], "form_article_label", [], "any", false, false, true, 23)) {
                    // line 24
                    echo "              ";
                    if (twig_get_attribute($this->env, $this->source, $context["node"], "form_article_id", [], "any", false, false, true, 24)) {
                        // line 25
                        echo "                <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, $context["node"], "form_article_id", [], "any", false, false, true, 25)]), "html", null, true);
                        echo "\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["node"], "form_article_label", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                        echo "</a>
              ";
                    } else {
                        // line 27
                        echo "                ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["node"], "form_article_label", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                        echo "
              ";
                    }
                    // line 29
                    echo "            ";
                } else {
                    // line 30
                    echo "              No Article Available
            ";
                }
                // line 32
                echo "          </td>
          <td>
          ";
                // line 35
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["node"], "form_type_name", [], "any", false, false, true, 35)) {
                    // line 36
                    echo "              ";
                    if (twig_get_attribute($this->env, $this->source, $context["node"], "form_type_id", [], "any", false, false, true, 36)) {
                        // line 37
                        echo "                <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.taxonomy_term.canonical", ["taxonomy_term" => twig_get_attribute($this->env, $this->source, $context["node"], "form_type_id", [], "any", false, false, true, 37)]), "html", null, true);
                        echo "\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["node"], "form_type_name", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                        echo "</a>
              ";
                    } else {
                        // line 39
                        echo "                ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["node"], "form_type_name", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                        echo "
              ";
                    }
                    // line 41
                    echo "            ";
                } else {
                    // line 42
                    echo "              No Form Available
            ";
                }
                // line 44
                echo "          </td>
          ";
                // line 46
                echo "          <td>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["node"], "date", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                echo "</td>
        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['node'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "    </tbody>
  </table>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/wcp_page/templates/nodelist-template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 49,  134 => 46,  131 => 44,  127 => 42,  124 => 41,  118 => 39,  110 => 37,  107 => 36,  104 => 35,  100 => 32,  96 => 30,  93 => 29,  87 => 27,  79 => 25,  76 => 24,  73 => 23,  67 => 20,  62 => 18,  59 => 16,  54 => 15,  41 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Check if the node list variable is set #}
{% if node_list %}
  <table class=\"table table-striped\">
    <thead>
      <tr>
        <th>Title</th>
        <th>Body</th>
        <th>Article</th>
        <th>Form Type</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      {# Iterate through each node in the list #}
      {% for node in node_list %}
        <tr>
        {# Check if node title exists #}
          <td>{{ node.title }}</td>
        {# Check if node body exists #}
          <td>{{ node.body }}</td>
          <td>
          {# Check if form_article_label and Id exists #}
            {% if node.form_article_label %}
              {% if node.form_article_id %}
                <a href=\"{{ path('entity.node.canonical', {'node': node.form_article_id}) }}\">{{ node.form_article_label }}</a>
              {% else %}
                {{ node.form_article_label }}
              {% endif %}
            {% else %}
              No Article Available
            {% endif %}
          </td>
          <td>
          {# Check if form_type_name and Id exists #}
            {% if node.form_type_name %}
              {% if node.form_type_id %}
                <a href=\"{{ path('entity.taxonomy_term.canonical', {'taxonomy_term': node.form_type_id}) }}\">{{ node.form_type_name }}</a>
              {% else %}
                {{ node.form_type_name }}
              {% endif %}
            {% else %}
              No Form Available
            {% endif %}
          </td>
          {# Check if node date exists #}
          <td>{{ node.date }}</td>
        </tr>
      {% endfor %}
    </tbody>
  </table>
{% endif %}
", "modules/wcp_page/templates/nodelist-template.html.twig", "C:\\laragon\\www\\applight\\web\\modules\\wcp_page\\templates\\nodelist-template.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "for" => 15);
        static $filters = array("escape" => 18);
        static $functions = array("path" => 25);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape'],
                ['path']
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
