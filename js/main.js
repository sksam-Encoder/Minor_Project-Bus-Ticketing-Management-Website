


$(document).ready(function(){








    $nav = $('.nav1');
    $toogleCollapse = $('.toogle-collapse1');

    //click event on toogle icon

    $toogleCollapse.click(function () {

        $nav.toggleClass('collapse1');


    })

    // ------------------------owl carousel-------------------------------------------------------- 

    $('.owl-carousel').owlCarousel({

        loop: true,
        autoplay: false,
        autoplayTimeout: 3000,
        dots: false,
        nav: true,  // it will acess nav button 
        navText: [$('.owl-navigation .owl-nav-prev'), $('.owl-navigation .owl-nav-next')],
        responsive: {

            0: {

                items: 1
            },


            627: {


                items: 2


            },




            1000: {

                items: 3


            }


        }

    });
    // to use custom arrow navigations buttons we need to adopt the property navText in jquery


    // ------------------------owl carousel-------------------------------------------------------- 

    //-------------------------isotope filter-----------------------------------------------------


    var $perform = $('.perform').isotope({


        itemSelector: '.select',
        layoutMode: 'fitRows'
    });

    // filter items on button click

    $('.button-group').on("click", "button", function () {

        var filtervalue = $(this).attr('data-filter');

        $perform.isotope({ filter: filtervalue });

    });






    //-------------------------isotope filter-----------------------------------------------------



    // qty selection

 // product qty section
//  let $qty_up = $(".qty .qty-up");
//  let $qty_down = $(".qty .qty-down");
//  let $deal_price = $("#deal-price");
//  // let $input = $(".qty .qty_input");

//  $qty_up.click(function(e){
   
//     let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
//     let $price = $("#amount");
       
//      // change ticket price using ajax call

//     //  $.ajax({url: "./ajax.php", type : 'post' , data: {busid : $(this).data("id") },success : function(result){
//     //     var obj = JSON.parse(result);
//     //    console.log(obj);




//     //  } });  //ajax call




//  });

console.log("main js");



let $qty_up = $(".qty .qty-up");
let $qty_down = $(".qty .qty-down");
let $deal_price = $("#total");
// let $input = $(".qty .qty_input");
$qty_up.click(function(e){
  
   let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
   let $price = $("#amount");







   console.log("btn clicked");
      
    // change ticket price using ajax call

    $.ajax({url: "./js/ajax.php", type : 'post' , data: {busid : $(this).data("id") },success : function(result){
       var obj = JSON.parse(result);
        console.log(obj);
        let item_price = obj[0]['amount'];

      if($input.val() >= 1 && $input.val() <= 9){
        $input.val(function(i, oldval){
            return ++oldval;
        });

        // increase price of the product
        $deal_price.text(parseInt( item_price * $input.val()).toFixed(2));

    }


    } });  //ajax call




});
$qty_down.click(function(e){
  
   let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
   let $price = $("#amount");

   console.log("btn clicked");
      
    // change ticket price using ajax call

    $.ajax({url: "./js/ajax.php", type : 'post' , data: {busid : $(this).data("id") },success : function(result){
       var obj = JSON.parse(result);
        console.log(obj);
        let item_price = obj[0]['amount'];

      if($input.val() >= 2 && $input.val() <= 9){
        $input.val(function(i, oldval){
            return --oldval;

        });

        // increase price of the product
        $deal_price.text(parseInt( item_price * $input.val()).toFixed(2));

    }


    } });  //ajax call




});






}); //document ready














