<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_d8a5605ebc50be684b3335547cbe613318b199fc8302d0fa558a2efce7c45f6a extends Twig_Template
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
        $__internal_eb8ea5e9b732eb13dfd808bb4849b2c19230410cb4c5ac0dd80c00b6f68a8c72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb8ea5e9b732eb13dfd808bb4849b2c19230410cb4c5ac0dd80c00b6f68a8c72->enter($__internal_eb8ea5e9b732eb13dfd808bb4849b2c19230410cb4c5ac0dd80c00b6f68a8c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_ddd73c21eeea3ef102c38369b6c23a46735a38da7127303d2008a59924fbe08b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddd73c21eeea3ef102c38369b6c23a46735a38da7127303d2008a59924fbe08b->enter($__internal_ddd73c21eeea3ef102c38369b6c23a46735a38da7127303d2008a59924fbe08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_eb8ea5e9b732eb13dfd808bb4849b2c19230410cb4c5ac0dd80c00b6f68a8c72->leave($__internal_eb8ea5e9b732eb13dfd808bb4849b2c19230410cb4c5ac0dd80c00b6f68a8c72_prof);

        
        $__internal_ddd73c21eeea3ef102c38369b6c23a46735a38da7127303d2008a59924fbe08b->leave($__internal_ddd73c21eeea3ef102c38369b6c23a46735a38da7127303d2008a59924fbe08b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
