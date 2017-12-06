<?php

/* orders.html.twig */
class __TwigTemplate_b35967bff28fa605a26c7031ccdc54bfb4a2cc45821c5ff8756c87df3325373e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "orders.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'toplinks' => array($this, 'block_toplinks'),
            'links' => array($this, 'block_links'),
            'test' => array($this, 'block_test'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f0f98f2cd116fed35bdde2e5c30e2445243ef7e1b451ae51cbe4be373e0f34e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f0f98f2cd116fed35bdde2e5c30e2445243ef7e1b451ae51cbe4be373e0f34e->enter($__internal_9f0f98f2cd116fed35bdde2e5c30e2445243ef7e1b451ae51cbe4be373e0f34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "orders.html.twig"));

        $__internal_216c489a196fb2f946a9e1f7d7949cb160b03dd0d6c8dda7e50c4959a562de00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_216c489a196fb2f946a9e1f7d7949cb160b03dd0d6c8dda7e50c4959a562de00->enter($__internal_216c489a196fb2f946a9e1f7d7949cb160b03dd0d6c8dda7e50c4959a562de00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "orders.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f0f98f2cd116fed35bdde2e5c30e2445243ef7e1b451ae51cbe4be373e0f34e->leave($__internal_9f0f98f2cd116fed35bdde2e5c30e2445243ef7e1b451ae51cbe4be373e0f34e_prof);

        
        $__internal_216c489a196fb2f946a9e1f7d7949cb160b03dd0d6c8dda7e50c4959a562de00->leave($__internal_216c489a196fb2f946a9e1f7d7949cb160b03dd0d6c8dda7e50c4959a562de00_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_100c7c8cd84d783f161edf09e56e351559c61083d0a327ced617d1e34cc8807d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_100c7c8cd84d783f161edf09e56e351559c61083d0a327ced617d1e34cc8807d->enter($__internal_100c7c8cd84d783f161edf09e56e351559c61083d0a327ced617d1e34cc8807d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_50388f68ae305d7307bd30c0983d8815125516270102212b0e714ba723b7d3e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50388f68ae305d7307bd30c0983d8815125516270102212b0e714ba723b7d3e2->enter($__internal_50388f68ae305d7307bd30c0983d8815125516270102212b0e714ba723b7d3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_50388f68ae305d7307bd30c0983d8815125516270102212b0e714ba723b7d3e2->leave($__internal_50388f68ae305d7307bd30c0983d8815125516270102212b0e714ba723b7d3e2_prof);

        
        $__internal_100c7c8cd84d783f161edf09e56e351559c61083d0a327ced617d1e34cc8807d->leave($__internal_100c7c8cd84d783f161edf09e56e351559c61083d0a327ced617d1e34cc8807d_prof);

    }

    // line 6
    public function block_toplinks($context, array $blocks = array())
    {
        $__internal_74909ebd361ce5ac9aefaec55a73376624ae1d7c652bb51477612aa535d37d25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74909ebd361ce5ac9aefaec55a73376624ae1d7c652bb51477612aa535d37d25->enter($__internal_74909ebd361ce5ac9aefaec55a73376624ae1d7c652bb51477612aa535d37d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toplinks"));

        $__internal_0c077ba33f424560e2ec9c25550bd172dbb26c448c2330a110321cf9837c2b42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c077ba33f424560e2ec9c25550bd172dbb26c448c2330a110321cf9837c2b42->enter($__internal_0c077ba33f424560e2ec9c25550bd172dbb26c448c2330a110321cf9837c2b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toplinks"));

        // line 7
        echo "
   ";
        // line 8
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 9
            echo "    
    ";
            // line 10
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "VE")) {
                // line 11
                echo "    
    ";
                // line 12
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                    echo " 
      <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Inicio</a>
      <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
      <a class=\"mdl-navigation__link\" href=\"/getWishlist\"> <i class=\"material-icons\">view_list</i> Lista de Deseos</a>
      <a class=\"mdl-navigation__link\" href=\"/shoppingCart\"> <i class=\"material-icons\">shopping_cart</i>Carro de Compras</a>
      <a class=\"mdl-navigation__link\" href=\"/orders\"> <i class=\"material-icons\">local_shipping</i> Ordenes</a>
      <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Salir</a>
    ";
                }
                // line 19
                echo " 
    
    ";
            }
            // line 22
            echo "    
    ";
            // line 23
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "CO")) {
                // line 24
                echo "    
    ";
                // line 25
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                    echo " 
      <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Inicio</a>
      <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
      <a class=\"mdl-navigation__link\" href=\"/getWishlist\"> <i class=\"material-icons\">view_list</i> Lista de Deseos</a>
      <a class=\"mdl-navigation__link\" href=\"/shoppingCart\"> <i class=\"material-icons\">shopping_cart</i>Carro de Compras</a>
      <a class=\"mdl-navigation__link\" href=\"/orders\"> <i class=\"material-icons\">local_shipping</i> Ordenes</a>
      <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Salir</a>
    ";
                }
                // line 32
                echo " 
    
    ";
            }
            // line 35
            echo "    
    ";
            // line 36
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "US")) {
                // line 37
                echo "    
    ";
                // line 38
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                    echo " 
      <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
      <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
      <a class=\"mdl-navigation__link\" href=\"/getWishlist\"> <i class=\"material-icons\">view_list</i> Wishlist</a>
      <a class=\"mdl-navigation__link\" href=\"/shoppingCart\"> <i class=\"material-icons\">shopping_cart</i>Shopping Cart</a>
      <a class=\"mdl-navigation__link\" href=\"/orders\"> <i class=\"material-icons\">local_shipping</i> Orders</a>
      <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Logout</a>
    ";
                }
                // line 45
                echo " 
    
    ";
            }
            // line 48
            echo "    
    ";
            // line 49
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "EN")) {
                // line 50
                echo "    
    ";
                // line 51
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                    echo " 
      <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
      <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
      <a class=\"mdl-navigation__link\" href=\"/getWishlist\"> <i class=\"material-icons\">view_list</i> Wishlist</a>
      <a class=\"mdl-navigation__link\" href=\"/shoppingCart\"> <i class=\"material-icons\">shopping_cart</i>Shopping Cart</a>
      <a class=\"mdl-navigation__link\" href=\"/orders\"> <i class=\"material-icons\">local_shipping</i> Orders</a>
      <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Logout</a>
    ";
                }
                // line 58
                echo " 
    
    ";
            }
            // line 61
            echo "    
    ";
        } else {
            // line 63
            echo "
    <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
    <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
    <a class=\"mdl-navigation__link\" href=\"/register\"> <i class=\"material-icons\">person_add</i> Sign Up</a>
    <a class=\"mdl-navigation__link show-dialogLogin\" href=\"javascript:void(0)\" id=\"show-dialogLogin\">  <i class=\"material-icons\">person</i>Sign In</a>
    
    ";
        }
        // line 70
        echo "    
";
        
        $__internal_0c077ba33f424560e2ec9c25550bd172dbb26c448c2330a110321cf9837c2b42->leave($__internal_0c077ba33f424560e2ec9c25550bd172dbb26c448c2330a110321cf9837c2b42_prof);

        
        $__internal_74909ebd361ce5ac9aefaec55a73376624ae1d7c652bb51477612aa535d37d25->leave($__internal_74909ebd361ce5ac9aefaec55a73376624ae1d7c652bb51477612aa535d37d25_prof);

    }

    // line 73
    public function block_links($context, array $blocks = array())
    {
        $__internal_b5ce46c8dffd864de2c1c235f5e08a44d987afacc6e9b8b08c844d450bb1bc69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5ce46c8dffd864de2c1c235f5e08a44d987afacc6e9b8b08c844d450bb1bc69->enter($__internal_b5ce46c8dffd864de2c1c235f5e08a44d987afacc6e9b8b08c844d450bb1bc69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "links"));

        $__internal_d341a3d8174820943eaaaed66d25ef761c4addd40d46c6e457d0687725097d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d341a3d8174820943eaaaed66d25ef761c4addd40d46c6e457d0687725097d9a->enter($__internal_d341a3d8174820943eaaaed66d25ef761c4addd40d46c6e457d0687725097d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "links"));

        // line 74
        echo "    ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 75
            echo "    
    ";
            // line 76
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "VE")) {
                // line 77
                echo "    
    ";
                // line 78
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                    echo " 
      <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Inicio</a>
      <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
      <a class=\"mdl-navigation__link\" href=\"/getWishlist\"> <i class=\"material-icons\">view_list</i> Lista de Deseos</a>
      <a class=\"mdl-navigation__link\" href=\"/shoppingCart\"> <i class=\"material-icons\">shopping_cart</i>Carro de Compras</a>
      <a class=\"mdl-navigation__link\" href=\"/orders\"> <i class=\"material-icons\">local_shipping</i> Ordenes</a>
      <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Salir</a>
    ";
                }
                // line 85
                echo " 
    
    ";
            }
            // line 88
            echo "    
    ";
            // line 89
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "CO")) {
                // line 90
                echo "    
    ";
                // line 91
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                    echo " 
      <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Inicio</a>
      <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
      <a class=\"mdl-navigation__link\" href=\"/getWishlist\"> <i class=\"material-icons\">view_list</i> Lista de Deseos</a>
      <a class=\"mdl-navigation__link\" href=\"/shoppingCart\"> <i class=\"material-icons\">shopping_cart</i>Carro de Compras</a>
      <a class=\"mdl-navigation__link\" href=\"/orders\"> <i class=\"material-icons\">local_shipping</i> Ordenes</a>
      <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Salir</a>
    ";
                }
                // line 98
                echo " 
    
    ";
            }
            // line 101
            echo "    
    ";
            // line 102
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "US")) {
                // line 103
                echo "    
    ";
                // line 104
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                    echo " 
      <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
      <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
      <a class=\"mdl-navigation__link\" href=\"/getWishlist\"> <i class=\"material-icons\">view_list</i> Wishlist</a>
      <a class=\"mdl-navigation__link\" href=\"/shoppingCart\"> <i class=\"material-icons\">shopping_cart</i>Shopping Cart</a>
      <a class=\"mdl-navigation__link\" href=\"/orders\"> <i class=\"material-icons\">local_shipping</i> Orders</a>
      <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Logout</a>
    ";
                }
                // line 111
                echo " 
    
    ";
            }
            // line 114
            echo "    
    ";
            // line 115
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "EN")) {
                // line 116
                echo "    
    ";
                // line 117
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                    echo " 
      <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
      <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
      <a class=\"mdl-navigation__link\" href=\"/getWishlist\"> <i class=\"material-icons\">view_list</i> Wishlist</a>
      <a class=\"mdl-navigation__link\" href=\"/shoppingCart\"> <i class=\"material-icons\">shopping_cart</i>Shopping Cart</a>
      <a class=\"mdl-navigation__link\" href=\"/orders\"> <i class=\"material-icons\">local_shipping</i> Orders</a>
      <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Logout</a>
    ";
                }
                // line 124
                echo " 
    
    ";
            }
            // line 127
            echo "    
    ";
        } else {
            // line 129
            echo "
    <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
    <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
    <a class=\"mdl-navigation__link\" href=\"/register\"> <i class=\"material-icons\">person_add</i> Sign Up</a>
    <a class=\"mdl-navigation__link show-dialogLogin\" href=\"javascript:void(0)\" id=\"show-dialogLogin\">  <i class=\"material-icons\">person</i>Sign In</a>
    
    ";
        }
        // line 136
        echo "    
";
        
        $__internal_d341a3d8174820943eaaaed66d25ef761c4addd40d46c6e457d0687725097d9a->leave($__internal_d341a3d8174820943eaaaed66d25ef761c4addd40d46c6e457d0687725097d9a_prof);

        
        $__internal_b5ce46c8dffd864de2c1c235f5e08a44d987afacc6e9b8b08c844d450bb1bc69->leave($__internal_b5ce46c8dffd864de2c1c235f5e08a44d987afacc6e9b8b08c844d450bb1bc69_prof);

    }

    // line 140
    public function block_test($context, array $blocks = array())
    {
        $__internal_a04e52993c2de46e73d6834b97e1872fe75d1cf61017a7ed9913d885ffd30305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a04e52993c2de46e73d6834b97e1872fe75d1cf61017a7ed9913d885ffd30305->enter($__internal_a04e52993c2de46e73d6834b97e1872fe75d1cf61017a7ed9913d885ffd30305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "test"));

        $__internal_b85f1f5cce91d795c3b9c9e869beceadd99224eb23746c7ce61ce10f1ee43cff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b85f1f5cce91d795c3b9c9e869beceadd99224eb23746c7ce61ce10f1ee43cff->enter($__internal_b85f1f5cce91d795c3b9c9e869beceadd99224eb23746c7ce61ce10f1ee43cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "test"));

        echo " 

          <form id=\"form-login\" action=\"";
        // line 142
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
        
        $__internal_b85f1f5cce91d795c3b9c9e869beceadd99224eb23746c7ce61ce10f1ee43cff->leave($__internal_b85f1f5cce91d795c3b9c9e869beceadd99224eb23746c7ce61ce10f1ee43cff_prof);

        
        $__internal_a04e52993c2de46e73d6834b97e1872fe75d1cf61017a7ed9913d885ffd30305->leave($__internal_a04e52993c2de46e73d6834b97e1872fe75d1cf61017a7ed9913d885ffd30305_prof);

    }

    // line 159
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_071fd815f186d6a8e20d7b8ac9faa4772439078397dc89792e057441a46ddff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_071fd815f186d6a8e20d7b8ac9faa4772439078397dc89792e057441a46ddff8->enter($__internal_071fd815f186d6a8e20d7b8ac9faa4772439078397dc89792e057441a46ddff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_a9dddadf419df9d80b81779ec4de7dfd578aa3afb8f40836619ad4cad173bc05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9dddadf419df9d80b81779ec4de7dfd578aa3afb8f40836619ad4cad173bc05->enter($__internal_a9dddadf419df9d80b81779ec4de7dfd578aa3afb8f40836619ad4cad173bc05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 160
        echo "
";
        // line 161
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "VE")) {
            // line 162
            echo "<h2>Ordenes</h2>
";
        }
        // line 164
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "CO")) {
            // line 165
            echo "<h2>Ordenes</h2>
";
        }
        // line 167
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "US")) {
            // line 168
            echo "<h2>Orders</h2>
";
        }
        // line 170
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "EN")) {
            // line 171
            echo "<h2>Orders</h2>
";
        }
        // line 173
        echo "
<style>
  .table>tbody>tr>td, .table>tfoot>tr>td{
    vertical-align: middle;
}
@media screen and (max-width: 600px) {
    table#cart tbody td .form-control{
\t\twidth:20%;
\t\tdisplay: inline !important;
\t}
\t.actions .btn{
\t\twidth:36%;
\t\tmargin:1.5em 0;
\t}
\t
\t.actions .btn-info{
\t\tfloat:left;
\t}
\t.actions .btn-danger{
\t\tfloat:right;
\t}
\t
\ttable#cart thead { display: none; }
\ttable#cart tbody td { display: block; padding: .6rem; min-width:320px;}
\ttable#cart tbody tr td:first-child { background: #333; color: #fff; }
\ttable#cart tbody td:before {
\t\tcontent: attr(data-th); font-weight: bold;
\t\tdisplay: inline-block; width: 8rem;
\t}
\t
\t
\t
\ttable#cart tfoot td{display:block; }
\ttable#cart tfoot td .btn{display:block;}
\t
}

</style>

";
        // line 212
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "US")) {
            // line 213
            echo "<div class=\"card\" style=\"\">
<div class=\"container\">
\t<table id=\"cart\" class=\"table table-hover table-condensed\">
    \t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th style=\"width:55%\" class=\"\">Order</th>
\t\t\t\t\t\t\t<th style=\"width:15%\" class=\"\">Date and Time</th>
\t\t\t\t\t\t\t<th style=\"width:15%\" class=\"\">Total</th>
\t\t\t\t\t\t\t<th style=\"width:15%\" class=\"text-center center-text\">Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t
\t\t\t\t";
            // line 226
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")));
            foreach ($context['_seq'] as $context["key"] => $context["orden"]) {
                // line 227
                echo "\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-th=\"Product\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 hidden-xs\"><h3 class=\"nomargin\">";
                // line 231
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "</h3>\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">

\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"collapseExample";
                // line 235
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                // line 237
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
                foreach ($context['_seq'] as $context["key1"] => $context["products"]) {
                    // line 238
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["products"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 239
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 240
                        if (($context["key"] == $context["key1"])) {
                            // line 241
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\" style=\"padding-top:15px\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-3 hidden-xs\"><img src=\"";
                            // line 242
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                            echo "\" alt=\"...\" class=\"img-responsive\" width=\"50px\" height=\"50px\"/></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"nomargin\">";
                            // line 244
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                            echo " <p>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "descripcion", array()), "html", null, true);
                            echo " <h5>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "precio", array()), "html", null, true);
                            echo " \$</h5></p></h6>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 250
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 251
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key1'], $context['products'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 252
                echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td> <p>";
                // line 259
                echo twig_escape_filter($this->env, $this->getAttribute($context["orden"], "fecha", array()), "html", null, true);
                echo "</p></td>
\t\t\t\t\t\t\t<td data-th=\"Price\"><h4>";
                // line 260
                echo twig_escape_filter($this->env, $this->getAttribute($context["orden"], "montoTotal", array()), "html", null, true);
                echo " \$</h4></td>
\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-th=\"Acciones\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<button class=\"btn\" id=\"botonOrden";
                // line 266
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseExample";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
\t\t\t\t\t\t\t\t\t\t  <i class=\"material-icons\">list</i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"botonOrden";
                // line 269
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\tDisplay Order
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<form action=\"";
                // line 274
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cancelarOrden", array("id" => $this->getAttribute($context["orden"], "id", array()))), "html", null, true);
                echo "\" method=\"POST\" >
\t\t\t\t\t\t\t\t<button id=\"botonCancel";
                // line 275
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" class=\"btn btn-danger\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t  <i class=\"material-icons\">cancel</i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"botonCancel";
                // line 280
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\tCancel Order
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['orden'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            echo "\t\t\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t
\t

\t\t\t\t</table>
</div>
</div>
\t<br>
\t<br>
";
        }
        // line 300
        echo "
";
        // line 301
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "EN")) {
            // line 302
            echo "<div class=\"card\" style=\"\">
<div class=\"container\">
\t<table id=\"cart\" class=\"table table-hover table-condensed\">
    \t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th style=\"width:55%\" class=\"\">Order</th>
\t\t\t\t\t\t\t<th style=\"width:15%\" class=\"\">Date and Time</th>
\t\t\t\t\t\t\t<th style=\"width:15%\" class=\"\">Total</th>
\t\t\t\t\t\t\t<th style=\"width:15%\" class=\"text-center center-text\">Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t
\t\t\t\t";
            // line 315
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")));
            foreach ($context['_seq'] as $context["key"] => $context["orden"]) {
                // line 316
                echo "\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-th=\"Product\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 hidden-xs\"><h3 class=\"nomargin\">";
                // line 320
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "</h3>\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"collapseExample";
                // line 323
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                // line 325
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
                foreach ($context['_seq'] as $context["key1"] => $context["products"]) {
                    // line 326
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["products"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 327
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["precio"] = ($this->getAttribute($context["product"], "precio", array()) * 0.76);
                        // line 328
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (($context["key"] == $context["key1"])) {
                            // line 329
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\" style=\"padding-top:15px\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-3 hidden-xs\"><img src=\"";
                            // line 330
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                            echo "\" alt=\"...\" class=\"img-responsive\" width=\"50px\" height=\"50px\"/></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"nomargin\">";
                            // line 332
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                            echo " <p>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "descripcion", array()), "html", null, true);
                            echo " <h5>";
                            echo twig_escape_filter($this->env, (isset($context["precio"]) ? $context["precio"] : $this->getContext($context, "precio")), "html", null, true);
                            echo " £</h5></p></h6>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 338
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 339
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key1'], $context['products'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 340
                echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td> <p>";
                // line 347
                echo twig_escape_filter($this->env, $this->getAttribute($context["orden"], "fecha", array()), "html", null, true);
                echo "</p></td>
\t\t\t\t\t\t\t<td data-th=\"Price\"><h4>";
                // line 348
                echo twig_escape_filter($this->env, ($this->getAttribute($context["orden"], "montoTotal", array()) * 0.76), "html", null, true);
                echo " £</h4></td>
\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-th=\"Acciones\">
\t\t\t\t\t\t\t\t<button class=\"btn\" id=\"botonOrden";
                // line 353
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseExample";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
\t\t\t\t\t\t\t\t\t\t  <i class=\"material-icons\">list</i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"botonOrden";
                // line 356
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\tDisplay Order
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<form action=\"";
                // line 361
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cancelarOrden", array("id" => $this->getAttribute($context["orden"], "id", array()))), "html", null, true);
                echo "\" method=\"POST\" >
\t\t\t\t\t\t\t\t<button class=\"btn btn-danger\" id=\"botonCancel";
                // line 362
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t  <i class=\"material-icons\">cancel</i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"botonCancel";
                // line 367
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\tCancel Order
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['orden'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 376
            echo "\t\t\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t
\t

\t\t\t\t</table>
</div>
</div>
\t<br>
\t<br>
";
        }
        // line 387
        echo "
";
        // line 388
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "VE")) {
            // line 389
            echo "<div class=\"card\" style=\"\">
<div class=\"container\">
\t<table id=\"cart\" class=\"table table-hover table-condensed\">
    \t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th style=\"width:55%\" class=\"\">Orden</th>
\t\t\t\t\t\t\t<th style=\"width:15%\" class=\"\">Hora y Fecha</th>
\t\t\t\t\t\t\t<th style=\"width:15%\" class=\"\">Monto Total</th>
\t\t\t\t\t\t\t<th style=\"width:15%\" class=\"text-center center-text\">Acciones</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t
\t\t\t\t";
            // line 402
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")));
            foreach ($context['_seq'] as $context["key"] => $context["orden"]) {
                // line 403
                echo "\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-th=\"Product\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 hidden-xs\"><h3 class=\"nomargin\">";
                // line 407
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "</h3>\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">

\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"collapseExample";
                // line 411
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                // line 413
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
                foreach ($context['_seq'] as $context["key1"] => $context["products"]) {
                    // line 414
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["products"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 415
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["precio"] = ($this->getAttribute($context["product"], "precio", array()) * 35000);
                        // line 416
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (($context["key"] == $context["key1"])) {
                            // line 417
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\" style=\"padding-top:15px\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-3 hidden-xs\"><img src=\"";
                            // line 418
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                            echo "\" alt=\"...\" class=\"img-responsive\" width=\"50px\" height=\"50px\"/></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"nomargin\">";
                            // line 420
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                            echo " <p>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "descripcion", array()), "html", null, true);
                            echo " <h5>";
                            echo twig_escape_filter($this->env, (isset($context["precio"]) ? $context["precio"] : $this->getContext($context, "precio")), "html", null, true);
                            echo " BsF</h5></p></h6>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 426
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 427
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key1'], $context['products'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 428
                echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td> <p>";
                // line 435
                echo twig_escape_filter($this->env, $this->getAttribute($context["orden"], "fecha", array()), "html", null, true);
                echo "</p></td>
\t\t\t\t\t\t\t<td data-th=\"Price\"><h4>";
                // line 436
                echo twig_escape_filter($this->env, ($this->getAttribute($context["orden"], "montoTotal", array()) * 35000), "html", null, true);
                echo " BsF</h4></td>
\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-th=\"Acciones\">
\t\t\t\t\t\t\t\t<button class=\"btn\" id=\"botonOrden";
                // line 441
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseExample";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
\t\t\t\t\t\t\t\t\t\t  <i class=\"material-icons\">list</i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"botonOrden";
                // line 444
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\tVer Orden
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<form action=\"";
                // line 449
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cancelarOrden", array("id" => $this->getAttribute($context["orden"], "id", array()))), "html", null, true);
                echo "\" method=\"POST\" >
\t\t\t\t\t\t\t\t<button class=\"btn btn-danger\" id=\"botonCancel";
                // line 450
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " \"type=\"submit\">
\t\t\t\t\t\t\t\t\t\t  <i class=\"material-icons\">cancel</i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"botonCancel";
                // line 455
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\tCancelar Orden
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['orden'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 464
            echo "\t\t\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t
\t

\t\t\t\t</table>
</div>
</div>
\t<br>
\t<br>
";
        }
        // line 475
        echo "
";
        // line 476
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "CO")) {
            // line 477
            echo "<div class=\"card\" style=\"\">
<div class=\"container\">
\t<table id=\"cart\" class=\"table table-hover table-condensed\">
    \t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th style=\"width:55%\" class=\"\">Orden</th>
\t\t\t\t\t\t\t<th style=\"width:15%\" class=\"\">Hora y Fecha</th>
\t\t\t\t\t\t\t<th style=\"width:15%\" class=\"\">Monto Total</th>
\t\t\t\t\t\t\t<th style=\"width:15%\" class=\"text-center center-text\">Acciones</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t
\t\t\t\t";
            // line 490
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ordenes"]) ? $context["ordenes"] : $this->getContext($context, "ordenes")));
            foreach ($context['_seq'] as $context["key"] => $context["orden"]) {
                // line 491
                echo "\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-th=\"Product\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 hidden-xs\"><h3 class=\"nomargin\">";
                // line 495
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "</h3>\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"collapseExample";
                // line 498
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                // line 500
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
                foreach ($context['_seq'] as $context["key1"] => $context["products"]) {
                    // line 501
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["products"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 502
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["precio"] = ($this->getAttribute($context["product"], "precio", array()) * 2977.99);
                        // line 503
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (($context["key"] == $context["key1"])) {
                            // line 504
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\" style=\"padding-top:15px\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-3 hidden-xs\"><img src=\"";
                            // line 505
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                            echo "\" alt=\"...\" class=\"img-responsive\" width=\"50px\" height=\"50px\"/></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"nomargin\">";
                            // line 507
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                            echo " <p>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "descripcion", array()), "html", null, true);
                            echo " <h5>";
                            echo twig_escape_filter($this->env, (isset($context["precio"]) ? $context["precio"] : $this->getContext($context, "precio")), "html", null, true);
                            echo " BsF</h5></p></h6>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 513
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 514
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key1'], $context['products'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 515
                echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td> <p>";
                // line 522
                echo twig_escape_filter($this->env, $this->getAttribute($context["orden"], "fecha", array()), "html", null, true);
                echo "</p></td>
\t\t\t\t\t\t\t<td data-th=\"Price\"><h4>";
                // line 523
                echo twig_escape_filter($this->env, ($this->getAttribute($context["orden"], "montoTotal", array()) * 2977.99), "html", null, true);
                echo " BsF</h4></td>
\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-th=\"Acciones\">
\t\t\t\t\t\t\t\t<button class=\"btn\" id=\"botonOrden";
                // line 528
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseExample";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
\t\t\t\t\t\t\t\t\t\t  <i class=\"material-icons\">list</i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"botonOrden";
                // line 531
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\tVer Orden
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<form action=\"";
                // line 536
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cancelarOrden", array("id" => $this->getAttribute($context["orden"], "id", array()))), "html", null, true);
                echo "\" method=\"POST\" >
\t\t\t\t\t\t\t\t<button class=\"btn btn-danger\" id=\"botonCancel";
                // line 537
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t  <i class=\"material-icons\">cancel</i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"botonCancel";
                // line 542
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\tCancelar Orden
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['orden'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 551
            echo "\t\t\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t
\t

\t\t\t\t</table>
</div>
</div>
\t<br>
\t<br>
";
        }
        // line 562
        echo "


";
        
        $__internal_a9dddadf419df9d80b81779ec4de7dfd578aa3afb8f40836619ad4cad173bc05->leave($__internal_a9dddadf419df9d80b81779ec4de7dfd578aa3afb8f40836619ad4cad173bc05_prof);

        
        $__internal_071fd815f186d6a8e20d7b8ac9faa4772439078397dc89792e057441a46ddff8->leave($__internal_071fd815f186d6a8e20d7b8ac9faa4772439078397dc89792e057441a46ddff8_prof);

    }

    public function getTemplateName()
    {
        return "orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1110 => 562,  1097 => 551,  1082 => 542,  1074 => 537,  1070 => 536,  1062 => 531,  1054 => 528,  1046 => 523,  1042 => 522,  1033 => 515,  1027 => 514,  1021 => 513,  1008 => 507,  1003 => 505,  1000 => 504,  997 => 503,  994 => 502,  989 => 501,  985 => 500,  980 => 498,  974 => 495,  968 => 491,  964 => 490,  949 => 477,  947 => 476,  944 => 475,  931 => 464,  916 => 455,  908 => 450,  904 => 449,  896 => 444,  888 => 441,  880 => 436,  876 => 435,  867 => 428,  861 => 427,  855 => 426,  842 => 420,  837 => 418,  834 => 417,  831 => 416,  828 => 415,  823 => 414,  819 => 413,  814 => 411,  807 => 407,  801 => 403,  797 => 402,  782 => 389,  780 => 388,  777 => 387,  764 => 376,  749 => 367,  741 => 362,  737 => 361,  729 => 356,  721 => 353,  713 => 348,  709 => 347,  700 => 340,  694 => 339,  688 => 338,  675 => 332,  670 => 330,  667 => 329,  664 => 328,  661 => 327,  656 => 326,  652 => 325,  647 => 323,  641 => 320,  635 => 316,  631 => 315,  616 => 302,  614 => 301,  611 => 300,  598 => 289,  583 => 280,  575 => 275,  571 => 274,  563 => 269,  555 => 266,  546 => 260,  542 => 259,  533 => 252,  527 => 251,  521 => 250,  508 => 244,  503 => 242,  500 => 241,  498 => 240,  495 => 239,  490 => 238,  486 => 237,  481 => 235,  474 => 231,  468 => 227,  464 => 226,  449 => 213,  447 => 212,  406 => 173,  402 => 171,  400 => 170,  396 => 168,  394 => 167,  390 => 165,  388 => 164,  384 => 162,  382 => 161,  379 => 160,  370 => 159,  344 => 142,  332 => 140,  321 => 136,  312 => 129,  308 => 127,  303 => 124,  292 => 117,  289 => 116,  287 => 115,  284 => 114,  279 => 111,  268 => 104,  265 => 103,  263 => 102,  260 => 101,  255 => 98,  244 => 91,  241 => 90,  239 => 89,  236 => 88,  231 => 85,  220 => 78,  217 => 77,  215 => 76,  212 => 75,  209 => 74,  200 => 73,  189 => 70,  180 => 63,  176 => 61,  171 => 58,  160 => 51,  157 => 50,  155 => 49,  152 => 48,  147 => 45,  136 => 38,  133 => 37,  131 => 36,  128 => 35,  123 => 32,  112 => 25,  109 => 24,  107 => 23,  104 => 22,  99 => 19,  88 => 12,  85 => 11,  83 => 10,  80 => 9,  78 => 8,  75 => 7,  66 => 6,  53 => 3,  44 => 2,  11 => 1,);
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

   {% if app.user %}
    
    {% if app.user.pais == \"VE\" %}
    
    {% if is_granted('IS_AUTHENTICATED_FULLY') %} 
      <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Inicio</a>
      <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
      <a class=\"mdl-navigation__link\" href=\"/getWishlist\"> <i class=\"material-icons\">view_list</i> Lista de Deseos</a>
      <a class=\"mdl-navigation__link\" href=\"/shoppingCart\"> <i class=\"material-icons\">shopping_cart</i>Carro de Compras</a>
      <a class=\"mdl-navigation__link\" href=\"/orders\"> <i class=\"material-icons\">local_shipping</i> Ordenes</a>
      <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Salir</a>
    {% endif %} 
    
    {% endif %}
    
    {% if app.user.pais == \"CO\" %}
    
    {% if is_granted('IS_AUTHENTICATED_FULLY') %} 
      <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Inicio</a>
      <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
      <a class=\"mdl-navigation__link\" href=\"/getWishlist\"> <i class=\"material-icons\">view_list</i> Lista de Deseos</a>
      <a class=\"mdl-navigation__link\" href=\"/shoppingCart\"> <i class=\"material-icons\">shopping_cart</i>Carro de Compras</a>
      <a class=\"mdl-navigation__link\" href=\"/orders\"> <i class=\"material-icons\">local_shipping</i> Ordenes</a>
      <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Salir</a>
    {% endif %} 
    
    {% endif %}
    
    {% if app.user.pais == \"US\" %}
    
    {% if is_granted('IS_AUTHENTICATED_FULLY') %} 
      <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
      <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
      <a class=\"mdl-navigation__link\" href=\"/getWishlist\"> <i class=\"material-icons\">view_list</i> Wishlist</a>
      <a class=\"mdl-navigation__link\" href=\"/shoppingCart\"> <i class=\"material-icons\">shopping_cart</i>Shopping Cart</a>
      <a class=\"mdl-navigation__link\" href=\"/orders\"> <i class=\"material-icons\">local_shipping</i> Orders</a>
      <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Logout</a>
    {% endif %} 
    
    {% endif %}
    
    {% if app.user.pais == \"EN\" %}
    
    {% if is_granted('IS_AUTHENTICATED_FULLY') %} 
      <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
      <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
      <a class=\"mdl-navigation__link\" href=\"/getWishlist\"> <i class=\"material-icons\">view_list</i> Wishlist</a>
      <a class=\"mdl-navigation__link\" href=\"/shoppingCart\"> <i class=\"material-icons\">shopping_cart</i>Shopping Cart</a>
      <a class=\"mdl-navigation__link\" href=\"/orders\"> <i class=\"material-icons\">local_shipping</i> Orders</a>
      <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Logout</a>
    {% endif %} 
    
    {% endif %}
    
    {% else %}

    <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
    <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
    <a class=\"mdl-navigation__link\" href=\"/register\"> <i class=\"material-icons\">person_add</i> Sign Up</a>
    <a class=\"mdl-navigation__link show-dialogLogin\" href=\"javascript:void(0)\" id=\"show-dialogLogin\">  <i class=\"material-icons\">person</i>Sign In</a>
    
    {% endif %}
    
{% endblock %}

{% block links %}
    {% if app.user %}
    
    {% if app.user.pais == \"VE\" %}
    
    {% if is_granted('IS_AUTHENTICATED_FULLY') %} 
      <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Inicio</a>
      <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
      <a class=\"mdl-navigation__link\" href=\"/getWishlist\"> <i class=\"material-icons\">view_list</i> Lista de Deseos</a>
      <a class=\"mdl-navigation__link\" href=\"/shoppingCart\"> <i class=\"material-icons\">shopping_cart</i>Carro de Compras</a>
      <a class=\"mdl-navigation__link\" href=\"/orders\"> <i class=\"material-icons\">local_shipping</i> Ordenes</a>
      <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Salir</a>
    {% endif %} 
    
    {% endif %}
    
    {% if app.user.pais == \"CO\" %}
    
    {% if is_granted('IS_AUTHENTICATED_FULLY') %} 
      <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Inicio</a>
      <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
      <a class=\"mdl-navigation__link\" href=\"/getWishlist\"> <i class=\"material-icons\">view_list</i> Lista de Deseos</a>
      <a class=\"mdl-navigation__link\" href=\"/shoppingCart\"> <i class=\"material-icons\">shopping_cart</i>Carro de Compras</a>
      <a class=\"mdl-navigation__link\" href=\"/orders\"> <i class=\"material-icons\">local_shipping</i> Ordenes</a>
      <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Salir</a>
    {% endif %} 
    
    {% endif %}
    
    {% if app.user.pais == \"US\" %}
    
    {% if is_granted('IS_AUTHENTICATED_FULLY') %} 
      <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
      <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
      <a class=\"mdl-navigation__link\" href=\"/getWishlist\"> <i class=\"material-icons\">view_list</i> Wishlist</a>
      <a class=\"mdl-navigation__link\" href=\"/shoppingCart\"> <i class=\"material-icons\">shopping_cart</i>Shopping Cart</a>
      <a class=\"mdl-navigation__link\" href=\"/orders\"> <i class=\"material-icons\">local_shipping</i> Orders</a>
      <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Logout</a>
    {% endif %} 
    
    {% endif %}
    
    {% if app.user.pais == \"EN\" %}
    
    {% if is_granted('IS_AUTHENTICATED_FULLY') %} 
      <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
      <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
      <a class=\"mdl-navigation__link\" href=\"/getWishlist\"> <i class=\"material-icons\">view_list</i> Wishlist</a>
      <a class=\"mdl-navigation__link\" href=\"/shoppingCart\"> <i class=\"material-icons\">shopping_cart</i>Shopping Cart</a>
      <a class=\"mdl-navigation__link\" href=\"/orders\"> <i class=\"material-icons\">local_shipping</i> Orders</a>
      <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Logout</a>
    {% endif %} 
    
    {% endif %}
    
    {% else %}

    <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
    <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
    <a class=\"mdl-navigation__link\" href=\"/register\"> <i class=\"material-icons\">person_add</i> Sign Up</a>
    <a class=\"mdl-navigation__link show-dialogLogin\" href=\"javascript:void(0)\" id=\"show-dialogLogin\">  <i class=\"material-icons\">person</i>Sign In</a>
    
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

{% endblock %}

{% block contenido %}

{% if app.user.pais == \"VE\" %}
<h2>Ordenes</h2>
{% endif %}
{% if app.user.pais == \"CO\" %}
<h2>Ordenes</h2>
{% endif %}
{% if app.user.pais == \"US\" %}
<h2>Orders</h2>
{% endif %}
{% if app.user.pais == \"EN\" %}
<h2>Orders</h2>
{% endif %}

<style>
  .table>tbody>tr>td, .table>tfoot>tr>td{
    vertical-align: middle;
}
@media screen and (max-width: 600px) {
    table#cart tbody td .form-control{
\t\twidth:20%;
\t\tdisplay: inline !important;
\t}
\t.actions .btn{
\t\twidth:36%;
\t\tmargin:1.5em 0;
\t}
\t
\t.actions .btn-info{
\t\tfloat:left;
\t}
\t.actions .btn-danger{
\t\tfloat:right;
\t}
\t
\ttable#cart thead { display: none; }
\ttable#cart tbody td { display: block; padding: .6rem; min-width:320px;}
\ttable#cart tbody tr td:first-child { background: #333; color: #fff; }
\ttable#cart tbody td:before {
\t\tcontent: attr(data-th); font-weight: bold;
\t\tdisplay: inline-block; width: 8rem;
\t}
\t
\t
\t
\ttable#cart tfoot td{display:block; }
\ttable#cart tfoot td .btn{display:block;}
\t
}

</style>

{% if app.user.pais == \"US\" %}
<div class=\"card\" style=\"\">
<div class=\"container\">
\t<table id=\"cart\" class=\"table table-hover table-condensed\">
    \t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th style=\"width:55%\" class=\"\">Order</th>
\t\t\t\t\t\t\t<th style=\"width:15%\" class=\"\">Date and Time</th>
\t\t\t\t\t\t\t<th style=\"width:15%\" class=\"\">Total</th>
\t\t\t\t\t\t\t<th style=\"width:15%\" class=\"text-center center-text\">Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t
\t\t\t\t{% for key, orden in ordenes %}
\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-th=\"Product\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 hidden-xs\"><h3 class=\"nomargin\">{{ key + 1 }}</h3>\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">

\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"collapseExample{{key}}\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t{% for key1, products in productos %}
\t\t\t\t\t\t\t\t\t\t\t{% for product in products %}
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t{% if key==key1 %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\" style=\"padding-top:15px\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-3 hidden-xs\"><img src=\"{{product.link}}\" alt=\"...\" class=\"img-responsive\" width=\"50px\" height=\"50px\"/></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"nomargin\">{{product.nombre}} <p>{{product.descripcion}} <h5>{{product.precio}} \$</h5></p></h6>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td> <p>{{orden.fecha}}</p></td>
\t\t\t\t\t\t\t<td data-th=\"Price\"><h4>{{orden.montoTotal}} \$</h4></td>
\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-th=\"Acciones\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<button class=\"btn\" id=\"botonOrden{{key}}\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseExample{{key}}\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
\t\t\t\t\t\t\t\t\t\t  <i class=\"material-icons\">list</i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"botonOrden{{key}}\">
\t\t\t\t\t\t\t\t\t\tDisplay Order
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<form action=\"{{path('cancelarOrden' , {'id' : orden.id} ) }}\" method=\"POST\" >
\t\t\t\t\t\t\t\t<button id=\"botonCancel{{key}}\" class=\"btn btn-danger\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t  <i class=\"material-icons\">cancel</i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"botonCancel{{key}}\">
\t\t\t\t\t\t\t\t\t\tCancel Order
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t
\t

\t\t\t\t</table>
</div>
</div>
\t<br>
\t<br>
{% endif %}

{% if app.user.pais == \"EN\" %}
<div class=\"card\" style=\"\">
<div class=\"container\">
\t<table id=\"cart\" class=\"table table-hover table-condensed\">
    \t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th style=\"width:55%\" class=\"\">Order</th>
\t\t\t\t\t\t\t<th style=\"width:15%\" class=\"\">Date and Time</th>
\t\t\t\t\t\t\t<th style=\"width:15%\" class=\"\">Total</th>
\t\t\t\t\t\t\t<th style=\"width:15%\" class=\"text-center center-text\">Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t
\t\t\t\t{% for key, orden in ordenes %}
\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-th=\"Product\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 hidden-xs\"><h3 class=\"nomargin\">{{ key + 1 }}</h3>\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"collapseExample{{key}}\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t{% for key1, products in productos %}
\t\t\t\t\t\t\t\t\t\t\t{% for product in products %}
\t\t\t\t\t\t\t\t\t\t\t\t{% set precio = product.precio * 0.76 %}
\t\t\t\t\t\t\t\t\t\t\t\t{% if key==key1 %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\" style=\"padding-top:15px\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-3 hidden-xs\"><img src=\"{{product.link}}\" alt=\"...\" class=\"img-responsive\" width=\"50px\" height=\"50px\"/></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"nomargin\">{{product.nombre}} <p>{{product.descripcion}} <h5>{{precio}} £</h5></p></h6>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td> <p>{{orden.fecha}}</p></td>
\t\t\t\t\t\t\t<td data-th=\"Price\"><h4>{{orden.montoTotal*0.76}} £</h4></td>
\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-th=\"Acciones\">
\t\t\t\t\t\t\t\t<button class=\"btn\" id=\"botonOrden{{key}}\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseExample{{key}}\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
\t\t\t\t\t\t\t\t\t\t  <i class=\"material-icons\">list</i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"botonOrden{{key}}\">
\t\t\t\t\t\t\t\t\t\tDisplay Order
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<form action=\"{{path('cancelarOrden' , {'id' : orden.id} ) }}\" method=\"POST\" >
\t\t\t\t\t\t\t\t<button class=\"btn btn-danger\" id=\"botonCancel{{key}}\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t  <i class=\"material-icons\">cancel</i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"botonCancel{{key}}\">
\t\t\t\t\t\t\t\t\t\tCancel Order
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t
\t

\t\t\t\t</table>
</div>
</div>
\t<br>
\t<br>
{% endif %}

{% if app.user.pais == \"VE\" %}
<div class=\"card\" style=\"\">
<div class=\"container\">
\t<table id=\"cart\" class=\"table table-hover table-condensed\">
    \t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th style=\"width:55%\" class=\"\">Orden</th>
\t\t\t\t\t\t\t<th style=\"width:15%\" class=\"\">Hora y Fecha</th>
\t\t\t\t\t\t\t<th style=\"width:15%\" class=\"\">Monto Total</th>
\t\t\t\t\t\t\t<th style=\"width:15%\" class=\"text-center center-text\">Acciones</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t
\t\t\t\t{% for key, orden in ordenes %}
\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-th=\"Product\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 hidden-xs\"><h3 class=\"nomargin\">{{ key + 1 }}</h3>\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">

\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"collapseExample{{key}}\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t{% for key1, products in productos %}
\t\t\t\t\t\t\t\t\t\t\t{% for product in products %}
\t\t\t\t\t\t\t\t\t\t\t\t{% set precio = product.precio * 35000 %}
\t\t\t\t\t\t\t\t\t\t\t\t{% if key==key1 %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\" style=\"padding-top:15px\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-3 hidden-xs\"><img src=\"{{product.link}}\" alt=\"...\" class=\"img-responsive\" width=\"50px\" height=\"50px\"/></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"nomargin\">{{product.nombre}} <p>{{product.descripcion}} <h5>{{precio}} BsF</h5></p></h6>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td> <p>{{orden.fecha}}</p></td>
\t\t\t\t\t\t\t<td data-th=\"Price\"><h4>{{orden.montoTotal*35000}} BsF</h4></td>
\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-th=\"Acciones\">
\t\t\t\t\t\t\t\t<button class=\"btn\" id=\"botonOrden{{key}}\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseExample{{key}}\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
\t\t\t\t\t\t\t\t\t\t  <i class=\"material-icons\">list</i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"botonOrden{{key}}\">
\t\t\t\t\t\t\t\t\t\tVer Orden
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<form action=\"{{path('cancelarOrden' , {'id' : orden.id} ) }}\" method=\"POST\" >
\t\t\t\t\t\t\t\t<button class=\"btn btn-danger\" id=\"botonCancel{{key}} \"type=\"submit\">
\t\t\t\t\t\t\t\t\t\t  <i class=\"material-icons\">cancel</i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"botonCancel{{key}}\">
\t\t\t\t\t\t\t\t\t\tCancelar Orden
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t
\t

\t\t\t\t</table>
</div>
</div>
\t<br>
\t<br>
{% endif %}

{% if app.user.pais == \"CO\" %}
<div class=\"card\" style=\"\">
<div class=\"container\">
\t<table id=\"cart\" class=\"table table-hover table-condensed\">
    \t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th style=\"width:55%\" class=\"\">Orden</th>
\t\t\t\t\t\t\t<th style=\"width:15%\" class=\"\">Hora y Fecha</th>
\t\t\t\t\t\t\t<th style=\"width:15%\" class=\"\">Monto Total</th>
\t\t\t\t\t\t\t<th style=\"width:15%\" class=\"text-center center-text\">Acciones</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t
\t\t\t\t{% for key, orden in ordenes %}
\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-th=\"Product\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 hidden-xs\"><h3 class=\"nomargin\">{{ key + 1 }}</h3>\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"collapseExample{{key}}\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t{% for key1, products in productos %}
\t\t\t\t\t\t\t\t\t\t\t{% for product in products %}
\t\t\t\t\t\t\t\t\t\t\t\t{% set precio = product.precio * 2977.99 %}
\t\t\t\t\t\t\t\t\t\t\t\t{% if key==key1 %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\" style=\"padding-top:15px\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-3 hidden-xs\"><img src=\"{{product.link}}\" alt=\"...\" class=\"img-responsive\" width=\"50px\" height=\"50px\"/></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"nomargin\">{{product.nombre}} <p>{{product.descripcion}} <h5>{{precio}} BsF</h5></p></h6>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td> <p>{{orden.fecha}}</p></td>
\t\t\t\t\t\t\t<td data-th=\"Price\"><h4>{{orden.montoTotal*2977.99}} BsF</h4></td>
\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-th=\"Acciones\">
\t\t\t\t\t\t\t\t<button class=\"btn\" id=\"botonOrden{{key}}\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseExample{{key}}\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
\t\t\t\t\t\t\t\t\t\t  <i class=\"material-icons\">list</i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"botonOrden{{key}}\">
\t\t\t\t\t\t\t\t\t\tVer Orden
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<form action=\"{{path('cancelarOrden' , {'id' : orden.id} ) }}\" method=\"POST\" >
\t\t\t\t\t\t\t\t<button class=\"btn btn-danger\" id=\"botonCancel{{key}}\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t  <i class=\"material-icons\">cancel</i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"botonCancel{{key}}\">
\t\t\t\t\t\t\t\t\t\tCancelar Orden
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t
\t

\t\t\t\t</table>
</div>
</div>
\t<br>
\t<br>
{% endif %}



{% endblock %}", "orders.html.twig", "/home/ubuntu/workspace/app/Resources/views/orders.html.twig");
    }
}
