document.addEventListener('DOMContentLoaded', (event) => {
  const inputField = document.getElementById('searchbarstyle');

  if (inputField) {
    inputField.addEventListener('keyup', (event) => {
      if (event.key === 'Enter') {
        var inputValue = inputField.value;
        console.log(inputValue);
      }
    });
  } else {
    console.error("Nie znaleziono elementu z ID 'searchbarstyle'.");
  }
});