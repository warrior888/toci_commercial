// Paskudny formularz mBank'u
Bank.addBank('1140', function (callback) {
  var form = createElement('form',
    { action: '#' }
  );

  var labelTargetName = createElement('label',
    { for: 'name' },
    { textContent: 'Adresat' }
  );
  var inputTargetName = createElement('input',
    { type: 'text' },
    { name: 'name' }
  );

  var labelTargetAmount = createElement('label',
    { for: 'amount' },
    { textContent: 'Kwota' }
  );
  var inputTargetAmount = createElement('input',
    { type: 'text' },
    { name: 'amount' }
  );

  var labelTargetAccount = createElement('label',
    { for: 'account' },
    { textContent: 'Numer konta adresata' }
  );
  var inputTargetAccount = createElement('input',
    { type: 'text' },
    { name: 'account' }
  );

  var submit = createElement('input',
    { type:  'submit' },
    { value: 'Zleć przelew' }
  );


  form.appendChild(labelTargetName);
  form.appendChild(inputTargetName);

  form.appendChild(labelTargetAmount);
  form.appendChild(inputTargetAmount);

  form.appendChild(labelTargetAccount);
  form.appendChild(inputTargetAccount);

  form.appendChild(submit);

  // Gdyby ustalić jakąś konwencję id na inputach,
  // to można by było ten fragment (już uogólniony)
  // przenieść do init.js i podpinać po .getForm()
  // (wtedy callback byłby zbędny)
  form.addEventListener('submit', function () {
    // Świetne miejsce na walidacje
    callback({
      name:    inputTargetName.value,
      amount:  inputTargetAmount.value,
      account: inputTargetAccount.value
    });
  });

  return form;
});