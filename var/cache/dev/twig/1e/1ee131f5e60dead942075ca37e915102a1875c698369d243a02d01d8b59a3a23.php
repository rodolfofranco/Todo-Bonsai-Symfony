<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_1298f331132aac13e444deb978c9b2241304cfae56fd58649ec7ea41cd441424 extends Twig_Template
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
        $__internal_4ecddeffeea2d5d3597c68f210042bd60e33c22b0fd93b3b22749c3db937fbcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ecddeffeea2d5d3597c68f210042bd60e33c22b0fd93b3b22749c3db937fbcb->enter($__internal_4ecddeffeea2d5d3597c68f210042bd60e33c22b0fd93b3b22749c3db937fbcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_35b02618c029e78fd5bc93b8ec3462e8b96b7044a282763bf3826185e345ac01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b02618c029e78fd5bc93b8ec3462e8b96b7044a282763bf3826185e345ac01->enter($__internal_35b02618c029e78fd5bc93b8ec3462e8b96b7044a282763bf3826185e345ac01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_4ecddeffeea2d5d3597c68f210042bd60e33c22b0fd93b3b22749c3db937fbcb->leave($__internal_4ecddeffeea2d5d3597c68f210042bd60e33c22b0fd93b3b22749c3db937fbcb_prof);

        
        $__internal_35b02618c029e78fd5bc93b8ec3462e8b96b7044a282763bf3826185e345ac01->leave($__internal_35b02618c029e78fd5bc93b8ec3462e8b96b7044a282763bf3826185e345ac01_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
