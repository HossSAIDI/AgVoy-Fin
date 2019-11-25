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

/* room/startbootstrap-shop-homepage-gh-pages/index.html */
class __TwigTemplate_13bcc19c1ed302ba9fccbf36be85a1739e1ccc159362887fedeffec66463dba2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "room/startbootstrap-shop-homepage-gh-pages/index.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "room/startbootstrap-shop-homepage-gh-pages/index.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"\">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

  <!-- Custom styles for this template -->
  <link href=\"css/shop-homepage.css\" rel=\"stylesheet\">

</head>

<body>

  <!-- Navigation -->
  <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"#\">Start Bootstrap</a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
        <ul class=\"navbar-nav ml-auto\">
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"#\">Home
              <span class=\"sr-only\">(current)</span>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">About</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Services</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class=\"container\">

    <div class=\"row\">

      <div class=\"col-lg-3\">

        <h1 class=\"my-4\">Shop Name</h1>
        <div class=\"list-group\">
          <a href=\"#\" class=\"list-group-item\">Category 1</a>
          <a href=\"#\" class=\"list-group-item\">Category 2</a>
          <a href=\"#\" class=\"list-group-item\">Category 3</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class=\"col-lg-9\">

        <div id=\"carouselExampleIndicators\" class=\"carousel slide my-4\" data-ride=\"carousel\">
          <ol class=\"carousel-indicators\">
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
          </ol>
          <div class=\"carousel-inner\" role=\"listbox\">
            <div class=\"carousel-item active\">
              <img class=\"d-block img-fluid\" src=\"http://placehold.it/900x350\" alt=\"First slide\">
            </div>
            <div class=\"carousel-item\">
              <img class=\"d-block img-fluid\" src=\"http://placehold.it/900x350\" alt=\"Second slide\">
            </div>
            <div class=\"carousel-item\">
              <img class=\"d-block img-fluid\" src=\"http://placehold.it/900x350\" alt=\"Third slide\">
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

        <div class=\"row\">

          <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"card h-100\">
              <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
              <div class=\"card-body\">
                <h4 class=\"card-title\">
                  <a href=\"#\">Item One</a>
                </h4>
                <h5>\$24.99</h5>
                <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class=\"card-footer\">
                <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"card h-100\">
              <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
              <div class=\"card-body\">
                <h4 class=\"card-title\">
                  <a href=\"#\">Item Two</a>
                </h4>
                <h5>\$24.99</h5>
                <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
              </div>
              <div class=\"card-footer\">
                <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"card h-100\">
              <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
              <div class=\"card-body\">
                <h4 class=\"card-title\">
                  <a href=\"#\">Item Three</a>
                </h4>
                <h5>\$24.99</h5>
                <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class=\"card-footer\">
                <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"card h-100\">
              <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
              <div class=\"card-body\">
                <h4 class=\"card-title\">
                  <a href=\"#\">Item Four</a>
                </h4>
                <h5>\$24.99</h5>
                <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class=\"card-footer\">
                <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"card h-100\">
              <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
              <div class=\"card-body\">
                <h4 class=\"card-title\">
                  <a href=\"#\">Item Five</a>
                </h4>
                <h5>\$24.99</h5>
                <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
              </div>
              <div class=\"card-footer\">
                <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"card h-100\">
              <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
              <div class=\"card-body\">
                <h4 class=\"card-title\">
                  <a href=\"#\">Item Six</a>
                </h4>
                <h5>\$24.99</h5>
                <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class=\"card-footer\">
                <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class=\"py-5 bg-dark\">
    <div class=\"container\">
      <p class=\"m-0 text-center text-white\">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src=\"vendor/jquery/jquery.min.js\"></script>
  <script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "room/startbootstrap-shop-homepage-gh-pages/index.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"\">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

  <!-- Custom styles for this template -->
  <link href=\"css/shop-homepage.css\" rel=\"stylesheet\">

</head>

<body>

  <!-- Navigation -->
  <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"#\">Start Bootstrap</a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
        <ul class=\"navbar-nav ml-auto\">
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"#\">Home
              <span class=\"sr-only\">(current)</span>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">About</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Services</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class=\"container\">

    <div class=\"row\">

      <div class=\"col-lg-3\">

        <h1 class=\"my-4\">Shop Name</h1>
        <div class=\"list-group\">
          <a href=\"#\" class=\"list-group-item\">Category 1</a>
          <a href=\"#\" class=\"list-group-item\">Category 2</a>
          <a href=\"#\" class=\"list-group-item\">Category 3</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class=\"col-lg-9\">

        <div id=\"carouselExampleIndicators\" class=\"carousel slide my-4\" data-ride=\"carousel\">
          <ol class=\"carousel-indicators\">
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
          </ol>
          <div class=\"carousel-inner\" role=\"listbox\">
            <div class=\"carousel-item active\">
              <img class=\"d-block img-fluid\" src=\"http://placehold.it/900x350\" alt=\"First slide\">
            </div>
            <div class=\"carousel-item\">
              <img class=\"d-block img-fluid\" src=\"http://placehold.it/900x350\" alt=\"Second slide\">
            </div>
            <div class=\"carousel-item\">
              <img class=\"d-block img-fluid\" src=\"http://placehold.it/900x350\" alt=\"Third slide\">
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

        <div class=\"row\">

          <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"card h-100\">
              <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
              <div class=\"card-body\">
                <h4 class=\"card-title\">
                  <a href=\"#\">Item One</a>
                </h4>
                <h5>\$24.99</h5>
                <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class=\"card-footer\">
                <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"card h-100\">
              <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
              <div class=\"card-body\">
                <h4 class=\"card-title\">
                  <a href=\"#\">Item Two</a>
                </h4>
                <h5>\$24.99</h5>
                <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
              </div>
              <div class=\"card-footer\">
                <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"card h-100\">
              <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
              <div class=\"card-body\">
                <h4 class=\"card-title\">
                  <a href=\"#\">Item Three</a>
                </h4>
                <h5>\$24.99</h5>
                <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class=\"card-footer\">
                <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"card h-100\">
              <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
              <div class=\"card-body\">
                <h4 class=\"card-title\">
                  <a href=\"#\">Item Four</a>
                </h4>
                <h5>\$24.99</h5>
                <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class=\"card-footer\">
                <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"card h-100\">
              <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
              <div class=\"card-body\">
                <h4 class=\"card-title\">
                  <a href=\"#\">Item Five</a>
                </h4>
                <h5>\$24.99</h5>
                <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
              </div>
              <div class=\"card-footer\">
                <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"card h-100\">
              <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
              <div class=\"card-body\">
                <h4 class=\"card-title\">
                  <a href=\"#\">Item Six</a>
                </h4>
                <h5>\$24.99</h5>
                <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class=\"card-footer\">
                <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class=\"py-5 bg-dark\">
    <div class=\"container\">
      <p class=\"m-0 text-center text-white\">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src=\"vendor/jquery/jquery.min.js\"></script>
  <script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

</body>

</html>
", "room/startbootstrap-shop-homepage-gh-pages/index.html", "/home/houssem_saidi/CSC4101/AgVoy/templates/room/startbootstrap-shop-homepage-gh-pages/index.html");
    }
}
