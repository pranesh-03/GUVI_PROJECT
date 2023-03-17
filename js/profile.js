$(document).ready(function(){
    alert("hi");
   getData=function(e){
    
            $.ajax({
                url:"http://localhost/GUVI/php/profile.php",
                type:'GET',
                dataType:'json',
                success:function(data){
               }       
            });
    }
})
