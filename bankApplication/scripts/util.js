// getAccountNumber() -> accountNumber: string
function getAccountNumber() {
  // .toString() jest zbędny
  // var accountNumber = document.getElementById("account").value.toString();
  var accountNumber = document.getElementById('account').value;
    accountNumber = accountNumber.replace(/\s+/g, ''); // usuniecie spacji
  return accountNumber;

}

// isValidAccountNumber(accountNumber: string) -> isValid: bool
function isValidAccountNumber(accountNumber) {
  // ^ oznacza początek - skoro mamy $ (koniec), to czemu nie dać ^ ?
  // var regularEx = /[0-9]{26}$/;
  // var regularEx = /^[0-9]{26}$/;

  // if (regex.test(accountNumber)) {
  //   // console.log("validation input"+elementId, true);
  //   console.log('validation input', elementId, true);
  //   return true;
  // } else {
  //   // console.log("validation input"+elementId, false);
  //   console.log('validation input', elementId, false);
  //   return false;
  // }

  return /^\d{26}$/.test(accountNumber);
}

// getCrucialNumber(accountNumber: string) -> crucialNumber: string
function getCrucialNumber(accountNumber) {
  // var!
  // crucialNumber = accountNumber.substring(2,6);
  var crucialNumber = accountNumber.substring(2, 6);
  return crucialNumber;
}

// renderForm(form: HTMLFormElement) -> undefined
function renderForm(form) {
    // Może być gdzie indziej, ale jakoś nie mam pomysłu
    var transferFormTargetId = 'transferFormTarget';
    var transferFormTarget = document.getElementById(transferFormTargetId);

    if (!transferFormTarget) {
      transferFormTarget = createElement('div', {}, {
        id: transferFormTargetId
      });

      document.body.appendChild(transferFormTarget);
    } else {
      // Usuwamy poprzedni form
      transferFormTarget.removeChild(transferFormTarget.firstChild);
    }

    transferFormTarget.appendChild(form);
}

// createElement(tagName: string, attributes: { string: any }, fields: { string: any }) -> HTMLElement
// Helper do tworzenia elementów, przykład:
//   createElement('input', {
//     type:  'submit',
//   }, {
//     value: 'Zleć przelew'
//   });
function createElement(tagName, attributes, fields) {
  var element = document.createElement(tagName);

  // Taka atrapa domyślnych argumentów
  fields     = fields     || {};
  attributes = attributes || {};

  for (var attribute in attributes) {
    if (attributes.hasOwnProperty(attribute)) {
      element.setAttribute(attribute, attributes[attribute]);
    }
  }

  for (var field in fields) {
    if (fields.hasOwnProperty(field)) {
      element[field] = fields[field];
    }
  }

  return element;
}