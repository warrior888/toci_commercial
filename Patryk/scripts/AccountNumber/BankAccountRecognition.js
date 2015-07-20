var SingleBank = function() {

    this.CrutialNumbers = null;
    this.BankFormCallback = null;
};

function GetBanksMap() {

    var banksMap = {};

    var item = new SingleBank();

    item.BankFormCallback = GenerateNordeaBankForm;
    item.CrutialNumbers = '1020';
    //TODO: populate in for loop

    banksMap[item.CrutialNumbers] = item;
    return banksMap;
}

function GetForm(crutialNumber) {

    var banksMap = GetBanksMap();
    var callback = banksMap[crutialNumber].BankFormCallback();
    if(callback != null)
        return callback;
    return GenerateLabel("", "nieprawidlowy numer kluczowy");
}
