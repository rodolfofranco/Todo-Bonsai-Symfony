<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_dbcefa1d206799ff88b4b5226a9d30f3335b8606928c730cf6f3943107d3cf3c extends Twig_Template
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
        $__internal_d8c5666f8da3283a3e1bb112980884c9038c92668bbf5cce88101e1511cb7cf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8c5666f8da3283a3e1bb112980884c9038c92668bbf5cce88101e1511cb7cf5->enter($__internal_d8c5666f8da3283a3e1bb112980884c9038c92668bbf5cce88101e1511cb7cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_6a763d290e01899793634b50e8cc5d634cbdc1f1c482fd74ef8fead12afc31a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a763d290e01899793634b50e8cc5d634cbdc1f1c482fd74ef8fead12afc31a6->enter($__internal_6a763d290e01899793634b50e8cc5d634cbdc1f1c482fd74ef8fead12afc31a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_d8c5666f8da3283a3e1bb112980884c9038c92668bbf5cce88101e1511cb7cf5->leave($__internal_d8c5666f8da3283a3e1bb112980884c9038c92668bbf5cce88101e1511cb7cf5_prof);

        
        $__internal_6a763d290e01899793634b50e8cc5d634cbdc1f1c482fd74ef8fead12afc31a6->leave($__internal_6a763d290e01899793634b50e8cc5d634cbdc1f1c482fd74ef8fead12afc31a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
