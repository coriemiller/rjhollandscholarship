<?php

/* forms/fields/file/file.html.twig */
class __TwigTemplate_aac242e2fa46631bf1a91e7b1bfe5721e4509c1ec7a6c663973deb14545e310a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/file/file.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
            'input_attributes' => array($this, 'block_input_attributes'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["defaults"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "form", array());
        // line 3
        $context["files"] = twig_array_merge($this->getAttribute((isset($context["defaults"]) ? $context["defaults"] : null), "files", array()), ((array_key_exists("field", $context)) ? (_twig_default_filter((isset($context["field"]) ? $context["field"] : null), array())) : (array())));
        // line 4
        $context["limit"] = (( !$this->getAttribute((isset($context["field"]) ? $context["field"] : null), "multiple", array())) ? (1) : ($this->getAttribute((isset($context["files"]) ? $context["files"] : null), "limit", array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 55
    public function block_input($context, array $blocks = array())
    {
        // line 56
        echo "    ";
        $context["page_can_upload"] = ((isset($context["exists"]) ? $context["exists"] : null) || ((((isset($context["type"]) ? $context["type"] : null) == "page") &&  !(isset($context["exists"]) ? $context["exists"] : null)) &&  !((is_string($__internal_98acbae39cee1963b192850881f88ce8947fb15d1f9308344abc8e8c4cb3f321 = $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "destination", array())) && is_string($__internal_e90fd6966e1a330e3fb651439eb453d37d047492727874ff9a255c783d478295 = "@self") && ('' === $__internal_e90fd6966e1a330e3fb651439eb453d37d047492727874ff9a255c783d478295 || 0 === strpos($__internal_98acbae39cee1963b192850881f88ce8947fb15d1f9308344abc8e8c4cb3f321, $__internal_e90fd6966e1a330e3fb651439eb453d37d047492727874ff9a255c783d478295))) || (is_string($__internal_5b016e7e7580079f49d4964d46e236b30287ca7f761d24a86b188958aa769051 = $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "destination", array())) && is_string($__internal_2cf66ec0b144480eb833cc20366f4955ad1e77c1ff4d04630faaeb76ed61788e = "self@") && ('' === $__internal_2cf66ec0b144480eb833cc20366f4955ad1e77c1ff4d04630faaeb76ed61788e || 0 === strpos($__internal_5b016e7e7580079f49d4964d46e236b30287ca7f761d24a86b188958aa769051, $__internal_2cf66ec0b144480eb833cc20366f4955ad1e77c1ff4d04630faaeb76ed61788e))))));
        // line 57
        echo "
    ";
        // line 58
        $context["settings"] = array("name" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()), "paramName" => ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))) . (($this->getAttribute((isset($context["files"]) ? $context["files"] : null), "multiple", array())) ? ("[]") : (""))), "limit" => (isset($context["limit"]) ? $context["limit"] : null), "filesize" => $this->getAttribute((isset($context["files"]) ? $context["files"] : null), "filesize", array()), "accept" => $this->getAttribute((isset($context["files"]) ? $context["files"] : null), "accept", array()));
        // line 59
        echo "    <div class=\"form-input-wrapper dropzone files-upload form-input-file ";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "size", array());
        echo "\" data-grav-file-settings=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["settings"]) ? $context["settings"] : null)), "html_attr");
        echo "\">
        <input
                ";
        // line 62
        echo "                ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 70
        echo "        />

        ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
        foreach ($context['_seq'] as $context["path"] => $context["file"]) {
            // line 73
            echo "            ";
            echo $this->getAttribute($this, "preview", array(0 => $context["path"], 1 => $context["file"], 2 => $context), "method");
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['path'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "        ";
        $this->loadTemplate("forms/fields/hidden/hidden.html.twig", "forms/fields/file/file.html.twig", 75)->display(array_merge($context, array("field" => array("name" => ("_json." . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))), "value" => twig_jsonencode_filter((isset($context["value"]) ? $context["value"] : null)))));
        // line 76
        echo "    </div>

    ";
        // line 78
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "plugin://form/assets/form.min.js", 1 => array("group" => "bottom", "loading" => "defer")), "method");
        // line 79
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "plugin://form/assets/dropzone.min.css", 1 => array("group" => "form")), "method");
        // line 80
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(0 => "form"), "method");
        echo "
    ";
        // line 81
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addInlineJs", array(0 => (((((((((((((((((((((((((((((("
    window.GravForm = window.GravForm || {};
    window.GravForm.config = {
        current_url: '" . $this->getAttribute(        // line 84
(isset($context["uri"]) ? $context["uri"] : null), "route", array(0 => true), "method")) . "',
        base_url_relative: '") .         // line 85
(isset($context["base_url_relative"]) ? $context["base_url_relative"] : null)) . "',
        param_sep: '") . $this->getAttribute($this->getAttribute(        // line 86
(isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "',
        form_nonce: '") . $this->getAttribute(        // line 87
(isset($context["form"]) ? $context["form"] : null), "getNonce", array())) . "',
    };
    window.GravForm.translations = {};
    window.GravForm.translations['PLUGIN_FORM'] = {
        'DROPZONE_CANCEL_UPLOAD': ") . twig_jsonencode_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_FORM.DROPZONE_CANCEL_UPLOAD"))) . ",
        'DROPZONE_CANCEL_UPLOAD_CONFIRMATION': ") . twig_jsonencode_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_FORM.DROPZONE_CANCEL_UPLOAD_CONFIRMATION"))) . ",
        'DROPZONE_DEFAULT_MESSAGE': ") . twig_jsonencode_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_FORM.DROPZONE_DEFAULT_MESSAGE"))) . ",
        'DROPZONE_FALLBACK_MESSAGE': ") . twig_jsonencode_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_FORM.DROPZONE_FALLBACK_MESSAGE"))) . ",
        'DROPZONE_FALLBACK_TEXT': ") . twig_jsonencode_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_FORM.DROPZONE_FALLBACK_TEXT"))) . ",
        'DROPZONE_FILE_TOO_BIG': ") . twig_jsonencode_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_FORM.DROPZONE_FILE_TOO_BIG"))) . ",
        'DROPZONE_INVALID_FILE_TYPE': ") . twig_jsonencode_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_FORM.DROPZONE_INVALID_FILE_TYPE"))) . ",
        'DROPZONE_MAX_FILES_EXCEEDED': ") . twig_jsonencode_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_FORM.DROPZONE_MAX_FILES_EXCEEDED"))) . ",
        'DROPZONE_REMOVE_FILE': ") . twig_jsonencode_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_FORM.DROPZONE_REMOVE_FILE"))) . ",
        'DROPZONE_REMOVE_FILE_CONFIRMATION': ") . twig_jsonencode_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_FORM.DROPZONE_REMOVE_FILE_CONFIRMATION"))) . ",
        'DROPZONE_RESPONSE_ERROR': ") . twig_jsonencode_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_FORM.DROPZONE_RESPONSE_ERROR"))) . "
    };
    "), 1 => array("group" => "bottom")), "method");
    }

    // line 62
    public function block_input_attributes($context, array $blocks = array())
    {
        // line 63
        echo "                    type=\"file\"
                    ";
        // line 64
        if ($this->getAttribute((isset($context["files"]) ? $context["files"] : null), "multiple", array())) {
            echo "multiple=\"multiple\"";
        }
        // line 65
        echo "                    ";
        if ($this->getAttribute((isset($context["files"]) ? $context["files"] : null), "accept", array())) {
            echo "accept=\"";
            echo twig_join_filter($this->getAttribute((isset($context["files"]) ? $context["files"] : null), "accept", array()), ",");
            echo "\"";
        }
        // line 66
        echo "                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array())) {
            echo "disabled=\"disabled\"";
        }
        // line 67
        echo "                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "random_name", array())) {
            echo "random=\"true\"";
        }
        // line 68
        echo "                    ";
        $this->displayParentBlock("input_attributes", $context, $blocks);
        echo "
                ";
    }

    // line 6
    public function getbytesToSize($__bytes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "bytes" => $__bytes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 7
            ob_start();
            // line 8
            echo "        ";
            $context["kilobyte"] = 1024;
            // line 9
            echo "        ";
            $context["megabyte"] = ((isset($context["kilobyte"]) ? $context["kilobyte"] : null) * 1024);
            // line 10
            echo "        ";
            $context["gigabyte"] = ((isset($context["megabyte"]) ? $context["megabyte"] : null) * 1024);
            // line 11
            echo "        ";
            $context["terabyte"] = ((isset($context["gigabyte"]) ? $context["gigabyte"] : null) * 1024);
            // line 12
            echo "
        ";
            // line 13
            if (((isset($context["bytes"]) ? $context["bytes"] : null) < (isset($context["kilobyte"]) ? $context["kilobyte"] : null))) {
                // line 14
                echo "            ";
                echo ((isset($context["bytes"]) ? $context["bytes"] : null) . " B");
                echo "
        ";
            } elseif ((            // line 15
(isset($context["bytes"]) ? $context["bytes"] : null) < (isset($context["megabyte"]) ? $context["megabyte"] : null))) {
                // line 16
                echo "            ";
                echo (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : null) / (isset($context["kilobyte"]) ? $context["kilobyte"] : null)), 2, ".") . " KB");
                echo "
        ";
            } elseif ((            // line 17
(isset($context["bytes"]) ? $context["bytes"] : null) < (isset($context["gigabyte"]) ? $context["gigabyte"] : null))) {
                // line 18
                echo "            ";
                echo (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : null) / (isset($context["megabyte"]) ? $context["megabyte"] : null)), 2, ".") . " MB");
                echo "
        ";
            } elseif ((            // line 19
(isset($context["bytes"]) ? $context["bytes"] : null) < (isset($context["terabyte"]) ? $context["terabyte"] : null))) {
                // line 20
                echo "            ";
                echo (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : null) / (isset($context["gigabyte"]) ? $context["gigabyte"] : null)), 2, ".") . " GB");
                echo "
        ";
            } else {
                // line 22
                echo "            ";
                echo (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : null) / (isset($context["terabyte"]) ? $context["terabyte"] : null)), 2, ".") . " TB");
                echo "
        ";
            }
            // line 24
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 27
    public function getpreview($__path__ = null, $__value__ = null, $__global__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "path" => $__path__,
            "value" => $__value__,
            "global" => $__global__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 28
            echo "    ";
            if ((isset($context["value"]) ? $context["value"] : null)) {
                // line 29
                echo "        ";
                $context["uri"] = $this->getAttribute($this->getAttribute((isset($context["global"]) ? $context["global"] : null), "grav", array()), "uri", array());
                // line 30
                echo "        ";
                $context["files"] = $this->getAttribute((isset($context["global"]) ? $context["global"] : null), "files", array());
                // line 31
                echo "        ";
                $context["config"] = $this->getAttribute($this->getAttribute((isset($context["global"]) ? $context["global"] : null), "grav", array()), "config", array());
                // line 32
                echo "        ";
                $context["route"] = $this->getAttribute($this->getAttribute((isset($context["global"]) ? $context["global"] : null), "context", array()), "route", array(), "method");
                // line 33
                echo "        ";
                $context["type"] = (( !(null === $this->getAttribute($this->getAttribute((isset($context["global"]) ? $context["global"] : null), "context", array()), "content", array(), "method"))) ? ("pages") : ((($this->getAttribute((isset($context["global"]) ? $context["global"] : null), "plugin", array())) ? ("plugins") : ((($this->getAttribute((isset($context["global"]) ? $context["global"] : null), "theme", array())) ? ("themes") : ("config"))))));
                // line 34
                echo "        ";
                $context["blueprint_name"] = $this->getAttribute($this->getAttribute((isset($context["global"]) ? $context["global"] : null), "blueprints", array()), "getFilename", array());
                // line 35
                echo "        ";
                if (((isset($context["type"]) ? $context["type"] : null) == "pages")) {
                    // line 36
                    echo "            ";
                    $context["blueprint_name"] = (((isset($context["type"]) ? $context["type"] : null) . "/") . (isset($context["blueprint_name"]) ? $context["blueprint_name"] : null));
                    // line 37
                    echo "        ";
                }
                // line 38
                echo "        ";
                $context["blueprint"] = base64_encode((isset($context["blueprint_name"]) ? $context["blueprint_name"] : null));
                // line 39
                echo "        ";
                $context["real_path"] = $this->getAttribute($this->getAttribute((isset($context["global"]) ? $context["global"] : null), "admin", array()), "getPagePathFromToken", array(0 => (isset($context["path"]) ? $context["path"] : null)), "method");
                // line 40
                echo "        ";
                $context["remove"] = $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => (((((((((((((((((((((($this->getAttribute((isset($context["global"]) ? $context["global"] : null), "base_url_relative", array()) . "/media.json") . "/route") . $this->getAttribute($this->getAttribute(                // line 42
(isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . base64_encode((($this->getAttribute((isset($context["global"]) ? $context["global"] : null), "base_path", array()) . "/") . (isset($context["real_path"]) ? $context["real_path"] : null)))) . "/task") . $this->getAttribute($this->getAttribute(                // line 43
(isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "removeFileFromBlueprint") . "/proute") . $this->getAttribute($this->getAttribute(                // line 44
(isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . base64_encode((isset($context["route"]) ? $context["route"] : null))) . "/blueprint") . $this->getAttribute($this->getAttribute(                // line 45
(isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . (isset($context["blueprint"]) ? $context["blueprint"] : null)) . "/type") . $this->getAttribute($this->getAttribute(                // line 46
(isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . (isset($context["type"]) ? $context["type"] : null)) . "/field") . $this->getAttribute($this->getAttribute(                // line 47
(isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . $this->getAttribute((isset($context["files"]) ? $context["files"] : null), "name", array())) . "/path") . $this->getAttribute($this->getAttribute(                // line 48
(isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . base64_encode($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "path", array()))), 1 => "admin-form", 2 => "admin-nonce"), "method");
                // line 49
                echo "
        ";
                // line 50
                $context["file"] = twig_array_merge((isset($context["value"]) ? $context["value"] : null), array("remove" => (isset($context["remove"]) ? $context["remove"] : null), "path" => ((($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "rootUrl", array()) == "/")) ? ("/") : ((($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "rootUrl", array()) . "/") . (isset($context["real_path"]) ? $context["real_path"] : null))))));
                // line 51
                echo "        <div class=\"hidden\" data-file=\"";
                echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["file"]) ? $context["file"] : null)), "html_attr");
                echo "\"></div>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "forms/fields/file/file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 51,  299 => 50,  296 => 49,  294 => 48,  293 => 47,  292 => 46,  291 => 45,  290 => 44,  289 => 43,  288 => 42,  286 => 40,  283 => 39,  280 => 38,  277 => 37,  274 => 36,  271 => 35,  268 => 34,  265 => 33,  262 => 32,  259 => 31,  256 => 30,  253 => 29,  250 => 28,  236 => 27,  220 => 24,  214 => 22,  208 => 20,  206 => 19,  201 => 18,  199 => 17,  194 => 16,  192 => 15,  187 => 14,  185 => 13,  182 => 12,  179 => 11,  176 => 10,  173 => 9,  170 => 8,  168 => 7,  156 => 6,  149 => 68,  144 => 67,  139 => 66,  132 => 65,  128 => 64,  125 => 63,  122 => 62,  102 => 87,  100 => 86,  98 => 85,  96 => 84,  92 => 81,  87 => 80,  84 => 79,  82 => 78,  78 => 76,  75 => 75,  66 => 73,  62 => 72,  58 => 70,  55 => 62,  47 => 59,  45 => 58,  42 => 57,  39 => 56,  36 => 55,  32 => 1,  30 => 4,  28 => 3,  26 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"forms/field.html.twig\" %}
{% set defaults = config.plugins.form %}
{% set files = defaults.files|merge(field|default([])) %}
{% set limit = not field.multiple ? 1 : files.limit %}

{% macro bytesToSize(bytes) -%}
    {% spaceless %}
        {% set kilobyte = 1024 %}
        {% set megabyte = kilobyte * 1024 %}
        {% set gigabyte = megabyte * 1024 %}
        {% set terabyte = gigabyte * 1024 %}

        {% if bytes < kilobyte %}
            {{ bytes ~ ' B' }}
        {% elseif bytes < megabyte %}
            {{ (bytes / kilobyte)|number_format(2, '.') ~ ' KB' }}
        {% elseif bytes < gigabyte %}
            {{ (bytes / megabyte)|number_format(2, '.') ~ ' MB' }}
        {% elseif bytes < terabyte %}
            {{ (bytes / gigabyte)|number_format(2, '.') ~ ' GB' }}
        {% else %}
            {{ (bytes / terabyte)|number_format(2, '.') ~ ' TB' }}
        {% endif %}
    {% endspaceless %}
{%- endmacro %}

{% macro preview(path, value, global) %}
    {% if value %}
        {% set uri = global.grav.uri %}
        {% set files = global.files %}
        {% set config = global.grav.config %}
        {% set route = global.context.route() %}
        {% set type =  global.context.content() is not null ? 'pages' : global.plugin ? 'plugins' : global.theme ? 'themes' : 'config' %}
        {% set blueprint_name = global.blueprints.getFilename %}
        {% if type == 'pages' %}
            {% set blueprint_name = type ~ '/' ~ blueprint_name %}
        {% endif %}
        {% set blueprint = base64_encode(blueprint_name) %}
        {% set real_path = global.admin.getPagePathFromToken(path) %}
        {% set remove = uri.addNonce(global.base_url_relative ~
        '/media.json' ~
        '/route' ~ config.system.param_sep ~ base64_encode(global.base_path ~ '/' ~ real_path) ~
        '/task' ~ config.system.param_sep ~ 'removeFileFromBlueprint' ~
        '/proute' ~ config.system.param_sep ~ base64_encode(route) ~
        '/blueprint' ~ config.system.param_sep ~ blueprint ~
        '/type' ~ config.system.param_sep ~ type ~
        '/field' ~ config.system.param_sep ~ files.name ~
        '/path' ~ config.system.param_sep ~ base64_encode(value.path), 'admin-form', 'admin-nonce') %}

        {% set file = value|merge({remove: remove, path: (uri.rootUrl == '/' ? '/' : uri.rootUrl ~ '/' ~ real_path) }) %}
        <div class=\"hidden\" data-file=\"{{ file|json_encode|e('html_attr') }}\"></div>
    {% endif %}
{% endmacro %}

{% block input %}
    {% set page_can_upload = exists or (type == 'page' and not exists and not (field.destination starts with '@self' or field.destination starts with 'self@')) %}

    {% set settings = {name: field.name, paramName: (scope ~ field.name)|fieldName ~ (files.multiple ? '[]' : ''), limit: limit, filesize: files.filesize, accept: files.accept} %}
    <div class=\"form-input-wrapper dropzone files-upload form-input-file {{ field.size }}\" data-grav-file-settings=\"{{ settings|json_encode|e('html_attr') }}\">
        <input
                {# required attribute structures #}
                {% block input_attributes %}
                    type=\"file\"
                    {% if files.multiple %}multiple=\"multiple\"{% endif %}
                    {% if files.accept %}accept=\"{{ files.accept|join(',') }}\"{% endif %}
                    {% if field.disabled %}disabled=\"disabled\"{% endif %}
                    {% if field.random_name %}random=\"true\"{% endif %}
                    {{ parent() }}
                {% endblock %}
        />

        {% for path, file in value %}
            {{ _self.preview(path, file, _context) }}
        {% endfor %}
        {% include 'forms/fields/hidden/hidden.html.twig' with {field: {name: '_json.' ~ field.name}, value:value|raw|json_encode} %}
    </div>

    {% do assets.addJs('plugin://form/assets/form.min.js', { 'group': 'bottom', 'loading': 'defer' }) %}
    {% do assets.addCss('plugin://form/assets/dropzone.min.css', { 'group': 'form' }) %}
    {{ assets.css('form') }}
    {% do assets.addInlineJs(\"
    window.GravForm = window.GravForm || {};
    window.GravForm.config = {
        current_url: '\" ~ uri.route(true) ~\"',
        base_url_relative: '\" ~ base_url_relative ~ \"',
        param_sep: '\"~ config.system.param_sep ~ \"',
        form_nonce: '\" ~ form.getNonce ~ \"',
    };
    window.GravForm.translations = {};
    window.GravForm.translations['PLUGIN_FORM'] = {
        'DROPZONE_CANCEL_UPLOAD': \" ~ 'PLUGIN_FORM.DROPZONE_CANCEL_UPLOAD'|t|json_encode ~ \",
        'DROPZONE_CANCEL_UPLOAD_CONFIRMATION': \" ~ 'PLUGIN_FORM.DROPZONE_CANCEL_UPLOAD_CONFIRMATION'|t|json_encode ~ \",
        'DROPZONE_DEFAULT_MESSAGE': \" ~ 'PLUGIN_FORM.DROPZONE_DEFAULT_MESSAGE'|t|json_encode ~ \",
        'DROPZONE_FALLBACK_MESSAGE': \" ~ 'PLUGIN_FORM.DROPZONE_FALLBACK_MESSAGE'|t|json_encode ~ \",
        'DROPZONE_FALLBACK_TEXT': \" ~ 'PLUGIN_FORM.DROPZONE_FALLBACK_TEXT'|t|json_encode ~ \",
        'DROPZONE_FILE_TOO_BIG': \" ~ 'PLUGIN_FORM.DROPZONE_FILE_TOO_BIG'|t|json_encode ~ \",
        'DROPZONE_INVALID_FILE_TYPE': \" ~ 'PLUGIN_FORM.DROPZONE_INVALID_FILE_TYPE'|t|json_encode ~ \",
        'DROPZONE_MAX_FILES_EXCEEDED': \" ~ 'PLUGIN_FORM.DROPZONE_MAX_FILES_EXCEEDED'|t|json_encode ~ \",
        'DROPZONE_REMOVE_FILE': \" ~ 'PLUGIN_FORM.DROPZONE_REMOVE_FILE'|t|json_encode ~ \",
        'DROPZONE_REMOVE_FILE_CONFIRMATION': \" ~ 'PLUGIN_FORM.DROPZONE_REMOVE_FILE_CONFIRMATION'|t|json_encode ~ \",
        'DROPZONE_RESPONSE_ERROR': \" ~ 'PLUGIN_FORM.DROPZONE_RESPONSE_ERROR'|t|json_encode ~ \"
    };
    \", { 'group': 'bottom' }) %}
{% endblock %}
";
    }
}
