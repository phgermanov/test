<div class="navbar navbar-default navbar-static-top nav-border" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" >
         <!-- <img src="<?php echo base_url("assets/img/logo3.png");?>" class="logo" alt="..."/> -->
        <p class="heading">Philip Germa<span style="color: #E84D5B;">n</span>ov</p>
      </a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li <?php if ($id == 0) echo 'class="active"'; ?> ><a href="index">HOME</a></li>
        <li <?php if ($id == 1) echo 'class="active"'; ?> ><a href="about">ABOUT</a></li>
        <li <?php if ($id == 2) echo 'class="active"'; ?> ><a href="projects">PROJECTS</a></li>
        <li <?php if ($id == 3) echo 'class="active"'; ?> ><a href="contact">CONTACT</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>