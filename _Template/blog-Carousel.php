<?php


?>




<section class="backs">
    <div class="container pt-5">
        <div class="blog">
            <h1 style="margin:0%;">Buses departure from Kolkata </h3>
                <h3 style="margin:0%;"> And Returns Reservation Available </h3>
                <div class="owl-carousel owl-theme blog-post">
                <?php foreach ($Buses as $item) { ?>

                    <div class="blog-content">
                    <a href="<?php printf('%s?Bus_id=%s', 'info.php',  $item['ID']); ?>">  <img src="./assets/Blog-post/<?php echo $item['bus_image'] ?? "Error"; ?>?>" class="blog-img" alt="post-1"> </a>
                                              
                        <div class="blog-title">

                            <h3> <?php echo $item['route'] ?? "Route Error"; ?> </h3>
                            <button class="bttn btn-post"> Reserve Now </button>
                            <span style="color:green;font-size:20px">  &#x20B9; <?php echo $item['amount'] ?? "Error"; ?></span>

                        </div>

                    </div>


                 <?php    } ?>
                </div>
                <div class="owl-navigation">
                    <span class="owl-nav-prev"> <i class="fas fa-long-arrow-alt-left"></i> </span>
                    <span class="owl-nav-next"> <i class="fas fa-long-arrow-alt-right"></i></span>
                </div>

        </div>
    </div>
</section>