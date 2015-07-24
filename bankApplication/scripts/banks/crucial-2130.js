//Formularz dla Volkswagen Bank v1.0
//author: Adam Pasternak

Bank.addBank('2130', function () {
    var form = generateVWBankForm();

    return form;
}
)

function generateVWBankForm() {
    var form = document.createElement('form');
    form.id = 'formVWBank';
    form.action = '#';
    form.method = 'post';


    var destinationName = createInputDiv(
        'destinationName',
        'destinationNameInput',
        'Destination Account Name: ',
        26
    );
    var destinationAccount = createInputDiv(
        'destinationAccount',
        'destinationAccountInput',
        'Destination Account Number: ',
        26
    );
    var transferTitle = createInputDiv(
        'transferTitle',
        'transferTitleInput',
        'Transfer Title: ',
        26
    );
    var transferAmmount = createInputDiv(
        'transferAmmount',
        'transferAmmountnput',
        'Ammount: ',
        10
    );
    var sendButton = createElement('input', {type: 'submit'}, {value: 'Send Transfer'})

    form.appendChild(destinationName);
    form.appendChild(destinationAccount);
    form.appendChild(transferTitle);
    form.appendChild(transferAmmount);
    form.appendChild(sendButton);



    //document.getElementById("div1").appendChild(form);
    return form;
}

function createInputDiv(divId, inputName, labelText, size) {
    var div = createElement('div',
        { id: divId }
    );
    createInput(div, inputName, labelText, size);
    return div;
}

function createInput(parent,name, text, size) {
    var label = createElement('label',
        {for: name},
        {textContent: text}
    );
    var input = createElement('input',
        {type: 'text'},
        {name: name},
        {size: size}
    );
    parent.appendChild(label);
    parent.appendChild(createElement('br'));
    parent.appendChild(input);
}