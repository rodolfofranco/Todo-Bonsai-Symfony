<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_d94d4d48925093222286b4d01da406df1fe0e463f7f2d711bf9979914e58f507 extends Twig_Template
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
        $__internal_31daefc3c3760c3ca0474ced0c2dec9a5f2c34fd2ad11612c547c77d3e5fdcfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31daefc3c3760c3ca0474ced0c2dec9a5f2c34fd2ad11612c547c77d3e5fdcfb->enter($__internal_31daefc3c3760c3ca0474ced0c2dec9a5f2c34fd2ad11612c547c77d3e5fdcfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_8acf1089ab672e6345e56e8a9d73f9858fd34342df3aa6c5e690eeef6bbd0cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8acf1089ab672e6345e56e8a9d73f9858fd34342df3aa6c5e690eeef6bbd0cb8->enter($__internal_8acf1089ab672e6345e56e8a9d73f9858fd34342df3aa6c5e690eeef6bbd0cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_31daefc3c3760c3ca0474ced0c2dec9a5f2c34fd2ad11612c547c77d3e5fdcfb->leave($__internal_31daefc3c3760c3ca0474ced0c2dec9a5f2c34fd2ad11612c547c77d3e5fdcfb_prof);

        
        $__internal_8acf1089ab672e6345e56e8a9d73f9858fd34342df3aa6c5e690eeef6bbd0cb8->leave($__internal_8acf1089ab672e6345e56e8a9d73f9858fd34342df3aa6c5e690eeef6bbd0cb8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
