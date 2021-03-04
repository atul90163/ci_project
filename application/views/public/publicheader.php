<!DOCTYPE html>
<html>
<head>
	<title>Articles lists</title>
	<?= link_tag('assets/css/bootstrap.min.css') ; ?>
<style>
  
  .navWidth
{
  background-color:gray;
}
.ab
{
  background-color: red;
}


.ab:hover
{
  //opacity: 0.2;
   background-color: yellow;
   color: red;


}
.tt
{
  color:red;
}

</style>

</head>
<body>
	<header>
  <nav class="navbar navbar-inverse navbar-expand-lg  bg-dark top-fixed">
  <a class="navbar-brand" href="#">Articles</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    
    <form class="form-inline my-2 my-lg-0  ">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
   
  </div>
  <div class="collapse navbar-collapse" id="navbarColor02">
   <ul class="nav navbar-nav navbar-right">
    	<li>
     <button class="btn btn-secondary my-3 my-sm-0" type="submit"><a href='login/logout'>logout</a></button>
    </li>
</ul>
</div>
</nav>
</div>
</header>