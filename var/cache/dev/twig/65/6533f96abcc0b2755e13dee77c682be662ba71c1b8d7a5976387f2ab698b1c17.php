<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_a857982497e136c62c915e05c5d572e857529933f775bb7140deb71c1c6cd3df extends Twig_Template
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
        $__internal_b552834a1e7c9de68d01ef6a147b86405d4a2661d0ff9fa1efe1abc5b0935aa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b552834a1e7c9de68d01ef6a147b86405d4a2661d0ff9fa1efe1abc5b0935aa4->enter($__internal_b552834a1e7c9de68d01ef6a147b86405d4a2661d0ff9fa1efe1abc5b0935aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_5e80547a7c8719b0e3c222365f7830f84a65eb1bac231ba971c4f49f5d4f32dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e80547a7c8719b0e3c222365f7830f84a65eb1bac231ba971c4f49f5d4f32dc->enter($__internal_5e80547a7c8719b0e3c222365f7830f84a65eb1bac231ba971c4f49f5d4f32dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b552834a1e7c9de68d01ef6a147b86405d4a2661d0ff9fa1efe1abc5b0935aa4->leave($__internal_b552834a1e7c9de68d01ef6a147b86405d4a2661d0ff9fa1efe1abc5b0935aa4_prof);

        
        $__internal_5e80547a7c8719b0e3c222365f7830f84a65eb1bac231ba971c4f49f5d4f32dc->leave($__internal_5e80547a7c8719b0e3c222365f7830f84a65eb1bac231ba971c4f49f5d4f32dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
