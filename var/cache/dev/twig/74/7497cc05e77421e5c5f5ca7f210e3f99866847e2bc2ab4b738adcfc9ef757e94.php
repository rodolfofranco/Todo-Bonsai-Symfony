<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_b2c980b809a6b329df0b4dafaf8b8e38d404b763563a567035a535fe0449600f extends Twig_Template
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
        $__internal_1e3e735792e53919b0c3302e03061dcb80d3fc22cc02bd4520f885f7f53d1dc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e3e735792e53919b0c3302e03061dcb80d3fc22cc02bd4520f885f7f53d1dc4->enter($__internal_1e3e735792e53919b0c3302e03061dcb80d3fc22cc02bd4520f885f7f53d1dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_09d072ef52560fc3453e724482aae004a27c42160fa14e6983e370da8cf5c7e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09d072ef52560fc3453e724482aae004a27c42160fa14e6983e370da8cf5c7e9->enter($__internal_09d072ef52560fc3453e724482aae004a27c42160fa14e6983e370da8cf5c7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_1e3e735792e53919b0c3302e03061dcb80d3fc22cc02bd4520f885f7f53d1dc4->leave($__internal_1e3e735792e53919b0c3302e03061dcb80d3fc22cc02bd4520f885f7f53d1dc4_prof);

        
        $__internal_09d072ef52560fc3453e724482aae004a27c42160fa14e6983e370da8cf5c7e9->leave($__internal_09d072ef52560fc3453e724482aae004a27c42160fa14e6983e370da8cf5c7e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
