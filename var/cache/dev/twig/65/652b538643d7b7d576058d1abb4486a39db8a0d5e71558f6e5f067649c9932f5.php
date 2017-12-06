<?php

/* admin.html.twig */
class __TwigTemplate_fa21fe889ab4b389d4511124d8e988e2602f4fd1ec39e19277055f6a341a92bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'toplinks' => array($this, 'block_toplinks'),
            'links' => array($this, 'block_links'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c7d7c43d73fabfbc0f01105538a5c252759f8af131faca45e0f3d1fadc6abad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c7d7c43d73fabfbc0f01105538a5c252759f8af131faca45e0f3d1fadc6abad->enter($__internal_9c7d7c43d73fabfbc0f01105538a5c252759f8af131faca45e0f3d1fadc6abad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin.html.twig"));

        $__internal_ba4ab7bc5f9e44f48fb945ca3d65ae970b37fcb832d029ad9df3928ffded2900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba4ab7bc5f9e44f48fb945ca3d65ae970b37fcb832d029ad9df3928ffded2900->enter($__internal_ba4ab7bc5f9e44f48fb945ca3d65ae970b37fcb832d029ad9df3928ffded2900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c7d7c43d73fabfbc0f01105538a5c252759f8af131faca45e0f3d1fadc6abad->leave($__internal_9c7d7c43d73fabfbc0f01105538a5c252759f8af131faca45e0f3d1fadc6abad_prof);

        
        $__internal_ba4ab7bc5f9e44f48fb945ca3d65ae970b37fcb832d029ad9df3928ffded2900->leave($__internal_ba4ab7bc5f9e44f48fb945ca3d65ae970b37fcb832d029ad9df3928ffded2900_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ea6eefe9569775ad95762031c5d3512ac49535135588faa32672ba2847ead87b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea6eefe9569775ad95762031c5d3512ac49535135588faa32672ba2847ead87b->enter($__internal_ea6eefe9569775ad95762031c5d3512ac49535135588faa32672ba2847ead87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3efdf435668478892c32ff4c5f6697e6d3d014107189b24fe8bdf315221f867d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3efdf435668478892c32ff4c5f6697e6d3d014107189b24fe8bdf315221f867d->enter($__internal_3efdf435668478892c32ff4c5f6697e6d3d014107189b24fe8bdf315221f867d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_3efdf435668478892c32ff4c5f6697e6d3d014107189b24fe8bdf315221f867d->leave($__internal_3efdf435668478892c32ff4c5f6697e6d3d014107189b24fe8bdf315221f867d_prof);

        
        $__internal_ea6eefe9569775ad95762031c5d3512ac49535135588faa32672ba2847ead87b->leave($__internal_ea6eefe9569775ad95762031c5d3512ac49535135588faa32672ba2847ead87b_prof);

    }

    // line 6
    public function block_toplinks($context, array $blocks = array())
    {
        $__internal_2586c480b3aedb6ad8a03eb198e7751a952df60da8e05f27edfe8f9d7054b2c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2586c480b3aedb6ad8a03eb198e7751a952df60da8e05f27edfe8f9d7054b2c0->enter($__internal_2586c480b3aedb6ad8a03eb198e7751a952df60da8e05f27edfe8f9d7054b2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toplinks"));

        $__internal_ed42b1c47b17853776b77450fd4117c78009eff9f00f6a4b24bdaf823e743101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed42b1c47b17853776b77450fd4117c78009eff9f00f6a4b24bdaf823e743101->enter($__internal_ed42b1c47b17853776b77450fd4117c78009eff9f00f6a4b24bdaf823e743101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toplinks"));

        // line 7
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 8
            echo "    
      ";
            // line 9
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "correo", array()) == "admin@admin.com")) {
                // line 10
                echo "        
        ";
                // line 11
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "VE")) {
                    // line 12
                    echo "        
              ";
                    // line 13
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        echo " 
              <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Inicio</a>
              <a class=\"mdl-navigation__link\" href=\"/admin\"> <i class=\"material-icons\">account_circle</i> Administrar Aplicacion</a>
              <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
              <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Salir</a>
              ";
                    }
                    // line 18
                    echo " 
            
        ";
                }
                // line 21
                echo "      
          ";
                // line 22
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "CO")) {
                    // line 23
                    echo "            
                ";
                    // line 24
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        echo " 
                  <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Inicio</a>
                  <a class=\"mdl-navigation__link\" href=\"/admin\"> <i class=\"material-icons\">account_circle</i> Administrar Aplicacion</a>
                  <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
                  <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Salir</a>
                ";
                    }
                    // line 29
                    echo " 
                
          ";
                }
                // line 32
                echo "          
          ";
                // line 33
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "US")) {
                    // line 34
                    echo "        
              ";
                    // line 35
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        echo " 
                <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
                <a class=\"mdl-navigation__link\" href=\"/admin\"> <i class=\"material-icons\">account_circle</i> Administrate App</a>
                <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
                <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Logout</a>
              ";
                    }
                    // line 40
                    echo " 
          ";
                }
                // line 42
                echo "          
          ";
                // line 43
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "EN")) {
                    // line 44
                    echo "        
              ";
                    // line 45
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        echo " 
                <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
                <a class=\"mdl-navigation__link\" href=\"/admin\"> <i class=\"material-icons\">account_circle</i> Administrate App</a>
                <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
                <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Logout</a>
              ";
                    }
                    // line 50
                    echo " 
              
          ";
                }
                // line 53
                echo "          
      ";
            } else {
                // line 55
                echo "      
      ";
                // line 56
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "VE")) {
                    // line 57
                    echo "        
        ";
                    // line 58
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
                    // line 65
                    echo " 
      ";
                }
                // line 67
                echo "    
      ";
                // line 68
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "CO")) {
                    // line 69
                    echo "    
        ";
                    // line 70
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
                    // line 77
                    echo " 
      ";
                }
                // line 79
                echo "    
      ";
                // line 80
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "US")) {
                    // line 81
                    echo "        
        ";
                    // line 82
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
                    // line 89
                    echo " 
      ";
                }
                // line 91
                echo "    
    ";
                // line 92
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "EN")) {
                    // line 93
                    echo "      
      ";
                    // line 94
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
                    // line 101
                    echo " 
      
    ";
                }
                // line 104
                echo "          
    ";
            }
            // line 106
            echo "    
    
    ";
        } else {
            // line 109
            echo "    
      ";
            // line 110
            if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 111
                echo "        <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
        <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
        <a class=\"mdl-navigation__link\" href=\"/register\"> <i class=\"material-icons\">person_add</i> Sign Up</a>
        <a class=\"mdl-navigation__link show-dialog\" href=\"javascript:void(0)\" id=\"show-dialog\">  <i class=\"material-icons\">person</i>Sign In</a>
      ";
            }
            // line 116
            echo "  
    ";
        }
        
        $__internal_ed42b1c47b17853776b77450fd4117c78009eff9f00f6a4b24bdaf823e743101->leave($__internal_ed42b1c47b17853776b77450fd4117c78009eff9f00f6a4b24bdaf823e743101_prof);

        
        $__internal_2586c480b3aedb6ad8a03eb198e7751a952df60da8e05f27edfe8f9d7054b2c0->leave($__internal_2586c480b3aedb6ad8a03eb198e7751a952df60da8e05f27edfe8f9d7054b2c0_prof);

    }

    // line 120
    public function block_links($context, array $blocks = array())
    {
        $__internal_5b153961ad15a89266993ec53127412937174f2dbc166aaf371b1c2daf349ad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b153961ad15a89266993ec53127412937174f2dbc166aaf371b1c2daf349ad5->enter($__internal_5b153961ad15a89266993ec53127412937174f2dbc166aaf371b1c2daf349ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "links"));

        $__internal_1193e48461ac2b770dfdd7a7d87a1bab5b8ba0edcb01957a2a8eac2b1d1f89ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1193e48461ac2b770dfdd7a7d87a1bab5b8ba0edcb01957a2a8eac2b1d1f89ad->enter($__internal_1193e48461ac2b770dfdd7a7d87a1bab5b8ba0edcb01957a2a8eac2b1d1f89ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "links"));

        // line 121
        echo "
";
        // line 122
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 123
            echo "    
      ";
            // line 124
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "correo", array()) == "admin@admin.com")) {
                // line 125
                echo "        
        ";
                // line 126
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "VE")) {
                    // line 127
                    echo "        
              ";
                    // line 128
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        echo " 
              <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Inicio</a>
              <a class=\"mdl-navigation__link\" href=\"/admin\"> <i class=\"material-icons\">account_circle</i> Administrar Aplicacion</a>
              <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
              <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Salir</a>
              ";
                    }
                    // line 133
                    echo " 
            
        ";
                }
                // line 136
                echo "      
          ";
                // line 137
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "CO")) {
                    // line 138
                    echo "            
                ";
                    // line 139
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        echo " 
                  <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Inicio</a>
                  <a class=\"mdl-navigation__link\" href=\"/admin\"> <i class=\"material-icons\">account_circle</i> Administrar Aplicacion</a>
                  <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
                  <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Salir</a>
                ";
                    }
                    // line 144
                    echo " 
                
          ";
                }
                // line 147
                echo "          
          ";
                // line 148
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "US")) {
                    // line 149
                    echo "        
              ";
                    // line 150
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        echo " 
                <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
                <a class=\"mdl-navigation__link\" href=\"/admin\"> <i class=\"material-icons\">account_circle</i> Administrate App</a>
                <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
                <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Logout</a>
              ";
                    }
                    // line 155
                    echo " 
          ";
                }
                // line 157
                echo "          
          ";
                // line 158
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "EN")) {
                    // line 159
                    echo "        
              ";
                    // line 160
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        echo " 
                <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
                <a class=\"mdl-navigation__link\" href=\"/admin\"> <i class=\"material-icons\">account_circle</i> Administrate App</a>
                <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
                <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Logout</a>
              ";
                    }
                    // line 165
                    echo " 
              
          ";
                }
                // line 168
                echo "          
      ";
            } else {
                // line 170
                echo "      
      ";
                // line 171
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "VE")) {
                    // line 172
                    echo "        
        ";
                    // line 173
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
                    // line 180
                    echo " 
      ";
                }
                // line 182
                echo "    
      ";
                // line 183
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "CO")) {
                    // line 184
                    echo "    
        ";
                    // line 185
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
                    // line 192
                    echo " 
      ";
                }
                // line 194
                echo "    
      ";
                // line 195
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "US")) {
                    // line 196
                    echo "        
        ";
                    // line 197
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
                    // line 204
                    echo " 
      ";
                }
                // line 206
                echo "    
    ";
                // line 207
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "EN")) {
                    // line 208
                    echo "      
      ";
                    // line 209
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
                    // line 216
                    echo " 
      
    ";
                }
                // line 219
                echo "          
    ";
            }
            // line 221
            echo "    
    
    ";
        } else {
            // line 224
            echo "    
      ";
            // line 225
            if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 226
                echo "        <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
        <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
        <a class=\"mdl-navigation__link\" href=\"/register\"> <i class=\"material-icons\">person_add</i> Sign Up</a>
        <a class=\"mdl-navigation__link show-dialog\" href=\"javascript:void(0)\" id=\"show-dialog\">  <i class=\"material-icons\">person</i>Sign In</a>
      ";
            }
            // line 231
            echo "  
    ";
        }
        // line 233
        echo "
";
        
        $__internal_1193e48461ac2b770dfdd7a7d87a1bab5b8ba0edcb01957a2a8eac2b1d1f89ad->leave($__internal_1193e48461ac2b770dfdd7a7d87a1bab5b8ba0edcb01957a2a8eac2b1d1f89ad_prof);

        
        $__internal_5b153961ad15a89266993ec53127412937174f2dbc166aaf371b1c2daf349ad5->leave($__internal_5b153961ad15a89266993ec53127412937174f2dbc166aaf371b1c2daf349ad5_prof);

    }

    // line 236
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_4e3a7f1a67286e79be4be00bcc52a8ef7c939f4847e6129d6bc9c1a192035108 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e3a7f1a67286e79be4be00bcc52a8ef7c939f4847e6129d6bc9c1a192035108->enter($__internal_4e3a7f1a67286e79be4be00bcc52a8ef7c939f4847e6129d6bc9c1a192035108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_f9658744e55fb0328bfde31c111e95d720ad86d957dcf37cda78344f92b7dc3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9658744e55fb0328bfde31c111e95d720ad86d957dcf37cda78344f92b7dc3e->enter($__internal_f9658744e55fb0328bfde31c111e95d720ad86d957dcf37cda78344f92b7dc3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 237
        echo "
";
        // line 238
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "correo", array()) == "admin@admin.com")) {
            // line 239
            echo "
  ";
            // line 240
            if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "CO") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "VE"))) {
                // line 241
                echo "  
    <h2>Agregar un producto</h2>
    <form action=\"";
                // line 243
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarAdmin");
                echo "\" method=\"GET\">
      
      <div class=\"row\">
        <section class=\"col-lg-4 col-md-4 mb-4\">
          <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
            <input class=\"mdl-textfield__input\" type=\"text\" id=\"nombreP\" name=\"nombreP\">
            <label class=\"mdl-textfield__label\" for=\"nombreP\">Nombre del producto</label>
          </div>
        </section>
        <section class=\"col-lg-8 col-md-8 mb-8\">
          <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\" style=\"width:100%\">
            <input class=\"mdl-textfield__input\" type=\"text\" id=\"descripcionP\" name=\"descripcionP\">
            <label class=\"mdl-textfield__label\" for=\"descripcionP\">Descripcion del producto</label>
          </div>
        </section>
      </div>
      
      <div class=\"row\">
        <section class=\"col-lg-4 col-md-4 mb-4\">
          <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
            <input class=\"mdl-textfield__input\" type=\"text\" pattern=\"-?[0-9]*(\\.[0-9]+)?\" id=\"precioP\" name=\"precioP\">
            <label class=\"mdl-textfield__label\" for=\"precioP\">Precio en \$</label>
            <span class=\"mdl-textfield__error\">Lo ingresado no es un numero</span>
          </div>
        </section>
        <section class=\"col-lg-4 col-md-4 mb-4\">
          <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
            <select class=\"mdl-textfield__input\" id=\"categoriaP\" name=\"categoriaP\" name=\"categoriaP\">
              <option selected disabled>Seleccione la categoria</option>  
              <option value=\"maceta\">Maceta</option>
              <option value=\"bonsai\">Bonsai</option>
              <option value=\"accesorio\">Accesorio</option>
            </select>
            <label class=\"mdl-textfield__label\">Categoria</label>
          </div>
        </section>
        <section class=\"col-lg-4 col-md-4 mb-4\">
          <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
            <input class=\"mdl-textfield__input\" type=\"text\" id=\"linkP\" name=\"linkP\">
            <label class=\"mdl-textfield__label\" for=\"linkP\">Link de la foto</label>
          </div>
        </section>
      </div>
      
      <button type=\"submit\" class=\"btn btn-primary\">Agregar</button>
      <br>
      <br>
    </form>
  
  ";
            }
            // line 293
            echo "  
  ";
            // line 294
            if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "EN") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "US"))) {
                // line 295
                echo "  
    <h2>Add a product</h2>
    <form action=\"";
                // line 297
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarAdmin");
                echo "\" method=\"GET\">
      
      <div class=\"row\">
        <section class=\"col-lg-4 col-md-4 mb-4\">
          <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
            <input class=\"mdl-textfield__input\" type=\"text\" id=\"nombreP\" name=\"nombreP\">
            <label class=\"mdl-textfield__label\" for=\"nombreP\">Name of Product</label>
          </div>
        </section>
        <section class=\"col-lg-8 col-md-8 mb-8\">
          <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\" style=\"width:100%\">
            <input class=\"mdl-textfield__input\" type=\"text\" id=\"descripcionP\" name=\"descripcionP\">
            <label class=\"mdl-textfield__label\" for=\"descripcionP\">Description of Product</label>
          </div>
        </section>
      </div>
      
      <div class=\"row\">
        <section class=\"col-lg-4 col-md-4 mb-4\">
          <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
            <input class=\"mdl-textfield__input\" type=\"text\" pattern=\"-?[0-9]*(\\.[0-9]+)?\" id=\"precioP\" name=\"precioP\">
            <label class=\"mdl-textfield__label\" for=\"precioP\">Price in \$</label>
            <span class=\"mdl-textfield__error\">Please enter only numbers</span>
          </div>
        </section>
        <section class=\"col-lg-4 col-md-4 mb-4\">
          <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
            <select class=\"mdl-textfield__input\" id=\"categoriaP\" name=\"categoriaP\" name=\"categoriaP\">
              <option selected disabled>Select Category</option>  
              <option value=\"maceta\">Pot</option>
              <option value=\"bonsai\">Bonsai</option>
              <option value=\"accesorio\">Accessory</option>
            </select>
            <label class=\"mdl-textfield__label\">Category</label>
          </div>
        </section>
        <section class=\"col-lg-4 col-md-4 mb-4\">
          <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
            <input class=\"mdl-textfield__input\" type=\"text\" id=\"linkP\" name=\"linkP\">
            <label class=\"mdl-textfield__label\" for=\"linkP\">Link of the photo</label>
          </div>
        </section>
      </div>
      
      <button type=\"submit\" class=\"btn btn-primary\">Add </button>
      <br>
      <br>
    </form>
  
  ";
            }
            // line 347
            echo "  
  
  <hr>
  
  <br>
  <br>
  
  ";
            // line 354
            if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "CO") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "VE"))) {
                // line 355
                echo "      
    <h2>Gestionar los productos</h2>

        <div class=\"row\">
          <form action=\"";
                // line 359
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminarAdmin");
                echo "\" method=\"GET\" class=\"col-lg-6 col-md-6 mb-6\">
            <section class=\"col-lg-12 col-md-12 mb-12\">
              <h4>Gestión de productos</h4>
              <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
                <select class=\"mdl-textfield__input\" id=\"categoriaP\" name=\"borrarP\">
                  <option selected disabled>Seleccionar producto</option>
                  ";
                // line 365
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "VE")) {
                    // line 366
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 367
                        echo "                      <option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                        echo ". Precio: ";
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["product"], "precio", array()) * 35000), "html", null, true);
                        echo " BsF</option>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 369
                    echo "                  ";
                }
                // line 370
                echo "                  ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "CO")) {
                    // line 371
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 372
                        echo "                      <option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                        echo ". Precio: ";
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["product"], "precio", array()) * 2994.55), "html", null, true);
                        echo " \$</option>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 374
                    echo "                  ";
                }
                // line 375
                echo "                </select>
                <label class=\"mdl-textfield__label\">Productos</label>
              </div>
                <button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent\" type=\"submit\">
                    Eliminar
                </button>
            </section>
          </form>
          
          <form action=\"";
                // line 384
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updatePrice");
                echo "\" method=\"GET\" class=\"col-lg-6 col-md-6 mb-6\">
            <section class=\"col-lg-12 col-md-12 mb-12\">
              <h4>Actualizar precios</h4>
                <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
                  <select class=\"mdl-textfield__input\" id=\"categoriaP\" name=\"gestionarP\">
                    <option selected disabled>Seleccionar productos</option>
                    ";
                // line 390
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "VE")) {
                    // line 391
                    echo "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 392
                        echo "                        <option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                        echo ". Precio: ";
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["product"], "precio", array()) * 35000), "html", null, true);
                        echo " BsF</option>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 394
                    echo "                    ";
                }
                // line 395
                echo "                    ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "CO")) {
                    // line 396
                    echo "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 397
                        echo "                        <option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                        echo ". PRecio: ";
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["product"], "precio", array()) * 2994.55), "html", null, true);
                        echo " \$</option>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 399
                    echo "                    ";
                }
                // line 400
                echo "                  </select>
                  <label class=\"mdl-textfield__label\">Productos</label>
                </div>
                <div class=\"row\">
                  <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
                    <input class=\"mdl-textfield__input\" type=\"text\" pattern=\"-?[0-9]*(\\.[0-9]+)?\" id=\"precioN\" name=\"precioN\">
                    <label class=\"mdl-textfield__label\" for=\"precioN\">Precio Nuevo</label>
                    <span class=\"mdl-textfield__error\">Favor ingresa sólo números</span>
                  </div>
                  <button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent\" type=\"submit\">
                    Actualizar precio
                  </button>
                </div>
            </section>
          </form>
        </div>
        
        <h2>Gestionar Ordenes</h2>
            
            <div class=\"card\" style=\"\">
            <div class=\"container\">
\t<table id=\"cart\" class=\"table table-hover table-condensed\">
    \t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th style=\"width:55%\" class=\"\">Usuario</th>
\t\t\t\t\t\t\t<th style=\"width:15%\" class=\"text-center center-text\">Acciones</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t
\t\t\t\t";
                // line 430
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
                foreach ($context['_seq'] as $context["key"] => $context["user"]) {
                    // line 431
                    echo "\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-th=\"Product\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<h6><i class=\"material-icons\">person_pin</i>";
                    // line 436
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nombre", array()), "html", null, true);
                    echo "</h6>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"collapseExample";
                    // line 438
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t  <div class=\"col-sm\">
\t\t\t\t\t\t\t\t\t\t\t  <h4>Orden</h4>
\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t <div class=\"col-sm\">
\t\t\t\t\t\t\t\t\t\t\t  <h4>Monto Total</h4>
\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t <div class=\"col-sm\">
\t\t\t\t\t\t\t\t\t\t\t  <h4>Fecha</h4>
\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t <div class=\"col-sm\">
\t\t\t\t\t\t\t\t\t\t\t  <h4>Accion</h4>
\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    // line 458
                    $context["cont"] = 1;
                    // line 459
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders")));
                    foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                        // line 460
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($this->getAttribute($context["order"], "usuario", array()), "id", array()) == $this->getAttribute($context["user"], "id", array()))) {
                            // line 461
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm\">
\t\t\t\t\t\t\t\t\t\t\t  <h6>";
                            // line 463
                            echo twig_escape_filter($this->env, (isset($context["cont"]) ? $context["cont"] : $this->getContext($context, "cont")), "html", null, true);
                            echo "</h6>
\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm\">
\t\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t  ";
                            // line 467
                            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "VE")) {
                                // line 468
                                echo "\t\t\t\t\t\t\t\t\t    \t<h6 class=\"nomargin\"> <h6>";
                                echo twig_escape_filter($this->env, ($this->getAttribute($context["order"], "montoTotal", array()) * 35000), "html", null, true);
                                echo " BsF</h6></h6>
\t\t\t\t\t\t\t\t\t    \t";
                            } else {
                                // line 470
                                echo "\t\t\t\t\t\t\t\t\t    \t<h6 class=\"nomargin\"> <h6>";
                                echo twig_escape_filter($this->env, ($this->getAttribute($context["order"], "montoTotal", array()) * 2977), "html", null, true);
                                echo " COP</h6></h6>
\t\t\t\t\t\t\t\t\t    \t";
                            }
                            // line 472
                            echo "\t\t\t\t\t\t\t\t\t    </div>
        \t\t\t\t\t\t\t\t
        
                    <div class=\"col-sm\">
\t\t\t\t\t\t\t\t\t        
\t\t\t\t\t\t\t\t\t        <h6>";
                            // line 477
                            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "fecha", array()), "html", null, true);
                            echo "</h6>
\t\t\t\t\t\t\t\t\t        
\t\t\t\t\t\t\t\t\t      </div>
        
        \t\t\t\t\t\t\t\t<div class=\"col-sm\">
        \t\t\t\t\t\t\t\t  </br>
\t\t\t\t\t\t\t\t\t\t    <form action=\"";
                            // line 483
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cancelarAdmin", array("id" => $this->getAttribute($context["order"], "id", array()), "userid" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                            echo "\" method=\"POST\" >
        \t\t\t\t\t\t\t\t<button class=\"btn btn-danger\" id=\"botonCancel";
                            // line 484
                            echo twig_escape_filter($this->env, (isset($context["cont"]) ? $context["cont"] : $this->getContext($context, "cont")), "html", null, true);
                            echo "\" type=\"submit\">
        \t\t\t\t\t\t\t\t\t\t  <i class=\"material-icons\">cancel</i>
        \t\t\t\t\t\t\t\t</button>
        \t\t\t\t\t\t\t\t</form>
        \t\t\t\t\t\t\t\t
        \t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"botonCancel";
                            // line 489
                            echo twig_escape_filter($this->env, (isset($context["cont"]) ? $context["cont"] : $this->getContext($context, "cont")), "html", null, true);
                            echo "\">
        \t\t\t\t\t\t\t\t\t\tCancelar Orden
        \t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t      </div>
\t\t\t\t\t\t\t\t\t      
\t\t\t\t\t\t\t\t\t      
\t\t\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t\t\t    ";
                            // line 503
                            $context["cont"] = ((isset($context["cont"]) ? $context["cont"] : $this->getContext($context, "cont")) + 1);
                            // line 504
                            echo "\t\t\t\t\t\t\t\t\t    ";
                        }
                        // line 505
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 506
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-th=\"Acciones\">
\t\t\t\t\t\t\t\t<button class=\"btn\" id=\"botonOrden";
                    // line 513
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseExample";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
\t\t\t\t\t\t\t\t\t\t  <i class=\"material-icons\">list</i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"botonOrden";
                    // line 516
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\tVer Ordenes
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 526
                echo "\t\t\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t
\t

\t\t\t\t</table>
</div>
</div>

  ";
            }
            // line 536
            echo "  
  ";
            // line 537
            if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "US") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "EN"))) {
                // line 538
                echo "    <h2>Manage products</h2>
        <div class=\"row\">
            <form action=\"";
                // line 540
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminarAdmin");
                echo "\" method=\"GET\" class=\"col-lg-6 col-md-6 mb-6\">
            <section class=\"col-lg-12 col-md-12 mb-12\">
              <h4>Products elimination</h4>
              <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
                <select class=\"mdl-textfield__input\" id=\"categoriaP\" name=\"borrarP\">
                  <option selected disabled>Select product</option>
                  ";
                // line 546
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "US")) {
                    // line 547
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 548
                        echo "                      <option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                        echo ". Price: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "precio", array()), "html", null, true);
                        echo " \$</option>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 550
                    echo "                  ";
                }
                // line 551
                echo "                  ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "EN")) {
                    // line 552
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 553
                        echo "                      <option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                        echo ". Price: ";
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["product"], "precio", array()) * 0.76), "html", null, true);
                        echo " £</option>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 555
                    echo "                  ";
                }
                // line 556
                echo "                </select>
                <label class=\"mdl-textfield__label\">Products</label>
              </div>
                <button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent\" type=\"submit\">
                    Delete
                  </button>
            </section>
          </form>
          
            <form action=\"";
                // line 565
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updatePrice");
                echo "\" method=\"GET\" class=\"col-lg-6 col-md-6 mb-6\">
              <section class=\"col-lg-12 col-md-12 mb-12\">
                <h4>Update products price</h4>
                  <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
                    <select class=\"mdl-textfield__input\" id=\"categoriaP\" name=\"gestionarP\">
                      <option selected disabled>Select product</option>
                      ";
                // line 571
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "US")) {
                    // line 572
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 573
                        echo "                          <option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                        echo ". Price: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "precio", array()), "html", null, true);
                        echo " \$</option>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 575
                    echo "                      ";
                }
                // line 576
                echo "                      ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "EN")) {
                    // line 577
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 578
                        echo "                          <option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                        echo ". Price: ";
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["product"], "precio", array()) * 0.76), "html", null, true);
                        echo " £</option>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 580
                    echo "                      ";
                }
                // line 581
                echo "                    </select>
                    <label class=\"mdl-textfield__label\">Products</label>
                  </div>
                    <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
                      <input class=\"mdl-textfield__input\" type=\"text\" pattern=\"-?[0-9]*(\\.[0-9]+)?\" id=\"precioN\" name=\"precioN\">
                      <label class=\"mdl-textfield__label\" for=\"precioN\">New price</label>
                      <span class=\"mdl-textfield__error\">Input is not a number!</span>
                    </div>
                    <button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent\" type=\"submit\">
                      Update Price
                    </button>
              </section>
            </form> 
            
            <h2>Manage Orders</h2>
            
            <div class=\"card\" style=\"\">
  <div class=\"container\">
\t<table id=\"cart\" class=\"table table-hover table-condensed\">
    \t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th style=\"width:55%\" class=\"\">User</th>
\t\t\t\t\t\t\t<th style=\"width:15%\" class=\"text-center center-text\">Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t
\t\t\t\t";
                // line 608
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
                foreach ($context['_seq'] as $context["key"] => $context["user"]) {
                    // line 609
                    echo "\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-th=\"Product\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<h6><i class=\"material-icons\">person_pin</i>";
                    // line 614
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nombre", array()), "html", null, true);
                    echo "</h6>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"collapseExample";
                    // line 616
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t  <div class=\"col-sm\">
\t\t\t\t\t\t\t\t\t\t\t  <h4>Order</h4>
\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t <div class=\"col-sm\">
\t\t\t\t\t\t\t\t\t\t\t  <h4>Total</h4>
\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t <div class=\"col-sm\">
\t\t\t\t\t\t\t\t\t\t\t  <h4>Date</h4>
\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t <div class=\"col-sm\">
\t\t\t\t\t\t\t\t\t\t\t  <h4>Action</h4>
\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    // line 636
                    $context["cont"] = 1;
                    // line 637
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders")));
                    foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                        // line 638
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($this->getAttribute($context["order"], "usuario", array()), "id", array()) == $this->getAttribute($context["user"], "id", array()))) {
                            // line 639
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm\">
\t\t\t\t\t\t\t\t\t\t\t  <h6>";
                            // line 641
                            echo twig_escape_filter($this->env, (isset($context["cont"]) ? $context["cont"] : $this->getContext($context, "cont")), "html", null, true);
                            echo "</h6>
\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm\">
\t\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t  ";
                            // line 645
                            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "EN")) {
                                // line 646
                                echo "\t\t\t\t\t\t\t\t\t    \t<h6 class=\"nomargin\"> <h6>";
                                echo twig_escape_filter($this->env, ($this->getAttribute($context["order"], "montoTotal", array()) * 0.76), "html", null, true);
                                echo " £</h6></h6>
\t\t\t\t\t\t\t\t\t    \t";
                            } else {
                                // line 648
                                echo "\t\t\t\t\t\t\t\t\t    \t<h6 class=\"nomargin\"> <h6>";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "montoTotal", array()), "html", null, true);
                                echo " \$</h6></h6>
\t\t\t\t\t\t\t\t\t    \t";
                            }
                            // line 650
                            echo "\t\t\t\t\t\t\t\t\t    </div>
        \t\t\t\t\t\t\t\t
        
                    <div class=\"col-sm\">
\t\t\t\t\t\t\t\t\t        
\t\t\t\t\t\t\t\t\t        <h6>";
                            // line 655
                            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "fecha", array()), "html", null, true);
                            echo "</h6>
\t\t\t\t\t\t\t\t\t        
\t\t\t\t\t\t\t\t\t      </div>
        
        \t\t\t\t\t\t\t\t<div class=\"col-sm\">
        \t\t\t\t\t\t\t\t  </br>
\t\t\t\t\t\t\t\t\t\t    <form action=\"";
                            // line 661
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cancelarAdmin", array("id" => $this->getAttribute($context["order"], "id", array()), "userid" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                            echo "\" method=\"POST\" >
        \t\t\t\t\t\t\t\t<button class=\"btn btn-danger\" id=\"botonCancel";
                            // line 662
                            echo twig_escape_filter($this->env, (isset($context["cont"]) ? $context["cont"] : $this->getContext($context, "cont")), "html", null, true);
                            echo "\" type=\"submit\">
        \t\t\t\t\t\t\t\t\t\t  <i class=\"material-icons\">cancel</i>
        \t\t\t\t\t\t\t\t</button>
        \t\t\t\t\t\t\t\t</form>
        \t\t\t\t\t\t\t\t
        \t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"botonCancel";
                            // line 667
                            echo twig_escape_filter($this->env, (isset($context["cont"]) ? $context["cont"] : $this->getContext($context, "cont")), "html", null, true);
                            echo "\">
        \t\t\t\t\t\t\t\t\t\tCancel Order
        \t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t      </div>
\t\t\t\t\t\t\t\t\t      
\t\t\t\t\t\t\t\t\t      
\t\t\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t\t\t    ";
                            // line 681
                            $context["cont"] = ((isset($context["cont"]) ? $context["cont"] : $this->getContext($context, "cont")) + 1);
                            // line 682
                            echo "\t\t\t\t\t\t\t\t\t    ";
                        }
                        // line 683
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 684
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-th=\"Acciones\">
\t\t\t\t\t\t\t\t<button class=\"btn\" id=\"botonOrden";
                    // line 691
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseExample";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
\t\t\t\t\t\t\t\t\t\t  <i class=\"material-icons\">list</i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"botonOrden";
                    // line 694
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\tDisplay Orders
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 704
                echo "\t\t\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t
\t

\t\t\t\t</table>
</div>
</div>
            
            
            
        </div>

    
  ";
            }
            // line 719
            echo "  

";
        } else {
            // line 722
            echo "
<h1>No eres un administrador</h1>

<img src=\"https://www.stellarinfo.com/blog/wp-content/uploads/2017/02/error-thinkstock-100655502-primary.idge_.jpg\" alt=\"Error\">

";
        }
        // line 728
        echo "
";
        
        $__internal_f9658744e55fb0328bfde31c111e95d720ad86d957dcf37cda78344f92b7dc3e->leave($__internal_f9658744e55fb0328bfde31c111e95d720ad86d957dcf37cda78344f92b7dc3e_prof);

        
        $__internal_4e3a7f1a67286e79be4be00bcc52a8ef7c939f4847e6129d6bc9c1a192035108->leave($__internal_4e3a7f1a67286e79be4be00bcc52a8ef7c939f4847e6129d6bc9c1a192035108_prof);

    }

    public function getTemplateName()
    {
        return "admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1376 => 728,  1368 => 722,  1363 => 719,  1346 => 704,  1330 => 694,  1322 => 691,  1313 => 684,  1307 => 683,  1304 => 682,  1302 => 681,  1285 => 667,  1277 => 662,  1273 => 661,  1264 => 655,  1257 => 650,  1251 => 648,  1245 => 646,  1243 => 645,  1236 => 641,  1232 => 639,  1229 => 638,  1224 => 637,  1222 => 636,  1199 => 616,  1194 => 614,  1187 => 609,  1183 => 608,  1154 => 581,  1151 => 580,  1138 => 578,  1133 => 577,  1130 => 576,  1127 => 575,  1114 => 573,  1109 => 572,  1107 => 571,  1098 => 565,  1087 => 556,  1084 => 555,  1071 => 553,  1066 => 552,  1063 => 551,  1060 => 550,  1047 => 548,  1042 => 547,  1040 => 546,  1031 => 540,  1027 => 538,  1025 => 537,  1022 => 536,  1010 => 526,  994 => 516,  986 => 513,  977 => 506,  971 => 505,  968 => 504,  966 => 503,  949 => 489,  941 => 484,  937 => 483,  928 => 477,  921 => 472,  915 => 470,  909 => 468,  907 => 467,  900 => 463,  896 => 461,  893 => 460,  888 => 459,  886 => 458,  863 => 438,  858 => 436,  851 => 431,  847 => 430,  815 => 400,  812 => 399,  799 => 397,  794 => 396,  791 => 395,  788 => 394,  775 => 392,  770 => 391,  768 => 390,  759 => 384,  748 => 375,  745 => 374,  732 => 372,  727 => 371,  724 => 370,  721 => 369,  708 => 367,  703 => 366,  701 => 365,  692 => 359,  686 => 355,  684 => 354,  675 => 347,  622 => 297,  618 => 295,  616 => 294,  613 => 293,  560 => 243,  556 => 241,  554 => 240,  551 => 239,  549 => 238,  546 => 237,  537 => 236,  526 => 233,  522 => 231,  515 => 226,  513 => 225,  510 => 224,  505 => 221,  501 => 219,  496 => 216,  485 => 209,  482 => 208,  480 => 207,  477 => 206,  473 => 204,  462 => 197,  459 => 196,  457 => 195,  454 => 194,  450 => 192,  439 => 185,  436 => 184,  434 => 183,  431 => 182,  427 => 180,  416 => 173,  413 => 172,  411 => 171,  408 => 170,  404 => 168,  399 => 165,  390 => 160,  387 => 159,  385 => 158,  382 => 157,  378 => 155,  369 => 150,  366 => 149,  364 => 148,  361 => 147,  356 => 144,  347 => 139,  344 => 138,  342 => 137,  339 => 136,  334 => 133,  325 => 128,  322 => 127,  320 => 126,  317 => 125,  315 => 124,  312 => 123,  310 => 122,  307 => 121,  298 => 120,  286 => 116,  279 => 111,  277 => 110,  274 => 109,  269 => 106,  265 => 104,  260 => 101,  249 => 94,  246 => 93,  244 => 92,  241 => 91,  237 => 89,  226 => 82,  223 => 81,  221 => 80,  218 => 79,  214 => 77,  203 => 70,  200 => 69,  198 => 68,  195 => 67,  191 => 65,  180 => 58,  177 => 57,  175 => 56,  172 => 55,  168 => 53,  163 => 50,  154 => 45,  151 => 44,  149 => 43,  146 => 42,  142 => 40,  133 => 35,  130 => 34,  128 => 33,  125 => 32,  120 => 29,  111 => 24,  108 => 23,  106 => 22,  103 => 21,  98 => 18,  89 => 13,  86 => 12,  84 => 11,  81 => 10,  79 => 9,  76 => 8,  74 => 7,  65 => 6,  52 => 3,  43 => 2,  11 => 1,);
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

{% block contenido %}

{% if app.user.correo == \"admin@admin.com\"%}

  {% if (app.user.pais == \"CO\") or (app.user.pais == \"VE\") %}
  
    <h2>Agregar un producto</h2>
    <form action=\"{{path('agregarAdmin')}}\" method=\"GET\">
      
      <div class=\"row\">
        <section class=\"col-lg-4 col-md-4 mb-4\">
          <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
            <input class=\"mdl-textfield__input\" type=\"text\" id=\"nombreP\" name=\"nombreP\">
            <label class=\"mdl-textfield__label\" for=\"nombreP\">Nombre del producto</label>
          </div>
        </section>
        <section class=\"col-lg-8 col-md-8 mb-8\">
          <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\" style=\"width:100%\">
            <input class=\"mdl-textfield__input\" type=\"text\" id=\"descripcionP\" name=\"descripcionP\">
            <label class=\"mdl-textfield__label\" for=\"descripcionP\">Descripcion del producto</label>
          </div>
        </section>
      </div>
      
      <div class=\"row\">
        <section class=\"col-lg-4 col-md-4 mb-4\">
          <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
            <input class=\"mdl-textfield__input\" type=\"text\" pattern=\"-?[0-9]*(\\.[0-9]+)?\" id=\"precioP\" name=\"precioP\">
            <label class=\"mdl-textfield__label\" for=\"precioP\">Precio en \$</label>
            <span class=\"mdl-textfield__error\">Lo ingresado no es un numero</span>
          </div>
        </section>
        <section class=\"col-lg-4 col-md-4 mb-4\">
          <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
            <select class=\"mdl-textfield__input\" id=\"categoriaP\" name=\"categoriaP\" name=\"categoriaP\">
              <option selected disabled>Seleccione la categoria</option>  
              <option value=\"maceta\">Maceta</option>
              <option value=\"bonsai\">Bonsai</option>
              <option value=\"accesorio\">Accesorio</option>
            </select>
            <label class=\"mdl-textfield__label\">Categoria</label>
          </div>
        </section>
        <section class=\"col-lg-4 col-md-4 mb-4\">
          <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
            <input class=\"mdl-textfield__input\" type=\"text\" id=\"linkP\" name=\"linkP\">
            <label class=\"mdl-textfield__label\" for=\"linkP\">Link de la foto</label>
          </div>
        </section>
      </div>
      
      <button type=\"submit\" class=\"btn btn-primary\">Agregar</button>
      <br>
      <br>
    </form>
  
  {% endif %}
  
  {% if (app.user.pais == \"EN\") or (app.user.pais == \"US\") %}
  
    <h2>Add a product</h2>
    <form action=\"{{path('agregarAdmin')}}\" method=\"GET\">
      
      <div class=\"row\">
        <section class=\"col-lg-4 col-md-4 mb-4\">
          <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
            <input class=\"mdl-textfield__input\" type=\"text\" id=\"nombreP\" name=\"nombreP\">
            <label class=\"mdl-textfield__label\" for=\"nombreP\">Name of Product</label>
          </div>
        </section>
        <section class=\"col-lg-8 col-md-8 mb-8\">
          <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\" style=\"width:100%\">
            <input class=\"mdl-textfield__input\" type=\"text\" id=\"descripcionP\" name=\"descripcionP\">
            <label class=\"mdl-textfield__label\" for=\"descripcionP\">Description of Product</label>
          </div>
        </section>
      </div>
      
      <div class=\"row\">
        <section class=\"col-lg-4 col-md-4 mb-4\">
          <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
            <input class=\"mdl-textfield__input\" type=\"text\" pattern=\"-?[0-9]*(\\.[0-9]+)?\" id=\"precioP\" name=\"precioP\">
            <label class=\"mdl-textfield__label\" for=\"precioP\">Price in \$</label>
            <span class=\"mdl-textfield__error\">Please enter only numbers</span>
          </div>
        </section>
        <section class=\"col-lg-4 col-md-4 mb-4\">
          <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
            <select class=\"mdl-textfield__input\" id=\"categoriaP\" name=\"categoriaP\" name=\"categoriaP\">
              <option selected disabled>Select Category</option>  
              <option value=\"maceta\">Pot</option>
              <option value=\"bonsai\">Bonsai</option>
              <option value=\"accesorio\">Accessory</option>
            </select>
            <label class=\"mdl-textfield__label\">Category</label>
          </div>
        </section>
        <section class=\"col-lg-4 col-md-4 mb-4\">
          <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
            <input class=\"mdl-textfield__input\" type=\"text\" id=\"linkP\" name=\"linkP\">
            <label class=\"mdl-textfield__label\" for=\"linkP\">Link of the photo</label>
          </div>
        </section>
      </div>
      
      <button type=\"submit\" class=\"btn btn-primary\">Add </button>
      <br>
      <br>
    </form>
  
  {% endif %}
  
  
  <hr>
  
  <br>
  <br>
  
  {% if (app.user.pais == \"CO\") or (app.user.pais == \"VE\") %}
      
    <h2>Gestionar los productos</h2>

        <div class=\"row\">
          <form action=\"{{path('eliminarAdmin')}}\" method=\"GET\" class=\"col-lg-6 col-md-6 mb-6\">
            <section class=\"col-lg-12 col-md-12 mb-12\">
              <h4>Gestión de productos</h4>
              <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
                <select class=\"mdl-textfield__input\" id=\"categoriaP\" name=\"borrarP\">
                  <option selected disabled>Seleccionar producto</option>
                  {% if (app.user.pais == \"VE\")%}
                    {% for product in products %}
                      <option value=\"{{product.id}}\">{{product.nombre}}. Precio: {{product.precio*35000}} BsF</option>
                    {% endfor %}
                  {% endif %}
                  {% if (app.user.pais == \"CO\")%}
                    {% for product in products %}
                      <option value=\"{{product.id}}\">{{product.nombre}}. Precio: {{product.precio*2994.55}} \$</option>
                    {% endfor %}
                  {% endif %}
                </select>
                <label class=\"mdl-textfield__label\">Productos</label>
              </div>
                <button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent\" type=\"submit\">
                    Eliminar
                </button>
            </section>
          </form>
          
          <form action=\"{{path('updatePrice')}}\" method=\"GET\" class=\"col-lg-6 col-md-6 mb-6\">
            <section class=\"col-lg-12 col-md-12 mb-12\">
              <h4>Actualizar precios</h4>
                <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
                  <select class=\"mdl-textfield__input\" id=\"categoriaP\" name=\"gestionarP\">
                    <option selected disabled>Seleccionar productos</option>
                    {% if (app.user.pais == \"VE\")%}
                      {% for product in products %}
                        <option value=\"{{product.id}}\">{{product.nombre}}. Precio: {{product.precio*35000}} BsF</option>
                      {% endfor %}
                    {% endif %}
                    {% if (app.user.pais == \"CO\")%}
                      {% for product in products %}
                        <option value=\"{{product.id}}\">{{product.nombre}}. PRecio: {{product.precio*2994.55}} \$</option>
                      {% endfor %}
                    {% endif %}
                  </select>
                  <label class=\"mdl-textfield__label\">Productos</label>
                </div>
                <div class=\"row\">
                  <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
                    <input class=\"mdl-textfield__input\" type=\"text\" pattern=\"-?[0-9]*(\\.[0-9]+)?\" id=\"precioN\" name=\"precioN\">
                    <label class=\"mdl-textfield__label\" for=\"precioN\">Precio Nuevo</label>
                    <span class=\"mdl-textfield__error\">Favor ingresa sólo números</span>
                  </div>
                  <button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent\" type=\"submit\">
                    Actualizar precio
                  </button>
                </div>
            </section>
          </form>
        </div>
        
        <h2>Gestionar Ordenes</h2>
            
            <div class=\"card\" style=\"\">
            <div class=\"container\">
\t<table id=\"cart\" class=\"table table-hover table-condensed\">
    \t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th style=\"width:55%\" class=\"\">Usuario</th>
\t\t\t\t\t\t\t<th style=\"width:15%\" class=\"text-center center-text\">Acciones</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t
\t\t\t\t{% for key, user in users %}
\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-th=\"Product\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<h6><i class=\"material-icons\">person_pin</i>{{user.nombre}}</h6>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"collapseExample{{key}}\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t  <div class=\"col-sm\">
\t\t\t\t\t\t\t\t\t\t\t  <h4>Orden</h4>
\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t <div class=\"col-sm\">
\t\t\t\t\t\t\t\t\t\t\t  <h4>Monto Total</h4>
\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t <div class=\"col-sm\">
\t\t\t\t\t\t\t\t\t\t\t  <h4>Fecha</h4>
\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t <div class=\"col-sm\">
\t\t\t\t\t\t\t\t\t\t\t  <h4>Accion</h4>
\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% set  cont = 1 %}
\t\t\t\t\t\t\t\t\t\t{% for order in orders %}
\t\t\t\t\t\t\t\t\t\t{% if order.usuario.id == user.id %}
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm\">
\t\t\t\t\t\t\t\t\t\t\t  <h6>{{cont}}</h6>
\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm\">
\t\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t  {% if app.user.pais == \"VE\" %}
\t\t\t\t\t\t\t\t\t    \t<h6 class=\"nomargin\"> <h6>{{order.montoTotal*35000}} BsF</h6></h6>
\t\t\t\t\t\t\t\t\t    \t{% else %}
\t\t\t\t\t\t\t\t\t    \t<h6 class=\"nomargin\"> <h6>{{order.montoTotal*2977}} COP</h6></h6>
\t\t\t\t\t\t\t\t\t    \t{% endif %}
\t\t\t\t\t\t\t\t\t    </div>
        \t\t\t\t\t\t\t\t
        
                    <div class=\"col-sm\">
\t\t\t\t\t\t\t\t\t        
\t\t\t\t\t\t\t\t\t        <h6>{{order.fecha}}</h6>
\t\t\t\t\t\t\t\t\t        
\t\t\t\t\t\t\t\t\t      </div>
        
        \t\t\t\t\t\t\t\t<div class=\"col-sm\">
        \t\t\t\t\t\t\t\t  </br>
\t\t\t\t\t\t\t\t\t\t    <form action=\"{{path('cancelarAdmin' , {'id' : order.id, 'userid': user.id} ) }}\" method=\"POST\" >
        \t\t\t\t\t\t\t\t<button class=\"btn btn-danger\" id=\"botonCancel{{cont}}\" type=\"submit\">
        \t\t\t\t\t\t\t\t\t\t  <i class=\"material-icons\">cancel</i>
        \t\t\t\t\t\t\t\t</button>
        \t\t\t\t\t\t\t\t</form>
        \t\t\t\t\t\t\t\t
        \t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"botonCancel{{cont}}\">
        \t\t\t\t\t\t\t\t\t\tCancelar Orden
        \t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t      </div>
\t\t\t\t\t\t\t\t\t      
\t\t\t\t\t\t\t\t\t      
\t\t\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t\t\t    {% set cont= cont + 1  %}
\t\t\t\t\t\t\t\t\t    {% endif %}
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-th=\"Acciones\">
\t\t\t\t\t\t\t\t<button class=\"btn\" id=\"botonOrden{{key}}\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseExample{{key}}\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
\t\t\t\t\t\t\t\t\t\t  <i class=\"material-icons\">list</i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"botonOrden{{key}}\">
\t\t\t\t\t\t\t\t\t\tVer Ordenes
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
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

  {% endif %}
  
  {% if (app.user.pais == \"US\") or (app.user.pais == \"EN\") %}
    <h2>Manage products</h2>
        <div class=\"row\">
            <form action=\"{{path('eliminarAdmin')}}\" method=\"GET\" class=\"col-lg-6 col-md-6 mb-6\">
            <section class=\"col-lg-12 col-md-12 mb-12\">
              <h4>Products elimination</h4>
              <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
                <select class=\"mdl-textfield__input\" id=\"categoriaP\" name=\"borrarP\">
                  <option selected disabled>Select product</option>
                  {% if (app.user.pais == \"US\")%}
                    {% for product in products %}
                      <option value=\"{{product.id}}\">{{product.nombre}}. Price: {{product.precio}} \$</option>
                    {% endfor %}
                  {% endif %}
                  {% if (app.user.pais == \"EN\")%}
                    {% for product in products %}
                      <option value=\"{{product.id}}\">{{product.nombre}}. Price: {{product.precio*0.76}} £</option>
                    {% endfor %}
                  {% endif %}
                </select>
                <label class=\"mdl-textfield__label\">Products</label>
              </div>
                <button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent\" type=\"submit\">
                    Delete
                  </button>
            </section>
          </form>
          
            <form action=\"{{path('updatePrice')}}\" method=\"GET\" class=\"col-lg-6 col-md-6 mb-6\">
              <section class=\"col-lg-12 col-md-12 mb-12\">
                <h4>Update products price</h4>
                  <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
                    <select class=\"mdl-textfield__input\" id=\"categoriaP\" name=\"gestionarP\">
                      <option selected disabled>Select product</option>
                      {% if (app.user.pais == \"US\")%}
                        {% for product in products %}
                          <option value=\"{{product.id}}\">{{product.nombre}}. Price: {{product.precio}} \$</option>
                        {% endfor %}
                      {% endif %}
                      {% if (app.user.pais == \"EN\")%}
                        {% for product in products %}
                          <option value=\"{{product.id}}\">{{product.nombre}}. Price: {{product.precio*0.76}} £</option>
                        {% endfor %}
                      {% endif %}
                    </select>
                    <label class=\"mdl-textfield__label\">Products</label>
                  </div>
                    <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
                      <input class=\"mdl-textfield__input\" type=\"text\" pattern=\"-?[0-9]*(\\.[0-9]+)?\" id=\"precioN\" name=\"precioN\">
                      <label class=\"mdl-textfield__label\" for=\"precioN\">New price</label>
                      <span class=\"mdl-textfield__error\">Input is not a number!</span>
                    </div>
                    <button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent\" type=\"submit\">
                      Update Price
                    </button>
              </section>
            </form> 
            
            <h2>Manage Orders</h2>
            
            <div class=\"card\" style=\"\">
  <div class=\"container\">
\t<table id=\"cart\" class=\"table table-hover table-condensed\">
    \t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th style=\"width:55%\" class=\"\">User</th>
\t\t\t\t\t\t\t<th style=\"width:15%\" class=\"text-center center-text\">Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t
\t\t\t\t{% for key, user in users %}
\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-th=\"Product\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<h6><i class=\"material-icons\">person_pin</i>{{user.nombre}}</h6>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"collapseExample{{key}}\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t  <div class=\"col-sm\">
\t\t\t\t\t\t\t\t\t\t\t  <h4>Order</h4>
\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t <div class=\"col-sm\">
\t\t\t\t\t\t\t\t\t\t\t  <h4>Total</h4>
\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t <div class=\"col-sm\">
\t\t\t\t\t\t\t\t\t\t\t  <h4>Date</h4>
\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t <div class=\"col-sm\">
\t\t\t\t\t\t\t\t\t\t\t  <h4>Action</h4>
\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% set  cont = 1 %}
\t\t\t\t\t\t\t\t\t\t{% for order in orders %}
\t\t\t\t\t\t\t\t\t\t{% if order.usuario.id == user.id %}
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm\">
\t\t\t\t\t\t\t\t\t\t\t  <h6>{{cont}}</h6>
\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm\">
\t\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t  {% if app.user.pais == \"EN\" %}
\t\t\t\t\t\t\t\t\t    \t<h6 class=\"nomargin\"> <h6>{{order.montoTotal*0.76}} £</h6></h6>
\t\t\t\t\t\t\t\t\t    \t{% else %}
\t\t\t\t\t\t\t\t\t    \t<h6 class=\"nomargin\"> <h6>{{order.montoTotal}} \$</h6></h6>
\t\t\t\t\t\t\t\t\t    \t{% endif %}
\t\t\t\t\t\t\t\t\t    </div>
        \t\t\t\t\t\t\t\t
        
                    <div class=\"col-sm\">
\t\t\t\t\t\t\t\t\t        
\t\t\t\t\t\t\t\t\t        <h6>{{order.fecha}}</h6>
\t\t\t\t\t\t\t\t\t        
\t\t\t\t\t\t\t\t\t      </div>
        
        \t\t\t\t\t\t\t\t<div class=\"col-sm\">
        \t\t\t\t\t\t\t\t  </br>
\t\t\t\t\t\t\t\t\t\t    <form action=\"{{path('cancelarAdmin' , {'id' : order.id, 'userid': user.id} ) }}\" method=\"POST\" >
        \t\t\t\t\t\t\t\t<button class=\"btn btn-danger\" id=\"botonCancel{{cont}}\" type=\"submit\">
        \t\t\t\t\t\t\t\t\t\t  <i class=\"material-icons\">cancel</i>
        \t\t\t\t\t\t\t\t</button>
        \t\t\t\t\t\t\t\t</form>
        \t\t\t\t\t\t\t\t
        \t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"botonCancel{{cont}}\">
        \t\t\t\t\t\t\t\t\t\tCancel Order
        \t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t      </div>
\t\t\t\t\t\t\t\t\t      
\t\t\t\t\t\t\t\t\t      
\t\t\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t\t\t    {% set cont= cont + 1  %}
\t\t\t\t\t\t\t\t\t    {% endif %}
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-th=\"Acciones\">
\t\t\t\t\t\t\t\t<button class=\"btn\" id=\"botonOrden{{key}}\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseExample{{key}}\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
\t\t\t\t\t\t\t\t\t\t  <i class=\"material-icons\">list</i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"mdl-tooltip mdl-tooltip--right\" data-mdl-for=\"botonOrden{{key}}\">
\t\t\t\t\t\t\t\t\t\tDisplay Orders
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
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
            
            
            
        </div>

    
  {% endif %}
  

{% else %}

<h1>No eres un administrador</h1>

<img src=\"https://www.stellarinfo.com/blog/wp-content/uploads/2017/02/error-thinkstock-100655502-primary.idge_.jpg\" alt=\"Error\">

{% endif %}

{% endblock %}", "admin.html.twig", "/home/ubuntu/workspace/app/Resources/views/admin.html.twig");
    }
}
