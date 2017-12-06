<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_fc9abcb20a4afe17de75a55851aa04d226fae91a9ecf8de642b08493f42edfa9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1d83407b14d7aa3242c95ee073fe1bd2b4923ddf5c6886b6068b4d39997e345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1d83407b14d7aa3242c95ee073fe1bd2b4923ddf5c6886b6068b4d39997e345->enter($__internal_f1d83407b14d7aa3242c95ee073fe1bd2b4923ddf5c6886b6068b4d39997e345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_49d8358684ce4a00ba56bb98c173f3cee930c48081d168d88d84ce3b701cf71b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49d8358684ce4a00ba56bb98c173f3cee930c48081d168d88d84ce3b701cf71b->enter($__internal_49d8358684ce4a00ba56bb98c173f3cee930c48081d168d88d84ce3b701cf71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_f1d83407b14d7aa3242c95ee073fe1bd2b4923ddf5c6886b6068b4d39997e345->leave($__internal_f1d83407b14d7aa3242c95ee073fe1bd2b4923ddf5c6886b6068b4d39997e345_prof);

        
        $__internal_49d8358684ce4a00ba56bb98c173f3cee930c48081d168d88d84ce3b701cf71b->leave($__internal_49d8358684ce4a00ba56bb98c173f3cee930c48081d168d88d84ce3b701cf71b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e52c94c55577f383d943183b0fd1ab258952bf0860e85f55188581fff295c7ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e52c94c55577f383d943183b0fd1ab258952bf0860e85f55188581fff295c7ee->enter($__internal_e52c94c55577f383d943183b0fd1ab258952bf0860e85f55188581fff295c7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_691b1c7db3fc76f035d1e4bb350abc3a0da18fcdd50fa2c7dd17ebb571038c62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_691b1c7db3fc76f035d1e4bb350abc3a0da18fcdd50fa2c7dd17ebb571038c62->enter($__internal_691b1c7db3fc76f035d1e4bb350abc3a0da18fcdd50fa2c7dd17ebb571038c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_691b1c7db3fc76f035d1e4bb350abc3a0da18fcdd50fa2c7dd17ebb571038c62->leave($__internal_691b1c7db3fc76f035d1e4bb350abc3a0da18fcdd50fa2c7dd17ebb571038c62_prof);

        
        $__internal_e52c94c55577f383d943183b0fd1ab258952bf0860e85f55188581fff295c7ee->leave($__internal_e52c94c55577f383d943183b0fd1ab258952bf0860e85f55188581fff295c7ee_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_68af6f36ce53163fe62556662a0d83a6072f2eac2912d12d949e4678bad13e48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68af6f36ce53163fe62556662a0d83a6072f2eac2912d12d949e4678bad13e48->enter($__internal_68af6f36ce53163fe62556662a0d83a6072f2eac2912d12d949e4678bad13e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_49508101691fd4d5dc3127047c8e593eb73af2f38f68dfe66dd06b8f26539524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49508101691fd4d5dc3127047c8e593eb73af2f38f68dfe66dd06b8f26539524->enter($__internal_49508101691fd4d5dc3127047c8e593eb73af2f38f68dfe66dd06b8f26539524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_49508101691fd4d5dc3127047c8e593eb73af2f38f68dfe66dd06b8f26539524->leave($__internal_49508101691fd4d5dc3127047c8e593eb73af2f38f68dfe66dd06b8f26539524_prof);

        
        $__internal_68af6f36ce53163fe62556662a0d83a6072f2eac2912d12d949e4678bad13e48->leave($__internal_68af6f36ce53163fe62556662a0d83a6072f2eac2912d12d949e4678bad13e48_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_492dceb524726376b3bf5b66d4a8bfbe4c1f493cd40d7ba7378d8dd85c783736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_492dceb524726376b3bf5b66d4a8bfbe4c1f493cd40d7ba7378d8dd85c783736->enter($__internal_492dceb524726376b3bf5b66d4a8bfbe4c1f493cd40d7ba7378d8dd85c783736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3746c85e73b010fed0e9cfda11ef945d64cb965547c092f6db4c1b688986593a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3746c85e73b010fed0e9cfda11ef945d64cb965547c092f6db4c1b688986593a->enter($__internal_3746c85e73b010fed0e9cfda11ef945d64cb965547c092f6db4c1b688986593a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3746c85e73b010fed0e9cfda11ef945d64cb965547c092f6db4c1b688986593a->leave($__internal_3746c85e73b010fed0e9cfda11ef945d64cb965547c092f6db4c1b688986593a_prof);

        
        $__internal_492dceb524726376b3bf5b66d4a8bfbe4c1f493cd40d7ba7378d8dd85c783736->leave($__internal_492dceb524726376b3bf5b66d4a8bfbe4c1f493cd40d7ba7378d8dd85c783736_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
