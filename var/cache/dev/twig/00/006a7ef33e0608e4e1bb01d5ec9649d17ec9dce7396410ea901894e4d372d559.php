<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_9d9fbb93fdaa9652d38b93d53a010b743c354ca893d517f7804369f1ac288f5c extends Twig_Template
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
        $__internal_936b98774a30ba68c968f6288f98305dcd3ab089acbcc8f4438e74bc8746e70d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_936b98774a30ba68c968f6288f98305dcd3ab089acbcc8f4438e74bc8746e70d->enter($__internal_936b98774a30ba68c968f6288f98305dcd3ab089acbcc8f4438e74bc8746e70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_31cae2ecac2098a1c9a5350922cc9beeb746af4e36cefe099fa382fd83424e5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31cae2ecac2098a1c9a5350922cc9beeb746af4e36cefe099fa382fd83424e5e->enter($__internal_31cae2ecac2098a1c9a5350922cc9beeb746af4e36cefe099fa382fd83424e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_936b98774a30ba68c968f6288f98305dcd3ab089acbcc8f4438e74bc8746e70d->leave($__internal_936b98774a30ba68c968f6288f98305dcd3ab089acbcc8f4438e74bc8746e70d_prof);

        
        $__internal_31cae2ecac2098a1c9a5350922cc9beeb746af4e36cefe099fa382fd83424e5e->leave($__internal_31cae2ecac2098a1c9a5350922cc9beeb746af4e36cefe099fa382fd83424e5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
