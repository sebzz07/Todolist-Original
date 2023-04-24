<?php

/* user/edit.html.twig */
class __TwigTemplate_3352ce361dafd7eda55b3c249a102716bbdcb470b2c12af85b06351eff549e52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/edit.html.twig", 1);
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
        $__internal_d9254e692b6f5580082ee5697a401dc8b5f28945607bf6c6cd4cbac79bf0a1da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9254e692b6f5580082ee5697a401dc8b5f28945607bf6c6cd4cbac79bf0a1da->enter($__internal_d9254e692b6f5580082ee5697a401dc8b5f28945607bf6c6cd4cbac79bf0a1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9254e692b6f5580082ee5697a401dc8b5f28945607bf6c6cd4cbac79bf0a1da->leave($__internal_d9254e692b6f5580082ee5697a401dc8b5f28945607bf6c6cd4cbac79bf0a1da_prof);

    }

    // line 3
    public function block_header_title($context, array $blocks = array())
    {
        $__internal_eee17114d3a08da63164df0568f06e50d934af07a71599d714f3bb855d0364f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eee17114d3a08da63164df0568f06e50d934af07a71599d714f3bb855d0364f8->enter($__internal_eee17114d3a08da63164df0568f06e50d934af07a71599d714f3bb855d0364f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user/edit.html.twig"));

        echo "<h1>Modifier <strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</strong></h1>";
        
        $__internal_eee17114d3a08da63164df0568f06e50d934af07a71599d714f3bb855d0364f8->leave($__internal_eee17114d3a08da63164df0568f06e50d934af07a71599d714f3bb855d0364f8_prof);

    }

    // line 4
    public function block_header_img($context, array $blocks = array())
    {
        $__internal_0caff43e45e7d5585450edd5079e8bca572ead126dc3f8fa6807b765379cb3e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0caff43e45e7d5585450edd5079e8bca572ead126dc3f8fa6807b765379cb3e9->enter($__internal_0caff43e45e7d5585450edd5079e8bca572ead126dc3f8fa6807b765379cb3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user/edit.html.twig"));

        
        $__internal_0caff43e45e7d5585450edd5079e8bca572ead126dc3f8fa6807b765379cb3e9->leave($__internal_0caff43e45e7d5585450edd5079e8bca572ead126dc3f8fa6807b765379cb3e9_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbf99e607a6acffdffc0f09381509beca6337c672738a792fa97376cd1771bbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbf99e607a6acffdffc0f09381509beca6337c672738a792fa97376cd1771bbd->enter($__internal_dbf99e607a6acffdffc0f09381509beca6337c672738a792fa97376cd1771bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user/edit.html.twig"));

        // line 7
        echo "    <div class=\"row\">
        ";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array())))));
        echo "
        ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

        <button type=\"submit\" class=\"btn btn-success pull-right\">Modifier</button>
        ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_dbf99e607a6acffdffc0f09381509beca6337c672738a792fa97376cd1771bbd->leave($__internal_dbf99e607a6acffdffc0f09381509beca6337c672738a792fa97376cd1771bbd_prof);

    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 12,  74 => 9,  70 => 8,  67 => 7,  61 => 6,  50 => 4,  36 => 3,  11 => 1,);
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

{% block header_title %}<h1>Modifier <strong>{{ user.username }}</strong></h1>{% endblock %}
{% block header_img %}{% endblock %}

{% block body %}
    <div class=\"row\">
        {{ form_start(form, {'action' : path('user_edit', {'id' : user.id})}) }}
        {{ form_widget(form) }}

        <button type=\"submit\" class=\"btn btn-success pull-right\">Modifier</button>
        {{ form_end(form) }}
    </div>
{% endblock %}
", "user/edit.html.twig", "C:\\wamp64\\www\\projet8-TodoList\\app\\Resources\\views\\user\\edit.html.twig");
    }
}
