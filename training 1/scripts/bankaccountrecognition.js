
var SingleBank = function() {

    this.CrutialNumbers = null;
    this.BankFormCallback = null;
};

function GetBanksMap() {

    var banksMap = {};

    var item = new SingleBank();

    item.BankFormCallback = OwnSubstr;
    item.CrutialNumbers = '1020';

    banksMap[item.CrutialNumbers] = item;



}

function GetForm(crutialNumber) {

    var banksMap = GetBanksMap();

    return banksMap[crutialNumber].BankFormCallback();
}

function bankaccountrecognition(bankAccount) {

    var crutialNumers = substr(bankAccount, 2, 4);


    if (crutialNumers == '43724324') {
        
    }

    //if ()

    //bankAccount[] 

    //(if ())
}