/* MAIN FUNCTION */
function INGGenerateForm(container) {
    var mainFrame = AddDiv(container, 'inputDiv', 'center');

    /// Dane przelewu
    var TransDetails =  AddFieldset(mainFrame, 'TransDetails', 'Dane przelewu', 'center');

    var Amount = AddDiv(TransDetails, 'Amount', 'center');
    AddLabeledInput(Amount, 'Kwota przelewu', 'text');

    var SrcName = AddDiv(TransDetails, 'Name', 'center');
    AddLabeledInput(SrcName, 'Imie i nazwisko nadawcy', 'text');

    var Title = AddDiv(TransDetails, 'Title', 'center');
    AddLabeledInput(Title, 'Tytul przelewu', 'text');

    /// Dane odbiorcy
    var DestDetails =  AddFieldset(mainFrame, 'DestDetails', 'Dane odbiorcy', 'center');

    var DestNr = AddDiv(DestDetails, 'DestNr', 'center');
    AddLabeledInput(DestNr, 'Nr konta odbiorcy', 'text', 28);

    var DestName = AddDiv(DestDetails, 'Name', 'center');
    AddLabeledInput(DestName, 'Imie i nazwisko odbiorcy', 'text');

    var Buttons = AddDiv(mainFrame, 'Submit', 'center');
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

function AddLabeledInput(container, id, inputType, size){
    var label = AddNodeToContainer(container, 'label', id);
    var input = AddNodeToContainer(container, 'input', id);

    input.id = id;
    input.name = id;
    label.setAttribute("for",id);
    input.setAttribute("type", inputType);
    input.setAttribute("size", size);
    label.innerHTML = id.concat(": ");

    input.style.display = "block";
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