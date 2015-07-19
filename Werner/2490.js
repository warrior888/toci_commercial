console.log("2490 Alior Bank")

function form2490() {
  var form = createElement('form',
    { action: '#' }
  );

  // Data

  // Tytul platnosci
  var labelPaymentTitle = createElement('label',
    { for: 'name'}, { textContent: 'Tytul platnosci'});
  var inputPaymentTitle = createElement('input',
    { type: 'text'}, { name: 'name'});

  // Numer rachunku nadawcy
  var labelOwnerAccountNumber = createElement('label',
    { for: 'acc'}, { textContent: 'Numer rachunku nadawcy: '});
  var inputOwnerAccountNumber = createElement('label',
    { type: 'text'}, { name: 'acc'});

  // nazwa nadawcy
  var labelOwnerName = createElement('label',
    { for: 'name'}, { textContent: 'Nazwa nadawcy: '});
  var inputOwnerName = createElement('label',
    { type: 'text'}, { name: 'name'});

  // adres nadawcy
  var labelOwnerAddress = createElement('label',
    { for: 'name'}, { textContent: 'Adres nadawcy: '});
  var inputOwnerAddress = createElement('label',
    { type: 'text'}, { name: 'name'});

  // kwota
  var labelTransferAmount = createElement('label',
    { for: 'amount'}, { textContent: 'Kwota przelewu: '});
  var inputTransferAmount = createElement('label',
    { type: 'text'}, { name: 'amount'});

  // nr rachunku odbiorcy
  var labelReceiverAccountNumber = createElement('label',
    { for: 'account'}, { textContent: 'Numer rachunku odbiorcy: '});
  var inputReceiverAccountNumber = createElement('label',
    { type: 'text'}, { name:'account'});

  // nazwa odbiorcy
  var labelReceiverName = createElement('label',
    { for: 'name'}, { textContent: 'Nazwa odbiorcy'});
  var inputReceiverName = createElement('label',
    { type: 'text'}, { name: 'name'});

  // adres odbiorcy
  var labelReceiverAddress = createElement('label',
    { for: 'name'}, { textContent: 'Adres odbiorcy'});
  var inputReceiverAddress = createElement('label',
    { type: 'text'}, { name: 'name'});

  var submit = createElement('input',
    { type: 'submit'}, {value: 'Wykonaj przelew'});

  form.appendChild(labelPaymentTitle);
  form.appendChild(inputPaymentTitle);
  form.appendChild(labelOwnerAccountNumber);
  form.appendChild(inputOwnerAccountNumber);
  form.appendChild(labelOwnerName);
  form.appendChild(inputOwnerName);
  form.appendChild(labelTransferAmount);
  form.appendChild(inputTransferAmount);
  form.appendChild(labelOwnerAddress);
  form.appendChild(inputOwnerAddress);
  form.appendChild(labelReceiverAccountNumber);
  form.appendChild(inputReceiverAccountNumber);
  form.appendChild(labelReceiverName);
  form.appendChild(inputReceiverName);
  form.appendChild(labelReceiverAddress);
  form.appendChild(inputReceiverAddress);
  form.appendChild(submit);

  return form;
}
