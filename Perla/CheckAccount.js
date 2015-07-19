function GetBankName(crucialNumber)
{
    $.getScript('BankForms/' + crucialNumber + '.js', function () {
        RenderForm();
    }
    );
}

function GetBankNumbers()
{
    number = $('#AccountNumber').val();
    bankDigits = number.substr(2, 4);
    GetBankName(bankDigits);

}
$("#CheckBank").click(GetBankNumbers);