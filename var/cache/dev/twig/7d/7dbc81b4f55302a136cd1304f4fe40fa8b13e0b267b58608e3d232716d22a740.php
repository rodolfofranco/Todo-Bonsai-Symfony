<?php

/* productos.html.twig */
class __TwigTemplate_15565e02aad59ac6860b5d0857c8329bf9931ecbf9881d4a200fb022b2db5d91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "productos.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'toplinks' => array($this, 'block_toplinks'),
            'links' => array($this, 'block_links'),
            'test' => array($this, 'block_test'),
            'menuLateral' => array($this, 'block_menuLateral'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbfc540f1b739a92efcdb161595d2f20b5b587f59c6bb625075fad7596883e7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbfc540f1b739a92efcdb161595d2f20b5b587f59c6bb625075fad7596883e7b->enter($__internal_fbfc540f1b739a92efcdb161595d2f20b5b587f59c6bb625075fad7596883e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "productos.html.twig"));

        $__internal_6f9a410a471530d4396d6d93619f37bb1c5241c313ebdb3c1c184bccce14b35e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f9a410a471530d4396d6d93619f37bb1c5241c313ebdb3c1c184bccce14b35e->enter($__internal_6f9a410a471530d4396d6d93619f37bb1c5241c313ebdb3c1c184bccce14b35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "productos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbfc540f1b739a92efcdb161595d2f20b5b587f59c6bb625075fad7596883e7b->leave($__internal_fbfc540f1b739a92efcdb161595d2f20b5b587f59c6bb625075fad7596883e7b_prof);

        
        $__internal_6f9a410a471530d4396d6d93619f37bb1c5241c313ebdb3c1c184bccce14b35e->leave($__internal_6f9a410a471530d4396d6d93619f37bb1c5241c313ebdb3c1c184bccce14b35e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f8e59af6b51d4630609684544c079676e6055c829f3288eb08ad0388fbd6dea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8e59af6b51d4630609684544c079676e6055c829f3288eb08ad0388fbd6dea2->enter($__internal_f8e59af6b51d4630609684544c079676e6055c829f3288eb08ad0388fbd6dea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c5b556fabd2d48792f06dc97833f4c51565de7def1d72e20a352116e875e32a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5b556fabd2d48792f06dc97833f4c51565de7def1d72e20a352116e875e32a9->enter($__internal_c5b556fabd2d48792f06dc97833f4c51565de7def1d72e20a352116e875e32a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/product.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_c5b556fabd2d48792f06dc97833f4c51565de7def1d72e20a352116e875e32a9->leave($__internal_c5b556fabd2d48792f06dc97833f4c51565de7def1d72e20a352116e875e32a9_prof);

        
        $__internal_f8e59af6b51d4630609684544c079676e6055c829f3288eb08ad0388fbd6dea2->leave($__internal_f8e59af6b51d4630609684544c079676e6055c829f3288eb08ad0388fbd6dea2_prof);

    }

    // line 9
    public function block_toplinks($context, array $blocks = array())
    {
        $__internal_c034613cd5e7a088ade49ee68773a625fb039eb041f2cf94a8c5d45ebb270585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c034613cd5e7a088ade49ee68773a625fb039eb041f2cf94a8c5d45ebb270585->enter($__internal_c034613cd5e7a088ade49ee68773a625fb039eb041f2cf94a8c5d45ebb270585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toplinks"));

        $__internal_022c904893bb0b4e8e5c2f7acfdcf287a83a5c38ea57b36ccc6ec9783ce8a74d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_022c904893bb0b4e8e5c2f7acfdcf287a83a5c38ea57b36ccc6ec9783ce8a74d->enter($__internal_022c904893bb0b4e8e5c2f7acfdcf287a83a5c38ea57b36ccc6ec9783ce8a74d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toplinks"));

        // line 10
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 11
            echo "    
      ";
            // line 12
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "correo", array()) == "admin@admin.com")) {
                // line 13
                echo "        
        ";
                // line 14
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "VE")) {
                    // line 15
                    echo "        
              ";
                    // line 16
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        echo " 
              <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Inicio</a>
              <a class=\"mdl-navigation__link\" href=\"/admin\"> <i class=\"material-icons\">account_circle</i> Administrar Aplicacion</a>
              <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
              <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Salir</a>
              ";
                    }
                    // line 21
                    echo " 
            
        ";
                }
                // line 24
                echo "      
          ";
                // line 25
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "CO")) {
                    // line 26
                    echo "            
                ";
                    // line 27
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        echo " 
                  <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Inicio</a>
                  <a class=\"mdl-navigation__link\" href=\"/admin\"> <i class=\"material-icons\">account_circle</i> Administrar Aplicacion</a>
                  <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Productos</a>
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
                <a class=\"mdl-navigation__link\" href=\"/admin\"> <i class=\"material-icons\">account_circle</i> Administrate App</a>
                <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
                <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Logout</a>
              ";
                    }
                    // line 43
                    echo " 
          ";
                }
                // line 45
                echo "          
          ";
                // line 46
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "EN")) {
                    // line 47
                    echo "        
              ";
                    // line 48
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        echo " 
                <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
                <a class=\"mdl-navigation__link\" href=\"/admin\"> <i class=\"material-icons\">account_circle</i> Administrate App</a>
                <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
                <a class=\"mdl-navigation__link\" href=\"/logout\"> <i class=\"material-icons\">exit_to_app</i> Logout</a>
              ";
                    }
                    // line 53
                    echo " 
              
          ";
                }
                // line 56
                echo "          
      ";
            } else {
                // line 58
                echo "      
      ";
                // line 59
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "VE")) {
                    // line 60
                    echo "        
        ";
                    // line 61
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
                    // line 68
                    echo " 
      ";
                }
                // line 70
                echo "    
      ";
                // line 71
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "CO")) {
                    // line 72
                    echo "    
        ";
                    // line 73
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
                    // line 80
                    echo " 
      ";
                }
                // line 82
                echo "    
      ";
                // line 83
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "US")) {
                    // line 84
                    echo "        
        ";
                    // line 85
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
                    // line 92
                    echo " 
      ";
                }
                // line 94
                echo "    
    ";
                // line 95
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "EN")) {
                    // line 96
                    echo "      
      ";
                    // line 97
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
                    // line 104
                    echo " 
      
    ";
                }
                // line 107
                echo "          
    ";
            }
            // line 109
            echo "    
    
    ";
        } else {
            // line 112
            echo "    
      ";
            // line 113
            if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 114
                echo "        <a class=\"mdl-navigation__link\" href=\"/\"> <i class=\"material-icons\">home</i> Home</a>
        <a class=\"mdl-navigation__link\" href=\"/product\"> <i class=\"material-icons\">view_module</i> Products</a>
        <a class=\"mdl-navigation__link\" href=\"/register\"> <i class=\"material-icons\">person_add</i> Sign Up</a>
        <a class=\"mdl-navigation__link show-dialog\" href=\"javascript:void(0)\" id=\"show-dialog\">  <i class=\"material-icons\">person</i>Sign In</a>
      ";
            }
            // line 119
            echo "  
    ";
        }
        
        $__internal_022c904893bb0b4e8e5c2f7acfdcf287a83a5c38ea57b36ccc6ec9783ce8a74d->leave($__internal_022c904893bb0b4e8e5c2f7acfdcf287a83a5c38ea57b36ccc6ec9783ce8a74d_prof);

        
        $__internal_c034613cd5e7a088ade49ee68773a625fb039eb041f2cf94a8c5d45ebb270585->leave($__internal_c034613cd5e7a088ade49ee68773a625fb039eb041f2cf94a8c5d45ebb270585_prof);

    }

    // line 123
    public function block_links($context, array $blocks = array())
    {
        $__internal_8b11eb9ec6f7fa5f65d2d03abb894ce0c22f53e1671f97e5cfbbfa54266ba24d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b11eb9ec6f7fa5f65d2d03abb894ce0c22f53e1671f97e5cfbbfa54266ba24d->enter($__internal_8b11eb9ec6f7fa5f65d2d03abb894ce0c22f53e1671f97e5cfbbfa54266ba24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "links"));

        $__internal_5a2d71176ab000299903e049389333a8745e0e71ea2fa03780b51831ffdce4ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a2d71176ab000299903e049389333a8745e0e71ea2fa03780b51831ffdce4ee->enter($__internal_5a2d71176ab000299903e049389333a8745e0e71ea2fa03780b51831ffdce4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "links"));

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
        
        $__internal_5a2d71176ab000299903e049389333a8745e0e71ea2fa03780b51831ffdce4ee->leave($__internal_5a2d71176ab000299903e049389333a8745e0e71ea2fa03780b51831ffdce4ee_prof);

        
        $__internal_8b11eb9ec6f7fa5f65d2d03abb894ce0c22f53e1671f97e5cfbbfa54266ba24d->leave($__internal_8b11eb9ec6f7fa5f65d2d03abb894ce0c22f53e1671f97e5cfbbfa54266ba24d_prof);

    }

    // line 240
    public function block_test($context, array $blocks = array())
    {
        $__internal_162cf2d267739d05c86386db31e647d383dbadbc780127530a11eea1834d14d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_162cf2d267739d05c86386db31e647d383dbadbc780127530a11eea1834d14d5->enter($__internal_162cf2d267739d05c86386db31e647d383dbadbc780127530a11eea1834d14d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "test"));

        $__internal_5cccdb127e99ef584ff166d44248548ab03a58335f3e0dd1be2d6c8ae27d80ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cccdb127e99ef584ff166d44248548ab03a58335f3e0dd1be2d6c8ae27d80ae->enter($__internal_5cccdb127e99ef584ff166d44248548ab03a58335f3e0dd1be2d6c8ae27d80ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "test"));

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
        
        $__internal_5cccdb127e99ef584ff166d44248548ab03a58335f3e0dd1be2d6c8ae27d80ae->leave($__internal_5cccdb127e99ef584ff166d44248548ab03a58335f3e0dd1be2d6c8ae27d80ae_prof);

        
        $__internal_162cf2d267739d05c86386db31e647d383dbadbc780127530a11eea1834d14d5->leave($__internal_162cf2d267739d05c86386db31e647d383dbadbc780127530a11eea1834d14d5_prof);

    }

    // line 260
    public function block_menuLateral($context, array $blocks = array())
    {
        $__internal_9b4bdbc2573a6cea2866b6edf25ab1095e622d7d06e9e9aaf51e5ec2ef4cd84b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b4bdbc2573a6cea2866b6edf25ab1095e622d7d06e9e9aaf51e5ec2ef4cd84b->enter($__internal_9b4bdbc2573a6cea2866b6edf25ab1095e622d7d06e9e9aaf51e5ec2ef4cd84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuLateral"));

        $__internal_4874a1661a52aa4ee39c952a10d3a2f66244a8f28f435c5d05ba09b83ab27a81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4874a1661a52aa4ee39c952a10d3a2f66244a8f28f435c5d05ba09b83ab27a81->enter($__internal_4874a1661a52aa4ee39c952a10d3a2f66244a8f28f435c5d05ba09b83ab27a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuLateral"));

        // line 261
        echo "<!-- No header, and the drawer stays open on larger screens (fixed drawer). -->

  ";
        // line 263
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 264
            echo "
        <div class=\"mdl-layout mdl-js-layout mdl-layout--fixed-drawer\" style=\"height:100%\">
          ";
            // line 266
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "US")) {
                // line 267
                echo "                   
            <div class=\"mdl-layout__drawer lateral\">
              <span class=\"mdl-layout-title\" style=\"text-align:left\">Category</span>
              <nav class=\"mdl-navigation lateral\">
          
                  <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option \" id=\"todos\">
                    All
                  </button>
                  <br>
                  
                  <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option \" id=\"bonsai\">
                    Bonsai
                  </button>
                  <br>
                  
                  <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option\" id=\"maceta\">
                    Pot
                  </button>
                  <br>
                  
                  <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option\" id=\"accesorio\">
                    Accesories
                  </button>
                  <br>
          
              </nav>
            </div>          
          ";
            }
            // line 295
            echo "          
          ";
            // line 296
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "EN")) {
                // line 297
                echo "                    
            <div class=\"mdl-layout__drawer lateral\">
              <span class=\"mdl-layout-title\" style=\"text-align:left\">Category</span>
              <nav class=\"mdl-navigation lateral\">
          
                  <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option \" id=\"todos\">
                    All
                  </button>
                  <br>
                  
                  <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option \" id=\"bonsai\">
                    Bonsai
                  </button>
                  <br>
                  
                  <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option\" id=\"maceta\">
                    Pot
                  </button>
                  <br>
                  
                  <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option\" id=\"accesorio\">
                    Accesories
                  </button>
                  <br>
          
              </nav>
            </div>          
          ";
            }
            // line 325
            echo "          
          ";
            // line 326
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "VE")) {
                // line 327
                echo "                   
            <div class=\"mdl-layout__drawer lateral\">
              <span class=\"mdl-layout-title\" style=\"text-align:left\">Categoría</span>
              <nav class=\"mdl-navigation lateral\">
          
                  <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option \" id=\"todos\">
                    Todos
                  </button>
                  <br>
                  
                  <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option \" id=\"bonsai\">
                    Bonsai
                  </button>
                  <br>
                  
                  <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option\" id=\"maceta\">
                    Maceta
                  </button>
                  <br>
                  
                  <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option\" id=\"accesorio\">
                    Accesorios
                  </button>
                  <br>
          
              </nav>
            </div>          
          ";
            }
            // line 355
            echo "          
          ";
            // line 356
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "CO")) {
                // line 357
                echo "                   
            <div class=\"mdl-layout__drawer lateral\">
              <span class=\"mdl-layout-title\" style=\"text-align:left\">Categoría</span>
              <nav class=\"mdl-navigation lateral\">
          
                  <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option \" id=\"todos\">
                    Todos
                  </button>
                  <br>
                  
                  <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option \" id=\"bonsai\">
                    Bonsai
                  </button>
                  <br>
                  
                  <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option\" id=\"maceta\">
                    Maceta
                  </button>
                  <br>
                  
                  <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option\" id=\"accesorio\">
                    Accesorios
                  </button>
                  <br>
          
              </nav>
            </div>          
          ";
            }
            // line 385
            echo "  
  ";
        } else {
            // line 387
            echo "  
  <div class=\"mdl-layout mdl-js-layout mdl-layout--fixed-drawer\" style=\"height:100%\">
           
    <div class=\"mdl-layout__drawer lateral\">
      <span class=\"mdl-layout-title\" style=\"text-align:left\">Category</span>
      <nav class=\"mdl-navigation lateral\">
  
          <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option \" id=\"todos\">
            All
          </button>
          <br>
          
          <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option \" id=\"bonsai\">
            Bonsai
          </button>
          <br>
          
          <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option\" id=\"maceta\">
            Pot
          </button>
          <br>
          
          <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option\" id=\"accesorio\">
            Accesories
          </button>
          <br>
  
      </nav>
    </div>          
  
  
  
  
  
  
  ";
        }
        // line 423
        echo "  
</div>

<script>
  // ESTA FUNCION VIENE DEL ATRIBUTO ONLOAD DEL BASE.HTML.TWIG
  function cargando(){
    \$(\"#bonsaiprod\").hide();
    \$(\"#macetaprod\").hide();
    \$(\"#accesorioprod\").hide();
    \$(\"#allproducts\").show();
  }
  
  \$(\"#todos\").click(function(){
      \$(\"#bonsaiprod\").hide();
      \$(\"#macetaprod\").hide();
      \$(\"#accesorioprod\").hide();
      \$(\"#allproducts\").show();
  });
  
  \$(\"#bonsai\").click(function(){
      \$(\"#macetaprod\").hide();
      \$(\"#accesorioprod\").hide();
      \$(\"#allproducts\").hide();
      \$(\"#bonsaiprod\").show();
  });
  
  \$(\"#maceta\").click(function(){
      \$(\"#bonsaiprod\").hide();
      \$(\"#accesorioprod\").hide();
      \$(\"#allproducts\").hide();
      \$(\"#macetaprod\").show();
  });
  
  \$(\"#accesorio\").click(function(){
      \$(\"#bonsaiprod\").hide();
      \$(\"#allproducts\").hide();
      \$(\"#macetaprod\").hide();
      \$(\"#accesorioprod\").show();
  });
  
</script>

";
        
        $__internal_4874a1661a52aa4ee39c952a10d3a2f66244a8f28f435c5d05ba09b83ab27a81->leave($__internal_4874a1661a52aa4ee39c952a10d3a2f66244a8f28f435c5d05ba09b83ab27a81_prof);

        
        $__internal_9b4bdbc2573a6cea2866b6edf25ab1095e622d7d06e9e9aaf51e5ec2ef4cd84b->leave($__internal_9b4bdbc2573a6cea2866b6edf25ab1095e622d7d06e9e9aaf51e5ec2ef4cd84b_prof);

    }

    // line 468
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_59bb5a0eaa1b7877e671074828662ea2777a9a821a484ceb1b7800072bb1b02f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59bb5a0eaa1b7877e671074828662ea2777a9a821a484ceb1b7800072bb1b02f->enter($__internal_59bb5a0eaa1b7877e671074828662ea2777a9a821a484ceb1b7800072bb1b02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_83d5fdefe31a7e4ee03b0952c59e718e60b24952985230feda2b9be48ba47568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83d5fdefe31a7e4ee03b0952c59e718e60b24952985230feda2b9be48ba47568->enter($__internal_83d5fdefe31a7e4ee03b0952c59e718e60b24952985230feda2b9be48ba47568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 469
        echo "
  ";
        // line 470
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 471
            echo "
  <dialog class=\"mdl-dialog dialogLogin\">
    <h5 class=\"mdl-dialog__title\" style=\"font-size:25px; align:center\">Inicio de Sesión</h5>
    <div class=\"mdl-dialog__content\">
      <form id=\"form-login\" action=\"";
            // line 475
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
    </div>
    <div class=\"mdl-dialog__actions\">
      <button form=\"form-login\" type=\"submit\" class=\"mdl-button\">Login</button>
      <button type=\"button\" class=\"mdl-button close\">Cancelar</button>
    </div>
  </dialog>
  <script>
    var dialog = document.querySelector('.dialogLogin');
    var showDialogButton = document.querySelector('.show-dialogLogin');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    showDialogButton.addEventListener('click', function() {
      dialog.showModal();
    });
    dialog.querySelector('.close').addEventListener('click', function() {
      dialog.close();
    });
    
  </script>
  
  

  ";
            // line 508
            if ((twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : $this->getContext($context, "products"))) == 0)) {
                // line 509
                echo "  <h3 style=\"text-align: right\">No hay productos... </h3>
  ";
            }
            // line 511
            echo "
  <div class=\"row text-center\" style=\"padding-left:100px; padding-top:50px; padding-bottom: 50px\" id=\"allproducts\">
      ";
            // line 513
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 514
                echo "        <style> 
          .mdl-dialog {
            border: none;
            box-shadow: 0 9px 46px 8px rgba(0,0,0,.14), 0 11px 15px -7px rgba(0,0,0,.12), 0 24px 38px 3px rgba(0,0,0,.2);
            width: 60%;
          }
          .mdl-navigation.lateral{
            background-color:white;
          }
          .mdl-layout__drawer.lateral{
              background-color:white;
              width: 175px;
              height:55%;
              border-right-style: none;
              border-right-width: 0px;
              border-bottom-style: none;
              border-bottom-width: 0px;
              border-bottom-color: transparent;
              
          }
          .mdl-button.mdl-js-button.mdl-js-ripple-effect:hover{
            background-color: #67daff;
          }
          .mdl-dialog__actions--full-width>* {
              height: 48px;
              -webkit-flex: 0 0 100%;
              -ms-flex: 0 0 100%;
              flex: 0 0 100%;
              padding-right: 0px;
              margin-right: 0;
              /* text-align: right; */
          }
      
      </style>
          ";
                // line 549
                echo "          
          ";
                // line 551
                echo "          ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "VE")) {
                    // line 552
                    echo "            ";
                    // line 553
                    echo "            ";
                    // line 554
                    echo "            ";
                    // line 555
                    echo "            ";
                    // line 556
                    echo "            ";
                    // line 557
                    echo "            ";
                    // line 558
                    echo "            ";
                    // line 559
                    echo "            ";
                    // line 560
                    echo "
            <div id=\"";
                    // line 561
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
              <div  class=\"filterDiv ";
                    // line 562
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "categoria", array()), "html", null, true);
                    echo "\">
              ";
                    // line 564
                    echo "                <a href=\"javascript:void(0)\" class=\"show-modal";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">
              ";
                    // line 566
                    echo "              <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover;\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                    echo "\" alt=\"\">
              ";
                    // line 568
                    echo "              <div class=\"descripcionProducto\">
                <a href=\"javascript:void(0)\" class=\"show-modal";
                    // line 569
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">
                  <h4 class=\"producto text";
                    // line 570
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                    echo "</h4>
                  <h6 class=\"producto price";
                    // line 571
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["product"], "precio", array()) * 35000), "html", null, true);
                    echo " BsF.</h6>
                </a>
              </div>
              <br>
              <br>
              
              ";
                    // line 578
                    echo "              
              <dialog class=\"mdl-dialog show-dialog";
                    // line 579
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">
                  <div class=\"mdl-dialog__content\">
                     
                      <div class=\"row\">
                      ";
                    // line 584
                    echo "                      <section class=\"foto col-lg-6 col-md-6\">
                        <img class=\"img-fluid\" src=\"";
                    // line 585
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                    echo "\" alt=\"\">  
                      </section>
                      ";
                    // line 588
                    echo "                      <section class=\"col-lg-6 col-md-6 mb-12\">
                        <h4 class=\"producto text-center center-text\">";
                    // line 589
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                    echo "</h4>
                        <h6 class=\"producto text-center center-text\">Precio: ";
                    // line 590
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["product"], "precio", array()) * 35000), "html", null, true);
                    echo " BsF</h6>
                        <h6 class=\"producto text-center center-text\">Descripcion: ";
                    // line 591
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "Descripcion", array()), "html", null, true);
                    echo "</h6>
                        ";
                    // line 593
                    echo "                        <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                          
                          ";
                    // line 595
                    if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        // line 596
                        echo "                          <p>Inicie Sesion para empezar a agregar productos a su Carro de Compras!</p>
                          <button type=\"button\" class=\"mdl-button close";
                        // line 597
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">Cerrar <i class=\"material-icons\">close</i></button>
                          ";
                    }
                    // line 599
                    echo "                          
                          ";
                    // line 600
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        // line 601
                        echo "                            <hr style=\"height:10px\">                            
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                        // line 602
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarProducto", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                        echo "\" method=\"POST\">
                              <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Agregar al Carro de Compras<i class=\"material-icons\">add_shopping_cart</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                        // line 605
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarWishlist", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                        echo "\" method=\"POST\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Agregar a la wishlist <i class=\"material-icons\">list</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close";
                        // line 609
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">Cerrar <i class=\"material-icons\">close</i></button>
                            </form>
                          ";
                    }
                    // line 612
                    echo "                        </div>
                      </section>
                      </div>
                    
                  </div>
                </dialog>
                
              ";
                    // line 620
                    echo "              <script>
                // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                var dialog";
                    // line 622
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo " = document.querySelector('.show-dialog";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "');
                // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                var showModalButton";
                    // line 624
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo " = document.querySelector('.show-modal";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "'); 
                // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                var showTextButton";
                    // line 626
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo " = document.querySelector('.text";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "');
                // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                var showPriceButton";
                    // line 628
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo " = document.querySelector('.price";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "');
                
                if (!dialog";
                    // line 630
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".showModal){
                  dialogPolyfill.registerDialog(dialog";
                    // line 631
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ");
                }
                // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                showModalButton";
                    // line 634
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".addEventListener('click', function() {
                  dialog";
                    // line 635
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                showTextButton";
                    // line 638
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".addEventListener('click', function() {
                  dialog";
                    // line 639
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                showPriceButton";
                    // line 642
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".addEventListener('click', function() {
                  dialog";
                    // line 643
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".showModal();
                });
                // FUNCION PARA CERRAR EL DIALOG
                dialog";
                    // line 646
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".querySelector('.close";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "').addEventListener('click', function() {
                  dialog";
                    // line 647
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".close();
                });
              </script> 
            </a>
              </div>
            </div>
      
          ";
                }
                // line 655
                echo "          
          ";
                // line 657
                echo "          ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "US")) {
                    // line 658
                    echo "            ";
                    // line 659
                    echo "            ";
                    // line 660
                    echo "            ";
                    // line 661
                    echo "            ";
                    // line 662
                    echo "            ";
                    // line 663
                    echo "            ";
                    // line 664
                    echo "            ";
                    // line 665
                    echo "            ";
                    // line 666
                    echo "
            <div id=\"";
                    // line 667
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
            <div  class=\"filterDiv ";
                    // line 668
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "categoria", array()), "html", null, true);
                    echo "\">
            ";
                    // line 670
                    echo "            <a href=\"javascript:void(0)\" class=\"show-modal";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">
              ";
                    // line 672
                    echo "              <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                    echo "\" alt=\"\">
              ";
                    // line 674
                    echo "              <div class=\"descripcionProducto\">
                <a href=\"javascript:void(0)\" class=\"show-modal";
                    // line 675
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">
                  <h4 class=\"producto text";
                    // line 676
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                    echo "</h4>
                  <h6 class=\"producto price";
                    // line 677
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "precio", array()), "html", null, true);
                    echo " \$.</h6>
                </a>
              </div>
              <br>
              <br>
              
              ";
                    // line 684
                    echo "              
              <dialog class=\"mdl-dialog show-dialog";
                    // line 685
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">
                  <div class=\"mdl-dialog__content\">
                     
                      <div class=\"row\">
                      ";
                    // line 690
                    echo "                      <section class=\"foto col-lg-6 col-md-6\">
                        <img class=\"img-fluid\" src=\"";
                    // line 691
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                    echo "\" alt=\"\">  
                      </section>
                      ";
                    // line 694
                    echo "                      <section class=\"col-lg-6 col-md-6 mb-12\">
                        <h4 class=\"producto text-center center-text\">";
                    // line 695
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                    echo "</h4>
                        <h6 class=\"producto text-center center-text\">Price: ";
                    // line 696
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "precio", array()), "html", null, true);
                    echo " \$</h6>
                        <h6 class=\"producto text-center center-text\">Description: ";
                    // line 697
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "Descripcion", array()), "html", null, true);
                    echo "</h6>
                        ";
                    // line 699
                    echo "                        <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                          
                          ";
                    // line 701
                    if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        // line 702
                        echo "                          <p>You have to sign in to add products to your shopping cart!</p>
                          <button type=\"button\" class=\"mdl-button close";
                        // line 703
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">Cerrar <i class=\"material-icons\">close</i></button>
                          ";
                    }
                    // line 705
                    echo "                          
                          ";
                    // line 706
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        // line 707
                        echo "                            <hr style=\"height:10px\">                            
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                        // line 708
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarProducto", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                        echo "\" method=\"POST\">
                              <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Add to Shopping Cart<i class=\"material-icons\">add_shopping_cart</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                        // line 711
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarWishlist", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                        echo "\" method=\"POST\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Add To WishList <i class=\"material-icons\">list</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close";
                        // line 715
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">Close <i class=\"material-icons\">close</i></button>
                            </form>
                          ";
                    }
                    // line 718
                    echo "                        </div>
                      </section>
                      </div>
                    
                  </div>
                </dialog>
                
              ";
                    // line 726
                    echo "              <script>
                // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                var dialog";
                    // line 728
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo " = document.querySelector('.show-dialog";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "');
                // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                var showModalButton";
                    // line 730
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo " = document.querySelector('.show-modal";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "'); 
                // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                var showTextButton";
                    // line 732
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo " = document.querySelector('.text";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "');
                // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                var showPriceButton";
                    // line 734
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo " = document.querySelector('.price";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "');
                
                if (!dialog";
                    // line 736
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".showModal){
                  dialogPolyfill.registerDialog(dialog";
                    // line 737
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ");
                }
                // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                showModalButton";
                    // line 740
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".addEventListener('click', function() {
                  dialog";
                    // line 741
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                showTextButton";
                    // line 744
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".addEventListener('click', function() {
                  dialog";
                    // line 745
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                showPriceButton";
                    // line 748
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".addEventListener('click', function() {
                  dialog";
                    // line 749
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".showModal();
                });
                // FUNCION PARA CERRAR EL DIALOG
                dialog";
                    // line 752
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".querySelector('.close";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "').addEventListener('click', function() {
                  dialog";
                    // line 753
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".close();
                });
              </script> 
            </a>
          </div>
      </div>
      
          ";
                }
                // line 761
                echo "          
          
          ";
                // line 764
                echo "          ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "EN")) {
                    // line 765
                    echo "            ";
                    // line 766
                    echo "            ";
                    // line 767
                    echo "            ";
                    // line 768
                    echo "            ";
                    // line 769
                    echo "            ";
                    // line 770
                    echo "            ";
                    // line 771
                    echo "            ";
                    // line 772
                    echo "            ";
                    // line 773
                    echo "
            <div id=\"";
                    // line 774
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
              <div  class=\"filterDiv ";
                    // line 775
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "categoria", array()), "html", null, true);
                    echo "\">
            ";
                    // line 777
                    echo "            <a href=\"javascript:void(0)\" class=\"show-modal";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">
              ";
                    // line 779
                    echo "              <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                    echo "\" alt=\"\">
              ";
                    // line 781
                    echo "              <div class=\"descripcionProducto\">
                <a href=\"javascript:void(0)\" class=\"show-modal";
                    // line 782
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">
                  <h4 class=\"producto text";
                    // line 783
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                    echo "</h4>
                  <h6 class=\"producto price";
                    // line 784
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["product"], "precio", array()) * 0.76), "html", null, true);
                    echo " £.</h6>
                </a>
              </div>
              <br>
              <br>
              
              ";
                    // line 791
                    echo "              
              <dialog class=\"mdl-dialog show-dialog";
                    // line 792
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">
                  <div class=\"mdl-dialog__content\">
                     
                      <div class=\"row\">
                      ";
                    // line 797
                    echo "                      <section class=\"foto col-lg-6 col-md-6\">
                        <img class=\"img-fluid\" src=\"";
                    // line 798
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                    echo "\" alt=\"\">  
                      </section>
                      ";
                    // line 801
                    echo "                      <section class=\"col-lg-6 col-md-6 mb-12\">
                        <h4 class=\"producto text-center center-text\">";
                    // line 802
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                    echo "</h4>
                        <h6 class=\"producto text-center center-text\">Price: ";
                    // line 803
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["product"], "precio", array()) * 0.76), "html", null, true);
                    echo " £</h6>
                        <h6 class=\"producto text-center center-text\">Description: ";
                    // line 804
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "Descripcion", array()), "html", null, true);
                    echo "</h6>
                        ";
                    // line 806
                    echo "                        <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                          
                          ";
                    // line 808
                    if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        // line 809
                        echo "                          <p>You have to sign in to add products to your shopping cart!</p>
                          <button type=\"button\" class=\"mdl-button close";
                        // line 810
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">Cerrar <i class=\"material-icons\">close</i></button>
                          ";
                    }
                    // line 812
                    echo "                          
                          ";
                    // line 813
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        // line 814
                        echo "                            <hr style=\"height:10px\">                            
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                        // line 815
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarProducto", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                        echo "\" method=\"POST\">
                              <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Add to Shopping Cart<i class=\"material-icons\">add_shopping_cart</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                        // line 818
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarWishlist", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                        echo "\" method=\"POST\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Add To WishList <i class=\"material-icons\">list</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close";
                        // line 822
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">Close <i class=\"material-icons\">close</i></button>
                            </form>
                          ";
                    }
                    // line 825
                    echo "                        </div>
                      </section>
                      </div>
                    
                  </div>
                </dialog>
                
              ";
                    // line 833
                    echo "              <script>
                // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                var dialog";
                    // line 835
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo " = document.querySelector('.show-dialog";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "');
                // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                var showModalButton";
                    // line 837
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo " = document.querySelector('.show-modal";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "'); 
                // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                var showTextButton";
                    // line 839
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo " = document.querySelector('.text";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "');
                // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                var showPriceButton";
                    // line 841
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo " = document.querySelector('.price";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "');
                
                if (!dialog";
                    // line 843
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".showModal){
                  dialogPolyfill.registerDialog(dialog";
                    // line 844
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ");
                }
                // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                showModalButton";
                    // line 847
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".addEventListener('click', function() {
                  dialog";
                    // line 848
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                showTextButton";
                    // line 851
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".addEventListener('click', function() {
                  dialog";
                    // line 852
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                showPriceButton";
                    // line 855
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".addEventListener('click', function() {
                  dialog";
                    // line 856
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".showModal();
                });
                // FUNCION PARA CERRAR EL DIALOG
                dialog";
                    // line 859
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".querySelector('.close";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "').addEventListener('click', function() {
                  dialog";
                    // line 860
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".close();
                });
              </script> 
            </a>
          </div>
            </div>
      
          ";
                }
                // line 868
                echo "          
          
          ";
                // line 871
                echo "          ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "CO")) {
                    // line 872
                    echo "            ";
                    // line 873
                    echo "            ";
                    // line 874
                    echo "            ";
                    // line 875
                    echo "            ";
                    // line 876
                    echo "            ";
                    // line 877
                    echo "            ";
                    // line 878
                    echo "            ";
                    // line 879
                    echo "            ";
                    // line 880
                    echo "
            <div id=\"";
                    // line 881
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
              <div  class=\"filterDiv ";
                    // line 882
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "categoria", array()), "html", null, true);
                    echo "\">
            ";
                    // line 884
                    echo "            <a href=\"javascript:void(0)\" class=\"show-modal";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">
              ";
                    // line 886
                    echo "              <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                    echo "\" alt=\"\">
              ";
                    // line 888
                    echo "              <div class=\"descripcionProducto\">
                <a href=\"javascript:void(0)\" class=\"show-modal";
                    // line 889
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">
                  <h4 class=\"producto text";
                    // line 890
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                    echo "</h4>
                  <h6 class=\"producto price";
                    // line 891
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["product"], "precio", array()) * 2977.99), "html", null, true);
                    echo " COP</h6>
                </a>
              </div>
              <br>
              <br>
              
              ";
                    // line 898
                    echo "              
              <dialog class=\"mdl-dialog show-dialog";
                    // line 899
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">
                  <div class=\"mdl-dialog__content\">
                     
                      <div class=\"row\">
                      ";
                    // line 904
                    echo "                      <section class=\"foto col-lg-6 col-md-6\">
                        <img class=\"img-fluid\" src=\"";
                    // line 905
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                    echo "\" alt=\"\">  
                      </section>
                      ";
                    // line 908
                    echo "                      <section class=\"col-lg-6 col-md-6 mb-12\">
                        <h4 class=\"producto text-center center-text\">";
                    // line 909
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                    echo "</h4>
                        <h6 class=\"producto text-center center-text\">Precio: ";
                    // line 910
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["product"], "precio", array()) * 2977.99), "html", null, true);
                    echo " COP</h6>
                        <h6 class=\"producto text-center center-text\">Descripcion: ";
                    // line 911
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "Descripcion", array()), "html", null, true);
                    echo "</h6>
                        ";
                    // line 913
                    echo "                        <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                          
                          ";
                    // line 915
                    if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        // line 916
                        echo "                          <p>Inicie Sesion para empezar a agregar productos a su Carro de Compras!</p>
                          <button type=\"button\" class=\"mdl-button close";
                        // line 917
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">Cerrar <i class=\"material-icons\">close</i></button>
                          ";
                    }
                    // line 919
                    echo "                          
                          ";
                    // line 920
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        // line 921
                        echo "                            <hr style=\"height:10px\">                            
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                        // line 922
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarProducto", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                        echo "\" method=\"POST\">
                              <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Agregar al Carro de Compras<i class=\"material-icons\">add_shopping_cart</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                        // line 925
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarWishlist", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                        echo "\" method=\"POST\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Agregar a la wishlist <i class=\"material-icons\">list</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close";
                        // line 929
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">Cerrar <i class=\"material-icons\">close</i></button>
                            </form>
                          ";
                    }
                    // line 932
                    echo "                        </div>
                      </section>
                      </div>
                    
                  </div>
                </dialog>
                
              ";
                    // line 940
                    echo "              <script>
                // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                var dialog";
                    // line 942
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo " = document.querySelector('.show-dialog";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "');
                // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                var showModalButton";
                    // line 944
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo " = document.querySelector('.show-modal";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "'); 
                // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                var showTextButton";
                    // line 946
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo " = document.querySelector('.text";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "');
                // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                var showPriceButton";
                    // line 948
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo " = document.querySelector('.price";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "');
                
                if (!dialog";
                    // line 950
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".showModal){
                  dialogPolyfill.registerDialog(dialog";
                    // line 951
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ");
                }
                // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                showModalButton";
                    // line 954
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".addEventListener('click', function() {
                  dialog";
                    // line 955
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                showTextButton";
                    // line 958
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".addEventListener('click', function() {
                  dialog";
                    // line 959
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                showPriceButton";
                    // line 962
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".addEventListener('click', function() {
                  dialog";
                    // line 963
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".showModal();
                });
                // FUNCION PARA CERRAR EL DIALOG
                dialog";
                    // line 966
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".querySelector('.close";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "').addEventListener('click', function() {
                  dialog";
                    // line 967
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".close();
                });
              </script> 
            </a>
          </div>
            </div>
      
          ";
                }
                // line 975
                echo "      
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 977
            echo "      

  </div>
  
  <div class=\"row text-center\" style=\"padding-left:100px; padding-top:50px; padding-bottom: 50px\" id=\"bonsaiprod\">
      ";
            // line 982
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 983
                echo "        ";
                if (($this->getAttribute($context["product"], "categoria", array()) == "bonsai")) {
                    // line 984
                    echo "        <style> 
      .mdl-dialog {
        border: none;
        box-shadow: 0 9px 46px 8px rgba(0,0,0,.14), 0 11px 15px -7px rgba(0,0,0,.12), 0 24px 38px 3px rgba(0,0,0,.2);
        width: 60%;
      }
      .mdl-navigation.lateral{
        
        background-color:white;
    }
      .mdl-layout__drawer.lateral{
          background-color:white;
          width: 175px;
          height:55%;
          border-right-style: none;
          border-right-width: 0px;
          border-bottom-style: none;
          border-bottom-width: 0px;
          border-bottom-color: transparent;
          
      }
      .mdl-button.mdl-js-button.mdl-js-ripple-effect:hover{
        
        background-color: #67daff;
         
        
    }
    
    </style>
          ";
                    // line 1014
                    echo "          
          ";
                    // line 1016
                    echo "          ";
                    if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "VE")) {
                        // line 1017
                        echo "            ";
                        // line 1018
                        echo "            ";
                        // line 1019
                        echo "            ";
                        // line 1020
                        echo "            ";
                        // line 1021
                        echo "            ";
                        // line 1022
                        echo "            ";
                        // line 1023
                        echo "            ";
                        // line 1024
                        echo "            ";
                        // line 1025
                        echo "
            <div id=\"";
                        // line 1026
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
              <div  class=\"filterDiv ";
                        // line 1027
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "categoria", array()), "html", null, true);
                        echo "\">
              ";
                        // line 1029
                        echo "                <a href=\"javascript:void(0)\" class=\"show-modal";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">
              ";
                        // line 1031
                        echo "              <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                        echo "\" alt=\"\">
              ";
                        // line 1033
                        echo "              <div class=\"descripcionProducto\">
                <a href=\"javascript:void(0)\" class=\"show-modal";
                        // line 1034
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">
                  <h4 class=\"producto text";
                        // line 1035
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                        echo "</h4>
                  <h6 class=\"producto price";
                        // line 1036
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["product"], "precio", array()) * 35000), "html", null, true);
                        echo " BsF.</h6>
                </a>
              </div>
              <br>
              <br>
              
              ";
                        // line 1043
                        echo "              
              <dialog class=\"mdl-dialog show-dialog";
                        // line 1044
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">
                  <div class=\"mdl-dialog__content\">
                     
                      <div class=\"row\">
                      ";
                        // line 1049
                        echo "                      <section class=\"foto col-lg-6 col-md-6\">
                        <img class=\"img-fluid\" src=\"";
                        // line 1050
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                        echo "\" alt=\"\">  
                      </section>
                      ";
                        // line 1053
                        echo "                      <section class=\"col-lg-6 col-md-6 mb-12\">
                        <h4 class=\"producto text-center center-text\">";
                        // line 1054
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                        echo "</h4>
                        <h6 class=\"producto text-center center-text\">Precio: ";
                        // line 1055
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["product"], "precio", array()) * 35000), "html", null, true);
                        echo " BsF</h6>
                        <h6 class=\"producto text-center center-text\">Descripcion: ";
                        // line 1056
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "Descripcion", array()), "html", null, true);
                        echo "</h6>
                        ";
                        // line 1058
                        echo "                        <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                          
                          ";
                        // line 1060
                        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                            // line 1061
                            echo "                          <p>Inicie Sesion para empezar a agregar productos a su Carro de Compras!</p>
                          <button type=\"button\" class=\"mdl-button close";
                            // line 1062
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                            echo "\">Cerrar <i class=\"material-icons\">close</i></button>
                          ";
                        }
                        // line 1064
                        echo "                          
                          ";
                        // line 1065
                        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                            // line 1066
                            echo "                            <hr style=\"height:10px\">                            
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                            // line 1067
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarProducto", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                            echo "\" method=\"POST\">
                              <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Agregar al Carro de Compras<i class=\"material-icons\">add_shopping_cart</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                            // line 1070
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarWishlist", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                            echo "\" method=\"POST\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Agregar a la wishlist <i class=\"material-icons\">list</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close";
                            // line 1074
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                            echo "\">Cerrar <i class=\"material-icons\">close</i></button>
                            </form>
                          ";
                        }
                        // line 1077
                        echo "                        </div>
                      </section>
                      </div>
                    
                  </div>
                </dialog>
                
              ";
                        // line 1085
                        echo "              <script>
                // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                var dialog";
                        // line 1087
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.show-dialog";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "');
                // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                var showModalButton";
                        // line 1089
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.show-modal";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "'); 
                // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                var showTextButton";
                        // line 1091
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.text";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "');
                // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                var showPriceButton";
                        // line 1093
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.price";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "');
                
                if (!dialog";
                        // line 1095
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal){
                  dialogPolyfill.registerDialog(dialog";
                        // line 1096
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ");
                }
                // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                showModalButton";
                        // line 1099
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".addEventListener('click', function() {
                  dialog";
                        // line 1100
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                showTextButton";
                        // line 1103
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".addEventListener('click', function() {
                  dialog";
                        // line 1104
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                showPriceButton";
                        // line 1107
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".addEventListener('click', function() {
                  dialog";
                        // line 1108
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal();
                });
                // FUNCION PARA CERRAR EL DIALOG
                dialog";
                        // line 1111
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".querySelector('.close";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "').addEventListener('click', function() {
                  dialog";
                        // line 1112
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".close();
                });
              </script> 
            </a>
              </div>
            </div>
      
          ";
                    }
                    // line 1120
                    echo "          
          ";
                    // line 1122
                    echo "          ";
                    if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "US")) {
                        // line 1123
                        echo "            ";
                        // line 1124
                        echo "            ";
                        // line 1125
                        echo "            ";
                        // line 1126
                        echo "            ";
                        // line 1127
                        echo "            ";
                        // line 1128
                        echo "            ";
                        // line 1129
                        echo "            ";
                        // line 1130
                        echo "            ";
                        // line 1131
                        echo "
            <div id=\"";
                        // line 1132
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
            <div  class=\"filterDiv ";
                        // line 1133
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "categoria", array()), "html", null, true);
                        echo "\">
            ";
                        // line 1135
                        echo "            <a href=\"javascript:void(0)\" class=\"show-modal";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">
              ";
                        // line 1137
                        echo "              <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                        echo "\" alt=\"\">
              ";
                        // line 1139
                        echo "              <div class=\"descripcionProducto\">
                <a href=\"javascript:void(0)\" class=\"show-modal";
                        // line 1140
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">
                  <h4 class=\"producto text";
                        // line 1141
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                        echo "</h4>
                  <h6 class=\"producto price";
                        // line 1142
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "precio", array()), "html", null, true);
                        echo " \$.</h6>
                </a>
              </div>
              <br>
              <br>
              
              ";
                        // line 1149
                        echo "              
              <dialog class=\"mdl-dialog show-dialog";
                        // line 1150
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">
                  <div class=\"mdl-dialog__content\">
                     
                      <div class=\"row\">
                      ";
                        // line 1155
                        echo "                      <section class=\"foto col-lg-6 col-md-6\">
                        <img class=\"img-fluid\" src=\"";
                        // line 1156
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                        echo "\" alt=\"\">  
                      </section>
                      ";
                        // line 1159
                        echo "                      <section class=\"col-lg-6 col-md-6 mb-12\">
                        <h4 class=\"producto text-center center-text\">";
                        // line 1160
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                        echo "</h4>
                        <h6 class=\"producto text-center center-text\">Price: ";
                        // line 1161
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "precio", array()), "html", null, true);
                        echo " \$</h6>
                        <h6 class=\"producto text-center center-text\">Description: ";
                        // line 1162
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "Descripcion", array()), "html", null, true);
                        echo "</h6>
                        ";
                        // line 1164
                        echo "                        <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                          
                          ";
                        // line 1166
                        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                            // line 1167
                            echo "                          <p>You have to sign in to add products to your shopping cart!</p>
                          <button type=\"button\" class=\"mdl-button close";
                            // line 1168
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                            echo "\">Cerrar <i class=\"material-icons\">close</i></button>
                          ";
                        }
                        // line 1170
                        echo "                          
                          ";
                        // line 1171
                        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                            // line 1172
                            echo "                            <hr style=\"height:10px\">                            
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                            // line 1173
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarProducto", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                            echo "\" method=\"POST\">
                              <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Add to Shopping Cart<i class=\"material-icons\">add_shopping_cart</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                            // line 1176
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarWishlist", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                            echo "\" method=\"POST\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Add To WishList <i class=\"material-icons\">list</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close";
                            // line 1180
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                            echo "\">Close <i class=\"material-icons\">close</i></button>
                            </form>
                          ";
                        }
                        // line 1183
                        echo "                        </div>
                      </section>
                      </div>
                    
                  </div>
                </dialog>
                
              ";
                        // line 1191
                        echo "              <script>
                // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                var dialog";
                        // line 1193
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.show-dialog";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "');
                // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                var showModalButton";
                        // line 1195
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.show-modal";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "'); 
                // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                var showTextButton";
                        // line 1197
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.text";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "');
                // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                var showPriceButton";
                        // line 1199
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.price";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "');
                
                if (!dialog";
                        // line 1201
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal){
                  dialogPolyfill.registerDialog(dialog";
                        // line 1202
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ");
                }
                // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                showModalButton";
                        // line 1205
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".addEventListener('click', function() {
                  dialog";
                        // line 1206
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                showTextButton";
                        // line 1209
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".addEventListener('click', function() {
                  dialog";
                        // line 1210
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                showPriceButton";
                        // line 1213
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".addEventListener('click', function() {
                  dialog";
                        // line 1214
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal();
                });
                // FUNCION PARA CERRAR EL DIALOG
                dialog";
                        // line 1217
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".querySelector('.close";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "').addEventListener('click', function() {
                  dialog";
                        // line 1218
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".close();
                });
              </script> 
            </a>
          </div>
      </div>
      
          ";
                    }
                    // line 1226
                    echo "          
          
          ";
                    // line 1229
                    echo "          ";
                    if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "EN")) {
                        // line 1230
                        echo "            ";
                        // line 1231
                        echo "            ";
                        // line 1232
                        echo "            ";
                        // line 1233
                        echo "            ";
                        // line 1234
                        echo "            ";
                        // line 1235
                        echo "            ";
                        // line 1236
                        echo "            ";
                        // line 1237
                        echo "            ";
                        // line 1238
                        echo "
            <div id=\"";
                        // line 1239
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
              <div  class=\"filterDiv ";
                        // line 1240
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "categoria", array()), "html", null, true);
                        echo "\">
            ";
                        // line 1242
                        echo "            <a href=\"javascript:void(0)\" class=\"show-modal";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">
              ";
                        // line 1244
                        echo "              <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                        echo "\" alt=\"\">
              ";
                        // line 1246
                        echo "              <div class=\"descripcionProducto\">
                <a href=\"javascript:void(0)\" class=\"show-modal";
                        // line 1247
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">
                  <h4 class=\"producto text";
                        // line 1248
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                        echo "</h4>
                  <h6 class=\"producto price";
                        // line 1249
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["product"], "precio", array()) * 0.76), "html", null, true);
                        echo " £.</h6>
                </a>
              </div>
              <br>
              <br>
              
              ";
                        // line 1256
                        echo "              
              <dialog class=\"mdl-dialog show-dialog";
                        // line 1257
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">
                  <div class=\"mdl-dialog__content\">
                     
                      <div class=\"row\">
                      ";
                        // line 1262
                        echo "                      <section class=\"foto col-lg-6 col-md-6\">
                        <img class=\"img-fluid\" src=\"";
                        // line 1263
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                        echo "\" alt=\"\">  
                      </section>
                      ";
                        // line 1266
                        echo "                      <section class=\"col-lg-6 col-md-6 mb-12\">
                        <h4 class=\"producto text-center center-text\">";
                        // line 1267
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                        echo "</h4>
                        <h6 class=\"producto text-center center-text\">Price: ";
                        // line 1268
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["product"], "precio", array()) * 0.76), "html", null, true);
                        echo " £</h6>
                        <h6 class=\"producto text-center center-text\">Description: ";
                        // line 1269
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "Descripcion", array()), "html", null, true);
                        echo "</h6>
                        ";
                        // line 1271
                        echo "                        <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                          
                          ";
                        // line 1273
                        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                            // line 1274
                            echo "                          <p>You have to sign in to add products to your shopping cart!</p>
                          <button type=\"button\" class=\"mdl-button close";
                            // line 1275
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                            echo "\">Cerrar <i class=\"material-icons\">close</i></button>
                          ";
                        }
                        // line 1277
                        echo "                          
                          ";
                        // line 1278
                        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                            // line 1279
                            echo "                            <hr style=\"height:10px\">                            
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                            // line 1280
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarProducto", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                            echo "\" method=\"POST\">
                              <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Add to Shopping Cart<i class=\"material-icons\">add_shopping_cart</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                            // line 1283
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarWishlist", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                            echo "\" method=\"POST\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Add To WishList <i class=\"material-icons\">list</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close";
                            // line 1287
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                            echo "\">Close <i class=\"material-icons\">close</i></button>
                            </form>
                          ";
                        }
                        // line 1290
                        echo "                        </div>
                      </section>
                      </div>
                    
                  </div>
                </dialog>
                
              ";
                        // line 1298
                        echo "              <script>
                // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                var dialog";
                        // line 1300
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.show-dialog";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "');
                // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                var showModalButton";
                        // line 1302
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.show-modal";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "'); 
                // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                var showTextButton";
                        // line 1304
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.text";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "');
                // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                var showPriceButton";
                        // line 1306
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.price";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "');
                
                if (!dialog";
                        // line 1308
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal){
                  dialogPolyfill.registerDialog(dialog";
                        // line 1309
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ");
                }
                // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                showModalButton";
                        // line 1312
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".addEventListener('click', function() {
                  dialog";
                        // line 1313
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                showTextButton";
                        // line 1316
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".addEventListener('click', function() {
                  dialog";
                        // line 1317
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                showPriceButton";
                        // line 1320
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".addEventListener('click', function() {
                  dialog";
                        // line 1321
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal();
                });
                // FUNCION PARA CERRAR EL DIALOG
                dialog";
                        // line 1324
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".querySelector('.close";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "').addEventListener('click', function() {
                  dialog";
                        // line 1325
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".close();
                });
              </script> 
            </a>
          </div>
            </div>
      
          ";
                    }
                    // line 1333
                    echo "          
          
          ";
                    // line 1336
                    echo "          ";
                    if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "CO")) {
                        // line 1337
                        echo "            ";
                        // line 1338
                        echo "            ";
                        // line 1339
                        echo "            ";
                        // line 1340
                        echo "            ";
                        // line 1341
                        echo "            ";
                        // line 1342
                        echo "            ";
                        // line 1343
                        echo "            ";
                        // line 1344
                        echo "            ";
                        // line 1345
                        echo "
            <div id=\"";
                        // line 1346
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
              <div  class=\"filterDiv ";
                        // line 1347
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "categoria", array()), "html", null, true);
                        echo "\">
            ";
                        // line 1349
                        echo "            <a href=\"javascript:void(0)\" class=\"show-modal";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">
              ";
                        // line 1351
                        echo "              <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                        echo "\" alt=\"\">
              ";
                        // line 1353
                        echo "              <div class=\"descripcionProducto\">
                <a href=\"javascript:void(0)\" class=\"show-modal";
                        // line 1354
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">
                  <h4 class=\"producto text";
                        // line 1355
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                        echo "</h4>
                  <h6 class=\"producto price";
                        // line 1356
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["product"], "precio", array()) * 2977.99), "html", null, true);
                        echo " COP</h6>
                </a>
              </div>
              <br>
              <br>
              
              ";
                        // line 1363
                        echo "              
              <dialog class=\"mdl-dialog show-dialog";
                        // line 1364
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">
                  <div class=\"mdl-dialog__content\">
                     
                      <div class=\"row\">
                      ";
                        // line 1369
                        echo "                      <section class=\"foto col-lg-6 col-md-6\">
                        <img class=\"img-fluid\" src=\"";
                        // line 1370
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                        echo "\" alt=\"\">  
                      </section>
                      ";
                        // line 1373
                        echo "                      <section class=\"col-lg-6 col-md-6 mb-12\">
                        <h4 class=\"producto text-center center-text\">";
                        // line 1374
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                        echo "</h4>
                        <h6 class=\"producto text-center center-text\">Precio: ";
                        // line 1375
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["product"], "precio", array()) * 2977.99), "html", null, true);
                        echo " COP</h6>
                        <h6 class=\"producto text-center center-text\">Descripcion: ";
                        // line 1376
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "Descripcion", array()), "html", null, true);
                        echo "</h6>
                        ";
                        // line 1378
                        echo "                        <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                          
                          ";
                        // line 1380
                        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                            // line 1381
                            echo "                          <p>Inicie Sesion para empezar a agregar productos a su Carro de Compras!</p>
                          <button type=\"button\" class=\"mdl-button close";
                            // line 1382
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                            echo "\">Cerrar <i class=\"material-icons\">close</i></button>
                          ";
                        }
                        // line 1384
                        echo "                          
                          ";
                        // line 1385
                        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                            // line 1386
                            echo "                            <hr style=\"height:10px\">                            
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                            // line 1387
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarProducto", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                            echo "\" method=\"POST\">
                              <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Agregar al Carro de Compras<i class=\"material-icons\">add_shopping_cart</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                            // line 1390
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarWishlist", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                            echo "\" method=\"POST\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Agregar a la wishlist <i class=\"material-icons\">list</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close";
                            // line 1394
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                            echo "\">Cerrar <i class=\"material-icons\">close</i></button>
                            </form>
                          ";
                        }
                        // line 1397
                        echo "                        </div>
                      </section>
                      </div>
                    
                  </div>
                </dialog>
                
              ";
                        // line 1405
                        echo "              <script>
                // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                var dialog";
                        // line 1407
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.show-dialog";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "');
                // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                var showModalButton";
                        // line 1409
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.show-modal";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "'); 
                // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                var showTextButton";
                        // line 1411
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.text";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "');
                // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                var showPriceButton";
                        // line 1413
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.price";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "');
                
                if (!dialog";
                        // line 1415
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal){
                  dialogPolyfill.registerDialog(dialog";
                        // line 1416
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ");
                }
                // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                showModalButton";
                        // line 1419
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".addEventListener('click', function() {
                  dialog";
                        // line 1420
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                showTextButton";
                        // line 1423
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".addEventListener('click', function() {
                  dialog";
                        // line 1424
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                showPriceButton";
                        // line 1427
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".addEventListener('click', function() {
                  dialog";
                        // line 1428
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal();
                });
                // FUNCION PARA CERRAR EL DIALOG
                dialog";
                        // line 1431
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".querySelector('.close";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "').addEventListener('click', function() {
                  dialog";
                        // line 1432
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".close();
                });
              </script> 
            </a>
          </div>
            </div>
      
          ";
                    }
                    // line 1440
                    echo "      
        ";
                }
                // line 1442
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1443
            echo "
  </div>
  
  <div class=\"row text-center\" style=\"padding-left:100px; padding-top:50px; padding-bottom: 50px\" id=\"macetaprod\">
      ";
            // line 1447
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 1448
                echo "        ";
                if (($this->getAttribute($context["product"], "categoria", array()) == "maceta")) {
                    // line 1449
                    echo "          <style> 
        .mdl-dialog {
          border: none;
          box-shadow: 0 9px 46px 8px rgba(0,0,0,.14), 0 11px 15px -7px rgba(0,0,0,.12), 0 24px 38px 3px rgba(0,0,0,.2);
          width: 60%;
        }
        .mdl-navigation.lateral{
          
          background-color:white;
      }
        .mdl-layout__drawer.lateral{
            background-color:white;
            width: 175px;
            height:55%;
            border-right-style: none;
            border-right-width: 0px;
            border-bottom-style: none;
            border-bottom-width: 0px;
            border-bottom-color: transparent;
            
        }
        .mdl-button.mdl-js-button.mdl-js-ripple-effect:hover{
          
          background-color: #67daff;
           
          
      }
      
      </style>
          ";
                    // line 1479
                    echo "          
          ";
                    // line 1481
                    echo "          ";
                    if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "VE")) {
                        // line 1482
                        echo "            ";
                        // line 1483
                        echo "            ";
                        // line 1484
                        echo "            ";
                        // line 1485
                        echo "            ";
                        // line 1486
                        echo "            ";
                        // line 1487
                        echo "            ";
                        // line 1488
                        echo "            ";
                        // line 1489
                        echo "            ";
                        // line 1490
                        echo "
            <div id=\"";
                        // line 1491
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
              <div  class=\"filterDiv ";
                        // line 1492
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "categoria", array()), "html", null, true);
                        echo "\">
              ";
                        // line 1494
                        echo "                <a href=\"javascript:void(0)\" class=\"show-modal";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">
              ";
                        // line 1496
                        echo "              <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                        echo "\" alt=\"\">
              ";
                        // line 1498
                        echo "              <div class=\"descripcionProducto\">
                <a href=\"javascript:void(0)\" class=\"show-modal";
                        // line 1499
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">
                  <h4 class=\"producto text";
                        // line 1500
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                        echo "</h4>
                  <h6 class=\"producto price";
                        // line 1501
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["product"], "precio", array()) * 35000), "html", null, true);
                        echo " BsF.</h6>
                </a>
              </div>
              <br>
              <br>
              
              ";
                        // line 1508
                        echo "              
              <dialog class=\"mdl-dialog show-dialog";
                        // line 1509
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">
                  <div class=\"mdl-dialog__content\">
                     
                      <div class=\"row\">
                      ";
                        // line 1514
                        echo "                      <section class=\"foto col-lg-6 col-md-6\">
                        <img class=\"img-fluid\" src=\"";
                        // line 1515
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                        echo "\" alt=\"\">  
                      </section>
                      ";
                        // line 1518
                        echo "                      <section class=\"col-lg-6 col-md-6 mb-12\">
                        <h4 class=\"producto text-center center-text\">";
                        // line 1519
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                        echo "</h4>
                        <h6 class=\"producto text-center center-text\">Precio: ";
                        // line 1520
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["product"], "precio", array()) * 35000), "html", null, true);
                        echo " BsF</h6>
                        <h6 class=\"producto text-center center-text\">Descripcion: ";
                        // line 1521
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "Descripcion", array()), "html", null, true);
                        echo "</h6>
                        ";
                        // line 1523
                        echo "                        <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                          
                          ";
                        // line 1525
                        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                            // line 1526
                            echo "                          <p>Inicie Sesion para empezar a agregar productos a su Carro de Compras!</p>
                          <button type=\"button\" class=\"mdl-button close";
                            // line 1527
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                            echo "\">Cerrar <i class=\"material-icons\">close</i></button>
                          ";
                        }
                        // line 1529
                        echo "                          
                          ";
                        // line 1530
                        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                            // line 1531
                            echo "                            <hr style=\"height:10px\">                            
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                            // line 1532
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarProducto", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                            echo "\" method=\"POST\">
                              <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Agregar al Carro de Compras<i class=\"material-icons\">add_shopping_cart</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                            // line 1535
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarWishlist", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                            echo "\" method=\"POST\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Agregar a la wishlist <i class=\"material-icons\">list</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close";
                            // line 1539
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                            echo "\">Cerrar <i class=\"material-icons\">close</i></button>
                            </form>
                          ";
                        }
                        // line 1542
                        echo "                        </div>
                      </section>
                      </div>
                    
                  </div>
                </dialog>
                
              ";
                        // line 1550
                        echo "              <script>
                // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                var dialog";
                        // line 1552
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.show-dialog";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "');
                // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                var showModalButton";
                        // line 1554
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.show-modal";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "'); 
                // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                var showTextButton";
                        // line 1556
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.text";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "');
                // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                var showPriceButton";
                        // line 1558
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.price";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "');
                
                if (!dialog";
                        // line 1560
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal){
                  dialogPolyfill.registerDialog(dialog";
                        // line 1561
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ");
                }
                // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                showModalButton";
                        // line 1564
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".addEventListener('click', function() {
                  dialog";
                        // line 1565
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                showTextButton";
                        // line 1568
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".addEventListener('click', function() {
                  dialog";
                        // line 1569
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                showPriceButton";
                        // line 1572
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".addEventListener('click', function() {
                  dialog";
                        // line 1573
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal();
                });
                // FUNCION PARA CERRAR EL DIALOG
                dialog";
                        // line 1576
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".querySelector('.close";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "').addEventListener('click', function() {
                  dialog";
                        // line 1577
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".close();
                });
              </script> 
            </a>
              </div>
            </div>
      
          ";
                    }
                    // line 1585
                    echo "          
          ";
                    // line 1587
                    echo "          ";
                    if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "US")) {
                        // line 1588
                        echo "            ";
                        // line 1589
                        echo "            ";
                        // line 1590
                        echo "            ";
                        // line 1591
                        echo "            ";
                        // line 1592
                        echo "            ";
                        // line 1593
                        echo "            ";
                        // line 1594
                        echo "            ";
                        // line 1595
                        echo "            ";
                        // line 1596
                        echo "
            <div id=\"";
                        // line 1597
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
            <div  class=\"filterDiv ";
                        // line 1598
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "categoria", array()), "html", null, true);
                        echo "\">
            ";
                        // line 1600
                        echo "            <a href=\"javascript:void(0)\" class=\"show-modal";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">
              ";
                        // line 1602
                        echo "              <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                        echo "\" alt=\"\">
              ";
                        // line 1604
                        echo "              <div class=\"descripcionProducto\">
                <a href=\"javascript:void(0)\" class=\"show-modal";
                        // line 1605
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">
                  <h4 class=\"producto text";
                        // line 1606
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                        echo "</h4>
                  <h6 class=\"producto price";
                        // line 1607
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "precio", array()), "html", null, true);
                        echo " \$.</h6>
                </a>
              </div>
              <br>
              <br>
              
              ";
                        // line 1614
                        echo "              
              <dialog class=\"mdl-dialog show-dialog";
                        // line 1615
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">
                  <div class=\"mdl-dialog__content\">
                     
                      <div class=\"row\">
                      ";
                        // line 1620
                        echo "                      <section class=\"foto col-lg-6 col-md-6\">
                        <img class=\"img-fluid\" src=\"";
                        // line 1621
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                        echo "\" alt=\"\">  
                      </section>
                      ";
                        // line 1624
                        echo "                      <section class=\"col-lg-6 col-md-6 mb-12\">
                        <h4 class=\"producto text-center center-text\">";
                        // line 1625
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                        echo "</h4>
                        <h6 class=\"producto text-center center-text\">Price: ";
                        // line 1626
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "precio", array()), "html", null, true);
                        echo " \$</h6>
                        <h6 class=\"producto text-center center-text\">Description: ";
                        // line 1627
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "Descripcion", array()), "html", null, true);
                        echo "</h6>
                        ";
                        // line 1629
                        echo "                        <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                          
                          ";
                        // line 1631
                        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                            // line 1632
                            echo "                          <p>You have to sign in to add products to your shopping cart!</p>
                          <button type=\"button\" class=\"mdl-button close";
                            // line 1633
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                            echo "\">Cerrar <i class=\"material-icons\">close</i></button>
                          ";
                        }
                        // line 1635
                        echo "                          
                          ";
                        // line 1636
                        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                            // line 1637
                            echo "                            <hr style=\"height:10px\">                            
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                            // line 1638
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarProducto", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                            echo "\" method=\"POST\">
                              <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Add to Shopping Cart<i class=\"material-icons\">add_shopping_cart</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                            // line 1641
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarWishlist", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                            echo "\" method=\"POST\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Add To WishList <i class=\"material-icons\">list</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close";
                            // line 1645
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                            echo "\">Close <i class=\"material-icons\">close</i></button>
                            </form>
                          ";
                        }
                        // line 1648
                        echo "                        </div>
                      </section>
                      </div>
                    
                  </div>
                </dialog>
                
              ";
                        // line 1656
                        echo "              <script>
                // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                var dialog";
                        // line 1658
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.show-dialog";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "');
                // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                var showModalButton";
                        // line 1660
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.show-modal";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "'); 
                // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                var showTextButton";
                        // line 1662
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.text";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "');
                // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                var showPriceButton";
                        // line 1664
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.price";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "');
                
                if (!dialog";
                        // line 1666
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal){
                  dialogPolyfill.registerDialog(dialog";
                        // line 1667
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ");
                }
                // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                showModalButton";
                        // line 1670
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".addEventListener('click', function() {
                  dialog";
                        // line 1671
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                showTextButton";
                        // line 1674
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".addEventListener('click', function() {
                  dialog";
                        // line 1675
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                showPriceButton";
                        // line 1678
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".addEventListener('click', function() {
                  dialog";
                        // line 1679
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal();
                });
                // FUNCION PARA CERRAR EL DIALOG
                dialog";
                        // line 1682
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".querySelector('.close";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "').addEventListener('click', function() {
                  dialog";
                        // line 1683
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".close();
                });
              </script> 
            </a>
          </div>
      </div>
      
          ";
                    }
                    // line 1691
                    echo "          
          
          ";
                    // line 1694
                    echo "          ";
                    if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "EN")) {
                        // line 1695
                        echo "            ";
                        // line 1696
                        echo "            ";
                        // line 1697
                        echo "            ";
                        // line 1698
                        echo "            ";
                        // line 1699
                        echo "            ";
                        // line 1700
                        echo "            ";
                        // line 1701
                        echo "            ";
                        // line 1702
                        echo "            ";
                        // line 1703
                        echo "
            <div id=\"";
                        // line 1704
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
              <div  class=\"filterDiv ";
                        // line 1705
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "categoria", array()), "html", null, true);
                        echo "\">
            ";
                        // line 1707
                        echo "            <a href=\"javascript:void(0)\" class=\"show-modal";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">
              ";
                        // line 1709
                        echo "              <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                        echo "\" alt=\"\">
              ";
                        // line 1711
                        echo "              <div class=\"descripcionProducto\">
                <a href=\"javascript:void(0)\" class=\"show-modal";
                        // line 1712
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">
                  <h4 class=\"producto text";
                        // line 1713
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                        echo "</h4>
                  <h6 class=\"producto price";
                        // line 1714
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["product"], "precio", array()) * 0.76), "html", null, true);
                        echo " £.</h6>
                </a>
              </div>
              <br>
              <br>
              
              ";
                        // line 1721
                        echo "              
              <dialog class=\"mdl-dialog show-dialog";
                        // line 1722
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">
                  <div class=\"mdl-dialog__content\">
                     
                      <div class=\"row\">
                      ";
                        // line 1727
                        echo "                      <section class=\"foto col-lg-6 col-md-6\">
                        <img class=\"img-fluid\" src=\"";
                        // line 1728
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                        echo "\" alt=\"\">  
                      </section>
                      ";
                        // line 1731
                        echo "                      <section class=\"col-lg-6 col-md-6 mb-12\">
                        <h4 class=\"producto text-center center-text\">";
                        // line 1732
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                        echo "</h4>
                        <h6 class=\"producto text-center center-text\">Price: ";
                        // line 1733
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["product"], "precio", array()) * 0.76), "html", null, true);
                        echo " £</h6>
                        <h6 class=\"producto text-center center-text\">Description: ";
                        // line 1734
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "Descripcion", array()), "html", null, true);
                        echo "</h6>
                        ";
                        // line 1736
                        echo "                        <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                          
                          ";
                        // line 1738
                        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                            // line 1739
                            echo "                          <p>You have to sign in to add products to your shopping cart!</p>
                          <button type=\"button\" class=\"mdl-button close";
                            // line 1740
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                            echo "\">Cerrar <i class=\"material-icons\">close</i></button>
                          ";
                        }
                        // line 1742
                        echo "                          
                          ";
                        // line 1743
                        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                            // line 1744
                            echo "                            <hr style=\"height:10px\">                            
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                            // line 1745
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarProducto", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                            echo "\" method=\"POST\">
                              <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Add to Shopping Cart<i class=\"material-icons\">add_shopping_cart</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                            // line 1748
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarWishlist", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                            echo "\" method=\"POST\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Add To WishList <i class=\"material-icons\">list</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close";
                            // line 1752
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                            echo "\">Close <i class=\"material-icons\">close</i></button>
                            </form>
                          ";
                        }
                        // line 1755
                        echo "                        </div>
                      </section>
                      </div>
                    
                  </div>
                </dialog>
                
              ";
                        // line 1763
                        echo "              <script>
                // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                var dialog";
                        // line 1765
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.show-dialog";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "');
                // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                var showModalButton";
                        // line 1767
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.show-modal";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "'); 
                // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                var showTextButton";
                        // line 1769
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.text";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "');
                // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                var showPriceButton";
                        // line 1771
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.price";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "');
                
                if (!dialog";
                        // line 1773
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal){
                  dialogPolyfill.registerDialog(dialog";
                        // line 1774
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ");
                }
                // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                showModalButton";
                        // line 1777
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".addEventListener('click', function() {
                  dialog";
                        // line 1778
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                showTextButton";
                        // line 1781
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".addEventListener('click', function() {
                  dialog";
                        // line 1782
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                showPriceButton";
                        // line 1785
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".addEventListener('click', function() {
                  dialog";
                        // line 1786
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal();
                });
                // FUNCION PARA CERRAR EL DIALOG
                dialog";
                        // line 1789
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".querySelector('.close";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "').addEventListener('click', function() {
                  dialog";
                        // line 1790
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".close();
                });
              </script> 
            </a>
          </div>
            </div>
      
          ";
                    }
                    // line 1798
                    echo "          
          
          ";
                    // line 1801
                    echo "          ";
                    if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "CO")) {
                        // line 1802
                        echo "            ";
                        // line 1803
                        echo "            ";
                        // line 1804
                        echo "            ";
                        // line 1805
                        echo "            ";
                        // line 1806
                        echo "            ";
                        // line 1807
                        echo "            ";
                        // line 1808
                        echo "            ";
                        // line 1809
                        echo "            ";
                        // line 1810
                        echo "
            <div id=\"";
                        // line 1811
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
              <div  class=\"filterDiv ";
                        // line 1812
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "categoria", array()), "html", null, true);
                        echo "\">
            ";
                        // line 1814
                        echo "            <a href=\"javascript:void(0)\" class=\"show-modal";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">
              ";
                        // line 1816
                        echo "              <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                        echo "\" alt=\"\">
              ";
                        // line 1818
                        echo "              <div class=\"descripcionProducto\">
                <a href=\"javascript:void(0)\" class=\"show-modal";
                        // line 1819
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">
                  <h4 class=\"producto text";
                        // line 1820
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                        echo "</h4>
                  <h6 class=\"producto price";
                        // line 1821
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["product"], "precio", array()) * 2977.99), "html", null, true);
                        echo " COP</h6>
                </a>
              </div>
              <br>
              <br>
              
              ";
                        // line 1828
                        echo "              
              <dialog class=\"mdl-dialog show-dialog";
                        // line 1829
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">
                  <div class=\"mdl-dialog__content\">
                     
                      <div class=\"row\">
                      ";
                        // line 1834
                        echo "                      <section class=\"foto col-lg-6 col-md-6\">
                        <img class=\"img-fluid\" src=\"";
                        // line 1835
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                        echo "\" alt=\"\">  
                      </section>
                      ";
                        // line 1838
                        echo "                      <section class=\"col-lg-6 col-md-6 mb-12\">
                        <h4 class=\"producto text-center center-text\">";
                        // line 1839
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                        echo "</h4>
                        <h6 class=\"producto text-center center-text\">Precio: ";
                        // line 1840
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["product"], "precio", array()) * 2977.99), "html", null, true);
                        echo " COP</h6>
                        <h6 class=\"producto text-center center-text\">Descripcion: ";
                        // line 1841
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "Descripcion", array()), "html", null, true);
                        echo "</h6>
                        ";
                        // line 1843
                        echo "                        <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                          
                          ";
                        // line 1845
                        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                            // line 1846
                            echo "                          <p>Inicie Sesion para empezar a agregar productos a su Carro de Compras!</p>
                          <button type=\"button\" class=\"mdl-button close";
                            // line 1847
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                            echo "\">Cerrar <i class=\"material-icons\">close</i></button>
                          ";
                        }
                        // line 1849
                        echo "                          
                          ";
                        // line 1850
                        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                            // line 1851
                            echo "                            <hr style=\"height:10px\">                            
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                            // line 1852
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarProducto", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                            echo "\" method=\"POST\">
                              <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Agregar al Carro de Compras<i class=\"material-icons\">add_shopping_cart</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                            // line 1855
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarWishlist", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                            echo "\" method=\"POST\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Agregar a la wishlist <i class=\"material-icons\">list</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close";
                            // line 1859
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                            echo "\">Cerrar <i class=\"material-icons\">close</i></button>
                            </form>
                          ";
                        }
                        // line 1862
                        echo "                        </div>
                      </section>
                      </div>
                    
                  </div>
                </dialog>
                
              ";
                        // line 1870
                        echo "              <script>
                // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                var dialog";
                        // line 1872
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.show-dialog";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "');
                // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                var showModalButton";
                        // line 1874
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.show-modal";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "'); 
                // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                var showTextButton";
                        // line 1876
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.text";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "');
                // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                var showPriceButton";
                        // line 1878
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.price";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "');
                
                if (!dialog";
                        // line 1880
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal){
                  dialogPolyfill.registerDialog(dialog";
                        // line 1881
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ");
                }
                // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                showModalButton";
                        // line 1884
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".addEventListener('click', function() {
                  dialog";
                        // line 1885
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                showTextButton";
                        // line 1888
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".addEventListener('click', function() {
                  dialog";
                        // line 1889
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                showPriceButton";
                        // line 1892
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".addEventListener('click', function() {
                  dialog";
                        // line 1893
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal();
                });
                // FUNCION PARA CERRAR EL DIALOG
                dialog";
                        // line 1896
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".querySelector('.close";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "').addEventListener('click', function() {
                  dialog";
                        // line 1897
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".close();
                });
              </script> 
            </a>
          </div>
            </div>
      
          ";
                    }
                    // line 1905
                    echo "      
        ";
                }
                // line 1907
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1908
            echo "      
  </div>
  
  <div class=\"row text-center\" style=\"padding-left:100px; padding-top:50px; padding-bottom: 50px\" id=\"accesorioprod\">
      ";
            // line 1912
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 1913
                echo "        ";
                if (($this->getAttribute($context["product"], "categoria", array()) == "accesorio")) {
                    // line 1914
                    echo "          <style> 
        .mdl-dialog {
          border: none;
          box-shadow: 0 9px 46px 8px rgba(0,0,0,.14), 0 11px 15px -7px rgba(0,0,0,.12), 0 24px 38px 3px rgba(0,0,0,.2);
          width: 60%;
        }
        .mdl-navigation.lateral{
          
          background-color:white;
      }
        .mdl-layout__drawer.lateral{
            background-color:white;
            width: 175px;
            height:55%;
            border-right-style: none;
            border-right-width: 0px;
            border-bottom-style: none;
            border-bottom-width: 0px;
            border-bottom-color: transparent;
            
        }
        .mdl-button.mdl-js-button.mdl-js-ripple-effect:hover{
          
          background-color: #67daff;
           
          
      }
      
      </style>
          ";
                    // line 1944
                    echo "          
          ";
                    // line 1946
                    echo "          ";
                    if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "VE")) {
                        // line 1947
                        echo "            ";
                        // line 1948
                        echo "            ";
                        // line 1949
                        echo "            ";
                        // line 1950
                        echo "            ";
                        // line 1951
                        echo "            ";
                        // line 1952
                        echo "            ";
                        // line 1953
                        echo "            ";
                        // line 1954
                        echo "            ";
                        // line 1955
                        echo "
            <div id=\"";
                        // line 1956
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
              <div  class=\"filterDiv ";
                        // line 1957
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "categoria", array()), "html", null, true);
                        echo "\">
              ";
                        // line 1959
                        echo "                <a href=\"javascript:void(0)\" class=\"show-modal";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">
              ";
                        // line 1961
                        echo "              <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                        echo "\" alt=\"\">
              ";
                        // line 1963
                        echo "              <div class=\"descripcionProducto\">
                <a href=\"javascript:void(0)\" class=\"show-modal";
                        // line 1964
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">
                  <h4 class=\"producto text";
                        // line 1965
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                        echo "</h4>
                  <h6 class=\"producto price";
                        // line 1966
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["product"], "precio", array()) * 35000), "html", null, true);
                        echo " BsF.</h6>
                </a>
              </div>
              <br>
              <br>
              
              ";
                        // line 1973
                        echo "              
              <dialog class=\"mdl-dialog show-dialog";
                        // line 1974
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">
                  <div class=\"mdl-dialog__content\">
                     
                      <div class=\"row\">
                      ";
                        // line 1979
                        echo "                      <section class=\"foto col-lg-6 col-md-6\">
                        <img class=\"img-fluid\" src=\"";
                        // line 1980
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                        echo "\" alt=\"\">  
                      </section>
                      ";
                        // line 1983
                        echo "                      <section class=\"col-lg-6 col-md-6 mb-12\">
                        <h4 class=\"producto text-center center-text\">";
                        // line 1984
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                        echo "</h4>
                        <h6 class=\"producto text-center center-text\">Precio: ";
                        // line 1985
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["product"], "precio", array()) * 35000), "html", null, true);
                        echo " BsF</h6>
                        <h6 class=\"producto text-center center-text\">Descripcion: ";
                        // line 1986
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "Descripcion", array()), "html", null, true);
                        echo "</h6>
                        ";
                        // line 1988
                        echo "                        <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                          
                          ";
                        // line 1990
                        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                            // line 1991
                            echo "                          <p>Inicie Sesion para empezar a agregar productos a su Carro de Compras!</p>
                          <button type=\"button\" class=\"mdl-button close";
                            // line 1992
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                            echo "\">Cerrar <i class=\"material-icons\">close</i></button>
                          ";
                        }
                        // line 1994
                        echo "                          
                          ";
                        // line 1995
                        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                            // line 1996
                            echo "                            <hr style=\"height:10px\">                            
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                            // line 1997
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarProducto", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                            echo "\" method=\"POST\">
                              <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Agregar al Carro de Compras<i class=\"material-icons\">add_shopping_cart</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                            // line 2000
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarWishlist", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                            echo "\" method=\"POST\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Agregar a la wishlist <i class=\"material-icons\">list</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close";
                            // line 2004
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                            echo "\">Cerrar <i class=\"material-icons\">close</i></button>
                            </form>
                          ";
                        }
                        // line 2007
                        echo "                        </div>
                      </section>
                      </div>
                    
                  </div>
                </dialog>
                
              ";
                        // line 2015
                        echo "              <script>
                // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                var dialog";
                        // line 2017
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.show-dialog";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "');
                // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                var showModalButton";
                        // line 2019
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.show-modal";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "'); 
                // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                var showTextButton";
                        // line 2021
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.text";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "');
                // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                var showPriceButton";
                        // line 2023
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.price";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "');
                
                if (!dialog";
                        // line 2025
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal){
                  dialogPolyfill.registerDialog(dialog";
                        // line 2026
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ");
                }
                // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                showModalButton";
                        // line 2029
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".addEventListener('click', function() {
                  dialog";
                        // line 2030
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                showTextButton";
                        // line 2033
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".addEventListener('click', function() {
                  dialog";
                        // line 2034
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                showPriceButton";
                        // line 2037
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".addEventListener('click', function() {
                  dialog";
                        // line 2038
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal();
                });
                // FUNCION PARA CERRAR EL DIALOG
                dialog";
                        // line 2041
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".querySelector('.close";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "').addEventListener('click', function() {
                  dialog";
                        // line 2042
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".close();
                });
              </script> 
            </a>
              </div>
            </div>
      
          ";
                    }
                    // line 2050
                    echo "          
          ";
                    // line 2052
                    echo "          ";
                    if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "US")) {
                        // line 2053
                        echo "            ";
                        // line 2054
                        echo "            ";
                        // line 2055
                        echo "            ";
                        // line 2056
                        echo "            ";
                        // line 2057
                        echo "            ";
                        // line 2058
                        echo "            ";
                        // line 2059
                        echo "            ";
                        // line 2060
                        echo "            ";
                        // line 2061
                        echo "
            <div id=\"";
                        // line 2062
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
            <div  class=\"filterDiv ";
                        // line 2063
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "categoria", array()), "html", null, true);
                        echo "\">
            ";
                        // line 2065
                        echo "            <a href=\"javascript:void(0)\" class=\"show-modal";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">
              ";
                        // line 2067
                        echo "              <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                        echo "\" alt=\"\">
              ";
                        // line 2069
                        echo "              <div class=\"descripcionProducto\">
                <a href=\"javascript:void(0)\" class=\"show-modal";
                        // line 2070
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">
                  <h4 class=\"producto text";
                        // line 2071
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                        echo "</h4>
                  <h6 class=\"producto price";
                        // line 2072
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "precio", array()), "html", null, true);
                        echo " \$.</h6>
                </a>
              </div>
              <br>
              <br>
              
              ";
                        // line 2079
                        echo "              
              <dialog class=\"mdl-dialog show-dialog";
                        // line 2080
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">
                  <div class=\"mdl-dialog__content\">
                     
                      <div class=\"row\">
                      ";
                        // line 2085
                        echo "                      <section class=\"foto col-lg-6 col-md-6\">
                        <img class=\"img-fluid\" src=\"";
                        // line 2086
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                        echo "\" alt=\"\">  
                      </section>
                      ";
                        // line 2089
                        echo "                      <section class=\"col-lg-6 col-md-6 mb-12\">
                        <h4 class=\"producto text-center center-text\">";
                        // line 2090
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                        echo "</h4>
                        <h6 class=\"producto text-center center-text\">Price: ";
                        // line 2091
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "precio", array()), "html", null, true);
                        echo " \$</h6>
                        <h6 class=\"producto text-center center-text\">Description: ";
                        // line 2092
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "Descripcion", array()), "html", null, true);
                        echo "</h6>
                        ";
                        // line 2094
                        echo "                        <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                          
                          ";
                        // line 2096
                        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                            // line 2097
                            echo "                          <p>You have to sign in to add products to your shopping cart!</p>
                          <button type=\"button\" class=\"mdl-button close";
                            // line 2098
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                            echo "\">Cerrar <i class=\"material-icons\">close</i></button>
                          ";
                        }
                        // line 2100
                        echo "                          
                          ";
                        // line 2101
                        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                            // line 2102
                            echo "                            <hr style=\"height:10px\">                            
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                            // line 2103
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarProducto", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                            echo "\" method=\"POST\">
                              <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Add to Shopping Cart<i class=\"material-icons\">add_shopping_cart</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                            // line 2106
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarWishlist", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                            echo "\" method=\"POST\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Add To WishList <i class=\"material-icons\">list</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close";
                            // line 2110
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                            echo "\">Close <i class=\"material-icons\">close</i></button>
                            </form>
                          ";
                        }
                        // line 2113
                        echo "                        </div>
                      </section>
                      </div>
                    
                  </div>
                </dialog>
                
              ";
                        // line 2121
                        echo "              <script>
                // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                var dialog";
                        // line 2123
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.show-dialog";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "');
                // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                var showModalButton";
                        // line 2125
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.show-modal";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "'); 
                // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                var showTextButton";
                        // line 2127
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.text";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "');
                // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                var showPriceButton";
                        // line 2129
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.price";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "');
                
                if (!dialog";
                        // line 2131
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal){
                  dialogPolyfill.registerDialog(dialog";
                        // line 2132
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ");
                }
                // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                showModalButton";
                        // line 2135
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".addEventListener('click', function() {
                  dialog";
                        // line 2136
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                showTextButton";
                        // line 2139
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".addEventListener('click', function() {
                  dialog";
                        // line 2140
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                showPriceButton";
                        // line 2143
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".addEventListener('click', function() {
                  dialog";
                        // line 2144
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal();
                });
                // FUNCION PARA CERRAR EL DIALOG
                dialog";
                        // line 2147
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".querySelector('.close";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "').addEventListener('click', function() {
                  dialog";
                        // line 2148
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".close();
                });
              </script> 
            </a>
          </div>
      </div>
      
          ";
                    }
                    // line 2156
                    echo "          
          
          ";
                    // line 2159
                    echo "          ";
                    if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "EN")) {
                        // line 2160
                        echo "            ";
                        // line 2161
                        echo "            ";
                        // line 2162
                        echo "            ";
                        // line 2163
                        echo "            ";
                        // line 2164
                        echo "            ";
                        // line 2165
                        echo "            ";
                        // line 2166
                        echo "            ";
                        // line 2167
                        echo "            ";
                        // line 2168
                        echo "
            <div id=\"";
                        // line 2169
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
              <div  class=\"filterDiv ";
                        // line 2170
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "categoria", array()), "html", null, true);
                        echo "\">
            ";
                        // line 2172
                        echo "            <a href=\"javascript:void(0)\" class=\"show-modal";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">
              ";
                        // line 2174
                        echo "              <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                        echo "\" alt=\"\">
              ";
                        // line 2176
                        echo "              <div class=\"descripcionProducto\">
                <a href=\"javascript:void(0)\" class=\"show-modal";
                        // line 2177
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">
                  <h4 class=\"producto text";
                        // line 2178
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                        echo "</h4>
                  <h6 class=\"producto price";
                        // line 2179
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["product"], "precio", array()) * 0.76), "html", null, true);
                        echo " £.</h6>
                </a>
              </div>
              <br>
              <br>
              
              ";
                        // line 2186
                        echo "              
              <dialog class=\"mdl-dialog show-dialog";
                        // line 2187
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">
                  <div class=\"mdl-dialog__content\">
                     
                      <div class=\"row\">
                      ";
                        // line 2192
                        echo "                      <section class=\"foto col-lg-6 col-md-6\">
                        <img class=\"img-fluid\" src=\"";
                        // line 2193
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                        echo "\" alt=\"\">  
                      </section>
                      ";
                        // line 2196
                        echo "                      <section class=\"col-lg-6 col-md-6 mb-12\">
                        <h4 class=\"producto text-center center-text\">";
                        // line 2197
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                        echo "</h4>
                        <h6 class=\"producto text-center center-text\">Price: ";
                        // line 2198
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["product"], "precio", array()) * 0.76), "html", null, true);
                        echo " £</h6>
                        <h6 class=\"producto text-center center-text\">Description: ";
                        // line 2199
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "Descripcion", array()), "html", null, true);
                        echo "</h6>
                        ";
                        // line 2201
                        echo "                        <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                          
                          ";
                        // line 2203
                        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                            // line 2204
                            echo "                          <p>You have to sign in to add products to your shopping cart!</p>
                          <button type=\"button\" class=\"mdl-button close";
                            // line 2205
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                            echo "\">Cerrar <i class=\"material-icons\">close</i></button>
                          ";
                        }
                        // line 2207
                        echo "                          
                          ";
                        // line 2208
                        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                            // line 2209
                            echo "                            <hr style=\"height:10px\">                            
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                            // line 2210
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarProducto", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                            echo "\" method=\"POST\">
                              <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Add to Shopping Cart<i class=\"material-icons\">add_shopping_cart</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                            // line 2213
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarWishlist", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                            echo "\" method=\"POST\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Add To WishList <i class=\"material-icons\">list</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close";
                            // line 2217
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                            echo "\">Close <i class=\"material-icons\">close</i></button>
                            </form>
                          ";
                        }
                        // line 2220
                        echo "                        </div>
                      </section>
                      </div>
                    
                  </div>
                </dialog>
                
              ";
                        // line 2228
                        echo "              <script>
                // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                var dialog";
                        // line 2230
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.show-dialog";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "');
                // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                var showModalButton";
                        // line 2232
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.show-modal";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "'); 
                // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                var showTextButton";
                        // line 2234
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.text";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "');
                // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                var showPriceButton";
                        // line 2236
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.price";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "');
                
                if (!dialog";
                        // line 2238
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal){
                  dialogPolyfill.registerDialog(dialog";
                        // line 2239
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ");
                }
                // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                showModalButton";
                        // line 2242
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".addEventListener('click', function() {
                  dialog";
                        // line 2243
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                showTextButton";
                        // line 2246
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".addEventListener('click', function() {
                  dialog";
                        // line 2247
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                showPriceButton";
                        // line 2250
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".addEventListener('click', function() {
                  dialog";
                        // line 2251
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal();
                });
                // FUNCION PARA CERRAR EL DIALOG
                dialog";
                        // line 2254
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".querySelector('.close";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "').addEventListener('click', function() {
                  dialog";
                        // line 2255
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".close();
                });
              </script> 
            </a>
          </div>
            </div>
      
          ";
                    }
                    // line 2263
                    echo "          
          
          ";
                    // line 2266
                    echo "          ";
                    if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "CO")) {
                        // line 2267
                        echo "            ";
                        // line 2268
                        echo "            ";
                        // line 2269
                        echo "            ";
                        // line 2270
                        echo "            ";
                        // line 2271
                        echo "            ";
                        // line 2272
                        echo "            ";
                        // line 2273
                        echo "            ";
                        // line 2274
                        echo "            ";
                        // line 2275
                        echo "
            <div id=\"";
                        // line 2276
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
              <div  class=\"filterDiv ";
                        // line 2277
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "categoria", array()), "html", null, true);
                        echo "\">
            ";
                        // line 2279
                        echo "            <a href=\"javascript:void(0)\" class=\"show-modal";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">
              ";
                        // line 2281
                        echo "              <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                        echo "\" alt=\"\">
              ";
                        // line 2283
                        echo "              <div class=\"descripcionProducto\">
                <a href=\"javascript:void(0)\" class=\"show-modal";
                        // line 2284
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">
                  <h4 class=\"producto text";
                        // line 2285
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                        echo "</h4>
                  <h6 class=\"producto price";
                        // line 2286
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["product"], "precio", array()) * 2977.99), "html", null, true);
                        echo " COP</h6>
                </a>
              </div>
              <br>
              <br>
              
              ";
                        // line 2293
                        echo "              
              <dialog class=\"mdl-dialog show-dialog";
                        // line 2294
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">
                  <div class=\"mdl-dialog__content\">
                     
                      <div class=\"row\">
                      ";
                        // line 2299
                        echo "                      <section class=\"foto col-lg-6 col-md-6\">
                        <img class=\"img-fluid\" src=\"";
                        // line 2300
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                        echo "\" alt=\"\">  
                      </section>
                      ";
                        // line 2303
                        echo "                      <section class=\"col-lg-6 col-md-6 mb-12\">
                        <h4 class=\"producto text-center center-text\">";
                        // line 2304
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                        echo "</h4>
                        <h6 class=\"producto text-center center-text\">Precio: ";
                        // line 2305
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["product"], "precio", array()) * 2977.99), "html", null, true);
                        echo " COP</h6>
                        <h6 class=\"producto text-center center-text\">Descripcion: ";
                        // line 2306
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "Descripcion", array()), "html", null, true);
                        echo "</h6>
                        ";
                        // line 2308
                        echo "                        <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                          
                          ";
                        // line 2310
                        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                            // line 2311
                            echo "                          <p>Inicie Sesion para empezar a agregar productos a su Carro de Compras!</p>
                          <button type=\"button\" class=\"mdl-button close";
                            // line 2312
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                            echo "\">Cerrar <i class=\"material-icons\">close</i></button>
                          ";
                        }
                        // line 2314
                        echo "                          
                          ";
                        // line 2315
                        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                            // line 2316
                            echo "                            <hr style=\"height:10px\">                            
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                            // line 2317
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarProducto", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                            echo "\" method=\"POST\">
                              <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Agregar al Carro de Compras<i class=\"material-icons\">add_shopping_cart</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                            // line 2320
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarWishlist", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                            echo "\" method=\"POST\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Agregar a la wishlist <i class=\"material-icons\">list</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close";
                            // line 2324
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                            echo "\">Cerrar <i class=\"material-icons\">close</i></button>
                            </form>
                          ";
                        }
                        // line 2327
                        echo "                        </div>
                      </section>
                      </div>
                    
                  </div>
                </dialog>
                
              ";
                        // line 2335
                        echo "              <script>
                // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                var dialog";
                        // line 2337
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.show-dialog";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "');
                // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                var showModalButton";
                        // line 2339
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.show-modal";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "'); 
                // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                var showTextButton";
                        // line 2341
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.text";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "');
                // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                var showPriceButton";
                        // line 2343
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo " = document.querySelector('.price";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "');
                
                if (!dialog";
                        // line 2345
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal){
                  dialogPolyfill.registerDialog(dialog";
                        // line 2346
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ");
                }
                // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                showModalButton";
                        // line 2349
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".addEventListener('click', function() {
                  dialog";
                        // line 2350
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                showTextButton";
                        // line 2353
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".addEventListener('click', function() {
                  dialog";
                        // line 2354
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                showPriceButton";
                        // line 2357
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".addEventListener('click', function() {
                  dialog";
                        // line 2358
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".showModal();
                });
                // FUNCION PARA CERRAR EL DIALOG
                dialog";
                        // line 2361
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".querySelector('.close";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "').addEventListener('click', function() {
                  dialog";
                        // line 2362
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ".close();
                });
              </script> 
            </a>
          </div>
            </div>
      
          ";
                    }
                    // line 2370
                    echo "      
        ";
                }
                // line 2372
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2373
            echo "      
  </div>
  
  ";
        } else {
            // line 2377
            echo "  
          <dialog class=\"mdl-dialog dialogLogin\">
            <h5 class=\"mdl-dialog__title\" style=\"font-size:25px; align:center\">Inicio de Sesión</h5>
            <div class=\"mdl-dialog__content\">
              <form id=\"form-login\" action=\"";
            // line 2381
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
            </div>
            <div class=\"mdl-dialog__actions\">
              <button form=\"form-login\" type=\"submit\" class=\"mdl-button\">Login</button>
              <button type=\"button\" class=\"mdl-button close\">Cancelar</button>
            </div>
          </dialog>
          <script>
            var dialog = document.querySelector('.dialogLogin');
            var showDialogButton = document.querySelector('.show-dialogLogin');
            if (! dialog.showModal) {
              dialogPolyfill.registerDialog(dialog);
            }
            showDialogButton.addEventListener('click', function() {
              dialog.showModal();
            });
            dialog.querySelector('.close').addEventListener('click', function() {
              dialog.close();
            });
            
          </script>
          
          
        
          ";
            // line 2414
            if ((twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : $this->getContext($context, "products"))) == 0)) {
                // line 2415
                echo "          <h3 style=\"text-align: right\">No hay productos... </h3>
          ";
            }
            // line 2417
            echo "        
          <div class=\"row text-center\" style=\"padding-left:100px; padding-top:50px; padding-bottom: 50px\" id=\"allproducts\">
              ";
            // line 2419
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 2420
                echo "                <style> 
                  .mdl-dialog {
                    border: none;
                    box-shadow: 0 9px 46px 8px rgba(0,0,0,.14), 0 11px 15px -7px rgba(0,0,0,.12), 0 24px 38px 3px rgba(0,0,0,.2);
                    width: 60%;
                  }
                  .mdl-navigation.lateral{
                    background-color:white;
                  }
                  .mdl-layout__drawer.lateral{
                      background-color:white;
                      width: 175px;
                      height:55%;
                      border-right-style: none;
                      border-right-width: 0px;
                      border-bottom-style: none;
                      border-bottom-width: 0px;
                      border-bottom-color: transparent;
                      
                  }
                  .mdl-button.mdl-js-button.mdl-js-ripple-effect:hover{
                    background-color: #67daff;
                  }
                  .mdl-dialog__actions--full-width>* {
                      height: 48px;
                      -webkit-flex: 0 0 100%;
                      -ms-flex: 0 0 100%;
                      flex: 0 0 100%;
                      padding-right: 0px;
                      margin-right: 0;
                      /* text-align: right; */
                  }
              
              </style>
                  ";
                // line 2455
                echo "                  
                  
                 
        
                    <div id=\"";
                // line 2459
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
                    <div  class=\"filterDiv ";
                // line 2460
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "categoria", array()), "html", null, true);
                echo "\">
                    ";
                // line 2462
                echo "                    <a href=\"javascript:void(0)\" class=\"show-modal";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "\">
                      ";
                // line 2464
                echo "                      <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                echo "\" alt=\"\">
                      ";
                // line 2466
                echo "                      <div class=\"descripcionProducto\">
                        <a href=\"javascript:void(0)\" class=\"show-modal";
                // line 2467
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "\">
                          <h4 class=\"producto text";
                // line 2468
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                echo "</h4>
                          <h6 class=\"producto price";
                // line 2469
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "precio", array()), "html", null, true);
                echo " \$.</h6>
                        </a>
                      </div>
                      <br>
                      <br>
                      
                      ";
                // line 2476
                echo "                      
                      <dialog class=\"mdl-dialog show-dialog";
                // line 2477
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "\">
                          <div class=\"mdl-dialog__content\">
                             
                              <div class=\"row\">
                              ";
                // line 2482
                echo "                              <section class=\"foto col-lg-6 col-md-6\">
                                <img class=\"img-fluid\" src=\"";
                // line 2483
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                echo "\" alt=\"\">  
                              </section>
                              ";
                // line 2486
                echo "                              <section class=\"col-lg-6 col-md-6 mb-12\">
                                <h4 class=\"producto text-center center-text\">";
                // line 2487
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                echo "</h4>
                                <h6 class=\"producto text-center center-text\">Price: ";
                // line 2488
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "precio", array()), "html", null, true);
                echo " \$</h6>
                                <h6 class=\"producto text-center center-text\">Description: ";
                // line 2489
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "Descripcion", array()), "html", null, true);
                echo "</h6>
                                ";
                // line 2491
                echo "                                <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                                  
                                  ";
                // line 2493
                if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                    // line 2494
                    echo "                                  <p>You have to sign in to add products to your shopping cart!</p>
                                  <button type=\"button\" class=\"mdl-button close";
                    // line 2495
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">Cerrar <i class=\"material-icons\">close</i></button>
                                  ";
                }
                // line 2497
                echo "                                  
                                  ";
                // line 2498
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                    // line 2499
                    echo "                                    <hr style=\"height:10px\">                            
                                    <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                    // line 2500
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarProducto", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                    echo "\" method=\"POST\">
                                      <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Add to Shopping Cart<i class=\"material-icons\">add_shopping_cart</i></button>
                                    </form>
                                    <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                    // line 2503
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarWishlist", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                    echo "\" method=\"POST\">
                                      <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Add To WishList <i class=\"material-icons\">list</i></button>
                                    </form>
                                    <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                                      <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close";
                    // line 2507
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">Close <i class=\"material-icons\">close</i></button>
                                    </form>
                                  ";
                }
                // line 2510
                echo "                                </div>
                              </section>
                              </div>
                            
                          </div>
                        </dialog>
                        
                      ";
                // line 2518
                echo "                      <script>
                        // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                        var dialog";
                // line 2520
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo " = document.querySelector('.show-dialog";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "');
                        // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                        var showModalButton";
                // line 2522
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo " = document.querySelector('.show-modal";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "'); 
                        // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                        var showTextButton";
                // line 2524
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo " = document.querySelector('.text";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "');
                        // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                        var showPriceButton";
                // line 2526
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo " = document.querySelector('.price";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "');
                        
                        if (!dialog";
                // line 2528
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo ".showModal){
                          dialogPolyfill.registerDialog(dialog";
                // line 2529
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo ");
                        }
                        // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                        showModalButton";
                // line 2532
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo ".addEventListener('click', function() {
                          dialog";
                // line 2533
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo ".showModal();
                        });
                        // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                        showTextButton";
                // line 2536
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo ".addEventListener('click', function() {
                          dialog";
                // line 2537
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo ".showModal();
                        });
                        // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                        showPriceButton";
                // line 2540
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo ".addEventListener('click', function() {
                          dialog";
                // line 2541
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo ".showModal();
                        });
                        // FUNCION PARA CERRAR EL DIALOG
                        dialog";
                // line 2544
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo ".querySelector('.close";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "').addEventListener('click', function() {
                          dialog";
                // line 2545
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo ".close();
                        });
                      </script> 
                    </a>
                  </div>
              </div>
              
                 
                  
                  
              
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2557
            echo "              
        
          </div>
          
          <div class=\"row text-center\" style=\"padding-left:100px; padding-top:50px; padding-bottom: 50px\" id=\"bonsaiprod\">
              ";
            // line 2562
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 2563
                echo "                ";
                if (($this->getAttribute($context["product"], "categoria", array()) == "bonsai")) {
                    // line 2564
                    echo "                <style> 
              .mdl-dialog {
                border: none;
                box-shadow: 0 9px 46px 8px rgba(0,0,0,.14), 0 11px 15px -7px rgba(0,0,0,.12), 0 24px 38px 3px rgba(0,0,0,.2);
                width: 60%;
              }
              .mdl-navigation.lateral{
                
                background-color:white;
            }
              .mdl-layout__drawer.lateral{
                  background-color:white;
                  width: 175px;
                  height:55%;
                  border-right-style: none;
                  border-right-width: 0px;
                  border-bottom-style: none;
                  border-bottom-width: 0px;
                  border-bottom-color: transparent;
                  
              }
              .mdl-button.mdl-js-button.mdl-js-ripple-effect:hover{
                
                background-color: #67daff;
                 
                
            }
            
            </style>
                  ";
                    // line 2594
                    echo "                  

        
                    <div id=\"";
                    // line 2597
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
                    <div  class=\"filterDiv ";
                    // line 2598
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "categoria", array()), "html", null, true);
                    echo "\">
                    ";
                    // line 2600
                    echo "                    <a href=\"javascript:void(0)\" class=\"show-modal";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">
                      ";
                    // line 2602
                    echo "                      <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                    echo "\" alt=\"\">
                      ";
                    // line 2604
                    echo "                      <div class=\"descripcionProducto\">
                        <a href=\"javascript:void(0)\" class=\"show-modal";
                    // line 2605
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">
                          <h4 class=\"producto text";
                    // line 2606
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                    echo "</h4>
                          <h6 class=\"producto price";
                    // line 2607
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "precio", array()), "html", null, true);
                    echo " \$.</h6>
                        </a>
                      </div>
                      <br>
                      <br>
                      
                      ";
                    // line 2614
                    echo "                      
                      <dialog class=\"mdl-dialog show-dialog";
                    // line 2615
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">
                          <div class=\"mdl-dialog__content\">
                             
                              <div class=\"row\">
                              ";
                    // line 2620
                    echo "                              <section class=\"foto col-lg-6 col-md-6\">
                                <img class=\"img-fluid\" src=\"";
                    // line 2621
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                    echo "\" alt=\"\">  
                              </section>
                              ";
                    // line 2624
                    echo "                              <section class=\"col-lg-6 col-md-6 mb-12\">
                                <h4 class=\"producto text-center center-text\">";
                    // line 2625
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                    echo "</h4>
                                <h6 class=\"producto text-center center-text\">Price: ";
                    // line 2626
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "precio", array()), "html", null, true);
                    echo " \$</h6>
                                <h6 class=\"producto text-center center-text\">Description: ";
                    // line 2627
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "Descripcion", array()), "html", null, true);
                    echo "</h6>
                                ";
                    // line 2629
                    echo "                                <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                                  
                                  ";
                    // line 2631
                    if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        // line 2632
                        echo "                                  <p>You have to sign in to add products to your shopping cart!</p>
                                  <button type=\"button\" class=\"mdl-button close";
                        // line 2633
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">Cerrar <i class=\"material-icons\">close</i></button>
                                  ";
                    }
                    // line 2635
                    echo "                                  
                                  ";
                    // line 2636
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        // line 2637
                        echo "                                    <hr style=\"height:10px\">                            
                                    <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                        // line 2638
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarProducto", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                        echo "\" method=\"POST\">
                                      <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Add to Shopping Cart<i class=\"material-icons\">add_shopping_cart</i></button>
                                    </form>
                                    <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                        // line 2641
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarWishlist", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                        echo "\" method=\"POST\">
                                      <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Add To WishList <i class=\"material-icons\">list</i></button>
                                    </form>
                                    <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                                      <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close";
                        // line 2645
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">Close <i class=\"material-icons\">close</i></button>
                                    </form>
                                  ";
                    }
                    // line 2648
                    echo "                                </div>
                              </section>
                              </div>
                            
                          </div>
                        </dialog>
                        
                      ";
                    // line 2656
                    echo "                      <script>
                        // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                        var dialog";
                    // line 2658
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo " = document.querySelector('.show-dialog";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "');
                        // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                        var showModalButton";
                    // line 2660
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo " = document.querySelector('.show-modal";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "'); 
                        // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                        var showTextButton";
                    // line 2662
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo " = document.querySelector('.text";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "');
                        // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                        var showPriceButton";
                    // line 2664
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo " = document.querySelector('.price";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "');
                        
                        if (!dialog";
                    // line 2666
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".showModal){
                          dialogPolyfill.registerDialog(dialog";
                    // line 2667
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ");
                        }
                        // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                        showModalButton";
                    // line 2670
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".addEventListener('click', function() {
                          dialog";
                    // line 2671
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".showModal();
                        });
                        // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                        showTextButton";
                    // line 2674
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".addEventListener('click', function() {
                          dialog";
                    // line 2675
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".showModal();
                        });
                        // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                        showPriceButton";
                    // line 2678
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".addEventListener('click', function() {
                          dialog";
                    // line 2679
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".showModal();
                        });
                        // FUNCION PARA CERRAR EL DIALOG
                        dialog";
                    // line 2682
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".querySelector('.close";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "').addEventListener('click', function() {
                          dialog";
                    // line 2683
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".close();
                        });
                      </script> 
                    </a>
                  </div>
              </div>
              

              
                ";
                }
                // line 2693
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2694
            echo "        
          </div>
          
          <div class=\"row text-center\" style=\"padding-left:100px; padding-top:50px; padding-bottom: 50px\" id=\"macetaprod\">
              ";
            // line 2698
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 2699
                echo "                ";
                if (($this->getAttribute($context["product"], "categoria", array()) == "maceta")) {
                    // line 2700
                    echo "                  <style> 
                .mdl-dialog {
                  border: none;
                  box-shadow: 0 9px 46px 8px rgba(0,0,0,.14), 0 11px 15px -7px rgba(0,0,0,.12), 0 24px 38px 3px rgba(0,0,0,.2);
                  width: 60%;
                }
                .mdl-navigation.lateral{
                  
                  background-color:white;
              }
                .mdl-layout__drawer.lateral{
                    background-color:white;
                    width: 175px;
                    height:55%;
                    border-right-style: none;
                    border-right-width: 0px;
                    border-bottom-style: none;
                    border-bottom-width: 0px;
                    border-bottom-color: transparent;
                    
                }
                .mdl-button.mdl-js-button.mdl-js-ripple-effect:hover{
                  
                  background-color: #67daff;
                   
                  
              }
              
              </style>
                  ";
                    // line 2730
                    echo "                  

        
                    <div id=\"";
                    // line 2733
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
                    <div  class=\"filterDiv ";
                    // line 2734
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "categoria", array()), "html", null, true);
                    echo "\">
                    ";
                    // line 2736
                    echo "                    <a href=\"javascript:void(0)\" class=\"show-modal";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">
                      ";
                    // line 2738
                    echo "                      <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                    echo "\" alt=\"\">
                      ";
                    // line 2740
                    echo "                      <div class=\"descripcionProducto\">
                        <a href=\"javascript:void(0)\" class=\"show-modal";
                    // line 2741
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">
                          <h4 class=\"producto text";
                    // line 2742
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                    echo "</h4>
                          <h6 class=\"producto price";
                    // line 2743
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "precio", array()), "html", null, true);
                    echo " \$.</h6>
                        </a>
                      </div>
                      <br>
                      <br>
                      
                      ";
                    // line 2750
                    echo "                      
                      <dialog class=\"mdl-dialog show-dialog";
                    // line 2751
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">
                          <div class=\"mdl-dialog__content\">
                             
                              <div class=\"row\">
                              ";
                    // line 2756
                    echo "                              <section class=\"foto col-lg-6 col-md-6\">
                                <img class=\"img-fluid\" src=\"";
                    // line 2757
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                    echo "\" alt=\"\">  
                              </section>
                              ";
                    // line 2760
                    echo "                              <section class=\"col-lg-6 col-md-6 mb-12\">
                                <h4 class=\"producto text-center center-text\">";
                    // line 2761
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                    echo "</h4>
                                <h6 class=\"producto text-center center-text\">Price: ";
                    // line 2762
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "precio", array()), "html", null, true);
                    echo " \$</h6>
                                <h6 class=\"producto text-center center-text\">Description: ";
                    // line 2763
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "Descripcion", array()), "html", null, true);
                    echo "</h6>
                                ";
                    // line 2765
                    echo "                                <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                                  
                                  ";
                    // line 2767
                    if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        // line 2768
                        echo "                                  <p>You have to sign in to add products to your shopping cart!</p>
                                  <button type=\"button\" class=\"mdl-button close";
                        // line 2769
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">Cerrar <i class=\"material-icons\">close</i></button>
                                  ";
                    }
                    // line 2771
                    echo "                                  
                                  ";
                    // line 2772
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        // line 2773
                        echo "                                    <hr style=\"height:10px\">                            
                                    <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                        // line 2774
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarProducto", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                        echo "\" method=\"POST\">
                                      <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Add to Shopping Cart<i class=\"material-icons\">add_shopping_cart</i></button>
                                    </form>
                                    <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                        // line 2777
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarWishlist", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                        echo "\" method=\"POST\">
                                      <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Add To WishList <i class=\"material-icons\">list</i></button>
                                    </form>
                                    <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                                      <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close";
                        // line 2781
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">Close <i class=\"material-icons\">close</i></button>
                                    </form>
                                  ";
                    }
                    // line 2784
                    echo "                                </div>
                              </section>
                              </div>
                            
                          </div>
                        </dialog>
                        
                      ";
                    // line 2792
                    echo "                      <script>
                        // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                        var dialog";
                    // line 2794
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo " = document.querySelector('.show-dialog";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "');
                        // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                        var showModalButton";
                    // line 2796
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo " = document.querySelector('.show-modal";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "'); 
                        // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                        var showTextButton";
                    // line 2798
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo " = document.querySelector('.text";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "');
                        // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                        var showPriceButton";
                    // line 2800
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo " = document.querySelector('.price";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "');
                        
                        if (!dialog";
                    // line 2802
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".showModal){
                          dialogPolyfill.registerDialog(dialog";
                    // line 2803
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ");
                        }
                        // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                        showModalButton";
                    // line 2806
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".addEventListener('click', function() {
                          dialog";
                    // line 2807
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".showModal();
                        });
                        // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                        showTextButton";
                    // line 2810
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".addEventListener('click', function() {
                          dialog";
                    // line 2811
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".showModal();
                        });
                        // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                        showPriceButton";
                    // line 2814
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".addEventListener('click', function() {
                          dialog";
                    // line 2815
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".showModal();
                        });
                        // FUNCION PARA CERRAR EL DIALOG
                        dialog";
                    // line 2818
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".querySelector('.close";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "').addEventListener('click', function() {
                          dialog";
                    // line 2819
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".close();
                        });
                      </script> 
                    </a>
                  </div>
              </div>
              


              
                ";
                }
                // line 2830
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2831
            echo "              
          </div>
          
          <div class=\"row text-center\" style=\"padding-left:100px; padding-top:50px; padding-bottom: 50px\" id=\"accesorioprod\">
              ";
            // line 2835
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 2836
                echo "                ";
                if (($this->getAttribute($context["product"], "categoria", array()) == "accesorio")) {
                    // line 2837
                    echo "                  <style> 
                .mdl-dialog {
                  border: none;
                  box-shadow: 0 9px 46px 8px rgba(0,0,0,.14), 0 11px 15px -7px rgba(0,0,0,.12), 0 24px 38px 3px rgba(0,0,0,.2);
                  width: 60%;
                }
                .mdl-navigation.lateral{
                  
                  background-color:white;
              }
                .mdl-layout__drawer.lateral{
                    background-color:white;
                    width: 175px;
                    height:55%;
                    border-right-style: none;
                    border-right-width: 0px;
                    border-bottom-style: none;
                    border-bottom-width: 0px;
                    border-bottom-color: transparent;
                    
                }
                .mdl-button.mdl-js-button.mdl-js-ripple-effect:hover{
                  
                  background-color: #67daff;
                   
                  
              }
              
              </style>
                  ";
                    // line 2867
                    echo "
        
                    <div id=\"";
                    // line 2869
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
                    <div  class=\"filterDiv ";
                    // line 2870
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "categoria", array()), "html", null, true);
                    echo "\">
                    ";
                    // line 2872
                    echo "                    <a href=\"javascript:void(0)\" class=\"show-modal";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">
                      ";
                    // line 2874
                    echo "                      <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                    echo "\" alt=\"\">
                      ";
                    // line 2876
                    echo "                      <div class=\"descripcionProducto\">
                        <a href=\"javascript:void(0)\" class=\"show-modal";
                    // line 2877
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">
                          <h4 class=\"producto text";
                    // line 2878
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                    echo "</h4>
                          <h6 class=\"producto price";
                    // line 2879
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "precio", array()), "html", null, true);
                    echo " \$.</h6>
                        </a>
                      </div>
                      <br>
                      <br>
                      
                      ";
                    // line 2886
                    echo "                      
                      <dialog class=\"mdl-dialog show-dialog";
                    // line 2887
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\">
                          <div class=\"mdl-dialog__content\">
                             
                              <div class=\"row\">
                              ";
                    // line 2892
                    echo "                              <section class=\"foto col-lg-6 col-md-6\">
                                <img class=\"img-fluid\" src=\"";
                    // line 2893
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
                    echo "\" alt=\"\">  
                              </section>
                              ";
                    // line 2896
                    echo "                              <section class=\"col-lg-6 col-md-6 mb-12\">
                                <h4 class=\"producto text-center center-text\">";
                    // line 2897
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nombre", array()), "html", null, true);
                    echo "</h4>
                                <h6 class=\"producto text-center center-text\">Price: ";
                    // line 2898
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "precio", array()), "html", null, true);
                    echo " \$</h6>
                                <h6 class=\"producto text-center center-text\">Description: ";
                    // line 2899
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "Descripcion", array()), "html", null, true);
                    echo "</h6>
                                ";
                    // line 2901
                    echo "                                <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                                  
                                  ";
                    // line 2903
                    if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        // line 2904
                        echo "                                  <p>You have to sign in to add products to your shopping cart!</p>
                                  <button type=\"button\" class=\"mdl-button close";
                        // line 2905
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">Cerrar <i class=\"material-icons\">close</i></button>
                                  ";
                    }
                    // line 2907
                    echo "                                  
                                  ";
                    // line 2908
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        // line 2909
                        echo "                                    <hr style=\"height:10px\">                            
                                    <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                        // line 2910
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarProducto", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                        echo "\" method=\"POST\">
                                      <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Add to Shopping Cart<i class=\"material-icons\">add_shopping_cart</i></button>
                                    </form>
                                    <form style=\"width:100%\" class=\"text-center center-text\" action=\"";
                        // line 2913
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agregarWishlist", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                        echo "\" method=\"POST\">
                                      <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Add To WishList <i class=\"material-icons\">list</i></button>
                                    </form>
                                    <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                                      <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close";
                        // line 2917
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\">Close <i class=\"material-icons\">close</i></button>
                                    </form>
                                  ";
                    }
                    // line 2920
                    echo "                                </div>
                              </section>
                              </div>
                            
                          </div>
                        </dialog>
                        
                      ";
                    // line 2928
                    echo "                      <script>
                        // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                        var dialog";
                    // line 2930
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo " = document.querySelector('.show-dialog";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "');
                        // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                        var showModalButton";
                    // line 2932
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo " = document.querySelector('.show-modal";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "'); 
                        // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                        var showTextButton";
                    // line 2934
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo " = document.querySelector('.text";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "');
                        // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                        var showPriceButton";
                    // line 2936
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo " = document.querySelector('.price";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "');
                        
                        if (!dialog";
                    // line 2938
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".showModal){
                          dialogPolyfill.registerDialog(dialog";
                    // line 2939
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ");
                        }
                        // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                        showModalButton";
                    // line 2942
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".addEventListener('click', function() {
                          dialog";
                    // line 2943
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".showModal();
                        });
                        // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                        showTextButton";
                    // line 2946
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".addEventListener('click', function() {
                          dialog";
                    // line 2947
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".showModal();
                        });
                        // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                        showPriceButton";
                    // line 2950
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".addEventListener('click', function() {
                          dialog";
                    // line 2951
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".showModal();
                        });
                        // FUNCION PARA CERRAR EL DIALOG
                        dialog";
                    // line 2954
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".querySelector('.close";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "').addEventListener('click', function() {
                          dialog";
                    // line 2955
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ".close();
                        });
                      </script> 
                    </a>
                  </div>
              </div>

                ";
                }
                // line 2963
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2964
            echo "              
          </div>
          
  
  ";
        }
        // line 2969
        echo "  
";
        
        $__internal_83d5fdefe31a7e4ee03b0952c59e718e60b24952985230feda2b9be48ba47568->leave($__internal_83d5fdefe31a7e4ee03b0952c59e718e60b24952985230feda2b9be48ba47568_prof);

        
        $__internal_59bb5a0eaa1b7877e671074828662ea2777a9a821a484ceb1b7800072bb1b02f->leave($__internal_59bb5a0eaa1b7877e671074828662ea2777a9a821a484ceb1b7800072bb1b02f_prof);

    }

    public function getTemplateName()
    {
        return "productos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  6083 => 2969,  6076 => 2964,  6070 => 2963,  6059 => 2955,  6053 => 2954,  6047 => 2951,  6043 => 2950,  6037 => 2947,  6033 => 2946,  6027 => 2943,  6023 => 2942,  6017 => 2939,  6013 => 2938,  6006 => 2936,  5999 => 2934,  5992 => 2932,  5985 => 2930,  5981 => 2928,  5972 => 2920,  5966 => 2917,  5959 => 2913,  5953 => 2910,  5950 => 2909,  5948 => 2908,  5945 => 2907,  5940 => 2905,  5937 => 2904,  5935 => 2903,  5931 => 2901,  5927 => 2899,  5923 => 2898,  5919 => 2897,  5916 => 2896,  5911 => 2893,  5908 => 2892,  5901 => 2887,  5898 => 2886,  5887 => 2879,  5881 => 2878,  5877 => 2877,  5874 => 2876,  5869 => 2874,  5864 => 2872,  5860 => 2870,  5856 => 2869,  5852 => 2867,  5821 => 2837,  5818 => 2836,  5814 => 2835,  5808 => 2831,  5802 => 2830,  5788 => 2819,  5782 => 2818,  5776 => 2815,  5772 => 2814,  5766 => 2811,  5762 => 2810,  5756 => 2807,  5752 => 2806,  5746 => 2803,  5742 => 2802,  5735 => 2800,  5728 => 2798,  5721 => 2796,  5714 => 2794,  5710 => 2792,  5701 => 2784,  5695 => 2781,  5688 => 2777,  5682 => 2774,  5679 => 2773,  5677 => 2772,  5674 => 2771,  5669 => 2769,  5666 => 2768,  5664 => 2767,  5660 => 2765,  5656 => 2763,  5652 => 2762,  5648 => 2761,  5645 => 2760,  5640 => 2757,  5637 => 2756,  5630 => 2751,  5627 => 2750,  5616 => 2743,  5610 => 2742,  5606 => 2741,  5603 => 2740,  5598 => 2738,  5593 => 2736,  5589 => 2734,  5585 => 2733,  5580 => 2730,  5549 => 2700,  5546 => 2699,  5542 => 2698,  5536 => 2694,  5530 => 2693,  5517 => 2683,  5511 => 2682,  5505 => 2679,  5501 => 2678,  5495 => 2675,  5491 => 2674,  5485 => 2671,  5481 => 2670,  5475 => 2667,  5471 => 2666,  5464 => 2664,  5457 => 2662,  5450 => 2660,  5443 => 2658,  5439 => 2656,  5430 => 2648,  5424 => 2645,  5417 => 2641,  5411 => 2638,  5408 => 2637,  5406 => 2636,  5403 => 2635,  5398 => 2633,  5395 => 2632,  5393 => 2631,  5389 => 2629,  5385 => 2627,  5381 => 2626,  5377 => 2625,  5374 => 2624,  5369 => 2621,  5366 => 2620,  5359 => 2615,  5356 => 2614,  5345 => 2607,  5339 => 2606,  5335 => 2605,  5332 => 2604,  5327 => 2602,  5322 => 2600,  5318 => 2598,  5314 => 2597,  5309 => 2594,  5278 => 2564,  5275 => 2563,  5271 => 2562,  5264 => 2557,  5246 => 2545,  5240 => 2544,  5234 => 2541,  5230 => 2540,  5224 => 2537,  5220 => 2536,  5214 => 2533,  5210 => 2532,  5204 => 2529,  5200 => 2528,  5193 => 2526,  5186 => 2524,  5179 => 2522,  5172 => 2520,  5168 => 2518,  5159 => 2510,  5153 => 2507,  5146 => 2503,  5140 => 2500,  5137 => 2499,  5135 => 2498,  5132 => 2497,  5127 => 2495,  5124 => 2494,  5122 => 2493,  5118 => 2491,  5114 => 2489,  5110 => 2488,  5106 => 2487,  5103 => 2486,  5098 => 2483,  5095 => 2482,  5088 => 2477,  5085 => 2476,  5074 => 2469,  5068 => 2468,  5064 => 2467,  5061 => 2466,  5056 => 2464,  5051 => 2462,  5047 => 2460,  5043 => 2459,  5037 => 2455,  5001 => 2420,  4997 => 2419,  4993 => 2417,  4989 => 2415,  4987 => 2414,  4951 => 2381,  4945 => 2377,  4939 => 2373,  4933 => 2372,  4929 => 2370,  4918 => 2362,  4912 => 2361,  4906 => 2358,  4902 => 2357,  4896 => 2354,  4892 => 2353,  4886 => 2350,  4882 => 2349,  4876 => 2346,  4872 => 2345,  4865 => 2343,  4858 => 2341,  4851 => 2339,  4844 => 2337,  4840 => 2335,  4831 => 2327,  4825 => 2324,  4818 => 2320,  4812 => 2317,  4809 => 2316,  4807 => 2315,  4804 => 2314,  4799 => 2312,  4796 => 2311,  4794 => 2310,  4790 => 2308,  4786 => 2306,  4782 => 2305,  4778 => 2304,  4775 => 2303,  4770 => 2300,  4767 => 2299,  4760 => 2294,  4757 => 2293,  4746 => 2286,  4740 => 2285,  4736 => 2284,  4733 => 2283,  4728 => 2281,  4723 => 2279,  4719 => 2277,  4715 => 2276,  4712 => 2275,  4710 => 2274,  4708 => 2273,  4706 => 2272,  4704 => 2271,  4702 => 2270,  4700 => 2269,  4698 => 2268,  4696 => 2267,  4693 => 2266,  4689 => 2263,  4678 => 2255,  4672 => 2254,  4666 => 2251,  4662 => 2250,  4656 => 2247,  4652 => 2246,  4646 => 2243,  4642 => 2242,  4636 => 2239,  4632 => 2238,  4625 => 2236,  4618 => 2234,  4611 => 2232,  4604 => 2230,  4600 => 2228,  4591 => 2220,  4585 => 2217,  4578 => 2213,  4572 => 2210,  4569 => 2209,  4567 => 2208,  4564 => 2207,  4559 => 2205,  4556 => 2204,  4554 => 2203,  4550 => 2201,  4546 => 2199,  4542 => 2198,  4538 => 2197,  4535 => 2196,  4530 => 2193,  4527 => 2192,  4520 => 2187,  4517 => 2186,  4506 => 2179,  4500 => 2178,  4496 => 2177,  4493 => 2176,  4488 => 2174,  4483 => 2172,  4479 => 2170,  4475 => 2169,  4472 => 2168,  4470 => 2167,  4468 => 2166,  4466 => 2165,  4464 => 2164,  4462 => 2163,  4460 => 2162,  4458 => 2161,  4456 => 2160,  4453 => 2159,  4449 => 2156,  4438 => 2148,  4432 => 2147,  4426 => 2144,  4422 => 2143,  4416 => 2140,  4412 => 2139,  4406 => 2136,  4402 => 2135,  4396 => 2132,  4392 => 2131,  4385 => 2129,  4378 => 2127,  4371 => 2125,  4364 => 2123,  4360 => 2121,  4351 => 2113,  4345 => 2110,  4338 => 2106,  4332 => 2103,  4329 => 2102,  4327 => 2101,  4324 => 2100,  4319 => 2098,  4316 => 2097,  4314 => 2096,  4310 => 2094,  4306 => 2092,  4302 => 2091,  4298 => 2090,  4295 => 2089,  4290 => 2086,  4287 => 2085,  4280 => 2080,  4277 => 2079,  4266 => 2072,  4260 => 2071,  4256 => 2070,  4253 => 2069,  4248 => 2067,  4243 => 2065,  4239 => 2063,  4235 => 2062,  4232 => 2061,  4230 => 2060,  4228 => 2059,  4226 => 2058,  4224 => 2057,  4222 => 2056,  4220 => 2055,  4218 => 2054,  4216 => 2053,  4213 => 2052,  4210 => 2050,  4199 => 2042,  4193 => 2041,  4187 => 2038,  4183 => 2037,  4177 => 2034,  4173 => 2033,  4167 => 2030,  4163 => 2029,  4157 => 2026,  4153 => 2025,  4146 => 2023,  4139 => 2021,  4132 => 2019,  4125 => 2017,  4121 => 2015,  4112 => 2007,  4106 => 2004,  4099 => 2000,  4093 => 1997,  4090 => 1996,  4088 => 1995,  4085 => 1994,  4080 => 1992,  4077 => 1991,  4075 => 1990,  4071 => 1988,  4067 => 1986,  4063 => 1985,  4059 => 1984,  4056 => 1983,  4051 => 1980,  4048 => 1979,  4041 => 1974,  4038 => 1973,  4027 => 1966,  4021 => 1965,  4017 => 1964,  4014 => 1963,  4009 => 1961,  4004 => 1959,  4000 => 1957,  3996 => 1956,  3993 => 1955,  3991 => 1954,  3989 => 1953,  3987 => 1952,  3985 => 1951,  3983 => 1950,  3981 => 1949,  3979 => 1948,  3977 => 1947,  3974 => 1946,  3971 => 1944,  3940 => 1914,  3937 => 1913,  3933 => 1912,  3927 => 1908,  3921 => 1907,  3917 => 1905,  3906 => 1897,  3900 => 1896,  3894 => 1893,  3890 => 1892,  3884 => 1889,  3880 => 1888,  3874 => 1885,  3870 => 1884,  3864 => 1881,  3860 => 1880,  3853 => 1878,  3846 => 1876,  3839 => 1874,  3832 => 1872,  3828 => 1870,  3819 => 1862,  3813 => 1859,  3806 => 1855,  3800 => 1852,  3797 => 1851,  3795 => 1850,  3792 => 1849,  3787 => 1847,  3784 => 1846,  3782 => 1845,  3778 => 1843,  3774 => 1841,  3770 => 1840,  3766 => 1839,  3763 => 1838,  3758 => 1835,  3755 => 1834,  3748 => 1829,  3745 => 1828,  3734 => 1821,  3728 => 1820,  3724 => 1819,  3721 => 1818,  3716 => 1816,  3711 => 1814,  3707 => 1812,  3703 => 1811,  3700 => 1810,  3698 => 1809,  3696 => 1808,  3694 => 1807,  3692 => 1806,  3690 => 1805,  3688 => 1804,  3686 => 1803,  3684 => 1802,  3681 => 1801,  3677 => 1798,  3666 => 1790,  3660 => 1789,  3654 => 1786,  3650 => 1785,  3644 => 1782,  3640 => 1781,  3634 => 1778,  3630 => 1777,  3624 => 1774,  3620 => 1773,  3613 => 1771,  3606 => 1769,  3599 => 1767,  3592 => 1765,  3588 => 1763,  3579 => 1755,  3573 => 1752,  3566 => 1748,  3560 => 1745,  3557 => 1744,  3555 => 1743,  3552 => 1742,  3547 => 1740,  3544 => 1739,  3542 => 1738,  3538 => 1736,  3534 => 1734,  3530 => 1733,  3526 => 1732,  3523 => 1731,  3518 => 1728,  3515 => 1727,  3508 => 1722,  3505 => 1721,  3494 => 1714,  3488 => 1713,  3484 => 1712,  3481 => 1711,  3476 => 1709,  3471 => 1707,  3467 => 1705,  3463 => 1704,  3460 => 1703,  3458 => 1702,  3456 => 1701,  3454 => 1700,  3452 => 1699,  3450 => 1698,  3448 => 1697,  3446 => 1696,  3444 => 1695,  3441 => 1694,  3437 => 1691,  3426 => 1683,  3420 => 1682,  3414 => 1679,  3410 => 1678,  3404 => 1675,  3400 => 1674,  3394 => 1671,  3390 => 1670,  3384 => 1667,  3380 => 1666,  3373 => 1664,  3366 => 1662,  3359 => 1660,  3352 => 1658,  3348 => 1656,  3339 => 1648,  3333 => 1645,  3326 => 1641,  3320 => 1638,  3317 => 1637,  3315 => 1636,  3312 => 1635,  3307 => 1633,  3304 => 1632,  3302 => 1631,  3298 => 1629,  3294 => 1627,  3290 => 1626,  3286 => 1625,  3283 => 1624,  3278 => 1621,  3275 => 1620,  3268 => 1615,  3265 => 1614,  3254 => 1607,  3248 => 1606,  3244 => 1605,  3241 => 1604,  3236 => 1602,  3231 => 1600,  3227 => 1598,  3223 => 1597,  3220 => 1596,  3218 => 1595,  3216 => 1594,  3214 => 1593,  3212 => 1592,  3210 => 1591,  3208 => 1590,  3206 => 1589,  3204 => 1588,  3201 => 1587,  3198 => 1585,  3187 => 1577,  3181 => 1576,  3175 => 1573,  3171 => 1572,  3165 => 1569,  3161 => 1568,  3155 => 1565,  3151 => 1564,  3145 => 1561,  3141 => 1560,  3134 => 1558,  3127 => 1556,  3120 => 1554,  3113 => 1552,  3109 => 1550,  3100 => 1542,  3094 => 1539,  3087 => 1535,  3081 => 1532,  3078 => 1531,  3076 => 1530,  3073 => 1529,  3068 => 1527,  3065 => 1526,  3063 => 1525,  3059 => 1523,  3055 => 1521,  3051 => 1520,  3047 => 1519,  3044 => 1518,  3039 => 1515,  3036 => 1514,  3029 => 1509,  3026 => 1508,  3015 => 1501,  3009 => 1500,  3005 => 1499,  3002 => 1498,  2997 => 1496,  2992 => 1494,  2988 => 1492,  2984 => 1491,  2981 => 1490,  2979 => 1489,  2977 => 1488,  2975 => 1487,  2973 => 1486,  2971 => 1485,  2969 => 1484,  2967 => 1483,  2965 => 1482,  2962 => 1481,  2959 => 1479,  2928 => 1449,  2925 => 1448,  2921 => 1447,  2915 => 1443,  2909 => 1442,  2905 => 1440,  2894 => 1432,  2888 => 1431,  2882 => 1428,  2878 => 1427,  2872 => 1424,  2868 => 1423,  2862 => 1420,  2858 => 1419,  2852 => 1416,  2848 => 1415,  2841 => 1413,  2834 => 1411,  2827 => 1409,  2820 => 1407,  2816 => 1405,  2807 => 1397,  2801 => 1394,  2794 => 1390,  2788 => 1387,  2785 => 1386,  2783 => 1385,  2780 => 1384,  2775 => 1382,  2772 => 1381,  2770 => 1380,  2766 => 1378,  2762 => 1376,  2758 => 1375,  2754 => 1374,  2751 => 1373,  2746 => 1370,  2743 => 1369,  2736 => 1364,  2733 => 1363,  2722 => 1356,  2716 => 1355,  2712 => 1354,  2709 => 1353,  2704 => 1351,  2699 => 1349,  2695 => 1347,  2691 => 1346,  2688 => 1345,  2686 => 1344,  2684 => 1343,  2682 => 1342,  2680 => 1341,  2678 => 1340,  2676 => 1339,  2674 => 1338,  2672 => 1337,  2669 => 1336,  2665 => 1333,  2654 => 1325,  2648 => 1324,  2642 => 1321,  2638 => 1320,  2632 => 1317,  2628 => 1316,  2622 => 1313,  2618 => 1312,  2612 => 1309,  2608 => 1308,  2601 => 1306,  2594 => 1304,  2587 => 1302,  2580 => 1300,  2576 => 1298,  2567 => 1290,  2561 => 1287,  2554 => 1283,  2548 => 1280,  2545 => 1279,  2543 => 1278,  2540 => 1277,  2535 => 1275,  2532 => 1274,  2530 => 1273,  2526 => 1271,  2522 => 1269,  2518 => 1268,  2514 => 1267,  2511 => 1266,  2506 => 1263,  2503 => 1262,  2496 => 1257,  2493 => 1256,  2482 => 1249,  2476 => 1248,  2472 => 1247,  2469 => 1246,  2464 => 1244,  2459 => 1242,  2455 => 1240,  2451 => 1239,  2448 => 1238,  2446 => 1237,  2444 => 1236,  2442 => 1235,  2440 => 1234,  2438 => 1233,  2436 => 1232,  2434 => 1231,  2432 => 1230,  2429 => 1229,  2425 => 1226,  2414 => 1218,  2408 => 1217,  2402 => 1214,  2398 => 1213,  2392 => 1210,  2388 => 1209,  2382 => 1206,  2378 => 1205,  2372 => 1202,  2368 => 1201,  2361 => 1199,  2354 => 1197,  2347 => 1195,  2340 => 1193,  2336 => 1191,  2327 => 1183,  2321 => 1180,  2314 => 1176,  2308 => 1173,  2305 => 1172,  2303 => 1171,  2300 => 1170,  2295 => 1168,  2292 => 1167,  2290 => 1166,  2286 => 1164,  2282 => 1162,  2278 => 1161,  2274 => 1160,  2271 => 1159,  2266 => 1156,  2263 => 1155,  2256 => 1150,  2253 => 1149,  2242 => 1142,  2236 => 1141,  2232 => 1140,  2229 => 1139,  2224 => 1137,  2219 => 1135,  2215 => 1133,  2211 => 1132,  2208 => 1131,  2206 => 1130,  2204 => 1129,  2202 => 1128,  2200 => 1127,  2198 => 1126,  2196 => 1125,  2194 => 1124,  2192 => 1123,  2189 => 1122,  2186 => 1120,  2175 => 1112,  2169 => 1111,  2163 => 1108,  2159 => 1107,  2153 => 1104,  2149 => 1103,  2143 => 1100,  2139 => 1099,  2133 => 1096,  2129 => 1095,  2122 => 1093,  2115 => 1091,  2108 => 1089,  2101 => 1087,  2097 => 1085,  2088 => 1077,  2082 => 1074,  2075 => 1070,  2069 => 1067,  2066 => 1066,  2064 => 1065,  2061 => 1064,  2056 => 1062,  2053 => 1061,  2051 => 1060,  2047 => 1058,  2043 => 1056,  2039 => 1055,  2035 => 1054,  2032 => 1053,  2027 => 1050,  2024 => 1049,  2017 => 1044,  2014 => 1043,  2003 => 1036,  1997 => 1035,  1993 => 1034,  1990 => 1033,  1985 => 1031,  1980 => 1029,  1976 => 1027,  1972 => 1026,  1969 => 1025,  1967 => 1024,  1965 => 1023,  1963 => 1022,  1961 => 1021,  1959 => 1020,  1957 => 1019,  1955 => 1018,  1953 => 1017,  1950 => 1016,  1947 => 1014,  1916 => 984,  1913 => 983,  1909 => 982,  1902 => 977,  1895 => 975,  1884 => 967,  1878 => 966,  1872 => 963,  1868 => 962,  1862 => 959,  1858 => 958,  1852 => 955,  1848 => 954,  1842 => 951,  1838 => 950,  1831 => 948,  1824 => 946,  1817 => 944,  1810 => 942,  1806 => 940,  1797 => 932,  1791 => 929,  1784 => 925,  1778 => 922,  1775 => 921,  1773 => 920,  1770 => 919,  1765 => 917,  1762 => 916,  1760 => 915,  1756 => 913,  1752 => 911,  1748 => 910,  1744 => 909,  1741 => 908,  1736 => 905,  1733 => 904,  1726 => 899,  1723 => 898,  1712 => 891,  1706 => 890,  1702 => 889,  1699 => 888,  1694 => 886,  1689 => 884,  1685 => 882,  1681 => 881,  1678 => 880,  1676 => 879,  1674 => 878,  1672 => 877,  1670 => 876,  1668 => 875,  1666 => 874,  1664 => 873,  1662 => 872,  1659 => 871,  1655 => 868,  1644 => 860,  1638 => 859,  1632 => 856,  1628 => 855,  1622 => 852,  1618 => 851,  1612 => 848,  1608 => 847,  1602 => 844,  1598 => 843,  1591 => 841,  1584 => 839,  1577 => 837,  1570 => 835,  1566 => 833,  1557 => 825,  1551 => 822,  1544 => 818,  1538 => 815,  1535 => 814,  1533 => 813,  1530 => 812,  1525 => 810,  1522 => 809,  1520 => 808,  1516 => 806,  1512 => 804,  1508 => 803,  1504 => 802,  1501 => 801,  1496 => 798,  1493 => 797,  1486 => 792,  1483 => 791,  1472 => 784,  1466 => 783,  1462 => 782,  1459 => 781,  1454 => 779,  1449 => 777,  1445 => 775,  1441 => 774,  1438 => 773,  1436 => 772,  1434 => 771,  1432 => 770,  1430 => 769,  1428 => 768,  1426 => 767,  1424 => 766,  1422 => 765,  1419 => 764,  1415 => 761,  1404 => 753,  1398 => 752,  1392 => 749,  1388 => 748,  1382 => 745,  1378 => 744,  1372 => 741,  1368 => 740,  1362 => 737,  1358 => 736,  1351 => 734,  1344 => 732,  1337 => 730,  1330 => 728,  1326 => 726,  1317 => 718,  1311 => 715,  1304 => 711,  1298 => 708,  1295 => 707,  1293 => 706,  1290 => 705,  1285 => 703,  1282 => 702,  1280 => 701,  1276 => 699,  1272 => 697,  1268 => 696,  1264 => 695,  1261 => 694,  1256 => 691,  1253 => 690,  1246 => 685,  1243 => 684,  1232 => 677,  1226 => 676,  1222 => 675,  1219 => 674,  1214 => 672,  1209 => 670,  1205 => 668,  1201 => 667,  1198 => 666,  1196 => 665,  1194 => 664,  1192 => 663,  1190 => 662,  1188 => 661,  1186 => 660,  1184 => 659,  1182 => 658,  1179 => 657,  1176 => 655,  1165 => 647,  1159 => 646,  1153 => 643,  1149 => 642,  1143 => 639,  1139 => 638,  1133 => 635,  1129 => 634,  1123 => 631,  1119 => 630,  1112 => 628,  1105 => 626,  1098 => 624,  1091 => 622,  1087 => 620,  1078 => 612,  1072 => 609,  1065 => 605,  1059 => 602,  1056 => 601,  1054 => 600,  1051 => 599,  1046 => 597,  1043 => 596,  1041 => 595,  1037 => 593,  1033 => 591,  1029 => 590,  1025 => 589,  1022 => 588,  1017 => 585,  1014 => 584,  1007 => 579,  1004 => 578,  993 => 571,  987 => 570,  983 => 569,  980 => 568,  975 => 566,  970 => 564,  966 => 562,  962 => 561,  959 => 560,  957 => 559,  955 => 558,  953 => 557,  951 => 556,  949 => 555,  947 => 554,  945 => 553,  943 => 552,  940 => 551,  937 => 549,  901 => 514,  897 => 513,  893 => 511,  889 => 509,  887 => 508,  851 => 475,  845 => 471,  843 => 470,  840 => 469,  831 => 468,  779 => 423,  741 => 387,  737 => 385,  707 => 357,  705 => 356,  702 => 355,  672 => 327,  670 => 326,  667 => 325,  637 => 297,  635 => 296,  632 => 295,  602 => 267,  600 => 266,  596 => 264,  594 => 263,  590 => 261,  581 => 260,  556 => 242,  544 => 240,  533 => 236,  529 => 234,  522 => 229,  520 => 228,  517 => 227,  512 => 224,  508 => 222,  503 => 219,  492 => 212,  489 => 211,  487 => 210,  484 => 209,  480 => 207,  469 => 200,  466 => 199,  464 => 198,  461 => 197,  457 => 195,  446 => 188,  443 => 187,  441 => 186,  438 => 185,  434 => 183,  423 => 176,  420 => 175,  418 => 174,  415 => 173,  411 => 171,  406 => 168,  397 => 163,  394 => 162,  392 => 161,  389 => 160,  385 => 158,  376 => 153,  373 => 152,  371 => 151,  368 => 150,  363 => 147,  354 => 142,  351 => 141,  349 => 140,  346 => 139,  341 => 136,  332 => 131,  329 => 130,  327 => 129,  324 => 128,  322 => 127,  319 => 126,  317 => 125,  314 => 124,  305 => 123,  293 => 119,  286 => 114,  284 => 113,  281 => 112,  276 => 109,  272 => 107,  267 => 104,  256 => 97,  253 => 96,  251 => 95,  248 => 94,  244 => 92,  233 => 85,  230 => 84,  228 => 83,  225 => 82,  221 => 80,  210 => 73,  207 => 72,  205 => 71,  202 => 70,  198 => 68,  187 => 61,  184 => 60,  182 => 59,  179 => 58,  175 => 56,  170 => 53,  161 => 48,  158 => 47,  156 => 46,  153 => 45,  149 => 43,  140 => 38,  137 => 37,  135 => 36,  132 => 35,  127 => 32,  118 => 27,  115 => 26,  113 => 25,  110 => 24,  105 => 21,  96 => 16,  93 => 15,  91 => 14,  88 => 13,  86 => 12,  83 => 11,  81 => 10,  72 => 9,  60 => 6,  54 => 4,  45 => 3,  11 => 1,);
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

    <link href=\"{{ asset('css/product.css') }}\" rel=\"stylesheet\" />
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



{% block menuLateral %}
<!-- No header, and the drawer stays open on larger screens (fixed drawer). -->

  {% if app.user %}

        <div class=\"mdl-layout mdl-js-layout mdl-layout--fixed-drawer\" style=\"height:100%\">
          {% if app.user.pais == \"US\"%}
                   
            <div class=\"mdl-layout__drawer lateral\">
              <span class=\"mdl-layout-title\" style=\"text-align:left\">Category</span>
              <nav class=\"mdl-navigation lateral\">
          
                  <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option \" id=\"todos\">
                    All
                  </button>
                  <br>
                  
                  <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option \" id=\"bonsai\">
                    Bonsai
                  </button>
                  <br>
                  
                  <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option\" id=\"maceta\">
                    Pot
                  </button>
                  <br>
                  
                  <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option\" id=\"accesorio\">
                    Accesories
                  </button>
                  <br>
          
              </nav>
            </div>          
          {% endif %}
          
          {% if app.user.pais == \"EN\"%}
                    
            <div class=\"mdl-layout__drawer lateral\">
              <span class=\"mdl-layout-title\" style=\"text-align:left\">Category</span>
              <nav class=\"mdl-navigation lateral\">
          
                  <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option \" id=\"todos\">
                    All
                  </button>
                  <br>
                  
                  <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option \" id=\"bonsai\">
                    Bonsai
                  </button>
                  <br>
                  
                  <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option\" id=\"maceta\">
                    Pot
                  </button>
                  <br>
                  
                  <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option\" id=\"accesorio\">
                    Accesories
                  </button>
                  <br>
          
              </nav>
            </div>          
          {% endif %}
          
          {% if app.user.pais == \"VE\"%}
                   
            <div class=\"mdl-layout__drawer lateral\">
              <span class=\"mdl-layout-title\" style=\"text-align:left\">Categoría</span>
              <nav class=\"mdl-navigation lateral\">
          
                  <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option \" id=\"todos\">
                    Todos
                  </button>
                  <br>
                  
                  <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option \" id=\"bonsai\">
                    Bonsai
                  </button>
                  <br>
                  
                  <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option\" id=\"maceta\">
                    Maceta
                  </button>
                  <br>
                  
                  <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option\" id=\"accesorio\">
                    Accesorios
                  </button>
                  <br>
          
              </nav>
            </div>          
          {% endif %}
          
          {% if app.user.pais == \"CO\"%}
                   
            <div class=\"mdl-layout__drawer lateral\">
              <span class=\"mdl-layout-title\" style=\"text-align:left\">Categoría</span>
              <nav class=\"mdl-navigation lateral\">
          
                  <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option \" id=\"todos\">
                    Todos
                  </button>
                  <br>
                  
                  <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option \" id=\"bonsai\">
                    Bonsai
                  </button>
                  <br>
                  
                  <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option\" id=\"maceta\">
                    Maceta
                  </button>
                  <br>
                  
                  <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option\" id=\"accesorio\">
                    Accesorios
                  </button>
                  <br>
          
              </nav>
            </div>          
          {% endif %}
  
  {% else %}
  
  <div class=\"mdl-layout mdl-js-layout mdl-layout--fixed-drawer\" style=\"height:100%\">
           
    <div class=\"mdl-layout__drawer lateral\">
      <span class=\"mdl-layout-title\" style=\"text-align:left\">Category</span>
      <nav class=\"mdl-navigation lateral\">
  
          <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option \" id=\"todos\">
            All
          </button>
          <br>
          
          <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option \" id=\"bonsai\">
            Bonsai
          </button>
          <br>
          
          <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option\" id=\"maceta\">
            Pot
          </button>
          <br>
          
          <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect option\" id=\"accesorio\">
            Accesories
          </button>
          <br>
  
      </nav>
    </div>          
  
  
  
  
  
  
  {% endif %}
  
</div>

<script>
  // ESTA FUNCION VIENE DEL ATRIBUTO ONLOAD DEL BASE.HTML.TWIG
  function cargando(){
    \$(\"#bonsaiprod\").hide();
    \$(\"#macetaprod\").hide();
    \$(\"#accesorioprod\").hide();
    \$(\"#allproducts\").show();
  }
  
  \$(\"#todos\").click(function(){
      \$(\"#bonsaiprod\").hide();
      \$(\"#macetaprod\").hide();
      \$(\"#accesorioprod\").hide();
      \$(\"#allproducts\").show();
  });
  
  \$(\"#bonsai\").click(function(){
      \$(\"#macetaprod\").hide();
      \$(\"#accesorioprod\").hide();
      \$(\"#allproducts\").hide();
      \$(\"#bonsaiprod\").show();
  });
  
  \$(\"#maceta\").click(function(){
      \$(\"#bonsaiprod\").hide();
      \$(\"#accesorioprod\").hide();
      \$(\"#allproducts\").hide();
      \$(\"#macetaprod\").show();
  });
  
  \$(\"#accesorio\").click(function(){
      \$(\"#bonsaiprod\").hide();
      \$(\"#allproducts\").hide();
      \$(\"#macetaprod\").hide();
      \$(\"#accesorioprod\").show();
  });
  
</script>

{% endblock %}


{% block contenido %}

  {% if app.user %}

  <dialog class=\"mdl-dialog dialogLogin\">
    <h5 class=\"mdl-dialog__title\" style=\"font-size:25px; align:center\">Inicio de Sesión</h5>
    <div class=\"mdl-dialog__content\">
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
    </div>
    <div class=\"mdl-dialog__actions\">
      <button form=\"form-login\" type=\"submit\" class=\"mdl-button\">Login</button>
      <button type=\"button\" class=\"mdl-button close\">Cancelar</button>
    </div>
  </dialog>
  <script>
    var dialog = document.querySelector('.dialogLogin');
    var showDialogButton = document.querySelector('.show-dialogLogin');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    showDialogButton.addEventListener('click', function() {
      dialog.showModal();
    });
    dialog.querySelector('.close').addEventListener('click', function() {
      dialog.close();
    });
    
  </script>
  
  

  {% if products|length == 0  %}
  <h3 style=\"text-align: right\">No hay productos... </h3>
  {% endif %}

  <div class=\"row text-center\" style=\"padding-left:100px; padding-top:50px; padding-bottom: 50px\" id=\"allproducts\">
      {% for product in products %}
        <style> 
          .mdl-dialog {
            border: none;
            box-shadow: 0 9px 46px 8px rgba(0,0,0,.14), 0 11px 15px -7px rgba(0,0,0,.12), 0 24px 38px 3px rgba(0,0,0,.2);
            width: 60%;
          }
          .mdl-navigation.lateral{
            background-color:white;
          }
          .mdl-layout__drawer.lateral{
              background-color:white;
              width: 175px;
              height:55%;
              border-right-style: none;
              border-right-width: 0px;
              border-bottom-style: none;
              border-bottom-width: 0px;
              border-bottom-color: transparent;
              
          }
          .mdl-button.mdl-js-button.mdl-js-ripple-effect:hover{
            background-color: #67daff;
          }
          .mdl-dialog__actions--full-width>* {
              height: 48px;
              -webkit-flex: 0 0 100%;
              -ms-flex: 0 0 100%;
              flex: 0 0 100%;
              padding-right: 0px;
              margin-right: 0;
              /* text-align: right; */
          }
      
      </style>
          {#componente que contiene cada producto#}
          
          {#VENEZUELA#}
          {% if app.user.pais == \"VE\" %}
            {#  <form action=\"{{ path('pais') }}\" method=\"GET\" id=\"formPais\">#}
            {#  <select class=\"form-control\" name=\"seleccion\" id=\"selPais\">#}
            {#    <option value=\"VE\">Venezuela</a>#}
            {#    <option value=\"US\">United States</a>#}
            {#    <option value=\"EN\">England</a>#}
            {#    <option selected value=\"CO\">Colombia</a>#}
            {#  </select>#}
            {#</form>#}

            <div id=\"{{product.id}}\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
              <div  class=\"filterDiv {{product.categoria}}\">
              {#link del producto#}
                <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
              {#imagen del producto#}
              <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover;\" src=\"{{product.link}}\" alt=\"\">
              {#informacion cuando se hace hover#}
              <div class=\"descripcionProducto\">
                <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
                  <h4 class=\"producto text{{product.id}}\">{{product.nombre}}</h4>
                  <h6 class=\"producto price{{product.id}}\">{{product.precio*35000}} BsF.</h6>
                </a>
              </div>
              <br>
              <br>
              
              {#AQUI ABRE EL DIALOG CUANDO SE HACE CLICK EN UN PRODUCTO #}
              
              <dialog class=\"mdl-dialog show-dialog{{product.id}}\">
                  <div class=\"mdl-dialog__content\">
                     
                      <div class=\"row\">
                      {#ESTA SECCION TIENE LA FOTO DEL PRODUCTO#}
                      <section class=\"foto col-lg-6 col-md-6\">
                        <img class=\"img-fluid\" src=\"{{product.link}}\" alt=\"\">  
                      </section>
                      {#ESTA SECCION TIENA LA INFORMACION DEL PRODUCTO#}
                      <section class=\"col-lg-6 col-md-6 mb-12\">
                        <h4 class=\"producto text-center center-text\">{{product.nombre}}</h4>
                        <h6 class=\"producto text-center center-text\">Precio: {{product.precio*35000}} BsF</h6>
                        <h6 class=\"producto text-center center-text\">Descripcion: {{product.Descripcion}}</h6>
                        {#AQUI ESTAN LOS BOTONES SOBRE LAS ACCIONES DE CADA PRODUCTO#}
                        <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                          
                          {% if not is_granted('IS_AUTHENTICATED_FULLY')%}
                          <p>Inicie Sesion para empezar a agregar productos a su Carro de Compras!</p>
                          <button type=\"button\" class=\"mdl-button close{{product.id}}\">Cerrar <i class=\"material-icons\">close</i></button>
                          {% endif %}
                          
                          {% if is_granted('IS_AUTHENTICATED_FULLY')%}
                            <hr style=\"height:10px\">                            
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarProducto' , { 'id' : product.id}) }}\" method=\"POST\">
                              <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Agregar al Carro de Compras<i class=\"material-icons\">add_shopping_cart</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarWishlist' , { 'id' : product.id}) }}\" method=\"POST\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Agregar a la wishlist <i class=\"material-icons\">list</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close{{product.id}}\">Cerrar <i class=\"material-icons\">close</i></button>
                            </form>
                          {% endif %}
                        </div>
                      </section>
                      </div>
                    
                  </div>
                </dialog>
                
              {#SCRIPT QUE SE CORRE PARA ABRIR EL DIALOG  #}
              <script>
                // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                var dialog{{product.id}} = document.querySelector('.show-dialog{{product.id}}');
                // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                var showModalButton{{product.id}} = document.querySelector('.show-modal{{product.id}}'); 
                // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                var showTextButton{{product.id}} = document.querySelector('.text{{product.id}}');
                // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                var showPriceButton{{product.id}} = document.querySelector('.price{{product.id}}');
                
                if (!dialog{{product.id}}.showModal){
                  dialogPolyfill.registerDialog(dialog{{product.id}});
                }
                // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                showModalButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                showTextButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                showPriceButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CERRAR EL DIALOG
                dialog{{product.id}}.querySelector('.close{{product.id}}').addEventListener('click', function() {
                  dialog{{product.id}}.close();
                });
              </script> 
            </a>
              </div>
            </div>
      
          {% endif %}
          
          {#ESTADOS UNIDOS#}
          {% if app.user.pais == \"US\" %}
            {#  <form action=\"{{ path('pais') }}\" method=\"GET\" id=\"formPais\">#}
            {#  <select class=\"form-control\" name=\"seleccion\" id=\"selPais\">#}
            {#    <option value=\"VE\">Venezuela</a>#}
            {#    <option value=\"US\">United States</a>#}
            {#    <option value=\"EN\">England</a>#}
            {#    <option selected value=\"CO\">Colombia</a>#}
            {#  </select>#}
            {#</form>#}

            <div id=\"{{product.id}}\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
            <div  class=\"filterDiv {{product.categoria}}\">
            {#link del producto#}
            <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
              {#imagen del producto#}
              <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"{{product.link}}\" alt=\"\">
              {#informacion cuando se hace hover#}
              <div class=\"descripcionProducto\">
                <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
                  <h4 class=\"producto text{{product.id}}\">{{product.nombre}}</h4>
                  <h6 class=\"producto price{{product.id}}\">{{product.precio}} \$.</h6>
                </a>
              </div>
              <br>
              <br>
              
              {#AQUI ABRE EL DIALOG CUANDO SE HACE CLICK EN UN PRODUCTO #}
              
              <dialog class=\"mdl-dialog show-dialog{{product.id}}\">
                  <div class=\"mdl-dialog__content\">
                     
                      <div class=\"row\">
                      {#ESTA SECCION TIENE LA FOTO DEL PRODUCTO#}
                      <section class=\"foto col-lg-6 col-md-6\">
                        <img class=\"img-fluid\" src=\"{{product.link}}\" alt=\"\">  
                      </section>
                      {#ESTA SECCION TIENA LA INFORMACION DEL PRODUCTO#}
                      <section class=\"col-lg-6 col-md-6 mb-12\">
                        <h4 class=\"producto text-center center-text\">{{product.nombre}}</h4>
                        <h6 class=\"producto text-center center-text\">Price: {{product.precio}} \$</h6>
                        <h6 class=\"producto text-center center-text\">Description: {{product.Descripcion}}</h6>
                        {#AQUI ESTAN LOS BOTONES SOBRE LAS ACCIONES DE CADA PRODUCTO#}
                        <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                          
                          {% if not is_granted('IS_AUTHENTICATED_FULLY')%}
                          <p>You have to sign in to add products to your shopping cart!</p>
                          <button type=\"button\" class=\"mdl-button close{{product.id}}\">Cerrar <i class=\"material-icons\">close</i></button>
                          {% endif %}
                          
                          {% if is_granted('IS_AUTHENTICATED_FULLY')%}
                            <hr style=\"height:10px\">                            
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarProducto' , { 'id' : product.id}) }}\" method=\"POST\">
                              <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Add to Shopping Cart<i class=\"material-icons\">add_shopping_cart</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarWishlist' , { 'id' : product.id}) }}\" method=\"POST\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Add To WishList <i class=\"material-icons\">list</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close{{product.id}}\">Close <i class=\"material-icons\">close</i></button>
                            </form>
                          {% endif %}
                        </div>
                      </section>
                      </div>
                    
                  </div>
                </dialog>
                
              {#SCRIPT QUE SE CORRE PARA ABRIR EL DIALOG  #}
              <script>
                // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                var dialog{{product.id}} = document.querySelector('.show-dialog{{product.id}}');
                // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                var showModalButton{{product.id}} = document.querySelector('.show-modal{{product.id}}'); 
                // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                var showTextButton{{product.id}} = document.querySelector('.text{{product.id}}');
                // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                var showPriceButton{{product.id}} = document.querySelector('.price{{product.id}}');
                
                if (!dialog{{product.id}}.showModal){
                  dialogPolyfill.registerDialog(dialog{{product.id}});
                }
                // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                showModalButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                showTextButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                showPriceButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CERRAR EL DIALOG
                dialog{{product.id}}.querySelector('.close{{product.id}}').addEventListener('click', function() {
                  dialog{{product.id}}.close();
                });
              </script> 
            </a>
          </div>
      </div>
      
          {% endif %}
          
          
          {#INGLATERRA#}
          {% if app.user.pais == \"EN\" %}
            {#  <form action=\"{{ path('pais') }}\" method=\"GET\" id=\"formPais\">#}
            {#  <select class=\"form-control\" name=\"seleccion\" id=\"selPais\">#}
            {#    <option value=\"VE\">Venezuela</a>#}
            {#    <option value=\"US\">United States</a>#}
            {#    <option value=\"EN\">England</a>#}
            {#    <option selected value=\"CO\">Colombia</a>#}
            {#  </select>#}
            {#</form>#}

            <div id=\"{{product.id}}\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
              <div  class=\"filterDiv {{product.categoria}}\">
            {#link del producto#}
            <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
              {#imagen del producto#}
              <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"{{product.link}}\" alt=\"\">
              {#informacion cuando se hace hover#}
              <div class=\"descripcionProducto\">
                <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
                  <h4 class=\"producto text{{product.id}}\">{{product.nombre}}</h4>
                  <h6 class=\"producto price{{product.id}}\">{{product.precio*0.76}} £.</h6>
                </a>
              </div>
              <br>
              <br>
              
              {#AQUI ABRE EL DIALOG CUANDO SE HACE CLICK EN UN PRODUCTO #}
              
              <dialog class=\"mdl-dialog show-dialog{{product.id}}\">
                  <div class=\"mdl-dialog__content\">
                     
                      <div class=\"row\">
                      {#ESTA SECCION TIENE LA FOTO DEL PRODUCTO#}
                      <section class=\"foto col-lg-6 col-md-6\">
                        <img class=\"img-fluid\" src=\"{{product.link}}\" alt=\"\">  
                      </section>
                      {#ESTA SECCION TIENA LA INFORMACION DEL PRODUCTO#}
                      <section class=\"col-lg-6 col-md-6 mb-12\">
                        <h4 class=\"producto text-center center-text\">{{product.nombre}}</h4>
                        <h6 class=\"producto text-center center-text\">Price: {{product.precio*0.76}} £</h6>
                        <h6 class=\"producto text-center center-text\">Description: {{product.Descripcion}}</h6>
                        {#AQUI ESTAN LOS BOTONES SOBRE LAS ACCIONES DE CADA PRODUCTO#}
                        <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                          
                          {% if not is_granted('IS_AUTHENTICATED_FULLY')%}
                          <p>You have to sign in to add products to your shopping cart!</p>
                          <button type=\"button\" class=\"mdl-button close{{product.id}}\">Cerrar <i class=\"material-icons\">close</i></button>
                          {% endif %}
                          
                          {% if is_granted('IS_AUTHENTICATED_FULLY')%}
                            <hr style=\"height:10px\">                            
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarProducto' , { 'id' : product.id}) }}\" method=\"POST\">
                              <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Add to Shopping Cart<i class=\"material-icons\">add_shopping_cart</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarWishlist' , { 'id' : product.id}) }}\" method=\"POST\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Add To WishList <i class=\"material-icons\">list</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close{{product.id}}\">Close <i class=\"material-icons\">close</i></button>
                            </form>
                          {% endif %}
                        </div>
                      </section>
                      </div>
                    
                  </div>
                </dialog>
                
              {#SCRIPT QUE SE CORRE PARA ABRIR EL DIALOG  #}
              <script>
                // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                var dialog{{product.id}} = document.querySelector('.show-dialog{{product.id}}');
                // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                var showModalButton{{product.id}} = document.querySelector('.show-modal{{product.id}}'); 
                // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                var showTextButton{{product.id}} = document.querySelector('.text{{product.id}}');
                // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                var showPriceButton{{product.id}} = document.querySelector('.price{{product.id}}');
                
                if (!dialog{{product.id}}.showModal){
                  dialogPolyfill.registerDialog(dialog{{product.id}});
                }
                // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                showModalButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                showTextButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                showPriceButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CERRAR EL DIALOG
                dialog{{product.id}}.querySelector('.close{{product.id}}').addEventListener('click', function() {
                  dialog{{product.id}}.close();
                });
              </script> 
            </a>
          </div>
            </div>
      
          {% endif %}
          
          
          {#COLOMBIA#}
          {% if app.user.pais == \"CO\" %}
            {#  <form action=\"{{ path('pais') }}\" method=\"GET\" id=\"formPais\">#}
            {#  <select class=\"form-control\" name=\"seleccion\" id=\"selPais\">#}
            {#    <option value=\"VE\">Venezuela</a>#}
            {#    <option value=\"US\">United States</a>#}
            {#    <option value=\"EN\">England</a>#}
            {#    <option selected value=\"CO\">Colombia</a>#}
            {#  </select>#}
            {#</form>#}

            <div id=\"{{product.id}}\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
              <div  class=\"filterDiv {{product.categoria}}\">
            {#link del producto#}
            <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
              {#imagen del producto#}
              <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"{{product.link}}\" alt=\"\">
              {#informacion cuando se hace hover#}
              <div class=\"descripcionProducto\">
                <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
                  <h4 class=\"producto text{{product.id}}\">{{product.nombre}}</h4>
                  <h6 class=\"producto price{{product.id}}\">{{product.precio*2977.99}} COP</h6>
                </a>
              </div>
              <br>
              <br>
              
              {#AQUI ABRE EL DIALOG CUANDO SE HACE CLICK EN UN PRODUCTO #}
              
              <dialog class=\"mdl-dialog show-dialog{{product.id}}\">
                  <div class=\"mdl-dialog__content\">
                     
                      <div class=\"row\">
                      {#ESTA SECCION TIENE LA FOTO DEL PRODUCTO#}
                      <section class=\"foto col-lg-6 col-md-6\">
                        <img class=\"img-fluid\" src=\"{{product.link}}\" alt=\"\">  
                      </section>
                      {#ESTA SECCION TIENA LA INFORMACION DEL PRODUCTO#}
                      <section class=\"col-lg-6 col-md-6 mb-12\">
                        <h4 class=\"producto text-center center-text\">{{product.nombre}}</h4>
                        <h6 class=\"producto text-center center-text\">Precio: {{product.precio*2977.99}} COP</h6>
                        <h6 class=\"producto text-center center-text\">Descripcion: {{product.Descripcion}}</h6>
                        {#AQUI ESTAN LOS BOTONES SOBRE LAS ACCIONES DE CADA PRODUCTO#}
                        <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                          
                          {% if not is_granted('IS_AUTHENTICATED_FULLY')%}
                          <p>Inicie Sesion para empezar a agregar productos a su Carro de Compras!</p>
                          <button type=\"button\" class=\"mdl-button close{{product.id}}\">Cerrar <i class=\"material-icons\">close</i></button>
                          {% endif %}
                          
                          {% if is_granted('IS_AUTHENTICATED_FULLY')%}
                            <hr style=\"height:10px\">                            
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarProducto' , { 'id' : product.id}) }}\" method=\"POST\">
                              <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Agregar al Carro de Compras<i class=\"material-icons\">add_shopping_cart</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarWishlist' , { 'id' : product.id}) }}\" method=\"POST\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Agregar a la wishlist <i class=\"material-icons\">list</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close{{product.id}}\">Cerrar <i class=\"material-icons\">close</i></button>
                            </form>
                          {% endif %}
                        </div>
                      </section>
                      </div>
                    
                  </div>
                </dialog>
                
              {#SCRIPT QUE SE CORRE PARA ABRIR EL DIALOG  #}
              <script>
                // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                var dialog{{product.id}} = document.querySelector('.show-dialog{{product.id}}');
                // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                var showModalButton{{product.id}} = document.querySelector('.show-modal{{product.id}}'); 
                // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                var showTextButton{{product.id}} = document.querySelector('.text{{product.id}}');
                // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                var showPriceButton{{product.id}} = document.querySelector('.price{{product.id}}');
                
                if (!dialog{{product.id}}.showModal){
                  dialogPolyfill.registerDialog(dialog{{product.id}});
                }
                // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                showModalButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                showTextButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                showPriceButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CERRAR EL DIALOG
                dialog{{product.id}}.querySelector('.close{{product.id}}').addEventListener('click', function() {
                  dialog{{product.id}}.close();
                });
              </script> 
            </a>
          </div>
            </div>
      
          {% endif %}
      
      {% endfor %}
      

  </div>
  
  <div class=\"row text-center\" style=\"padding-left:100px; padding-top:50px; padding-bottom: 50px\" id=\"bonsaiprod\">
      {% for product in products %}
        {% if product.categoria == 'bonsai'  %}
        <style> 
      .mdl-dialog {
        border: none;
        box-shadow: 0 9px 46px 8px rgba(0,0,0,.14), 0 11px 15px -7px rgba(0,0,0,.12), 0 24px 38px 3px rgba(0,0,0,.2);
        width: 60%;
      }
      .mdl-navigation.lateral{
        
        background-color:white;
    }
      .mdl-layout__drawer.lateral{
          background-color:white;
          width: 175px;
          height:55%;
          border-right-style: none;
          border-right-width: 0px;
          border-bottom-style: none;
          border-bottom-width: 0px;
          border-bottom-color: transparent;
          
      }
      .mdl-button.mdl-js-button.mdl-js-ripple-effect:hover{
        
        background-color: #67daff;
         
        
    }
    
    </style>
          {#componente que contiene cada producto#}
          
          {#VENEZUELA#}
          {% if app.user.pais == \"VE\" %}
            {#  <form action=\"{{ path('pais') }}\" method=\"GET\" id=\"formPais\">#}
            {#  <select class=\"form-control\" name=\"seleccion\" id=\"selPais\">#}
            {#    <option value=\"VE\">Venezuela</a>#}
            {#    <option value=\"US\">United States</a>#}
            {#    <option value=\"EN\">England</a>#}
            {#    <option selected value=\"CO\">Colombia</a>#}
            {#  </select>#}
            {#</form>#}

            <div id=\"{{product.id}}\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
              <div  class=\"filterDiv {{product.categoria}}\">
              {#link del producto#}
                <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
              {#imagen del producto#}
              <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"{{product.link}}\" alt=\"\">
              {#informacion cuando se hace hover#}
              <div class=\"descripcionProducto\">
                <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
                  <h4 class=\"producto text{{product.id}}\">{{product.nombre}}</h4>
                  <h6 class=\"producto price{{product.id}}\">{{product.precio*35000}} BsF.</h6>
                </a>
              </div>
              <br>
              <br>
              
              {#AQUI ABRE EL DIALOG CUANDO SE HACE CLICK EN UN PRODUCTO #}
              
              <dialog class=\"mdl-dialog show-dialog{{product.id}}\">
                  <div class=\"mdl-dialog__content\">
                     
                      <div class=\"row\">
                      {#ESTA SECCION TIENE LA FOTO DEL PRODUCTO#}
                      <section class=\"foto col-lg-6 col-md-6\">
                        <img class=\"img-fluid\" src=\"{{product.link}}\" alt=\"\">  
                      </section>
                      {#ESTA SECCION TIENA LA INFORMACION DEL PRODUCTO#}
                      <section class=\"col-lg-6 col-md-6 mb-12\">
                        <h4 class=\"producto text-center center-text\">{{product.nombre}}</h4>
                        <h6 class=\"producto text-center center-text\">Precio: {{product.precio*35000}} BsF</h6>
                        <h6 class=\"producto text-center center-text\">Descripcion: {{product.Descripcion}}</h6>
                        {#AQUI ESTAN LOS BOTONES SOBRE LAS ACCIONES DE CADA PRODUCTO#}
                        <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                          
                          {% if not is_granted('IS_AUTHENTICATED_FULLY')%}
                          <p>Inicie Sesion para empezar a agregar productos a su Carro de Compras!</p>
                          <button type=\"button\" class=\"mdl-button close{{product.id}}\">Cerrar <i class=\"material-icons\">close</i></button>
                          {% endif %}
                          
                          {% if is_granted('IS_AUTHENTICATED_FULLY')%}
                            <hr style=\"height:10px\">                            
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarProducto' , { 'id' : product.id}) }}\" method=\"POST\">
                              <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Agregar al Carro de Compras<i class=\"material-icons\">add_shopping_cart</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarWishlist' , { 'id' : product.id}) }}\" method=\"POST\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Agregar a la wishlist <i class=\"material-icons\">list</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close{{product.id}}\">Cerrar <i class=\"material-icons\">close</i></button>
                            </form>
                          {% endif %}
                        </div>
                      </section>
                      </div>
                    
                  </div>
                </dialog>
                
              {#SCRIPT QUE SE CORRE PARA ABRIR EL DIALOG  #}
              <script>
                // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                var dialog{{product.id}} = document.querySelector('.show-dialog{{product.id}}');
                // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                var showModalButton{{product.id}} = document.querySelector('.show-modal{{product.id}}'); 
                // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                var showTextButton{{product.id}} = document.querySelector('.text{{product.id}}');
                // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                var showPriceButton{{product.id}} = document.querySelector('.price{{product.id}}');
                
                if (!dialog{{product.id}}.showModal){
                  dialogPolyfill.registerDialog(dialog{{product.id}});
                }
                // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                showModalButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                showTextButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                showPriceButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CERRAR EL DIALOG
                dialog{{product.id}}.querySelector('.close{{product.id}}').addEventListener('click', function() {
                  dialog{{product.id}}.close();
                });
              </script> 
            </a>
              </div>
            </div>
      
          {% endif %}
          
          {#ESTADOS UNIDOS#}
          {% if app.user.pais == \"US\" %}
            {#  <form action=\"{{ path('pais') }}\" method=\"GET\" id=\"formPais\">#}
            {#  <select class=\"form-control\" name=\"seleccion\" id=\"selPais\">#}
            {#    <option value=\"VE\">Venezuela</a>#}
            {#    <option value=\"US\">United States</a>#}
            {#    <option value=\"EN\">England</a>#}
            {#    <option selected value=\"CO\">Colombia</a>#}
            {#  </select>#}
            {#</form>#}

            <div id=\"{{product.id}}\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
            <div  class=\"filterDiv {{product.categoria}}\">
            {#link del producto#}
            <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
              {#imagen del producto#}
              <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"{{product.link}}\" alt=\"\">
              {#informacion cuando se hace hover#}
              <div class=\"descripcionProducto\">
                <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
                  <h4 class=\"producto text{{product.id}}\">{{product.nombre}}</h4>
                  <h6 class=\"producto price{{product.id}}\">{{product.precio}} \$.</h6>
                </a>
              </div>
              <br>
              <br>
              
              {#AQUI ABRE EL DIALOG CUANDO SE HACE CLICK EN UN PRODUCTO #}
              
              <dialog class=\"mdl-dialog show-dialog{{product.id}}\">
                  <div class=\"mdl-dialog__content\">
                     
                      <div class=\"row\">
                      {#ESTA SECCION TIENE LA FOTO DEL PRODUCTO#}
                      <section class=\"foto col-lg-6 col-md-6\">
                        <img class=\"img-fluid\" src=\"{{product.link}}\" alt=\"\">  
                      </section>
                      {#ESTA SECCION TIENA LA INFORMACION DEL PRODUCTO#}
                      <section class=\"col-lg-6 col-md-6 mb-12\">
                        <h4 class=\"producto text-center center-text\">{{product.nombre}}</h4>
                        <h6 class=\"producto text-center center-text\">Price: {{product.precio}} \$</h6>
                        <h6 class=\"producto text-center center-text\">Description: {{product.Descripcion}}</h6>
                        {#AQUI ESTAN LOS BOTONES SOBRE LAS ACCIONES DE CADA PRODUCTO#}
                        <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                          
                          {% if not is_granted('IS_AUTHENTICATED_FULLY')%}
                          <p>You have to sign in to add products to your shopping cart!</p>
                          <button type=\"button\" class=\"mdl-button close{{product.id}}\">Cerrar <i class=\"material-icons\">close</i></button>
                          {% endif %}
                          
                          {% if is_granted('IS_AUTHENTICATED_FULLY')%}
                            <hr style=\"height:10px\">                            
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarProducto' , { 'id' : product.id}) }}\" method=\"POST\">
                              <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Add to Shopping Cart<i class=\"material-icons\">add_shopping_cart</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarWishlist' , { 'id' : product.id}) }}\" method=\"POST\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Add To WishList <i class=\"material-icons\">list</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close{{product.id}}\">Close <i class=\"material-icons\">close</i></button>
                            </form>
                          {% endif %}
                        </div>
                      </section>
                      </div>
                    
                  </div>
                </dialog>
                
              {#SCRIPT QUE SE CORRE PARA ABRIR EL DIALOG  #}
              <script>
                // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                var dialog{{product.id}} = document.querySelector('.show-dialog{{product.id}}');
                // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                var showModalButton{{product.id}} = document.querySelector('.show-modal{{product.id}}'); 
                // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                var showTextButton{{product.id}} = document.querySelector('.text{{product.id}}');
                // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                var showPriceButton{{product.id}} = document.querySelector('.price{{product.id}}');
                
                if (!dialog{{product.id}}.showModal){
                  dialogPolyfill.registerDialog(dialog{{product.id}});
                }
                // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                showModalButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                showTextButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                showPriceButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CERRAR EL DIALOG
                dialog{{product.id}}.querySelector('.close{{product.id}}').addEventListener('click', function() {
                  dialog{{product.id}}.close();
                });
              </script> 
            </a>
          </div>
      </div>
      
          {% endif %}
          
          
          {#INGLATERRA#}
          {% if app.user.pais == \"EN\" %}
            {#  <form action=\"{{ path('pais') }}\" method=\"GET\" id=\"formPais\">#}
            {#  <select class=\"form-control\" name=\"seleccion\" id=\"selPais\">#}
            {#    <option value=\"VE\">Venezuela</a>#}
            {#    <option value=\"US\">United States</a>#}
            {#    <option value=\"EN\">England</a>#}
            {#    <option selected value=\"CO\">Colombia</a>#}
            {#  </select>#}
            {#</form>#}

            <div id=\"{{product.id}}\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
              <div  class=\"filterDiv {{product.categoria}}\">
            {#link del producto#}
            <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
              {#imagen del producto#}
              <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"{{product.link}}\" alt=\"\">
              {#informacion cuando se hace hover#}
              <div class=\"descripcionProducto\">
                <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
                  <h4 class=\"producto text{{product.id}}\">{{product.nombre}}</h4>
                  <h6 class=\"producto price{{product.id}}\">{{product.precio*0.76}} £.</h6>
                </a>
              </div>
              <br>
              <br>
              
              {#AQUI ABRE EL DIALOG CUANDO SE HACE CLICK EN UN PRODUCTO #}
              
              <dialog class=\"mdl-dialog show-dialog{{product.id}}\">
                  <div class=\"mdl-dialog__content\">
                     
                      <div class=\"row\">
                      {#ESTA SECCION TIENE LA FOTO DEL PRODUCTO#}
                      <section class=\"foto col-lg-6 col-md-6\">
                        <img class=\"img-fluid\" src=\"{{product.link}}\" alt=\"\">  
                      </section>
                      {#ESTA SECCION TIENA LA INFORMACION DEL PRODUCTO#}
                      <section class=\"col-lg-6 col-md-6 mb-12\">
                        <h4 class=\"producto text-center center-text\">{{product.nombre}}</h4>
                        <h6 class=\"producto text-center center-text\">Price: {{product.precio*0.76}} £</h6>
                        <h6 class=\"producto text-center center-text\">Description: {{product.Descripcion}}</h6>
                        {#AQUI ESTAN LOS BOTONES SOBRE LAS ACCIONES DE CADA PRODUCTO#}
                        <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                          
                          {% if not is_granted('IS_AUTHENTICATED_FULLY')%}
                          <p>You have to sign in to add products to your shopping cart!</p>
                          <button type=\"button\" class=\"mdl-button close{{product.id}}\">Cerrar <i class=\"material-icons\">close</i></button>
                          {% endif %}
                          
                          {% if is_granted('IS_AUTHENTICATED_FULLY')%}
                            <hr style=\"height:10px\">                            
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarProducto' , { 'id' : product.id}) }}\" method=\"POST\">
                              <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Add to Shopping Cart<i class=\"material-icons\">add_shopping_cart</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarWishlist' , { 'id' : product.id}) }}\" method=\"POST\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Add To WishList <i class=\"material-icons\">list</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close{{product.id}}\">Close <i class=\"material-icons\">close</i></button>
                            </form>
                          {% endif %}
                        </div>
                      </section>
                      </div>
                    
                  </div>
                </dialog>
                
              {#SCRIPT QUE SE CORRE PARA ABRIR EL DIALOG  #}
              <script>
                // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                var dialog{{product.id}} = document.querySelector('.show-dialog{{product.id}}');
                // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                var showModalButton{{product.id}} = document.querySelector('.show-modal{{product.id}}'); 
                // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                var showTextButton{{product.id}} = document.querySelector('.text{{product.id}}');
                // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                var showPriceButton{{product.id}} = document.querySelector('.price{{product.id}}');
                
                if (!dialog{{product.id}}.showModal){
                  dialogPolyfill.registerDialog(dialog{{product.id}});
                }
                // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                showModalButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                showTextButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                showPriceButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CERRAR EL DIALOG
                dialog{{product.id}}.querySelector('.close{{product.id}}').addEventListener('click', function() {
                  dialog{{product.id}}.close();
                });
              </script> 
            </a>
          </div>
            </div>
      
          {% endif %}
          
          
          {#COLOMBIA#}
          {% if app.user.pais == \"CO\" %}
            {#  <form action=\"{{ path('pais') }}\" method=\"GET\" id=\"formPais\">#}
            {#  <select class=\"form-control\" name=\"seleccion\" id=\"selPais\">#}
            {#    <option value=\"VE\">Venezuela</a>#}
            {#    <option value=\"US\">United States</a>#}
            {#    <option value=\"EN\">England</a>#}
            {#    <option selected value=\"CO\">Colombia</a>#}
            {#  </select>#}
            {#</form>#}

            <div id=\"{{product.id}}\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
              <div  class=\"filterDiv {{product.categoria}}\">
            {#link del producto#}
            <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
              {#imagen del producto#}
              <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"{{product.link}}\" alt=\"\">
              {#informacion cuando se hace hover#}
              <div class=\"descripcionProducto\">
                <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
                  <h4 class=\"producto text{{product.id}}\">{{product.nombre}}</h4>
                  <h6 class=\"producto price{{product.id}}\">{{product.precio*2977.99}} COP</h6>
                </a>
              </div>
              <br>
              <br>
              
              {#AQUI ABRE EL DIALOG CUANDO SE HACE CLICK EN UN PRODUCTO #}
              
              <dialog class=\"mdl-dialog show-dialog{{product.id}}\">
                  <div class=\"mdl-dialog__content\">
                     
                      <div class=\"row\">
                      {#ESTA SECCION TIENE LA FOTO DEL PRODUCTO#}
                      <section class=\"foto col-lg-6 col-md-6\">
                        <img class=\"img-fluid\" src=\"{{product.link}}\" alt=\"\">  
                      </section>
                      {#ESTA SECCION TIENA LA INFORMACION DEL PRODUCTO#}
                      <section class=\"col-lg-6 col-md-6 mb-12\">
                        <h4 class=\"producto text-center center-text\">{{product.nombre}}</h4>
                        <h6 class=\"producto text-center center-text\">Precio: {{product.precio*2977.99}} COP</h6>
                        <h6 class=\"producto text-center center-text\">Descripcion: {{product.Descripcion}}</h6>
                        {#AQUI ESTAN LOS BOTONES SOBRE LAS ACCIONES DE CADA PRODUCTO#}
                        <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                          
                          {% if not is_granted('IS_AUTHENTICATED_FULLY')%}
                          <p>Inicie Sesion para empezar a agregar productos a su Carro de Compras!</p>
                          <button type=\"button\" class=\"mdl-button close{{product.id}}\">Cerrar <i class=\"material-icons\">close</i></button>
                          {% endif %}
                          
                          {% if is_granted('IS_AUTHENTICATED_FULLY')%}
                            <hr style=\"height:10px\">                            
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarProducto' , { 'id' : product.id}) }}\" method=\"POST\">
                              <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Agregar al Carro de Compras<i class=\"material-icons\">add_shopping_cart</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarWishlist' , { 'id' : product.id}) }}\" method=\"POST\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Agregar a la wishlist <i class=\"material-icons\">list</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close{{product.id}}\">Cerrar <i class=\"material-icons\">close</i></button>
                            </form>
                          {% endif %}
                        </div>
                      </section>
                      </div>
                    
                  </div>
                </dialog>
                
              {#SCRIPT QUE SE CORRE PARA ABRIR EL DIALOG  #}
              <script>
                // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                var dialog{{product.id}} = document.querySelector('.show-dialog{{product.id}}');
                // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                var showModalButton{{product.id}} = document.querySelector('.show-modal{{product.id}}'); 
                // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                var showTextButton{{product.id}} = document.querySelector('.text{{product.id}}');
                // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                var showPriceButton{{product.id}} = document.querySelector('.price{{product.id}}');
                
                if (!dialog{{product.id}}.showModal){
                  dialogPolyfill.registerDialog(dialog{{product.id}});
                }
                // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                showModalButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                showTextButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                showPriceButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CERRAR EL DIALOG
                dialog{{product.id}}.querySelector('.close{{product.id}}').addEventListener('click', function() {
                  dialog{{product.id}}.close();
                });
              </script> 
            </a>
          </div>
            </div>
      
          {% endif %}
      
        {% endif %}
      {% endfor %}

  </div>
  
  <div class=\"row text-center\" style=\"padding-left:100px; padding-top:50px; padding-bottom: 50px\" id=\"macetaprod\">
      {% for product in products %}
        {% if product.categoria == 'maceta'  %}
          <style> 
        .mdl-dialog {
          border: none;
          box-shadow: 0 9px 46px 8px rgba(0,0,0,.14), 0 11px 15px -7px rgba(0,0,0,.12), 0 24px 38px 3px rgba(0,0,0,.2);
          width: 60%;
        }
        .mdl-navigation.lateral{
          
          background-color:white;
      }
        .mdl-layout__drawer.lateral{
            background-color:white;
            width: 175px;
            height:55%;
            border-right-style: none;
            border-right-width: 0px;
            border-bottom-style: none;
            border-bottom-width: 0px;
            border-bottom-color: transparent;
            
        }
        .mdl-button.mdl-js-button.mdl-js-ripple-effect:hover{
          
          background-color: #67daff;
           
          
      }
      
      </style>
          {#componente que contiene cada producto#}
          
          {#VENEZUELA#}
          {% if app.user.pais == \"VE\" %}
            {#  <form action=\"{{ path('pais') }}\" method=\"GET\" id=\"formPais\">#}
            {#  <select class=\"form-control\" name=\"seleccion\" id=\"selPais\">#}
            {#    <option value=\"VE\">Venezuela</a>#}
            {#    <option value=\"US\">United States</a>#}
            {#    <option value=\"EN\">England</a>#}
            {#    <option selected value=\"CO\">Colombia</a>#}
            {#  </select>#}
            {#</form>#}

            <div id=\"{{product.id}}\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
              <div  class=\"filterDiv {{product.categoria}}\">
              {#link del producto#}
                <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
              {#imagen del producto#}
              <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"{{product.link}}\" alt=\"\">
              {#informacion cuando se hace hover#}
              <div class=\"descripcionProducto\">
                <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
                  <h4 class=\"producto text{{product.id}}\">{{product.nombre}}</h4>
                  <h6 class=\"producto price{{product.id}}\">{{product.precio*35000}} BsF.</h6>
                </a>
              </div>
              <br>
              <br>
              
              {#AQUI ABRE EL DIALOG CUANDO SE HACE CLICK EN UN PRODUCTO #}
              
              <dialog class=\"mdl-dialog show-dialog{{product.id}}\">
                  <div class=\"mdl-dialog__content\">
                     
                      <div class=\"row\">
                      {#ESTA SECCION TIENE LA FOTO DEL PRODUCTO#}
                      <section class=\"foto col-lg-6 col-md-6\">
                        <img class=\"img-fluid\" src=\"{{product.link}}\" alt=\"\">  
                      </section>
                      {#ESTA SECCION TIENA LA INFORMACION DEL PRODUCTO#}
                      <section class=\"col-lg-6 col-md-6 mb-12\">
                        <h4 class=\"producto text-center center-text\">{{product.nombre}}</h4>
                        <h6 class=\"producto text-center center-text\">Precio: {{product.precio*35000}} BsF</h6>
                        <h6 class=\"producto text-center center-text\">Descripcion: {{product.Descripcion}}</h6>
                        {#AQUI ESTAN LOS BOTONES SOBRE LAS ACCIONES DE CADA PRODUCTO#}
                        <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                          
                          {% if not is_granted('IS_AUTHENTICATED_FULLY')%}
                          <p>Inicie Sesion para empezar a agregar productos a su Carro de Compras!</p>
                          <button type=\"button\" class=\"mdl-button close{{product.id}}\">Cerrar <i class=\"material-icons\">close</i></button>
                          {% endif %}
                          
                          {% if is_granted('IS_AUTHENTICATED_FULLY')%}
                            <hr style=\"height:10px\">                            
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarProducto' , { 'id' : product.id}) }}\" method=\"POST\">
                              <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Agregar al Carro de Compras<i class=\"material-icons\">add_shopping_cart</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarWishlist' , { 'id' : product.id}) }}\" method=\"POST\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Agregar a la wishlist <i class=\"material-icons\">list</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close{{product.id}}\">Cerrar <i class=\"material-icons\">close</i></button>
                            </form>
                          {% endif %}
                        </div>
                      </section>
                      </div>
                    
                  </div>
                </dialog>
                
              {#SCRIPT QUE SE CORRE PARA ABRIR EL DIALOG  #}
              <script>
                // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                var dialog{{product.id}} = document.querySelector('.show-dialog{{product.id}}');
                // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                var showModalButton{{product.id}} = document.querySelector('.show-modal{{product.id}}'); 
                // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                var showTextButton{{product.id}} = document.querySelector('.text{{product.id}}');
                // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                var showPriceButton{{product.id}} = document.querySelector('.price{{product.id}}');
                
                if (!dialog{{product.id}}.showModal){
                  dialogPolyfill.registerDialog(dialog{{product.id}});
                }
                // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                showModalButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                showTextButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                showPriceButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CERRAR EL DIALOG
                dialog{{product.id}}.querySelector('.close{{product.id}}').addEventListener('click', function() {
                  dialog{{product.id}}.close();
                });
              </script> 
            </a>
              </div>
            </div>
      
          {% endif %}
          
          {#ESTADOS UNIDOS#}
          {% if app.user.pais == \"US\" %}
            {#  <form action=\"{{ path('pais') }}\" method=\"GET\" id=\"formPais\">#}
            {#  <select class=\"form-control\" name=\"seleccion\" id=\"selPais\">#}
            {#    <option value=\"VE\">Venezuela</a>#}
            {#    <option value=\"US\">United States</a>#}
            {#    <option value=\"EN\">England</a>#}
            {#    <option selected value=\"CO\">Colombia</a>#}
            {#  </select>#}
            {#</form>#}

            <div id=\"{{product.id}}\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
            <div  class=\"filterDiv {{product.categoria}}\">
            {#link del producto#}
            <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
              {#imagen del producto#}
              <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"{{product.link}}\" alt=\"\">
              {#informacion cuando se hace hover#}
              <div class=\"descripcionProducto\">
                <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
                  <h4 class=\"producto text{{product.id}}\">{{product.nombre}}</h4>
                  <h6 class=\"producto price{{product.id}}\">{{product.precio}} \$.</h6>
                </a>
              </div>
              <br>
              <br>
              
              {#AQUI ABRE EL DIALOG CUANDO SE HACE CLICK EN UN PRODUCTO #}
              
              <dialog class=\"mdl-dialog show-dialog{{product.id}}\">
                  <div class=\"mdl-dialog__content\">
                     
                      <div class=\"row\">
                      {#ESTA SECCION TIENE LA FOTO DEL PRODUCTO#}
                      <section class=\"foto col-lg-6 col-md-6\">
                        <img class=\"img-fluid\" src=\"{{product.link}}\" alt=\"\">  
                      </section>
                      {#ESTA SECCION TIENA LA INFORMACION DEL PRODUCTO#}
                      <section class=\"col-lg-6 col-md-6 mb-12\">
                        <h4 class=\"producto text-center center-text\">{{product.nombre}}</h4>
                        <h6 class=\"producto text-center center-text\">Price: {{product.precio}} \$</h6>
                        <h6 class=\"producto text-center center-text\">Description: {{product.Descripcion}}</h6>
                        {#AQUI ESTAN LOS BOTONES SOBRE LAS ACCIONES DE CADA PRODUCTO#}
                        <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                          
                          {% if not is_granted('IS_AUTHENTICATED_FULLY')%}
                          <p>You have to sign in to add products to your shopping cart!</p>
                          <button type=\"button\" class=\"mdl-button close{{product.id}}\">Cerrar <i class=\"material-icons\">close</i></button>
                          {% endif %}
                          
                          {% if is_granted('IS_AUTHENTICATED_FULLY')%}
                            <hr style=\"height:10px\">                            
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarProducto' , { 'id' : product.id}) }}\" method=\"POST\">
                              <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Add to Shopping Cart<i class=\"material-icons\">add_shopping_cart</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarWishlist' , { 'id' : product.id}) }}\" method=\"POST\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Add To WishList <i class=\"material-icons\">list</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close{{product.id}}\">Close <i class=\"material-icons\">close</i></button>
                            </form>
                          {% endif %}
                        </div>
                      </section>
                      </div>
                    
                  </div>
                </dialog>
                
              {#SCRIPT QUE SE CORRE PARA ABRIR EL DIALOG  #}
              <script>
                // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                var dialog{{product.id}} = document.querySelector('.show-dialog{{product.id}}');
                // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                var showModalButton{{product.id}} = document.querySelector('.show-modal{{product.id}}'); 
                // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                var showTextButton{{product.id}} = document.querySelector('.text{{product.id}}');
                // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                var showPriceButton{{product.id}} = document.querySelector('.price{{product.id}}');
                
                if (!dialog{{product.id}}.showModal){
                  dialogPolyfill.registerDialog(dialog{{product.id}});
                }
                // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                showModalButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                showTextButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                showPriceButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CERRAR EL DIALOG
                dialog{{product.id}}.querySelector('.close{{product.id}}').addEventListener('click', function() {
                  dialog{{product.id}}.close();
                });
              </script> 
            </a>
          </div>
      </div>
      
          {% endif %}
          
          
          {#INGLATERRA#}
          {% if app.user.pais == \"EN\" %}
            {#  <form action=\"{{ path('pais') }}\" method=\"GET\" id=\"formPais\">#}
            {#  <select class=\"form-control\" name=\"seleccion\" id=\"selPais\">#}
            {#    <option value=\"VE\">Venezuela</a>#}
            {#    <option value=\"US\">United States</a>#}
            {#    <option value=\"EN\">England</a>#}
            {#    <option selected value=\"CO\">Colombia</a>#}
            {#  </select>#}
            {#</form>#}

            <div id=\"{{product.id}}\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
              <div  class=\"filterDiv {{product.categoria}}\">
            {#link del producto#}
            <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
              {#imagen del producto#}
              <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"{{product.link}}\" alt=\"\">
              {#informacion cuando se hace hover#}
              <div class=\"descripcionProducto\">
                <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
                  <h4 class=\"producto text{{product.id}}\">{{product.nombre}}</h4>
                  <h6 class=\"producto price{{product.id}}\">{{product.precio*0.76}} £.</h6>
                </a>
              </div>
              <br>
              <br>
              
              {#AQUI ABRE EL DIALOG CUANDO SE HACE CLICK EN UN PRODUCTO #}
              
              <dialog class=\"mdl-dialog show-dialog{{product.id}}\">
                  <div class=\"mdl-dialog__content\">
                     
                      <div class=\"row\">
                      {#ESTA SECCION TIENE LA FOTO DEL PRODUCTO#}
                      <section class=\"foto col-lg-6 col-md-6\">
                        <img class=\"img-fluid\" src=\"{{product.link}}\" alt=\"\">  
                      </section>
                      {#ESTA SECCION TIENA LA INFORMACION DEL PRODUCTO#}
                      <section class=\"col-lg-6 col-md-6 mb-12\">
                        <h4 class=\"producto text-center center-text\">{{product.nombre}}</h4>
                        <h6 class=\"producto text-center center-text\">Price: {{product.precio*0.76}} £</h6>
                        <h6 class=\"producto text-center center-text\">Description: {{product.Descripcion}}</h6>
                        {#AQUI ESTAN LOS BOTONES SOBRE LAS ACCIONES DE CADA PRODUCTO#}
                        <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                          
                          {% if not is_granted('IS_AUTHENTICATED_FULLY')%}
                          <p>You have to sign in to add products to your shopping cart!</p>
                          <button type=\"button\" class=\"mdl-button close{{product.id}}\">Cerrar <i class=\"material-icons\">close</i></button>
                          {% endif %}
                          
                          {% if is_granted('IS_AUTHENTICATED_FULLY')%}
                            <hr style=\"height:10px\">                            
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarProducto' , { 'id' : product.id}) }}\" method=\"POST\">
                              <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Add to Shopping Cart<i class=\"material-icons\">add_shopping_cart</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarWishlist' , { 'id' : product.id}) }}\" method=\"POST\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Add To WishList <i class=\"material-icons\">list</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close{{product.id}}\">Close <i class=\"material-icons\">close</i></button>
                            </form>
                          {% endif %}
                        </div>
                      </section>
                      </div>
                    
                  </div>
                </dialog>
                
              {#SCRIPT QUE SE CORRE PARA ABRIR EL DIALOG  #}
              <script>
                // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                var dialog{{product.id}} = document.querySelector('.show-dialog{{product.id}}');
                // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                var showModalButton{{product.id}} = document.querySelector('.show-modal{{product.id}}'); 
                // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                var showTextButton{{product.id}} = document.querySelector('.text{{product.id}}');
                // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                var showPriceButton{{product.id}} = document.querySelector('.price{{product.id}}');
                
                if (!dialog{{product.id}}.showModal){
                  dialogPolyfill.registerDialog(dialog{{product.id}});
                }
                // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                showModalButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                showTextButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                showPriceButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CERRAR EL DIALOG
                dialog{{product.id}}.querySelector('.close{{product.id}}').addEventListener('click', function() {
                  dialog{{product.id}}.close();
                });
              </script> 
            </a>
          </div>
            </div>
      
          {% endif %}
          
          
          {#COLOMBIA#}
          {% if app.user.pais == \"CO\" %}
            {#  <form action=\"{{ path('pais') }}\" method=\"GET\" id=\"formPais\">#}
            {#  <select class=\"form-control\" name=\"seleccion\" id=\"selPais\">#}
            {#    <option value=\"VE\">Venezuela</a>#}
            {#    <option value=\"US\">United States</a>#}
            {#    <option value=\"EN\">England</a>#}
            {#    <option selected value=\"CO\">Colombia</a>#}
            {#  </select>#}
            {#</form>#}

            <div id=\"{{product.id}}\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
              <div  class=\"filterDiv {{product.categoria}}\">
            {#link del producto#}
            <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
              {#imagen del producto#}
              <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"{{product.link}}\" alt=\"\">
              {#informacion cuando se hace hover#}
              <div class=\"descripcionProducto\">
                <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
                  <h4 class=\"producto text{{product.id}}\">{{product.nombre}}</h4>
                  <h6 class=\"producto price{{product.id}}\">{{product.precio*2977.99}} COP</h6>
                </a>
              </div>
              <br>
              <br>
              
              {#AQUI ABRE EL DIALOG CUANDO SE HACE CLICK EN UN PRODUCTO #}
              
              <dialog class=\"mdl-dialog show-dialog{{product.id}}\">
                  <div class=\"mdl-dialog__content\">
                     
                      <div class=\"row\">
                      {#ESTA SECCION TIENE LA FOTO DEL PRODUCTO#}
                      <section class=\"foto col-lg-6 col-md-6\">
                        <img class=\"img-fluid\" src=\"{{product.link}}\" alt=\"\">  
                      </section>
                      {#ESTA SECCION TIENA LA INFORMACION DEL PRODUCTO#}
                      <section class=\"col-lg-6 col-md-6 mb-12\">
                        <h4 class=\"producto text-center center-text\">{{product.nombre}}</h4>
                        <h6 class=\"producto text-center center-text\">Precio: {{product.precio*2977.99}} COP</h6>
                        <h6 class=\"producto text-center center-text\">Descripcion: {{product.Descripcion}}</h6>
                        {#AQUI ESTAN LOS BOTONES SOBRE LAS ACCIONES DE CADA PRODUCTO#}
                        <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                          
                          {% if not is_granted('IS_AUTHENTICATED_FULLY')%}
                          <p>Inicie Sesion para empezar a agregar productos a su Carro de Compras!</p>
                          <button type=\"button\" class=\"mdl-button close{{product.id}}\">Cerrar <i class=\"material-icons\">close</i></button>
                          {% endif %}
                          
                          {% if is_granted('IS_AUTHENTICATED_FULLY')%}
                            <hr style=\"height:10px\">                            
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarProducto' , { 'id' : product.id}) }}\" method=\"POST\">
                              <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Agregar al Carro de Compras<i class=\"material-icons\">add_shopping_cart</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarWishlist' , { 'id' : product.id}) }}\" method=\"POST\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Agregar a la wishlist <i class=\"material-icons\">list</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close{{product.id}}\">Cerrar <i class=\"material-icons\">close</i></button>
                            </form>
                          {% endif %}
                        </div>
                      </section>
                      </div>
                    
                  </div>
                </dialog>
                
              {#SCRIPT QUE SE CORRE PARA ABRIR EL DIALOG  #}
              <script>
                // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                var dialog{{product.id}} = document.querySelector('.show-dialog{{product.id}}');
                // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                var showModalButton{{product.id}} = document.querySelector('.show-modal{{product.id}}'); 
                // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                var showTextButton{{product.id}} = document.querySelector('.text{{product.id}}');
                // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                var showPriceButton{{product.id}} = document.querySelector('.price{{product.id}}');
                
                if (!dialog{{product.id}}.showModal){
                  dialogPolyfill.registerDialog(dialog{{product.id}});
                }
                // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                showModalButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                showTextButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                showPriceButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CERRAR EL DIALOG
                dialog{{product.id}}.querySelector('.close{{product.id}}').addEventListener('click', function() {
                  dialog{{product.id}}.close();
                });
              </script> 
            </a>
          </div>
            </div>
      
          {% endif %}
      
        {% endif %}
      {% endfor %}
      
  </div>
  
  <div class=\"row text-center\" style=\"padding-left:100px; padding-top:50px; padding-bottom: 50px\" id=\"accesorioprod\">
      {% for product in products %}
        {% if product.categoria == 'accesorio'%}
          <style> 
        .mdl-dialog {
          border: none;
          box-shadow: 0 9px 46px 8px rgba(0,0,0,.14), 0 11px 15px -7px rgba(0,0,0,.12), 0 24px 38px 3px rgba(0,0,0,.2);
          width: 60%;
        }
        .mdl-navigation.lateral{
          
          background-color:white;
      }
        .mdl-layout__drawer.lateral{
            background-color:white;
            width: 175px;
            height:55%;
            border-right-style: none;
            border-right-width: 0px;
            border-bottom-style: none;
            border-bottom-width: 0px;
            border-bottom-color: transparent;
            
        }
        .mdl-button.mdl-js-button.mdl-js-ripple-effect:hover{
          
          background-color: #67daff;
           
          
      }
      
      </style>
          {#componente que contiene cada producto#}
          
          {#VENEZUELA#}
          {% if app.user.pais == \"VE\" %}
            {#  <form action=\"{{ path('pais') }}\" method=\"GET\" id=\"formPais\">#}
            {#  <select class=\"form-control\" name=\"seleccion\" id=\"selPais\">#}
            {#    <option value=\"VE\">Venezuela</a>#}
            {#    <option value=\"US\">United States</a>#}
            {#    <option value=\"EN\">England</a>#}
            {#    <option selected value=\"CO\">Colombia</a>#}
            {#  </select>#}
            {#</form>#}

            <div id=\"{{product.id}}\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
              <div  class=\"filterDiv {{product.categoria}}\">
              {#link del producto#}
                <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
              {#imagen del producto#}
              <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"{{product.link}}\" alt=\"\">
              {#informacion cuando se hace hover#}
              <div class=\"descripcionProducto\">
                <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
                  <h4 class=\"producto text{{product.id}}\">{{product.nombre}}</h4>
                  <h6 class=\"producto price{{product.id}}\">{{product.precio*35000}} BsF.</h6>
                </a>
              </div>
              <br>
              <br>
              
              {#AQUI ABRE EL DIALOG CUANDO SE HACE CLICK EN UN PRODUCTO #}
              
              <dialog class=\"mdl-dialog show-dialog{{product.id}}\">
                  <div class=\"mdl-dialog__content\">
                     
                      <div class=\"row\">
                      {#ESTA SECCION TIENE LA FOTO DEL PRODUCTO#}
                      <section class=\"foto col-lg-6 col-md-6\">
                        <img class=\"img-fluid\" src=\"{{product.link}}\" alt=\"\">  
                      </section>
                      {#ESTA SECCION TIENA LA INFORMACION DEL PRODUCTO#}
                      <section class=\"col-lg-6 col-md-6 mb-12\">
                        <h4 class=\"producto text-center center-text\">{{product.nombre}}</h4>
                        <h6 class=\"producto text-center center-text\">Precio: {{product.precio*35000}} BsF</h6>
                        <h6 class=\"producto text-center center-text\">Descripcion: {{product.Descripcion}}</h6>
                        {#AQUI ESTAN LOS BOTONES SOBRE LAS ACCIONES DE CADA PRODUCTO#}
                        <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                          
                          {% if not is_granted('IS_AUTHENTICATED_FULLY')%}
                          <p>Inicie Sesion para empezar a agregar productos a su Carro de Compras!</p>
                          <button type=\"button\" class=\"mdl-button close{{product.id}}\">Cerrar <i class=\"material-icons\">close</i></button>
                          {% endif %}
                          
                          {% if is_granted('IS_AUTHENTICATED_FULLY')%}
                            <hr style=\"height:10px\">                            
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarProducto' , { 'id' : product.id}) }}\" method=\"POST\">
                              <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Agregar al Carro de Compras<i class=\"material-icons\">add_shopping_cart</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarWishlist' , { 'id' : product.id}) }}\" method=\"POST\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Agregar a la wishlist <i class=\"material-icons\">list</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close{{product.id}}\">Cerrar <i class=\"material-icons\">close</i></button>
                            </form>
                          {% endif %}
                        </div>
                      </section>
                      </div>
                    
                  </div>
                </dialog>
                
              {#SCRIPT QUE SE CORRE PARA ABRIR EL DIALOG  #}
              <script>
                // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                var dialog{{product.id}} = document.querySelector('.show-dialog{{product.id}}');
                // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                var showModalButton{{product.id}} = document.querySelector('.show-modal{{product.id}}'); 
                // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                var showTextButton{{product.id}} = document.querySelector('.text{{product.id}}');
                // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                var showPriceButton{{product.id}} = document.querySelector('.price{{product.id}}');
                
                if (!dialog{{product.id}}.showModal){
                  dialogPolyfill.registerDialog(dialog{{product.id}});
                }
                // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                showModalButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                showTextButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                showPriceButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CERRAR EL DIALOG
                dialog{{product.id}}.querySelector('.close{{product.id}}').addEventListener('click', function() {
                  dialog{{product.id}}.close();
                });
              </script> 
            </a>
              </div>
            </div>
      
          {% endif %}
          
          {#ESTADOS UNIDOS#}
          {% if app.user.pais == \"US\" %}
            {#  <form action=\"{{ path('pais') }}\" method=\"GET\" id=\"formPais\">#}
            {#  <select class=\"form-control\" name=\"seleccion\" id=\"selPais\">#}
            {#    <option value=\"VE\">Venezuela</a>#}
            {#    <option value=\"US\">United States</a>#}
            {#    <option value=\"EN\">England</a>#}
            {#    <option selected value=\"CO\">Colombia</a>#}
            {#  </select>#}
            {#</form>#}

            <div id=\"{{product.id}}\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
            <div  class=\"filterDiv {{product.categoria}}\">
            {#link del producto#}
            <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
              {#imagen del producto#}
              <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"{{product.link}}\" alt=\"\">
              {#informacion cuando se hace hover#}
              <div class=\"descripcionProducto\">
                <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
                  <h4 class=\"producto text{{product.id}}\">{{product.nombre}}</h4>
                  <h6 class=\"producto price{{product.id}}\">{{product.precio}} \$.</h6>
                </a>
              </div>
              <br>
              <br>
              
              {#AQUI ABRE EL DIALOG CUANDO SE HACE CLICK EN UN PRODUCTO #}
              
              <dialog class=\"mdl-dialog show-dialog{{product.id}}\">
                  <div class=\"mdl-dialog__content\">
                     
                      <div class=\"row\">
                      {#ESTA SECCION TIENE LA FOTO DEL PRODUCTO#}
                      <section class=\"foto col-lg-6 col-md-6\">
                        <img class=\"img-fluid\" src=\"{{product.link}}\" alt=\"\">  
                      </section>
                      {#ESTA SECCION TIENA LA INFORMACION DEL PRODUCTO#}
                      <section class=\"col-lg-6 col-md-6 mb-12\">
                        <h4 class=\"producto text-center center-text\">{{product.nombre}}</h4>
                        <h6 class=\"producto text-center center-text\">Price: {{product.precio}} \$</h6>
                        <h6 class=\"producto text-center center-text\">Description: {{product.Descripcion}}</h6>
                        {#AQUI ESTAN LOS BOTONES SOBRE LAS ACCIONES DE CADA PRODUCTO#}
                        <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                          
                          {% if not is_granted('IS_AUTHENTICATED_FULLY')%}
                          <p>You have to sign in to add products to your shopping cart!</p>
                          <button type=\"button\" class=\"mdl-button close{{product.id}}\">Cerrar <i class=\"material-icons\">close</i></button>
                          {% endif %}
                          
                          {% if is_granted('IS_AUTHENTICATED_FULLY')%}
                            <hr style=\"height:10px\">                            
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarProducto' , { 'id' : product.id}) }}\" method=\"POST\">
                              <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Add to Shopping Cart<i class=\"material-icons\">add_shopping_cart</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarWishlist' , { 'id' : product.id}) }}\" method=\"POST\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Add To WishList <i class=\"material-icons\">list</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close{{product.id}}\">Close <i class=\"material-icons\">close</i></button>
                            </form>
                          {% endif %}
                        </div>
                      </section>
                      </div>
                    
                  </div>
                </dialog>
                
              {#SCRIPT QUE SE CORRE PARA ABRIR EL DIALOG  #}
              <script>
                // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                var dialog{{product.id}} = document.querySelector('.show-dialog{{product.id}}');
                // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                var showModalButton{{product.id}} = document.querySelector('.show-modal{{product.id}}'); 
                // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                var showTextButton{{product.id}} = document.querySelector('.text{{product.id}}');
                // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                var showPriceButton{{product.id}} = document.querySelector('.price{{product.id}}');
                
                if (!dialog{{product.id}}.showModal){
                  dialogPolyfill.registerDialog(dialog{{product.id}});
                }
                // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                showModalButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                showTextButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                showPriceButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CERRAR EL DIALOG
                dialog{{product.id}}.querySelector('.close{{product.id}}').addEventListener('click', function() {
                  dialog{{product.id}}.close();
                });
              </script> 
            </a>
          </div>
      </div>
      
          {% endif %}
          
          
          {#INGLATERRA#}
          {% if app.user.pais == \"EN\" %}
            {#  <form action=\"{{ path('pais') }}\" method=\"GET\" id=\"formPais\">#}
            {#  <select class=\"form-control\" name=\"seleccion\" id=\"selPais\">#}
            {#    <option value=\"VE\">Venezuela</a>#}
            {#    <option value=\"US\">United States</a>#}
            {#    <option value=\"EN\">England</a>#}
            {#    <option selected value=\"CO\">Colombia</a>#}
            {#  </select>#}
            {#</form>#}

            <div id=\"{{product.id}}\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
              <div  class=\"filterDiv {{product.categoria}}\">
            {#link del producto#}
            <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
              {#imagen del producto#}
              <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"{{product.link}}\" alt=\"\">
              {#informacion cuando se hace hover#}
              <div class=\"descripcionProducto\">
                <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
                  <h4 class=\"producto text{{product.id}}\">{{product.nombre}}</h4>
                  <h6 class=\"producto price{{product.id}}\">{{product.precio*0.76}} £.</h6>
                </a>
              </div>
              <br>
              <br>
              
              {#AQUI ABRE EL DIALOG CUANDO SE HACE CLICK EN UN PRODUCTO #}
              
              <dialog class=\"mdl-dialog show-dialog{{product.id}}\">
                  <div class=\"mdl-dialog__content\">
                     
                      <div class=\"row\">
                      {#ESTA SECCION TIENE LA FOTO DEL PRODUCTO#}
                      <section class=\"foto col-lg-6 col-md-6\">
                        <img class=\"img-fluid\" src=\"{{product.link}}\" alt=\"\">  
                      </section>
                      {#ESTA SECCION TIENA LA INFORMACION DEL PRODUCTO#}
                      <section class=\"col-lg-6 col-md-6 mb-12\">
                        <h4 class=\"producto text-center center-text\">{{product.nombre}}</h4>
                        <h6 class=\"producto text-center center-text\">Price: {{product.precio*0.76}} £</h6>
                        <h6 class=\"producto text-center center-text\">Description: {{product.Descripcion}}</h6>
                        {#AQUI ESTAN LOS BOTONES SOBRE LAS ACCIONES DE CADA PRODUCTO#}
                        <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                          
                          {% if not is_granted('IS_AUTHENTICATED_FULLY')%}
                          <p>You have to sign in to add products to your shopping cart!</p>
                          <button type=\"button\" class=\"mdl-button close{{product.id}}\">Cerrar <i class=\"material-icons\">close</i></button>
                          {% endif %}
                          
                          {% if is_granted('IS_AUTHENTICATED_FULLY')%}
                            <hr style=\"height:10px\">                            
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarProducto' , { 'id' : product.id}) }}\" method=\"POST\">
                              <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Add to Shopping Cart<i class=\"material-icons\">add_shopping_cart</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarWishlist' , { 'id' : product.id}) }}\" method=\"POST\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Add To WishList <i class=\"material-icons\">list</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close{{product.id}}\">Close <i class=\"material-icons\">close</i></button>
                            </form>
                          {% endif %}
                        </div>
                      </section>
                      </div>
                    
                  </div>
                </dialog>
                
              {#SCRIPT QUE SE CORRE PARA ABRIR EL DIALOG  #}
              <script>
                // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                var dialog{{product.id}} = document.querySelector('.show-dialog{{product.id}}');
                // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                var showModalButton{{product.id}} = document.querySelector('.show-modal{{product.id}}'); 
                // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                var showTextButton{{product.id}} = document.querySelector('.text{{product.id}}');
                // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                var showPriceButton{{product.id}} = document.querySelector('.price{{product.id}}');
                
                if (!dialog{{product.id}}.showModal){
                  dialogPolyfill.registerDialog(dialog{{product.id}});
                }
                // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                showModalButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                showTextButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                showPriceButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CERRAR EL DIALOG
                dialog{{product.id}}.querySelector('.close{{product.id}}').addEventListener('click', function() {
                  dialog{{product.id}}.close();
                });
              </script> 
            </a>
          </div>
            </div>
      
          {% endif %}
          
          
          {#COLOMBIA#}
          {% if app.user.pais == \"CO\" %}
            {#  <form action=\"{{ path('pais') }}\" method=\"GET\" id=\"formPais\">#}
            {#  <select class=\"form-control\" name=\"seleccion\" id=\"selPais\">#}
            {#    <option value=\"VE\">Venezuela</a>#}
            {#    <option value=\"US\">United States</a>#}
            {#    <option value=\"EN\">England</a>#}
            {#    <option selected value=\"CO\">Colombia</a>#}
            {#  </select>#}
            {#</form>#}

            <div id=\"{{product.id}}\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
              <div  class=\"filterDiv {{product.categoria}}\">
            {#link del producto#}
            <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
              {#imagen del producto#}
              <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"{{product.link}}\" alt=\"\">
              {#informacion cuando se hace hover#}
              <div class=\"descripcionProducto\">
                <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
                  <h4 class=\"producto text{{product.id}}\">{{product.nombre}}</h4>
                  <h6 class=\"producto price{{product.id}}\">{{product.precio*2977.99}} COP</h6>
                </a>
              </div>
              <br>
              <br>
              
              {#AQUI ABRE EL DIALOG CUANDO SE HACE CLICK EN UN PRODUCTO #}
              
              <dialog class=\"mdl-dialog show-dialog{{product.id}}\">
                  <div class=\"mdl-dialog__content\">
                     
                      <div class=\"row\">
                      {#ESTA SECCION TIENE LA FOTO DEL PRODUCTO#}
                      <section class=\"foto col-lg-6 col-md-6\">
                        <img class=\"img-fluid\" src=\"{{product.link}}\" alt=\"\">  
                      </section>
                      {#ESTA SECCION TIENA LA INFORMACION DEL PRODUCTO#}
                      <section class=\"col-lg-6 col-md-6 mb-12\">
                        <h4 class=\"producto text-center center-text\">{{product.nombre}}</h4>
                        <h6 class=\"producto text-center center-text\">Precio: {{product.precio*2977.99}} COP</h6>
                        <h6 class=\"producto text-center center-text\">Descripcion: {{product.Descripcion}}</h6>
                        {#AQUI ESTAN LOS BOTONES SOBRE LAS ACCIONES DE CADA PRODUCTO#}
                        <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                          
                          {% if not is_granted('IS_AUTHENTICATED_FULLY')%}
                          <p>Inicie Sesion para empezar a agregar productos a su Carro de Compras!</p>
                          <button type=\"button\" class=\"mdl-button close{{product.id}}\">Cerrar <i class=\"material-icons\">close</i></button>
                          {% endif %}
                          
                          {% if is_granted('IS_AUTHENTICATED_FULLY')%}
                            <hr style=\"height:10px\">                            
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarProducto' , { 'id' : product.id}) }}\" method=\"POST\">
                              <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Agregar al Carro de Compras<i class=\"material-icons\">add_shopping_cart</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarWishlist' , { 'id' : product.id}) }}\" method=\"POST\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Agregar a la wishlist <i class=\"material-icons\">list</i></button>
                            </form>
                            <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                              <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close{{product.id}}\">Cerrar <i class=\"material-icons\">close</i></button>
                            </form>
                          {% endif %}
                        </div>
                      </section>
                      </div>
                    
                  </div>
                </dialog>
                
              {#SCRIPT QUE SE CORRE PARA ABRIR EL DIALOG  #}
              <script>
                // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                var dialog{{product.id}} = document.querySelector('.show-dialog{{product.id}}');
                // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                var showModalButton{{product.id}} = document.querySelector('.show-modal{{product.id}}'); 
                // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                var showTextButton{{product.id}} = document.querySelector('.text{{product.id}}');
                // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                var showPriceButton{{product.id}} = document.querySelector('.price{{product.id}}');
                
                if (!dialog{{product.id}}.showModal){
                  dialogPolyfill.registerDialog(dialog{{product.id}});
                }
                // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                showModalButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                showTextButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                showPriceButton{{product.id}}.addEventListener('click', function() {
                  dialog{{product.id}}.showModal();
                });
                // FUNCION PARA CERRAR EL DIALOG
                dialog{{product.id}}.querySelector('.close{{product.id}}').addEventListener('click', function() {
                  dialog{{product.id}}.close();
                });
              </script> 
            </a>
          </div>
            </div>
      
          {% endif %}
      
        {% endif %}
      {% endfor %}
      
  </div>
  
  {% else %}
  
          <dialog class=\"mdl-dialog dialogLogin\">
            <h5 class=\"mdl-dialog__title\" style=\"font-size:25px; align:center\">Inicio de Sesión</h5>
            <div class=\"mdl-dialog__content\">
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
            </div>
            <div class=\"mdl-dialog__actions\">
              <button form=\"form-login\" type=\"submit\" class=\"mdl-button\">Login</button>
              <button type=\"button\" class=\"mdl-button close\">Cancelar</button>
            </div>
          </dialog>
          <script>
            var dialog = document.querySelector('.dialogLogin');
            var showDialogButton = document.querySelector('.show-dialogLogin');
            if (! dialog.showModal) {
              dialogPolyfill.registerDialog(dialog);
            }
            showDialogButton.addEventListener('click', function() {
              dialog.showModal();
            });
            dialog.querySelector('.close').addEventListener('click', function() {
              dialog.close();
            });
            
          </script>
          
          
        
          {% if products|length == 0  %}
          <h3 style=\"text-align: right\">No hay productos... </h3>
          {% endif %}
        
          <div class=\"row text-center\" style=\"padding-left:100px; padding-top:50px; padding-bottom: 50px\" id=\"allproducts\">
              {% for product in products %}
                <style> 
                  .mdl-dialog {
                    border: none;
                    box-shadow: 0 9px 46px 8px rgba(0,0,0,.14), 0 11px 15px -7px rgba(0,0,0,.12), 0 24px 38px 3px rgba(0,0,0,.2);
                    width: 60%;
                  }
                  .mdl-navigation.lateral{
                    background-color:white;
                  }
                  .mdl-layout__drawer.lateral{
                      background-color:white;
                      width: 175px;
                      height:55%;
                      border-right-style: none;
                      border-right-width: 0px;
                      border-bottom-style: none;
                      border-bottom-width: 0px;
                      border-bottom-color: transparent;
                      
                  }
                  .mdl-button.mdl-js-button.mdl-js-ripple-effect:hover{
                    background-color: #67daff;
                  }
                  .mdl-dialog__actions--full-width>* {
                      height: 48px;
                      -webkit-flex: 0 0 100%;
                      -ms-flex: 0 0 100%;
                      flex: 0 0 100%;
                      padding-right: 0px;
                      margin-right: 0;
                      /* text-align: right; */
                  }
              
              </style>
                  {#componente que contiene cada producto#}
                  
                  
                 
        
                    <div id=\"{{product.id}}\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
                    <div  class=\"filterDiv {{product.categoria}}\">
                    {#link del producto#}
                    <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
                      {#imagen del producto#}
                      <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"{{product.link}}\" alt=\"\">
                      {#informacion cuando se hace hover#}
                      <div class=\"descripcionProducto\">
                        <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
                          <h4 class=\"producto text{{product.id}}\">{{product.nombre}}</h4>
                          <h6 class=\"producto price{{product.id}}\">{{product.precio}} \$.</h6>
                        </a>
                      </div>
                      <br>
                      <br>
                      
                      {#AQUI ABRE EL DIALOG CUANDO SE HACE CLICK EN UN PRODUCTO #}
                      
                      <dialog class=\"mdl-dialog show-dialog{{product.id}}\">
                          <div class=\"mdl-dialog__content\">
                             
                              <div class=\"row\">
                              {#ESTA SECCION TIENE LA FOTO DEL PRODUCTO#}
                              <section class=\"foto col-lg-6 col-md-6\">
                                <img class=\"img-fluid\" src=\"{{product.link}}\" alt=\"\">  
                              </section>
                              {#ESTA SECCION TIENA LA INFORMACION DEL PRODUCTO#}
                              <section class=\"col-lg-6 col-md-6 mb-12\">
                                <h4 class=\"producto text-center center-text\">{{product.nombre}}</h4>
                                <h6 class=\"producto text-center center-text\">Price: {{product.precio}} \$</h6>
                                <h6 class=\"producto text-center center-text\">Description: {{product.Descripcion}}</h6>
                                {#AQUI ESTAN LOS BOTONES SOBRE LAS ACCIONES DE CADA PRODUCTO#}
                                <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                                  
                                  {% if not is_granted('IS_AUTHENTICATED_FULLY')%}
                                  <p>You have to sign in to add products to your shopping cart!</p>
                                  <button type=\"button\" class=\"mdl-button close{{product.id}}\">Cerrar <i class=\"material-icons\">close</i></button>
                                  {% endif %}
                                  
                                  {% if is_granted('IS_AUTHENTICATED_FULLY')%}
                                    <hr style=\"height:10px\">                            
                                    <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarProducto' , { 'id' : product.id}) }}\" method=\"POST\">
                                      <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Add to Shopping Cart<i class=\"material-icons\">add_shopping_cart</i></button>
                                    </form>
                                    <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarWishlist' , { 'id' : product.id}) }}\" method=\"POST\">
                                      <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Add To WishList <i class=\"material-icons\">list</i></button>
                                    </form>
                                    <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                                      <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close{{product.id}}\">Close <i class=\"material-icons\">close</i></button>
                                    </form>
                                  {% endif %}
                                </div>
                              </section>
                              </div>
                            
                          </div>
                        </dialog>
                        
                      {#SCRIPT QUE SE CORRE PARA ABRIR EL DIALOG  #}
                      <script>
                        // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                        var dialog{{product.id}} = document.querySelector('.show-dialog{{product.id}}');
                        // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                        var showModalButton{{product.id}} = document.querySelector('.show-modal{{product.id}}'); 
                        // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                        var showTextButton{{product.id}} = document.querySelector('.text{{product.id}}');
                        // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                        var showPriceButton{{product.id}} = document.querySelector('.price{{product.id}}');
                        
                        if (!dialog{{product.id}}.showModal){
                          dialogPolyfill.registerDialog(dialog{{product.id}});
                        }
                        // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                        showModalButton{{product.id}}.addEventListener('click', function() {
                          dialog{{product.id}}.showModal();
                        });
                        // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                        showTextButton{{product.id}}.addEventListener('click', function() {
                          dialog{{product.id}}.showModal();
                        });
                        // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                        showPriceButton{{product.id}}.addEventListener('click', function() {
                          dialog{{product.id}}.showModal();
                        });
                        // FUNCION PARA CERRAR EL DIALOG
                        dialog{{product.id}}.querySelector('.close{{product.id}}').addEventListener('click', function() {
                          dialog{{product.id}}.close();
                        });
                      </script> 
                    </a>
                  </div>
              </div>
              
                 
                  
                  
              
              {% endfor %}
              
        
          </div>
          
          <div class=\"row text-center\" style=\"padding-left:100px; padding-top:50px; padding-bottom: 50px\" id=\"bonsaiprod\">
              {% for product in products %}
                {% if product.categoria == 'bonsai'  %}
                <style> 
              .mdl-dialog {
                border: none;
                box-shadow: 0 9px 46px 8px rgba(0,0,0,.14), 0 11px 15px -7px rgba(0,0,0,.12), 0 24px 38px 3px rgba(0,0,0,.2);
                width: 60%;
              }
              .mdl-navigation.lateral{
                
                background-color:white;
            }
              .mdl-layout__drawer.lateral{
                  background-color:white;
                  width: 175px;
                  height:55%;
                  border-right-style: none;
                  border-right-width: 0px;
                  border-bottom-style: none;
                  border-bottom-width: 0px;
                  border-bottom-color: transparent;
                  
              }
              .mdl-button.mdl-js-button.mdl-js-ripple-effect:hover{
                
                background-color: #67daff;
                 
                
            }
            
            </style>
                  {#componente que contiene cada producto#}
                  

        
                    <div id=\"{{product.id}}\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
                    <div  class=\"filterDiv {{product.categoria}}\">
                    {#link del producto#}
                    <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
                      {#imagen del producto#}
                      <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"{{product.link}}\" alt=\"\">
                      {#informacion cuando se hace hover#}
                      <div class=\"descripcionProducto\">
                        <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
                          <h4 class=\"producto text{{product.id}}\">{{product.nombre}}</h4>
                          <h6 class=\"producto price{{product.id}}\">{{product.precio}} \$.</h6>
                        </a>
                      </div>
                      <br>
                      <br>
                      
                      {#AQUI ABRE EL DIALOG CUANDO SE HACE CLICK EN UN PRODUCTO #}
                      
                      <dialog class=\"mdl-dialog show-dialog{{product.id}}\">
                          <div class=\"mdl-dialog__content\">
                             
                              <div class=\"row\">
                              {#ESTA SECCION TIENE LA FOTO DEL PRODUCTO#}
                              <section class=\"foto col-lg-6 col-md-6\">
                                <img class=\"img-fluid\" src=\"{{product.link}}\" alt=\"\">  
                              </section>
                              {#ESTA SECCION TIENA LA INFORMACION DEL PRODUCTO#}
                              <section class=\"col-lg-6 col-md-6 mb-12\">
                                <h4 class=\"producto text-center center-text\">{{product.nombre}}</h4>
                                <h6 class=\"producto text-center center-text\">Price: {{product.precio}} \$</h6>
                                <h6 class=\"producto text-center center-text\">Description: {{product.Descripcion}}</h6>
                                {#AQUI ESTAN LOS BOTONES SOBRE LAS ACCIONES DE CADA PRODUCTO#}
                                <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                                  
                                  {% if not is_granted('IS_AUTHENTICATED_FULLY')%}
                                  <p>You have to sign in to add products to your shopping cart!</p>
                                  <button type=\"button\" class=\"mdl-button close{{product.id}}\">Cerrar <i class=\"material-icons\">close</i></button>
                                  {% endif %}
                                  
                                  {% if is_granted('IS_AUTHENTICATED_FULLY')%}
                                    <hr style=\"height:10px\">                            
                                    <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarProducto' , { 'id' : product.id}) }}\" method=\"POST\">
                                      <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Add to Shopping Cart<i class=\"material-icons\">add_shopping_cart</i></button>
                                    </form>
                                    <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarWishlist' , { 'id' : product.id}) }}\" method=\"POST\">
                                      <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Add To WishList <i class=\"material-icons\">list</i></button>
                                    </form>
                                    <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                                      <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close{{product.id}}\">Close <i class=\"material-icons\">close</i></button>
                                    </form>
                                  {% endif %}
                                </div>
                              </section>
                              </div>
                            
                          </div>
                        </dialog>
                        
                      {#SCRIPT QUE SE CORRE PARA ABRIR EL DIALOG  #}
                      <script>
                        // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                        var dialog{{product.id}} = document.querySelector('.show-dialog{{product.id}}');
                        // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                        var showModalButton{{product.id}} = document.querySelector('.show-modal{{product.id}}'); 
                        // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                        var showTextButton{{product.id}} = document.querySelector('.text{{product.id}}');
                        // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                        var showPriceButton{{product.id}} = document.querySelector('.price{{product.id}}');
                        
                        if (!dialog{{product.id}}.showModal){
                          dialogPolyfill.registerDialog(dialog{{product.id}});
                        }
                        // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                        showModalButton{{product.id}}.addEventListener('click', function() {
                          dialog{{product.id}}.showModal();
                        });
                        // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                        showTextButton{{product.id}}.addEventListener('click', function() {
                          dialog{{product.id}}.showModal();
                        });
                        // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                        showPriceButton{{product.id}}.addEventListener('click', function() {
                          dialog{{product.id}}.showModal();
                        });
                        // FUNCION PARA CERRAR EL DIALOG
                        dialog{{product.id}}.querySelector('.close{{product.id}}').addEventListener('click', function() {
                          dialog{{product.id}}.close();
                        });
                      </script> 
                    </a>
                  </div>
              </div>
              

              
                {% endif %}
              {% endfor %}
        
          </div>
          
          <div class=\"row text-center\" style=\"padding-left:100px; padding-top:50px; padding-bottom: 50px\" id=\"macetaprod\">
              {% for product in products %}
                {% if product.categoria == 'maceta'  %}
                  <style> 
                .mdl-dialog {
                  border: none;
                  box-shadow: 0 9px 46px 8px rgba(0,0,0,.14), 0 11px 15px -7px rgba(0,0,0,.12), 0 24px 38px 3px rgba(0,0,0,.2);
                  width: 60%;
                }
                .mdl-navigation.lateral{
                  
                  background-color:white;
              }
                .mdl-layout__drawer.lateral{
                    background-color:white;
                    width: 175px;
                    height:55%;
                    border-right-style: none;
                    border-right-width: 0px;
                    border-bottom-style: none;
                    border-bottom-width: 0px;
                    border-bottom-color: transparent;
                    
                }
                .mdl-button.mdl-js-button.mdl-js-ripple-effect:hover{
                  
                  background-color: #67daff;
                   
                  
              }
              
              </style>
                  {#componente que contiene cada producto#}
                  

        
                    <div id=\"{{product.id}}\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
                    <div  class=\"filterDiv {{product.categoria}}\">
                    {#link del producto#}
                    <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
                      {#imagen del producto#}
                      <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"{{product.link}}\" alt=\"\">
                      {#informacion cuando se hace hover#}
                      <div class=\"descripcionProducto\">
                        <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
                          <h4 class=\"producto text{{product.id}}\">{{product.nombre}}</h4>
                          <h6 class=\"producto price{{product.id}}\">{{product.precio}} \$.</h6>
                        </a>
                      </div>
                      <br>
                      <br>
                      
                      {#AQUI ABRE EL DIALOG CUANDO SE HACE CLICK EN UN PRODUCTO #}
                      
                      <dialog class=\"mdl-dialog show-dialog{{product.id}}\">
                          <div class=\"mdl-dialog__content\">
                             
                              <div class=\"row\">
                              {#ESTA SECCION TIENE LA FOTO DEL PRODUCTO#}
                              <section class=\"foto col-lg-6 col-md-6\">
                                <img class=\"img-fluid\" src=\"{{product.link}}\" alt=\"\">  
                              </section>
                              {#ESTA SECCION TIENA LA INFORMACION DEL PRODUCTO#}
                              <section class=\"col-lg-6 col-md-6 mb-12\">
                                <h4 class=\"producto text-center center-text\">{{product.nombre}}</h4>
                                <h6 class=\"producto text-center center-text\">Price: {{product.precio}} \$</h6>
                                <h6 class=\"producto text-center center-text\">Description: {{product.Descripcion}}</h6>
                                {#AQUI ESTAN LOS BOTONES SOBRE LAS ACCIONES DE CADA PRODUCTO#}
                                <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                                  
                                  {% if not is_granted('IS_AUTHENTICATED_FULLY')%}
                                  <p>You have to sign in to add products to your shopping cart!</p>
                                  <button type=\"button\" class=\"mdl-button close{{product.id}}\">Cerrar <i class=\"material-icons\">close</i></button>
                                  {% endif %}
                                  
                                  {% if is_granted('IS_AUTHENTICATED_FULLY')%}
                                    <hr style=\"height:10px\">                            
                                    <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarProducto' , { 'id' : product.id}) }}\" method=\"POST\">
                                      <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Add to Shopping Cart<i class=\"material-icons\">add_shopping_cart</i></button>
                                    </form>
                                    <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarWishlist' , { 'id' : product.id}) }}\" method=\"POST\">
                                      <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Add To WishList <i class=\"material-icons\">list</i></button>
                                    </form>
                                    <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                                      <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close{{product.id}}\">Close <i class=\"material-icons\">close</i></button>
                                    </form>
                                  {% endif %}
                                </div>
                              </section>
                              </div>
                            
                          </div>
                        </dialog>
                        
                      {#SCRIPT QUE SE CORRE PARA ABRIR EL DIALOG  #}
                      <script>
                        // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                        var dialog{{product.id}} = document.querySelector('.show-dialog{{product.id}}');
                        // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                        var showModalButton{{product.id}} = document.querySelector('.show-modal{{product.id}}'); 
                        // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                        var showTextButton{{product.id}} = document.querySelector('.text{{product.id}}');
                        // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                        var showPriceButton{{product.id}} = document.querySelector('.price{{product.id}}');
                        
                        if (!dialog{{product.id}}.showModal){
                          dialogPolyfill.registerDialog(dialog{{product.id}});
                        }
                        // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                        showModalButton{{product.id}}.addEventListener('click', function() {
                          dialog{{product.id}}.showModal();
                        });
                        // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                        showTextButton{{product.id}}.addEventListener('click', function() {
                          dialog{{product.id}}.showModal();
                        });
                        // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                        showPriceButton{{product.id}}.addEventListener('click', function() {
                          dialog{{product.id}}.showModal();
                        });
                        // FUNCION PARA CERRAR EL DIALOG
                        dialog{{product.id}}.querySelector('.close{{product.id}}').addEventListener('click', function() {
                          dialog{{product.id}}.close();
                        });
                      </script> 
                    </a>
                  </div>
              </div>
              


              
                {% endif %}
              {% endfor %}
              
          </div>
          
          <div class=\"row text-center\" style=\"padding-left:100px; padding-top:50px; padding-bottom: 50px\" id=\"accesorioprod\">
              {% for product in products %}
                {% if product.categoria == 'accesorio'%}
                  <style> 
                .mdl-dialog {
                  border: none;
                  box-shadow: 0 9px 46px 8px rgba(0,0,0,.14), 0 11px 15px -7px rgba(0,0,0,.12), 0 24px 38px 3px rgba(0,0,0,.2);
                  width: 60%;
                }
                .mdl-navigation.lateral{
                  
                  background-color:white;
              }
                .mdl-layout__drawer.lateral{
                    background-color:white;
                    width: 175px;
                    height:55%;
                    border-right-style: none;
                    border-right-width: 0px;
                    border-bottom-style: none;
                    border-bottom-width: 0px;
                    border-bottom-color: transparent;
                    
                }
                .mdl-button.mdl-js-button.mdl-js-ripple-effect:hover{
                  
                  background-color: #67daff;
                   
                  
              }
              
              </style>
                  {#componente que contiene cada producto#}

        
                    <div id=\"{{product.id}}\" class=\"col-lg-4 col-md-6 mb-4 epale\" style=\"heigth:200px\">
                    <div  class=\"filterDiv {{product.categoria}}\">
                    {#link del producto#}
                    <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
                      {#imagen del producto#}
                      <img class=\"card-img-top img-fluid \" style=\"background-position:center center; background-size:cover\" src=\"{{product.link}}\" alt=\"\">
                      {#informacion cuando se hace hover#}
                      <div class=\"descripcionProducto\">
                        <a href=\"javascript:void(0)\" class=\"show-modal{{product.id}}\">
                          <h4 class=\"producto text{{product.id}}\">{{product.nombre}}</h4>
                          <h6 class=\"producto price{{product.id}}\">{{product.precio}} \$.</h6>
                        </a>
                      </div>
                      <br>
                      <br>
                      
                      {#AQUI ABRE EL DIALOG CUANDO SE HACE CLICK EN UN PRODUCTO #}
                      
                      <dialog class=\"mdl-dialog show-dialog{{product.id}}\">
                          <div class=\"mdl-dialog__content\">
                             
                              <div class=\"row\">
                              {#ESTA SECCION TIENE LA FOTO DEL PRODUCTO#}
                              <section class=\"foto col-lg-6 col-md-6\">
                                <img class=\"img-fluid\" src=\"{{product.link}}\" alt=\"\">  
                              </section>
                              {#ESTA SECCION TIENA LA INFORMACION DEL PRODUCTO#}
                              <section class=\"col-lg-6 col-md-6 mb-12\">
                                <h4 class=\"producto text-center center-text\">{{product.nombre}}</h4>
                                <h6 class=\"producto text-center center-text\">Price: {{product.precio}} \$</h6>
                                <h6 class=\"producto text-center center-text\">Description: {{product.Descripcion}}</h6>
                                {#AQUI ESTAN LOS BOTONES SOBRE LAS ACCIONES DE CADA PRODUCTO#}
                                <div class=\"mdl-dialog__actions mdl-dialog__actions--full-width\">
                                  
                                  {% if not is_granted('IS_AUTHENTICATED_FULLY')%}
                                  <p>You have to sign in to add products to your shopping cart!</p>
                                  <button type=\"button\" class=\"mdl-button close{{product.id}}\">Cerrar <i class=\"material-icons\">close</i></button>
                                  {% endif %}
                                  
                                  {% if is_granted('IS_AUTHENTICATED_FULLY')%}
                                    <hr style=\"height:10px\">                            
                                    <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarProducto' , { 'id' : product.id}) }}\" method=\"POST\">
                                      <button style=\"width:100%; background-color:#f44336; color:white; font-weight:bold\" type=\"submit\" class=\"mdl-button text-center center-text\">Add to Shopping Cart<i class=\"material-icons\">add_shopping_cart</i></button>
                                    </form>
                                    <form style=\"width:100%\" class=\"text-center center-text\" action=\"{{ path('agregarWishlist' , { 'id' : product.id}) }}\" method=\"POST\">
                                      <button style=\"width:100%; background-color:#E0E3E8\" type=\"submit\" class=\"mdl-button text-center center-text\"> Add To WishList <i class=\"material-icons\">list</i></button>
                                    </form>
                                    <form style=\"width:100%\" class=\"text-center center-text\" action=\"\" method=\"\">
                                      <button style=\"width:100%; background-color:#E0E3E8\" type=\"button\" class=\"mdl-button text-center center-text close{{product.id}}\">Close <i class=\"material-icons\">close</i></button>
                                    </form>
                                  {% endif %}
                                </div>
                              </section>
                              </div>
                            
                          </div>
                        </dialog>
                        
                      {#SCRIPT QUE SE CORRE PARA ABRIR EL DIALOG  #}
                      <script>
                        // SE CREA LA VARIABLE DIALOG PARA TODAS LAS VECES QUE A APAREZCA LA CLASE SHOWDIALOG((product.id))//
                        var dialog{{product.id}} = document.querySelector('.show-dialog{{product.id}}');
                        // SE CREA LA VARIAVLE DE BOTON DE MODAL PARA TODAS LAS CLASES SHOWMODAL PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                        var showModalButton{{product.id}} = document.querySelector('.show-modal{{product.id}}'); 
                        // SE CREA LA VARIABLE DE BOTON DE MODAL PARA TODAS LAS CLASES TEXT PARA CUANDO SE HAGA CLICK EN EL NOMBRE DEL PRODUCTO
                        var showTextButton{{product.id}} = document.querySelector('.text{{product.id}}');
                        // SE CREA LA VARIABLE DE BOTON DE MODEL PARA TODAS LAS CLASES PRICE PARA CUANDO SE HAGA CLICK EN EL PRECIO DEL PRODUCTO
                        var showPriceButton{{product.id}} = document.querySelector('.price{{product.id}}');
                        
                        if (!dialog{{product.id}}.showModal){
                          dialogPolyfill.registerDialog(dialog{{product.id}});
                        }
                        // FUNCION PARA CUANDO SE HAGA CLICK EN LA IMAGEN
                        showModalButton{{product.id}}.addEventListener('click', function() {
                          dialog{{product.id}}.showModal();
                        });
                        // FUNCION PARA CUANDO SE HAGA CLICK EN EL NOMBRE
                        showTextButton{{product.id}}.addEventListener('click', function() {
                          dialog{{product.id}}.showModal();
                        });
                        // FUNCION PARA CUANDO SE HAGA CLICK EN EL PRECIO
                        showPriceButton{{product.id}}.addEventListener('click', function() {
                          dialog{{product.id}}.showModal();
                        });
                        // FUNCION PARA CERRAR EL DIALOG
                        dialog{{product.id}}.querySelector('.close{{product.id}}').addEventListener('click', function() {
                          dialog{{product.id}}.close();
                        });
                      </script> 
                    </a>
                  </div>
              </div>

                {% endif %}
              {% endfor %}
              
          </div>
          
  
  {% endif %}
  
{% endblock %}
", "productos.html.twig", "/home/ubuntu/workspace/app/Resources/views/productos.html.twig");
    }
}
