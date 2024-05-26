var textElements = document.querySelectorAll('.card .text h3');
textElements.forEach(function(element) {
    var text = element.textContent.trim();
    var words = text.split(' ');
    if (words.length > 8) {
        var truncatedText = words.slice(0, 8).join(' ') + '...';
        element.textContent = truncatedText;
    }
});
var textElements = document.querySelectorAll('.card .text p');
textElements.forEach(function(element) {
    var text = element.textContent.trim();
    var words = text.split(' ');
    if (words.length > 10) {
        var truncatedText = words.slice(0, 10).join(' ') + '...';
        element.textContent = truncatedText;
    }
});