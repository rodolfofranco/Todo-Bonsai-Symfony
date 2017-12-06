<?php

/* wishlist.html.twig */
class __TwigTemplate_560c4c147170d83017c79e49a223db149c52c1e6d0611f06577865c8ef3d7d4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "wishlist.html.twig", 1);
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
        $__internal_a1a799f61c1f8942b3721cec09f38bb846b6c4702d0faeb789a7bc0b84091286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1a799f61c1f8942b3721cec09f38bb846b6c4702d0faeb789a7bc0b84091286->enter($__internal_a1a799f61c1f8942b3721cec09f38bb846b6c4702d0faeb789a7bc0b84091286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "wishlist.html.twig"));

        $__internal_f921230cdf09ad5818e650094ad2f4f464150163fade5ea7c89204fa4f0afe58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f921230cdf09ad5818e650094ad2f4f464150163fade5ea7c89204fa4f0afe58->enter($__internal_f921230cdf09ad5818e650094ad2f4f464150163fade5ea7c89204fa4f0afe58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "wishlist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1a799f61c1f8942b3721cec09f38bb846b6c4702d0faeb789a7bc0b84091286->leave($__internal_a1a799f61c1f8942b3721cec09f38bb846b6c4702d0faeb789a7bc0b84091286_prof);

        
        $__internal_f921230cdf09ad5818e650094ad2f4f464150163fade5ea7c89204fa4f0afe58->leave($__internal_f921230cdf09ad5818e650094ad2f4f464150163fade5ea7c89204fa4f0afe58_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7f99c2e2745a8cb3ca9000ddbdf4d6c994fa9d5f7456c9d982bf552398c742eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f99c2e2745a8cb3ca9000ddbdf4d6c994fa9d5f7456c9d982bf552398c742eb->enter($__internal_7f99c2e2745a8cb3ca9000ddbdf4d6c994fa9d5f7456c9d982bf552398c742eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8f1d265a68d4db400eb7ce5695302c1cd8c215a443a71c8119130d9ddbc998ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f1d265a68d4db400eb7ce5695302c1cd8c215a443a71c8119130d9ddbc998ba->enter($__internal_8f1d265a68d4db400eb7ce5695302c1cd8c215a443a71c8119130d9ddbc998ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_8f1d265a68d4db400eb7ce5695302c1cd8c215a443a71c8119130d9ddbc998ba->leave($__internal_8f1d265a68d4db400eb7ce5695302c1cd8c215a443a71c8119130d9ddbc998ba_prof);

        
        $__internal_7f99c2e2745a8cb3ca9000ddbdf4d6c994fa9d5f7456c9d982bf552398c742eb->leave($__internal_7f99c2e2745a8cb3ca9000ddbdf4d6c994fa9d5f7456c9d982bf552398c742eb_prof);

    }

    // line 6
    public function block_toplinks($context, array $blocks = array())
    {
        $__internal_31c1a02da53e9cb670426ffac452b25180c35f60bfb23f5700b978ca1aeb0677 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31c1a02da53e9cb670426ffac452b25180c35f60bfb23f5700b978ca1aeb0677->enter($__internal_31c1a02da53e9cb670426ffac452b25180c35f60bfb23f5700b978ca1aeb0677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toplinks"));

        $__internal_5668824fa850d3a2fe9b3344b855a04a26d670d30a3e93afa4a5e350c69ed9d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5668824fa850d3a2fe9b3344b855a04a26d670d30a3e93afa4a5e350c69ed9d6->enter($__internal_5668824fa850d3a2fe9b3344b855a04a26d670d30a3e93afa4a5e350c69ed9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toplinks"));

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
        // line 78
        echo " 
    
";
        
        $__internal_5668824fa850d3a2fe9b3344b855a04a26d670d30a3e93afa4a5e350c69ed9d6->leave($__internal_5668824fa850d3a2fe9b3344b855a04a26d670d30a3e93afa4a5e350c69ed9d6_prof);

        
        $__internal_31c1a02da53e9cb670426ffac452b25180c35f60bfb23f5700b978ca1aeb0677->leave($__internal_31c1a02da53e9cb670426ffac452b25180c35f60bfb23f5700b978ca1aeb0677_prof);

    }

    // line 82
    public function block_links($context, array $blocks = array())
    {
        $__internal_c9c7b905839ad9127ca006e2101f9fc999c0c30a93bc413dd6449b3e621f46fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9c7b905839ad9127ca006e2101f9fc999c0c30a93bc413dd6449b3e621f46fe->enter($__internal_c9c7b905839ad9127ca006e2101f9fc999c0c30a93bc413dd6449b3e621f46fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "links"));

        $__internal_8a121ba4b3bcd96132b3f33e78febc6d2be87493081a78117a75a290ebe5b79b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a121ba4b3bcd96132b3f33e78febc6d2be87493081a78117a75a290ebe5b79b->enter($__internal_8a121ba4b3bcd96132b3f33e78febc6d2be87493081a78117a75a290ebe5b79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "links"));

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
        
        $__internal_8a121ba4b3bcd96132b3f33e78febc6d2be87493081a78117a75a290ebe5b79b->leave($__internal_8a121ba4b3bcd96132b3f33e78febc6d2be87493081a78117a75a290ebe5b79b_prof);

        
        $__internal_c9c7b905839ad9127ca006e2101f9fc999c0c30a93bc413dd6449b3e621f46fe->leave($__internal_c9c7b905839ad9127ca006e2101f9fc999c0c30a93bc413dd6449b3e621f46fe_prof);

    }

    // line 159
    public function block_test($context, array $blocks = array())
    {
        $__internal_63b475382b0efcfa90b3e1689cf4a9ad0572462cd63d48c5fbd25b7dd74ee66c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63b475382b0efcfa90b3e1689cf4a9ad0572462cd63d48c5fbd25b7dd74ee66c->enter($__internal_63b475382b0efcfa90b3e1689cf4a9ad0572462cd63d48c5fbd25b7dd74ee66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "test"));

        $__internal_32fe1f8c5047a03cb47c141deb58c4b9121d2157c8bd83de90edcf541adf4f85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32fe1f8c5047a03cb47c141deb58c4b9121d2157c8bd83de90edcf541adf4f85->enter($__internal_32fe1f8c5047a03cb47c141deb58c4b9121d2157c8bd83de90edcf541adf4f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "test"));

        echo " 

          <form id=\"form-login\" action=\"";
        // line 161
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
        
        $__internal_32fe1f8c5047a03cb47c141deb58c4b9121d2157c8bd83de90edcf541adf4f85->leave($__internal_32fe1f8c5047a03cb47c141deb58c4b9121d2157c8bd83de90edcf541adf4f85_prof);

        
        $__internal_63b475382b0efcfa90b3e1689cf4a9ad0572462cd63d48c5fbd25b7dd74ee66c->leave($__internal_63b475382b0efcfa90b3e1689cf4a9ad0572462cd63d48c5fbd25b7dd74ee66c_prof);

    }

    // line 178
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_447be1d1b3b5aa2fd7f43ec6020ad7cd6013049612b55f48d303d85e0b11fe49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_447be1d1b3b5aa2fd7f43ec6020ad7cd6013049612b55f48d303d85e0b11fe49->enter($__internal_447be1d1b3b5aa2fd7f43ec6020ad7cd6013049612b55f48d303d85e0b11fe49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_a032fcb77935900b0b7c6c66d0b2a66f5f4e784b68e26bda800b91846b61b8d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a032fcb77935900b0b7c6c66d0b2a66f5f4e784b68e26bda800b91846b61b8d2->enter($__internal_a032fcb77935900b0b7c6c66d0b2a66f5f4e784b68e26bda800b91846b61b8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 179
        echo "
<h2>Wishlist</h2>

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
        // line 220
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "US")) {
            // line 221
            echo "<div class=\"card\" style=\"\">
<div class=\"container\">
\t<table id=\"cart\" class=\"table table-hover table-condensed\">
    \t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th style=\"width:60%\" class=\"\">Product</th>
\t\t\t\t\t\t\t<th style=\"width:20%\" class=\"\">Price</th>
\t\t\t\t\t\t\t<th style=\"width:20%\" class=\"text-center center-text\">Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 232
            $context["total"] = 0;
            // line 233
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 234
                echo "\t\t\t\t\t\t";
                $context["total"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + $this->getAttribute($context["product"], "precio", array()));
                // line 235
                echo "\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-th=\"Product\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 hidden-xs\"><img src=\"";
                // line 239
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                echo "\" alt=\"...\" class=\"img-responsive\" width=\"100px\" height=\"100px\"/></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"nomargin\">";
                // line 241
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t<p>";
                // line 242
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "descripcion", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-th=\"Price\">";
                // line 246
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "precio", array()), "html", null, true);
                echo " \$</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td class=\"actions\" data-th=\"\" style=\"text-center center-text\">
\t\t\t\t\t\t\t\t\t<div class=\"text-center center-text\">

\t\t\t\t\t\t\t\t\t\t<form action=\"";
                // line 251
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeWishlist", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                echo "\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t<button id=\"delete";
                // line 252
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "\" class=\"btn\" style=\"width:50%; background-color: #f44336; color:white\" type=\"submit\"><i class=\"material-icons\">delete</i></button>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<form action=\"";
                // line 255
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarProducto", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                echo "\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t<button id=\"add";
                // line 256
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "\" class=\"btn\" type=\"submit\" style=\"width:50%; background-color:#00c853; color:white; font-weight:bold\"><i class=\"material-icons\">add_shopping_cart</i></button>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"delete";
                // line 260
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\tDelete
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"add";
                // line 263
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\tAdd to Shopping Cart
\t\t\t\t\t\t\t\t\t</div>
\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
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
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</tfoot>
\t\t\t\t\t
\t\t\t\t</table>
</div>
</div>
\t<br>
\t<br>
";
        }
        // line 285
        echo "
";
        // line 286
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "EN")) {
            // line 287
            echo "<div class=\"card\" style=\"\">
<div class=\"container\">
\t<table id=\"cart\" class=\"table table-hover table-condensed\">
    \t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th style=\"width:60%\" class=\"\">Product</th>
\t\t\t\t\t\t\t<th style=\"width:20%\" class=\"\">Price</th>
\t\t\t\t\t\t\t<th style=\"width:20%\" class=\"text-center center-text\">Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 298
            $context["total"] = 0;
            // line 299
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 300
                echo "
\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-th=\"Product\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 hidden-xs\"><img src=\"";
                // line 305
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                echo "\" alt=\"...\" class=\"img-responsive\" width=\"100px\" height=\"100px\"/></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"nomargin\">";
                // line 307
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t<p>";
                // line 308
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "descripcion", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-th=\"Price\">";
                // line 312
                echo twig_escape_filter($this->env, ($this->getAttribute($context["product"], "precio", array()) * 0.76), "html", null, true);
                echo " £</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td class=\"actions\" data-th=\"\" style=\"text-center center-text\">
\t\t\t\t\t\t\t\t\t<div class=\"text-center center-text\">

\t\t\t\t\t\t\t\t\t\t<form action=\"";
                // line 317
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeWishlist", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                echo "\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t<button id=\"delete";
                // line 318
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "\" class=\"btn\" style=\"width:50%; background-color: #f44336; color:white\" type=\"submit\"><i class=\"material-icons\">delete</i></button>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<form action=\"";
                // line 321
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarProducto", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                echo "\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t<button id=\"add";
                // line 322
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "\" class=\"btn\" type=\"submit\" style=\"width:50%; background-color:#00c853; color:white; font-weight:bold\"><i class=\"material-icons\">add_shopping_cart</i></button>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"delete";
                // line 326
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\tDelete
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"add";
                // line 329
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\tAdd to Shopping Cart
\t\t\t\t\t\t\t\t\t</div>
\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 338
            echo "\t\t\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</tfoot>
\t\t\t\t\t
\t\t\t\t</table>
</div>
</div>
\t<br>
\t<br>
";
        }
        // line 351
        echo "
";
        // line 352
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "CO")) {
            // line 353
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
            // line 364
            $context["total"] = 0;
            // line 365
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 366
                echo "
\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-th=\"Product\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 hidden-xs\"><img src=\"";
                // line 371
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                echo "\" alt=\"...\" class=\"img-responsive\" width=\"100px\" height=\"100px\"/></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"nomargin\">";
                // line 373
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t<p>";
                // line 374
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "descripcion", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-th=\"Price\">";
                // line 378
                echo twig_escape_filter($this->env, ($this->getAttribute($context["product"], "precio", array()) * 2977.99), "html", null, true);
                echo " COP</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td class=\"actions\" data-th=\"\" style=\"text-center center-text\">
\t\t\t\t\t\t\t\t\t<div class=\"text-center center-text\">

\t\t\t\t\t\t\t\t\t\t<form action=\"";
                // line 383
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeWishlist", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                echo "\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t<button id=\"delete";
                // line 384
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "\" class=\"btn\" style=\"width:50%; background-color: #f44336; color:white\" type=\"submit\"><i class=\"material-icons\">delete</i></button>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<form action=\"";
                // line 387
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarProducto", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                echo "\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t<button id=\"add";
                // line 388
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "\" class=\"btn\" type=\"submit\" style=\"width:50%; background-color:#00c853; color:white; font-weight:bold\"><i class=\"material-icons\">add_shopping_cart</i></button>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"delete";
                // line 392
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\tBorrar
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"add";
                // line 395
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\tAgregar al Carro de Compras
\t\t\t\t\t\t\t\t\t</div>
\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 404
            echo "\t\t\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</tfoot>
\t\t\t\t\t
\t\t\t\t</table>
</div>
</div>
\t<br>
\t<br>
";
        }
        // line 417
        echo "
";
        // line 418
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "VE")) {
            // line 419
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
            // line 430
            $context["total"] = 0;
            // line 431
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 432
                echo "
\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-th=\"Product\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 hidden-xs\"><img src=\"";
                // line 437
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                echo "\" alt=\"...\" class=\"img-responsive\" width=\"100px\" height=\"100px\"/></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"nomargin\">";
                // line 439
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t<p>";
                // line 440
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "descripcion", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-th=\"Price\">";
                // line 444
                echo twig_escape_filter($this->env, ($this->getAttribute($context["product"], "precio", array()) * 35000), "html", null, true);
                echo " BsF</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td class=\"actions\" data-th=\"\" style=\"text-center center-text\">
\t\t\t\t\t\t\t\t\t<div class=\"text-center center-text\">

\t\t\t\t\t\t\t\t\t\t<form action=\"";
                // line 449
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeWishlist", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                echo "\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t<button id=\"delete";
                // line 450
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "\" class=\"btn\" style=\"width:50%; background-color: #f44336; color:white\" type=\"submit\"><i class=\"material-icons\">delete</i></button>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<form action=\"";
                // line 453
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarProducto", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                echo "\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t<button id=\"add";
                // line 454
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "\" class=\"btn\" type=\"submit\" style=\"width:50%; background-color:#00c853; color:white; font-weight:bold\"><i class=\"material-icons\">add_shopping_cart</i></button>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"delete";
                // line 458
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\tBorrar
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"add";
                // line 461
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\tAgregar al Carro de Compras
\t\t\t\t\t\t\t\t\t</div>
\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 470
            echo "\t\t\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</tfoot>
\t\t\t\t\t
\t\t\t\t</table>
</div>
</div>
\t<br>
\t<br>
";
        }
        // line 483
        echo "

";
        
        $__internal_a032fcb77935900b0b7c6c66d0b2a66f5f4e784b68e26bda800b91846b61b8d2->leave($__internal_a032fcb77935900b0b7c6c66d0b2a66f5f4e784b68e26bda800b91846b61b8d2_prof);

        
        $__internal_447be1d1b3b5aa2fd7f43ec6020ad7cd6013049612b55f48d303d85e0b11fe49->leave($__internal_447be1d1b3b5aa2fd7f43ec6020ad7cd6013049612b55f48d303d85e0b11fe49_prof);

    }

    public function getTemplateName()
    {
        return "wishlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  912 => 483,  897 => 470,  882 => 461,  876 => 458,  869 => 454,  865 => 453,  859 => 450,  855 => 449,  847 => 444,  840 => 440,  836 => 439,  831 => 437,  824 => 432,  819 => 431,  817 => 430,  804 => 419,  802 => 418,  799 => 417,  784 => 404,  769 => 395,  763 => 392,  756 => 388,  752 => 387,  746 => 384,  742 => 383,  734 => 378,  727 => 374,  723 => 373,  718 => 371,  711 => 366,  706 => 365,  704 => 364,  691 => 353,  689 => 352,  686 => 351,  671 => 338,  656 => 329,  650 => 326,  643 => 322,  639 => 321,  633 => 318,  629 => 317,  621 => 312,  614 => 308,  610 => 307,  605 => 305,  598 => 300,  593 => 299,  591 => 298,  578 => 287,  576 => 286,  573 => 285,  558 => 272,  543 => 263,  537 => 260,  530 => 256,  526 => 255,  520 => 252,  516 => 251,  508 => 246,  501 => 242,  497 => 241,  492 => 239,  486 => 235,  483 => 234,  478 => 233,  476 => 232,  463 => 221,  461 => 220,  418 => 179,  409 => 178,  383 => 161,  371 => 159,  360 => 155,  356 => 153,  345 => 146,  342 => 145,  335 => 140,  332 => 139,  330 => 138,  327 => 137,  323 => 135,  312 => 128,  309 => 127,  302 => 122,  299 => 121,  297 => 120,  294 => 119,  290 => 117,  279 => 110,  276 => 109,  269 => 104,  266 => 103,  264 => 102,  261 => 101,  257 => 99,  246 => 92,  243 => 91,  236 => 86,  233 => 85,  231 => 84,  228 => 83,  219 => 82,  207 => 78,  203 => 77,  192 => 70,  189 => 69,  182 => 64,  179 => 63,  177 => 62,  174 => 61,  170 => 59,  159 => 52,  156 => 51,  149 => 46,  146 => 45,  144 => 44,  141 => 43,  137 => 41,  126 => 34,  123 => 33,  116 => 28,  113 => 27,  111 => 26,  108 => 25,  104 => 23,  93 => 16,  90 => 15,  83 => 10,  80 => 9,  78 => 8,  75 => 7,  66 => 6,  53 => 3,  44 => 2,  11 => 1,);
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

<h2>Wishlist</h2>

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
    \t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th style=\"width:60%\" class=\"\">Product</th>
\t\t\t\t\t\t\t<th style=\"width:20%\" class=\"\">Price</th>
\t\t\t\t\t\t\t<th style=\"width:20%\" class=\"text-center center-text\">Actions</th>
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
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td class=\"actions\" data-th=\"\" style=\"text-center center-text\">
\t\t\t\t\t\t\t\t\t<div class=\"text-center center-text\">

\t\t\t\t\t\t\t\t\t\t<form action=\"{{ path('removeWishlist' , { 'id' : product.id})}}\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t<button id=\"delete{{product.id}}\" class=\"btn\" style=\"width:50%; background-color: #f44336; color:white\" type=\"submit\"><i class=\"material-icons\">delete</i></button>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<form action=\"{{ path('agregarProducto' , { 'id' : product.id})}}\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t<button id=\"add{{product.id}}\" class=\"btn\" type=\"submit\" style=\"width:50%; background-color:#00c853; color:white; font-weight:bold\"><i class=\"material-icons\">add_shopping_cart</i></button>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"delete{{product.id}}\">
\t\t\t\t\t\t\t\t\t\tDelete
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"add{{product.id}}\">
\t\t\t\t\t\t\t\t\t\tAdd to Shopping Cart
\t\t\t\t\t\t\t\t\t</div>
\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</tfoot>
\t\t\t\t\t
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
    \t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th style=\"width:60%\" class=\"\">Product</th>
\t\t\t\t\t\t\t<th style=\"width:20%\" class=\"\">Price</th>
\t\t\t\t\t\t\t<th style=\"width:20%\" class=\"text-center center-text\">Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% set total = 0 %}
\t\t\t\t\t\t{% for product in productos %}

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
\t\t\t\t\t\t\t<td data-th=\"Price\">{{product.precio * 0.76}} £</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td class=\"actions\" data-th=\"\" style=\"text-center center-text\">
\t\t\t\t\t\t\t\t\t<div class=\"text-center center-text\">

\t\t\t\t\t\t\t\t\t\t<form action=\"{{ path('removeWishlist' , { 'id' : product.id})}}\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t<button id=\"delete{{product.id}}\" class=\"btn\" style=\"width:50%; background-color: #f44336; color:white\" type=\"submit\"><i class=\"material-icons\">delete</i></button>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<form action=\"{{ path('agregarProducto' , { 'id' : product.id})}}\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t<button id=\"add{{product.id}}\" class=\"btn\" type=\"submit\" style=\"width:50%; background-color:#00c853; color:white; font-weight:bold\"><i class=\"material-icons\">add_shopping_cart</i></button>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"delete{{product.id}}\">
\t\t\t\t\t\t\t\t\t\tDelete
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"add{{product.id}}\">
\t\t\t\t\t\t\t\t\t\tAdd to Shopping Cart
\t\t\t\t\t\t\t\t\t</div>
\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</tfoot>
\t\t\t\t\t
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
\t\t\t\t\t\t\t<td data-th=\"Price\">{{product.precio * 2977.99}} COP</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td class=\"actions\" data-th=\"\" style=\"text-center center-text\">
\t\t\t\t\t\t\t\t\t<div class=\"text-center center-text\">

\t\t\t\t\t\t\t\t\t\t<form action=\"{{ path('removeWishlist' , { 'id' : product.id})}}\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t<button id=\"delete{{product.id}}\" class=\"btn\" style=\"width:50%; background-color: #f44336; color:white\" type=\"submit\"><i class=\"material-icons\">delete</i></button>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<form action=\"{{ path('agregarProducto' , { 'id' : product.id})}}\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t<button id=\"add{{product.id}}\" class=\"btn\" type=\"submit\" style=\"width:50%; background-color:#00c853; color:white; font-weight:bold\"><i class=\"material-icons\">add_shopping_cart</i></button>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"delete{{product.id}}\">
\t\t\t\t\t\t\t\t\t\tBorrar
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"add{{product.id}}\">
\t\t\t\t\t\t\t\t\t\tAgregar al Carro de Compras
\t\t\t\t\t\t\t\t\t</div>
\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</tfoot>
\t\t\t\t\t
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
\t\t\t\t\t\t\t<td data-th=\"Price\">{{product.precio * 35000}} BsF</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td class=\"actions\" data-th=\"\" style=\"text-center center-text\">
\t\t\t\t\t\t\t\t\t<div class=\"text-center center-text\">

\t\t\t\t\t\t\t\t\t\t<form action=\"{{ path('removeWishlist' , { 'id' : product.id})}}\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t<button id=\"delete{{product.id}}\" class=\"btn\" style=\"width:50%; background-color: #f44336; color:white\" type=\"submit\"><i class=\"material-icons\">delete</i></button>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<form action=\"{{ path('agregarProducto' , { 'id' : product.id})}}\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t<button id=\"add{{product.id}}\" class=\"btn\" type=\"submit\" style=\"width:50%; background-color:#00c853; color:white; font-weight:bold\"><i class=\"material-icons\">add_shopping_cart</i></button>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"delete{{product.id}}\">
\t\t\t\t\t\t\t\t\t\tBorrar
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"add{{product.id}}\">
\t\t\t\t\t\t\t\t\t\tAgregar al Carro de Compras
\t\t\t\t\t\t\t\t\t</div>
\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</tfoot>
\t\t\t\t\t
\t\t\t\t</table>
</div>
</div>
\t<br>
\t<br>
{% endif %}


{% endblock %}
", "wishlist.html.twig", "/home/ubuntu/workspace/app/Resources/views/wishlist.html.twig");
    }
}
