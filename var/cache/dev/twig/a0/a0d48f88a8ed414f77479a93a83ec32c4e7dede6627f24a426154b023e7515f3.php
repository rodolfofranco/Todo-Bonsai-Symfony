<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_9eb5e1684f85d4c209494d057ce4ab24edce783152a5b30ce999200c6ca0d836 extends Twig_Template
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
        $__internal_0f6142799442afeca7121f6be70f2ad495ff44254eb508379d5908c285a88bef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f6142799442afeca7121f6be70f2ad495ff44254eb508379d5908c285a88bef->enter($__internal_0f6142799442afeca7121f6be70f2ad495ff44254eb508379d5908c285a88bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_efd3d132d2b2ea0827899fe99b8142bc35a6bc2ee8015243fb1167909d2dbcc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efd3d132d2b2ea0827899fe99b8142bc35a6bc2ee8015243fb1167909d2dbcc6->enter($__internal_efd3d132d2b2ea0827899fe99b8142bc35a6bc2ee8015243fb1167909d2dbcc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0f6142799442afeca7121f6be70f2ad495ff44254eb508379d5908c285a88bef->leave($__internal_0f6142799442afeca7121f6be70f2ad495ff44254eb508379d5908c285a88bef_prof);

        
        $__internal_efd3d132d2b2ea0827899fe99b8142bc35a6bc2ee8015243fb1167909d2dbcc6->leave($__internal_efd3d132d2b2ea0827899fe99b8142bc35a6bc2ee8015243fb1167909d2dbcc6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
