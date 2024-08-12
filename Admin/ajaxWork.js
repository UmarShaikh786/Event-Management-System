

//Displaying All Records

function shownotify(){
    $.ajax({
        url:"notify.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showUsers(){  
    $.ajax({
        url:"adminuser.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function showReview(){  
    $.ajax({
        url:"adminreview.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showoffers(){  
    $.ajax({
        url:"adminoffers.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function showVenues(){  
    $.ajax({
        url:"adminvenues.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function showServices(){  
    $.ajax({
        url:"adminservice.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showEvents(){
    $.ajax({
        url:"adminevent.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showFoods(){
    $.ajax({
        url:"adminfood.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function showBookings(){
    $.ajax({
        url:"adminbooking.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}



function showServiceBookings(){
    $.ajax({
        url:"adminservicebook.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showBill(){
    $.ajax({
        url:"adminbill.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showGallery(){
    $.ajax({
        url:"admingallery.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}


//-------------------------------------------------------------------------------
