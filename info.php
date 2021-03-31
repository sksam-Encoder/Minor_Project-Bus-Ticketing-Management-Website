<!--   Info Page  -->
<?php

include("./header.php");

$Bus_id = $_GET['Bus_id'] ?? 1;
$_SESSION['id'] = $Bus_id;

foreach ($totalBus as $item) :
    if ($item['ID'] == $Bus_id) :

        include("./_Template/Modals.php");
        $bus_img = $getbus->sample_Images();
        $arr = array();
        $count = -1;
        foreach ($bus_img as $img) {


            $arr[] = $img['SAMPLE_IMAGES'];
            $count++;
        }

        $ran = rand(0, $count);

        echo $arr[$ran];


?>

        >



        <section id="product" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">

                        <img src="./assets/<?php echo $arr[$ran];  ?>" alt="product" class="img-fluid">
                        <div class="form-row pt-4 font-size-16 font-baloo">
                            <div class="col">
                                <a href="Preloader-Using/index.php"> <button id="go" class="btn btn-danger form-control">Proceed to Book</button> </a>
                            </div>
                            <div class="col">
                                <!-- button Book -->
                            </div>
                        </div>
                    </div>
                    <?php

                    $Route = $item['route'];

                    $RouteChunks = explode("To", $Route);
                    ?>





                    <div class="col-sm-6 py-5">
                        <h5 class="font-baloo font-size-20"> Departure From <span id="from"> <?php echo $RouteChunks[0];   ?> </span></h5>
                        <h6 style="color:green"> To <span id="Dest"> <?php echo $RouteChunks[1];    ?> </span> </h6>
                        <small> Ac Compatitable</small>
                        <div class="d-flex">

                            <a href="#" class="px-2 font-rale font-size-14"></a>
                        </div>
                        <hr class="m-0">

                        <!---    product price       -->
                        <table class="my-3">
                            <tr class="font-rale font-size-14">
                                <td>Discount:</td>
                                <td> 10 % </td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td>Deal Price: </td>
                                <td class="font-size-20 text-danger"> &#x20B9; <span id="amount"> <?php echo $item['amount'] ?? "error"; ?> </span><small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td>Bus No: </td>
                                <td class="font-size-20 text-info"> <span id='no'> <?php echo $item['bus_no'] ?? "error"; ?> </span></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td></td>
                                <td><span class="font-size-16 text-danger"></span></td>
                            </tr>
                        </table>
                        <!---    !product price       -->

                        <!--    #policy -->
                        <div id="policy">
                            <div class="d-flex">
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-hamburger border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12"> Food Provided <br> </a>
                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-bus  border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">Journey<br> With Safety</a>
                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">With <br>Ac</a>
                                </div>
                            </div>
                        </div>
                        <!--    !policy -->
                        <hr>

                        <!-- order-details -->
                        <div id="order-details" class="font-rale d-flex flex-column text-dark">
                            <small>Journey by : Mar 29 - Apr 1</small>
                            <small> Booked by <a href="#">Daily Electronics </a> </small>
                            <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;</small>
                        </div>
                        <!-- !order-details -->

                        <div class="row">
                            <div class="col-12">
                                <!-- color -->
                                <div class="color my-3">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="font-baloo"> Total price: &#x20B9; &nbsp; <span class="text-danger" id="total"> <?php echo $item['amount']; ?> </span></h6>
                                        <!-- <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div> -->
                                    </div>
                                </div>
                                <!-- !color -->
                            </div>
                            <div class="col-12  mt-4 ">
                                <!-- product qty section -->
                                <div class="qty d-flex">
                                    <h6 class="font-baloo">Person</h6>
                                    <div class="px-4 d-flex font-rale">
                                        <button class="qty-up border bg-light" data-id="<?php echo $item['ID']  ?>"><i class="fas fa-angle-up"></i></button>
                                        <input type="text" id="num" data-id="<?php echo $item['ID']  ?>" name="per" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                        <button data-id="<?php echo $item['ID']  ?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                    </div>
                                </div>

                                <!-- !product qty section -->
                            </div>
                        </div>

                        <!-- size -->
                        <div class="size my-3">
                            <h6 class="font-baloo"> Time : </h6>
                            <div class="d-flex justify-content-between w-75">
                                <div class="font-rubik border p-2">
                                    <span class="btn p-0 font-size-14"> Departure:<?php echo $item['time'] ?? "error";  ?> </span>
                                </div>
                                <div class="font-rubik border p-2">
                                    <span class="btn p-0 font-size-14"> <?php echo $item['arrivalTime'];   ?> </span>
                                </div>
                                <div class="font-rubik border p-2">
                                    <span class="btn p-0 font-size-14"> <?php echo $item['bus_desc'];   ?> </span>
                                    <span id="rslt"></span>
                                </div>

                            </div>
                        </div>
                        <!-- !size -->


                    </div>

                    <div class="col-12">
                        <h6 class="font-rubik"> Bus Desc </h6>
                        <hr>
                        <p class="font-rale font-size-14"> <?php echo $item['category']; ?> </p>
                        <p style="display:none;" id="trip"> <?php echo $item['round_trip']; ?> </p>
                        <p class="font-rale font-size-14 text-danger"> <?php
                                                                        $chk = $item['round_trip'];
                                                                        if ($chk == 1) {

                                                                            echo " Round Trip Avaialable For This Bus";
                                                                        } else {

                                                                            echo " Round Trip Not  Avaialable !";
                                                                        }


                                                                        ?> </p>

                    </div>
                </div>
        </section>




<?php

        //  $val = '<script>document.write(val)</script>';



        include("./footer.php");
    endif;
endforeach;
?>


