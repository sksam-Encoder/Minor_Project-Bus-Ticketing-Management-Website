<?php
$time = array_map(function ($total){ return $total['time']; }, $totalBus);
$unique = array_unique($time);

shuffle($totalBus);

?>
 
 
 
 
 <!--  buses with data filters--------------------------------------------------------------------------   -->
        <section class="bus-filters">
            <div class="container my-5">

                <h3>Buses Categories</h3>

                <!-- bootsrap search bar -->
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="button">Search Buses</button>
                </form>

                <!-- bootsrap search bar -->
                <div id="filters" class="button-group  text-right">
                    <button class="btn is-checked" data-filter="*"> All Buses </button>
                 
                    <?php
                array_map(function ($time){
                    printf('<button class="btn " data-filter=".%s">%s</button>', $time, $time);
                }, $unique);
            ?>


                </div>
                <div class="perform">
                    <div class="row">
                    <?php array_map(function ($totalBus) { ?>
                        <div class="col-md-4 <?php echo $totalBus['time'] ?? "error"; ?> select">


                            <div class="card  text-center " >
                                <img src="./assets/Blog-post/<?php echo $totalBus['bus_image'] ?? "error"; ?> " class="card-img-top" alt="post-1"  >

                                <div class="card-body">

                                    <h5 class="card-title"><?php echo $totalBus['route'] ?? "error";  ?> </h5>

                                    <button class="bttn btn-post"> Reserve Now </button>
                                    <br>
                                    <span><?php echo $totalBus['amount'] ?? "error"; ?> </span>

                                </div>

                            </div>


                        </div>
                        <?php   },$totalBus ) ?>
                    </div>
                </div>


            </div>
        </section>

        <!--x  buses with data filters-------------------------------------------------------------------------- x  -->
