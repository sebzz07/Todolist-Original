<?php

/* task/create.html.twig */
class __TwigTemplate_d66288ec22292a2ad7fe5d5942e142bd5fa02eefb1eadf89e7c8cccca23e2e09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "task/create.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_970b8e9d01811bd03bd5c651232a41db800a85316853bbf5117afaf862383a9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_970b8e9d01811bd03bd5c651232a41db800a85316853bbf5117afaf862383a9b->enter($__internal_970b8e9d01811bd03bd5c651232a41db800a85316853bbf5117afaf862383a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_970b8e9d01811bd03bd5c651232a41db800a85316853bbf5117afaf862383a9b->leave($__internal_970b8e9d01811bd03bd5c651232a41db800a85316853bbf5117afaf862383a9b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_67fac79ceebdc79170b789531fa0505fef95f05f94ae8e8a82956d3aed8f740f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67fac79ceebdc79170b789531fa0505fef95f05f94ae8e8a82956d3aed8f740f->enter($__internal_67fac79ceebdc79170b789531fa0505fef95f05f94ae8e8a82956d3aed8f740f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "task/create.html.twig"));

        // line 4
        echo "    <div class=\"row\">
        ";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_create")));
        echo "
            ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

            <button type=\"submit\" class=\"btn btn-success pull-right\">Ajouter</button>
        ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

        <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_list");
        echo "\" class=\"btn btn-primary\">Retour à la liste des tâches</a>
    </div>
";
        
        $__internal_67fac79ceebdc79170b789531fa0505fef95f05f94ae8e8a82956d3aed8f740f->leave($__internal_67fac79ceebdc79170b789531fa0505fef95f05f94ae8e8a82956d3aed8f740f_prof);

    }

    public function getTemplateName()
    {
        return "task/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  53 => 9,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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

{% block body %}
    <div class=\"row\">
        {{ form_start(form, {'action' : path('task_create')}) }}
            {{ form_widget(form) }}

            <button type=\"submit\" class=\"btn btn-success pull-right\">Ajouter</button>
        {{ form_end(form) }}

        <a href=\"{{ path('task_list') }}\" class=\"btn btn-primary\">Retour à la liste des tâches</a>
    </div>
{% endblock %}
", "task/create.html.twig", "C:\\wamp64\\www\\projet8-TodoList\\app\\Resources\\views\\task\\create.html.twig");
    }
}
