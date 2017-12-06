<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_d4393e45083c8322ccdfdfe957cba8acef7d04d197f660b94c417c8953aadb4b extends Twig_Template
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
        $__internal_15f7241113a9695df6e2972e763d51a8687f13051646831092a79b8f096bbbc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15f7241113a9695df6e2972e763d51a8687f13051646831092a79b8f096bbbc7->enter($__internal_15f7241113a9695df6e2972e763d51a8687f13051646831092a79b8f096bbbc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_96ae60260cce697e44fe49e969b35d2d6dee78476d604aa90309ddae506e8a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96ae60260cce697e44fe49e969b35d2d6dee78476d604aa90309ddae506e8a0f->enter($__internal_96ae60260cce697e44fe49e969b35d2d6dee78476d604aa90309ddae506e8a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_15f7241113a9695df6e2972e763d51a8687f13051646831092a79b8f096bbbc7->leave($__internal_15f7241113a9695df6e2972e763d51a8687f13051646831092a79b8f096bbbc7_prof);

        
        $__internal_96ae60260cce697e44fe49e969b35d2d6dee78476d604aa90309ddae506e8a0f->leave($__internal_96ae60260cce697e44fe49e969b35d2d6dee78476d604aa90309ddae506e8a0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
