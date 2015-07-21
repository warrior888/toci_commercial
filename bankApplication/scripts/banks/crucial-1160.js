Bank.addBank('1160', function(){

	    var body = getElementById("body");
      
      var form = createElement("form", {action :'#'} );

      var div1 = createElement("div", {id : "div1"});
      var div2 = createElement("div", {id : "div2"});
      var div3 = createElement("div", {id : "div3"});
      var div4 = createElement("div", {id : "div4"});

      var labelTargetName = createElement('label', {innerHTML : "Adres Odbiorcy"});
      var inputTargetName = createElement('input');

      var labelTargetAmount = createElement('label', {innerHTML: "Kwota Przelewu"});
      var inputTargetAmount = createElement('input');

      var labelTargetAccount =createElement('label', {innerHTML : "Konto odbiorcy"});
      var inputTargetAccount =createElement('input');
      
      var submit = document.createElement('input', {type : "submit", value : "wyślij"});

      var textArea = document.createElement('textArea');

      body.appendChild(form);

      form.appendChild(div1);
      form.appendChild(div2);
      form.appendChild(div3);
      form.appendChild(div4);


      div1.appendChild(labelTargetName);
      labelTargetName.appendChild(inputTargetName);

      div2.appendChild(labelTargetAmount);
      labelTargetAmount.appendChild(inputTargetAmount);

      div3.appendChild(labelTargetAccount);
      labelTargetAccount.appendChild(inputTargetAccount);

      div4.appendChild(textArea);

      form.appendChild(submit);
  

  return form;

});

