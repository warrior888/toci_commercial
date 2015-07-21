//funkcja tworząca nowy obiekt bank
function Bank(crucialNumber, getForm) {
  this.getForm       = getForm;
  this.crucialNumber = crucialNumber;

  // Dzięki temu nie ważne jest, czy napiszemy
  //   var bank = new Bank(...);
  // czy też
  //   var bank = Bank(...);
  // (w większości przypadków, ale to nie ważne póki co)
  return this;
}

// Tu będą trzymane banki.
Bank.banks = {};

//funkcja zwracająca bank o podanym numberze
// Bank.getBank(crucialNumber: string) -> Bank
Bank.getBank = function (crucialNumber) {
  // TODO: jakieś sprawdzenie, czy taki bank istnieje?
  return Bank.banks[crucialNumber];
};

//funkcja dodająca bank do zmiennej przechowującej banki
// Można pomyśleć nad Bank.addBank(bank: Bank) -> undefined
// Bank.addBank(crucialNumber: string, getForm: function) -> undefined
Bank.addBank = function (crucialNumber, getForm) {
  // TODO: jakieś sprawdzenie, czy taki bank już istnieje?
  Bank.banks[crucialNumber] = new Bank(crucialNumber, getForm);
};