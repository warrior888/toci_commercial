/**
 * Created by Adam on 2015-07-16.
 */


// BAD
function bankAccountRecognition(bankAccount) {
    var crutialNumbers = substr(bankAccount, 2, 8);

    if(crutialNumbers == '456554521') {
        //something
    }
    if(1) {
        //something
    }
}

// OK

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

    //pobieranie mapy
    var banksMap = GetBanksMap();

    //dostajemy konkretny formularz
    return banksMap[crutialNumber].BankFormCallback();
}



