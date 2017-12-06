<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_bf45f72da4d6ed0d615296c5ca2f9d807ac8bf6041ff3d6e9a17b416c5d60617 extends Twig_Template
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
        $__internal_675073f4df60144f70af7b5199e4b6132a01b1d0ce2dc660b201cb0c92681e1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_675073f4df60144f70af7b5199e4b6132a01b1d0ce2dc660b201cb0c92681e1e->enter($__internal_675073f4df60144f70af7b5199e4b6132a01b1d0ce2dc660b201cb0c92681e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_13632cb0c6a1736b216a59b28487ceae8d54e4d53645b27aef9fbe7bc4f6b03e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13632cb0c6a1736b216a59b28487ceae8d54e4d53645b27aef9fbe7bc4f6b03e->enter($__internal_13632cb0c6a1736b216a59b28487ceae8d54e4d53645b27aef9fbe7bc4f6b03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_675073f4df60144f70af7b5199e4b6132a01b1d0ce2dc660b201cb0c92681e1e->leave($__internal_675073f4df60144f70af7b5199e4b6132a01b1d0ce2dc660b201cb0c92681e1e_prof);

        
        $__internal_13632cb0c6a1736b216a59b28487ceae8d54e4d53645b27aef9fbe7bc4f6b03e->leave($__internal_13632cb0c6a1736b216a59b28487ceae8d54e4d53645b27aef9fbe7bc4f6b03e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
