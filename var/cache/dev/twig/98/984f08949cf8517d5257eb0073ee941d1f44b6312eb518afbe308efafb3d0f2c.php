<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7727a4f649efc2a3fd46a0ce5a5117b74355716385614b0dce7ff6d01e7632d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5e7ebf01092ea3ea78aa0179b4f1a226d2c88f9c1d833050ab0d5febeb5e9fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5e7ebf01092ea3ea78aa0179b4f1a226d2c88f9c1d833050ab0d5febeb5e9fd->enter($__internal_d5e7ebf01092ea3ea78aa0179b4f1a226d2c88f9c1d833050ab0d5febeb5e9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5e7ebf01092ea3ea78aa0179b4f1a226d2c88f9c1d833050ab0d5febeb5e9fd->leave($__internal_d5e7ebf01092ea3ea78aa0179b4f1a226d2c88f9c1d833050ab0d5febeb5e9fd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b47e41aec15c424cd32daeadb54b4a5eac45fa3f6a0fa06c9244f07d60943c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b47e41aec15c424cd32daeadb54b4a5eac45fa3f6a0fa06c9244f07d60943c6->enter($__internal_3b47e41aec15c424cd32daeadb54b4a5eac45fa3f6a0fa06c9244f07d60943c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_3b47e41aec15c424cd32daeadb54b4a5eac45fa3f6a0fa06c9244f07d60943c6->leave($__internal_3b47e41aec15c424cd32daeadb54b4a5eac45fa3f6a0fa06c9244f07d60943c6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aa20c75be91623a5d40fdc249a5e720dc91abe373ecc4d0f907b581fa5d2070e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa20c75be91623a5d40fdc249a5e720dc91abe373ecc4d0f907b581fa5d2070e->enter($__internal_aa20c75be91623a5d40fdc249a5e720dc91abe373ecc4d0f907b581fa5d2070e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_aa20c75be91623a5d40fdc249a5e720dc91abe373ecc4d0f907b581fa5d2070e->leave($__internal_aa20c75be91623a5d40fdc249a5e720dc91abe373ecc4d0f907b581fa5d2070e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_666ef4333cd9c717e04f925147e409eae9d6edef9e058f43dd852438a73e0c0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_666ef4333cd9c717e04f925147e409eae9d6edef9e058f43dd852438a73e0c0e->enter($__internal_666ef4333cd9c717e04f925147e409eae9d6edef9e058f43dd852438a73e0c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_666ef4333cd9c717e04f925147e409eae9d6edef9e058f43dd852438a73e0c0e->leave($__internal_666ef4333cd9c717e04f925147e409eae9d6edef9e058f43dd852438a73e0c0e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\projet8-TodoList\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
