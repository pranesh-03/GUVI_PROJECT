// $(document).ready(function(){
//     alert("hi");
//    getData=function(e){

//             $.ajax({
//                 url:"http://localhost/GUVI/php/profile.php",
//                 type:'GET',
//                 dataType:'json',
//                 success:function(data){
//                }       
//             });
//     }
// })
$(document).ready(function(){
    $.ajax({
        type:"GET",
        url: "http://localhost/GUVI/php/profile.php",
        dataType:"html",
        success: function (data){
            $('#mydata').html(data);
        }
    })
})