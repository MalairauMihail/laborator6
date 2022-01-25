$(function() {
    // click on button submit
    $("#form").on("submit", function(e){
        e.preventDefault();
        // send ajax
        $.ajax({
            url: 'userinformation.php', // url where to submit the request
            type : "POST", // type of action POST || GET
            dataType : 'json', // data type
            data : $("#form").serialize(), // post data || get data
            success : function(result) {
                // you can see the result from the console
                // tab of the developer tools
                console.log(result);
            },
            error: function(xhr, resp, text) {
                console.log(xhr, resp, text);
            }
        })
    });
});