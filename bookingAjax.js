

function show(){  
    $.ajax({
        url:"bookingprofile.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });

}



function show1(){  
 
    $.ajax({
        url:"servicebookprofile.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}