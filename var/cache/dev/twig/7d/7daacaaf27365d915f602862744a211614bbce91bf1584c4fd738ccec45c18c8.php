<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_cd39220119c2a26f370acbb990753943e3f85ea7c75b14eb6ff9565eb8c9726d extends Twig_Template
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
        $__internal_a332e04b72937ad65e291b9f070aa5b8173e0788e42937b5f58cfb61d4403f3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a332e04b72937ad65e291b9f070aa5b8173e0788e42937b5f58cfb61d4403f3f->enter($__internal_a332e04b72937ad65e291b9f070aa5b8173e0788e42937b5f58cfb61d4403f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_e8eca99dc34c9edc350f6a552af460280e99a3f5fcbe0b2cad91207fe7058522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8eca99dc34c9edc350f6a552af460280e99a3f5fcbe0b2cad91207fe7058522->enter($__internal_e8eca99dc34c9edc350f6a552af460280e99a3f5fcbe0b2cad91207fe7058522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_a332e04b72937ad65e291b9f070aa5b8173e0788e42937b5f58cfb61d4403f3f->leave($__internal_a332e04b72937ad65e291b9f070aa5b8173e0788e42937b5f58cfb61d4403f3f_prof);

        
        $__internal_e8eca99dc34c9edc350f6a552af460280e99a3f5fcbe0b2cad91207fe7058522->leave($__internal_e8eca99dc34c9edc350f6a552af460280e99a3f5fcbe0b2cad91207fe7058522_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
