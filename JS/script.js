// Navigation scroll 

$(document).ready(function(){
    $(window).scroll(function(){
        if(this.scrollY > 20){
            $('.navbar').addClass("sticky");
        }else{
            $('.navbar').removeClass("sticky");
        }
    });
    /* toggle menu/navbar script 
    $('.navbar').click(function(){
       $('.navbar ul').removeClass("sticky");
    })*/
});

// contact form js

// $("#submit").click(function(){
//     var name = $("#name").val();
//     var email = $("#email").val();
//     var message = $("#message");
//     $.ajax({
//         method:'post',
//         url:'contact.php',
//         data:{
//             name:name,
//             email:email,
//             message:message,
//             submit:'submit'
//         },
//         success:function(data){
//             alert('data submited successfully!')
//         }
//     });
// });


