function RenderForm()
{

    var form = document.createElement("form");
    form.setAttribute('method', "post");
    form.setAttribute("action", "#");

    var tittle = document.createElement("div");
    tittle.innerHTML = "Zadeklaruj przelew dla swojego banku: Narodowy Bank Polski";
    tittle.setAttribute("class", "transferTittle");

    var firstNameDiv = document.createElement("div");
    firstNameDiv.innerHTML = 'Podaj swoje imię';

    var firstName = document.createElement("input");
    firstName.setAttribute("type", "text");
    firstName.setAttribute("name", "firstName");
    firstName.setAttribute("class", "form-control");

    var surnameDiv = document.createElement("div");
    surnameDiv.innerHTML = 'Podaj swoje nazwisko';

    var surname = document.createElement("input");
    surname.setAttribute("type", "text");
    surname.setAttribute("name", "surname");
    surname.setAttribute("class", "form-control");

    var transferNameDiv = document.createElement("div");
    transferNameDiv.innerHTML = 'Wpisz tytuł przelewu';

    var transferName = document.createElement("input");
    transferName.setAttribute("type", "text");
    transferName.setAttribute("name", "transferName");
    transferName.setAttribute("class", "form-control");

    var accountNumberDiv = document.createElement("div");
    accountNumberDiv.innerHTML = 'Podaj numer konta docelowego';

    var accountNumber = document.createElement("input");
    accountNumber.setAttribute("type", "text");
    accountNumber.setAttribute("name", "accountNubmer");
    accountNumber.setAttribute("class", "form-control");

    var amountDiv = document.createElement("div");
    amountDiv.innerHTML = 'Zadeklaruj kwotę';

    var amount = document.createElement("input");
    amount.setAttribute("type", "text");
    amount.setAttribute("name", "amount");
    amount.setAttribute("class", "form-control");

    var submit = document.createElement("input");
    submit.setAttribute("type", "submit");
    submit.setAttribute("value", "Wyślij przelew");
    submit.setAttribute("class", "btn btn-default");

    var newLine = document.createElement("br");


    form.appendChild(tittle);

    form.appendChild(newLine);

    form.appendChild(firstNameDiv);

    form.appendChild(firstName);

    form.appendChild(newLine);

    form.appendChild(surnameDiv);

    form.appendChild(surname);

    form.appendChild(newLine);

    form.appendChild(amountDiv);

    form.appendChild(amount);

    form.appendChild(newLine);

    form.appendChild(transferNameDiv);

    form.appendChild(transferName);

    form.appendChild(newLine);

    form.appendChild(accountNumberDiv);

    form.appendChild(accountNumber);

    form.appendChild(newLine);

    form.appendChild(submit);


    //document.getElementsByTagName("body")[0].appendChild(form);
    document.getElementById('formholder').appendChild(form);
}