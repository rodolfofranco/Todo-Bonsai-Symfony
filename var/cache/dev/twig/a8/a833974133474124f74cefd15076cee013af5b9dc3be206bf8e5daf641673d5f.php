<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_f4cc05174d5cb6c533e6c14e712dda9c3996853cbbd21e9d95e1e58da47983ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd8b67190330750d5074709769e90e6ea4a5ec865f698cb2e1a619720aac66f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd8b67190330750d5074709769e90e6ea4a5ec865f698cb2e1a619720aac66f2->enter($__internal_bd8b67190330750d5074709769e90e6ea4a5ec865f698cb2e1a619720aac66f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_da90e7b0c659773879744ad67859c5e05c8b38aa80023b5f6cebaa89f4406aab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da90e7b0c659773879744ad67859c5e05c8b38aa80023b5f6cebaa89f4406aab->enter($__internal_da90e7b0c659773879744ad67859c5e05c8b38aa80023b5f6cebaa89f4406aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('radio_label', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 220
        echo "
";
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('form_row', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('button_row', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('choice_row', $context, $blocks);
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('date_row', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('time_row', $context, $blocks);
        // line 251
        echo "
";
        // line 252
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('radio_row', $context, $blocks);
        // line 270
        echo "
";
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_bd8b67190330750d5074709769e90e6ea4a5ec865f698cb2e1a619720aac66f2->leave($__internal_bd8b67190330750d5074709769e90e6ea4a5ec865f698cb2e1a619720aac66f2_prof);

        
        $__internal_da90e7b0c659773879744ad67859c5e05c8b38aa80023b5f6cebaa89f4406aab->leave($__internal_da90e7b0c659773879744ad67859c5e05c8b38aa80023b5f6cebaa89f4406aab_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_b21e133d89581a978586e047eb0fdf07db93d6cbcd09f6381b71c307baab913a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b21e133d89581a978586e047eb0fdf07db93d6cbcd09f6381b71c307baab913a->enter($__internal_b21e133d89581a978586e047eb0fdf07db93d6cbcd09f6381b71c307baab913a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_0793c97be98165c1d446e79c77d662e40d847d6cbd741d40e3a8ba9185bfb967 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0793c97be98165c1d446e79c77d662e40d847d6cbd741d40e3a8ba9185bfb967->enter($__internal_0793c97be98165c1d446e79c77d662e40d847d6cbd741d40e3a8ba9185bfb967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_0793c97be98165c1d446e79c77d662e40d847d6cbd741d40e3a8ba9185bfb967->leave($__internal_0793c97be98165c1d446e79c77d662e40d847d6cbd741d40e3a8ba9185bfb967_prof);

        
        $__internal_b21e133d89581a978586e047eb0fdf07db93d6cbcd09f6381b71c307baab913a->leave($__internal_b21e133d89581a978586e047eb0fdf07db93d6cbcd09f6381b71c307baab913a_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_a104798af782ccddc0aa9a139d8f6b9a0cf3be4f4c956e1d41185d292ebdf141 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a104798af782ccddc0aa9a139d8f6b9a0cf3be4f4c956e1d41185d292ebdf141->enter($__internal_a104798af782ccddc0aa9a139d8f6b9a0cf3be4f4c956e1d41185d292ebdf141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_2439cf47f5cd91db3b32d249fcc3b75d126c767a0b310f92b92fd4271d99ebda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2439cf47f5cd91db3b32d249fcc3b75d126c767a0b310f92b92fd4271d99ebda->enter($__internal_2439cf47f5cd91db3b32d249fcc3b75d126c767a0b310f92b92fd4271d99ebda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_2439cf47f5cd91db3b32d249fcc3b75d126c767a0b310f92b92fd4271d99ebda->leave($__internal_2439cf47f5cd91db3b32d249fcc3b75d126c767a0b310f92b92fd4271d99ebda_prof);

        
        $__internal_a104798af782ccddc0aa9a139d8f6b9a0cf3be4f4c956e1d41185d292ebdf141->leave($__internal_a104798af782ccddc0aa9a139d8f6b9a0cf3be4f4c956e1d41185d292ebdf141_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_85c17951ff4671fd991b8fb5770bb5858b502a0375b2ace5e8dc3f28e85b320b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85c17951ff4671fd991b8fb5770bb5858b502a0375b2ace5e8dc3f28e85b320b->enter($__internal_85c17951ff4671fd991b8fb5770bb5858b502a0375b2ace5e8dc3f28e85b320b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_f74e93a3777e88dc7cde4b8f01af9879833332b06a325fa3496324d058705a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f74e93a3777e88dc7cde4b8f01af9879833332b06a325fa3496324d058705a4e->enter($__internal_f74e93a3777e88dc7cde4b8f01af9879833332b06a325fa3496324d058705a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_f74e93a3777e88dc7cde4b8f01af9879833332b06a325fa3496324d058705a4e->leave($__internal_f74e93a3777e88dc7cde4b8f01af9879833332b06a325fa3496324d058705a4e_prof);

        
        $__internal_85c17951ff4671fd991b8fb5770bb5858b502a0375b2ace5e8dc3f28e85b320b->leave($__internal_85c17951ff4671fd991b8fb5770bb5858b502a0375b2ace5e8dc3f28e85b320b_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_7dd0a4079296d61023d175c0d5c9249c5f4c2cb05cb332f9b7c1b905e652e191 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dd0a4079296d61023d175c0d5c9249c5f4c2cb05cb332f9b7c1b905e652e191->enter($__internal_7dd0a4079296d61023d175c0d5c9249c5f4c2cb05cb332f9b7c1b905e652e191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_0599c7d3841c956d897413e526027c91093a5234ee9de4c0be99d917165e1349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0599c7d3841c956d897413e526027c91093a5234ee9de4c0be99d917165e1349->enter($__internal_0599c7d3841c956d897413e526027c91093a5234ee9de4c0be99d917165e1349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_ce3e7eb695630555a5fba4adf1a072430bff71fc579af32a14969ebf0d19c0a6 = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_844c4d236aa2e673e8873e047d0c66a3195fde358e8950fb06dc2b623f199592 = "{{") && ('' === $__internal_844c4d236aa2e673e8873e047d0c66a3195fde358e8950fb06dc2b623f199592 || 0 === strpos($__internal_ce3e7eb695630555a5fba4adf1a072430bff71fc579af32a14969ebf0d19c0a6, $__internal_844c4d236aa2e673e8873e047d0c66a3195fde358e8950fb06dc2b623f199592)));
        // line 25
        echo "        ";
        if ( !(isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if ((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_0599c7d3841c956d897413e526027c91093a5234ee9de4c0be99d917165e1349->leave($__internal_0599c7d3841c956d897413e526027c91093a5234ee9de4c0be99d917165e1349_prof);

        
        $__internal_7dd0a4079296d61023d175c0d5c9249c5f4c2cb05cb332f9b7c1b905e652e191->leave($__internal_7dd0a4079296d61023d175c0d5c9249c5f4c2cb05cb332f9b7c1b905e652e191_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_c73add3be474c2092e5c3881e26f23d5f4b4d59ae3494e8ad7dc661d690552e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c73add3be474c2092e5c3881e26f23d5f4b4d59ae3494e8ad7dc661d690552e6->enter($__internal_c73add3be474c2092e5c3881e26f23d5f4b4d59ae3494e8ad7dc661d690552e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_27d1b2a579d8b68370fe0b54d2695959bea30ce49b5b27992c1c634644f5db86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d1b2a579d8b68370fe0b54d2695959bea30ce49b5b27992c1c634644f5db86->enter($__internal_27d1b2a579d8b68370fe0b54d2695959bea30ce49b5b27992c1c634644f5db86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_27d1b2a579d8b68370fe0b54d2695959bea30ce49b5b27992c1c634644f5db86->leave($__internal_27d1b2a579d8b68370fe0b54d2695959bea30ce49b5b27992c1c634644f5db86_prof);

        
        $__internal_c73add3be474c2092e5c3881e26f23d5f4b4d59ae3494e8ad7dc661d690552e6->leave($__internal_c73add3be474c2092e5c3881e26f23d5f4b4d59ae3494e8ad7dc661d690552e6_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_4d5e81ac4e9079d716041721fd5f2d8690aff40cb27d6a88345cdebd78356a90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d5e81ac4e9079d716041721fd5f2d8690aff40cb27d6a88345cdebd78356a90->enter($__internal_4d5e81ac4e9079d716041721fd5f2d8690aff40cb27d6a88345cdebd78356a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_83031073c18eb651301b07d12b741a41bbad4f301ea67f56b2a704b49fb6f97c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83031073c18eb651301b07d12b741a41bbad4f301ea67f56b2a704b49fb6f97c->enter($__internal_83031073c18eb651301b07d12b741a41bbad4f301ea67f56b2a704b49fb6f97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_83031073c18eb651301b07d12b741a41bbad4f301ea67f56b2a704b49fb6f97c->leave($__internal_83031073c18eb651301b07d12b741a41bbad4f301ea67f56b2a704b49fb6f97c_prof);

        
        $__internal_4d5e81ac4e9079d716041721fd5f2d8690aff40cb27d6a88345cdebd78356a90->leave($__internal_4d5e81ac4e9079d716041721fd5f2d8690aff40cb27d6a88345cdebd78356a90_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_52555ab302ea294b663ab82410d0dda5bb66bba5f504d0c5b1c611bf3bc13209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52555ab302ea294b663ab82410d0dda5bb66bba5f504d0c5b1c611bf3bc13209->enter($__internal_52555ab302ea294b663ab82410d0dda5bb66bba5f504d0c5b1c611bf3bc13209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_73c3afb52abfb25f3377c56f26c34998a68ae061de5aef933873ebd796167f9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c3afb52abfb25f3377c56f26c34998a68ae061de5aef933873ebd796167f9a->enter($__internal_73c3afb52abfb25f3377c56f26c34998a68ae061de5aef933873ebd796167f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_73c3afb52abfb25f3377c56f26c34998a68ae061de5aef933873ebd796167f9a->leave($__internal_73c3afb52abfb25f3377c56f26c34998a68ae061de5aef933873ebd796167f9a_prof);

        
        $__internal_52555ab302ea294b663ab82410d0dda5bb66bba5f504d0c5b1c611bf3bc13209->leave($__internal_52555ab302ea294b663ab82410d0dda5bb66bba5f504d0c5b1c611bf3bc13209_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_183ee5496cefd86a3a425e2555c2e8c3ec644e8be2f10d912a69f96fefc0321c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_183ee5496cefd86a3a425e2555c2e8c3ec644e8be2f10d912a69f96fefc0321c->enter($__internal_183ee5496cefd86a3a425e2555c2e8c3ec644e8be2f10d912a69f96fefc0321c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_4b9565a87e7d18c750fe8782d8c0bf26d737a16d675822b2ca978302df582a27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b9565a87e7d18c750fe8782d8c0bf26d737a16d675822b2ca978302df582a27->enter($__internal_4b9565a87e7d18c750fe8782d8c0bf26d737a16d675822b2ca978302df582a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_4b9565a87e7d18c750fe8782d8c0bf26d737a16d675822b2ca978302df582a27->leave($__internal_4b9565a87e7d18c750fe8782d8c0bf26d737a16d675822b2ca978302df582a27_prof);

        
        $__internal_183ee5496cefd86a3a425e2555c2e8c3ec644e8be2f10d912a69f96fefc0321c->leave($__internal_183ee5496cefd86a3a425e2555c2e8c3ec644e8be2f10d912a69f96fefc0321c_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_fe6e378c06023c5b15134c6027750786f85fd43cd4491727f15b5625eb483d9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe6e378c06023c5b15134c6027750786f85fd43cd4491727f15b5625eb483d9d->enter($__internal_fe6e378c06023c5b15134c6027750786f85fd43cd4491727f15b5625eb483d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_fd6a97ee46db16efc490e48dac564ca2d5148473d09c1958c1bcf4f47735cb4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd6a97ee46db16efc490e48dac564ca2d5148473d09c1958c1bcf4f47735cb4d->enter($__internal_fd6a97ee46db16efc490e48dac564ca2d5148473d09c1958c1bcf4f47735cb4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) ? $context["table_class"] : $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if ((isset($context["with_invert"]) ? $context["with_invert"] : $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_fd6a97ee46db16efc490e48dac564ca2d5148473d09c1958c1bcf4f47735cb4d->leave($__internal_fd6a97ee46db16efc490e48dac564ca2d5148473d09c1958c1bcf4f47735cb4d_prof);

        
        $__internal_fe6e378c06023c5b15134c6027750786f85fd43cd4491727f15b5625eb483d9d->leave($__internal_fe6e378c06023c5b15134c6027750786f85fd43cd4491727f15b5625eb483d9d_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_3e2116aeed67276122bea3dc0b7d1a1ba1819d7df8b09b718327b0730e7af634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e2116aeed67276122bea3dc0b7d1a1ba1819d7df8b09b718327b0730e7af634->enter($__internal_3e2116aeed67276122bea3dc0b7d1a1ba1819d7df8b09b718327b0730e7af634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_bf2caf83da56f73aa940523a935e5ef9c4762998c228bec205aa83ca5e9e7615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf2caf83da56f73aa940523a935e5ef9c4762998c228bec205aa83ca5e9e7615->enter($__internal_bf2caf83da56f73aa940523a935e5ef9c4762998c228bec205aa83ca5e9e7615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_bf2caf83da56f73aa940523a935e5ef9c4762998c228bec205aa83ca5e9e7615->leave($__internal_bf2caf83da56f73aa940523a935e5ef9c4762998c228bec205aa83ca5e9e7615_prof);

        
        $__internal_3e2116aeed67276122bea3dc0b7d1a1ba1819d7df8b09b718327b0730e7af634->leave($__internal_3e2116aeed67276122bea3dc0b7d1a1ba1819d7df8b09b718327b0730e7af634_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_673531787165569c7b890dc20be5e209821ae266736987ad4a368bbc472a2ca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_673531787165569c7b890dc20be5e209821ae266736987ad4a368bbc472a2ca5->enter($__internal_673531787165569c7b890dc20be5e209821ae266736987ad4a368bbc472a2ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_1a5c06761bcf1532c59153e6e52c1a871a4f54c5c6dc6755d7a15a09b24b3802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a5c06761bcf1532c59153e6e52c1a871a4f54c5c6dc6755d7a15a09b24b3802->enter($__internal_1a5c06761bcf1532c59153e6e52c1a871a4f54c5c6dc6755d7a15a09b24b3802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_1a5c06761bcf1532c59153e6e52c1a871a4f54c5c6dc6755d7a15a09b24b3802->leave($__internal_1a5c06761bcf1532c59153e6e52c1a871a4f54c5c6dc6755d7a15a09b24b3802_prof);

        
        $__internal_673531787165569c7b890dc20be5e209821ae266736987ad4a368bbc472a2ca5->leave($__internal_673531787165569c7b890dc20be5e209821ae266736987ad4a368bbc472a2ca5_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_8740b07cdeb871ac6a8d4c559151ad628b19ae5eabf92953c9811596d2e63174 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8740b07cdeb871ac6a8d4c559151ad628b19ae5eabf92953c9811596d2e63174->enter($__internal_8740b07cdeb871ac6a8d4c559151ad628b19ae5eabf92953c9811596d2e63174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_4b88c6abb37cdbdca270251f151fe7fdf04246c3491cb408cd26378ab9d3457e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b88c6abb37cdbdca270251f151fe7fdf04246c3491cb408cd26378ab9d3457e->enter($__internal_4b88c6abb37cdbdca270251f151fe7fdf04246c3491cb408cd26378ab9d3457e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_4b88c6abb37cdbdca270251f151fe7fdf04246c3491cb408cd26378ab9d3457e->leave($__internal_4b88c6abb37cdbdca270251f151fe7fdf04246c3491cb408cd26378ab9d3457e_prof);

        
        $__internal_8740b07cdeb871ac6a8d4c559151ad628b19ae5eabf92953c9811596d2e63174->leave($__internal_8740b07cdeb871ac6a8d4c559151ad628b19ae5eabf92953c9811596d2e63174_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_f18cd73ff40b2b9749ffaa220ef86e2a54ac4886226e0688b62acaf43879f5b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f18cd73ff40b2b9749ffaa220ef86e2a54ac4886226e0688b62acaf43879f5b9->enter($__internal_f18cd73ff40b2b9749ffaa220ef86e2a54ac4886226e0688b62acaf43879f5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_6564156f27cc5b60864209b286e6da93390f2c7305902b7f1e4123c38e5455c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6564156f27cc5b60864209b286e6da93390f2c7305902b7f1e4123c38e5455c0->enter($__internal_6564156f27cc5b60864209b286e6da93390f2c7305902b7f1e4123c38e5455c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_6564156f27cc5b60864209b286e6da93390f2c7305902b7f1e4123c38e5455c0->leave($__internal_6564156f27cc5b60864209b286e6da93390f2c7305902b7f1e4123c38e5455c0_prof);

        
        $__internal_f18cd73ff40b2b9749ffaa220ef86e2a54ac4886226e0688b62acaf43879f5b9->leave($__internal_f18cd73ff40b2b9749ffaa220ef86e2a54ac4886226e0688b62acaf43879f5b9_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_b5599f10ae323388df71a687a5640e09cee327beff1a0fe67191bd1c2fcd0289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5599f10ae323388df71a687a5640e09cee327beff1a0fe67191bd1c2fcd0289->enter($__internal_b5599f10ae323388df71a687a5640e09cee327beff1a0fe67191bd1c2fcd0289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_9840d3008ac6b9f162f85f6e5bf71bb92329db766e65a22e5c1f4a43999ed5be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9840d3008ac6b9f162f85f6e5bf71bb92329db766e65a22e5c1f4a43999ed5be->enter($__internal_9840d3008ac6b9f162f85f6e5bf71bb92329db766e65a22e5c1f4a43999ed5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_9840d3008ac6b9f162f85f6e5bf71bb92329db766e65a22e5c1f4a43999ed5be->leave($__internal_9840d3008ac6b9f162f85f6e5bf71bb92329db766e65a22e5c1f4a43999ed5be_prof);

        
        $__internal_b5599f10ae323388df71a687a5640e09cee327beff1a0fe67191bd1c2fcd0289->leave($__internal_b5599f10ae323388df71a687a5640e09cee327beff1a0fe67191bd1c2fcd0289_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_30b9ce4c66fa7b67e333420f94dc97507de6e0387ede69bc12a5e7fdfd8c728a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30b9ce4c66fa7b67e333420f94dc97507de6e0387ede69bc12a5e7fdfd8c728a->enter($__internal_30b9ce4c66fa7b67e333420f94dc97507de6e0387ede69bc12a5e7fdfd8c728a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_4f8674c0a2c1545f143c0bc752679bcd486812c5f111d59b157bbc22a24f160d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f8674c0a2c1545f143c0bc752679bcd486812c5f111d59b157bbc22a24f160d->enter($__internal_4f8674c0a2c1545f143c0bc752679bcd486812c5f111d59b157bbc22a24f160d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_4f8674c0a2c1545f143c0bc752679bcd486812c5f111d59b157bbc22a24f160d->leave($__internal_4f8674c0a2c1545f143c0bc752679bcd486812c5f111d59b157bbc22a24f160d_prof);

        
        $__internal_30b9ce4c66fa7b67e333420f94dc97507de6e0387ede69bc12a5e7fdfd8c728a->leave($__internal_30b9ce4c66fa7b67e333420f94dc97507de6e0387ede69bc12a5e7fdfd8c728a_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_e7a58a8c414eb8ba03669da46aca04c91ad29b92dffb69ff0c81df0c48cf1faa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7a58a8c414eb8ba03669da46aca04c91ad29b92dffb69ff0c81df0c48cf1faa->enter($__internal_e7a58a8c414eb8ba03669da46aca04c91ad29b92dffb69ff0c81df0c48cf1faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_a7e6231f76a10301cdcffe1d4b96517fc9638c9344d91d90a5e381964ea7dc51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7e6231f76a10301cdcffe1d4b96517fc9638c9344d91d90a5e381964ea7dc51->enter($__internal_a7e6231f76a10301cdcffe1d4b96517fc9638c9344d91d90a5e381964ea7dc51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_a7e6231f76a10301cdcffe1d4b96517fc9638c9344d91d90a5e381964ea7dc51->leave($__internal_a7e6231f76a10301cdcffe1d4b96517fc9638c9344d91d90a5e381964ea7dc51_prof);

        
        $__internal_e7a58a8c414eb8ba03669da46aca04c91ad29b92dffb69ff0c81df0c48cf1faa->leave($__internal_e7a58a8c414eb8ba03669da46aca04c91ad29b92dffb69ff0c81df0c48cf1faa_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_c1896e3a5afc8e6d5bc49248eec131bb561738c199cdc5052d9f6558e37edd2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1896e3a5afc8e6d5bc49248eec131bb561738c199cdc5052d9f6558e37edd2f->enter($__internal_c1896e3a5afc8e6d5bc49248eec131bb561738c199cdc5052d9f6558e37edd2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_c4e9f5cbe14b37d4c2caed74455a3ea3a5002d466e1c9ca13dd58c49e710c0ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e9f5cbe14b37d4c2caed74455a3ea3a5002d466e1c9ca13dd58c49e710c0ec->enter($__internal_c4e9f5cbe14b37d4c2caed74455a3ea3a5002d466e1c9ca13dd58c49e710c0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_c4e9f5cbe14b37d4c2caed74455a3ea3a5002d466e1c9ca13dd58c49e710c0ec->leave($__internal_c4e9f5cbe14b37d4c2caed74455a3ea3a5002d466e1c9ca13dd58c49e710c0ec_prof);

        
        $__internal_c1896e3a5afc8e6d5bc49248eec131bb561738c199cdc5052d9f6558e37edd2f->leave($__internal_c1896e3a5afc8e6d5bc49248eec131bb561738c199cdc5052d9f6558e37edd2f_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_f8cf7f7e78f0c8e82419a70ba738082c589a6853da87f4618b3fc2c9bf0a4c2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8cf7f7e78f0c8e82419a70ba738082c589a6853da87f4618b3fc2c9bf0a4c2d->enter($__internal_f8cf7f7e78f0c8e82419a70ba738082c589a6853da87f4618b3fc2c9bf0a4c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_76e5b353b81dddf2aa9d0150e57fd3ab24e1ba5c30b77cc345d705f753cdb75b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76e5b353b81dddf2aa9d0150e57fd3ab24e1ba5c30b77cc345d705f753cdb75b->enter($__internal_76e5b353b81dddf2aa9d0150e57fd3ab24e1ba5c30b77cc345d705f753cdb75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 197
        echo "    ";
        // line 198
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 199
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 200
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 201
                echo "        ";
            }
            // line 202
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 206
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 207
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 208
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 209
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 212
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 215
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 216
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 217
            echo "</label>
    ";
        }
        
        $__internal_76e5b353b81dddf2aa9d0150e57fd3ab24e1ba5c30b77cc345d705f753cdb75b->leave($__internal_76e5b353b81dddf2aa9d0150e57fd3ab24e1ba5c30b77cc345d705f753cdb75b_prof);

        
        $__internal_f8cf7f7e78f0c8e82419a70ba738082c589a6853da87f4618b3fc2c9bf0a4c2d->leave($__internal_f8cf7f7e78f0c8e82419a70ba738082c589a6853da87f4618b3fc2c9bf0a4c2d_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_988bab06a431b110862794d94d91c53241534eb1aec041c11e3e48abd5850ce1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_988bab06a431b110862794d94d91c53241534eb1aec041c11e3e48abd5850ce1->enter($__internal_988bab06a431b110862794d94d91c53241534eb1aec041c11e3e48abd5850ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_3a5c91efb26d1e3e10852d912bef466b8edae932b4b0f0a061a1ef20eb91a54d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a5c91efb26d1e3e10852d912bef466b8edae932b4b0f0a061a1ef20eb91a54d->enter($__internal_3a5c91efb26d1e3e10852d912bef466b8edae932b4b0f0a061a1ef20eb91a54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 224
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 228
        echo "</div>";
        
        $__internal_3a5c91efb26d1e3e10852d912bef466b8edae932b4b0f0a061a1ef20eb91a54d->leave($__internal_3a5c91efb26d1e3e10852d912bef466b8edae932b4b0f0a061a1ef20eb91a54d_prof);

        
        $__internal_988bab06a431b110862794d94d91c53241534eb1aec041c11e3e48abd5850ce1->leave($__internal_988bab06a431b110862794d94d91c53241534eb1aec041c11e3e48abd5850ce1_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_8142b169807f18b78389e3ad35a42eb56dec378e520aaf14a059da9cccf27090 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8142b169807f18b78389e3ad35a42eb56dec378e520aaf14a059da9cccf27090->enter($__internal_8142b169807f18b78389e3ad35a42eb56dec378e520aaf14a059da9cccf27090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_f92e906f4fb81b3842027c2e44a72ed176cedc4e5120c541d5be4b6a929aa352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f92e906f4fb81b3842027c2e44a72ed176cedc4e5120c541d5be4b6a929aa352->enter($__internal_f92e906f4fb81b3842027c2e44a72ed176cedc4e5120c541d5be4b6a929aa352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_f92e906f4fb81b3842027c2e44a72ed176cedc4e5120c541d5be4b6a929aa352->leave($__internal_f92e906f4fb81b3842027c2e44a72ed176cedc4e5120c541d5be4b6a929aa352_prof);

        
        $__internal_8142b169807f18b78389e3ad35a42eb56dec378e520aaf14a059da9cccf27090->leave($__internal_8142b169807f18b78389e3ad35a42eb56dec378e520aaf14a059da9cccf27090_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_5257b51136ecb0977b100471cf93da368133da464ea9d66b62da114bda426f38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5257b51136ecb0977b100471cf93da368133da464ea9d66b62da114bda426f38->enter($__internal_5257b51136ecb0977b100471cf93da368133da464ea9d66b62da114bda426f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_40dfa39a34f2f4da5519c43cb9348e71575be5ada411799b7dfddc2894d84f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40dfa39a34f2f4da5519c43cb9348e71575be5ada411799b7dfddc2894d84f10->enter($__internal_40dfa39a34f2f4da5519c43cb9348e71575be5ada411799b7dfddc2894d84f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_40dfa39a34f2f4da5519c43cb9348e71575be5ada411799b7dfddc2894d84f10->leave($__internal_40dfa39a34f2f4da5519c43cb9348e71575be5ada411799b7dfddc2894d84f10_prof);

        
        $__internal_5257b51136ecb0977b100471cf93da368133da464ea9d66b62da114bda426f38->leave($__internal_5257b51136ecb0977b100471cf93da368133da464ea9d66b62da114bda426f38_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_fd80d41637fcac9f29090fb047e777060283c8d7eb00164ed066ced8cbb7f3d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd80d41637fcac9f29090fb047e777060283c8d7eb00164ed066ced8cbb7f3d0->enter($__internal_fd80d41637fcac9f29090fb047e777060283c8d7eb00164ed066ced8cbb7f3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_f4ca3c71c1caac421cffa7d1c9ca14f0bfa395107b6932b78edd6d60f6f34fe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4ca3c71c1caac421cffa7d1c9ca14f0bfa395107b6932b78edd6d60f6f34fe6->enter($__internal_f4ca3c71c1caac421cffa7d1c9ca14f0bfa395107b6932b78edd6d60f6f34fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f4ca3c71c1caac421cffa7d1c9ca14f0bfa395107b6932b78edd6d60f6f34fe6->leave($__internal_f4ca3c71c1caac421cffa7d1c9ca14f0bfa395107b6932b78edd6d60f6f34fe6_prof);

        
        $__internal_fd80d41637fcac9f29090fb047e777060283c8d7eb00164ed066ced8cbb7f3d0->leave($__internal_fd80d41637fcac9f29090fb047e777060283c8d7eb00164ed066ced8cbb7f3d0_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_f1580a57bbf0c09786afe5447bcb0d4a1500b53221934f39770f3f6913b0cd59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1580a57bbf0c09786afe5447bcb0d4a1500b53221934f39770f3f6913b0cd59->enter($__internal_f1580a57bbf0c09786afe5447bcb0d4a1500b53221934f39770f3f6913b0cd59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_e21e690b331637a3313b2240c990da3f85f6fb7b6f77bf875fc8e27ba0e15d8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e21e690b331637a3313b2240c990da3f85f6fb7b6f77bf875fc8e27ba0e15d8f->enter($__internal_e21e690b331637a3313b2240c990da3f85f6fb7b6f77bf875fc8e27ba0e15d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e21e690b331637a3313b2240c990da3f85f6fb7b6f77bf875fc8e27ba0e15d8f->leave($__internal_e21e690b331637a3313b2240c990da3f85f6fb7b6f77bf875fc8e27ba0e15d8f_prof);

        
        $__internal_f1580a57bbf0c09786afe5447bcb0d4a1500b53221934f39770f3f6913b0cd59->leave($__internal_f1580a57bbf0c09786afe5447bcb0d4a1500b53221934f39770f3f6913b0cd59_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_25d978cc15c7acf5c71a282f9e735cf721641fbe5391302348e6ea54616ac780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25d978cc15c7acf5c71a282f9e735cf721641fbe5391302348e6ea54616ac780->enter($__internal_25d978cc15c7acf5c71a282f9e735cf721641fbe5391302348e6ea54616ac780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_765caa3c15d1c1318261da4d4ec91d33c343cbda36d04632c49787d6ac343c7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_765caa3c15d1c1318261da4d4ec91d33c343cbda36d04632c49787d6ac343c7c->enter($__internal_765caa3c15d1c1318261da4d4ec91d33c343cbda36d04632c49787d6ac343c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_765caa3c15d1c1318261da4d4ec91d33c343cbda36d04632c49787d6ac343c7c->leave($__internal_765caa3c15d1c1318261da4d4ec91d33c343cbda36d04632c49787d6ac343c7c_prof);

        
        $__internal_25d978cc15c7acf5c71a282f9e735cf721641fbe5391302348e6ea54616ac780->leave($__internal_25d978cc15c7acf5c71a282f9e735cf721641fbe5391302348e6ea54616ac780_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_c050bdfdede0642b503be1bd913d86498a91f87be80bf8a70fb866c5bc45f696 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c050bdfdede0642b503be1bd913d86498a91f87be80bf8a70fb866c5bc45f696->enter($__internal_c050bdfdede0642b503be1bd913d86498a91f87be80bf8a70fb866c5bc45f696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_0937fb84c22fd374960d64c498a3f599c1310cacc388529f5667e8697b3a4bea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0937fb84c22fd374960d64c498a3f599c1310cacc388529f5667e8697b3a4bea->enter($__internal_0937fb84c22fd374960d64c498a3f599c1310cacc388529f5667e8697b3a4bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 258
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 261
        echo "</div>";
        
        $__internal_0937fb84c22fd374960d64c498a3f599c1310cacc388529f5667e8697b3a4bea->leave($__internal_0937fb84c22fd374960d64c498a3f599c1310cacc388529f5667e8697b3a4bea_prof);

        
        $__internal_c050bdfdede0642b503be1bd913d86498a91f87be80bf8a70fb866c5bc45f696->leave($__internal_c050bdfdede0642b503be1bd913d86498a91f87be80bf8a70fb866c5bc45f696_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_0b2fa0fffd802b1cb635d9aa24d5d91d98b516c35ee0cb6a45e75f017b0ab09d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b2fa0fffd802b1cb635d9aa24d5d91d98b516c35ee0cb6a45e75f017b0ab09d->enter($__internal_0b2fa0fffd802b1cb635d9aa24d5d91d98b516c35ee0cb6a45e75f017b0ab09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_78e352a3c2bb6b93a0a474e05f0ede96dca5c214e8971dd57bacf4d61fd8132f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78e352a3c2bb6b93a0a474e05f0ede96dca5c214e8971dd57bacf4d61fd8132f->enter($__internal_78e352a3c2bb6b93a0a474e05f0ede96dca5c214e8971dd57bacf4d61fd8132f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 265
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 266
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 268
        echo "</div>";
        
        $__internal_78e352a3c2bb6b93a0a474e05f0ede96dca5c214e8971dd57bacf4d61fd8132f->leave($__internal_78e352a3c2bb6b93a0a474e05f0ede96dca5c214e8971dd57bacf4d61fd8132f_prof);

        
        $__internal_0b2fa0fffd802b1cb635d9aa24d5d91d98b516c35ee0cb6a45e75f017b0ab09d->leave($__internal_0b2fa0fffd802b1cb635d9aa24d5d91d98b516c35ee0cb6a45e75f017b0ab09d_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_0a6cee0c61f5e13517a32ad416d9abb07bfcef691f346a04c8f30e186b19b70d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a6cee0c61f5e13517a32ad416d9abb07bfcef691f346a04c8f30e186b19b70d->enter($__internal_0a6cee0c61f5e13517a32ad416d9abb07bfcef691f346a04c8f30e186b19b70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_2812dafd6f29b6dc585dc89afc2a9b6360d6830d4a14f9fdb26c2fc99f35e3e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2812dafd6f29b6dc585dc89afc2a9b6360d6830d4a14f9fdb26c2fc99f35e3e5->enter($__internal_2812dafd6f29b6dc585dc89afc2a9b6360d6830d4a14f9fdb26c2fc99f35e3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 274
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 275
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 276
            echo "    <ul class=\"list-unstyled\">";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 278
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "</ul>
    ";
            // line 281
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_2812dafd6f29b6dc585dc89afc2a9b6360d6830d4a14f9fdb26c2fc99f35e3e5->leave($__internal_2812dafd6f29b6dc585dc89afc2a9b6360d6830d4a14f9fdb26c2fc99f35e3e5_prof);

        
        $__internal_0a6cee0c61f5e13517a32ad416d9abb07bfcef691f346a04c8f30e186b19b70d->leave($__internal_0a6cee0c61f5e13517a32ad416d9abb07bfcef691f346a04c8f30e186b19b70d_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1135 => 281,  1132 => 280,  1124 => 278,  1120 => 277,  1118 => 276,  1112 => 275,  1110 => 274,  1101 => 273,  1091 => 268,  1089 => 267,  1087 => 266,  1081 => 265,  1072 => 264,  1062 => 261,  1060 => 260,  1058 => 259,  1052 => 258,  1043 => 257,  1033 => 254,  1031 => 253,  1022 => 252,  1012 => 249,  1010 => 248,  1001 => 247,  991 => 244,  989 => 243,  980 => 242,  970 => 239,  968 => 238,  959 => 237,  949 => 234,  947 => 233,  945 => 232,  936 => 231,  926 => 228,  924 => 227,  922 => 226,  920 => 225,  914 => 224,  905 => 223,  893 => 217,  889 => 216,  874 => 215,  870 => 212,  867 => 209,  866 => 208,  865 => 207,  863 => 206,  860 => 205,  857 => 204,  854 => 203,  851 => 202,  848 => 201,  845 => 200,  842 => 199,  839 => 198,  837 => 197,  828 => 196,  818 => 193,  809 => 192,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 273,  200 => 272,  197 => 270,  195 => 264,  192 => 263,  190 => 257,  187 => 256,  185 => 252,  182 => 251,  180 => 247,  177 => 246,  175 => 242,  172 => 241,  170 => 237,  167 => 236,  165 => 231,  162 => 230,  160 => 223,  157 => 222,  154 => 220,  152 => 196,  149 => 195,  147 => 192,  144 => 191,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
