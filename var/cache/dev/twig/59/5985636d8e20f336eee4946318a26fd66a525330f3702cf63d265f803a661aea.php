<?php

/* index.html.twig */
class __TwigTemplate_167d95bb0cad9c9343e06d565aeebb357c81ae2d3b32c60db39ccbd0a5c7c922 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'toplinks' => array($this, 'block_toplinks'),
            'links' => array($this, 'block_links'),
            'test' => array($this, 'block_test'),
            'carrusel' => array($this, 'block_carrusel'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b8e4d879b05d618c119a48625600aac15a209d0c56f9d1ad7f2b9d5dbca1e15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b8e4d879b05d618c119a48625600aac15a209d0c56f9d1ad7f2b9d5dbca1e15->enter($__internal_0b8e4d879b05d618c119a48625600aac15a209d0c56f9d1ad7f2b9d5dbca1e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_50592406e965ba071ac3a2b3deceb46cddcf0c8c64028812f6903100b2562bc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50592406e965ba071ac3a2b3deceb46cddcf0c8c64028812f6903100b2562bc6->enter($__internal_50592406e965ba071ac3a2b3deceb46cddcf0c8c64028812f6903100b2562bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b8e4d879b05d618c119a48625600aac15a209d0c56f9d1ad7f2b9d5dbca1e15->leave($__internal_0b8e4d879b05d618c119a48625600aac15a209d0c56f9d1ad7f2b9d5dbca1e15_prof);

        
        $__internal_50592406e965ba071ac3a2b3deceb46cddcf0c8c64028812f6903100b2562bc6->leave($__internal_50592406e965ba071ac3a2b3deceb46cddcf0c8c64028812f6903100b2562bc6_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_40b5d936909836d620eda5be666b7309c9f19e6f479159e114a9fbff76f7f185 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40b5d936909836d620eda5be666b7309c9f19e6f479159e114a9fbff76f7f185->enter($__internal_40b5d936909836d620eda5be666b7309c9f19e6f479159e114a9fbff76f7f185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_69e00a9d2942b2135415115ae825f605cd5be7a81cee47b3cbc6dee98011cb4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e00a9d2942b2135415115ae825f605cd5be7a81cee47b3cbc6dee98011cb4e->enter($__internal_69e00a9d2942b2135415115ae825f605cd5be7a81cee47b3cbc6dee98011cb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_69e00a9d2942b2135415115ae825f605cd5be7a81cee47b3cbc6dee98011cb4e->leave($__internal_69e00a9d2942b2135415115ae825f605cd5be7a81cee47b3cbc6dee98011cb4e_prof);

        
        $__internal_40b5d936909836d620eda5be666b7309c9f19e6f479159e114a9fbff76f7f185->leave($__internal_40b5d936909836d620eda5be666b7309c9f19e6f479159e114a9fbff76f7f185_prof);

    }

    // line 7
    public function block_toplinks($context, array $blocks = array())
    {
        $__internal_7eb14d2c06d5269fa9376be47f9a33962607aa7c86809f337d45a5ff1ff958f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eb14d2c06d5269fa9376be47f9a33962607aa7c86809f337d45a5ff1ff958f4->enter($__internal_7eb14d2c06d5269fa9376be47f9a33962607aa7c86809f337d45a5ff1ff958f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toplinks"));

        $__internal_856ab583f37c2c91df0e1cd1bac6367a52b705e62840304848c077a4fbbd4a80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_856ab583f37c2c91df0e1cd1bac6367a52b705e62840304848c077a4fbbd4a80->enter($__internal_856ab583f37c2c91df0e1cd1bac6367a52b705e62840304848c077a4fbbd4a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toplinks"));

        // line 8
        echo "    
    ";
        // line 9
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 10
            echo "    
      ";
            // line 11
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "correo", array()) == "admin@admin.com")) {
                // line 12
                echo "        
        ";
                // line 13
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "VE")) {
                    // line 14
                    echo "        
              ";
                    // line 15
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        echo " 
              <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Inicio</a>
              <a class=\"mdl-navigation__link\" href=\"/admin\"> <i class=\"material-icons\">account_circle</i> Administrar Aplicacion</a>
              <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
              <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Salir</a>
              ";
                    }
                    // line 20
                    echo " 
            
        ";
                }
                // line 23
                echo "      
          ";
                // line 24
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "CO")) {
                    // line 25
                    echo "            
                ";
                    // line 26
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        echo " 
                  <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Inicio</a>
                  <a class=\"mdl-navigation__link\" href=\"/admin\"> <i class=\"material-icons\">account_circle</i> Administrar Aplicacion</a>
                  <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
                  <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Salir</a>
                ";
                    }
                    // line 31
                    echo " 
                
          ";
                }
                // line 34
                echo "          
          ";
                // line 35
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "US")) {
                    // line 36
                    echo "        
              ";
                    // line 37
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        echo " 
                <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
                <a class=\"mdl-navigation__link\" href=\"/admin\"> <i class=\"material-icons\">account_circle</i> Administrate App</a>
                <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
                <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Logout</a>
              ";
                    }
                    // line 42
                    echo " 
          ";
                }
                // line 44
                echo "          
          ";
                // line 45
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "EN")) {
                    // line 46
                    echo "        
              ";
                    // line 47
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        echo " 
                <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
                <a class=\"mdl-navigation__link\" href=\"/admin\"> <i class=\"material-icons\">account_circle</i> Administrate App</a>
                <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
                <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Logout</a>
              ";
                    }
                    // line 52
                    echo " 
              
          ";
                }
                // line 55
                echo "          
      ";
            } else {
                // line 57
                echo "      
      ";
                // line 58
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "VE")) {
                    // line 59
                    echo "        
        ";
                    // line 60
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
                    // line 67
                    echo " 
      ";
                }
                // line 69
                echo "    
      ";
                // line 70
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "CO")) {
                    // line 71
                    echo "    
        ";
                    // line 72
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
                    // line 79
                    echo " 
      ";
                }
                // line 81
                echo "    
      ";
                // line 82
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "US")) {
                    // line 83
                    echo "        
        ";
                    // line 84
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
                    // line 91
                    echo " 
      ";
                }
                // line 93
                echo "    
    ";
                // line 94
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "EN")) {
                    // line 95
                    echo "      
      ";
                    // line 96
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
                    // line 103
                    echo " 
      
    ";
                }
                // line 106
                echo "          
    ";
            }
            // line 108
            echo "    
    
    ";
        } else {
            // line 111
            echo "    
      ";
            // line 112
            if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 113
                echo "        <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
        <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
        <a class=\"mdl-navigation__link\" href=\"/register\"> <i class=\"material-icons\">person_add</i> Sign Up</a>
        <a class=\"mdl-navigation__link show-dialog\" href=\"javascript:void(0)\" id=\"show-dialog\">  <i class=\"material-icons\">person</i>Sign In</a>
      ";
            }
            // line 118
            echo "  
    ";
        }
        // line 120
        echo "    
";
        
        $__internal_856ab583f37c2c91df0e1cd1bac6367a52b705e62840304848c077a4fbbd4a80->leave($__internal_856ab583f37c2c91df0e1cd1bac6367a52b705e62840304848c077a4fbbd4a80_prof);

        
        $__internal_7eb14d2c06d5269fa9376be47f9a33962607aa7c86809f337d45a5ff1ff958f4->leave($__internal_7eb14d2c06d5269fa9376be47f9a33962607aa7c86809f337d45a5ff1ff958f4_prof);

    }

    // line 123
    public function block_links($context, array $blocks = array())
    {
        $__internal_bbf15d2cef57fb21c0c129455766ecf518a8d1d16b5fc5f0ad9ba2e6a86259c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbf15d2cef57fb21c0c129455766ecf518a8d1d16b5fc5f0ad9ba2e6a86259c1->enter($__internal_bbf15d2cef57fb21c0c129455766ecf518a8d1d16b5fc5f0ad9ba2e6a86259c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "links"));

        $__internal_9801e15398ff5546d27ac2e0d7881de1103302120a32fabe5e0925e43be95435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9801e15398ff5546d27ac2e0d7881de1103302120a32fabe5e0925e43be95435->enter($__internal_9801e15398ff5546d27ac2e0d7881de1103302120a32fabe5e0925e43be95435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "links"));

        // line 124
        echo "    
";
        // line 125
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 126
            echo "    
      ";
            // line 127
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "correo", array()) == "admin@admin.com")) {
                // line 128
                echo "        
        ";
                // line 129
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "VE")) {
                    // line 130
                    echo "        
              ";
                    // line 131
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        echo " 
              <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Inicio</a>
              <a class=\"mdl-navigation__link\" href=\"/admin\"> <i class=\"material-icons\">account_circle</i> Administrar Aplicacion</a>
              <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
              <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Salir</a>
              ";
                    }
                    // line 136
                    echo " 
            
        ";
                }
                // line 139
                echo "      
          ";
                // line 140
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "CO")) {
                    // line 141
                    echo "            
                ";
                    // line 142
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        echo " 
                  <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Inicio</a>
                  <a class=\"mdl-navigation__link\" href=\"/admin\"> <i class=\"material-icons\">account_circle</i> Administrar Aplicacion</a>
                  <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
                  <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Salir</a>
                ";
                    }
                    // line 147
                    echo " 
                
          ";
                }
                // line 150
                echo "          
          ";
                // line 151
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "US")) {
                    // line 152
                    echo "        
              ";
                    // line 153
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        echo " 
                <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
                <a class=\"mdl-navigation__link\" href=\"/admin\"> <i class=\"material-icons\">account_circle</i> Administrate App</a>
                <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
                <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Logout</a>
              ";
                    }
                    // line 158
                    echo " 
          ";
                }
                // line 160
                echo "          
          ";
                // line 161
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "EN")) {
                    // line 162
                    echo "        
              ";
                    // line 163
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        echo " 
                <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
                <a class=\"mdl-navigation__link\" href=\"/admin\"> <i class=\"material-icons\">account_circle</i> Administrate App</a>
                <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
                <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Logout</a>
              ";
                    }
                    // line 168
                    echo " 
              
          ";
                }
                // line 171
                echo "          
      ";
            } else {
                // line 173
                echo "      
      ";
                // line 174
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "VE")) {
                    // line 175
                    echo "        
        ";
                    // line 176
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
                    // line 183
                    echo " 
      ";
                }
                // line 185
                echo "    
      ";
                // line 186
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "CO")) {
                    // line 187
                    echo "    
        ";
                    // line 188
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
                    // line 195
                    echo " 
      ";
                }
                // line 197
                echo "    
      ";
                // line 198
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "US")) {
                    // line 199
                    echo "        
        ";
                    // line 200
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
                    // line 207
                    echo " 
      ";
                }
                // line 209
                echo "    
    ";
                // line 210
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "EN")) {
                    // line 211
                    echo "      
      ";
                    // line 212
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
                    // line 219
                    echo " 
      
    ";
                }
                // line 222
                echo "          
    ";
            }
            // line 224
            echo "    
    
    ";
        } else {
            // line 227
            echo "    
      ";
            // line 228
            if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 229
                echo "        <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
        <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
        <a class=\"mdl-navigation__link\" href=\"/register\"> <i class=\"material-icons\">person_add</i> Sign Up</a>
        <a class=\"mdl-navigation__link show-dialog\" href=\"javascript:void(0)\" id=\"show-dialog\">  <i class=\"material-icons\">person</i>Sign In</a>
      ";
            }
            // line 234
            echo "  
    ";
        }
        // line 236
        echo "
";
        
        $__internal_9801e15398ff5546d27ac2e0d7881de1103302120a32fabe5e0925e43be95435->leave($__internal_9801e15398ff5546d27ac2e0d7881de1103302120a32fabe5e0925e43be95435_prof);

        
        $__internal_bbf15d2cef57fb21c0c129455766ecf518a8d1d16b5fc5f0ad9ba2e6a86259c1->leave($__internal_bbf15d2cef57fb21c0c129455766ecf518a8d1d16b5fc5f0ad9ba2e6a86259c1_prof);

    }

    // line 240
    public function block_test($context, array $blocks = array())
    {
        $__internal_fe72bb9dc6e7984fc3a61fa0384f0b537f6a32c46cef9c3e38d7997594c4be53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe72bb9dc6e7984fc3a61fa0384f0b537f6a32c46cef9c3e38d7997594c4be53->enter($__internal_fe72bb9dc6e7984fc3a61fa0384f0b537f6a32c46cef9c3e38d7997594c4be53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "test"));

        $__internal_ab486178e82e97f6b9eabbfd02c98e8afda2fbe2a5f269929f00d29088ffc487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab486178e82e97f6b9eabbfd02c98e8afda2fbe2a5f269929f00d29088ffc487->enter($__internal_ab486178e82e97f6b9eabbfd02c98e8afda2fbe2a5f269929f00d29088ffc487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "test"));

        echo " 

          <form id=\"form-login\" action=\"";
        // line 242
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
        
        $__internal_ab486178e82e97f6b9eabbfd02c98e8afda2fbe2a5f269929f00d29088ffc487->leave($__internal_ab486178e82e97f6b9eabbfd02c98e8afda2fbe2a5f269929f00d29088ffc487_prof);

        
        $__internal_fe72bb9dc6e7984fc3a61fa0384f0b537f6a32c46cef9c3e38d7997594c4be53->leave($__internal_fe72bb9dc6e7984fc3a61fa0384f0b537f6a32c46cef9c3e38d7997594c4be53_prof);

    }

    // line 259
    public function block_carrusel($context, array $blocks = array())
    {
        $__internal_bb115debc1433b4374863506db91c03dc83188f69b72bffef3b2729ee686d4c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb115debc1433b4374863506db91c03dc83188f69b72bffef3b2729ee686d4c8->enter($__internal_bb115debc1433b4374863506db91c03dc83188f69b72bffef3b2729ee686d4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carrusel"));

        $__internal_dc75c995c7131a084bbd4c0dc0f79c2ae04310bc5fd9140ec7e95d4fe07cd4be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc75c995c7131a084bbd4c0dc0f79c2ae04310bc5fd9140ec7e95d4fe07cd4be->enter($__internal_dc75c995c7131a084bbd4c0dc0f79c2ae04310bc5fd9140ec7e95d4fe07cd4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carrusel"));

        // line 260
        echo "
";
        // line 261
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 262
            echo "
  ";
            // line 263
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "VE")) {
                // line 264
                echo "        <div id=\"carouselExampleIndicators\" class=\"carousel slide mdl-layout--large-screen-only\" data-ride=\"carousel\">
  <ol class=\"carousel-indicators\">
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
  </ol>
  <div class=\"carousel-inner\" role=\"listbox\">
    <div class=\"carousel-item active\">
      <img class=\"d-block img-fluid\" src=\"http://www.upperdelawarecouncil.org/wp-content/uploads/udc-home-rotate-2-resized-image-1366x400.jpg\" alt=\"First slide\">
       <div class=\"carousel-caption d-none d-md-block\">
         <h3>Bienvenido a Todo Bonsai eShop</h3>
         <p>La mejor plataforma online de ventas de Bonsai</p>
  </div>
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block img-fluid\" src=\"https://belmondcdn.azureedge.net/bgh/1366x400/bgh_1366x400_destination_ireland02.jpg\" alt=\"Second slide\">
       <div class=\"carousel-caption d-none d-md-block\">
    <h3>Nuestros Bonsais son de la mas alta calidad</h3>
    <p>No esperes mas y revisa nuestro catalogo</p>
  </div>
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block img-fluid\" src=\"http://www.coiguequemado.cl/wp-content/uploads/2016/09/header-1366x400.jpg\" alt=\"Third slide\">
       <div class=\"carousel-caption d-none d-md-block\">
    <h3>Conectate con la naturaleza con alguno de nuestros Bonsais</h3>
    <p>Nunca es tarde para probar algo distinto</p>
  </div>
    </div>
  </div>
  <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>
  ";
            }
            // line 303
            echo "  
  ";
            // line 304
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "CO")) {
                // line 305
                echo "        <div id=\"carouselExampleIndicators\" class=\"carousel slide mdl-layout--large-screen-only\" data-ride=\"carousel\">
  <ol class=\"carousel-indicators\">
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
  </ol>
  <div class=\"carousel-inner\" role=\"listbox\">
    <div class=\"carousel-item active\">
      <img class=\"d-block img-fluid\" src=\"http://www.upperdelawarecouncil.org/wp-content/uploads/udc-home-rotate-2-resized-image-1366x400.jpg\" alt=\"First slide\">
       <div class=\"carousel-caption d-none d-md-block\">
         <h3>Bienvenido a Todo Bonsai eShop</h3>
         <p>La mejor plataforma online de ventas de Bonsai</p>
  </div>
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block img-fluid\" src=\"https://belmondcdn.azureedge.net/bgh/1366x400/bgh_1366x400_destination_ireland02.jpg\" alt=\"Second slide\">
       <div class=\"carousel-caption d-none d-md-block\">
    <h3>Nuestros Bonsais son de la mas alta calidad</h3>
    <p>No esperes mas y revisa nuestro catalogo</p>
  </div>
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block img-fluid\" src=\"http://www.coiguequemado.cl/wp-content/uploads/2016/09/header-1366x400.jpg\" alt=\"Third slide\">
       <div class=\"carousel-caption d-none d-md-block\">
    <h3>Conectate con la naturaleza con alguno de nuestros Bonsais</h3>
    <p>Nunca es tarde para probar algo distinto</p>
  </div>
    </div>
  </div>
  <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>
  ";
            }
            // line 344
            echo "  
  ";
            // line 345
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "US")) {
                // line 346
                echo "        <div id=\"carouselExampleIndicators\" class=\"carousel slide mdl-layout--large-screen-only\" data-ride=\"carousel\">
  <ol class=\"carousel-indicators\">
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
  </ol>
  <div class=\"carousel-inner\" role=\"listbox\">
    <div class=\"carousel-item active\">
      <img class=\"d-block img-fluid\" src=\"http://www.upperdelawarecouncil.org/wp-content/uploads/udc-home-rotate-2-resized-image-1366x400.jpg\" alt=\"First slide\">
       <div class=\"carousel-caption d-none d-md-block\">
         <h3>Welcome to Todo Bonsai eShop</h3>
         <p>The best online plataform to buy Bonsais</p>
  </div>
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block img-fluid\" src=\"https://belmondcdn.azureedge.net/bgh/1366x400/bgh_1366x400_destination_ireland02.jpg\" alt=\"Second slide\">
       <div class=\"carousel-caption d-none d-md-block\">
    <h3>Our Bonsais are made with the highest quality</h3>
    <p>Stop waiting and look our catalog</p>
  </div>
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block img-fluid\" src=\"http://www.coiguequemado.cl/wp-content/uploads/2016/09/header-1366x400.jpg\" alt=\"Third slide\">
       <div class=\"carousel-caption d-none d-md-block\">
    <h3>Connect with nature with one of our Bonsais</h3>
    <p>It's never too late to try something new</p>
  </div>
    </div>
  </div>
  <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>
  ";
            }
            // line 385
            echo "  
  ";
            // line 386
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "EN")) {
                // line 387
                echo "          <div id=\"carouselExampleIndicators\" class=\"carousel slide mdl-layout--large-screen-only\" data-ride=\"carousel\">
  <ol class=\"carousel-indicators\">
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
  </ol>
  <div class=\"carousel-inner\" role=\"listbox\">
    <div class=\"carousel-item active\">
      <img class=\"d-block img-fluid\" src=\"http://www.upperdelawarecouncil.org/wp-content/uploads/udc-home-rotate-2-resized-image-1366x400.jpg\" alt=\"First slide\">
       <div class=\"carousel-caption d-none d-md-block\">
         <h3>Welcome to Todo Bonsai eShop</h3>
         <p>The best online plataform to buy Bonsais</p>
  </div>
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block img-fluid\" src=\"https://belmondcdn.azureedge.net/bgh/1366x400/bgh_1366x400_destination_ireland02.jpg\" alt=\"Second slide\">
       <div class=\"carousel-caption d-none d-md-block\">
    <h3>Our Bonsais are made with the highest quality</h3>
    <p>Stop waiting and look our catalog</p>
  </div>
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block img-fluid\" src=\"http://www.coiguequemado.cl/wp-content/uploads/2016/09/header-1366x400.jpg\" alt=\"Third slide\">
       <div class=\"carousel-caption d-none d-md-block\">
    <h3>Connect with nature with one of our Bonsais</h3>
    <p>It's never too late to try something new</p>
  </div>
    </div>
  </div>
  <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>
  ";
            }
            // line 426
            echo "
";
        } else {
            // line 428
            echo "
        <div id=\"carouselExampleIndicators\" class=\"carousel slide mdl-layout--large-screen-only\" data-ride=\"carousel\">
  <ol class=\"carousel-indicators\">
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
  </ol>
  <div class=\"carousel-inner\" role=\"listbox\">
    <div class=\"carousel-item active\">
      <img class=\"d-block img-fluid\" src=\"http://www.upperdelawarecouncil.org/wp-content/uploads/udc-home-rotate-2-resized-image-1366x400.jpg\" alt=\"First slide\">
       <div class=\"carousel-caption d-none d-md-block\">
         <h3>Welcome to Todo Bonsai eShop</h3>
         <p>The best online plataform to buy Bonsais</p>
  </div>
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block img-fluid\" src=\"https://belmondcdn.azureedge.net/bgh/1366x400/bgh_1366x400_destination_ireland02.jpg\" alt=\"Second slide\">
       <div class=\"carousel-caption d-none d-md-block\">
    <h3>Our Bonsais are made with the highest quality</h3>
    <p>Stop waiting and look our catalog</p>
  </div>
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block img-fluid\" src=\"http://www.coiguequemado.cl/wp-content/uploads/2016/09/header-1366x400.jpg\" alt=\"Third slide\">
       <div class=\"carousel-caption d-none d-md-block\">
    <h3>Connect with nature with one of our Bonsais</h3>
    <p>It's never too late to try something new</p>
  </div>
    </div>
  </div>
  <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>


";
        }
        // line 470
        echo "


";
        
        $__internal_dc75c995c7131a084bbd4c0dc0f79c2ae04310bc5fd9140ec7e95d4fe07cd4be->leave($__internal_dc75c995c7131a084bbd4c0dc0f79c2ae04310bc5fd9140ec7e95d4fe07cd4be_prof);

        
        $__internal_bb115debc1433b4374863506db91c03dc83188f69b72bffef3b2729ee686d4c8->leave($__internal_bb115debc1433b4374863506db91c03dc83188f69b72bffef3b2729ee686d4c8_prof);

    }

    // line 475
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_c4f2e4ebb04ed08ad18854bf5c38802d307a18fb5e0a5f7ab181d66efee39547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4f2e4ebb04ed08ad18854bf5c38802d307a18fb5e0a5f7ab181d66efee39547->enter($__internal_c4f2e4ebb04ed08ad18854bf5c38802d307a18fb5e0a5f7ab181d66efee39547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_719bbe6698fcff578afa7baf0ded992edf44721c1bb81971fe4f5e83ac632db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_719bbe6698fcff578afa7baf0ded992edf44721c1bb81971fe4f5e83ac632db4->enter($__internal_719bbe6698fcff578afa7baf0ded992edf44721c1bb81971fe4f5e83ac632db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 476
        echo "
";
        // line 477
        if ((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) {
            // line 478
            echo "
<script>
  alert('Haz introducido un correo o contrasena invalida!');
</script>

";
        }
        // line 484
        echo "
";
        // line 485
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 486
            echo "
";
            // line 487
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "VE")) {
                // line 488
                echo "<h4 style=\"text-align:center\">Todo Bonsai C.A es una plataforma hecha para la venta de Bonsai y Materiales relacionados. Simple y Eficiente.</h4>
";
            }
            // line 490
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "CO")) {
                // line 491
                echo "<h4 style=\"text-align:center\">Todo Bonsai C.A es una plataforma hecha para la venta de Bonsai y Materiales relacionados. Simple y Eficiente.</h4>
";
            }
            // line 493
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "EN")) {
                // line 494
                echo "<h4 style=\"text-align:center\">Todo Bonsai C.A is a platform made for the sale of Bonsai and other related tools. Simple and Efficient.</h4>
";
            }
            // line 496
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "US")) {
                // line 497
                echo "<h4 style=\"text-align:center\">Todo Bonsai C.A is a platform made for the sale of Bonsai and other related tools. Simple and Efficient.</h4>
";
            }
            // line 499
            echo "
";
        } else {
            // line 501
            echo "
<h4 style=\"text-align:center\">Todo Bonsai C.A is a platform made for the sale of Bonsai and other related tools. Simple and Efficient.</h4>


";
        }
        // line 506
        echo "
";
        
        $__internal_719bbe6698fcff578afa7baf0ded992edf44721c1bb81971fe4f5e83ac632db4->leave($__internal_719bbe6698fcff578afa7baf0ded992edf44721c1bb81971fe4f5e83ac632db4_prof);

        
        $__internal_c4f2e4ebb04ed08ad18854bf5c38802d307a18fb5e0a5f7ab181d66efee39547->leave($__internal_c4f2e4ebb04ed08ad18854bf5c38802d307a18fb5e0a5f7ab181d66efee39547_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  907 => 506,  900 => 501,  896 => 499,  892 => 497,  890 => 496,  886 => 494,  884 => 493,  880 => 491,  878 => 490,  874 => 488,  872 => 487,  869 => 486,  867 => 485,  864 => 484,  856 => 478,  854 => 477,  851 => 476,  842 => 475,  829 => 470,  785 => 428,  781 => 426,  740 => 387,  738 => 386,  735 => 385,  694 => 346,  692 => 345,  689 => 344,  648 => 305,  646 => 304,  643 => 303,  602 => 264,  600 => 263,  597 => 262,  595 => 261,  592 => 260,  583 => 259,  557 => 242,  545 => 240,  534 => 236,  530 => 234,  523 => 229,  521 => 228,  518 => 227,  513 => 224,  509 => 222,  504 => 219,  493 => 212,  490 => 211,  488 => 210,  485 => 209,  481 => 207,  470 => 200,  467 => 199,  465 => 198,  462 => 197,  458 => 195,  447 => 188,  444 => 187,  442 => 186,  439 => 185,  435 => 183,  424 => 176,  421 => 175,  419 => 174,  416 => 173,  412 => 171,  407 => 168,  398 => 163,  395 => 162,  393 => 161,  390 => 160,  386 => 158,  377 => 153,  374 => 152,  372 => 151,  369 => 150,  364 => 147,  355 => 142,  352 => 141,  350 => 140,  347 => 139,  342 => 136,  333 => 131,  330 => 130,  328 => 129,  325 => 128,  323 => 127,  320 => 126,  318 => 125,  315 => 124,  306 => 123,  295 => 120,  291 => 118,  284 => 113,  282 => 112,  279 => 111,  274 => 108,  270 => 106,  265 => 103,  254 => 96,  251 => 95,  249 => 94,  246 => 93,  242 => 91,  231 => 84,  228 => 83,  226 => 82,  223 => 81,  219 => 79,  208 => 72,  205 => 71,  203 => 70,  200 => 69,  196 => 67,  185 => 60,  182 => 59,  180 => 58,  177 => 57,  173 => 55,  168 => 52,  159 => 47,  156 => 46,  154 => 45,  151 => 44,  147 => 42,  138 => 37,  135 => 36,  133 => 35,  130 => 34,  125 => 31,  116 => 26,  113 => 25,  111 => 24,  108 => 23,  103 => 20,  94 => 15,  91 => 14,  89 => 13,  86 => 12,  84 => 11,  81 => 10,  79 => 9,  76 => 8,  67 => 7,  54 => 3,  45 => 2,  11 => 1,);
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
    
      {% if app.user.correo == \"admin@admin.com\" %}
        
        {% if app.user.pais == \"VE\" %}
        
              {% if is_granted('IS_AUTHENTICATED_FULLY') %} 
              <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Inicio</a>
              <a class=\"mdl-navigation__link\" href=\"/admin\"> <i class=\"material-icons\">account_circle</i> Administrar Aplicacion</a>
              <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
              <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Salir</a>
              {% endif %} 
            
        {% endif %}
      
          {% if app.user.pais == \"CO\" %}
            
                {% if is_granted('IS_AUTHENTICATED_FULLY') %} 
                  <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Inicio</a>
                  <a class=\"mdl-navigation__link\" href=\"/admin\"> <i class=\"material-icons\">account_circle</i> Administrar Aplicacion</a>
                  <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
                  <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Salir</a>
                {% endif %} 
                
          {% endif %}
          
          {% if app.user.pais == \"US\" %}
        
              {% if is_granted('IS_AUTHENTICATED_FULLY') %} 
                <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
                <a class=\"mdl-navigation__link\" href=\"/admin\"> <i class=\"material-icons\">account_circle</i> Administrate App</a>
                <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
                <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Logout</a>
              {% endif %} 
          {% endif %}
          
          {% if app.user.pais == \"EN\" %}
        
              {% if is_granted('IS_AUTHENTICATED_FULLY') %} 
                <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
                <a class=\"mdl-navigation__link\" href=\"/admin\"> <i class=\"material-icons\">account_circle</i> Administrate App</a>
                <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
                <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Logout</a>
              {% endif %} 
              
          {% endif %}
          
      {% else %}
      
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
          <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
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
          
    {% endif %}
    
    
    {% else %}
    
      {% if not is_granted('IS_AUTHENTICATED_FULLY')%}
        <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
        <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
        <a class=\"mdl-navigation__link\" href=\"/register\"> <i class=\"material-icons\">person_add</i> Sign Up</a>
        <a class=\"mdl-navigation__link show-dialog\" href=\"javascript:void(0)\" id=\"show-dialog\">  <i class=\"material-icons\">person</i>Sign In</a>
      {% endif %}
  
    {% endif %}
    
{% endblock %}

{% block links %}
    
{% if app.user %}
    
      {% if app.user.correo == \"admin@admin.com\" %}
        
        {% if app.user.pais == \"VE\" %}
        
              {% if is_granted('IS_AUTHENTICATED_FULLY') %} 
              <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Inicio</a>
              <a class=\"mdl-navigation__link\" href=\"/admin\"> <i class=\"material-icons\">account_circle</i> Administrar Aplicacion</a>
              <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
              <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Salir</a>
              {% endif %} 
            
        {% endif %}
      
          {% if app.user.pais == \"CO\" %}
            
                {% if is_granted('IS_AUTHENTICATED_FULLY') %} 
                  <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Inicio</a>
                  <a class=\"mdl-navigation__link\" href=\"/admin\"> <i class=\"material-icons\">account_circle</i> Administrar Aplicacion</a>
                  <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
                  <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Salir</a>
                {% endif %} 
                
          {% endif %}
          
          {% if app.user.pais == \"US\" %}
        
              {% if is_granted('IS_AUTHENTICATED_FULLY') %} 
                <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
                <a class=\"mdl-navigation__link\" href=\"/admin\"> <i class=\"material-icons\">account_circle</i> Administrate App</a>
                <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
                <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Logout</a>
              {% endif %} 
          {% endif %}
          
          {% if app.user.pais == \"EN\" %}
        
              {% if is_granted('IS_AUTHENTICATED_FULLY') %} 
                <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
                <a class=\"mdl-navigation__link\" href=\"/admin\"> <i class=\"material-icons\">account_circle</i> Administrate App</a>
                <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
                <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Logout</a>
              {% endif %} 
              
          {% endif %}
          
      {% else %}
      
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
          <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
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
          
    {% endif %}
    
    
    {% else %}
    
      {% if not is_granted('IS_AUTHENTICATED_FULLY')%}
        <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
        <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
        <a class=\"mdl-navigation__link\" href=\"/register\"> <i class=\"material-icons\">person_add</i> Sign Up</a>
        <a class=\"mdl-navigation__link show-dialog\" href=\"javascript:void(0)\" id=\"show-dialog\">  <i class=\"material-icons\">person</i>Sign In</a>
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
                <input class=\"mdl-textfield__input\" type=\"password\" id=\"clave\" name=\"_password\">
              </div>
            </form>
          <div class=\"mdl-dialog__actions\">
            <button form=\"form-login\" type=\"submit\" class=\"mdl-button\">Login</button>
            <button type=\"button\" class=\"mdl-button close\">Cancelar</button>
          </div>

{% endblock %}

{% block carrusel %}

{% if app.user %}

  {% if app.user.pais == \"VE\" %}
        <div id=\"carouselExampleIndicators\" class=\"carousel slide mdl-layout--large-screen-only\" data-ride=\"carousel\">
  <ol class=\"carousel-indicators\">
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
  </ol>
  <div class=\"carousel-inner\" role=\"listbox\">
    <div class=\"carousel-item active\">
      <img class=\"d-block img-fluid\" src=\"http://www.upperdelawarecouncil.org/wp-content/uploads/udc-home-rotate-2-resized-image-1366x400.jpg\" alt=\"First slide\">
       <div class=\"carousel-caption d-none d-md-block\">
         <h3>Bienvenido a Todo Bonsai eShop</h3>
         <p>La mejor plataforma online de ventas de Bonsai</p>
  </div>
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block img-fluid\" src=\"https://belmondcdn.azureedge.net/bgh/1366x400/bgh_1366x400_destination_ireland02.jpg\" alt=\"Second slide\">
       <div class=\"carousel-caption d-none d-md-block\">
    <h3>Nuestros Bonsais son de la mas alta calidad</h3>
    <p>No esperes mas y revisa nuestro catalogo</p>
  </div>
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block img-fluid\" src=\"http://www.coiguequemado.cl/wp-content/uploads/2016/09/header-1366x400.jpg\" alt=\"Third slide\">
       <div class=\"carousel-caption d-none d-md-block\">
    <h3>Conectate con la naturaleza con alguno de nuestros Bonsais</h3>
    <p>Nunca es tarde para probar algo distinto</p>
  </div>
    </div>
  </div>
  <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>
  {% endif %}
  
  {% if app.user.pais == \"CO\" %}
        <div id=\"carouselExampleIndicators\" class=\"carousel slide mdl-layout--large-screen-only\" data-ride=\"carousel\">
  <ol class=\"carousel-indicators\">
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
  </ol>
  <div class=\"carousel-inner\" role=\"listbox\">
    <div class=\"carousel-item active\">
      <img class=\"d-block img-fluid\" src=\"http://www.upperdelawarecouncil.org/wp-content/uploads/udc-home-rotate-2-resized-image-1366x400.jpg\" alt=\"First slide\">
       <div class=\"carousel-caption d-none d-md-block\">
         <h3>Bienvenido a Todo Bonsai eShop</h3>
         <p>La mejor plataforma online de ventas de Bonsai</p>
  </div>
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block img-fluid\" src=\"https://belmondcdn.azureedge.net/bgh/1366x400/bgh_1366x400_destination_ireland02.jpg\" alt=\"Second slide\">
       <div class=\"carousel-caption d-none d-md-block\">
    <h3>Nuestros Bonsais son de la mas alta calidad</h3>
    <p>No esperes mas y revisa nuestro catalogo</p>
  </div>
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block img-fluid\" src=\"http://www.coiguequemado.cl/wp-content/uploads/2016/09/header-1366x400.jpg\" alt=\"Third slide\">
       <div class=\"carousel-caption d-none d-md-block\">
    <h3>Conectate con la naturaleza con alguno de nuestros Bonsais</h3>
    <p>Nunca es tarde para probar algo distinto</p>
  </div>
    </div>
  </div>
  <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>
  {% endif %}
  
  {% if app.user.pais==\"US\" %}
        <div id=\"carouselExampleIndicators\" class=\"carousel slide mdl-layout--large-screen-only\" data-ride=\"carousel\">
  <ol class=\"carousel-indicators\">
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
  </ol>
  <div class=\"carousel-inner\" role=\"listbox\">
    <div class=\"carousel-item active\">
      <img class=\"d-block img-fluid\" src=\"http://www.upperdelawarecouncil.org/wp-content/uploads/udc-home-rotate-2-resized-image-1366x400.jpg\" alt=\"First slide\">
       <div class=\"carousel-caption d-none d-md-block\">
         <h3>Welcome to Todo Bonsai eShop</h3>
         <p>The best online plataform to buy Bonsais</p>
  </div>
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block img-fluid\" src=\"https://belmondcdn.azureedge.net/bgh/1366x400/bgh_1366x400_destination_ireland02.jpg\" alt=\"Second slide\">
       <div class=\"carousel-caption d-none d-md-block\">
    <h3>Our Bonsais are made with the highest quality</h3>
    <p>Stop waiting and look our catalog</p>
  </div>
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block img-fluid\" src=\"http://www.coiguequemado.cl/wp-content/uploads/2016/09/header-1366x400.jpg\" alt=\"Third slide\">
       <div class=\"carousel-caption d-none d-md-block\">
    <h3>Connect with nature with one of our Bonsais</h3>
    <p>It's never too late to try something new</p>
  </div>
    </div>
  </div>
  <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>
  {% endif %}
  
  {% if app.user.pais==\"EN\" %}
          <div id=\"carouselExampleIndicators\" class=\"carousel slide mdl-layout--large-screen-only\" data-ride=\"carousel\">
  <ol class=\"carousel-indicators\">
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
  </ol>
  <div class=\"carousel-inner\" role=\"listbox\">
    <div class=\"carousel-item active\">
      <img class=\"d-block img-fluid\" src=\"http://www.upperdelawarecouncil.org/wp-content/uploads/udc-home-rotate-2-resized-image-1366x400.jpg\" alt=\"First slide\">
       <div class=\"carousel-caption d-none d-md-block\">
         <h3>Welcome to Todo Bonsai eShop</h3>
         <p>The best online plataform to buy Bonsais</p>
  </div>
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block img-fluid\" src=\"https://belmondcdn.azureedge.net/bgh/1366x400/bgh_1366x400_destination_ireland02.jpg\" alt=\"Second slide\">
       <div class=\"carousel-caption d-none d-md-block\">
    <h3>Our Bonsais are made with the highest quality</h3>
    <p>Stop waiting and look our catalog</p>
  </div>
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block img-fluid\" src=\"http://www.coiguequemado.cl/wp-content/uploads/2016/09/header-1366x400.jpg\" alt=\"Third slide\">
       <div class=\"carousel-caption d-none d-md-block\">
    <h3>Connect with nature with one of our Bonsais</h3>
    <p>It's never too late to try something new</p>
  </div>
    </div>
  </div>
  <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>
  {% endif %}

{% else %}

        <div id=\"carouselExampleIndicators\" class=\"carousel slide mdl-layout--large-screen-only\" data-ride=\"carousel\">
  <ol class=\"carousel-indicators\">
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
  </ol>
  <div class=\"carousel-inner\" role=\"listbox\">
    <div class=\"carousel-item active\">
      <img class=\"d-block img-fluid\" src=\"http://www.upperdelawarecouncil.org/wp-content/uploads/udc-home-rotate-2-resized-image-1366x400.jpg\" alt=\"First slide\">
       <div class=\"carousel-caption d-none d-md-block\">
         <h3>Welcome to Todo Bonsai eShop</h3>
         <p>The best online plataform to buy Bonsais</p>
  </div>
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block img-fluid\" src=\"https://belmondcdn.azureedge.net/bgh/1366x400/bgh_1366x400_destination_ireland02.jpg\" alt=\"Second slide\">
       <div class=\"carousel-caption d-none d-md-block\">
    <h3>Our Bonsais are made with the highest quality</h3>
    <p>Stop waiting and look our catalog</p>
  </div>
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block img-fluid\" src=\"http://www.coiguequemado.cl/wp-content/uploads/2016/09/header-1366x400.jpg\" alt=\"Third slide\">
       <div class=\"carousel-caption d-none d-md-block\">
    <h3>Connect with nature with one of our Bonsais</h3>
    <p>It's never too late to try something new</p>
  </div>
    </div>
  </div>
  <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>


{% endif %}



{% endblock %}

{% block contenido %}

{% if errors %}

<script>
  alert('Haz introducido un correo o contrasena invalida!');
</script>

{% endif %}

{% if app.user %}

{% if app.user.pais == \"VE\"%}
<h4 style=\"text-align:center\">Todo Bonsai C.A es una plataforma hecha para la venta de Bonsai y Materiales relacionados. Simple y Eficiente.</h4>
{% endif %}
{% if app.user.pais == \"CO\" %}
<h4 style=\"text-align:center\">Todo Bonsai C.A es una plataforma hecha para la venta de Bonsai y Materiales relacionados. Simple y Eficiente.</h4>
{% endif %}
{% if app.user.pais == \"EN\"%}
<h4 style=\"text-align:center\">Todo Bonsai C.A is a platform made for the sale of Bonsai and other related tools. Simple and Efficient.</h4>
{% endif %}
{% if app.user.pais == \"US\"%}
<h4 style=\"text-align:center\">Todo Bonsai C.A is a platform made for the sale of Bonsai and other related tools. Simple and Efficient.</h4>
{% endif %}

{% else %}

<h4 style=\"text-align:center\">Todo Bonsai C.A is a platform made for the sale of Bonsai and other related tools. Simple and Efficient.</h4>


{% endif %}

{% endblock %}
", "index.html.twig", "/home/ubuntu/workspace/app/Resources/views/index.html.twig");
    }
}
