<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_40fdfccd4f70cbe3f06da1d43dbf359498c9aefc81e7a03c5b5c26ea686db826 extends Twig_Template
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
        $__internal_8237a95956451b22570d4704477688f15be0d49679d657995b72395254da3f49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8237a95956451b22570d4704477688f15be0d49679d657995b72395254da3f49->enter($__internal_8237a95956451b22570d4704477688f15be0d49679d657995b72395254da3f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_6f82db02d9d864a193be4975465936b9b53f040968f0ea7046a56b5d870481d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f82db02d9d864a193be4975465936b9b53f040968f0ea7046a56b5d870481d6->enter($__internal_6f82db02d9d864a193be4975465936b9b53f040968f0ea7046a56b5d870481d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_8237a95956451b22570d4704477688f15be0d49679d657995b72395254da3f49->leave($__internal_8237a95956451b22570d4704477688f15be0d49679d657995b72395254da3f49_prof);

        
        $__internal_6f82db02d9d864a193be4975465936b9b53f040968f0ea7046a56b5d870481d6->leave($__internal_6f82db02d9d864a193be4975465936b9b53f040968f0ea7046a56b5d870481d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
