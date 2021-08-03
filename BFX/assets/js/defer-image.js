function deferImg() {
    for (var image = document.getElementsByTagName("img"), i = 0; i < image.length; i++) {
        var defer = image[i].getAttribute("data-src");
        defer && (image[i].setAttribute("src", defer), image[i].removeAttribute("data-src"));
    }
}
window.onLoad = deferImg();