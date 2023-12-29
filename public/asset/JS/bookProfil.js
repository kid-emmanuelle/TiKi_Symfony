window.addEventListener("load", () => {
});

function selectImg(object) {
    document.getElementById("main-image").src=object.dataset.link;
}

function submitReview(object){
    var star = $('#star').val();
    var review = $('#reviewText').val();
    var book = 1;

    $.ajax({
        url: 'postReview',
        method: 'POST',
        data: { star: star, review: review, book: book },
        success: function(response) {
            if (response.success) {
                window.location.href = '/book/'+book;
            } else {
                window.location.href = '/login';
            }
        },
        error: function(error) {
            console.error('Erreur lors de la soumission du formulaire', error);
            console.log('Réponse serveur complète : ', error.responseText);
            // alert("Erreur, merci de contacter un administrateur du site.");

        }
    });

}