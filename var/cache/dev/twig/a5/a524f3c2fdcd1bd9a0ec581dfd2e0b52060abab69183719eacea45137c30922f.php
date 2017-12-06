<?php

/* carrito.html.twig */
class __TwigTemplate_6040292ccbe6894fd4068b7d59e5e105604e3278ef9469261b4faac87c3ed160 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "carrito.html.twig", 1);
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
        $__internal_be3e4c33ad57171c5427606bcd46f458b833c4e3222e0f0c4d84468c38f9197e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be3e4c33ad57171c5427606bcd46f458b833c4e3222e0f0c4d84468c38f9197e->enter($__internal_be3e4c33ad57171c5427606bcd46f458b833c4e3222e0f0c4d84468c38f9197e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "carrito.html.twig"));

        $__internal_4507d6c23390232797555d224d46b128897f4a682a1d67b2943e0809f4752bcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4507d6c23390232797555d224d46b128897f4a682a1d67b2943e0809f4752bcb->enter($__internal_4507d6c23390232797555d224d46b128897f4a682a1d67b2943e0809f4752bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "carrito.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be3e4c33ad57171c5427606bcd46f458b833c4e3222e0f0c4d84468c38f9197e->leave($__internal_be3e4c33ad57171c5427606bcd46f458b833c4e3222e0f0c4d84468c38f9197e_prof);

        
        $__internal_4507d6c23390232797555d224d46b128897f4a682a1d67b2943e0809f4752bcb->leave($__internal_4507d6c23390232797555d224d46b128897f4a682a1d67b2943e0809f4752bcb_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6024d83bf4d8fbc340a03056e932695963809a42bdeaf547d6036746ca782bd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6024d83bf4d8fbc340a03056e932695963809a42bdeaf547d6036746ca782bd5->enter($__internal_6024d83bf4d8fbc340a03056e932695963809a42bdeaf547d6036746ca782bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_afef8582e9d6c20107f7e72d7078b413fdd39ffc8615068c789d32c83b62e37e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afef8582e9d6c20107f7e72d7078b413fdd39ffc8615068c789d32c83b62e37e->enter($__internal_afef8582e9d6c20107f7e72d7078b413fdd39ffc8615068c789d32c83b62e37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_afef8582e9d6c20107f7e72d7078b413fdd39ffc8615068c789d32c83b62e37e->leave($__internal_afef8582e9d6c20107f7e72d7078b413fdd39ffc8615068c789d32c83b62e37e_prof);

        
        $__internal_6024d83bf4d8fbc340a03056e932695963809a42bdeaf547d6036746ca782bd5->leave($__internal_6024d83bf4d8fbc340a03056e932695963809a42bdeaf547d6036746ca782bd5_prof);

    }

    // line 6
    public function block_toplinks($context, array $blocks = array())
    {
        $__internal_65e285d0d5b2702e87b64ccc7d13db789457ef75e6e8070854ccd5cb2942b582 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65e285d0d5b2702e87b64ccc7d13db789457ef75e6e8070854ccd5cb2942b582->enter($__internal_65e285d0d5b2702e87b64ccc7d13db789457ef75e6e8070854ccd5cb2942b582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toplinks"));

        $__internal_8fffd558c0738607efbb054d382117785d5ce5472d9ec47d359b153bd16f1a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fffd558c0738607efbb054d382117785d5ce5472d9ec47d359b153bd16f1a07->enter($__internal_8fffd558c0738607efbb054d382117785d5ce5472d9ec47d359b153bd16f1a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toplinks"));

        // line 7
        echo "    
    ";
        // line 8
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "VE")) {
            // line 9
            echo "   ";
            if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 10
                echo "    <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Inicio</a>
    <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
    <a class=\"mdl-navigation__link\" href=\"/register\"> <i class=\"material-icons\">person_add</i> Registrarse</a>
    <a class=\"mdl-navigation__link show-dialog\" href=\"javascript:void(0)\" id=\"show-dialog\">  <i class=\"material-icons\">person</i>Iniciar Sesion</a>
  ";
            }
            // line 15
            echo "    
    ";
            // line 16
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
            // line 23
            echo " 
    ";
        }
        // line 25
        echo "    
     ";
        // line 26
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "CO")) {
            // line 27
            echo "   ";
            if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 28
                echo "    <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
    <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
    <a class=\"mdl-navigation__link\" href=\"/register\"> <i class=\"material-icons\">person_add</i> Registrarse</a>
    <a class=\"mdl-navigation__link show-dialog\" href=\"javascript:void(0)\" id=\"show-dialog\">  <i class=\"material-icons\">person</i>Iniciar Sesion</a>
  ";
            }
            // line 33
            echo "    
    ";
            // line 34
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                echo " 
      <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
      <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
      <a class=\"mdl-navigation__link\" href=\"/getWishlist\"> <i class=\"material-icons\">view_list</i> Lista de Deseos</a>
      <a class=\"mdl-navigation__link\" href=\"/shoppingCart\"> <i class=\"material-icons\">shopping_cart</i>Carro de Compras</a>
      <a class=\"mdl-navigation__link\" href=\"/orders\"> <i class=\"material-icons\">local_shipping</i> Ordenes</a>
      <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Salir</a>
    ";
            }
            // line 41
            echo " 
    ";
        }
        // line 43
        echo "    
     ";
        // line 44
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "US")) {
            // line 45
            echo "   ";
            if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 46
                echo "    <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
    <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
    <a class=\"mdl-navigation__link\" href=\"/register\"> <i class=\"material-icons\">person_add</i> Sign Up</a>
    <a class=\"mdl-navigation__link show-dialog\" href=\"javascript:void(0)\" id=\"show-dialog\">  <i class=\"material-icons\">person</i>Sign In</a>
  ";
            }
            // line 51
            echo "    
    ";
            // line 52
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
            // line 59
            echo " 
    ";
        }
        // line 61
        echo "    
    ";
        // line 62
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "EN")) {
            // line 63
            echo "   ";
            if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 64
                echo "    <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
    <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
    <a class=\"mdl-navigation__link\" href=\"/register\"> <i class=\"material-icons\">person_add</i> Sign Up</a>
    <a class=\"mdl-navigation__link show-dialog\" href=\"javascript:void(0)\" id=\"show-dialog\">  <i class=\"material-icons\">person</i>Sign In</a>
  ";
            }
            // line 69
            echo "    
    ";
            // line 70
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
            // line 77
            echo " 
    ";
        }
        // line 79
        echo "    
";
        
        $__internal_8fffd558c0738607efbb054d382117785d5ce5472d9ec47d359b153bd16f1a07->leave($__internal_8fffd558c0738607efbb054d382117785d5ce5472d9ec47d359b153bd16f1a07_prof);

        
        $__internal_65e285d0d5b2702e87b64ccc7d13db789457ef75e6e8070854ccd5cb2942b582->leave($__internal_65e285d0d5b2702e87b64ccc7d13db789457ef75e6e8070854ccd5cb2942b582_prof);

    }

    // line 82
    public function block_links($context, array $blocks = array())
    {
        $__internal_0254c381e48a0be21e30b2b8a77f4ff2e050e2ff36456d53b51e4a9a2fc494ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0254c381e48a0be21e30b2b8a77f4ff2e050e2ff36456d53b51e4a9a2fc494ff->enter($__internal_0254c381e48a0be21e30b2b8a77f4ff2e050e2ff36456d53b51e4a9a2fc494ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "links"));

        $__internal_320769700cee254e95f3db44d677b2960a69c616365b8f9461cfe99ea9b372e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_320769700cee254e95f3db44d677b2960a69c616365b8f9461cfe99ea9b372e9->enter($__internal_320769700cee254e95f3db44d677b2960a69c616365b8f9461cfe99ea9b372e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "links"));

        // line 83
        echo "    
    ";
        // line 84
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "VE")) {
            // line 85
            echo "   ";
            if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 86
                echo "    <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Inicio</a>
    <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
    <a class=\"mdl-navigation__link\" href=\"/register\"> <i class=\"material-icons\">person_add</i> Registrarse</a>
    <a class=\"mdl-navigation__link show-dialog\" href=\"javascript:void(0)\" id=\"show-dialog\">  <i class=\"material-icons\">person</i>Iniciar Sesion</a>
  ";
            }
            // line 91
            echo "    
    ";
            // line 92
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
            // line 99
            echo " 
    ";
        }
        // line 101
        echo "    
     ";
        // line 102
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "CO")) {
            // line 103
            echo "   ";
            if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 104
                echo "    <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
    <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
    <a class=\"mdl-navigation__link\" href=\"/register\"> <i class=\"material-icons\">person_add</i> Registrarse</a>
    <a class=\"mdl-navigation__link show-dialog\" href=\"javascript:void(0)\" id=\"show-dialog\">  <i class=\"material-icons\">person</i>Iniciar Sesion</a>
  ";
            }
            // line 109
            echo "    
    ";
            // line 110
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                echo " 
      <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
      <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
      <a class=\"mdl-navigation__link\" href=\"/getWishlist\"> <i class=\"material-icons\">view_list</i> Lista de Deseos</a>
      <a class=\"mdl-navigation__link\" href=\"/shoppingCart\"> <i class=\"material-icons\">shopping_cart</i>Carro de Compras</a>
      <a class=\"mdl-navigation__link\" href=\"/orders\"> <i class=\"material-icons\">local_shipping</i> Ordenes</a>
      <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Salir</a>
    ";
            }
            // line 117
            echo " 
    ";
        }
        // line 119
        echo "    
     ";
        // line 120
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "US")) {
            // line 121
            echo "   ";
            if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 122
                echo "    <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
    <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
    <a class=\"mdl-navigation__link\" href=\"/register\"> <i class=\"material-icons\">person_add</i> Sign Up</a>
    <a class=\"mdl-navigation__link show-dialog\" href=\"javascript:void(0)\" id=\"show-dialog\">  <i class=\"material-icons\">person</i>Sign In</a>
  ";
            }
            // line 127
            echo "    
    ";
            // line 128
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
            // line 135
            echo " 
    ";
        }
        // line 137
        echo "    
    ";
        // line 138
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "EN")) {
            // line 139
            echo "   ";
            if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 140
                echo "    <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
    <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
    <a class=\"mdl-navigation__link\" href=\"/register\"> <i class=\"material-icons\">person_add</i> Sign Up</a>
    <a class=\"mdl-navigation__link show-dialog\" href=\"javascript:void(0)\" id=\"show-dialog\">  <i class=\"material-icons\">person</i>Sign In</a>
  ";
            }
            // line 145
            echo "    
    ";
            // line 146
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
            // line 153
            echo " 
    ";
        }
        // line 155
        echo "
";
        
        $__internal_320769700cee254e95f3db44d677b2960a69c616365b8f9461cfe99ea9b372e9->leave($__internal_320769700cee254e95f3db44d677b2960a69c616365b8f9461cfe99ea9b372e9_prof);

        
        $__internal_0254c381e48a0be21e30b2b8a77f4ff2e050e2ff36456d53b51e4a9a2fc494ff->leave($__internal_0254c381e48a0be21e30b2b8a77f4ff2e050e2ff36456d53b51e4a9a2fc494ff_prof);

    }

    // line 160
    public function block_test($context, array $blocks = array())
    {
        $__internal_125b0e39fad9d4c503b89144dfcf6976ba224fdb0b9260d5b650575581146664 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_125b0e39fad9d4c503b89144dfcf6976ba224fdb0b9260d5b650575581146664->enter($__internal_125b0e39fad9d4c503b89144dfcf6976ba224fdb0b9260d5b650575581146664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "test"));

        $__internal_d87279a01a9909e091e770f6af9209e373d89108b6a2665357252b566fcb1e74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d87279a01a9909e091e770f6af9209e373d89108b6a2665357252b566fcb1e74->enter($__internal_d87279a01a9909e091e770f6af9209e373d89108b6a2665357252b566fcb1e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "test"));

        echo " 

          <form id=\"form-login\" action=\"";
        // line 162
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
        
        $__internal_d87279a01a9909e091e770f6af9209e373d89108b6a2665357252b566fcb1e74->leave($__internal_d87279a01a9909e091e770f6af9209e373d89108b6a2665357252b566fcb1e74_prof);

        
        $__internal_125b0e39fad9d4c503b89144dfcf6976ba224fdb0b9260d5b650575581146664->leave($__internal_125b0e39fad9d4c503b89144dfcf6976ba224fdb0b9260d5b650575581146664_prof);

    }

    // line 179
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_50657918c67b752ee6fa88682b4feae3d2d7dbb7600957ce7683c36d6eed7500 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50657918c67b752ee6fa88682b4feae3d2d7dbb7600957ce7683c36d6eed7500->enter($__internal_50657918c67b752ee6fa88682b4feae3d2d7dbb7600957ce7683c36d6eed7500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_175ac59a273402b9e11067fe82c5892b2251b4ca6d483e265e37a6d5bee15ff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_175ac59a273402b9e11067fe82c5892b2251b4ca6d483e265e37a6d5bee15ff2->enter($__internal_175ac59a273402b9e11067fe82c5892b2251b4ca6d483e265e37a6d5bee15ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 180
        echo "
";
        // line 181
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "VE")) {
            // line 182
            echo "<h2>Carro de Compras</h2>
";
        }
        // line 184
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "CO")) {
            // line 185
            echo "<h2>Carro de Compras</h2>
";
        }
        // line 187
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "EN")) {
            // line 188
            echo "<h2>Shopping Cart</h2>
";
        }
        // line 190
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "US")) {
            // line 191
            echo "<h2>Shopping Cart</h2>
";
        }
        // line 193
        echo "<style>
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
        // line 232
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "VE")) {
            // line 233
            echo "<div class=\"card\" style=\"\">
<div class=\"container\">
\t<table id=\"cart\" class=\"table table-hover table-condensed\">
    \t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th style=\"width:60%\" class=\"\">Producto</th>
\t\t\t\t\t\t\t<th style=\"width:20%\" class=\"\">Precio</th>
\t\t\t\t\t\t\t<th style=\"width:20%\" class=\"text-center center-text\">Acciones</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 244
            $context["total"] = 0;
            // line 245
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 246
                echo "\t\t\t\t\t\t";
                $context["precio"] = ($this->getAttribute($context["product"], "precio", array()) * 35000);
                // line 247
                echo "\t\t\t\t\t\t";
                $context["total"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + (isset($context["precio"]) ? $context["precio"] : $this->getContext($context, "precio")));
                // line 248
                echo "\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-th=\"Product\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 hidden-xs\"><img src=\"";
                // line 252
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                echo "\" alt=\"...\" class=\"img-responsive\" width=\"100px\" height=\"100px\"/></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"nomargin\">";
                // line 254
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t<p>";
                // line 255
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "descripcion", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td data-th=\"Price\">";
                // line 260
                echo twig_escape_filter($this->env, (isset($context["precio"]) ? $context["precio"] : $this->getContext($context, "precio")), "html", null, true);
                echo " BsF</td>
\t\t\t\t\t\t\t<form action=\"";
                // line 261
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeProducto", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                echo "\" method=\"POST\">
\t\t\t\t\t\t\t\t<td class=\"actions text-center center-text\"  data-th=\"\">
\t\t\t\t\t\t\t\t\t<button id=\"delete";
                // line 263
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "\" class=\"btn \" style=\"background-color: #f44336;color:white; width:50%\"type=\"submit\"><i class=\"material-icons\">delete</i></button>
\t\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"delete";
                // line 264
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\tBorrar
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 272
            echo "\t\t\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"\" class=\"\"></td>
\t\t\t\t\t\t\t<td class=\"\"><strong>Total:";
            // line 277
            echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
            echo " BsF</strong></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<button onclick=\"getFecha()\"id=\"show-dialog-pago\" class=\"btn \" style=\"background-color: #00c853;color:white; width:100%\" type=\"button\">Checkout > </button>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t</table>
\t\t\t\t<script>
\t\t\t\t\tfunction getFecha(){
\t\t\t\t\t\tn =  new Date();
\t\t\t\t\t\ty = n.getFullYear();
\t\t\t\t\t\tm = n.getMonth() + 1;
\t\t\t\t\t\td = n.getDate();
\t\t\t\t\t\tdocument.getElementById(\"fecha\").value = m + \"/\" + d + \"/\" + y;
\t\t\t\t\t}
\t\t\t\t</script>
\t\t\t\t<style>
\t\t\t\t\t.mdl-dialog {
\t\t\t\t\t    border: none;
\t\t\t\t\t    box-shadow: 0 9px 46px 8px rgba(0,0,0,.14), 0 11px 15px -7px rgba(0,0,0,.12), 0 24px 38px 3px rgba(0,0,0,.2);
\t\t\t\t\t    width: 600px;
\t\t\t\t\t}
\t\t\t\t\t.mdl-dialog__actions {
\t\t\t\t\t     padding: 0px 50px 0px 50px; 
\t\t\t\t\t    display: -webkit-flex;
\t\t\t\t\t    display: -ms-flexbox;
\t\t\t\t\t    /* display: flex; */
\t\t\t\t\t    -webkit-flex-direction: row-reverse;
\t\t\t\t\t    -ms-flex-direction: row-reverse;
\t\t\t\t\t    flex-direction: row-reverse;
\t\t\t\t\t    -webkit-flex-wrap: wrap;
\t\t\t\t\t    -ms-flex-wrap: wrap;
\t\t\t\t\t    flex-wrap: wrap;
\t\t\t\t\t}
\t\t\t\t</style>
\t\t\t\t
\t\t\t\t\t  <dialog class=\"mdl-dialog dialog-pago\">
\t\t\t\t\t    <h4 class=\"mdl-dialog__title\">Sesión de Pago</h4>
\t\t\t\t\t    <div class=\"mdl-dialog__content\">
\t\t\t\t\t      <form id=\"pagar\" action=\"";
            // line 316
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagarCarrito");
            echo "\" method=\"GET\">
\t\t\t\t\t      \t<div class=\"row\">
\t\t\t\t\t      \t\t<div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\" style=\"width:100%\">
\t\t\t\t\t\t\t\t    <input class=\"mdl-textfield__input\" type=\"text\" id=\"direccionEnvio\" name=\"direccionEnvio\" data-required>
\t\t\t\t\t\t\t\t    <label class=\"mdl-textfield__label\" for=\"direccionEnvio\">Dirección de Envío</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t      \t</div>
\t\t\t\t\t      \t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
\t\t\t\t\t\t\t\t    <input class=\"mdl-textfield__input\" type=\"text\" pattern=\"-?[0-9]*(\\.[0-9]+)?\" id=\"numeroTarjeta\" name=\"numeroTarjeta\" maxlength=\"16\" minlength=\"16\">
\t\t\t\t\t\t\t\t    <label class=\"mdl-textfield__label\" for=\"numeroTarjeta\">Número de Tarjeta</label>
\t\t\t\t\t\t\t\t    <span class=\"mdl-textfield__error\">Ingresa solo números, debe ser de 20 digitos</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
\t\t\t\t\t\t\t\t    <input class=\"mdl-textfield__input\" type=\"password\" pattern=\"-?[0-9]*(\\.[0-9]+)?\" id=\"cvc\" name=\"cvc\" maxlength=\"3\" minlength=\"3\">
\t\t\t\t\t\t\t\t    <label class=\"mdl-textfield__label\" for=\"cvc\">CVC</label>
\t\t\t\t\t\t\t\t    <span class=\"mdl-textfield__error\">Ingresa solo números, debe ser de 3 digitos</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 \">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 drop-bottom\" id=\"tipoP\">
\t\t\t\t\t\t\t\t    <label class=\"mdl-radio mdl-js-radio mdl-js-ripple-effect\" for=\"option-1\">
\t\t\t\t\t\t\t\t\t  <input type=\"radio\" id=\"option-1\" class=\"mdl-radio__button\" name=\"tipoPago\" value=\"debito\"
\t\t\t\t\t\t\t\t\t  <span class=\"mdl-radio__label\">Débito           <i class=\"fa fa-credit-card\" style=\"font-size:24px\">      <i class=\"fa fa-google-wallet\" style=\"font-size:24px\"></i></i></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<label class=\"mdl-radio mdl-js-radio mdl-js-ripple-effect\" for=\"option-2\">
\t\t\t\t\t\t\t\t\t  <input type=\"radio\" id=\"option-2\" class=\"mdl-radio__button\" name=\"tipoPago\" value=\"credito\">
\t\t\t\t\t\t\t\t\t  <span class=\"mdl-radio__label\">Crédito <i class=\"fa fa-cc-visa\" style=\"font-size:24px\"></i>      <i class=\"fa fa-cc-mastercard\" style=\"font-size:24px\"></i>      <i class=\"fa fa-cc-amex\" style=\"font-size:24px\"></i></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<label class=\"mdl-radio mdl-js-radio mdl-js-ripple-effect\"  for=\"option-3\">
\t\t\t\t\t\t\t\t\t  <input type=\"radio\" id=\"option-3\" class=\"mdl-radio__button\" name=\"tipoPago\" value=\"paypal\">
\t\t\t\t\t\t\t\t\t  <span class=\"mdl-radio__label\">Paypal   <i class=\"fa fa-cc-paypal\" style=\"font-size:24px\"></i></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t      \t</div>
\t\t\t\t\t      \t<div class=\"row\">
\t\t\t\t\t      \t\t<h4>Monto Total:    ";
            // line 354
            echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
            echo "  BsF</h4>
\t\t\t\t\t      \t\t";
            // line 355
            $context["totalDolar"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) / 35000);
            // line 356
            echo "\t\t\t\t\t      \t\t<input type=\"hidden\" name=\"montoTotal\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["totalDolar"]) ? $context["totalDolar"] : $this->getContext($context, "totalDolar")), "html", null, true);
            echo "\">
\t\t\t\t\t      \t\t<input id=\"fecha\" type=\"hidden\" name=\"fecha\" value=\"\">
\t\t\t\t\t      \t</div>
\t\t\t\t\t      \t
\t\t\t\t\t      </form>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"mdl-dialog__actions\">
\t\t\t\t\t      <button id=\"show-dialog-pago\" class=\"btn \" style=\"background-color: #00c853;color:white; width:100%\" onclick=\"checkForm()\">PAGAR</button>
\t\t\t\t\t      <br>
\t\t\t\t\t      <br>
\t\t\t\t\t      <br>
\t\t\t\t\t      <button type=\"button\" class=\"mdl-button close\" >Cancelar</button>
\t\t\t\t\t    </div>
\t\t\t\t\t  </dialog>
\t\t\t\t\t  <script>
\t\t\t\t\t  \tfunction checkForm(){
\t\t\t\t\t  \t\tvar direccion = document.getElementById(\"direccionEnvio\").value;
\t\t\t\t\t  \t\tvar tarjeta = document.getElementById(\"numeroTarjeta\").value;
\t\t\t\t\t  \t\tvar cvc = document.getElementById(\"cvc\").value;
\t\t\t\t\t  \t\tvar tipo = \$('input[type=radio][name=tipoPago]:checked').val();
\t\t\t\t\t  \t\tif(direccion==\"\" || tarjeta==\"\" || cvc==\"\" || tipo == null){
\t\t\t\t\t  \t\t\talert('Recuerda llenar el formulario de pago');
\t\t\t\t\t  \t\t}
\t\t\t\t\t  \t\telse{
\t\t\t\t\t  \t\t\tdocument.getElementById(\"pagar\").submit();
\t\t\t\t\t  \t\t}
\t\t\t\t\t  \t}
\t\t\t\t\t  
\t\t\t\t\t    var dialogPago = document.querySelector('.dialog-pago');
\t\t\t\t\t    var botonPago = document.querySelector('#show-dialog-pago');
\t\t\t\t\t    if (! dialogPago.showModal) {
\t\t\t\t\t      dialogPolyfill.registerDialog(dialogPago);
\t\t\t\t\t    }
\t\t\t\t\t    botonPago.addEventListener('click', function() {
\t\t\t\t\t      dialogPago.showModal();
\t\t\t\t\t    });
\t\t\t\t\t    dialogPago.querySelector('.close').addEventListener('click', function() {
\t\t\t\t\t      dialogPago.close();
\t\t\t\t\t    });
\t\t\t\t\t  </script>
</div>
</div>
\t<br>
\t<br>
";
        }
        // line 401
        echo "
";
        // line 402
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "CO")) {
            // line 403
            echo "<div class=\"card\" style=\"\">
<div class=\"container\">
\t<table id=\"cart\" class=\"table table-hover table-condensed\">
    \t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th style=\"width:60%\" class=\"\">Producto</th>
\t\t\t\t\t\t\t<th style=\"width:20%\" class=\"\">Precio</th>
\t\t\t\t\t\t\t<th style=\"width:20%\" class=\"text-center center-text\">Acciones</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 414
            $context["total"] = 0;
            // line 415
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 416
                echo "\t\t\t\t\t\t";
                $context["precio"] = ($this->getAttribute($context["product"], "precio", array()) * 2977.99);
                // line 417
                echo "\t\t\t\t\t\t";
                $context["total"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + (isset($context["precio"]) ? $context["precio"] : $this->getContext($context, "precio")));
                // line 418
                echo "\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-th=\"Product\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 hidden-xs\"><img src=\"";
                // line 422
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                echo "\" alt=\"...\" class=\"img-responsive\" width=\"100px\" height=\"100px\"/></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"nomargin\">";
                // line 424
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t<p>";
                // line 425
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "descripcion", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-th=\"Price\">";
                // line 429
                echo twig_escape_filter($this->env, (isset($context["precio"]) ? $context["precio"] : $this->getContext($context, "precio")), "html", null, true);
                echo " COP</td>
\t\t\t\t\t\t\t<form action=\"";
                // line 430
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeProducto", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                echo "\" method=\"POST\">
\t\t\t\t\t\t\t\t<td class=\"actions text-center center-text\"  data-th=\"\">
\t\t\t\t\t\t\t\t\t<button id=\"delete";
                // line 432
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "\" class=\"btn \" style=\"background-color: #f44336;color:white; width:50%\"type=\"submit\"><i class=\"material-icons\">delete</i></button>
\t\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"delete";
                // line 433
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\tBorrar
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 441
            echo "\t\t\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"\" class=\"\"></td>
\t\t\t\t\t\t\t<td class=\"\"><strong>Total:";
            // line 446
            echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
            echo " COP</strong></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<button onclick=\"getFecha()\"id=\"show-dialog-pago\" class=\"btn \" style=\"background-color: #00c853;color:white; width:100%\" type=\"button\">Checkout > </button>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t</table>
\t\t\t\t<script>
\t\t\t\t\tfunction getFecha(){
\t\t\t\t\t\tn =  new Date();
\t\t\t\t\t\ty = n.getFullYear();
\t\t\t\t\t\tm = n.getMonth() + 1;
\t\t\t\t\t\td = n.getDate();
\t\t\t\t\t\tdocument.getElementById(\"fecha\").value = m + \"/\" + d + \"/\" + y;
\t\t\t\t\t}
\t\t\t\t</script>
\t\t\t\t<style>
\t\t\t\t\t.mdl-dialog {
\t\t\t\t\t    border: none;
\t\t\t\t\t    box-shadow: 0 9px 46px 8px rgba(0,0,0,.14), 0 11px 15px -7px rgba(0,0,0,.12), 0 24px 38px 3px rgba(0,0,0,.2);
\t\t\t\t\t    width: 600px;
\t\t\t\t\t}
\t\t\t\t\t.mdl-dialog__actions {
\t\t\t\t\t     padding: 0px 50px 0px 50px; 
\t\t\t\t\t    display: -webkit-flex;
\t\t\t\t\t    display: -ms-flexbox;
\t\t\t\t\t    /* display: flex; */
\t\t\t\t\t    -webkit-flex-direction: row-reverse;
\t\t\t\t\t    -ms-flex-direction: row-reverse;
\t\t\t\t\t    flex-direction: row-reverse;
\t\t\t\t\t    -webkit-flex-wrap: wrap;
\t\t\t\t\t    -ms-flex-wrap: wrap;
\t\t\t\t\t    flex-wrap: wrap;
\t\t\t\t\t}
\t\t\t\t</style>
\t\t\t\t
\t\t\t\t\t  <dialog class=\"mdl-dialog dialog-pago\">
\t\t\t\t\t    <h4 class=\"mdl-dialog__title\">Sesión de Pago</h4>
\t\t\t\t\t    <div class=\"mdl-dialog__content\">
\t\t\t\t\t      <form id=\"pagar\" action=\"";
            // line 485
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagarCarrito");
            echo "\" method=\"GET\">
\t\t\t\t\t      \t<div class=\"row\">
\t\t\t\t\t      \t\t<div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\" style=\"width:100%\">
\t\t\t\t\t\t\t\t    <input class=\"mdl-textfield__input\" type=\"text\" id=\"direccionEnvio\" name=\"direccionEnvio\">
\t\t\t\t\t\t\t\t    <label class=\"mdl-textfield__label\" for=\"direccionEnvio\">Dirección de Envío</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t      \t</div>
\t\t\t\t\t      \t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
\t\t\t\t\t\t\t\t    <input class=\"mdl-textfield__input\" type=\"text\" pattern=\"-?[0-9]*(\\.[0-9]+)?\" id=\"numeroTarjeta\" name=\"numeroTarjeta\" maxlength=\"16\" minlength=\"16\" data-inputmask=\"'mask': '9999 9999 9999 9999'\">
\t\t\t\t\t\t\t\t    <label class=\"mdl-textfield__label\" for=\"numeroTarjeta\">Número de Tarjeta</label>
\t\t\t\t\t\t\t\t    <span class=\"mdl-textfield__error\">Ingresa solo números, debe ser de 20 digitos</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
\t\t\t\t\t\t\t\t    <input class=\"mdl-textfield__input\" type=\"password\" pattern=\"-?[0-9]*(\\.[0-9]+)?\" id=\"cvc\" name=\"cvc\" maxlength=\"3\" minlength=\"3\">
\t\t\t\t\t\t\t\t    <label class=\"mdl-textfield__label\" for=\"cvc\">CVC</label>
\t\t\t\t\t\t\t\t    <span class=\"mdl-textfield__error\">Ingresa solo números, debe ser de 3 digitos</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 \">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 drop-bottom\" required>
\t\t\t\t\t\t\t\t    <label class=\"mdl-radio mdl-js-radio mdl-js-ripple-effect\" for=\"option-1\">
\t\t\t\t\t\t\t\t\t  <input type=\"radio\" id=\"option-1\" class=\"mdl-radio__button\" name=\"tipoPago\" value=\"debito\">
\t\t\t\t\t\t\t\t\t  <span class=\"mdl-radio__label\">Débito           <i class=\"fa fa-credit-card\" style=\"font-size:24px\">      <i class=\"fa fa-google-wallet\" style=\"font-size:24px\"></i></i></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<label class=\"mdl-radio mdl-js-radio mdl-js-ripple-effect\" for=\"option-2\">
\t\t\t\t\t\t\t\t\t  <input type=\"radio\" id=\"option-2\" class=\"mdl-radio__button\" name=\"tipoPago\" value=\"credito\">
\t\t\t\t\t\t\t\t\t  <span class=\"mdl-radio__label\">Crédito <i class=\"fa fa-cc-visa\" style=\"font-size:24px\"></i>      <i class=\"fa fa-cc-mastercard\" style=\"font-size:24px\"></i>      <i class=\"fa fa-cc-amex\" style=\"font-size:24px\"></i></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<label class=\"mdl-radio mdl-js-radio mdl-js-ripple-effect\"  for=\"option-3\">
\t\t\t\t\t\t\t\t\t  <input type=\"radio\" id=\"option-3\" class=\"mdl-radio__button\" name=\"tipoPago\" value=\"paypal\">
\t\t\t\t\t\t\t\t\t  <span class=\"mdl-radio__label\">Paypal   <i class=\"fa fa-cc-paypal\" style=\"font-size:24px\"></i></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t      \t</div>
\t\t\t\t\t      \t<div class=\"row\">
\t\t\t\t\t      \t\t<h4>Monto Total:    ";
            // line 523
            echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
            echo " COP</h4>
\t\t\t\t\t      \t\t";
            // line 524
            $context["totalDolar"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) / 2977.99);
            // line 525
            echo "\t\t\t\t\t      \t\t<input type=\"hidden\" name=\"montoTotal\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["totalDolar"]) ? $context["totalDolar"] : $this->getContext($context, "totalDolar")), "html", null, true);
            echo "\">
\t\t\t\t\t      \t\t<input id=\"fecha\" type=\"hidden\" name=\"fecha\" value=\"\">
\t\t\t\t\t      \t</div>
\t\t\t\t\t      \t
\t\t\t\t\t      </form>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"mdl-dialog__actions\">
\t\t\t\t\t      <button id=\"show-dialog-pago\" class=\"btn \" style=\"background-color: #00c853;color:white; width:100%\" onclick=\"checkForm()\">PAGAR</button>
\t\t\t\t\t      <br>
\t\t\t\t\t      <br>
\t\t\t\t\t      <br>
\t\t\t\t\t      <button type=\"button\" class=\"mdl-button close\" >Cancelar</button>
\t\t\t\t\t    </div>
\t\t\t\t\t  </dialog>
\t\t\t\t\t  <script>
\t\t\t\t\t  function checkForm(){
\t\t\t\t\t  \t\tvar direccion = document.getElementById(\"direccionEnvio\").value;
\t\t\t\t\t  \t\tvar tarjeta = document.getElementById(\"numeroTarjeta\").value;
\t\t\t\t\t  \t\tvar cvc = document.getElementById(\"cvc\").value;
\t\t\t\t\t  \t\tvar tipo = \$('input[type=radio][name=tipoPago]:checked').val();
\t\t\t\t\t  \t\tif(direccion==\"\" || tarjeta==\"\" || cvc==\"\" || tipo == null){
\t\t\t\t\t  \t\t\talert('Recuerda llenar el formulario de pago');
\t\t\t\t\t  \t\t}
\t\t\t\t\t  \t\telse{
\t\t\t\t\t  \t\t\tdocument.getElementById(\"pagar\").submit();
\t\t\t\t\t  \t\t}
\t\t\t\t\t  \t}
\t\t\t\t\t    var dialogPago = document.querySelector('.dialog-pago');
\t\t\t\t\t    var botonPago = document.querySelector('#show-dialog-pago');
\t\t\t\t\t    if (! dialogPago.showModal) {
\t\t\t\t\t      dialogPolyfill.registerDialog(dialogPago);
\t\t\t\t\t    }
\t\t\t\t\t    botonPago.addEventListener('click', function() {
\t\t\t\t\t      dialogPago.showModal();
\t\t\t\t\t    });
\t\t\t\t\t    dialogPago.querySelector('.close').addEventListener('click', function() {
\t\t\t\t\t      dialogPago.close();
\t\t\t\t\t    });
\t\t\t\t\t  </script>
</div>
</div>
\t<br>
\t<br>
";
        }
        // line 569
        echo "
";
        // line 570
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "US")) {
            // line 571
            echo "<div class=\"card\" style=\"\">
<div class=\"container\">
\t<table id=\"cart\" class=\"table table-hover table-condensed\">
    \t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th style=\"width:60%\" class=\"\">Producto</th>
\t\t\t\t\t\t\t<th style=\"width:20%\" class=\"\">Precio</th>
\t\t\t\t\t\t\t<th style=\"width:20%\" class=\"text-center center-text\">Acciones</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 582
            $context["total"] = 0;
            // line 583
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 584
                echo "\t\t\t\t\t\t";
                $context["total"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + $this->getAttribute($context["product"], "precio", array()));
                // line 585
                echo "\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-th=\"Product\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 hidden-xs\"><img src=\"";
                // line 589
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                echo "\" alt=\"...\" class=\"img-responsive\" width=\"100px\" height=\"100px\"/></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"nomargin\">";
                // line 591
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t<p>";
                // line 592
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "descripcion", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-th=\"Price\">";
                // line 596
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "precio", array()), "html", null, true);
                echo " \$</td>
\t\t\t\t\t\t\t<form action=\"";
                // line 597
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeProducto", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                echo "\" method=\"POST\">
\t\t\t\t\t\t\t\t<td class=\"actions text-center center-text\"  data-th=\"\">
\t\t\t\t\t\t\t\t\t<button id=\"delete";
                // line 599
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "\" class=\"btn \" style=\"background-color: #f44336;color:white; width:50%\"type=\"submit\"><i class=\"material-icons\">delete</i></button>
\t\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"delete";
                // line 600
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\tBorrar
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 608
            echo "\t\t\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"\" class=\"\"></td>
\t\t\t\t\t\t\t<td class=\"\"><strong>Total:";
            // line 613
            echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
            echo " \$</strong></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<button onclick=\"getFecha()\"id=\"show-dialog-pago\" class=\"btn \" style=\"background-color: #00c853;color:white; width:100%\" type=\"button\">Checkout > </button>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t</table>
\t\t\t\t<script>
\t\t\t\t\tfunction getFecha(){
\t\t\t\t\t\tn =  new Date();
\t\t\t\t\t\ty = n.getFullYear();
\t\t\t\t\t\tm = n.getMonth() + 1;
\t\t\t\t\t\td = n.getDate();
\t\t\t\t\t\tdocument.getElementById(\"fecha\").value = m + \"/\" + d + \"/\" + y;
\t\t\t\t\t}
\t\t\t\t</script>
\t\t\t\t<style>
\t\t\t\t\t.mdl-dialog {
\t\t\t\t\t    border: none;
\t\t\t\t\t    box-shadow: 0 9px 46px 8px rgba(0,0,0,.14), 0 11px 15px -7px rgba(0,0,0,.12), 0 24px 38px 3px rgba(0,0,0,.2);
\t\t\t\t\t    width: 600px;
\t\t\t\t\t}
\t\t\t\t\t.mdl-dialog__actions {
\t\t\t\t\t     padding: 0px 50px 0px 50px; 
\t\t\t\t\t    display: -webkit-flex;
\t\t\t\t\t    display: -ms-flexbox;
\t\t\t\t\t    /* display: flex; */
\t\t\t\t\t    -webkit-flex-direction: row-reverse;
\t\t\t\t\t    -ms-flex-direction: row-reverse;
\t\t\t\t\t    flex-direction: row-reverse;
\t\t\t\t\t    -webkit-flex-wrap: wrap;
\t\t\t\t\t    -ms-flex-wrap: wrap;
\t\t\t\t\t    flex-wrap: wrap;
\t\t\t\t\t}
\t\t\t\t</style>
\t\t\t\t
\t\t\t\t\t  <dialog class=\"mdl-dialog dialog-pago\">
\t\t\t\t\t    <h4 class=\"mdl-dialog__title\">Sesión de Pago</h4>
\t\t\t\t\t    <div class=\"mdl-dialog__content\">
\t\t\t\t\t      <form id=\"pagar\" action=\"";
            // line 652
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagarCarrito");
            echo "\" method=\"GET\">
\t\t\t\t\t      \t<div class=\"row\">
\t\t\t\t\t      \t\t<div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\" style=\"width:100%\">
\t\t\t\t\t\t\t\t    <input class=\"mdl-textfield__input\" type=\"text\" id=\"direccionEnvio\" name=\"direccionEnvio\">
\t\t\t\t\t\t\t\t    <label class=\"mdl-textfield__label\" for=\"direccionEnvio\">Dirección de Envío</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t      \t</div>
\t\t\t\t\t      \t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
\t\t\t\t\t\t\t\t    <input class=\"mdl-textfield__input\" type=\"text\" pattern=\"-?[0-9]*(\\.[0-9]+)?\" id=\"numeroTarjeta\" name=\"numeroTarjeta\" maxlength=\"16\" minlength=\"16\" data-inputmask=\"'mask': '9999 9999 9999 9999'\">
\t\t\t\t\t\t\t\t    <label class=\"mdl-textfield__label\" for=\"numeroTarjeta\">Número de Tarjeta</label>
\t\t\t\t\t\t\t\t    <span class=\"mdl-textfield__error\">Ingresa solo números, debe ser de 20 digitos</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
\t\t\t\t\t\t\t\t    <input class=\"mdl-textfield__input\" type=\"password\" pattern=\"-?[0-9]*(\\.[0-9]+)?\" id=\"cvc\" name=\"cvc\" maxlength=\"3\" minlength=\"3\">
\t\t\t\t\t\t\t\t    <label class=\"mdl-textfield__label\" for=\"cvc\">CVC</label>
\t\t\t\t\t\t\t\t    <span class=\"mdl-textfield__error\">Ingresa solo números, debe ser de 3 digitos</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 \">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 drop-bottom\" required>
\t\t\t\t\t\t\t\t    <label class=\"mdl-radio mdl-js-radio mdl-js-ripple-effect\" for=\"option-1\">
\t\t\t\t\t\t\t\t\t  <input type=\"radio\" id=\"option-1\" class=\"mdl-radio__button\" name=\"tipoPago\" value=\"debito\">
\t\t\t\t\t\t\t\t\t  <span class=\"mdl-radio__label\">Débito           <i class=\"fa fa-credit-card\" style=\"font-size:24px\">      <i class=\"fa fa-google-wallet\" style=\"font-size:24px\"></i></i></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<label class=\"mdl-radio mdl-js-radio mdl-js-ripple-effect\" for=\"option-2\">
\t\t\t\t\t\t\t\t\t  <input type=\"radio\" id=\"option-2\" class=\"mdl-radio__button\" name=\"tipoPago\" value=\"credito\">
\t\t\t\t\t\t\t\t\t  <span class=\"mdl-radio__label\">Crédito <i class=\"fa fa-cc-visa\" style=\"font-size:24px\"></i>      <i class=\"fa fa-cc-mastercard\" style=\"font-size:24px\"></i>      <i class=\"fa fa-cc-amex\" style=\"font-size:24px\"></i></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<label class=\"mdl-radio mdl-js-radio mdl-js-ripple-effect\"  for=\"option-3\">
\t\t\t\t\t\t\t\t\t  <input type=\"radio\" id=\"option-3\" class=\"mdl-radio__button\" name=\"tipoPago\" value=\"paypal\">
\t\t\t\t\t\t\t\t\t  <span class=\"mdl-radio__label\">Paypal   <i class=\"fa fa-cc-paypal\" style=\"font-size:24px\"></i></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t      \t</div>
\t\t\t\t\t      \t<div class=\"row\">
\t\t\t\t\t      \t\t<h4>Monto Total:    ";
            // line 690
            echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
            echo " </h4>
\t\t\t\t\t      \t\t<input type=\"hidden\" name=\"montoTotal\" value=\"";
            // line 691
            echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
            echo "\">
\t\t\t\t\t      \t\t<input id=\"fecha\" type=\"hidden\" name=\"fecha\" value=\"\">
\t\t\t\t\t      \t</div>
\t\t\t\t\t      \t
\t\t\t\t\t      </form>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"mdl-dialog__actions\">
\t\t\t\t\t      <button id=\"show-dialog-pago\" class=\"btn \" style=\"background-color: #00c853;color:white; width:100%\" onclick=\"checkForm()\">PAGAR</button>
\t\t\t\t\t      <br>
\t\t\t\t\t      <br>
\t\t\t\t\t      <br>
\t\t\t\t\t      <button type=\"button\" class=\"mdl-button close\" >Cancelar</button>
\t\t\t\t\t    </div>
\t\t\t\t\t  </dialog>
\t\t\t\t\t  <script>
\t\t\t\t\t  function checkForm(){
\t\t\t\t\t  \t\tvar direccion = document.getElementById(\"direccionEnvio\").value;
\t\t\t\t\t  \t\tvar tarjeta = document.getElementById(\"numeroTarjeta\").value;
\t\t\t\t\t  \t\tvar cvc = document.getElementById(\"cvc\").value;
\t\t\t\t\t  \t\tvar tipo = \$('input[type=radio][name=tipoPago]:checked').val();
\t\t\t\t\t  \t\tif(direccion==\"\" || tarjeta==\"\" || cvc==\"\" || tipo == null){
\t\t\t\t\t  \t\t\talert('Remember to fill all inputs to pay');
\t\t\t\t\t  \t\t}
\t\t\t\t\t  \t\telse{
\t\t\t\t\t  \t\t\tdocument.getElementById(\"pagar\").submit();
\t\t\t\t\t  \t\t}
\t\t\t\t\t  \t}
\t\t\t\t\t    var dialogPago = document.querySelector('.dialog-pago');
\t\t\t\t\t    var botonPago = document.querySelector('#show-dialog-pago');
\t\t\t\t\t    if (! dialogPago.showModal) {
\t\t\t\t\t      dialogPolyfill.registerDialog(dialogPago);
\t\t\t\t\t    }
\t\t\t\t\t    botonPago.addEventListener('click', function() {
\t\t\t\t\t      dialogPago.showModal();
\t\t\t\t\t    });
\t\t\t\t\t    dialogPago.querySelector('.close').addEventListener('click', function() {
\t\t\t\t\t      dialogPago.close();
\t\t\t\t\t    });
\t\t\t\t\t  </script>
</div>
</div>
\t<br>
\t<br>
";
        }
        // line 735
        echo "
";
        // line 736
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "EN")) {
            // line 737
            echo "<div class=\"card\" style=\"\">
<div class=\"container\">
\t<table id=\"cart\" class=\"table table-hover table-condensed\">
    \t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th style=\"width:60%\" class=\"\">Producto</th>
\t\t\t\t\t\t\t<th style=\"width:20%\" class=\"\">Precio</th>
\t\t\t\t\t\t\t<th style=\"width:20%\" class=\"text-center center-text\">Acciones</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 748
            $context["total"] = 0;
            // line 749
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 750
                echo "\t\t\t\t\t\t";
                $context["precio"] = ($this->getAttribute($context["product"], "precio", array()) * 0.76);
                // line 751
                echo "\t\t\t\t\t\t";
                $context["total"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + (isset($context["precio"]) ? $context["precio"] : $this->getContext($context, "precio")));
                // line 752
                echo "\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-th=\"Product\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 hidden-xs\"><img src=\"";
                // line 756
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                echo "\" alt=\"...\" class=\"img-responsive\" width=\"100px\" height=\"100px\"/></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"nomargin\">";
                // line 758
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t<p>";
                // line 759
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "descripcion", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-th=\"Price\">";
                // line 763
                echo twig_escape_filter($this->env, (isset($context["precio"]) ? $context["precio"] : $this->getContext($context, "precio")), "html", null, true);
                echo " £</td>
\t\t\t\t\t\t\t<form action=\"";
                // line 764
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeProducto", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                echo "\" method=\"POST\">
\t\t\t\t\t\t\t\t<td class=\"actions text-center center-text\"  data-th=\"\">
\t\t\t\t\t\t\t\t\t<button id=\"delete";
                // line 766
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "\" class=\"btn \" style=\"background-color: #f44336;color:white; width:50%\"type=\"submit\"><i class=\"material-icons\">delete</i></button>
\t\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"delete";
                // line 767
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\tBorrar
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 775
            echo "\t\t\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"\" class=\"\"></td>
\t\t\t\t\t\t\t<td class=\"\"><strong>Total:";
            // line 780
            echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
            echo " £</strong></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<button onclick=\"getFecha()\"id=\"show-dialog-pago\" class=\"btn \" style=\"background-color: #00c853;color:white; width:100%\" type=\"button\">Checkout > </button>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t</table>
\t\t\t\t<script>
\t\t\t\t\tfunction getFecha(){
\t\t\t\t\t\tn =  new Date();
\t\t\t\t\t\ty = n.getFullYear();
\t\t\t\t\t\tm = n.getMonth() + 1;
\t\t\t\t\t\td = n.getDate();
\t\t\t\t\t\tdocument.getElementById(\"fecha\").value = m + \"/\" + d + \"/\" + y;
\t\t\t\t\t}
\t\t\t\t</script>
\t\t\t\t<style>
\t\t\t\t\t.mdl-dialog {
\t\t\t\t\t    border: none;
\t\t\t\t\t    box-shadow: 0 9px 46px 8px rgba(0,0,0,.14), 0 11px 15px -7px rgba(0,0,0,.12), 0 24px 38px 3px rgba(0,0,0,.2);
\t\t\t\t\t    width: 600px;
\t\t\t\t\t}
\t\t\t\t\t.mdl-dialog__actions {
\t\t\t\t\t     padding: 0px 50px 0px 50px; 
\t\t\t\t\t    display: -webkit-flex;
\t\t\t\t\t    display: -ms-flexbox;
\t\t\t\t\t    /* display: flex; */
\t\t\t\t\t    -webkit-flex-direction: row-reverse;
\t\t\t\t\t    -ms-flex-direction: row-reverse;
\t\t\t\t\t    flex-direction: row-reverse;
\t\t\t\t\t    -webkit-flex-wrap: wrap;
\t\t\t\t\t    -ms-flex-wrap: wrap;
\t\t\t\t\t    flex-wrap: wrap;
\t\t\t\t\t}
\t\t\t\t</style>
\t\t\t\t
\t\t\t\t\t  <dialog class=\"mdl-dialog dialog-pago\">
\t\t\t\t\t    <h4 class=\"mdl-dialog__title\">Sesión de Pago</h4>
\t\t\t\t\t    <div class=\"mdl-dialog__content\">
\t\t\t\t\t      <form id=\"pagar\" action=\"";
            // line 819
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagarCarrito");
            echo "\" method=\"GET\">
\t\t\t\t\t      \t<div class=\"row\">
\t\t\t\t\t      \t\t<div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\" style=\"width:100%\">
\t\t\t\t\t\t\t\t    <input class=\"mdl-textfield__input\" type=\"text\" id=\"direccionEnvio\" name=\"direccionEnvio\">
\t\t\t\t\t\t\t\t    <label class=\"mdl-textfield__label\" for=\"direccionEnvio\">Dirección de Envío</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t      \t</div>
\t\t\t\t\t      \t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
\t\t\t\t\t\t\t\t    <input class=\"mdl-textfield__input\" type=\"text\" pattern=\"-?[0-9]*(\\.[0-9]+)?\" id=\"numeroTarjeta\" name=\"numeroTarjeta\" maxlength=\"16\" minlength=\"16\" data-inputmask=\"'mask': '9999 9999 9999 9999'\">
\t\t\t\t\t\t\t\t    <label class=\"mdl-textfield__label\" for=\"numeroTarjeta\">Número de Tarjeta</label>
\t\t\t\t\t\t\t\t    <span class=\"mdl-textfield__error\">Ingresa solo números, debe ser de 20 digitos</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
\t\t\t\t\t\t\t\t    <input class=\"mdl-textfield__input\" type=\"password\" pattern=\"-?[0-9]*(\\.[0-9]+)?\" id=\"cvc\" name=\"cvc\" maxlength=\"3\" minlength=\"3\">
\t\t\t\t\t\t\t\t    <label class=\"mdl-textfield__label\" for=\"cvc\">CVC</label>
\t\t\t\t\t\t\t\t    <span class=\"mdl-textfield__error\">Ingresa solo números, debe ser de 3 digitos</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 \">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 drop-bottom\" required>
\t\t\t\t\t\t\t\t    <label class=\"mdl-radio mdl-js-radio mdl-js-ripple-effect\" for=\"option-1\">
\t\t\t\t\t\t\t\t\t  <input type=\"radio\" id=\"option-1\" class=\"mdl-radio__button\" name=\"tipoPago\" value=\"debito\">
\t\t\t\t\t\t\t\t\t  <span class=\"mdl-radio__label\">Débito           <i class=\"fa fa-credit-card\" style=\"font-size:24px\">      <i class=\"fa fa-google-wallet\" style=\"font-size:24px\"></i></i></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<label class=\"mdl-radio mdl-js-radio mdl-js-ripple-effect\" for=\"option-2\">
\t\t\t\t\t\t\t\t\t  <input type=\"radio\" id=\"option-2\" class=\"mdl-radio__button\" name=\"tipoPago\" value=\"credito\">
\t\t\t\t\t\t\t\t\t  <span class=\"mdl-radio__label\">Crédito <i class=\"fa fa-cc-visa\" style=\"font-size:24px\"></i>      <i class=\"fa fa-cc-mastercard\" style=\"font-size:24px\"></i>      <i class=\"fa fa-cc-amex\" style=\"font-size:24px\"></i></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<label class=\"mdl-radio mdl-js-radio mdl-js-ripple-effect\"  for=\"option-3\">
\t\t\t\t\t\t\t\t\t  <input type=\"radio\" id=\"option-3\" class=\"mdl-radio__button\" name=\"tipoPago\" value=\"paypal\">
\t\t\t\t\t\t\t\t\t  <span class=\"mdl-radio__label\">Paypal   <i class=\"fa fa-cc-paypal\" style=\"font-size:24px\"></i></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t      \t</div>
\t\t\t\t\t      \t<div class=\"row\">
\t\t\t\t\t      \t\t<h4>Monto Total:    ";
            // line 857
            echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
            echo " £</h4>
\t\t\t\t\t      \t\t";
            // line 858
            $context["totalDolar"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) / 0.76);
            // line 859
            echo "\t\t\t\t\t      \t\t<input type=\"hidden\" name=\"montoTotal\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["totalDolar"]) ? $context["totalDolar"] : $this->getContext($context, "totalDolar")), "html", null, true);
            echo "\">
\t\t\t\t\t      \t\t<input id=\"fecha\" type=\"hidden\" name=\"fecha\" value=\"\">
\t\t\t\t\t      \t</div>
\t\t\t\t\t      \t
\t\t\t\t\t      </form>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"mdl-dialog__actions\">
\t\t\t\t\t      <button id=\"show-dialog-pago\" class=\"btn \" style=\"background-color: #00c853;color:white; width:100%\" onclick=\"checkForm()\">PAGAR</button>
\t\t\t\t\t      <br>
\t\t\t\t\t      <br>
\t\t\t\t\t      <br>
\t\t\t\t\t      <button type=\"button\" class=\"mdl-button close\" >Cancelar</button>
\t\t\t\t\t    </div>
\t\t\t\t\t  </dialog>
\t\t\t\t\t  <script>
\t\t\t\t\t  function checkForm(){
\t\t\t\t\t  \t\tvar direccion = document.getElementById(\"direccionEnvio\").value;
\t\t\t\t\t  \t\tvar tarjeta = document.getElementById(\"numeroTarjeta\").value;
\t\t\t\t\t  \t\tvar cvc = document.getElementById(\"cvc\").value;
\t\t\t\t\t  \t\tvar tipo = \$('input[type=radio][name=tipoPago]:checked').val();
\t\t\t\t\t  \t\tif(direccion==\"\" || tarjeta==\"\" || cvc==\"\" || tipo == null){
\t\t\t\t\t  \t\t\talert('Remember to fill all inputs to pay');
\t\t\t\t\t  \t\t}
\t\t\t\t\t  \t\telse{
\t\t\t\t\t  \t\t\tdocument.getElementById(\"pagar\").submit();
\t\t\t\t\t  \t\t}
\t\t\t\t\t  \t}
\t\t\t\t\t    var dialogPago = document.querySelector('.dialog-pago');
\t\t\t\t\t    var botonPago = document.querySelector('#show-dialog-pago');
\t\t\t\t\t    if (! dialogPago.showModal) {
\t\t\t\t\t      dialogPolyfill.registerDialog(dialogPago);
\t\t\t\t\t    }
\t\t\t\t\t    botonPago.addEventListener('click', function() {
\t\t\t\t\t      dialogPago.showModal();
\t\t\t\t\t    });
\t\t\t\t\t    dialogPago.querySelector('.close').addEventListener('click', function() {
\t\t\t\t\t      dialogPago.close();
\t\t\t\t\t    });
\t\t\t\t\t  </script>
</div>
</div>
\t<br>
\t<br>
";
        }
        // line 903
        echo "
 <script>
// // Example starter JavaScript for disabling form submissions if there are invalid fields
// (function() {
//   'use strict';

//   window.addEventListener('load', function() {
//     var form = document.getElementById('pagar');
//     form.addEventListener('submit', function(event) {
//       if (form.checkValidity() === false) {
//         event.preventDefault();
//         event.stopPropagation();
//       }
//       form.classList.add('was-validated');
//     }, false);
//   }, false);
// })();
 </script>


";
        
        $__internal_175ac59a273402b9e11067fe82c5892b2251b4ca6d483e265e37a6d5bee15ff2->leave($__internal_175ac59a273402b9e11067fe82c5892b2251b4ca6d483e265e37a6d5bee15ff2_prof);

        
        $__internal_50657918c67b752ee6fa88682b4feae3d2d7dbb7600957ce7683c36d6eed7500->leave($__internal_50657918c67b752ee6fa88682b4feae3d2d7dbb7600957ce7683c36d6eed7500_prof);

    }

    public function getTemplateName()
    {
        return "carrito.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1374 => 903,  1326 => 859,  1324 => 858,  1320 => 857,  1279 => 819,  1237 => 780,  1230 => 775,  1216 => 767,  1212 => 766,  1207 => 764,  1203 => 763,  1196 => 759,  1192 => 758,  1187 => 756,  1181 => 752,  1178 => 751,  1175 => 750,  1170 => 749,  1168 => 748,  1155 => 737,  1153 => 736,  1150 => 735,  1103 => 691,  1099 => 690,  1058 => 652,  1016 => 613,  1009 => 608,  995 => 600,  991 => 599,  986 => 597,  982 => 596,  975 => 592,  971 => 591,  966 => 589,  960 => 585,  957 => 584,  952 => 583,  950 => 582,  937 => 571,  935 => 570,  932 => 569,  884 => 525,  882 => 524,  878 => 523,  837 => 485,  795 => 446,  788 => 441,  774 => 433,  770 => 432,  765 => 430,  761 => 429,  754 => 425,  750 => 424,  745 => 422,  739 => 418,  736 => 417,  733 => 416,  728 => 415,  726 => 414,  713 => 403,  711 => 402,  708 => 401,  659 => 356,  657 => 355,  653 => 354,  612 => 316,  570 => 277,  563 => 272,  549 => 264,  545 => 263,  540 => 261,  536 => 260,  528 => 255,  524 => 254,  519 => 252,  513 => 248,  510 => 247,  507 => 246,  502 => 245,  500 => 244,  487 => 233,  485 => 232,  444 => 193,  440 => 191,  438 => 190,  434 => 188,  432 => 187,  428 => 185,  426 => 184,  422 => 182,  420 => 181,  417 => 180,  408 => 179,  382 => 162,  370 => 160,  359 => 155,  355 => 153,  344 => 146,  341 => 145,  334 => 140,  331 => 139,  329 => 138,  326 => 137,  322 => 135,  311 => 128,  308 => 127,  301 => 122,  298 => 121,  296 => 120,  293 => 119,  289 => 117,  278 => 110,  275 => 109,  268 => 104,  265 => 103,  263 => 102,  260 => 101,  256 => 99,  245 => 92,  242 => 91,  235 => 86,  232 => 85,  230 => 84,  227 => 83,  218 => 82,  207 => 79,  203 => 77,  192 => 70,  189 => 69,  182 => 64,  179 => 63,  177 => 62,  174 => 61,  170 => 59,  159 => 52,  156 => 51,  149 => 46,  146 => 45,  144 => 44,  141 => 43,  137 => 41,  126 => 34,  123 => 33,  116 => 28,  113 => 27,  111 => 26,  108 => 25,  104 => 23,  93 => 16,  90 => 15,  83 => 10,  80 => 9,  78 => 8,  75 => 7,  66 => 6,  53 => 3,  44 => 2,  11 => 1,);
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
    
    {% if app.user.pais == \"VE\" %}
   {% if not is_granted('IS_AUTHENTICATED_FULLY')%}
    <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Inicio</a>
    <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
    <a class=\"mdl-navigation__link\" href=\"/register\"> <i class=\"material-icons\">person_add</i> Registrarse</a>
    <a class=\"mdl-navigation__link show-dialog\" href=\"javascript:void(0)\" id=\"show-dialog\">  <i class=\"material-icons\">person</i>Iniciar Sesion</a>
  {% endif %}
    
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
   {% if not is_granted('IS_AUTHENTICATED_FULLY')%}
    <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
    <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
    <a class=\"mdl-navigation__link\" href=\"/register\"> <i class=\"material-icons\">person_add</i> Registrarse</a>
    <a class=\"mdl-navigation__link show-dialog\" href=\"javascript:void(0)\" id=\"show-dialog\">  <i class=\"material-icons\">person</i>Iniciar Sesion</a>
  {% endif %}
    
    {% if is_granted('IS_AUTHENTICATED_FULLY') %} 
      <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
      <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
      <a class=\"mdl-navigation__link\" href=\"/getWishlist\"> <i class=\"material-icons\">view_list</i> Lista de Deseos</a>
      <a class=\"mdl-navigation__link\" href=\"/shoppingCart\"> <i class=\"material-icons\">shopping_cart</i>Carro de Compras</a>
      <a class=\"mdl-navigation__link\" href=\"/orders\"> <i class=\"material-icons\">local_shipping</i> Ordenes</a>
      <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Salir</a>
    {% endif %} 
    {% endif %}
    
     {% if app.user.pais == \"US\" %}
   {% if not is_granted('IS_AUTHENTICATED_FULLY')%}
    <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
    <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
    <a class=\"mdl-navigation__link\" href=\"/register\"> <i class=\"material-icons\">person_add</i> Sign Up</a>
    <a class=\"mdl-navigation__link show-dialog\" href=\"javascript:void(0)\" id=\"show-dialog\">  <i class=\"material-icons\">person</i>Sign In</a>
  {% endif %}
    
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
   {% if not is_granted('IS_AUTHENTICATED_FULLY')%}
    <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
    <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
    <a class=\"mdl-navigation__link\" href=\"/register\"> <i class=\"material-icons\">person_add</i> Sign Up</a>
    <a class=\"mdl-navigation__link show-dialog\" href=\"javascript:void(0)\" id=\"show-dialog\">  <i class=\"material-icons\">person</i>Sign In</a>
  {% endif %}
    
    {% if is_granted('IS_AUTHENTICATED_FULLY') %} 
      <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
      <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
      <a class=\"mdl-navigation__link\" href=\"/getWishlist\"> <i class=\"material-icons\">view_list</i> Wishlist</a>
      <a class=\"mdl-navigation__link\" href=\"/shoppingCart\"> <i class=\"material-icons\">shopping_cart</i>Shopping Cart</a>
      <a class=\"mdl-navigation__link\" href=\"/orders\"> <i class=\"material-icons\">local_shipping</i> Orders</a>
      <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Logout</a>
    {% endif %} 
    {% endif %}
    
{% endblock %}

{% block links %}
    
    {% if app.user.pais == \"VE\" %}
   {% if not is_granted('IS_AUTHENTICATED_FULLY')%}
    <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Inicio</a>
    <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
    <a class=\"mdl-navigation__link\" href=\"/register\"> <i class=\"material-icons\">person_add</i> Registrarse</a>
    <a class=\"mdl-navigation__link show-dialog\" href=\"javascript:void(0)\" id=\"show-dialog\">  <i class=\"material-icons\">person</i>Iniciar Sesion</a>
  {% endif %}
    
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
   {% if not is_granted('IS_AUTHENTICATED_FULLY')%}
    <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
    <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
    <a class=\"mdl-navigation__link\" href=\"/register\"> <i class=\"material-icons\">person_add</i> Registrarse</a>
    <a class=\"mdl-navigation__link show-dialog\" href=\"javascript:void(0)\" id=\"show-dialog\">  <i class=\"material-icons\">person</i>Iniciar Sesion</a>
  {% endif %}
    
    {% if is_granted('IS_AUTHENTICATED_FULLY') %} 
      <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
      <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
      <a class=\"mdl-navigation__link\" href=\"/getWishlist\"> <i class=\"material-icons\">view_list</i> Lista de Deseos</a>
      <a class=\"mdl-navigation__link\" href=\"/shoppingCart\"> <i class=\"material-icons\">shopping_cart</i>Carro de Compras</a>
      <a class=\"mdl-navigation__link\" href=\"/orders\"> <i class=\"material-icons\">local_shipping</i> Ordenes</a>
      <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Salir</a>
    {% endif %} 
    {% endif %}
    
     {% if app.user.pais == \"US\" %}
   {% if not is_granted('IS_AUTHENTICATED_FULLY')%}
    <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
    <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
    <a class=\"mdl-navigation__link\" href=\"/register\"> <i class=\"material-icons\">person_add</i> Sign Up</a>
    <a class=\"mdl-navigation__link show-dialog\" href=\"javascript:void(0)\" id=\"show-dialog\">  <i class=\"material-icons\">person</i>Sign In</a>
  {% endif %}
    
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
   {% if not is_granted('IS_AUTHENTICATED_FULLY')%}
    <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
    <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
    <a class=\"mdl-navigation__link\" href=\"/register\"> <i class=\"material-icons\">person_add</i> Sign Up</a>
    <a class=\"mdl-navigation__link show-dialog\" href=\"javascript:void(0)\" id=\"show-dialog\">  <i class=\"material-icons\">person</i>Sign In</a>
  {% endif %}
    
    {% if is_granted('IS_AUTHENTICATED_FULLY') %} 
      <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
      <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
      <a class=\"mdl-navigation__link\" href=\"/getWishlist\"> <i class=\"material-icons\">view_list</i> Wishlist</a>
      <a class=\"mdl-navigation__link\" href=\"/shoppingCart\"> <i class=\"material-icons\">shopping_cart</i>Shopping Cart</a>
      <a class=\"mdl-navigation__link\" href=\"/orders\"> <i class=\"material-icons\">local_shipping</i> Orders</a>
      <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Logout</a>
    {% endif %} 
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
<h2>Carro de Compras</h2>
{% endif %}
{% if app.user.pais == \"CO\" %}
<h2>Carro de Compras</h2>
{% endif %}
{% if app.user.pais == \"EN\" %}
<h2>Shopping Cart</h2>
{% endif %}
{% if app.user.pais == \"US\" %}
<h2>Shopping Cart</h2>
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


{% if app.user.pais == \"VE\" %}
<div class=\"card\" style=\"\">
<div class=\"container\">
\t<table id=\"cart\" class=\"table table-hover table-condensed\">
    \t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th style=\"width:60%\" class=\"\">Producto</th>
\t\t\t\t\t\t\t<th style=\"width:20%\" class=\"\">Precio</th>
\t\t\t\t\t\t\t<th style=\"width:20%\" class=\"text-center center-text\">Acciones</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% set total = 0 %}
\t\t\t\t\t\t{% for product in productos %}
\t\t\t\t\t\t{% set precio = product.precio * 35000 %}
\t\t\t\t\t\t{% set total = total + precio %}
\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-th=\"Product\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 hidden-xs\"><img src=\"{{product.link}}\" alt=\"...\" class=\"img-responsive\" width=\"100px\" height=\"100px\"/></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"nomargin\">{{product.nombre}}</h4>
\t\t\t\t\t\t\t\t\t\t<p>{{product.descripcion}}</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td data-th=\"Price\">{{precio}} BsF</td>
\t\t\t\t\t\t\t<form action=\"{{ path('removeProducto' , { 'id' : product.id})}}\" method=\"POST\">
\t\t\t\t\t\t\t\t<td class=\"actions text-center center-text\"  data-th=\"\">
\t\t\t\t\t\t\t\t\t<button id=\"delete{{product.id}}\" class=\"btn \" style=\"background-color: #f44336;color:white; width:50%\"type=\"submit\"><i class=\"material-icons\">delete</i></button>
\t\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"delete{{product.id}}\">
\t\t\t\t\t\t\t\t\t\tBorrar
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"\" class=\"\"></td>
\t\t\t\t\t\t\t<td class=\"\"><strong>Total:{{total}} BsF</strong></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<button onclick=\"getFecha()\"id=\"show-dialog-pago\" class=\"btn \" style=\"background-color: #00c853;color:white; width:100%\" type=\"button\">Checkout > </button>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t</table>
\t\t\t\t<script>
\t\t\t\t\tfunction getFecha(){
\t\t\t\t\t\tn =  new Date();
\t\t\t\t\t\ty = n.getFullYear();
\t\t\t\t\t\tm = n.getMonth() + 1;
\t\t\t\t\t\td = n.getDate();
\t\t\t\t\t\tdocument.getElementById(\"fecha\").value = m + \"/\" + d + \"/\" + y;
\t\t\t\t\t}
\t\t\t\t</script>
\t\t\t\t<style>
\t\t\t\t\t.mdl-dialog {
\t\t\t\t\t    border: none;
\t\t\t\t\t    box-shadow: 0 9px 46px 8px rgba(0,0,0,.14), 0 11px 15px -7px rgba(0,0,0,.12), 0 24px 38px 3px rgba(0,0,0,.2);
\t\t\t\t\t    width: 600px;
\t\t\t\t\t}
\t\t\t\t\t.mdl-dialog__actions {
\t\t\t\t\t     padding: 0px 50px 0px 50px; 
\t\t\t\t\t    display: -webkit-flex;
\t\t\t\t\t    display: -ms-flexbox;
\t\t\t\t\t    /* display: flex; */
\t\t\t\t\t    -webkit-flex-direction: row-reverse;
\t\t\t\t\t    -ms-flex-direction: row-reverse;
\t\t\t\t\t    flex-direction: row-reverse;
\t\t\t\t\t    -webkit-flex-wrap: wrap;
\t\t\t\t\t    -ms-flex-wrap: wrap;
\t\t\t\t\t    flex-wrap: wrap;
\t\t\t\t\t}
\t\t\t\t</style>
\t\t\t\t
\t\t\t\t\t  <dialog class=\"mdl-dialog dialog-pago\">
\t\t\t\t\t    <h4 class=\"mdl-dialog__title\">Sesión de Pago</h4>
\t\t\t\t\t    <div class=\"mdl-dialog__content\">
\t\t\t\t\t      <form id=\"pagar\" action=\"{{ path('pagarCarrito')}}\" method=\"GET\">
\t\t\t\t\t      \t<div class=\"row\">
\t\t\t\t\t      \t\t<div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\" style=\"width:100%\">
\t\t\t\t\t\t\t\t    <input class=\"mdl-textfield__input\" type=\"text\" id=\"direccionEnvio\" name=\"direccionEnvio\" data-required>
\t\t\t\t\t\t\t\t    <label class=\"mdl-textfield__label\" for=\"direccionEnvio\">Dirección de Envío</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t      \t</div>
\t\t\t\t\t      \t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
\t\t\t\t\t\t\t\t    <input class=\"mdl-textfield__input\" type=\"text\" pattern=\"-?[0-9]*(\\.[0-9]+)?\" id=\"numeroTarjeta\" name=\"numeroTarjeta\" maxlength=\"16\" minlength=\"16\">
\t\t\t\t\t\t\t\t    <label class=\"mdl-textfield__label\" for=\"numeroTarjeta\">Número de Tarjeta</label>
\t\t\t\t\t\t\t\t    <span class=\"mdl-textfield__error\">Ingresa solo números, debe ser de 20 digitos</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
\t\t\t\t\t\t\t\t    <input class=\"mdl-textfield__input\" type=\"password\" pattern=\"-?[0-9]*(\\.[0-9]+)?\" id=\"cvc\" name=\"cvc\" maxlength=\"3\" minlength=\"3\">
\t\t\t\t\t\t\t\t    <label class=\"mdl-textfield__label\" for=\"cvc\">CVC</label>
\t\t\t\t\t\t\t\t    <span class=\"mdl-textfield__error\">Ingresa solo números, debe ser de 3 digitos</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 \">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 drop-bottom\" id=\"tipoP\">
\t\t\t\t\t\t\t\t    <label class=\"mdl-radio mdl-js-radio mdl-js-ripple-effect\" for=\"option-1\">
\t\t\t\t\t\t\t\t\t  <input type=\"radio\" id=\"option-1\" class=\"mdl-radio__button\" name=\"tipoPago\" value=\"debito\"
\t\t\t\t\t\t\t\t\t  <span class=\"mdl-radio__label\">Débito           <i class=\"fa fa-credit-card\" style=\"font-size:24px\">      <i class=\"fa fa-google-wallet\" style=\"font-size:24px\"></i></i></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<label class=\"mdl-radio mdl-js-radio mdl-js-ripple-effect\" for=\"option-2\">
\t\t\t\t\t\t\t\t\t  <input type=\"radio\" id=\"option-2\" class=\"mdl-radio__button\" name=\"tipoPago\" value=\"credito\">
\t\t\t\t\t\t\t\t\t  <span class=\"mdl-radio__label\">Crédito <i class=\"fa fa-cc-visa\" style=\"font-size:24px\"></i>      <i class=\"fa fa-cc-mastercard\" style=\"font-size:24px\"></i>      <i class=\"fa fa-cc-amex\" style=\"font-size:24px\"></i></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<label class=\"mdl-radio mdl-js-radio mdl-js-ripple-effect\"  for=\"option-3\">
\t\t\t\t\t\t\t\t\t  <input type=\"radio\" id=\"option-3\" class=\"mdl-radio__button\" name=\"tipoPago\" value=\"paypal\">
\t\t\t\t\t\t\t\t\t  <span class=\"mdl-radio__label\">Paypal   <i class=\"fa fa-cc-paypal\" style=\"font-size:24px\"></i></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t      \t</div>
\t\t\t\t\t      \t<div class=\"row\">
\t\t\t\t\t      \t\t<h4>Monto Total:    {{total}}  BsF</h4>
\t\t\t\t\t      \t\t{% set totalDolar = total / 35000 %}
\t\t\t\t\t      \t\t<input type=\"hidden\" name=\"montoTotal\" value=\"{{totalDolar}}\">
\t\t\t\t\t      \t\t<input id=\"fecha\" type=\"hidden\" name=\"fecha\" value=\"\">
\t\t\t\t\t      \t</div>
\t\t\t\t\t      \t
\t\t\t\t\t      </form>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"mdl-dialog__actions\">
\t\t\t\t\t      <button id=\"show-dialog-pago\" class=\"btn \" style=\"background-color: #00c853;color:white; width:100%\" onclick=\"checkForm()\">PAGAR</button>
\t\t\t\t\t      <br>
\t\t\t\t\t      <br>
\t\t\t\t\t      <br>
\t\t\t\t\t      <button type=\"button\" class=\"mdl-button close\" >Cancelar</button>
\t\t\t\t\t    </div>
\t\t\t\t\t  </dialog>
\t\t\t\t\t  <script>
\t\t\t\t\t  \tfunction checkForm(){
\t\t\t\t\t  \t\tvar direccion = document.getElementById(\"direccionEnvio\").value;
\t\t\t\t\t  \t\tvar tarjeta = document.getElementById(\"numeroTarjeta\").value;
\t\t\t\t\t  \t\tvar cvc = document.getElementById(\"cvc\").value;
\t\t\t\t\t  \t\tvar tipo = \$('input[type=radio][name=tipoPago]:checked').val();
\t\t\t\t\t  \t\tif(direccion==\"\" || tarjeta==\"\" || cvc==\"\" || tipo == null){
\t\t\t\t\t  \t\t\talert('Recuerda llenar el formulario de pago');
\t\t\t\t\t  \t\t}
\t\t\t\t\t  \t\telse{
\t\t\t\t\t  \t\t\tdocument.getElementById(\"pagar\").submit();
\t\t\t\t\t  \t\t}
\t\t\t\t\t  \t}
\t\t\t\t\t  
\t\t\t\t\t    var dialogPago = document.querySelector('.dialog-pago');
\t\t\t\t\t    var botonPago = document.querySelector('#show-dialog-pago');
\t\t\t\t\t    if (! dialogPago.showModal) {
\t\t\t\t\t      dialogPolyfill.registerDialog(dialogPago);
\t\t\t\t\t    }
\t\t\t\t\t    botonPago.addEventListener('click', function() {
\t\t\t\t\t      dialogPago.showModal();
\t\t\t\t\t    });
\t\t\t\t\t    dialogPago.querySelector('.close').addEventListener('click', function() {
\t\t\t\t\t      dialogPago.close();
\t\t\t\t\t    });
\t\t\t\t\t  </script>
</div>
</div>
\t<br>
\t<br>
{% endif %}

{% if app.user.pais == \"CO\" %}
<div class=\"card\" style=\"\">
<div class=\"container\">
\t<table id=\"cart\" class=\"table table-hover table-condensed\">
    \t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th style=\"width:60%\" class=\"\">Producto</th>
\t\t\t\t\t\t\t<th style=\"width:20%\" class=\"\">Precio</th>
\t\t\t\t\t\t\t<th style=\"width:20%\" class=\"text-center center-text\">Acciones</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% set total = 0 %}
\t\t\t\t\t\t{% for product in productos %}
\t\t\t\t\t\t{% set precio = product.precio * 2977.99 %}
\t\t\t\t\t\t{% set total = total + precio %}
\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-th=\"Product\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 hidden-xs\"><img src=\"{{product.link}}\" alt=\"...\" class=\"img-responsive\" width=\"100px\" height=\"100px\"/></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"nomargin\">{{product.nombre}}</h4>
\t\t\t\t\t\t\t\t\t\t<p>{{product.descripcion}}</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-th=\"Price\">{{precio}} COP</td>
\t\t\t\t\t\t\t<form action=\"{{ path('removeProducto' , { 'id' : product.id})}}\" method=\"POST\">
\t\t\t\t\t\t\t\t<td class=\"actions text-center center-text\"  data-th=\"\">
\t\t\t\t\t\t\t\t\t<button id=\"delete{{product.id}}\" class=\"btn \" style=\"background-color: #f44336;color:white; width:50%\"type=\"submit\"><i class=\"material-icons\">delete</i></button>
\t\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"delete{{product.id}}\">
\t\t\t\t\t\t\t\t\t\tBorrar
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"\" class=\"\"></td>
\t\t\t\t\t\t\t<td class=\"\"><strong>Total:{{total}} COP</strong></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<button onclick=\"getFecha()\"id=\"show-dialog-pago\" class=\"btn \" style=\"background-color: #00c853;color:white; width:100%\" type=\"button\">Checkout > </button>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t</table>
\t\t\t\t<script>
\t\t\t\t\tfunction getFecha(){
\t\t\t\t\t\tn =  new Date();
\t\t\t\t\t\ty = n.getFullYear();
\t\t\t\t\t\tm = n.getMonth() + 1;
\t\t\t\t\t\td = n.getDate();
\t\t\t\t\t\tdocument.getElementById(\"fecha\").value = m + \"/\" + d + \"/\" + y;
\t\t\t\t\t}
\t\t\t\t</script>
\t\t\t\t<style>
\t\t\t\t\t.mdl-dialog {
\t\t\t\t\t    border: none;
\t\t\t\t\t    box-shadow: 0 9px 46px 8px rgba(0,0,0,.14), 0 11px 15px -7px rgba(0,0,0,.12), 0 24px 38px 3px rgba(0,0,0,.2);
\t\t\t\t\t    width: 600px;
\t\t\t\t\t}
\t\t\t\t\t.mdl-dialog__actions {
\t\t\t\t\t     padding: 0px 50px 0px 50px; 
\t\t\t\t\t    display: -webkit-flex;
\t\t\t\t\t    display: -ms-flexbox;
\t\t\t\t\t    /* display: flex; */
\t\t\t\t\t    -webkit-flex-direction: row-reverse;
\t\t\t\t\t    -ms-flex-direction: row-reverse;
\t\t\t\t\t    flex-direction: row-reverse;
\t\t\t\t\t    -webkit-flex-wrap: wrap;
\t\t\t\t\t    -ms-flex-wrap: wrap;
\t\t\t\t\t    flex-wrap: wrap;
\t\t\t\t\t}
\t\t\t\t</style>
\t\t\t\t
\t\t\t\t\t  <dialog class=\"mdl-dialog dialog-pago\">
\t\t\t\t\t    <h4 class=\"mdl-dialog__title\">Sesión de Pago</h4>
\t\t\t\t\t    <div class=\"mdl-dialog__content\">
\t\t\t\t\t      <form id=\"pagar\" action=\"{{ path('pagarCarrito')}}\" method=\"GET\">
\t\t\t\t\t      \t<div class=\"row\">
\t\t\t\t\t      \t\t<div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\" style=\"width:100%\">
\t\t\t\t\t\t\t\t    <input class=\"mdl-textfield__input\" type=\"text\" id=\"direccionEnvio\" name=\"direccionEnvio\">
\t\t\t\t\t\t\t\t    <label class=\"mdl-textfield__label\" for=\"direccionEnvio\">Dirección de Envío</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t      \t</div>
\t\t\t\t\t      \t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
\t\t\t\t\t\t\t\t    <input class=\"mdl-textfield__input\" type=\"text\" pattern=\"-?[0-9]*(\\.[0-9]+)?\" id=\"numeroTarjeta\" name=\"numeroTarjeta\" maxlength=\"16\" minlength=\"16\" data-inputmask=\"'mask': '9999 9999 9999 9999'\">
\t\t\t\t\t\t\t\t    <label class=\"mdl-textfield__label\" for=\"numeroTarjeta\">Número de Tarjeta</label>
\t\t\t\t\t\t\t\t    <span class=\"mdl-textfield__error\">Ingresa solo números, debe ser de 20 digitos</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
\t\t\t\t\t\t\t\t    <input class=\"mdl-textfield__input\" type=\"password\" pattern=\"-?[0-9]*(\\.[0-9]+)?\" id=\"cvc\" name=\"cvc\" maxlength=\"3\" minlength=\"3\">
\t\t\t\t\t\t\t\t    <label class=\"mdl-textfield__label\" for=\"cvc\">CVC</label>
\t\t\t\t\t\t\t\t    <span class=\"mdl-textfield__error\">Ingresa solo números, debe ser de 3 digitos</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 \">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 drop-bottom\" required>
\t\t\t\t\t\t\t\t    <label class=\"mdl-radio mdl-js-radio mdl-js-ripple-effect\" for=\"option-1\">
\t\t\t\t\t\t\t\t\t  <input type=\"radio\" id=\"option-1\" class=\"mdl-radio__button\" name=\"tipoPago\" value=\"debito\">
\t\t\t\t\t\t\t\t\t  <span class=\"mdl-radio__label\">Débito           <i class=\"fa fa-credit-card\" style=\"font-size:24px\">      <i class=\"fa fa-google-wallet\" style=\"font-size:24px\"></i></i></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<label class=\"mdl-radio mdl-js-radio mdl-js-ripple-effect\" for=\"option-2\">
\t\t\t\t\t\t\t\t\t  <input type=\"radio\" id=\"option-2\" class=\"mdl-radio__button\" name=\"tipoPago\" value=\"credito\">
\t\t\t\t\t\t\t\t\t  <span class=\"mdl-radio__label\">Crédito <i class=\"fa fa-cc-visa\" style=\"font-size:24px\"></i>      <i class=\"fa fa-cc-mastercard\" style=\"font-size:24px\"></i>      <i class=\"fa fa-cc-amex\" style=\"font-size:24px\"></i></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<label class=\"mdl-radio mdl-js-radio mdl-js-ripple-effect\"  for=\"option-3\">
\t\t\t\t\t\t\t\t\t  <input type=\"radio\" id=\"option-3\" class=\"mdl-radio__button\" name=\"tipoPago\" value=\"paypal\">
\t\t\t\t\t\t\t\t\t  <span class=\"mdl-radio__label\">Paypal   <i class=\"fa fa-cc-paypal\" style=\"font-size:24px\"></i></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t      \t</div>
\t\t\t\t\t      \t<div class=\"row\">
\t\t\t\t\t      \t\t<h4>Monto Total:    {{total}} COP</h4>
\t\t\t\t\t      \t\t{% set totalDolar = total / 2977.99 %}
\t\t\t\t\t      \t\t<input type=\"hidden\" name=\"montoTotal\" value=\"{{totalDolar}}\">
\t\t\t\t\t      \t\t<input id=\"fecha\" type=\"hidden\" name=\"fecha\" value=\"\">
\t\t\t\t\t      \t</div>
\t\t\t\t\t      \t
\t\t\t\t\t      </form>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"mdl-dialog__actions\">
\t\t\t\t\t      <button id=\"show-dialog-pago\" class=\"btn \" style=\"background-color: #00c853;color:white; width:100%\" onclick=\"checkForm()\">PAGAR</button>
\t\t\t\t\t      <br>
\t\t\t\t\t      <br>
\t\t\t\t\t      <br>
\t\t\t\t\t      <button type=\"button\" class=\"mdl-button close\" >Cancelar</button>
\t\t\t\t\t    </div>
\t\t\t\t\t  </dialog>
\t\t\t\t\t  <script>
\t\t\t\t\t  function checkForm(){
\t\t\t\t\t  \t\tvar direccion = document.getElementById(\"direccionEnvio\").value;
\t\t\t\t\t  \t\tvar tarjeta = document.getElementById(\"numeroTarjeta\").value;
\t\t\t\t\t  \t\tvar cvc = document.getElementById(\"cvc\").value;
\t\t\t\t\t  \t\tvar tipo = \$('input[type=radio][name=tipoPago]:checked').val();
\t\t\t\t\t  \t\tif(direccion==\"\" || tarjeta==\"\" || cvc==\"\" || tipo == null){
\t\t\t\t\t  \t\t\talert('Recuerda llenar el formulario de pago');
\t\t\t\t\t  \t\t}
\t\t\t\t\t  \t\telse{
\t\t\t\t\t  \t\t\tdocument.getElementById(\"pagar\").submit();
\t\t\t\t\t  \t\t}
\t\t\t\t\t  \t}
\t\t\t\t\t    var dialogPago = document.querySelector('.dialog-pago');
\t\t\t\t\t    var botonPago = document.querySelector('#show-dialog-pago');
\t\t\t\t\t    if (! dialogPago.showModal) {
\t\t\t\t\t      dialogPolyfill.registerDialog(dialogPago);
\t\t\t\t\t    }
\t\t\t\t\t    botonPago.addEventListener('click', function() {
\t\t\t\t\t      dialogPago.showModal();
\t\t\t\t\t    });
\t\t\t\t\t    dialogPago.querySelector('.close').addEventListener('click', function() {
\t\t\t\t\t      dialogPago.close();
\t\t\t\t\t    });
\t\t\t\t\t  </script>
</div>
</div>
\t<br>
\t<br>
{% endif %}

{% if app.user.pais == \"US\" %}
<div class=\"card\" style=\"\">
<div class=\"container\">
\t<table id=\"cart\" class=\"table table-hover table-condensed\">
    \t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th style=\"width:60%\" class=\"\">Producto</th>
\t\t\t\t\t\t\t<th style=\"width:20%\" class=\"\">Precio</th>
\t\t\t\t\t\t\t<th style=\"width:20%\" class=\"text-center center-text\">Acciones</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% set total = 0 %}
\t\t\t\t\t\t{% for product in productos %}
\t\t\t\t\t\t{% set total = total + product.precio %}
\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-th=\"Product\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 hidden-xs\"><img src=\"{{product.link}}\" alt=\"...\" class=\"img-responsive\" width=\"100px\" height=\"100px\"/></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"nomargin\">{{product.nombre}}</h4>
\t\t\t\t\t\t\t\t\t\t<p>{{product.descripcion}}</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-th=\"Price\">{{product.precio}} \$</td>
\t\t\t\t\t\t\t<form action=\"{{ path('removeProducto' , { 'id' : product.id})}}\" method=\"POST\">
\t\t\t\t\t\t\t\t<td class=\"actions text-center center-text\"  data-th=\"\">
\t\t\t\t\t\t\t\t\t<button id=\"delete{{product.id}}\" class=\"btn \" style=\"background-color: #f44336;color:white; width:50%\"type=\"submit\"><i class=\"material-icons\">delete</i></button>
\t\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"delete{{product.id}}\">
\t\t\t\t\t\t\t\t\t\tBorrar
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"\" class=\"\"></td>
\t\t\t\t\t\t\t<td class=\"\"><strong>Total:{{total}} \$</strong></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<button onclick=\"getFecha()\"id=\"show-dialog-pago\" class=\"btn \" style=\"background-color: #00c853;color:white; width:100%\" type=\"button\">Checkout > </button>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t</table>
\t\t\t\t<script>
\t\t\t\t\tfunction getFecha(){
\t\t\t\t\t\tn =  new Date();
\t\t\t\t\t\ty = n.getFullYear();
\t\t\t\t\t\tm = n.getMonth() + 1;
\t\t\t\t\t\td = n.getDate();
\t\t\t\t\t\tdocument.getElementById(\"fecha\").value = m + \"/\" + d + \"/\" + y;
\t\t\t\t\t}
\t\t\t\t</script>
\t\t\t\t<style>
\t\t\t\t\t.mdl-dialog {
\t\t\t\t\t    border: none;
\t\t\t\t\t    box-shadow: 0 9px 46px 8px rgba(0,0,0,.14), 0 11px 15px -7px rgba(0,0,0,.12), 0 24px 38px 3px rgba(0,0,0,.2);
\t\t\t\t\t    width: 600px;
\t\t\t\t\t}
\t\t\t\t\t.mdl-dialog__actions {
\t\t\t\t\t     padding: 0px 50px 0px 50px; 
\t\t\t\t\t    display: -webkit-flex;
\t\t\t\t\t    display: -ms-flexbox;
\t\t\t\t\t    /* display: flex; */
\t\t\t\t\t    -webkit-flex-direction: row-reverse;
\t\t\t\t\t    -ms-flex-direction: row-reverse;
\t\t\t\t\t    flex-direction: row-reverse;
\t\t\t\t\t    -webkit-flex-wrap: wrap;
\t\t\t\t\t    -ms-flex-wrap: wrap;
\t\t\t\t\t    flex-wrap: wrap;
\t\t\t\t\t}
\t\t\t\t</style>
\t\t\t\t
\t\t\t\t\t  <dialog class=\"mdl-dialog dialog-pago\">
\t\t\t\t\t    <h4 class=\"mdl-dialog__title\">Sesión de Pago</h4>
\t\t\t\t\t    <div class=\"mdl-dialog__content\">
\t\t\t\t\t      <form id=\"pagar\" action=\"{{ path('pagarCarrito')}}\" method=\"GET\">
\t\t\t\t\t      \t<div class=\"row\">
\t\t\t\t\t      \t\t<div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\" style=\"width:100%\">
\t\t\t\t\t\t\t\t    <input class=\"mdl-textfield__input\" type=\"text\" id=\"direccionEnvio\" name=\"direccionEnvio\">
\t\t\t\t\t\t\t\t    <label class=\"mdl-textfield__label\" for=\"direccionEnvio\">Dirección de Envío</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t      \t</div>
\t\t\t\t\t      \t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
\t\t\t\t\t\t\t\t    <input class=\"mdl-textfield__input\" type=\"text\" pattern=\"-?[0-9]*(\\.[0-9]+)?\" id=\"numeroTarjeta\" name=\"numeroTarjeta\" maxlength=\"16\" minlength=\"16\" data-inputmask=\"'mask': '9999 9999 9999 9999'\">
\t\t\t\t\t\t\t\t    <label class=\"mdl-textfield__label\" for=\"numeroTarjeta\">Número de Tarjeta</label>
\t\t\t\t\t\t\t\t    <span class=\"mdl-textfield__error\">Ingresa solo números, debe ser de 20 digitos</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
\t\t\t\t\t\t\t\t    <input class=\"mdl-textfield__input\" type=\"password\" pattern=\"-?[0-9]*(\\.[0-9]+)?\" id=\"cvc\" name=\"cvc\" maxlength=\"3\" minlength=\"3\">
\t\t\t\t\t\t\t\t    <label class=\"mdl-textfield__label\" for=\"cvc\">CVC</label>
\t\t\t\t\t\t\t\t    <span class=\"mdl-textfield__error\">Ingresa solo números, debe ser de 3 digitos</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 \">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 drop-bottom\" required>
\t\t\t\t\t\t\t\t    <label class=\"mdl-radio mdl-js-radio mdl-js-ripple-effect\" for=\"option-1\">
\t\t\t\t\t\t\t\t\t  <input type=\"radio\" id=\"option-1\" class=\"mdl-radio__button\" name=\"tipoPago\" value=\"debito\">
\t\t\t\t\t\t\t\t\t  <span class=\"mdl-radio__label\">Débito           <i class=\"fa fa-credit-card\" style=\"font-size:24px\">      <i class=\"fa fa-google-wallet\" style=\"font-size:24px\"></i></i></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<label class=\"mdl-radio mdl-js-radio mdl-js-ripple-effect\" for=\"option-2\">
\t\t\t\t\t\t\t\t\t  <input type=\"radio\" id=\"option-2\" class=\"mdl-radio__button\" name=\"tipoPago\" value=\"credito\">
\t\t\t\t\t\t\t\t\t  <span class=\"mdl-radio__label\">Crédito <i class=\"fa fa-cc-visa\" style=\"font-size:24px\"></i>      <i class=\"fa fa-cc-mastercard\" style=\"font-size:24px\"></i>      <i class=\"fa fa-cc-amex\" style=\"font-size:24px\"></i></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<label class=\"mdl-radio mdl-js-radio mdl-js-ripple-effect\"  for=\"option-3\">
\t\t\t\t\t\t\t\t\t  <input type=\"radio\" id=\"option-3\" class=\"mdl-radio__button\" name=\"tipoPago\" value=\"paypal\">
\t\t\t\t\t\t\t\t\t  <span class=\"mdl-radio__label\">Paypal   <i class=\"fa fa-cc-paypal\" style=\"font-size:24px\"></i></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t      \t</div>
\t\t\t\t\t      \t<div class=\"row\">
\t\t\t\t\t      \t\t<h4>Monto Total:    {{total}} </h4>
\t\t\t\t\t      \t\t<input type=\"hidden\" name=\"montoTotal\" value=\"{{total}}\">
\t\t\t\t\t      \t\t<input id=\"fecha\" type=\"hidden\" name=\"fecha\" value=\"\">
\t\t\t\t\t      \t</div>
\t\t\t\t\t      \t
\t\t\t\t\t      </form>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"mdl-dialog__actions\">
\t\t\t\t\t      <button id=\"show-dialog-pago\" class=\"btn \" style=\"background-color: #00c853;color:white; width:100%\" onclick=\"checkForm()\">PAGAR</button>
\t\t\t\t\t      <br>
\t\t\t\t\t      <br>
\t\t\t\t\t      <br>
\t\t\t\t\t      <button type=\"button\" class=\"mdl-button close\" >Cancelar</button>
\t\t\t\t\t    </div>
\t\t\t\t\t  </dialog>
\t\t\t\t\t  <script>
\t\t\t\t\t  function checkForm(){
\t\t\t\t\t  \t\tvar direccion = document.getElementById(\"direccionEnvio\").value;
\t\t\t\t\t  \t\tvar tarjeta = document.getElementById(\"numeroTarjeta\").value;
\t\t\t\t\t  \t\tvar cvc = document.getElementById(\"cvc\").value;
\t\t\t\t\t  \t\tvar tipo = \$('input[type=radio][name=tipoPago]:checked').val();
\t\t\t\t\t  \t\tif(direccion==\"\" || tarjeta==\"\" || cvc==\"\" || tipo == null){
\t\t\t\t\t  \t\t\talert('Remember to fill all inputs to pay');
\t\t\t\t\t  \t\t}
\t\t\t\t\t  \t\telse{
\t\t\t\t\t  \t\t\tdocument.getElementById(\"pagar\").submit();
\t\t\t\t\t  \t\t}
\t\t\t\t\t  \t}
\t\t\t\t\t    var dialogPago = document.querySelector('.dialog-pago');
\t\t\t\t\t    var botonPago = document.querySelector('#show-dialog-pago');
\t\t\t\t\t    if (! dialogPago.showModal) {
\t\t\t\t\t      dialogPolyfill.registerDialog(dialogPago);
\t\t\t\t\t    }
\t\t\t\t\t    botonPago.addEventListener('click', function() {
\t\t\t\t\t      dialogPago.showModal();
\t\t\t\t\t    });
\t\t\t\t\t    dialogPago.querySelector('.close').addEventListener('click', function() {
\t\t\t\t\t      dialogPago.close();
\t\t\t\t\t    });
\t\t\t\t\t  </script>
</div>
</div>
\t<br>
\t<br>
{% endif %}

{% if app.user.pais == \"EN\" %}
<div class=\"card\" style=\"\">
<div class=\"container\">
\t<table id=\"cart\" class=\"table table-hover table-condensed\">
    \t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th style=\"width:60%\" class=\"\">Producto</th>
\t\t\t\t\t\t\t<th style=\"width:20%\" class=\"\">Precio</th>
\t\t\t\t\t\t\t<th style=\"width:20%\" class=\"text-center center-text\">Acciones</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% set total = 0 %}
\t\t\t\t\t\t{% for product in productos %}
\t\t\t\t\t\t{% set precio = product.precio * 0.76 %}
\t\t\t\t\t\t{% set total = total + precio %}
\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-th=\"Product\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 hidden-xs\"><img src=\"{{product.link}}\" alt=\"...\" class=\"img-responsive\" width=\"100px\" height=\"100px\"/></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"nomargin\">{{product.nombre}}</h4>
\t\t\t\t\t\t\t\t\t\t<p>{{product.descripcion}}</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-th=\"Price\">{{precio}} £</td>
\t\t\t\t\t\t\t<form action=\"{{ path('removeProducto' , { 'id' : product.id})}}\" method=\"POST\">
\t\t\t\t\t\t\t\t<td class=\"actions text-center center-text\"  data-th=\"\">
\t\t\t\t\t\t\t\t\t<button id=\"delete{{product.id}}\" class=\"btn \" style=\"background-color: #f44336;color:white; width:50%\"type=\"submit\"><i class=\"material-icons\">delete</i></button>
\t\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"delete{{product.id}}\">
\t\t\t\t\t\t\t\t\t\tBorrar
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"\" class=\"\"></td>
\t\t\t\t\t\t\t<td class=\"\"><strong>Total:{{total}} £</strong></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<button onclick=\"getFecha()\"id=\"show-dialog-pago\" class=\"btn \" style=\"background-color: #00c853;color:white; width:100%\" type=\"button\">Checkout > </button>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t</table>
\t\t\t\t<script>
\t\t\t\t\tfunction getFecha(){
\t\t\t\t\t\tn =  new Date();
\t\t\t\t\t\ty = n.getFullYear();
\t\t\t\t\t\tm = n.getMonth() + 1;
\t\t\t\t\t\td = n.getDate();
\t\t\t\t\t\tdocument.getElementById(\"fecha\").value = m + \"/\" + d + \"/\" + y;
\t\t\t\t\t}
\t\t\t\t</script>
\t\t\t\t<style>
\t\t\t\t\t.mdl-dialog {
\t\t\t\t\t    border: none;
\t\t\t\t\t    box-shadow: 0 9px 46px 8px rgba(0,0,0,.14), 0 11px 15px -7px rgba(0,0,0,.12), 0 24px 38px 3px rgba(0,0,0,.2);
\t\t\t\t\t    width: 600px;
\t\t\t\t\t}
\t\t\t\t\t.mdl-dialog__actions {
\t\t\t\t\t     padding: 0px 50px 0px 50px; 
\t\t\t\t\t    display: -webkit-flex;
\t\t\t\t\t    display: -ms-flexbox;
\t\t\t\t\t    /* display: flex; */
\t\t\t\t\t    -webkit-flex-direction: row-reverse;
\t\t\t\t\t    -ms-flex-direction: row-reverse;
\t\t\t\t\t    flex-direction: row-reverse;
\t\t\t\t\t    -webkit-flex-wrap: wrap;
\t\t\t\t\t    -ms-flex-wrap: wrap;
\t\t\t\t\t    flex-wrap: wrap;
\t\t\t\t\t}
\t\t\t\t</style>
\t\t\t\t
\t\t\t\t\t  <dialog class=\"mdl-dialog dialog-pago\">
\t\t\t\t\t    <h4 class=\"mdl-dialog__title\">Sesión de Pago</h4>
\t\t\t\t\t    <div class=\"mdl-dialog__content\">
\t\t\t\t\t      <form id=\"pagar\" action=\"{{ path('pagarCarrito')}}\" method=\"GET\">
\t\t\t\t\t      \t<div class=\"row\">
\t\t\t\t\t      \t\t<div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\" style=\"width:100%\">
\t\t\t\t\t\t\t\t    <input class=\"mdl-textfield__input\" type=\"text\" id=\"direccionEnvio\" name=\"direccionEnvio\">
\t\t\t\t\t\t\t\t    <label class=\"mdl-textfield__label\" for=\"direccionEnvio\">Dirección de Envío</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t      \t</div>
\t\t\t\t\t      \t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
\t\t\t\t\t\t\t\t    <input class=\"mdl-textfield__input\" type=\"text\" pattern=\"-?[0-9]*(\\.[0-9]+)?\" id=\"numeroTarjeta\" name=\"numeroTarjeta\" maxlength=\"16\" minlength=\"16\" data-inputmask=\"'mask': '9999 9999 9999 9999'\">
\t\t\t\t\t\t\t\t    <label class=\"mdl-textfield__label\" for=\"numeroTarjeta\">Número de Tarjeta</label>
\t\t\t\t\t\t\t\t    <span class=\"mdl-textfield__error\">Ingresa solo números, debe ser de 20 digitos</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
\t\t\t\t\t\t\t\t    <input class=\"mdl-textfield__input\" type=\"password\" pattern=\"-?[0-9]*(\\.[0-9]+)?\" id=\"cvc\" name=\"cvc\" maxlength=\"3\" minlength=\"3\">
\t\t\t\t\t\t\t\t    <label class=\"mdl-textfield__label\" for=\"cvc\">CVC</label>
\t\t\t\t\t\t\t\t    <span class=\"mdl-textfield__error\">Ingresa solo números, debe ser de 3 digitos</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 \">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 drop-bottom\" required>
\t\t\t\t\t\t\t\t    <label class=\"mdl-radio mdl-js-radio mdl-js-ripple-effect\" for=\"option-1\">
\t\t\t\t\t\t\t\t\t  <input type=\"radio\" id=\"option-1\" class=\"mdl-radio__button\" name=\"tipoPago\" value=\"debito\">
\t\t\t\t\t\t\t\t\t  <span class=\"mdl-radio__label\">Débito           <i class=\"fa fa-credit-card\" style=\"font-size:24px\">      <i class=\"fa fa-google-wallet\" style=\"font-size:24px\"></i></i></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<label class=\"mdl-radio mdl-js-radio mdl-js-ripple-effect\" for=\"option-2\">
\t\t\t\t\t\t\t\t\t  <input type=\"radio\" id=\"option-2\" class=\"mdl-radio__button\" name=\"tipoPago\" value=\"credito\">
\t\t\t\t\t\t\t\t\t  <span class=\"mdl-radio__label\">Crédito <i class=\"fa fa-cc-visa\" style=\"font-size:24px\"></i>      <i class=\"fa fa-cc-mastercard\" style=\"font-size:24px\"></i>      <i class=\"fa fa-cc-amex\" style=\"font-size:24px\"></i></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<label class=\"mdl-radio mdl-js-radio mdl-js-ripple-effect\"  for=\"option-3\">
\t\t\t\t\t\t\t\t\t  <input type=\"radio\" id=\"option-3\" class=\"mdl-radio__button\" name=\"tipoPago\" value=\"paypal\">
\t\t\t\t\t\t\t\t\t  <span class=\"mdl-radio__label\">Paypal   <i class=\"fa fa-cc-paypal\" style=\"font-size:24px\"></i></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t      \t</div>
\t\t\t\t\t      \t<div class=\"row\">
\t\t\t\t\t      \t\t<h4>Monto Total:    {{total}} £</h4>
\t\t\t\t\t      \t\t{% set totalDolar = total / 0.76 %}
\t\t\t\t\t      \t\t<input type=\"hidden\" name=\"montoTotal\" value=\"{{totalDolar}}\">
\t\t\t\t\t      \t\t<input id=\"fecha\" type=\"hidden\" name=\"fecha\" value=\"\">
\t\t\t\t\t      \t</div>
\t\t\t\t\t      \t
\t\t\t\t\t      </form>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"mdl-dialog__actions\">
\t\t\t\t\t      <button id=\"show-dialog-pago\" class=\"btn \" style=\"background-color: #00c853;color:white; width:100%\" onclick=\"checkForm()\">PAGAR</button>
\t\t\t\t\t      <br>
\t\t\t\t\t      <br>
\t\t\t\t\t      <br>
\t\t\t\t\t      <button type=\"button\" class=\"mdl-button close\" >Cancelar</button>
\t\t\t\t\t    </div>
\t\t\t\t\t  </dialog>
\t\t\t\t\t  <script>
\t\t\t\t\t  function checkForm(){
\t\t\t\t\t  \t\tvar direccion = document.getElementById(\"direccionEnvio\").value;
\t\t\t\t\t  \t\tvar tarjeta = document.getElementById(\"numeroTarjeta\").value;
\t\t\t\t\t  \t\tvar cvc = document.getElementById(\"cvc\").value;
\t\t\t\t\t  \t\tvar tipo = \$('input[type=radio][name=tipoPago]:checked').val();
\t\t\t\t\t  \t\tif(direccion==\"\" || tarjeta==\"\" || cvc==\"\" || tipo == null){
\t\t\t\t\t  \t\t\talert('Remember to fill all inputs to pay');
\t\t\t\t\t  \t\t}
\t\t\t\t\t  \t\telse{
\t\t\t\t\t  \t\t\tdocument.getElementById(\"pagar\").submit();
\t\t\t\t\t  \t\t}
\t\t\t\t\t  \t}
\t\t\t\t\t    var dialogPago = document.querySelector('.dialog-pago');
\t\t\t\t\t    var botonPago = document.querySelector('#show-dialog-pago');
\t\t\t\t\t    if (! dialogPago.showModal) {
\t\t\t\t\t      dialogPolyfill.registerDialog(dialogPago);
\t\t\t\t\t    }
\t\t\t\t\t    botonPago.addEventListener('click', function() {
\t\t\t\t\t      dialogPago.showModal();
\t\t\t\t\t    });
\t\t\t\t\t    dialogPago.querySelector('.close').addEventListener('click', function() {
\t\t\t\t\t      dialogPago.close();
\t\t\t\t\t    });
\t\t\t\t\t  </script>
</div>
</div>
\t<br>
\t<br>
{% endif %}

 <script>
// // Example starter JavaScript for disabling form submissions if there are invalid fields
// (function() {
//   'use strict';

//   window.addEventListener('load', function() {
//     var form = document.getElementById('pagar');
//     form.addEventListener('submit', function(event) {
//       if (form.checkValidity() === false) {
//         event.preventDefault();
//         event.stopPropagation();
//       }
//       form.classList.add('was-validated');
//     }, false);
//   }, false);
// })();
 </script>


{% endblock %}", "carrito.html.twig", "/home/ubuntu/workspace/app/Resources/views/carrito.html.twig");
    }
}
