<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_c13385ea139856d471117f5e16c5d1c3831a830b6ed30f5e89edac540c9b4a91 extends Twig_Template
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
        $__internal_57a908e8a690eface6a46875d4c3c986226706e52c58fde32d42f7120527ecc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57a908e8a690eface6a46875d4c3c986226706e52c58fde32d42f7120527ecc5->enter($__internal_57a908e8a690eface6a46875d4c3c986226706e52c58fde32d42f7120527ecc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_68ccd1d5ad82654df40beb3e2a5adf338c0a880f41d6769bfa5507e35e7c8f87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68ccd1d5ad82654df40beb3e2a5adf338c0a880f41d6769bfa5507e35e7c8f87->enter($__internal_68ccd1d5ad82654df40beb3e2a5adf338c0a880f41d6769bfa5507e35e7c8f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_57a908e8a690eface6a46875d4c3c986226706e52c58fde32d42f7120527ecc5->leave($__internal_57a908e8a690eface6a46875d4c3c986226706e52c58fde32d42f7120527ecc5_prof);

        
        $__internal_68ccd1d5ad82654df40beb3e2a5adf338c0a880f41d6769bfa5507e35e7c8f87->leave($__internal_68ccd1d5ad82654df40beb3e2a5adf338c0a880f41d6769bfa5507e35e7c8f87_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
