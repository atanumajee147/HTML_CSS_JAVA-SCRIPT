$.getJSON("php/index.php", function (data) {
    for (let i = 0; i <= data.length; i++) {
        const url = (data[i].url);
        $('#parent').append(
            $('<div/>')
                .addClass("columns")
                .append("<iframe src="+url+" width=\"100%\" height=\"200vh\"></iframe>")
        );
    }
}).done(function () {
    console.log("second success");
})
    .fail(function () {
       alert("Failed")
    })
    .always(function () {
        console.log("complete");
    });
    
 