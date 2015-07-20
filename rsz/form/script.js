function formRender()
{
    var form = document.createElement("form");
    form.setAttribute("method","POST");
    form.setAttribute("action","#");
    
    var lNumberTo = document.createElement("Label");
    lNumberTo.innerHTML="Na rachunek";
    var inputA = document.createElement("input");
    inputA.setAttribute("type","text");
    
    
    var lNameAddress = document.createElement("Label");
    lNameAddress.innerHTML="Nazwa i adres odbiorcy";
    var txtArea = document.createElement("textarea");
    txtArea.setAttribute("rows","4");
    txtArea.setAttribute("cols","50");
    
    var lTitle = document.createElement("Label");
    lTitle.innerHTML="Tytuł";
    var txtAreaTitle = document.createElement("textarea");
    txtAreaTitle.setAttribute("rows","4");
    txtAreaTitle.setAttribute("cols","50");
    
    var lDate = document.createElement("Label");
    lDate.innerHTML="Data realizacji";
    var inputDate = document.createElement("input");
    inputDate.setAttribute("type","date");
    
    var lAmount = document.createElement("Label");
    lAmount.innerHTML="Kwota";
    var inputAmount = document.createElement("input");
    inputAmount.setAttribute("type","text");
 
    
    var lp = document.createElement("Label");
    lp.innerHTML="Typ przelewu";
    
    var inputCh1 = document.createElement("input");
    inputCh1.setAttribute("type","radio");
    var inputCh2 = document.createElement("input");
    inputCh2.setAttribute("type","radio");
    inputCh2.innerHTML="dsfsddf";
    var inputCh3 = document.createElement("input");
    inputCh3.setAttribute("type","radio");
    inputCh3.innerHTML="dsfsddf";
    
    var inputSend = document.createElement("input");
    inputSend.setAttribute("type","submit");
    
    form.appendChild(lNumberTo);
    form.appendChild(inputA);
    
    form.appendChild(lNameAddress);
    form.appendChild(txtArea);
    
    form.appendChild(lTitle);
    form.appendChild(txtAreaTitle);
    
    form.appendChild(lDate);
    form.appendChild(inputDate);
    
    form.appendChild(lAmount);
    form.appendChild(inputAmount);
    
    form.appendChild(lp);
    form.appendChild(inputCh1);
    form.appendChild(inputCh2);
    form.appendChild(inputCh3);
    
    form.appendChild(inputSend);
    
    return form;
}

function InsertForm(form,containerId)
{
    var container = document.getElementById(containerId);
    container.appendChild(form);
}