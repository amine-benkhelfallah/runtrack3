        // Mélanger les images
        $("#shuffle-images").click(function() {
        var images = $("#rainbow-container img");
        var imagesArr = images.get();
        imagesArr.sort(function(){ return 0.5 - Math.random() });
        $.each(imagesArr, function(i, el){
            $("#rainbow-container").append(el);
        });
    });

    // Vérifier l'ordre des images
    $("#check-images").click(function() {
        var images = $("#rainbow-container img");
        var correctOrder = ["arc1.png", "arc2.png", "arc3.png", "arc4.png", "arc5.png", "arc6.png"];
        var isCorrect = true;
        for (var i = 0; i < images.length; i++) {
            if ($(images[i]).attr("src") != correctOrder[i]) {
                isCorrect = false;
                break;
            }
        }
        if (isCorrect) {
            $("#result").html("<p style='color: green;'>Vous avez gagné</p>");
} else {
$("#result").html("<p style='color: red;'>Vous avez perdu</p>");
}
});