$.ajax({
    url:"http://localhost/GUVI/php/profile.php",
    type:'GET',
    dataType:'json',
    success:function(data){
        console.log(data)
    }

})