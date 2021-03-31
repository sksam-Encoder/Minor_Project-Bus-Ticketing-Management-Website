<?php





?>


    <!--  Main site section -->
    <footer id="footer" class=" text-white py-5" >
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <h4 class="font-rubik font-size-20">TrackBus</h4>
                    <p class="font-size-14 font-rale text-white-50">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, deserunt.</p>
                </div>
                <div class="col-lg-4 col-12">
                    <h4 class="font-rubik font-size-20">Feedback</h4>
                    <form class="form-row">
                        <div class="col">
                            <input type="email" class="form-control" id="emailq" placeholder="Email *">
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-primary mb-2" data-toggle="modal" onclick="transfer()"  data-target="#exampleModal">Go To Feeds</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-2 col-12">
                    <h4 class="font-rubik font-size-20">Information</h4>
                    <div class="d-flex flex-column flex-wrap">
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Privacy Policy</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Terms & Conditions</a>
                    </div>
                </div>
                <div class="col-lg-2 col-12">
                    <h4 class="font-rubik font-size-20">Account</h4>
                    <div class="d-flex flex-column flex-wrap">
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">My Account</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Order History</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Wish List</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Newslatters</a>
                    </div>
                </div>
            </div>
        </div>
    
    </footer>

    <div class="copyright text-center bg-dark text-white manage " >
        <p class="font-rale font-size-14">&copy; Copyrights 2021 Design By <a href="#" class="color-second">Team Insane </a></p>
    </div>






<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
  </button> -->
  
  <!-- Modal -->

</body>



<!-- jquery file -->

<script src="./js/jquery.min.js"></script>

<!-- jquery file -->




<!--  owl js -->

<script src="./js/owl.carousel.min.js">  </script>












<!--  owl js -->

<!-- isotope plugin js -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"
    integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew=="
    crossorigin="anonymous"></script>

<!-- isotope plugin js -->






<!-- boot script -->

<script src="./js/bootstrap.js"></script>

<!-- boot script -->
<script>
function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginRight = "250px";
  }
  
  /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
  }
</script>
<script>
    $("#go").click(function(e) {
        var task = document.getElementById('num').value;
        $.post("sess.php", {
            res_id: task
        });
    });
</script>

<!--  custom js -->
<script src="js/main.js"></script>

<!--  custom js -->

</html>