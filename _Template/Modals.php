<?php



if (isset($_POST['submitfeed'])) {

  $feed =  $_POST['feedback'];
  $mail =  $_POST['emaill'];
  // $user = new user($DBController);


  $res = $user->submitFeed($mail, $feed);
  if ($res) {

    echo '<script> alert("feedback successfully submited");  </script>';
  } else {

    echo '<script> alert("Login First");  </script>';
  }
}


//  $str = '<textformat leading="2"><p align="left"><font size="10">get me</font></p></textformat>';



?>

<script>
  function transfer() {
    var em = document.getElementById("emailq").value;
    var msg = document.getElementById("exampleModalLabel").innerHTML = em;
    document.getElementById("i").value = em;

  }
</script>

<main>
  <!--   FeedBack Modals -->
  <form action="" method="post">

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" name="check"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <input type="text" name="emaill" id="i" value="text">
            <input type="text" placeholder="Enter Your Feedback" name="feedback" class="standardInput">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="submitfeed" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  </form>