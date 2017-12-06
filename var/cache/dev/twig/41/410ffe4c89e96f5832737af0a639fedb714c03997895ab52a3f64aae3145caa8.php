<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_8a7ec5f1297f82813348b436c25490e6cba5ca727f589e4bd4d8646d90b99f7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9789c84a960d49b7a424aff5dc60f270d42b52be372c704d94c2058259530325 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9789c84a960d49b7a424aff5dc60f270d42b52be372c704d94c2058259530325->enter($__internal_9789c84a960d49b7a424aff5dc60f270d42b52be372c704d94c2058259530325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_d7801364f691691421a2042917133a12102638334a238768736c33329bffac9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7801364f691691421a2042917133a12102638334a238768736c33329bffac9e->enter($__internal_d7801364f691691421a2042917133a12102638334a238768736c33329bffac9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9789c84a960d49b7a424aff5dc60f270d42b52be372c704d94c2058259530325->leave($__internal_9789c84a960d49b7a424aff5dc60f270d42b52be372c704d94c2058259530325_prof);

        
        $__internal_d7801364f691691421a2042917133a12102638334a238768736c33329bffac9e->leave($__internal_d7801364f691691421a2042917133a12102638334a238768736c33329bffac9e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
