<?php

/* register.html.twig */
class __TwigTemplate_7474930df201d59547aa17a7b04c48a0cb948c1b18d6105d07da095421a23b91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "register.html.twig", 1);
        $this->blocks = array(
            'toplinks' => array($this, 'block_toplinks'),
            'links' => array($this, 'block_links'),
            'contenido' => array($this, 'block_contenido'),
            'test' => array($this, 'block_test'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_245b5feaba6ffdbe310aa30bc58095268b14e6041a2df30961db945eda048ad1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_245b5feaba6ffdbe310aa30bc58095268b14e6041a2df30961db945eda048ad1->enter($__internal_245b5feaba6ffdbe310aa30bc58095268b14e6041a2df30961db945eda048ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register.html.twig"));

        $__internal_ee74aa5daf16dbbdc30ab890289f8f2532b11e08644cf0fad36f48746be238a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee74aa5daf16dbbdc30ab890289f8f2532b11e08644cf0fad36f48746be238a2->enter($__internal_ee74aa5daf16dbbdc30ab890289f8f2532b11e08644cf0fad36f48746be238a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_245b5feaba6ffdbe310aa30bc58095268b14e6041a2df30961db945eda048ad1->leave($__internal_245b5feaba6ffdbe310aa30bc58095268b14e6041a2df30961db945eda048ad1_prof);

        
        $__internal_ee74aa5daf16dbbdc30ab890289f8f2532b11e08644cf0fad36f48746be238a2->leave($__internal_ee74aa5daf16dbbdc30ab890289f8f2532b11e08644cf0fad36f48746be238a2_prof);

    }

    // line 3
    public function block_toplinks($context, array $blocks = array())
    {
        $__internal_06c2a62ed2f0d4978c0fe645ccaa99e72d6bb4e9b75cd5b91886b10ce4e8a024 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06c2a62ed2f0d4978c0fe645ccaa99e72d6bb4e9b75cd5b91886b10ce4e8a024->enter($__internal_06c2a62ed2f0d4978c0fe645ccaa99e72d6bb4e9b75cd5b91886b10ce4e8a024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toplinks"));

        $__internal_eaf9b03e2a4d5264b71c7aa2bd7d9f5796e1ff37ee1219df437807b61f23a929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaf9b03e2a4d5264b71c7aa2bd7d9f5796e1ff37ee1219df437807b61f23a929->enter($__internal_eaf9b03e2a4d5264b71c7aa2bd7d9f5796e1ff37ee1219df437807b61f23a929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toplinks"));

        // line 4
        echo "    
   <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
    <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
    <a class=\"mdl-navigation__link\" href=\"/register\"> <i class=\"material-icons\">person_add</i> Sign Up</a>
    <a class=\"mdl-navigation__link show-dialogLogin\" href=\"javascript:void(0)\" id=\"show-dialogLogin\">  <i class=\"material-icons\">person</i>Sign In</a>
    
";
        
        $__internal_eaf9b03e2a4d5264b71c7aa2bd7d9f5796e1ff37ee1219df437807b61f23a929->leave($__internal_eaf9b03e2a4d5264b71c7aa2bd7d9f5796e1ff37ee1219df437807b61f23a929_prof);

        
        $__internal_06c2a62ed2f0d4978c0fe645ccaa99e72d6bb4e9b75cd5b91886b10ce4e8a024->leave($__internal_06c2a62ed2f0d4978c0fe645ccaa99e72d6bb4e9b75cd5b91886b10ce4e8a024_prof);

    }

    // line 12
    public function block_links($context, array $blocks = array())
    {
        $__internal_9a44091dd26a7f9dfc593a801825abe3d6bb7587b91354ce367125ee13be384e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a44091dd26a7f9dfc593a801825abe3d6bb7587b91354ce367125ee13be384e->enter($__internal_9a44091dd26a7f9dfc593a801825abe3d6bb7587b91354ce367125ee13be384e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "links"));

        $__internal_b98f9954fd682a5b4cf4544f1a71a2987972b46354e329297c569e2db0b3df94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b98f9954fd682a5b4cf4544f1a71a2987972b46354e329297c569e2db0b3df94->enter($__internal_b98f9954fd682a5b4cf4544f1a71a2987972b46354e329297c569e2db0b3df94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "links"));

        // line 13
        echo "    
    <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
    <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
    <a class=\"mdl-navigation__link\" href=\"/register\"> <i class=\"material-icons\">person_add</i> Sign Up</a>
    <a class=\"mdl-navigation__link show-dialogLogin\" href=\"javascript:void(0)\" id=\"show-dialogLogin\">  <i class=\"material-icons\">person</i>Sign In</a>
    
";
        
        $__internal_b98f9954fd682a5b4cf4544f1a71a2987972b46354e329297c569e2db0b3df94->leave($__internal_b98f9954fd682a5b4cf4544f1a71a2987972b46354e329297c569e2db0b3df94_prof);

        
        $__internal_9a44091dd26a7f9dfc593a801825abe3d6bb7587b91354ce367125ee13be384e->leave($__internal_9a44091dd26a7f9dfc593a801825abe3d6bb7587b91354ce367125ee13be384e_prof);

    }

    // line 24
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_53eca9c2d84e457e5f0e68081c841edddb42aea196d5d85c9ffd812b7b5859b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53eca9c2d84e457e5f0e68081c841edddb42aea196d5d85c9ffd812b7b5859b0->enter($__internal_53eca9c2d84e457e5f0e68081c841edddb42aea196d5d85c9ffd812b7b5859b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_1e0a22285c6d99eb4b9ac1905e970d1ca3a6d2ce0c0392e80b8ce859d3f594a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e0a22285c6d99eb4b9ac1905e970d1ca3a6d2ce0c0392e80b8ce859d3f594a2->enter($__internal_1e0a22285c6d99eb4b9ac1905e970d1ca3a6d2ce0c0392e80b8ce859d3f594a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 25
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["myRegister"]) ? $context["myRegister"] : $this->getContext($context, "myRegister")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 26
        echo "</br>
</br>
</br>
</br>
<!-- Form para el Register-->
";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["myRegister"]) ? $context["myRegister"] : $this->getContext($context, "myRegister")), 'form_start');
        echo "
";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["myRegister"]) ? $context["myRegister"] : $this->getContext($context, "myRegister")), 'widget');
        echo "
";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["myRegister"]) ? $context["myRegister"] : $this->getContext($context, "myRegister")), 'form_end');
        echo "
";
        
        $__internal_1e0a22285c6d99eb4b9ac1905e970d1ca3a6d2ce0c0392e80b8ce859d3f594a2->leave($__internal_1e0a22285c6d99eb4b9ac1905e970d1ca3a6d2ce0c0392e80b8ce859d3f594a2_prof);

        
        $__internal_53eca9c2d84e457e5f0e68081c841edddb42aea196d5d85c9ffd812b7b5859b0->leave($__internal_53eca9c2d84e457e5f0e68081c841edddb42aea196d5d85c9ffd812b7b5859b0_prof);

    }

    // line 38
    public function block_test($context, array $blocks = array())
    {
        $__internal_6c2327e159d9b30252f22b1874e47675d1db3fe94b0c0e930a50abaabcfd4a00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c2327e159d9b30252f22b1874e47675d1db3fe94b0c0e930a50abaabcfd4a00->enter($__internal_6c2327e159d9b30252f22b1874e47675d1db3fe94b0c0e930a50abaabcfd4a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "test"));

        $__internal_7e48005ab5ea857b2aeccb149bb96f8275c33d3f6a3a193d959e61ba99204e62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e48005ab5ea857b2aeccb149bb96f8275c33d3f6a3a193d959e61ba99204e62->enter($__internal_7e48005ab5ea857b2aeccb149bb96f8275c33d3f6a3a193d959e61ba99204e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "test"));

        echo " 
<!-- Form para el Login-->
<form id=\"form-login\" action=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
              <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
                <label class=\"mdl-textfield__label\" for=\"correo\">Correo</label>
                <input class=\"mdl-textfield__input\" type=\"email\" id=\"correo\" name='_username'>
              </div>
              <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
                <label class=\"mdl-textfield__label\" for=\"clave\">Contraseña</label>
                <input class=\"mdl-textfield__input\" type=\"password\" id=\"clave\" name=\"_password\">
              </div>
            </form>
          <div class=\"mdl-dialog__actions\">
            <button form=\"form-login\" type=\"submit\" class=\"mdl-button\">Login</button>
            <button type=\"button\" class=\"mdl-button close\">Cancelar</button>
          </div>

";
        
        $__internal_7e48005ab5ea857b2aeccb149bb96f8275c33d3f6a3a193d959e61ba99204e62->leave($__internal_7e48005ab5ea857b2aeccb149bb96f8275c33d3f6a3a193d959e61ba99204e62_prof);

        
        $__internal_6c2327e159d9b30252f22b1874e47675d1db3fe94b0c0e930a50abaabcfd4a00->leave($__internal_6c2327e159d9b30252f22b1874e47675d1db3fe94b0c0e930a50abaabcfd4a00_prof);

    }

    public function getTemplateName()
    {
        return "register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 40,  131 => 38,  119 => 33,  115 => 32,  111 => 31,  104 => 26,  102 => 25,  93 => 24,  77 => 13,  68 => 12,  52 => 4,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block toplinks %}
    
   <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
    <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
    <a class=\"mdl-navigation__link\" href=\"/register\"> <i class=\"material-icons\">person_add</i> Sign Up</a>
    <a class=\"mdl-navigation__link show-dialogLogin\" href=\"javascript:void(0)\" id=\"show-dialogLogin\">  <i class=\"material-icons\">person</i>Sign In</a>
    
{% endblock %}

{% block links %}
    
    <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
    <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
    <a class=\"mdl-navigation__link\" href=\"/register\"> <i class=\"material-icons\">person_add</i> Sign Up</a>
    <a class=\"mdl-navigation__link show-dialogLogin\" href=\"javascript:void(0)\" id=\"show-dialogLogin\">  <i class=\"material-icons\">person</i>Sign In</a>
    
{% endblock %}




{% block contenido %}
{% form_theme myRegister 'bootstrap_3_layout.html.twig' %}
</br>
</br>
</br>
</br>
<!-- Form para el Register-->
{{ form_start(myRegister) }}
{{ form_widget(myRegister) }}
{{ form_end(myRegister) }}
{% endblock %}



{% block test %} 
<!-- Form para el Login-->
<form id=\"form-login\" action=\"{{ path('login') }}\" method=\"post\">
              <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
                <label class=\"mdl-textfield__label\" for=\"correo\">Correo</label>
                <input class=\"mdl-textfield__input\" type=\"email\" id=\"correo\" name='_username'>
              </div>
              <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
                <label class=\"mdl-textfield__label\" for=\"clave\">Contraseña</label>
                <input class=\"mdl-textfield__input\" type=\"password\" id=\"clave\" name=\"_password\">
              </div>
            </form>
          <div class=\"mdl-dialog__actions\">
            <button form=\"form-login\" type=\"submit\" class=\"mdl-button\">Login</button>
            <button type=\"button\" class=\"mdl-button close\">Cancelar</button>
          </div>

{% endblock %}




          ", "register.html.twig", "/home/ubuntu/workspace/app/Resources/views/register.html.twig");
    }
}
