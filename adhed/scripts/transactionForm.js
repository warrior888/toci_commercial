/**
 * Created by Adam on 2015-07-20.
 */

function createTransactionForm() {

    var link = document.getElementById("show_form").remove();

    var form = document.createElement("form");
    form.setAttribute('method', 'POST');
    form.setAttribute('action', '#');

    var label1 = document.createElement("label");
    label1.setAttribute('for', 'number');
    label1.textContent = "Numer konta odbiorcy:";

    var input1 = document.createElement("input");
    input1.setAttribute('type', 'number');
    input1.setAttribute('name', 'accountNumber');
    input1.setAttribute('id', 'account_number')
    input1.setAttribute('placeholder', '26-cyfrowy numer konta bankowego');

    var label2 = document.createElement("label");
    label2.setAttribute('for', 'recipient');
    label2.textContent = "Nazwa odbiorcy:";

    var input2 = document.createElement("input");
    input2.setAttribute('type', 'text');
    input2.setAttribute('name', 'recipient');

    var label3 = document.createElement("label");
    label3.setAttribute('for', 'title');
    label3.textContent = "Tytuł przelewu:";

    var input3 = document.createElement("input");
    input3.setAttribute('type', 'text');
    input3.setAttribute('name', 'title');

    var label4 = document.createElement("label");
    label4.setAttribute('for', 'amount');
    label4.textContent = "Kwota:";

    var input4 = document.createElement("input");
    input4.setAttribute('type', 'number');
    input4.setAttribute('name', 'amount');

    var input5 = document.createElement("input");
    input5.setAttribute('type', 'submit');
    input5.setAttribute('name', 'Wyślij przelew');


    form.appendChild(label1);
    form.appendChild(input1);

    form.appendChild(label2);
    form.appendChild(input2);

    form.appendChild(label3);
    form.appendChild(input3);

    form.appendChild(label4);
    form.appendChild(input4);

    form.appendChild(input5);

    document.getElementById("form_wrapper").appendChild(form);

    console.log("lol");
}

