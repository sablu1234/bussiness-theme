<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('assets/css/squarely.css')?>">
    <!--common.css  -->
      <link rel="stylesheet" href="<?php echo get_theme_file_uri('assets/css/common.css')?>">
    <title>Business Templates!</title>
  </head>
  <body>
  <!--navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="#">Business</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
<?php 
// $age= 27;
// if($age<18){
//   echo "you are voter";
// }
// else{
//   echo "you are baby";
// }


?>




      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">About</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="hero-header" style="background-image: url('<?php echo get_theme_file_uri('assets/img/business.jpg')?>')">
        <div class="header">
            <h1>Busines Name or Heading</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aut cum cupiditate distinctio.</p>
        </div>
    </div>

    <!--main content-->
    <div class="container mb-4 mt-4">
        <div class="row">
            <div class="col-md-8 mb-3">
                <h2>About us</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet consectetur, corporis debitis dignissimos distinctio, harum obcaecati porro possimus quae ratione repudiandae suscipit veritatis, voluptas voluptatibus voluptatum? Ad cum dolorem tempora.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus aliquam consequuntur libero minus quia sint tempora totam! Ad amet atque eligendi error eum, ipsa quae qui quis vero voluptatibus.</p>
                <a href="#" class="btn btn-primary">Make a Phone call</a>
            </div>
            <div class="col-md-4 align-items-center d-md-flex">
                <img class="img-fluid" src="<?php echo get_theme_file_uri('assets/img/girl.jpg')?>" alt="lapi_girl">
            </div>
        </div>
    </div>

        <!--3 cards-->
    <div class="container-fluid mb-4">
        <div class="row bg-light p-md-5">

<?php 

$the_client=new wp_query(
  array(
    'post_type'=>array('wporg_product')
  )
);



if($the_client->have_posts()):


while ($the_client->have_posts()):$the_client->the_post();
?>

<div class="col-md-4 mb-3">
                <div class="card">
                  <?php 
                  if(has_post_thumbnail()){
                    the_post_thumbnail('medium',array('class'=>'card-img-top'));
                  }
                  else{
                    ?>
                    <img class="card-img-top" src="<?php echo get_theme_file_uri('assets/img/1.jpg')?>" alt="">
                    <?php
                  }
                  
                 ?>
                    <!-- <img class="card-img-top" src="<?php echo get_theme_file_uri('assets/img/1.jpg')?>" alt=""> -->
                    <div class="card-body">
                        <h3><?php the_title('hasan ')?></h3>
                        <p><?php The_content('hasan ')?></p>
                    </div>
                    <div class="card-footer">
                       <a class="btn btn-primary" href="<?php the_permalink();?>">Find out more!!</a>
                    </div>
                </div>
            </div>
<?php
endwhile;
else:
  echo "post nai";
endif;
?>



        </div>
    </div>

    <!--footer-->
    <div class="py-3 bg-light text-center">
        <p class="m-0">Copyright By <a href="http://bootcatch.com/lightly" target="_blank">bootcatch.com</a> 2019</p>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>