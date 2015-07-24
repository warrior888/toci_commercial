document.addEventListener('DOMContentLoaded', function () {
  var accountForm = document.getElementById('accountForm');

  accountForm.addEventListener('submit', function () {
    var accountNumber = getAccountNumber();

    if (isValidAccountNumber(accountNumber)) {
        var bank = Bank.getBank(getCrucialNumber(accountNumber));

      if (bank) {
        renderForm(bank.getForm(function (data) {
          // TODO: obsługa danych wygenerowanego formularza
          console.log(data);
        }));
      } else {
        // TODO: obsługa nieobsługiwanego banku
        console.log('nieobsługiwany bank');
      }
    } else {
      // TODO: obsługa niepoprawnego numeru konta
      console.log('niepoprawny numer konta');
    }
  });
});