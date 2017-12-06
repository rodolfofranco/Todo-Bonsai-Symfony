<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_6a33d2204497760203374f3e3ceb2f4bb7e7014be1f46a22cd4a364cc1bfd96d extends Twig_Template
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
        $__internal_de0ef08819a786ab1c67d1a4ce60f1796e63e437473448e749d4d5b0a4c61b17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de0ef08819a786ab1c67d1a4ce60f1796e63e437473448e749d4d5b0a4c61b17->enter($__internal_de0ef08819a786ab1c67d1a4ce60f1796e63e437473448e749d4d5b0a4c61b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_02f8151de5b3076a4ba6e9c304de1b05983449c2f10eb31faeed5cb9cf6ea17f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02f8151de5b3076a4ba6e9c304de1b05983449c2f10eb31faeed5cb9cf6ea17f->enter($__internal_02f8151de5b3076a4ba6e9c304de1b05983449c2f10eb31faeed5cb9cf6ea17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_de0ef08819a786ab1c67d1a4ce60f1796e63e437473448e749d4d5b0a4c61b17->leave($__internal_de0ef08819a786ab1c67d1a4ce60f1796e63e437473448e749d4d5b0a4c61b17_prof);

        
        $__internal_02f8151de5b3076a4ba6e9c304de1b05983449c2f10eb31faeed5cb9cf6ea17f->leave($__internal_02f8151de5b3076a4ba6e9c304de1b05983449c2f10eb31faeed5cb9cf6ea17f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
