<?php

/* BlogBundle:Page:base.html.twig */
class __TwigTemplate_9da1960c112646c834bb54da22840818 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "



          

<!DOCTYPE html>
<html lang=\"en\">
  <head>

     <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo " - symblog</title>

    <!-- Le styles -->
    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    
   

   
  </head>

  <body>

    <div class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"navbar-inner\">
        <div class=\"container\">
          <button type=\"button\" class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"brand\" href=\"#\">Project name</a>
          <div class=\"nav-collapse collapse\">
             ";
        // line 44
        $this->displayBlock('navigation', $context, $blocks);
        // line 54
        echo "          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

          
                           
              
      
      
      
      
          <section class=\"main-col\">
              ";
        // line 67
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "          </section>
          <aside class=\"sidebar\">
              ";
        // line 70
        $this->displayBlock('sidebar', $context, $blocks);
        // line 71
        echo "          </aside>

          <div id=\"footer\">
              ";
        // line 74
        $this->displayBlock('footer', $context, $blocks);
        // line 77
        echo "          </div>
        </section>

        ";
        // line 80
        $this->displayBlock('javascripts', $context, $blocks);
        // line 84
        echo "    
    
    
      </body>
</html>";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo "symblog";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "    <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/blog/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/blog/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
    }

    // line 44
    public function block_navigation($context, array $blocks = array())
    {
        // line 45
        echo "        
                    <ul class=\"nav\">
                        <li><a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BlogBundle_homepage"), "html", null, true);
        echo "\">Home</a></li>
                        <li><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BlogBundle_contact"), "html", null, true);
        echo "\">Contact</a></li>
                        <li><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BlogBundle_inscription"), "html", null, true);
        echo "\">Inscription</a></li>
                        <li><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BlogBundle_connexion"), "html", null, true);
        echo "\">Connexion</a></li>
                    </ul>
                
            ";
    }

    // line 67
    public function block_body($context, array $blocks = array())
    {
    }

    // line 70
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 74
    public function block_footer($context, array $blocks = array())
    {
        // line 75
        echo "
              ";
    }

    // line 80
    public function block_javascripts($context, array $blocks = array())
    {
        // line 81
        echo "        
            <script src=css/bootstrap.js\"></script>
            
        ";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Page:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 81,  189 => 80,  184 => 75,  181 => 74,  176 => 70,  171 => 67,  163 => 50,  159 => 49,  155 => 48,  151 => 47,  147 => 45,  144 => 44,  138 => 18,  134 => 17,  130 => 15,  127 => 14,  121 => 11,  113 => 84,  111 => 80,  106 => 77,  104 => 74,  99 => 71,  97 => 70,  93 => 68,  91 => 67,  76 => 54,  74 => 44,  46 => 20,  44 => 14,  38 => 11,  26 => 1,);
    }
}
