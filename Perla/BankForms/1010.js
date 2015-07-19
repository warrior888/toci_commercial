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

    var surnameDiv = document.createElement("div");
    surnameDiv.innerHTML = 'Podaj swoje nazwisko';

    var surname = document.createElement("input");
    surname.setAttribute("type", "text");
    surname.setAttribute("name", "surname");

    var accountNumberDiv = document.createElement("div");
    accountNumberDiv.innerHTML = 'Podaj numer konta docelowego';

    var accountNumber = document.createElement("input");
    accountNumber.setAttribute("type", "text");
    accountNumber.setAttribute("name", "accountNubmer");

    var amountDiv = document.createElement("div");
    amountDiv.innerHTML = 'Zadeklaruj kwotę';

    var amount = document.createElement("input");
    amount.setAttribute("type", "text");
    amount.setAttribute("name", "amount");

    var submit = document.createElement("input");
    submit.setAttribute("type", "submit");
    submit.setAttribute("value", "Wyślij przelew");

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
    
    form.appendChild(submit);


    document.getElementsByTagName("body")[0].appendChild(form);
}