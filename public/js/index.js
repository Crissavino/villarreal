window.onload = () => {

  window.addEventListener('resize', function() {
    if (window.innerWidth < 500) {
      truncateBlogParagraph(450);
    }
  });

  $('a').on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== '') {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top,
      }, 800, function() {

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
};

// FUNCIONES
function truncateBlogParagraph(cant) {
  let articlesBody = document.querySelectorAll('#articleBody');

  articlesBody.forEach((article) => {
    // const truncateText = article.innerText.slice(0, cant)
    article.innerText = article.innerText.slice(0, cant) + '...';
  });

}

$(document).ready(function() {
  // Add smooth scrolling to all links

});
// FIN FUNCIONES
