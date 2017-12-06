<?php

/* base.html.twig */
class __TwigTemplate_ccb7c21c8ee1c1afccef7e4a69515dde7bfb6175025858ef133f6fc569bbf07c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'toplinks' => array($this, 'block_toplinks'),
            'links' => array($this, 'block_links'),
            'menuLateral' => array($this, 'block_menuLateral'),
            'carrusel' => array($this, 'block_carrusel'),
            'contenido' => array($this, 'block_contenido'),
            'test' => array($this, 'block_test'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57dd7ca09534770c03b8a926d56e2e619808c991695d18d939d60a9412a46616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57dd7ca09534770c03b8a926d56e2e619808c991695d18d939d60a9412a46616->enter($__internal_57dd7ca09534770c03b8a926d56e2e619808c991695d18d939d60a9412a46616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ae649015d2084ffd740d977414a8864a36f88286e8ef1977f2a115c4fcda49be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae649015d2084ffd740d977414a8864a36f88286e8ef1977f2a115c4fcda49be->enter($__internal_ae649015d2084ffd740d977414a8864a36f88286e8ef1977f2a115c4fcda49be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    ";
        // line 7
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    
    <!--bootstrap-->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
    <link rel=\"stylesheet\" href=\"https://code.getmdl.io/1.3.0/material.indigo-pink.min.css\">
    <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    <script defer src=\"https://code.getmdl.io/1.3.0/material.min.js\"></script>
    <!---->
    <link rel=\"icon\" type=\"image/jpg\" href=\"https://i.pinimg.com/originals/61/22/71/612271e1f5df88f419fc69c29f9feda9.jpg\">
    <!--font-->
    <link href=\"https://fonts.googleapis.com/css?family=Raleway:300,400,500\" rel=\"stylesheet\" type=\"text/css\">
    <!---->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    
    <script
  src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
  integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"
  crossorigin=\"anonymous\"></script>
  
  <link rel=\"stylesheet\" href=\"./bower_components/mdl-selectfield/dist/mdl-selectfield.min.css\">

<script src=\"./bower_components/mdl-selectfield/dist/mdl-selectfield.min.js\"></script>
    
    
    ";
        // line 32
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "    
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
    <link rel=\"stylesheet\" href=\"https://code.getmdl.io/1.3.0/material.indigo-pink.min.css\">
    
    
    <style>
      
      .footer {
  position: absolute;
  text-align: center;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 60px;
  line-height: 60px; /* Vertically center the text there */
  background-color: #adccff;
}

    </style>
</head>

 <body onload=\"cargando()\">
   
       
  <div class=\"mdl-layout mdl-js-layout mdl-layout--fixed-header\">
            
    ";
        // line 63
        echo "    <header class=\"mdl-layout__header\" style=\"background-color: #03a9f4\">
                <div class=\"mdl-layout__header-row\">
                
                ";
        // line 66
        $context["pais"] = "";
        // line 67
        echo "                ";
        $context["US"] = "United States";
        // line 68
        echo "                ";
        $context["VE"] = "Venezuela";
        // line 69
        echo "                ";
        $context["CO"] = "Colombia";
        // line 70
        echo "                ";
        $context["EN"] = "England";
        // line 71
        echo "
  
                <!-- Title -->
                <img  height=\"45\" width=\"45\" src=\"https://seeklogo.com/images/B/bonsai-logo-3CFD7B0AC3-seeklogo.com.png\">
                <span style=\"left: 20px\" class=\"mdl-layout-title\">Todo Bonsai eShop</span>
                <!-- Add spacer, to align navigation to the right -->
                <div class=\"mdl-layout-spacer\"></div>
                
                <!-- Navigation. We hide it in small screens. -->
                <nav class=\"mdl-navigation mdl-layout--large-screen-only\">
                  
                  
                  
                  
                  ";
        // line 85
        $this->displayBlock('toplinks', $context, $blocks);
        // line 86
        echo "                  
                </nav>
                <div aria-expanded=\"false\" role=\"button\" tabindex=\"0\" class=\"mdl-layout__drawer-button mdl-layout--small-screen-only\" style=\"color:black\"><i class=\"material-icons\"></i></div>
                </div>
            </header>
    
    ";
        // line 93
        echo "    <div class=\"mdl-layout__drawer\" style=\"color:black\">
            <span class=\"mdl-layout-title\">Menu</span>
            <nav class=\"mdl-navigation\">
              ";
        // line 96
        $this->displayBlock('links', $context, $blocks);
        // line 97
        echo "            </nav>
          </div>
    
    ";
        // line 101
        echo "    <main class=\"mdl-layout__content\" style=\"background-color: #E3EEFB\">
      
      ";
        // line 104
        echo "      ";
        $this->displayBlock('menuLateral', $context, $blocks);
        // line 105
        echo "      
      ";
        // line 107
        echo "      <div class=\"page-content\">
        
        ";
        // line 110
        echo "        ";
        $this->displayBlock('carrusel', $context, $blocks);
        // line 111
        echo "    
        
        <article class=\"container\">
          ";
        // line 115
        echo "          ";
        $this->displayBlock('contenido', $context, $blocks);
        // line 116
        echo "          
          ";
        // line 118
        echo "        <dialog class=\"mdl-dialog\">
            
          <h5 class=\"mdl-dialog__title\" style=\"font-size:25px; align:center\">Inicio de Sesión</h5>
          <br></br>
          ";
        // line 122
        $this->displayBlock('test', $context, $blocks);
        // line 124
        echo "        </dialog>
        <script>
          var dialog = document.querySelector('dialog');
          var showDialogButton = document.querySelector('#show-dialog');
          if (! dialog.showModal) {
            dialogPolyfill.registerDialog(dialog);
          }
          showDialogButton.addEventListener('click', function() {
            dialog.showModal();
          });
          dialog.querySelector('.close').addEventListener('click', function() {
            dialog.close();
          });
          
          var dialog2 = document.querySelector('dialog');
          var showDialogButton2 = document.querySelector('#show-dialog2');
          if (! dialog2.showModal) {
            dialogPolyfill.registerDialog(dialog);
          }
          showDialogButton2.addEventListener('click', function() {
            dialog2.showModal();
          });
          dialog.querySelector('.close').addEventListener('click', function() {
            dialog2.close();
          });
        </script>
        
        
        
        </article>
  
      </div>
     
      <footer class=\"mdl-mini-footer\">
        <div class=\"mdl-mini-footer__left-section\">
          <div class=\"mdl-logo\">Todo Bonsai C.A</div>
          <ul class=\"mdl-mini-footer__link-list\">
            <li><a href=\"#\">Help</a></li>
            <li><a href=\"#\">Privacy & Terms</a></li>
            
            ";
        // line 164
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 165
            echo "            
            ";
            // line 166
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "VE")) {
                // line 167
                echo "              <form action=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pais");
                echo "\" method=\"GET\" id=\"formPais\">
              <select class=\"form-control\" name=\"seleccion\" id=\"selPais\">
                <option selected value=\"VE\">Venezuela</a>
                <option value=\"US\">United States</a>
                <option value=\"EN\">England</a>
                <option value=\"CO\">Colombia</a>
              </select>
            </form>
            ";
            }
            // line 176
            echo "            ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "US")) {
                // line 177
                echo "              <form action=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pais");
                echo "\" method=\"GET\" id=\"formPais\">
              <select class=\"form-control\" name=\"seleccion\" id=\"selPais\">
                <option value=\"VE\">Venezuela</a>
                <option selected value=\"US\">United States</a>
                <option value=\"EN\">England</a>
                <option value=\"CO\">Colombia</a>
              </select>
            </form>
            ";
            }
            // line 186
            echo "            ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "EN")) {
                // line 187
                echo "              <form action=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pais");
                echo "\" method=\"GET\" id=\"formPais\">
              <select class=\"form-control\" name=\"seleccion\" id=\"selPais\">
                <option value=\"VE\">Venezuela</a>
                <option value=\"US\">United States</a>
                <option selected value=\"EN\">England</a>
                <option value=\"CO\">Colombia</a>
              </select>
            </form>
            ";
            }
            // line 196
            echo "            ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pais", array()) == "CO")) {
                // line 197
                echo "              <form action=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pais");
                echo "\" method=\"GET\" id=\"formPais\">
              <select class=\"form-control\" name=\"seleccion\" id=\"selPais\">
                <option value=\"VE\">Venezuela</a>
                <option value=\"US\">United States</a>
                <option value=\"EN\">England</a>
                <option selected value=\"CO\">Colombia</a>
              </select>
            </form>
            ";
            }
            // line 206
            echo "            
            ";
        } else {
            // line 208
            echo "            <form action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pais");
            echo "\" method=\"GET\" id=\"formPais\">
              <select class=\"form-control\" name=\"seleccion\" id=\"selPais\">
                <option selected >Inicie Sesion</option>
                <option value=\"VE\" disabled>Venezuela</a>
                <option value=\"US\" disabled>United States</a>
                <option value=\"EN\" disabled>England</a>
                <option value=\"CO\" disabled>Colombia</a>
              </select>
            </form>
            ";
        }
        // line 218
        echo "            

          </ul>
        </div>
      </footer>

";
        // line 231
        echo "
    </main>
    
    </div>
    
    
    
    <script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\" integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>
    
    
    <script
    src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
    integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"
    crossorigin=\"anonymous\"></script>
    </body>
      
      <script type=\"text/javascript\">
         \$(document).ready(function() {
          \$('#selPais').on('change', function() {
          this.form.submit();
    });
    });
    </script>
    
</html>";
        
        $__internal_57dd7ca09534770c03b8a926d56e2e619808c991695d18d939d60a9412a46616->leave($__internal_57dd7ca09534770c03b8a926d56e2e619808c991695d18d939d60a9412a46616_prof);

        
        $__internal_ae649015d2084ffd740d977414a8864a36f88286e8ef1977f2a115c4fcda49be->leave($__internal_ae649015d2084ffd740d977414a8864a36f88286e8ef1977f2a115c4fcda49be_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_96b8c15ccf552d70b9d0431ff7a2257b5e004c5c226dca48e16539420ba6bc2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96b8c15ccf552d70b9d0431ff7a2257b5e004c5c226dca48e16539420ba6bc2e->enter($__internal_96b8c15ccf552d70b9d0431ff7a2257b5e004c5c226dca48e16539420ba6bc2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_75c9e9821e0ee544e185284c14adc9e1c445e105197e22ca8c5de64923d65311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75c9e9821e0ee544e185284c14adc9e1c445e105197e22ca8c5de64923d65311->enter($__internal_75c9e9821e0ee544e185284c14adc9e1c445e105197e22ca8c5de64923d65311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Todo Bonsai C.A.";
        
        $__internal_75c9e9821e0ee544e185284c14adc9e1c445e105197e22ca8c5de64923d65311->leave($__internal_75c9e9821e0ee544e185284c14adc9e1c445e105197e22ca8c5de64923d65311_prof);

        
        $__internal_96b8c15ccf552d70b9d0431ff7a2257b5e004c5c226dca48e16539420ba6bc2e->leave($__internal_96b8c15ccf552d70b9d0431ff7a2257b5e004c5c226dca48e16539420ba6bc2e_prof);

    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a3be746361a37d37a40136580332b0e82119c74e503ce9c4cdd633e9b8b33143 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3be746361a37d37a40136580332b0e82119c74e503ce9c4cdd633e9b8b33143->enter($__internal_a3be746361a37d37a40136580332b0e82119c74e503ce9c4cdd633e9b8b33143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1f6deea62d486773067c914b53bc9d61537d3f39c9f163b3dd243307fb74f0a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f6deea62d486773067c914b53bc9d61537d3f39c9f163b3dd243307fb74f0a7->enter($__internal_1f6deea62d486773067c914b53bc9d61537d3f39c9f163b3dd243307fb74f0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 33
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" >
    ";
        
        $__internal_1f6deea62d486773067c914b53bc9d61537d3f39c9f163b3dd243307fb74f0a7->leave($__internal_1f6deea62d486773067c914b53bc9d61537d3f39c9f163b3dd243307fb74f0a7_prof);

        
        $__internal_a3be746361a37d37a40136580332b0e82119c74e503ce9c4cdd633e9b8b33143->leave($__internal_a3be746361a37d37a40136580332b0e82119c74e503ce9c4cdd633e9b8b33143_prof);

    }

    // line 85
    public function block_toplinks($context, array $blocks = array())
    {
        $__internal_de09bf2ac4ac20d4700bc3008547396b59483cb2aedadd167ebba5b44a1fc271 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de09bf2ac4ac20d4700bc3008547396b59483cb2aedadd167ebba5b44a1fc271->enter($__internal_de09bf2ac4ac20d4700bc3008547396b59483cb2aedadd167ebba5b44a1fc271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toplinks"));

        $__internal_a8e0b9c8e84c5c878a6f055a30bab0e8eb6e6d87cf35234913891d574da76f48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8e0b9c8e84c5c878a6f055a30bab0e8eb6e6d87cf35234913891d574da76f48->enter($__internal_a8e0b9c8e84c5c878a6f055a30bab0e8eb6e6d87cf35234913891d574da76f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toplinks"));

        
        $__internal_a8e0b9c8e84c5c878a6f055a30bab0e8eb6e6d87cf35234913891d574da76f48->leave($__internal_a8e0b9c8e84c5c878a6f055a30bab0e8eb6e6d87cf35234913891d574da76f48_prof);

        
        $__internal_de09bf2ac4ac20d4700bc3008547396b59483cb2aedadd167ebba5b44a1fc271->leave($__internal_de09bf2ac4ac20d4700bc3008547396b59483cb2aedadd167ebba5b44a1fc271_prof);

    }

    // line 96
    public function block_links($context, array $blocks = array())
    {
        $__internal_ab4754a908065daa2d9b314ef358e1f0b00f4517d1594be518c3b3229af82e84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab4754a908065daa2d9b314ef358e1f0b00f4517d1594be518c3b3229af82e84->enter($__internal_ab4754a908065daa2d9b314ef358e1f0b00f4517d1594be518c3b3229af82e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "links"));

        $__internal_20ea35c63e84d1bb9f767dc7a9e5d1aa841a2a1e397103ff5f110b036656c6de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20ea35c63e84d1bb9f767dc7a9e5d1aa841a2a1e397103ff5f110b036656c6de->enter($__internal_20ea35c63e84d1bb9f767dc7a9e5d1aa841a2a1e397103ff5f110b036656c6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "links"));

        
        $__internal_20ea35c63e84d1bb9f767dc7a9e5d1aa841a2a1e397103ff5f110b036656c6de->leave($__internal_20ea35c63e84d1bb9f767dc7a9e5d1aa841a2a1e397103ff5f110b036656c6de_prof);

        
        $__internal_ab4754a908065daa2d9b314ef358e1f0b00f4517d1594be518c3b3229af82e84->leave($__internal_ab4754a908065daa2d9b314ef358e1f0b00f4517d1594be518c3b3229af82e84_prof);

    }

    // line 104
    public function block_menuLateral($context, array $blocks = array())
    {
        $__internal_230dd0d9d2486481838947637561708b4b814f56557681b7647894aa6cd4ed6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_230dd0d9d2486481838947637561708b4b814f56557681b7647894aa6cd4ed6c->enter($__internal_230dd0d9d2486481838947637561708b4b814f56557681b7647894aa6cd4ed6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuLateral"));

        $__internal_70c15d06d0c99a30efc78c0e7406dca3926b438c7d1d5ca77992f6c2fe67ba9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c15d06d0c99a30efc78c0e7406dca3926b438c7d1d5ca77992f6c2fe67ba9b->enter($__internal_70c15d06d0c99a30efc78c0e7406dca3926b438c7d1d5ca77992f6c2fe67ba9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuLateral"));

        
        $__internal_70c15d06d0c99a30efc78c0e7406dca3926b438c7d1d5ca77992f6c2fe67ba9b->leave($__internal_70c15d06d0c99a30efc78c0e7406dca3926b438c7d1d5ca77992f6c2fe67ba9b_prof);

        
        $__internal_230dd0d9d2486481838947637561708b4b814f56557681b7647894aa6cd4ed6c->leave($__internal_230dd0d9d2486481838947637561708b4b814f56557681b7647894aa6cd4ed6c_prof);

    }

    // line 110
    public function block_carrusel($context, array $blocks = array())
    {
        $__internal_36d09f8efa0d9e6a5c3f3650444fcb848134682fe822a5ce9dc8b685a6dccad6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36d09f8efa0d9e6a5c3f3650444fcb848134682fe822a5ce9dc8b685a6dccad6->enter($__internal_36d09f8efa0d9e6a5c3f3650444fcb848134682fe822a5ce9dc8b685a6dccad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carrusel"));

        $__internal_3c90046d82b2ab68f3a9c1bb6a0d2435563c3c7bf26be2211aec5f29fe6b4edf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c90046d82b2ab68f3a9c1bb6a0d2435563c3c7bf26be2211aec5f29fe6b4edf->enter($__internal_3c90046d82b2ab68f3a9c1bb6a0d2435563c3c7bf26be2211aec5f29fe6b4edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carrusel"));

        
        $__internal_3c90046d82b2ab68f3a9c1bb6a0d2435563c3c7bf26be2211aec5f29fe6b4edf->leave($__internal_3c90046d82b2ab68f3a9c1bb6a0d2435563c3c7bf26be2211aec5f29fe6b4edf_prof);

        
        $__internal_36d09f8efa0d9e6a5c3f3650444fcb848134682fe822a5ce9dc8b685a6dccad6->leave($__internal_36d09f8efa0d9e6a5c3f3650444fcb848134682fe822a5ce9dc8b685a6dccad6_prof);

    }

    // line 115
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_b5a25fb5d3a8c101a5ba154164d7e6f2dc94550d8c2ebf36f23caf43d9f774a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5a25fb5d3a8c101a5ba154164d7e6f2dc94550d8c2ebf36f23caf43d9f774a5->enter($__internal_b5a25fb5d3a8c101a5ba154164d7e6f2dc94550d8c2ebf36f23caf43d9f774a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_50a9b090db9e8873f4fcb72b75f79d63ec6baedae9fe7fcf8a93ee8baa2ce1ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50a9b090db9e8873f4fcb72b75f79d63ec6baedae9fe7fcf8a93ee8baa2ce1ad->enter($__internal_50a9b090db9e8873f4fcb72b75f79d63ec6baedae9fe7fcf8a93ee8baa2ce1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        
        $__internal_50a9b090db9e8873f4fcb72b75f79d63ec6baedae9fe7fcf8a93ee8baa2ce1ad->leave($__internal_50a9b090db9e8873f4fcb72b75f79d63ec6baedae9fe7fcf8a93ee8baa2ce1ad_prof);

        
        $__internal_b5a25fb5d3a8c101a5ba154164d7e6f2dc94550d8c2ebf36f23caf43d9f774a5->leave($__internal_b5a25fb5d3a8c101a5ba154164d7e6f2dc94550d8c2ebf36f23caf43d9f774a5_prof);

    }

    // line 122
    public function block_test($context, array $blocks = array())
    {
        $__internal_1c0ff66491c716a47161a9b04cf9763d46a8ff5490b959d5f05f625e1b948de2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c0ff66491c716a47161a9b04cf9763d46a8ff5490b959d5f05f625e1b948de2->enter($__internal_1c0ff66491c716a47161a9b04cf9763d46a8ff5490b959d5f05f625e1b948de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "test"));

        $__internal_d2122552150eff94f119eb6857f9173640363778a6ca1c27917f86e8263180c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2122552150eff94f119eb6857f9173640363778a6ca1c27917f86e8263180c8->enter($__internal_d2122552150eff94f119eb6857f9173640363778a6ca1c27917f86e8263180c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "test"));

        // line 123
        echo "          ";
        
        $__internal_d2122552150eff94f119eb6857f9173640363778a6ca1c27917f86e8263180c8->leave($__internal_d2122552150eff94f119eb6857f9173640363778a6ca1c27917f86e8263180c8_prof);

        
        $__internal_1c0ff66491c716a47161a9b04cf9763d46a8ff5490b959d5f05f625e1b948de2->leave($__internal_1c0ff66491c716a47161a9b04cf9763d46a8ff5490b959d5f05f625e1b948de2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  499 => 123,  490 => 122,  473 => 115,  456 => 110,  439 => 104,  422 => 96,  405 => 85,  392 => 33,  383 => 32,  365 => 7,  329 => 231,  321 => 218,  307 => 208,  303 => 206,  290 => 197,  287 => 196,  274 => 187,  271 => 186,  258 => 177,  255 => 176,  242 => 167,  240 => 166,  237 => 165,  235 => 164,  193 => 124,  191 => 122,  185 => 118,  182 => 116,  179 => 115,  174 => 111,  171 => 110,  167 => 107,  164 => 105,  161 => 104,  157 => 101,  152 => 97,  150 => 96,  145 => 93,  137 => 86,  135 => 85,  119 => 71,  116 => 70,  113 => 69,  110 => 68,  107 => 67,  105 => 66,  100 => 63,  71 => 35,  69 => 32,  40 => 7,  33 => 1,);
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
<html lang=\"en\">
    <head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    {#<meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">#}
    <title>{% block title %}Todo Bonsai C.A.{% endblock %}</title>
    
    <!--bootstrap-->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
    <link rel=\"stylesheet\" href=\"https://code.getmdl.io/1.3.0/material.indigo-pink.min.css\">
    <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    <script defer src=\"https://code.getmdl.io/1.3.0/material.min.js\"></script>
    <!---->
    <link rel=\"icon\" type=\"image/jpg\" href=\"https://i.pinimg.com/originals/61/22/71/612271e1f5df88f419fc69c29f9feda9.jpg\">
    <!--font-->
    <link href=\"https://fonts.googleapis.com/css?family=Raleway:300,400,500\" rel=\"stylesheet\" type=\"text/css\">
    <!---->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    
    <script
  src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
  integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"
  crossorigin=\"anonymous\"></script>
  
  <link rel=\"stylesheet\" href=\"./bower_components/mdl-selectfield/dist/mdl-selectfield.min.css\">

<script src=\"./bower_components/mdl-selectfield/dist/mdl-selectfield.min.js\"></script>
    
    
    {% block stylesheets %}
      <link rel=\"stylesheet\" href=\"{{ asset('css/index.css') }}\" >
    {% endblock %}
    
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
    <link rel=\"stylesheet\" href=\"https://code.getmdl.io/1.3.0/material.indigo-pink.min.css\">
    
    
    <style>
      
      .footer {
  position: absolute;
  text-align: center;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 60px;
  line-height: 60px; /* Vertically center the text there */
  background-color: #adccff;
}

    </style>
</head>

 <body onload=\"cargando()\">
   
       
  <div class=\"mdl-layout mdl-js-layout mdl-layout--fixed-header\">
            
    {#MENU GENERAL DE LA PAGINA#}
    <header class=\"mdl-layout__header\" style=\"background-color: #03a9f4\">
                <div class=\"mdl-layout__header-row\">
                
                {% set pais=\"\" %}
                {% set US=\"United States\" %}
                {% set VE=\"Venezuela\" %}
                {% set CO=\"Colombia\" %}
                {% set EN=\"England\" %}

  
                <!-- Title -->
                <img  height=\"45\" width=\"45\" src=\"https://seeklogo.com/images/B/bonsai-logo-3CFD7B0AC3-seeklogo.com.png\">
                <span style=\"left: 20px\" class=\"mdl-layout-title\">Todo Bonsai eShop</span>
                <!-- Add spacer, to align navigation to the right -->
                <div class=\"mdl-layout-spacer\"></div>
                
                <!-- Navigation. We hide it in small screens. -->
                <nav class=\"mdl-navigation mdl-layout--large-screen-only\">
                  
                  
                  
                  
                  {% block toplinks %}{% endblock %}
                  
                </nav>
                <div aria-expanded=\"false\" role=\"button\" tabindex=\"0\" class=\"mdl-layout__drawer-button mdl-layout--small-screen-only\" style=\"color:black\"><i class=\"material-icons\"></i></div>
                </div>
            </header>
    
    {#LINKS DE LA PAGINA#}
    <div class=\"mdl-layout__drawer\" style=\"color:black\">
            <span class=\"mdl-layout-title\">Menu</span>
            <nav class=\"mdl-navigation\">
              {% block links %}{% endblock %}
            </nav>
          </div>
    
    {#AQUI EMPIEZA EL CONTENIDO#}
    <main class=\"mdl-layout__content\" style=\"background-color: #E3EEFB\">
      
      {#MENU LATERAL PARA LA PAGINA DE PRODUCTOS#}
      {% block menuLateral %}{% endblock %}
      
      {#AQUI EMPIEZA EL CONTENIDO DE CADA PAGINA, LO QUE NO ES MENU#}
      <div class=\"page-content\">
        
        {#BLOQUE PARA EL CARRUSEL DE LA VISTA PRINCIPAL#}
        {% block carrusel %}{% endblock %}
    
        
        <article class=\"container\">
          {#CONTENIDO DENTRO DEL CONTAINER DE LA PAGINA#}
          {% block contenido %}{% endblock %}
          
          {#DIALOG PARA EL LOGIN#}
        <dialog class=\"mdl-dialog\">
            
          <h5 class=\"mdl-dialog__title\" style=\"font-size:25px; align:center\">Inicio de Sesión</h5>
          <br></br>
          {% block test %}
          {% endblock %}
        </dialog>
        <script>
          var dialog = document.querySelector('dialog');
          var showDialogButton = document.querySelector('#show-dialog');
          if (! dialog.showModal) {
            dialogPolyfill.registerDialog(dialog);
          }
          showDialogButton.addEventListener('click', function() {
            dialog.showModal();
          });
          dialog.querySelector('.close').addEventListener('click', function() {
            dialog.close();
          });
          
          var dialog2 = document.querySelector('dialog');
          var showDialogButton2 = document.querySelector('#show-dialog2');
          if (! dialog2.showModal) {
            dialogPolyfill.registerDialog(dialog);
          }
          showDialogButton2.addEventListener('click', function() {
            dialog2.showModal();
          });
          dialog.querySelector('.close').addEventListener('click', function() {
            dialog2.close();
          });
        </script>
        
        
        
        </article>
  
      </div>
     
      <footer class=\"mdl-mini-footer\">
        <div class=\"mdl-mini-footer__left-section\">
          <div class=\"mdl-logo\">Todo Bonsai C.A</div>
          <ul class=\"mdl-mini-footer__link-list\">
            <li><a href=\"#\">Help</a></li>
            <li><a href=\"#\">Privacy & Terms</a></li>
            
            {% if app.user %}
            
            {% if app.user.pais == \"VE\" %}
              <form action=\"{{ path('pais') }}\" method=\"GET\" id=\"formPais\">
              <select class=\"form-control\" name=\"seleccion\" id=\"selPais\">
                <option selected value=\"VE\">Venezuela</a>
                <option value=\"US\">United States</a>
                <option value=\"EN\">England</a>
                <option value=\"CO\">Colombia</a>
              </select>
            </form>
            {% endif %}
            {% if app.user.pais == \"US\" %}
              <form action=\"{{ path('pais') }}\" method=\"GET\" id=\"formPais\">
              <select class=\"form-control\" name=\"seleccion\" id=\"selPais\">
                <option value=\"VE\">Venezuela</a>
                <option selected value=\"US\">United States</a>
                <option value=\"EN\">England</a>
                <option value=\"CO\">Colombia</a>
              </select>
            </form>
            {% endif %}
            {% if app.user.pais == \"EN\" %}
              <form action=\"{{ path('pais') }}\" method=\"GET\" id=\"formPais\">
              <select class=\"form-control\" name=\"seleccion\" id=\"selPais\">
                <option value=\"VE\">Venezuela</a>
                <option value=\"US\">United States</a>
                <option selected value=\"EN\">England</a>
                <option value=\"CO\">Colombia</a>
              </select>
            </form>
            {% endif %}
            {% if app.user.pais == \"CO\" %}
              <form action=\"{{ path('pais') }}\" method=\"GET\" id=\"formPais\">
              <select class=\"form-control\" name=\"seleccion\" id=\"selPais\">
                <option value=\"VE\">Venezuela</a>
                <option value=\"US\">United States</a>
                <option value=\"EN\">England</a>
                <option selected value=\"CO\">Colombia</a>
              </select>
            </form>
            {% endif %}
            
            {% else %}
            <form action=\"{{ path('pais') }}\" method=\"GET\" id=\"formPais\">
              <select class=\"form-control\" name=\"seleccion\" id=\"selPais\">
                <option selected >Inicie Sesion</option>
                <option value=\"VE\" disabled>Venezuela</a>
                <option value=\"US\" disabled>United States</a>
                <option value=\"EN\" disabled>England</a>
                <option value=\"CO\" disabled>Colombia</a>
              </select>
            </form>
            {% endif %}
            

          </ul>
        </div>
      </footer>

{#<script>#}
{#  function selectPais(sel)#}
{#    {#}
{#      var test = sel.options[sel.selectedIndex].value;#}
{#      alert(test);#}
{#    }#}
{#</script>#}

    </main>
    
    </div>
    
    
    
    <script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\" integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>
    
    
    <script
    src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
    integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"
    crossorigin=\"anonymous\"></script>
    </body>
      
      <script type=\"text/javascript\">
         \$(document).ready(function() {
          \$('#selPais').on('change', function() {
          this.form.submit();
    });
    });
    </script>
    
</html>", "base.html.twig", "/home/ubuntu/workspace/app/Resources/views/base.html.twig");
    }
}
