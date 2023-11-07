document.addEventListener('DOMContentLoaded', (event) => {
  const inputField = document.getElementById('searchbarstyle');

  if (inputField) {
    inputField.addEventListener('keyup', (event) => {
      if (event.key === 'Enter') {
        var inputValue = inputField.value;
        console.log(inputValue);

        var timeToExpire = 4 * 1000; 

        var date = new Date();
        date.setTime(date.getTime() + timeToExpire);
        var expires = ";expires=" + date.toUTCString();

        document.cookie = "w=" + inputValue + expires + ";path=/";
        window.location.href = window.location.pathname;
        }
    });
  } else {
    console.error("Nie znaleziono elementu z ID 'searchbarstyle'.");
  }
});