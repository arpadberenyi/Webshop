<?php
  require_once 'header.php';
  require_once 'cards.php';
 ?>
<title>Webshop</title>

<body>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://imgaz.staticbg.com/banggood/os/202012/20201230000448_431.jpg.webp" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://imgaz.staticbg.com/banggood/os/202012/20201215022422_904.jpg.webp" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://imgaz.staticbg.com/banggood/os/202012/20201215022743_766.jpg.webp" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="row  justify-content-center"> 

<!--
    <div class="card   col-md-3 ikondoboz " >
      <div class="card-body">
         <div class="icon icon-shape icon-shape-primary   rounded-circle mb-8 ">
         <span class="fa-stack fa-2x">
      <i class='fas fa-shipping-fast fa-2 '></i>
      </span>
         </div>
            <h6 class="mb-1">Fast and convenient logistics</h6>
            <p>Fast and convenient door to door delivery</p>
      </div>
    </div>
-->
    <div class="col-md-3 card ikondoboz" >
      <div class="card-body ">
      <div class="icon mb-8 ">
        <span class="fa-stack fa-2x">
            <i class="fas fa-shipping-fast fa-2" aria-hidden="true"></i>
        </span>
      </div>
    <h6 class="card-title"> Fast and convenient logistics</h6>
    <p class="card-text ikonlista">Fast and convenient door to door delivery</p>
      </div>
    </div>

    <div class="col-md-3 card ikondoboz" >
      <div class="card-body ">
      <div class="icon mb-8 ">
        <span class="fa-stack fa-2x">
            <i class="fas fa-award fa-2" aria-hidden="true"></i>
        </span>
      </div>
    <h6 class="card-title"> Quality and Saving
    </h6>
    <p class="card-text ikonlista"> Comprehensive quality control and affordable prices</p>
      </div>
    </div>

    <div class="col-md-3 card ikondoboz" >
      <div class="card-body">
      <div class="icon mb-8 ">
            <span class="fa-stack fa-2x">
                <i class=" fas fa-shield-alt" aria-hidden="true"></i>
            </span>
            </div>
      <h6 class="card-title"> Payment Security </h6>
    <p class="card-text box-icon"> More than 40 different secure payment methods</p>
      </div>
    </div>

    <div class="col-md-3 card ikondoboz" >
      <div class="card-body">
          <div class="icon mb-8 ">
                <span class="fa-stack fa-2x">
                       <i class="fas fa-comments" aria-hidden="true"></i>
               </span>
         </div>
      <h6 class="card-title"> Professional service and product warranty</h6>
    <p class="card-text ikonlista"> 24/7 Customer Service </p>
      </div>
    </div>

</div>

<div class="row mt-5"> 
  <div class="col-md-4" ></div>
  <div class="col-md-4 text-center" > <h2>Termékek</h2>  </div>
  <div class="col-md-4" ></div>
</div>


<div class="container mt-5 mb-5 "> 

        <?php
        for($j=0;$j<2;$j++){
        ?>  
          <div class="row card-columns justify-content-center" >
        <?php  

              for($i=0;$i<3;$i++){
              ?> 
                          <div class="col-sm-3 card p-2 "  >
                          <a class="d-block" href="product.php"> 
                           <img id="kep_<?php echo ($j*3)+$i; ?>" class="card-img-top" src="<?php  echo $products[($j*3)+$i]->img  ?>" alt="Card image">
                         </a>
                              <div class="card-body  ">
                                  <h4 id="title_<?php echo ($j*3)+$i; ?>" class="card-title "><?php echo  $products[($j*3)+$i]->name  ?></h4>
                                  <p id="text_<?php echo ($j*3)+$i; ?>" class="card-text"><?php  echo  $products[($j*3)+$i]->description  ?> </p> 
                                  
                                  <a href="#" class="btn  float-left "> <h5> <?php  echo  $products[($j*3)+$i]->price  ?>Ft </h5></a>
                                <a href="#" class="btn  btn-warning float-right "> KOSÁRBA<!--Add to Cart--> <i class="fa fa-cart-plus" aria-hidden="true"></i></i>
              </i>
              </a>
                  
                            </div>
                          </div>
              <?php
}
?>
</div>
<?php
}
?>
 <div class="row  " >
            <div class="col-sm-6 card">
               <button id="back"><<  ELŐZŐ </button>
            </div>
            
            <div class="col-sm-6 card">
            <button id="next">KÖVETKEZŐ >>  </button>
            </div>
 </div>

 <!--
 <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
-->
      </div>

      <footer class="container-fluid  text-center col-sm-4">
        <p>Online Store Copyright</p>  
        <form class="form-inline ">Get deals:
          <input type="email" class="form-control" size="50" placeholder="Email Address">
          <button type="button" class="btn btn-primary">Sign Up</button>
        </form>
      </footer>
      
<script>
let start = <?php echo $start; ?>;

$(document).ready(function(){
$("#next").on('click',function(e){
e.preventDefault();
 $.ajax({
           url:"cards.php",
           data:"start="+start,
           dataType: "json",
           success:function(response){
            for(i=0;i<response.length;i++){

              $("#kep_"+i)[0].src = response[i].img;
              $("#title_"+i)[0].innerHTML = response[i].name;
              $("#text_"+i)[0].innerHTML = response[i].description;             
                            
            }
            start+=6;
            }
        }
        );

  });


$("#back").on('click',function(e){
 e.preventDefault();
 $.ajax({
            url:"cards.php",
            data:"start="-start,
            dataType: "json",
            success:function(response){
            for(i=0;i<response.length;i++){
              $("#kep_"+i)[0].src = response[i].img;
              $("#title_"+i)[0].innerHTML = response[i].name;
              $("#text_"+i)[0].innerHTML = response[i].description;             
            }
            start-=6;
            }
        }
        );
  });
}
);
</script>

</body>
</html>