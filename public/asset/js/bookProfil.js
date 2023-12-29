window.addEventListener("load", () => {
});

function selectImg(object) {
    document.getElementById("main-image").src = object.dataset.link;
}