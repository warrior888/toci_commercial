// Paskudny formularz mBank'u
// TODO: obsługa formularza
Bank.addBank('1140', function () {
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

  return form;
});