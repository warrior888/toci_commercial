

function AddHtmlNode(containerId, childNode){

	var node = document.getElementById(containerId);// zwraca node
	//$(#nazwaid) - odpowiednik w jquery - zwraca obiekt jquery
	
	console.log('childNode', childNode);


	//alert(node);
	node.appendChild(childNode); // ta metoda jest przyzwoita, pozostałe to paskudniejsze wersje :)

	//node.innerHTML = childNode;// robi się toString na node
	//node.innerHTML = '<input/>';s
}

function generateElement(elementName, elementId, elementType, elementValue){

	var element = document.createElement(elementName);
	element.id = elementId;
	element.type = elementType;
	element.value = elementValue;
	//element.onClick = elOnClick;
	return element;
}

function checkBank(accountNumber){
	console.log("numer konta",accountNumber);

	var Banks = new Array();
	
	Banks['1010'] = "Narodowy Bank Polski"
	Banks['1020'] = "PKO BP"
	Banks['1030'] = "Citybank Handlowy"
	Banks['1050'] = "ING"
	Banks['1060'] = "BPH"
	Banks['1090'] = "BZ WBK"
	Banks['1130'] = "BGK"
	Banks['1140'] = "mBank"
	Banks['1160'] = "Bank Millennium"
	Banks['1240'] = "Pekao"
	Banks['1280'] = "HSBC"
	Banks['1300'] = "Meritum Bank"
	Banks['1320'] = "Bank Pocztowy"
	Banks['1440'] = "Nordea Bank"
	Banks['1470'] = "Euro Bank"
	Banks['1540'] = "BOŚ"
	Banks['1580'] = "Mercedes-Benz Bank Polska"
	Banks['1600'] = "BNP Paribas Fortis"
	Banks['1610'] = "SGB - Bank"
	Banks['1670'] = "RBS Bank (Polska)"
	Banks['1680'] = "Plus Bank"
	Banks['1750'] = "Raiffeisen Bank"
	Banks['1840'] = "Societe Generale"
	Banks['1870'] = "FM Bank PBP"
	Banks['1910'] = "Deutsche Bank Polska"
	Banks['1930'] = "Bank Polskiej Spółdzielczości"
	Banks['1940'] = "Credit Agricole Bank Polska"
	Banks['1950'] = "Idea Bank"
	Banks['2000'] = "Rabobank Polska"
	Banks['2030'] = "BGŻ"
	Banks['2070'] = "FCE Bank Polska"
	Banks['2120'] = "Santander Consumer Bank"
	Banks['2130'] = "Volkswagen Bank"
	Banks['2140'] = "Fiat Bank Polska"
	Banks['2160'] = "Toyota Bank"
	Banks['2190'] = "DnB Nord"
	Banks['2480'] = "Getin Noble Bank"
	Banks['2490'] = "Alior Bank"


	BankId = accountNumber.substring(2,6);
	console.log("bankid", BankId);

	alert(Banks[BankId]);
	return Banks[BankId];
}


function validate(regex, elementId){
	var value = document.getElementById(elementId).value.toString();
	console.log("account number", value);
	if (regex.test(value)){
		
		console.log("validation input"+elementId, true);
		alert("jeee");




		return true;
	}
	else{

		console.log("validation input"+elementId, false);
		alert("buuu");
		return false;
	}


}


function sendData(data1, data2){

		
		console.log("data to send1",data1);
		console.log("data to send2",data2);

		var packed = escape(data1);
		packed +=",";
		packed += escape(data2);

		console.log("packed",packed);

		return packed;
		
}


//Form, wher user enters bank account numbers
function transferForm(){
	alert('robimy formularz');
	AddHtmlNode("body", generateElement("form", "form", "", ""));
	AddHtmlNode("form", generateElement("div", "1-row", "", ""));
	AddHtmlNode("form", generateElement("div", "2-row", "", "")); 
	AddHtmlNode("1-row", generateElement("input", "1","text","17106056780000000012345678"));
	AddHtmlNode("2-row", generateElement("input", "2","text","17102056780000000012345678"));
	AddHtmlNode("form", generateElement("input", "3","submit","wcisnij"));
	var regularEx = /[0-9]{26}$/;
	document.getElementById("3").onclick = function() { if (validate(regularEx, "1") && validate(regularEx, "2")) {
				alert('bank');

				var bank1 = checkBank(document.getElementById("1").value.toString());
				console.log("bank 1", bank1);
				var bank2 = checkBank(document.getElementById("2").value.toString());
				console.log("bank 2", bank2);

				var pack = sendData(bank1, bank2);
				//alert(bank1+bank2);
				//teraz trzeba te dane zebrać i wysłać do nowej strony //sendData
				console.log("paczka", pack);
				


			} 
			window.location.href = 'strona3.html?'+pack;
			return false;
		}; 
}


function readData(){
  var query = window.location.search;
   
  if (query.substring(0, 1) == '?') {
     	query = query.substring(1);
  }
  var data = query;
  data = unescape(data);
  
  var data = query.split(',');

  for (i = 0; (i < data.length); i++) {
    data[i] = unescape(data[i]);
  }

  console.log("dane otrzymane", data);
}

//generowanie formularza
// obiekt = {nazwabanku, [parent_id, tagname, id, type, value ]}
function generateForm(obiekt){

}

