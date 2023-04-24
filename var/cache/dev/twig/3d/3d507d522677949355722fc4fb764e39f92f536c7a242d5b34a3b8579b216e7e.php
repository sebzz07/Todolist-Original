<?php

/* default/index.html.twig */
class __TwigTemplate_050be4af5ec4810215268ac92372c3807df2f94b6e2ebaa6d2abcd66e8ed6b77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'header_title' => array($this, 'block_header_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0159776b21f8952af40655e6628fda611ceb21925c83487d90f9b6cfd745616d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0159776b21f8952af40655e6628fda611ceb21925c83487d90f9b6cfd745616d->enter($__internal_0159776b21f8952af40655e6628fda611ceb21925c83487d90f9b6cfd745616d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0159776b21f8952af40655e6628fda611ceb21925c83487d90f9b6cfd745616d->leave($__internal_0159776b21f8952af40655e6628fda611ceb21925c83487d90f9b6cfd745616d_prof);

    }

    // line 3
    public function block_header_title($context, array $blocks = array())
    {
        $__internal_096c28072a935edb6f743b21d8afade27c0777c8a4a1ce39f0c0b99dd2a91aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_096c28072a935edb6f743b21d8afade27c0777c8a4a1ce39f0c0b99dd2a91aac->enter($__internal_096c28072a935edb6f743b21d8afade27c0777c8a4a1ce39f0c0b99dd2a91aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "default/index.html.twig"));

        // line 4
        echo "    <h1>Bienvenue sur Todo List, l'application vous permettant de gérer l'ensemble de vos tâches sans effort !</h1>
";
        
        $__internal_096c28072a935edb6f743b21d8afade27c0777c8a4a1ce39f0c0b99dd2a91aac->leave($__internal_096c28072a935edb6f743b21d8afade27c0777c8a4a1ce39f0c0b99dd2a91aac_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_85ad19c0a915bfc601d0caa2dea479a340a50457be1ffb773db6b7731945fb9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ad19c0a915bfc601d0caa2dea479a340a50457be1ffb773db6b7731945fb9e->enter($__internal_85ad19c0a915bfc601d0caa2dea479a340a50457be1ffb773db6b7731945fb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "default/index.html.twig"));

        // line 8
        echo "
    <div class=\"row\">
        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_create");
        echo "\" class=\"btn btn-success\">Créer une nouvelle tâche</a>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_list");
        echo "\" class=\"btn btn-info\">Consulter la liste des tâches à faire</a>
        <a href=\"\" class=\"btn btn-secondary\">Consulter la liste des tâches terminées</a>
    </div>
";
        
        $__internal_85ad19c0a915bfc601d0caa2dea479a340a50457be1ffb773db6b7731945fb9e->leave($__internal_85ad19c0a915bfc601d0caa2dea479a340a50457be1ffb773db6b7731945fb9e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  59 => 10,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
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

{% block header_title %}
    <h1>Bienvenue sur Todo List, l'application vous permettant de gérer l'ensemble de vos tâches sans effort !</h1>
{% endblock %}

{% block body %}

    <div class=\"row\">
        <a href=\"{{ path('task_create') }}\" class=\"btn btn-success\">Créer une nouvelle tâche</a>
        <a href=\"{{ path('task_list') }}\" class=\"btn btn-info\">Consulter la liste des tâches à faire</a>
        <a href=\"\" class=\"btn btn-secondary\">Consulter la liste des tâches terminées</a>
    </div>
{% endblock %}
", "default/index.html.twig", "C:\\wamp64\\www\\projet8-TodoList\\app\\Resources\\views\\default\\index.html.twig");
    }
}
