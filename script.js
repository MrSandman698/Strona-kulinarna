function searchRecipes(query) {
    if (query.length === 0) {
      document.getElementById('recipes').innerHTML = "";
      return;
    }
  
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById('recipes').innerHTML = this.responseText;
        highlightQuery(query);
      }
    };
    xhttp.open("GET", "get_recipes.php?q=" + query, true);
    xhttp.send();
  }
  
  function highlightQuery(query) {
    const searchbar = document.getElementById('searchbar');
    searchbar.value = searchbar.value.replace(new RegExp(query, 'gi'), (match) => `<span class="highlight">${match}</span>`);
  }
  