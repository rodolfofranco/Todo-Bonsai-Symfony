<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_efd4b390c7bfbf9d74a83c7b9afd4fbac485de32871e4cbde7107970f56ae978 extends Twig_Template
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
        $__internal_bf6a26505d9ea68f91947184ba2545ce02409a286172c6a41058de03a677c133 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf6a26505d9ea68f91947184ba2545ce02409a286172c6a41058de03a677c133->enter($__internal_bf6a26505d9ea68f91947184ba2545ce02409a286172c6a41058de03a677c133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_e802520218dd7a7a1b77cf79212a8c1e556abf1e566d3667ce8ecc037f4eb458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e802520218dd7a7a1b77cf79212a8c1e556abf1e566d3667ce8ecc037f4eb458->enter($__internal_e802520218dd7a7a1b77cf79212a8c1e556abf1e566d3667ce8ecc037f4eb458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_bf6a26505d9ea68f91947184ba2545ce02409a286172c6a41058de03a677c133->leave($__internal_bf6a26505d9ea68f91947184ba2545ce02409a286172c6a41058de03a677c133_prof);

        
        $__internal_e802520218dd7a7a1b77cf79212a8c1e556abf1e566d3667ce8ecc037f4eb458->leave($__internal_e802520218dd7a7a1b77cf79212a8c1e556abf1e566d3667ce8ecc037f4eb458_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
