$('#navlist li a').each(function()  {
    // Attach navigation button behavior to each button from <nav>
    attachButtonEvent($(this));
});

// On the navigation button click:
//  1. Make ajax request to retrieve wanted page
//  2. Remove class "active" from every button and add it to the clicked one

function attachButtonEvent(btn) {
    let newSection = btn.attr("href").substr(1);  
    let ajaxURL = "/views/" + newSection + ".php";
    btn.click(function() {
        $.ajax({
            url : ajaxURL,
            type : 'GET',
            async : 'true',
            cache : 'false',
    
            success : function(data){
                $('#view').empty().html(data);
            },
        });
        $('#navlist li a').each(function() {
            $(this).removeClass("active");
        })
        $(this).addClass("active");
    });
}