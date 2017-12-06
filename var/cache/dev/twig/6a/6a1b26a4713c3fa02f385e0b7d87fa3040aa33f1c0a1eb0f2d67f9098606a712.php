<?php

/* checkout.html.twig */
class __TwigTemplate_eee3e6000024740a19945f3b267d4ec28f2b215c9420f46732f8d0274e3ff6a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "checkout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'toplinks' => array($this, 'block_toplinks'),
            'links' => array($this, 'block_links'),
            'test' => array($this, 'block_test'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27b5bf21494c747a320b89262ef7472f850595318b07edaa33527a79fbb78902 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27b5bf21494c747a320b89262ef7472f850595318b07edaa33527a79fbb78902->enter($__internal_27b5bf21494c747a320b89262ef7472f850595318b07edaa33527a79fbb78902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "checkout.html.twig"));

        $__internal_08eca35a53924e5a7d86ed83fea3450872d90881b6df8b72d3f80984f5c466d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08eca35a53924e5a7d86ed83fea3450872d90881b6df8b72d3f80984f5c466d7->enter($__internal_08eca35a53924e5a7d86ed83fea3450872d90881b6df8b72d3f80984f5c466d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "checkout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27b5bf21494c747a320b89262ef7472f850595318b07edaa33527a79fbb78902->leave($__internal_27b5bf21494c747a320b89262ef7472f850595318b07edaa33527a79fbb78902_prof);

        
        $__internal_08eca35a53924e5a7d86ed83fea3450872d90881b6df8b72d3f80984f5c466d7->leave($__internal_08eca35a53924e5a7d86ed83fea3450872d90881b6df8b72d3f80984f5c466d7_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a0af9125d0b362da2dfc32f6f1f629ad7d101c9ba9d0ee544898568cd4bda2c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0af9125d0b362da2dfc32f6f1f629ad7d101c9ba9d0ee544898568cd4bda2c9->enter($__internal_a0af9125d0b362da2dfc32f6f1f629ad7d101c9ba9d0ee544898568cd4bda2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f3b60cf1652f45a642b5970b78bdfdc589dbd2203b7c4af244a9a76192c2a69c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b60cf1652f45a642b5970b78bdfdc589dbd2203b7c4af244a9a76192c2a69c->enter($__internal_f3b60cf1652f45a642b5970b78bdfdc589dbd2203b7c4af244a9a76192c2a69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_f3b60cf1652f45a642b5970b78bdfdc589dbd2203b7c4af244a9a76192c2a69c->leave($__internal_f3b60cf1652f45a642b5970b78bdfdc589dbd2203b7c4af244a9a76192c2a69c_prof);

        
        $__internal_a0af9125d0b362da2dfc32f6f1f629ad7d101c9ba9d0ee544898568cd4bda2c9->leave($__internal_a0af9125d0b362da2dfc32f6f1f629ad7d101c9ba9d0ee544898568cd4bda2c9_prof);

    }

    // line 6
    public function block_toplinks($context, array $blocks = array())
    {
        $__internal_db69b00969693f5d0d49a454fce6afcc5eb19f43ac6cd5e93066f75e3d3c327d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db69b00969693f5d0d49a454fce6afcc5eb19f43ac6cd5e93066f75e3d3c327d->enter($__internal_db69b00969693f5d0d49a454fce6afcc5eb19f43ac6cd5e93066f75e3d3c327d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toplinks"));

        $__internal_3b9d3b15cd8a2e033bab41b3dbde03c9b0c46ded492e4ddd8d0e30a998194b63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b9d3b15cd8a2e033bab41b3dbde03c9b0c46ded492e4ddd8d0e30a998194b63->enter($__internal_3b9d3b15cd8a2e033bab41b3dbde03c9b0c46ded492e4ddd8d0e30a998194b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toplinks"));

        // line 7
        echo "    
   ";
        // line 8
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 9
            echo "    <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
    <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
    <a class=\"mdl-navigation__link\" href=\"/register\"> <i class=\"material-icons\">person_add</i> Sign Up</a>
    <a class=\"mdl-navigation__link show-dialogLogin\" href=\"javascript:void(0)\" id=\"show-dialogLogin\">  <i class=\"material-icons\">person</i>Sign In</a>
  ";
        }
        // line 14
        echo "    
    ";
        // line 15
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " 
      <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
      <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
      <a class=\"mdl-navigation__link\" href=\"/getWishlist\"> <i class=\"material-icons\">view_list</i> Wishlist</a>
      <a class=\"mdl-navigation__link\" href=\"/shoppingCart\"> <i class=\"material-icons\">shopping_cart</i>Carrito</a>
      <a class=\"mdl-navigation__link\" href=\"/orders\"> <i class=\"material-icons\">local_shipping</i> Ordenes</a>
      <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Logout</a>
    ";
        }
        // line 22
        echo " 
    
";
        
        $__internal_3b9d3b15cd8a2e033bab41b3dbde03c9b0c46ded492e4ddd8d0e30a998194b63->leave($__internal_3b9d3b15cd8a2e033bab41b3dbde03c9b0c46ded492e4ddd8d0e30a998194b63_prof);

        
        $__internal_db69b00969693f5d0d49a454fce6afcc5eb19f43ac6cd5e93066f75e3d3c327d->leave($__internal_db69b00969693f5d0d49a454fce6afcc5eb19f43ac6cd5e93066f75e3d3c327d_prof);

    }

    // line 26
    public function block_links($context, array $blocks = array())
    {
        $__internal_086dca63a00c7286722a8d4a528dfa66cf90f5c4d05d912449f637889b45c19b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_086dca63a00c7286722a8d4a528dfa66cf90f5c4d05d912449f637889b45c19b->enter($__internal_086dca63a00c7286722a8d4a528dfa66cf90f5c4d05d912449f637889b45c19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "links"));

        $__internal_ea3b31595565ec1f506fe9bfe6107689e90a0bda1a2b58417d982a2052811ffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea3b31595565ec1f506fe9bfe6107689e90a0bda1a2b58417d982a2052811ffe->enter($__internal_ea3b31595565ec1f506fe9bfe6107689e90a0bda1a2b58417d982a2052811ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "links"));

        // line 27
        echo "    
    ";
        // line 28
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 29
            echo "      <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
      <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
      <a class=\"mdl-navigation__link\" href=\"/register\"> <i class=\"material-icons\">person_add</i> Sign Up</a>
      <a class=\"mdl-navigation__link show-dialogLogin\" href=\"javascript:void(0)\" id=\"show-dialogLogin\">  <i class=\"material-icons\">person</i>Sign In</a>
    ";
        }
        // line 34
        echo "    
    ";
        // line 35
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " 
      <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
      <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
      <a class=\"mdl-navigation__link\" href=\"/getWishlist\"> <i class=\"material-icons\">view_list</i> Wishlist</a>
      <a class=\"mdl-navigation__link\" href=\"/shoppingCart\"> <i class=\"material-icons\">shopping_cart</i>Carrito</a>
      <a class=\"mdl-navigation__link\" href=\"/orders\"> <i class=\"material-icons\">local_shipping</i> Ordenes</a>
      <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Logout</a>
    ";
        }
        // line 42
        echo " 
    
";
        
        $__internal_ea3b31595565ec1f506fe9bfe6107689e90a0bda1a2b58417d982a2052811ffe->leave($__internal_ea3b31595565ec1f506fe9bfe6107689e90a0bda1a2b58417d982a2052811ffe_prof);

        
        $__internal_086dca63a00c7286722a8d4a528dfa66cf90f5c4d05d912449f637889b45c19b->leave($__internal_086dca63a00c7286722a8d4a528dfa66cf90f5c4d05d912449f637889b45c19b_prof);

    }

    // line 46
    public function block_test($context, array $blocks = array())
    {
        $__internal_0876d73e912b54ff2a0681d786cb407a705eed20a9fc9014e449802f7ec10f45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0876d73e912b54ff2a0681d786cb407a705eed20a9fc9014e449802f7ec10f45->enter($__internal_0876d73e912b54ff2a0681d786cb407a705eed20a9fc9014e449802f7ec10f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "test"));

        $__internal_f406d475fb18ae1f667112f3cba51aa8fb8f3d2bee1ede71c66c1899d75cad8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f406d475fb18ae1f667112f3cba51aa8fb8f3d2bee1ede71c66c1899d75cad8d->enter($__internal_f406d475fb18ae1f667112f3cba51aa8fb8f3d2bee1ede71c66c1899d75cad8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "test"));

        echo " 

          <form id=\"form-login\" action=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
              <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
                <label class=\"mdl-textfield__label\" for=\"correo\">Correo</label>
                <input class=\"mdl-textfield__input\" type=\"email\" id=\"correo\" name='_username'>
              </div>
              <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
                <label class=\"mdl-textfield__label\" for=\"clave\">Contraseña</label>
                <input class=\"mdl-textfield__input\" type=\"text\" id=\"clave\" name=\"_password\">
              </div>
            </form>
          <div class=\"mdl-dialog__actions\">
            <button form=\"form-login\" type=\"submit\" class=\"mdl-button\">Login</button>
            <button type=\"button\" class=\"mdl-button close\">Cancelar</button>
          </div>

";
        
        $__internal_f406d475fb18ae1f667112f3cba51aa8fb8f3d2bee1ede71c66c1899d75cad8d->leave($__internal_f406d475fb18ae1f667112f3cba51aa8fb8f3d2bee1ede71c66c1899d75cad8d_prof);

        
        $__internal_0876d73e912b54ff2a0681d786cb407a705eed20a9fc9014e449802f7ec10f45->leave($__internal_0876d73e912b54ff2a0681d786cb407a705eed20a9fc9014e449802f7ec10f45_prof);

    }

    public function getTemplateName()
    {
        return "checkout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 48,  159 => 46,  147 => 42,  136 => 35,  133 => 34,  126 => 29,  124 => 28,  121 => 27,  112 => 26,  100 => 22,  89 => 15,  86 => 14,  79 => 9,  77 => 8,  74 => 7,  65 => 6,  52 => 3,  43 => 2,  11 => 1,);
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
{% block stylesheets %}
  {{ parent() }}
{% endblock %}

{% block toplinks %}
    
   {% if not is_granted('IS_AUTHENTICATED_FULLY')%}
    <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
    <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
    <a class=\"mdl-navigation__link\" href=\"/register\"> <i class=\"material-icons\">person_add</i> Sign Up</a>
    <a class=\"mdl-navigation__link show-dialogLogin\" href=\"javascript:void(0)\" id=\"show-dialogLogin\">  <i class=\"material-icons\">person</i>Sign In</a>
  {% endif %}
    
    {% if is_granted('IS_AUTHENTICATED_FULLY') %} 
      <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
      <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
      <a class=\"mdl-navigation__link\" href=\"/getWishlist\"> <i class=\"material-icons\">view_list</i> Wishlist</a>
      <a class=\"mdl-navigation__link\" href=\"/shoppingCart\"> <i class=\"material-icons\">shopping_cart</i>Carrito</a>
      <a class=\"mdl-navigation__link\" href=\"/orders\"> <i class=\"material-icons\">local_shipping</i> Ordenes</a>
      <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Logout</a>
    {% endif %} 
    
{% endblock %}

{% block links %}
    
    {% if not is_granted('IS_AUTHENTICATED_FULLY')%}
      <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
      <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
      <a class=\"mdl-navigation__link\" href=\"/register\"> <i class=\"material-icons\">person_add</i> Sign Up</a>
      <a class=\"mdl-navigation__link show-dialogLogin\" href=\"javascript:void(0)\" id=\"show-dialogLogin\">  <i class=\"material-icons\">person</i>Sign In</a>
    {% endif %}
    
    {% if is_granted('IS_AUTHENTICATED_FULLY') %} 
      <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
      <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
      <a class=\"mdl-navigation__link\" href=\"/getWishlist\"> <i class=\"material-icons\">view_list</i> Wishlist</a>
      <a class=\"mdl-navigation__link\" href=\"/shoppingCart\"> <i class=\"material-icons\">shopping_cart</i>Carrito</a>
      <a class=\"mdl-navigation__link\" href=\"/orders\"> <i class=\"material-icons\">local_shipping</i> Ordenes</a>
      <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Logout</a>
    {% endif %} 
    
{% endblock %}

{% block test %} 

          <form id=\"form-login\" action=\"{{ path('login') }}\" method=\"post\">
              <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
                <label class=\"mdl-textfield__label\" for=\"correo\">Correo</label>
                <input class=\"mdl-textfield__input\" type=\"email\" id=\"correo\" name='_username'>
              </div>
              <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
                <label class=\"mdl-textfield__label\" for=\"clave\">Contraseña</label>
                <input class=\"mdl-textfield__input\" type=\"text\" id=\"clave\" name=\"_password\">
              </div>
            </form>
          <div class=\"mdl-dialog__actions\">
            <button form=\"form-login\" type=\"submit\" class=\"mdl-button\">Login</button>
            <button type=\"button\" class=\"mdl-button close\">Cancelar</button>
          </div>

{% endblock %}", "checkout.html.twig", "/home/ubuntu/workspace/app/Resources/views/checkout.html.twig");
    }
}
