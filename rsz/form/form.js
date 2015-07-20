function GenerateForm()
{
var form = createElement('form',
      { action: '#' }
    );

    var lName = createElement('label',
      { for: 'name' },
      { textContent: 'Adresat' }
    );
    var iName = createElement('input',
      { type: 'text' },
      { name: 'name' }
    );

    var lAmount = createElement('label',
      { for: 'amount' },
      { textContent: 'Kwota' }
    );
    var iAmount = createElement('input',
      { type: 'text' },
      { name: 'amount' }
    );

    var lAccount = createElement('label',
      { for: 'account' },
      { textContent: 'Numer konta adresata' }
    );
    var iAccount = createElement('input',
      { type: 'text' },
      { name: 'account' }
    );

    var submit = createElement('input',
      { type: 'submit' },
      { value: 'Send' }
    );


    form.appendChild(lName);
    form.appendChild(iName);
    form.appendChild(lAmount);
    form.appendChild(iAmount);
    form.appendChild(lAccount);
    form.appendChild(iAccount);
    form.appendChild(submit);
 
    return form;
}