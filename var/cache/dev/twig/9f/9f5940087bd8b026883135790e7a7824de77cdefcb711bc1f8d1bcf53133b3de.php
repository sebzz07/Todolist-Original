<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a3945e100458f78aeb18dc20f0c9f79aed3f8d5970882d9293a93c6d818f629c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a480fa3aacaf78ce4d9e3367d7641b93d2f94a9d31fe648951029a6cf91beb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a480fa3aacaf78ce4d9e3367d7641b93d2f94a9d31fe648951029a6cf91beb3->enter($__internal_5a480fa3aacaf78ce4d9e3367d7641b93d2f94a9d31fe648951029a6cf91beb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a480fa3aacaf78ce4d9e3367d7641b93d2f94a9d31fe648951029a6cf91beb3->leave($__internal_5a480fa3aacaf78ce4d9e3367d7641b93d2f94a9d31fe648951029a6cf91beb3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b579e8b0895678601ee07cd7888a85c5b7b3c7321bdf432b368fd5f19f33d216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b579e8b0895678601ee07cd7888a85c5b7b3c7321bdf432b368fd5f19f33d216->enter($__internal_b579e8b0895678601ee07cd7888a85c5b7b3c7321bdf432b368fd5f19f33d216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b579e8b0895678601ee07cd7888a85c5b7b3c7321bdf432b368fd5f19f33d216->leave($__internal_b579e8b0895678601ee07cd7888a85c5b7b3c7321bdf432b368fd5f19f33d216_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_886de21b95c665370d99f1fea03cec8fae93fc2d6015af220b1254b75be84c22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_886de21b95c665370d99f1fea03cec8fae93fc2d6015af220b1254b75be84c22->enter($__internal_886de21b95c665370d99f1fea03cec8fae93fc2d6015af220b1254b75be84c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_886de21b95c665370d99f1fea03cec8fae93fc2d6015af220b1254b75be84c22->leave($__internal_886de21b95c665370d99f1fea03cec8fae93fc2d6015af220b1254b75be84c22_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c85983a9aaf1871aee8362097b14275cb6f31dbc57990fb08a7826a6aeb33a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c85983a9aaf1871aee8362097b14275cb6f31dbc57990fb08a7826a6aeb33a8->enter($__internal_0c85983a9aaf1871aee8362097b14275cb6f31dbc57990fb08a7826a6aeb33a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0c85983a9aaf1871aee8362097b14275cb6f31dbc57990fb08a7826a6aeb33a8->leave($__internal_0c85983a9aaf1871aee8362097b14275cb6f31dbc57990fb08a7826a6aeb33a8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\projet8-TodoList\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
