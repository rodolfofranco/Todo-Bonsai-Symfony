<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_edc9aaef04fa8619329105cd4b97f06c797c8f553c4df2118495d67fd5d7ed8a extends Twig_Template
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
        $__internal_750a3b5f77a1c410f0a0b1d552fcf195897266cc8f7a3ab166d9784b3369fe8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_750a3b5f77a1c410f0a0b1d552fcf195897266cc8f7a3ab166d9784b3369fe8a->enter($__internal_750a3b5f77a1c410f0a0b1d552fcf195897266cc8f7a3ab166d9784b3369fe8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_74e54006a549169892ddb85b00dbe2aaa813acf5b66da5f7fac9c98308fffd4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e54006a549169892ddb85b00dbe2aaa813acf5b66da5f7fac9c98308fffd4e->enter($__internal_74e54006a549169892ddb85b00dbe2aaa813acf5b66da5f7fac9c98308fffd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_750a3b5f77a1c410f0a0b1d552fcf195897266cc8f7a3ab166d9784b3369fe8a->leave($__internal_750a3b5f77a1c410f0a0b1d552fcf195897266cc8f7a3ab166d9784b3369fe8a_prof);

        
        $__internal_74e54006a549169892ddb85b00dbe2aaa813acf5b66da5f7fac9c98308fffd4e->leave($__internal_74e54006a549169892ddb85b00dbe2aaa813acf5b66da5f7fac9c98308fffd4e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
