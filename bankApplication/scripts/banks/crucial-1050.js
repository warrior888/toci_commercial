//to samo co w Terry/bank/TerryINGForm

// Bank.addBank = ('1050', function() {
Bank.addBank('1050', function() {
        var form = GenerateElement('form');
        form.id = 'INGBankForm';
        form.action = '#';
        form.method = 'post';

        INGGenerateForm(form);

        return form;
    }
)

/****************** FORM ********************/

//* MAIN FUNCTION */
function INGGenerateForm(container) {
    var mainFrame = AddDiv(container, 'inputDiv', 'left');

    /// Dane przelewu
    var TransDetails =  AddFieldset(mainFrame, 'TransDetails', 'Dane przelewu', 'left');

    var Amount = AddDiv(TransDetails, 'Amount', 'left');
    AddLabeledInput(Amount, 'AmountInput','Kwota', 8, " z³", 'numbers');

    var SrcName = AddDiv(TransDetails, 'SrcName', 'left');
    AddLabeledInput(SrcName,'SrcNameInput', 'Imiê i nazwisko nadawcy', 28, "", 'alpha');

    var Title = AddDiv(TransDetails, 'Title', 'left');
    AddLabeledInput(Title,'TitleInput', 'Tytu³ przelewu', 28,"");

    /// Dane odbiorcy
    var DestDetails =  AddFieldset(mainFrame, 'DestDetails', 'Dane odbiorcy', 'left');

    var DestNr = AddDiv(DestDetails, 'DestNr', 'left');
    AddLabeledInput(DestNr, 'DestNrInput', 'Nr konta odbiorcy', 28, "", 'numbers');

    var DestName = AddDiv(DestDetails, 'Name', 'left');
    AddLabeledInput(DestName,'DestNameInput', 'Imiê i nazwisko odbiorcy', 28, "", 'alpha');

    var Buttons = AddDiv(mainFrame, 'Submit', 'left');
    AddButton(Buttons, 'submitButton', 'submit', 'Przeœlij');
    AddButton(Buttons, 'resetButton', 'reset', 'Wyczyœæ');
}

/******************/

function GenerateElement(elementName) {
    return document.createElement(elementName);
}

function AddNodeToContainer(container, nodeType, nodeId) {
    var node = GenerateElement(nodeType);
    node.id = nodeId;
    container.appendChild(node);
    return node;
}

function AddLabeledInput(container, id, inputText,size,labelText,charType) { //charType == 'numbers' or 'alpha'
    var input = AddNodeToContainer(container, 'input', id);
    var label = AddNodeToContainer(container, 'label', id);

    input.id = id;
    input.name = id;
    label.setAttribute("for", id);
    input.setAttribute("type", "text");
    input.setAttribute("size", size);
    label.innerHTML = labelText;

    input.setAttribute('placeholder', inputText);

    input.addEventListener('keypress', function (ev) {
        if ((ev.charCode < 48 || ev.charCode > 57) && ev.charCode != 0) {
            if (charType == 'numbers') {
                label.innerHTML = labelText.concat("  Dozwolone cyfry 0-9.");
                ev.preventDefault();
            } else  {label.innerHTML = labelText;}
        } else {
            if (charType == 'alpha') {
                label.innerHTML = labelText.concat("  Dozwolone litery A-Z, a-z.");
                ev.preventDefault();
            } else  {label.innerHTML = labelText;}
        }
    });
}

function AddDiv(container, divId, align) {
    var div = AddNodeToContainer(container, 'div', divId);

    div.id = divId;
    div.setAttribute("align", align);

    return div;
}

function AddButton(container, id, type, value) {
    var input = AddNodeToContainer(container, 'input', id)
    input.type = type;
    input.value = value;
    input.name = id;
}

function AddFieldset(container, id, title, titleAlign) {
    var fieldset = AddNodeToContainer(container,'fieldset', id);
    var legend = AddNodeToContainer(fieldset, 'legend', title);

    legend.align = titleAlign;
    legend.innerHTML = title;

    return fieldset;
}