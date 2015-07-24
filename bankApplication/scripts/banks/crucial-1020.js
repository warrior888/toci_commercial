/**
 * Created by Adam on 2015-07-24.
 **/

// 1020 - PKO BP

Bank.addBank('1020', function () {
    var form = createElement('form',
        { action: '#' }, { id: 'formPKO'}
    );

    var bankAccountNumberLabel = createLabelElement("account number", "Numer konta odbiorcy:");
    var bankAccountNumberInput = createInputElement("number", "account number", "accountNumber", "26-cyfrowy numer konta bankowego");

    var recipientNameLabel = createLabelElement("name", "Nazwa odbiorcy:");
    var recipientNameInput = createInputElement("text", "name", "recipientName", "imię, nazwisko lub nazwa firmy");

    var recipientAddressLabel = createLabelElement("address", "Adres odbiorcy:");
    var recipientAddressInput = createInputElement("text", "address", "recipientAddress", "ulica, kod, miejscowość");

    var amountLabel = createLabelElement("amount", "Kwota przelewu:");
    var amountTitle = createInputElement("number", "amount", "amount", "w PLN");

    var titleLabel = createLabelElement("title", "Tytuł przelewu:")
    var titleInput = createInputElement("text", "title", "title", "np. numer zamówienia");

    var submitInput = createInputElement("submit", "submit", "submit", "");

    form.appendChild(bankAccountNumberLabel);
    form.appendChild(bankAccountNumberInput);
    form.appendChild(recipientNameLabel);
    form.appendChild(recipientNameInput);
    form.appendChild(recipientAddressLabel);
    form.appendChild(recipientAddressInput);
    form.appendChild(amountLabel);
    form.appendChild(amountTitle);
    form.appendChild(titleLabel);
    form.appendChild(titleInput);
    form.appendChild(submitInput);

    return form;
});

function createInputElement(type, name, id, placeholder) {

    var inputElement = createElement("input");
    inputElement.setAttribute('type', type);
    inputElement.setAttribute('name', name);
    inputElement.setAttribute('id', id)
    inputElement.setAttribute('placeholder', placeholder);

    return inputElement;
}

function createLabelElement(forAttribute, text) {

    var labelElement = createElement("label");
    labelElement.setAttribute("for", forAttribute);
    labelElement.textContent = text;

    return labelElement;
}
