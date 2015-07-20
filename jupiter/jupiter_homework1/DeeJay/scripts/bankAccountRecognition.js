var SingleBank = function() {
    this.CrutialNumbers = null;
    this.BankFormCallback = null;
};

function GetBanksMap() {
    var banksMap = {};

    var item = new SingleBank();

    item.BankFormCallback = DjPekaoForm;
    item.CrutialNumbers = '1240';

    banksMap[item.CrutialNumbers] = item;

    return banksMap;
}

function GetForm(crutialNumbers) {
    var banksMap = GetBanksMap();

    return banksMap[crutialNumbers].BankFormCallback;
}

function ValidateAccountNumber(bankAccountNumber) {
    var digitsPattern = new RegExp(/^\d{26}$/g);
    return bankAccountNumber != null && digitsPattern.test(bankAccountNumber);
}

function GetCrutialNumbers(bankAccountNumber) {
    var formattedAccountNumber = bankAccountNumber.replace(/\s/g, "");
    return getBankNameId(formattedAccountNumber);
}

function bankAccountRecognition(bankAccountNumber) {
    var crutialNumbers;
    crutialNumbers = GetCrutialNumbers(bankAccountNumber);

    return GetForm(crutialNumbers);
}

document.addEventListener('DOMContentLoaded', function () {
    var accountForm = document.getElementById('AccountForm');
    var accountInput = document.getElementById('AccountNumber');
    var transferForm = document.getElementById('TransferForm');
    var submitAccountNumber = document.getElementById('SubmitAccountNumber');

    submitAccountNumber.addEventListener('mouseover', function () {
        if(!ValidateAccountNumber(getValue(accountInput))) {
            IncorrectInputNotification('AccountNumber');
        }
        else {
            CorrectInputNotification('AccountNumber');
        }
    });

    submitAccountNumber.addEventListener('click', function () {
        return bankAccountRecognition(getValue(accountInput))(transferForm);
    });
});