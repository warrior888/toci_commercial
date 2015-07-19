
var SingleBank = function() {
	this.crucialNumbers = null ;
	this.BankFormCallback = null;
}

function GetBanksMap() {

	var banksMap = Array();

	var item = new SingleBank();

	item.BankFormCallback = '';

	banksMap[item.CrucialNumbers] = item;

}


function GetForm(crucialNumbers){

	var banksMap = GetBanksMap();

	banksMap[crucialNumber].BankFormCallback();
}





function bankAccountRecognition (bankAccount) {

	var crucialNumbers = substr(bankAccount, 2,8); //musi być wydzielona jako osobny util
	// bo może się to zmienić
	// 2 i 8 nic nam nie mówią - powinny być zmienna  lub stała

	if (crucialNumbers == '4443333'){

	} //ifologia to  jest absolutny koszmar
}