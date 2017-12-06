<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_744f2313507b962d752049ae4bd059d5a381e69ed189d9931b9c563e3f212da9 extends Twig_Template
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
        $__internal_edda121de912e91d7e72364276b6c223249e7b1737b605285d7bd5f453bef6eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edda121de912e91d7e72364276b6c223249e7b1737b605285d7bd5f453bef6eb->enter($__internal_edda121de912e91d7e72364276b6c223249e7b1737b605285d7bd5f453bef6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_62ba14803ceb60dc72520fa4d2b2cc63e5917aef5d223141075cf1faaaa08d5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62ba14803ceb60dc72520fa4d2b2cc63e5917aef5d223141075cf1faaaa08d5f->enter($__internal_62ba14803ceb60dc72520fa4d2b2cc63e5917aef5d223141075cf1faaaa08d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_edda121de912e91d7e72364276b6c223249e7b1737b605285d7bd5f453bef6eb->leave($__internal_edda121de912e91d7e72364276b6c223249e7b1737b605285d7bd5f453bef6eb_prof);

        
        $__internal_62ba14803ceb60dc72520fa4d2b2cc63e5917aef5d223141075cf1faaaa08d5f->leave($__internal_62ba14803ceb60dc72520fa4d2b2cc63e5917aef5d223141075cf1faaaa08d5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
