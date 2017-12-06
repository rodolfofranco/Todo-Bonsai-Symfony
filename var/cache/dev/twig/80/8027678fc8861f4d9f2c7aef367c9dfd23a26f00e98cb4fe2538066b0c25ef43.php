<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_2739c8f4042ad26812381406662874d9be1fa82c762311eddc736483cdbddc64 extends Twig_Template
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
        $__internal_e1ca8565bf753a6fbb0161a6c230ee5890e2eb1e4ee8d2d822bc12a433d829c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1ca8565bf753a6fbb0161a6c230ee5890e2eb1e4ee8d2d822bc12a433d829c1->enter($__internal_e1ca8565bf753a6fbb0161a6c230ee5890e2eb1e4ee8d2d822bc12a433d829c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_67d9f40f2f6f4930744d7ff6cb099c1ece0ec2a653bb651cc5b32b23cbd48a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67d9f40f2f6f4930744d7ff6cb099c1ece0ec2a653bb651cc5b32b23cbd48a52->enter($__internal_67d9f40f2f6f4930744d7ff6cb099c1ece0ec2a653bb651cc5b32b23cbd48a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e1ca8565bf753a6fbb0161a6c230ee5890e2eb1e4ee8d2d822bc12a433d829c1->leave($__internal_e1ca8565bf753a6fbb0161a6c230ee5890e2eb1e4ee8d2d822bc12a433d829c1_prof);

        
        $__internal_67d9f40f2f6f4930744d7ff6cb099c1ece0ec2a653bb651cc5b32b23cbd48a52->leave($__internal_67d9f40f2f6f4930744d7ff6cb099c1ece0ec2a653bb651cc5b32b23cbd48a52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
