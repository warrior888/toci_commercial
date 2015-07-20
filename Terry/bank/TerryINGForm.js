var INGBank = {
    GetForm: function(){
        var form = GenerateElement('form');
        form.id = 'INGBankForm';
        form.action = '#';

        INGGenerateForm(form);

        return form;
    }
}

/*
Bank.addBank = ('1050', function() {
        var form = GenerateElement('form');
        form.id = 'INGBankForm';
        form.action = '#';
        form.method = 'post';

        INGGenerateForm(form);

        return form;
    }
)
}


*/


