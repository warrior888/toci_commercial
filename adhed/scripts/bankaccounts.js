/**
 * Created by Adam on 2015-07-18.
 */

var bankDictionary = {}; // Bank dictionary with number and bank names

// Load unique number and bank names from JSON file
// NOT WORKING WITH LOCAL FILE and CROSS-DOMAIN
function loadBankDictionaryWithJQuery() {
    jQuery.getJSON("http://leniwiec.vot.pl/TOCI/scripts/banksList.json").done(function (data) {
        $.each(data, function () {
            bankDictionary[this.number] = this.bank;
        });
        console.log("Loading success.");
    });
}

function loadBankDictionary() {
    var banksList = JSON.parse(banks);
    for(var i = 0; i < banksList.length; i++) {
        bankDictionary[banksList[i].number] = banksList[i].bank;
    }
    console.log("Banks loaded with success!");
}



// Return bank name from the unique 4-digit number typed as parameter
function checkBankFromNumber(num) {
    return bankDictionary[num];
}

// Validate the input field
function validate() {
    var accountNumber, length, text;

    accountNumber = document.getElementById("account_number").value;
    accountNumber = accountNumber.replace(/\s+/g, '');
    length = accountNumber.length;
    text = "Account number is invalid";

    if(!isNaN(accountNumber) && length == 26) {
        var uniqueNumber = parseBankNumber(accountNumber);
        var bank = checkBankFromNumber(uniqueNumber);

        text = "You're sending money to " + bank;
    }
    changeInfoText(text);
}

// Parse bank number and return 4-digit unique code
function parseBankNumber(num) {
    var uniqueNumber = num.toString().substr(2, 4);
    return uniqueNumber;
}

function changeInfoText(text) {
    var element = document.getElementById("info_text");
    element.innerHTML = text.toString();
}

//loadBankDictionaryWithJQuery();

loadBankDictionary();




