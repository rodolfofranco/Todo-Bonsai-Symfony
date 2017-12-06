<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_7fe13cb93fd8f777c42d054b74a677a34834856be41e681d3bc7cfee122abe69 extends Twig_Template
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
        $__internal_6ad42c2754144486c282999e6f01d814a3a1dd4fe884394744905c58aeaf32f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ad42c2754144486c282999e6f01d814a3a1dd4fe884394744905c58aeaf32f1->enter($__internal_6ad42c2754144486c282999e6f01d814a3a1dd4fe884394744905c58aeaf32f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_25d8de2c2b27c7a4c6ed3c23956739d4c9f126da3fa1130dfeca0dca9cb61985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25d8de2c2b27c7a4c6ed3c23956739d4c9f126da3fa1130dfeca0dca9cb61985->enter($__internal_25d8de2c2b27c7a4c6ed3c23956739d4c9f126da3fa1130dfeca0dca9cb61985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_6ad42c2754144486c282999e6f01d814a3a1dd4fe884394744905c58aeaf32f1->leave($__internal_6ad42c2754144486c282999e6f01d814a3a1dd4fe884394744905c58aeaf32f1_prof);

        
        $__internal_25d8de2c2b27c7a4c6ed3c23956739d4c9f126da3fa1130dfeca0dca9cb61985->leave($__internal_25d8de2c2b27c7a4c6ed3c23956739d4c9f126da3fa1130dfeca0dca9cb61985_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
