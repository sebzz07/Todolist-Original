<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d6eea36be42556b44428a662e6c4eb7397332f226634d8b9b8a52cde78745834 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a31272e5d83266d29bead3615b112d9d2313fdb4a7dbe906c73dcf5d5c3f3d2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a31272e5d83266d29bead3615b112d9d2313fdb4a7dbe906c73dcf5d5c3f3d2e->enter($__internal_a31272e5d83266d29bead3615b112d9d2313fdb4a7dbe906c73dcf5d5c3f3d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a31272e5d83266d29bead3615b112d9d2313fdb4a7dbe906c73dcf5d5c3f3d2e->leave($__internal_a31272e5d83266d29bead3615b112d9d2313fdb4a7dbe906c73dcf5d5c3f3d2e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5ec0efbc2fc4cccc834ebb417cb5fd9b9da8f90b37c5de4f50eafcd3f73eb913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ec0efbc2fc4cccc834ebb417cb5fd9b9da8f90b37c5de4f50eafcd3f73eb913->enter($__internal_5ec0efbc2fc4cccc834ebb417cb5fd9b9da8f90b37c5de4f50eafcd3f73eb913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5ec0efbc2fc4cccc834ebb417cb5fd9b9da8f90b37c5de4f50eafcd3f73eb913->leave($__internal_5ec0efbc2fc4cccc834ebb417cb5fd9b9da8f90b37c5de4f50eafcd3f73eb913_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_684e9e17bbca1fb8bad466bf07f7b191980b31b45a4dfce7bec0ade5882af7dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_684e9e17bbca1fb8bad466bf07f7b191980b31b45a4dfce7bec0ade5882af7dd->enter($__internal_684e9e17bbca1fb8bad466bf07f7b191980b31b45a4dfce7bec0ade5882af7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_684e9e17bbca1fb8bad466bf07f7b191980b31b45a4dfce7bec0ade5882af7dd->leave($__internal_684e9e17bbca1fb8bad466bf07f7b191980b31b45a4dfce7bec0ade5882af7dd_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3710a6c992abdefe168fb7cf3cbae175e74130d8693d195e36e02dc13b4d7d3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3710a6c992abdefe168fb7cf3cbae175e74130d8693d195e36e02dc13b4d7d3d->enter($__internal_3710a6c992abdefe168fb7cf3cbae175e74130d8693d195e36e02dc13b4d7d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_3710a6c992abdefe168fb7cf3cbae175e74130d8693d195e36e02dc13b4d7d3d->leave($__internal_3710a6c992abdefe168fb7cf3cbae175e74130d8693d195e36e02dc13b4d7d3d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\projet8-TodoList\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
