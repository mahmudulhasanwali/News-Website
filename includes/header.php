 <style>
.main_menu {
    background: #006a4e;
}

.menu li a {
	font-size: 15px;
	color: #fff;
	padding-right: 20px;
	line-height: 10px;
  text-align: center;
  transition: all linear .3s;
}

.menu li a:hover{
    color: #f42a41;
}

.main_menu ul{
  text-align: center;
}

.main_menu button span {
    color: #fff;

}

.main_menu button {
    border-color: #fff;
}
 </style>

 <head>
     <script src="https://kit.fontawesome.com/d468b5caeb.js" crossorigin="anonymous"></script>
 </head>

 <nav class="navbar main_menu fixed-top navbar-expand-lg fixed-top">
     <div class="container">
         <a class="navbar-brand" href="index.php"><img src="images/logo.png" height="50"></a>
         <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
             data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
             aria-label="Toggle navigation">
             <span><i class="fa fa-bars"></i></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
             <ul class="navbar-nav ml-auto menu">
             <?php $query = mysqli_query($con, "select id,CategoryName from tblcategory");
                      while ($row = mysqli_fetch_array($query)) {
                      ?>

                 <li class="nav-item">
                 <a
                              href="category.php?catid=<?php echo htmlentities($row['id']) ?>"><?php echo htmlentities($row['CategoryName']); ?></a>
                 </li>
                 <?php } ?>
                 <li class="nav-item">
                     <a class="nav-link" href="contact-us.php"></a>
                 </li>


             </ul>
         </div>
     </div>
 </nav>