function DjPekaoForm(container) {
    var mainFrame = AddDiv(container, 'inputDiv', 'center');

    AddImg(mainFrame, "PekaoBanner", 'center', 'Pekao_SA.png');

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
    AddButton(Buttons, 'submitButton', 'submit', 'Prześlij');
    AddButton(Buttons, 'resetButton', 'reset', 'Wyczyść');

    return false;
}

function IncorrectInputNotification(nodeId) {
    var input = document.getElementById(nodeId);
    input.classList.add("Incorrect");
    alert('Niepoprawne dane!');
}

function CorrectInputNotification(nodeId) {
    var input = document.getElementById(nodeId);
    input.classList.remove("Incorrect");
}

function getValue(inputNode) {
    return inputNode.value;
}

function getBankNameId(accountNumber) {
    return accountNumber.substr(2, 4);
}