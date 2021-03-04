<!DOCTYPE html>
<html>
<head>
	<title>Admin pannel</title>
	<?= link_tag('assets/css/bootstrap.min.css') ; ?>
<style>
  .div1
  {
    height : 300px;
    width: 400px;
    background-color: teal;
  }
  .navWidth
{
  background-color:gray;
}
.div1

{
  border:5px dotted red;
}
.ab
{
  background-color: red;
  padding-right: 30px;
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
  <nav class="navbar navbar-inverse navbar-expand-lg  bg-dark fixed-top">
  <a class="navbar-brand" href="#">Admin pannel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
   <ul class="nav navbar-nav navbar-right ml-auto">
    	<li>
     <button class="btn btn-secondary my-3 my-sm-0" type="submit">
      <!---<a href="#">logout</a> -->
      <?= anchor('login/logout','LogOut'); ?>

     </button>
    </li>
</ul>
</div>
</nav>
</div>
</header>