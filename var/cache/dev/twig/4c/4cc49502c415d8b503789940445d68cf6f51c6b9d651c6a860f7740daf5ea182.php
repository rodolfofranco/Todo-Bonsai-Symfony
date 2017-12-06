<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_1f9425598ab0fbe7741ee69a19d9d559f48c85838e4044d26f38f8d49a4f1877 extends Twig_Template
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
        $__internal_5947fcc5317603ce63d47a2ddac71378a0f38910dc6654f6deb0cf5267f05247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5947fcc5317603ce63d47a2ddac71378a0f38910dc6654f6deb0cf5267f05247->enter($__internal_5947fcc5317603ce63d47a2ddac71378a0f38910dc6654f6deb0cf5267f05247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_1bd1b4587d6bd9ad7a04732149792db07bfcda08303169ffb850e048e8281c80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bd1b4587d6bd9ad7a04732149792db07bfcda08303169ffb850e048e8281c80->enter($__internal_1bd1b4587d6bd9ad7a04732149792db07bfcda08303169ffb850e048e8281c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5947fcc5317603ce63d47a2ddac71378a0f38910dc6654f6deb0cf5267f05247->leave($__internal_5947fcc5317603ce63d47a2ddac71378a0f38910dc6654f6deb0cf5267f05247_prof);

        
        $__internal_1bd1b4587d6bd9ad7a04732149792db07bfcda08303169ffb850e048e8281c80->leave($__internal_1bd1b4587d6bd9ad7a04732149792db07bfcda08303169ffb850e048e8281c80_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
