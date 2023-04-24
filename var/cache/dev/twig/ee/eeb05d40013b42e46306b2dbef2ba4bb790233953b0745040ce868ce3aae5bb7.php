<?php

/* user/create.html.twig */
class __TwigTemplate_68cf04eaaf37a6472da53cc29b5b7e80f5d24fb0535704d9c4860c7400f88821 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/create.html.twig", 1);
        $this->blocks = array(
            'header_title' => array($this, 'block_header_title'),
            'header_img' => array($this, 'block_header_img'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9a1891ed6a3d68f51975d546935a05a93f863442b29f302fdb85219a810cb44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9a1891ed6a3d68f51975d546935a05a93f863442b29f302fdb85219a810cb44->enter($__internal_e9a1891ed6a3d68f51975d546935a05a93f863442b29f302fdb85219a810cb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9a1891ed6a3d68f51975d546935a05a93f863442b29f302fdb85219a810cb44->leave($__internal_e9a1891ed6a3d68f51975d546935a05a93f863442b29f302fdb85219a810cb44_prof);

    }

    // line 3
    public function block_header_title($context, array $blocks = array())
    {
        $__internal_7425b088b1e2162bd66138fb7b322de84c00df7beee397e70b17f73d77193d70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7425b088b1e2162bd66138fb7b322de84c00df7beee397e70b17f73d77193d70->enter($__internal_7425b088b1e2162bd66138fb7b322de84c00df7beee397e70b17f73d77193d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user/create.html.twig"));

        echo "<h1>Créer un utilisateur</h1>";
        
        $__internal_7425b088b1e2162bd66138fb7b322de84c00df7beee397e70b17f73d77193d70->leave($__internal_7425b088b1e2162bd66138fb7b322de84c00df7beee397e70b17f73d77193d70_prof);

    }

    // line 4
    public function block_header_img($context, array $blocks = array())
    {
        $__internal_f11d46233faea5b70426d04cf640f7879d3d4f2c23f56f65a2d29034b60631e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f11d46233faea5b70426d04cf640f7879d3d4f2c23f56f65a2d29034b60631e9->enter($__internal_f11d46233faea5b70426d04cf640f7879d3d4f2c23f56f65a2d29034b60631e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user/create.html.twig"));

        
        $__internal_f11d46233faea5b70426d04cf640f7879d3d4f2c23f56f65a2d29034b60631e9->leave($__internal_f11d46233faea5b70426d04cf640f7879d3d4f2c23f56f65a2d29034b60631e9_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ecfdd8324b6adcd07f6119c37921e745f8b750de5eeb6682ee6f0e3f3b219ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ecfdd8324b6adcd07f6119c37921e745f8b750de5eeb6682ee6f0e3f3b219ae->enter($__internal_4ecfdd8324b6adcd07f6119c37921e745f8b750de5eeb6682ee6f0e3f3b219ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user/create.html.twig"));

        // line 7
        echo "    <div class=\"row\">
        ";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_create")));
        echo "
            ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

            <button type=\"submit\" class=\"btn btn-success pull-right\">Ajouter</button>
        ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_4ecfdd8324b6adcd07f6119c37921e745f8b750de5eeb6682ee6f0e3f3b219ae->leave($__internal_4ecfdd8324b6adcd07f6119c37921e745f8b750de5eeb6682ee6f0e3f3b219ae_prof);

    }

    public function getTemplateName()
    {
        return "user/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 9,  68 => 8,  65 => 7,  59 => 6,  48 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block header_title %}<h1>Créer un utilisateur</h1>{% endblock %}
{% block header_img %}{% endblock %}

{% block body %}
    <div class=\"row\">
        {{ form_start(form, {'action' : path('user_create')}) }}
            {{ form_widget(form) }}

            <button type=\"submit\" class=\"btn btn-success pull-right\">Ajouter</button>
        {{ form_end(form) }}
    </div>
{% endblock %}
", "user/create.html.twig", "C:\\wamp64\\www\\projet8-TodoList\\app\\Resources\\views\\user\\create.html.twig");
    }
}
