<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_ba363fbd425dba3ee04e04ebf4e424d68874a07f83cd9b29648e31992d6ef3b3 extends Twig_Template
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
        $__internal_d27612b5f28047371cbc7224a81282fc2f3b89b8986659f35fde47b070650a25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d27612b5f28047371cbc7224a81282fc2f3b89b8986659f35fde47b070650a25->enter($__internal_d27612b5f28047371cbc7224a81282fc2f3b89b8986659f35fde47b070650a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_713d34ff21116a832abdb4744b9cd57305e9141045936551e3f697b942ae3495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_713d34ff21116a832abdb4744b9cd57305e9141045936551e3f697b942ae3495->enter($__internal_713d34ff21116a832abdb4744b9cd57305e9141045936551e3f697b942ae3495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d27612b5f28047371cbc7224a81282fc2f3b89b8986659f35fde47b070650a25->leave($__internal_d27612b5f28047371cbc7224a81282fc2f3b89b8986659f35fde47b070650a25_prof);

        
        $__internal_713d34ff21116a832abdb4744b9cd57305e9141045936551e3f697b942ae3495->leave($__internal_713d34ff21116a832abdb4744b9cd57305e9141045936551e3f697b942ae3495_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
