window.onload = () => {

  console.log(window.innerWidth);
    window.addEventListener("resize", function () {
      if (window.innerWidth < 500) {
        truncateBlogParagraph(450)
      }
    });
}

// FUNCIONES
function truncateBlogParagraph(cant) {
  let articlesBody = document.querySelectorAll('#articleBody')

  articlesBody.forEach( (article) => {
    // const truncateText = article.innerText.slice(0, cant)
    article.innerText = article.innerText.slice(0, cant) + '...'
  })

}
// FIN FUNCIONES
