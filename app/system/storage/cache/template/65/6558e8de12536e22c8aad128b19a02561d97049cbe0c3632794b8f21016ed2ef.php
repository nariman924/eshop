<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* extension/export_import.twig */
class __TwigTemplate_74f91bde95398ffd1c519d320ef0e88a9368ef12c2558db1223b3a5ccb947309 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<a href=\"";
        // line 6
        echo ($context["back"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
\t\t\t</div>
\t\t\t<h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "\t\t\t\t<li><a href=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["breadcrumb"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["breadcrumb"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["text"] ?? null) : null);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 22
        echo "\t\t";
        if (($context["success"] ?? null)) {
            // line 23
            echo "\t\t<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 27
        echo "\t\t";
        if (( !($context["error_warning"] ?? null) &&  !($context["success"] ?? null))) {
            // line 28
            echo "\t\t<div id=\"export_import_welcome\" class=\"alert alert-info\">
\t\t\t<i class=\"fa fa-info-circle\"></i>
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t";
            // line 31
            echo ($context["text_welcome"] ?? null);
            echo "<br /><br />";
            echo ($context["text_used_category_ids"] ?? null);
            echo " ";
            echo ($context["text_used_product_ids"] ?? null);
            echo "
\t\t</div>
\t\t";
        }
        // line 34
        echo "
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-body\">

\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t<li class=\"active\"><a href=\"#tab-export\" data-toggle=\"tab\">";
        // line 39
        echo ($context["tab_export"] ?? null);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#tab-import\" data-toggle=\"tab\">";
        // line 40
        echo ($context["tab_import"] ?? null);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#tab-settings\" data-toggle=\"tab\">";
        // line 41
        echo ($context["tab_settings"] ?? null);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#tab-support\" data-toggle=\"tab\">";
        // line 42
        echo ($context["tab_support"] ?? null);
        echo "</a></li>
\t\t\t\t</ul>

\t\t\t\t<div class=\"tab-content\">

\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-export\">
\t\t\t\t\t\t<form action=\"";
        // line 48
        echo ($context["export"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"export\" class=\"form-horizontal\">
\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
        // line 50
        echo ($context["entry_export"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
        // line 53
        echo ($context["entry_export_type"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t";
        // line 57
        if ((($context["export_type"] ?? null) == "c")) {
            // line 58
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"c\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 60
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"c\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 62
        echo "\t\t\t\t\t\t\t\t\t\t";
        echo ($context["text_export_type_category"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t";
        // line 66
        if ((($context["export_type"] ?? null) == "p")) {
            // line 67
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"p\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 69
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"p\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 71
        echo "\t\t\t\t\t\t\t\t\t\t";
        echo ($context["text_export_type_product"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t";
        // line 75
        if ((($context["export_type"] ?? null) == "o")) {
            // line 76
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"o\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 78
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"o\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 80
        echo "\t\t\t\t\t\t\t\t\t\t";
        echo ($context["text_export_type_option"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t";
        // line 84
        if ((($context["export_type"] ?? null) == "a")) {
            // line 85
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"a\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 87
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"a\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 89
        echo "\t\t\t\t\t\t\t\t\t\t";
        echo ($context["text_export_type_attribute"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t";
        // line 92
        if (($context["exist_filter"] ?? null)) {
            // line 93
            echo "\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t";
            // line 94
            if ((($context["export_type"] ?? null) == "f")) {
                // line 95
                echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"f\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 97
                echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"f\" />
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 99
            echo "\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_export_type_filter"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t";
        }
        // line 103
        echo "\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t";
        // line 104
        if ((($context["export_type"] ?? null) == "u")) {
            // line 105
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"u\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 107
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"u\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 109
        echo "\t\t\t\t\t\t\t\t\t\t";
        echo ($context["text_export_type_customer"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin:0px;\" id=\"category_filter\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t";
        // line 116
        echo ($context["entry_category_filter"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t<span class=\"help\">";
        // line 117
        echo ($context["help_category_filter"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 121
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<div id=\"categories\" class=\"well well-sm\" style=\"height: 100px; overflow: auto;\"> 
\t\t\t\t\t\t\t\t\t\t";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 124
            echo "\t\t\t\t\t\t\t\t\t\t<div id=\"category";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 124);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 124);
            echo "
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"categories[]\" value=\"";
            // line 125
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 125);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin:0px;\" id=\"range_type\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t";
        // line 133
        echo ($context["entry_range_type"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t<span class=\"help\">";
        // line 134
        echo ($context["help_range_type"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"range_type\" value=\"id\" id=\"range_type_id\">";
        // line 138
        echo ($context["button_export_id"] ?? null);
        echo " &nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"range_type\" value=\"page\" id=\"range_type_page\">";
        // line 141
        echo ($context["button_export_page"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<br /><br />
\t\t\t\t\t\t\t\t\t<span class=\"id\">";
        // line 144
        echo ($context["entry_start_id"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"page\">";
        // line 145
        echo ($context["entry_start_index"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"min\" value=\"";
        // line 147
        echo ($context["min"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<span class=\"id\">";
        // line 149
        echo ($context["entry_end_id"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"page\">";
        // line 150
        echo ($context["entry_end_index"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"max\" value=\"";
        // line 152
        echo ($context["max"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<a onclick=\"downloadData();\" class=\"btn btn-primary\"><span>";
        // line 157
        echo ($context["button_export"] ?? null);
        echo "</span></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-import\">
\t\t\t\t\t\t<form action=\"";
        // line 164
        echo ($context["import"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"import\" class=\"form-horizontal\">
\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t";
        // line 167
        echo ($context["entry_import"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t<span class=\"help\">";
        // line 168
        echo ($context["help_import"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"help\">";
        // line 169
        echo ($context["help_format"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t";
        // line 174
        echo ($context["entry_incremental"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t";
        // line 177
        if (($context["incremental"] ?? null)) {
            // line 178
            echo "\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"incremental\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
            // line 180
            echo ($context["text_yes"] ?? null);
            echo " ";
            echo ($context["help_incremental_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"incremental\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t";
            // line 185
            echo ($context["text_no"] ?? null);
            echo " ";
            echo ($context["help_incremental_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 188
            echo "\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"incremental\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t";
            // line 190
            echo ($context["text_yes"] ?? null);
            echo " ";
            echo ($context["help_incremental_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"incremental\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
            // line 195
            echo ($context["text_no"] ?? null);
            echo " ";
            echo ($context["help_incremental_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t";
        }
        // line 198
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t";
        // line 202
        echo ($context["entry_upload"] ?? null);
        echo "<br /><br />
\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"upload\" id=\"upload\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<a onclick=\"uploadData();\" class=\"btn btn-primary\"><span>";
        // line 208
        echo ($context["button_import"] ?? null);
        echo "</span></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-settings\">
\t\t\t\t\t\t<form action=\"";
        // line 215
        echo ($context["settings"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"settings\" class=\"form-horizontal\">
\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t";
        // line 218
        if (($context["settings_use_option_id"] ?? null)) {
            // line 219
            echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_option_id\" value=\"1\" checked=\"checked\" /> ";
            echo ($context["entry_settings_use_option_id"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 221
            echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_option_id\" value=\"1\" /> ";
            echo ($context["entry_settings_use_option_id"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t";
        }
        // line 223
        echo "\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t";
        // line 227
        if (($context["settings_use_option_value_id"] ?? null)) {
            // line 228
            echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_option_value_id\" value=\"1\" checked=\"checked\" /> ";
            echo ($context["entry_settings_use_option_value_id"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 230
            echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_option_value_id\" value=\"1\" /> ";
            echo ($context["entry_settings_use_option_value_id"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t";
        }
        // line 232
        echo "\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t";
        // line 236
        if (($context["settings_use_attribute_group_id"] ?? null)) {
            // line 237
            echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_attribute_group_id\" value=\"1\" checked=\"checked\" /> ";
            echo ($context["entry_settings_use_attribute_group_id"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 239
            echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_attribute_group_id\" value=\"1\" /> ";
            echo ($context["entry_settings_use_attribute_group_id"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t";
        }
        // line 241
        echo "\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t";
        // line 245
        if (($context["settings_use_attribute_id"] ?? null)) {
            // line 246
            echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_attribute_id\" value=\"1\" checked=\"checked\" /> ";
            echo ($context["entry_settings_use_attribute_id"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 248
            echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_attribute_id\" value=\"1\" /> ";
            echo ($context["entry_settings_use_attribute_id"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t";
        }
        // line 250
        echo "\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 252
        if (($context["exist_filter"] ?? null)) {
            // line 253
            echo "\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t";
            // line 255
            if (($context["settings_use_filter_group_id"] ?? null)) {
                // line 256
                echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_filter_group_id\" value=\"1\" checked=\"checked\" /> ";
                echo ($context["entry_settings_use_filter_group_id"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 258
                echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_filter_group_id\" value=\"1\" /> ";
                echo ($context["entry_settings_use_filter_group_id"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t";
            }
            // line 260
            echo "\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t";
            // line 264
            if (($context["settings_use_filter_id"] ?? null)) {
                // line 265
                echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_filter_id\" value=\"1\" checked=\"checked\" /> ";
                echo ($context["entry_settings_use_filter_id"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 267
                echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_filter_id\" value=\"1\" /> ";
                echo ($context["entry_settings_use_filter_id"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t";
            }
            // line 269
            echo "\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 272
        echo "\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<a onclick=\"updateSettings();\" class=\"btn btn-primary\"><span>";
        // line 274
        echo ($context["button_settings"] ?? null);
        echo "</span></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-support\">
\t\t\t\t\t\t<div id=\"export_import_notification\" class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i>
\t\t\t\t\t\t\t<div id=\"export_import_loading\"><img src=\"view/image/export-import/loading.gif\" />";
        // line 282
        echo ($context["text_loading_notifications"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text-nowrap\">";
        // line 288
        echo ($context["entry_version"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 289
        echo ($context["version_export_import"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text-nowrap\">";
        // line 292
        echo ($context["entry_oc_version"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 293
        echo ($context["version_opencart"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text-nowrap\" style=\"vertical-align:top;\">";
        // line 296
        echo ($context["entry_license"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-wrap\">";
        // line 297
        echo ($context["text_license"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</div>

<script type=\"text/javascript\"><!--

function getNotifications() {
\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> <div id=\"export_import_loading\"><img src=\"view/image/export-import/loading.gif\" />";
        // line 312
        echo ($context["text_loading_notifications"] ?? null);
        echo "</div>');
\tsetTimeout(
\t\tfunction(){
\t\t\t\$.ajax({
\t\t\t\ttype: 'GET',
\t\t\t\turl: 'index.php?route=extension/export_import/getNotifications&user_token=";
        // line 317
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\t\tdataType: 'json',
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> '+json['error']+' <span style=\"cursor:pointer;font-weight:bold;text-decoration:underline;float:right;\" onclick=\"getNotifications();\">";
        // line 321
        echo ($context["text_retry"] ?? null);
        echo "</span>');
\t\t\t\t\t} else if (json['message']) {
\t\t\t\t\t\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> '+json['message']);
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> '+'";
        // line 325
        echo ($context["error_no_news"] ?? null);
        echo "');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tfailure: function(){
\t\t\t\t\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> '+'";
        // line 329
        echo ($context["error_notifications"] ?? null);
        echo " <span style=\"cursor:pointer;font-weight:bold;text-decoration:underline;float:right;\" onclick=\"getNotifications();\">";
        echo ($context["text_retry"] ?? null);
        echo "</span>');
\t\t\t\t},
\t\t\t\terror: function() {
\t\t\t\t\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> '+'";
        // line 332
        echo ($context["error_notifications"] ?? null);
        echo " <span style=\"cursor:pointer;font-weight:bold;text-decoration:underline;float:right;\" onclick=\"getNotifications();\">";
        echo ($context["text_retry"] ?? null);
        echo "</span>');
\t\t\t\t}
\t\t\t});
\t\t},
\t\t500
\t);
}

function check_category_filter(export_type) {
\tif (export_type=='p') {
\t\t\$('#category_filter').show();
\t} else {
\t\t\$('#category_filter').hide();
\t}
}

function check_range_type(export_type) {
\tif ((export_type=='p') || (export_type=='c') || (export_type=='u')) {
\t\t\$('#range_type').show();
\t\t\$('#range_type_id').prop('checked',true);
\t\t\$('#range_type_page').prop('checked',false);
\t\t\$('.id').show();
\t\t\$('.page').hide();
\t} else {
\t\t\$('#range_type').hide();
\t}
}

\$(document).ready(function() {

\tcheck_category_filter(\$('input[name=export_type]:checked').val());
\tcheck_range_type(\$('input[name=export_type]:checked').val());

\t\$(\"#range_type_id\").click(function() {
\t\t\$(\".page\").hide();
\t\t\$(\".id\").show();
\t});

\t\$(\"#range_type_page\").click(function() {
\t\t\$(\".id\").hide();
\t\t\$(\".page\").show();
\t});

\t\$('input[name=export_type]').click(function() {
\t\tcheck_category_filter(\$(this).val());
\t\tcheck_range_type(\$(this).val());
\t});

\t\$('span.close').click(function() {
\t\t\$(this).parent().remove();
\t});

\t\$('a[data-toggle=\"tab\"]').click(function() {
\t\t\$('#export_import_welcome').remove();
\t});

\t\$('a[href=\"#tab-support\"').click(function() {
\t\tif (\$(this).parent().attr('class')!='active') {
\t\t\tgetNotifications();
\t\t}
\t});

});

function checkFileSize(id) {
\t// See also http://stackoverflow.com/questions/3717793/javascript-file-upload-size-validation for details
\tvar input, file, file_size;

\tif (!window.FileReader) {
\t\t// The file API isn't yet supported on user's browser
\t\treturn true;
\t}

\tinput = document.getElementById(id);
\tif (!input) {
\t\t// couldn't find the file input element
\t\treturn true;
\t}
\telse if (!input.files) {
\t\t// browser doesn't seem to support the `files` property of file inputs
\t\treturn true;
\t}
\telse if (!input.files[0]) {
\t\t// no file has been selected for the upload
\t\talert( \"";
        // line 416
        echo ($context["error_select_file"] ?? null);
        echo "\" );
\t\treturn false;
\t}
\telse {
\t\tfile = input.files[0];
\t\tfile_size = file.size;
\t\t";
        // line 422
        if ((array_key_exists("post_max_size", $context) && ($context["post_max_size"] ?? null))) {
            // line 423
            echo "\t\t// check against PHP's post_max_size
\t\tpost_max_size = ";
            // line 424
            echo ($context["post_max_size"] ?? null);
            echo ";
\t\tif (file_size > post_max_size) {
\t\t\talert( \"";
            // line 426
            echo ($context["error_post_max_size"] ?? null);
            echo "\" );
\t\t\treturn false;
\t\t}
\t\t";
        }
        // line 430
        echo "\t\t";
        if ((array_key_exists("upload_max_filesize", $context) && ($context["upload_max_filesize"] ?? null))) {
            // line 431
            echo "\t\t// check against PHP's upload_max_filesize
\t\tupload_max_filesize = ";
            // line 432
            echo ($context["upload_max_filesize"] ?? null);
            echo ";
\t\tif (file_size > upload_max_filesize) {
\t\t\talert( \"";
            // line 434
            echo ($context["error_upload_max_filesize"] ?? null);
            echo "\" );
\t\t\treturn false;
\t\t}
\t\t";
        }
        // line 438
        echo "\t\treturn true;
\t}
}

function uploadData() {
\tif (checkFileSize('upload')) {
\t\t\$('#import').submit();
\t}
}

function isNumber(txt){ 
\tvar regExp=/^[\\d]{1,}\$/;
\treturn regExp.test(txt); 
}

count_product = ";
        // line 453
        echo ($context["count_product"] ?? null);
        echo ";

function updateCountProducts() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/export_import/getCountProduct&user_token=";
        // line 457
        echo ($context["user_token"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"input[name='categories[]']\").serialize(),
\t\tsuccess: function(json) {
\t\t\tif (json['count']) {
\t\t\t\tcount_product = json['count'];
\t\t\t} else {
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
}

function validateExportForm(id) {
\tvar export_type = \$('input[name=export_type]:checked').val();
\tif ((export_type!='c') && (export_type!='p') && (export_type!='u')) {
\t\treturn true;
\t}

\tvar val = \$(\"input[name=range_type]:checked\").val();
\tvar min = \$(\"input[name=min]\").val();
\tvar max = \$(\"input[name=max]\").val();

\tif ((min=='') && (max=='')) {
\t\treturn true;
\t}

\tif (!isNumber(min) || !isNumber(max)) {
\t\talert(\"";
        // line 488
        echo ($context["error_param_not_number"] ?? null);
        echo "\");
\t\treturn false;
\t}

\tvar count_item;
\tswitch (export_type) {
\t\tcase 'p': count_item = count_product-1;  break;
\t\tcase 'c': count_item = ";
        // line 495
        echo (($context["count_category"] ?? null) - 1);
        echo "; break;
\t\tdefault:  count_item = ";
        // line 496
        echo (($context["count_customer"] ?? null) - 1);
        echo "; break;
\t}
\tvar batchNo = parseInt(count_item/parseInt(min))+1; // Maximum number of item-batches, namely, item number/min, and then rounded up (that is, integer plus 1)
\tvar minItemId;
\tswitch (export_type) {
\t\tcase 'p': minItemId = parseInt( ";
        // line 501
        echo ($context["min_product_id"] ?? null);
        echo " );  break;
\t\tcase 'c': minItemId = parseInt( ";
        // line 502
        echo ($context["min_category_id"] ?? null);
        echo " ); break;
\t\tdefault:  minItemId = parseInt( ";
        // line 503
        echo ($context["min_customer_id"] ?? null);
        echo " ); break;
\t
\t}
\tvar maxItemId;
\tswitch (export_type) {
\t\tcase 'p': maxItemId = parseInt( ";
        // line 508
        echo ($context["max_product_id"] ?? null);
        echo " );  break;
\t\tcase 'c': maxItemId = parseInt( ";
        // line 509
        echo ($context["max_category_id"] ?? null);
        echo " ); break;
\t\tdefault:  maxItemId = parseInt( ";
        // line 510
        echo ($context["max_customer_id"] ?? null);
        echo " ); break;
\t
\t}

\tif (val==\"page\") {  // Min for the batch size, Max for the batch number
\t\tif (parseInt(max) <= 0) {
\t\t\talert(\"";
        // line 516
        echo ($context["error_batch_number"] ?? null);
        echo "\");
\t\t\treturn false;
\t\t}
\t\tif (parseInt(max) > batchNo) {        
\t\t\talert(\"";
        // line 520
        echo ($context["error_page_no_data"] ?? null);
        echo "\"); 
\t\t\treturn false;
\t\t} else {
\t\t\t\$(\"input[name=max]\").val(parseInt(max)+1);
\t\t}
\t} else {
\t\tif (minItemId <= 0) {
\t\t\talert(\"";
        // line 527
        echo ($context["error_min_item_id"] ?? null);
        echo "\");
\t\t\treturn false;
\t\t}
\t\tif (parseInt(min) > maxItemId || parseInt(max) < minItemId || parseInt(min) > parseInt(max)) {  
\t\t\talert(\"";
        // line 531
        echo ($context["error_id_no_data"] ?? null);
        echo "\"); 
\t\t\treturn false;
\t\t}
\t}
\treturn true;
}

function downloadData() {
\tif (validateExportForm('export')) {
\t\t\$('#export').submit();
\t}
}

function updateSettings() {
\t\$('#settings').submit();
}

// Category
\$('input[name=\\'category\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 552
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'category\\']').val('');
\t\t\$('#category' + item['value']).remove();
\t\t\$('#categories').append('<div id=\"category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"categories[]\" value=\"' + item['value'] + '\" /></div>');
\t\tupdateCountProducts();
\t}
});

\$('#categories').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
\tupdateCountProducts();
});
//--></script>

</div>
";
        // line 579
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/export_import.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1044 => 579,  1014 => 552,  990 => 531,  983 => 527,  973 => 520,  966 => 516,  957 => 510,  953 => 509,  949 => 508,  941 => 503,  937 => 502,  933 => 501,  925 => 496,  921 => 495,  911 => 488,  877 => 457,  870 => 453,  853 => 438,  846 => 434,  841 => 432,  838 => 431,  835 => 430,  828 => 426,  823 => 424,  820 => 423,  818 => 422,  809 => 416,  720 => 332,  712 => 329,  705 => 325,  698 => 321,  691 => 317,  683 => 312,  665 => 297,  661 => 296,  655 => 293,  651 => 292,  645 => 289,  641 => 288,  632 => 282,  621 => 274,  617 => 272,  612 => 269,  606 => 267,  600 => 265,  598 => 264,  592 => 260,  586 => 258,  580 => 256,  578 => 255,  574 => 253,  572 => 252,  568 => 250,  562 => 248,  556 => 246,  554 => 245,  548 => 241,  542 => 239,  536 => 237,  534 => 236,  528 => 232,  522 => 230,  516 => 228,  514 => 227,  508 => 223,  502 => 221,  496 => 219,  494 => 218,  488 => 215,  478 => 208,  469 => 202,  463 => 198,  455 => 195,  445 => 190,  441 => 188,  433 => 185,  423 => 180,  419 => 178,  417 => 177,  411 => 174,  403 => 169,  399 => 168,  395 => 167,  389 => 164,  379 => 157,  371 => 152,  366 => 150,  362 => 149,  357 => 147,  352 => 145,  348 => 144,  342 => 141,  336 => 138,  329 => 134,  325 => 133,  318 => 128,  309 => 125,  302 => 124,  298 => 123,  293 => 121,  286 => 117,  282 => 116,  271 => 109,  267 => 107,  263 => 105,  261 => 104,  258 => 103,  250 => 99,  246 => 97,  242 => 95,  240 => 94,  237 => 93,  235 => 92,  228 => 89,  224 => 87,  220 => 85,  218 => 84,  210 => 80,  206 => 78,  202 => 76,  200 => 75,  192 => 71,  188 => 69,  184 => 67,  182 => 66,  174 => 62,  170 => 60,  166 => 58,  164 => 57,  157 => 53,  151 => 50,  146 => 48,  137 => 42,  133 => 41,  129 => 40,  125 => 39,  118 => 34,  108 => 31,  103 => 28,  100 => 27,  92 => 23,  89 => 22,  81 => 18,  79 => 17,  73 => 13,  62 => 11,  58 => 10,  53 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/export_import.twig", "");
    }
}
