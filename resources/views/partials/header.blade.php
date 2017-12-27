<nav id="mynav" class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/" style="text-decoration: line-through">
        ANXTY
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!-- harusnya class active cuma saya ga paham biar dynamic -->
        <li id='home'><a href="/">Home <span class="sr-only">(current)</span></a></li>
        <li id='about'><a href="/about">About Us</a></li>
        <li class="dropdown">

          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li id='community'><a href="/community"><i class="fa fa-users" aria-hidden="true"></i> Community</a></li>

        <li><a href="/cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart</a></li>
        <li class="dropdown">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> Member <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/login">Login</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/register">Register</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<style>

.navbar-default {
 background-image: linear-gradient(to bottom, #f6f4f4 95%, #555151 100%);
 background-repeat: repeat-x;
 filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff004400', endColorstr='#ff009900', GradientType=0);
}

.navbar-custom {
  background-color:#020313;
  color:#ffffff;
  border-radius:0;
}

.navbar-custom .navbar-nav > li > a {
  color:#fff;
}

.navbar-custom .navbar-nav > .active > a {
  color: #ffffff;
  background-color:transparent;
}

.navbar-custom .navbar-nav > li > a:hover,
.navbar-custom .navbar-nav > li > a:focus,
.navbar-custom .navbar-nav > .active > a:hover,
.navbar-custom .navbar-nav > .active > a:focus,
.navbar-custom .navbar-nav > .open >a {
  text-decoration: none;
  background-color: #062c5e;
}

.navbar-custom .navbar-brand {
  color:#eeeeee;
}
.navbar-custom .navbar-toggle {
  background-color:#eeeeee;
}
.navbar-custom .icon-bar {
  background-color:#000000;
}
.nav-colored {background: linear-gradient( rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.5) ), url('/img/joinus.jpeg');}
.nav-transparent { background-color:transparent;}
</style>


<script>
$(window).scroll(function () {
    if ($(document).scrollTop() >= 1 ) {
      $('nav').addClass("nav-colored");
    }
    else {
      $('nav').removeClass("nav-colored");
    }
  });
</script>
