setInterval(function () {
    $.ajax({
        url:'my_tickets_data.php',
        success: function(response){
            $('#table_to_refresh').html(response);
        }
    });
}, 1000);