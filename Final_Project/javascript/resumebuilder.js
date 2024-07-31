
// generate cv

function generator() {
    console.log("generating CV");
  
    let nameField = document.getElementById("nameField").value;
  
    let nameT1 = document.getElementById("nameT1");
    nameT1.innerHTML = nameField;
  
    // direct
  
    document.getElementById("nameT2").innerHTML = nameField;
  
    // contact
  
    document.getElementById("contactT").innerHTML =
      document.getElementById("contactField").value;
  
    //address
    document.getElementById("addressT").innerHTML =
      document.getElementById("fbField").value;
  
    document.getElementById("fbT").innerHTML =
      document.getElementById("addressField").value;
  
    document.getElementById("instaT").innerHTML =
      document.getElementById("instaField").value;
  
    document.getElementById("LinkedT").innerHTML =
      document.getElementById("linkedField").value;
  
    // objectives
  
    document.getElementById("objectiveT").innerHTML =
      document.getElementById("objectiveField").value;
  
    //we
    let we = document.getElementById("weField");
  
    let str = we.value;
  
    // for (let e of wes) {
    //   str = str + `<li>$(e.value)</li>`;
    // }
    document.getElementById("weT").innerHTML = str;
  
    // aq
  
    let aqs = document.getElementById("eqField");
    console.log(aqs.value);
    let str1 = aqs.value;
    // for (let e of aqs) {
    //   str += `<li>$(e.value)</li>`;
    // }  Uncomment this after adding add functionality
  
    document.getElementById("aqT").innerHTML = str1;
  
  
    // code for setting image
  
    let file=document.getElementById("imgField");
    file = file.files[0];
    let reader  = new FileReader();
    reader.readAsDataURL(file);
    console.log(reader.result);
    reader.onloadend=function()
    {
      document.getElementById("imgTemplate").src = reader.result;
    }
    document.getElementById("cv-form").style.display = "none";
    document.getElementById("cv-template").style.display = "block";
  }
  
  
  function addNewWEField() {
    // console.log("Adding new field");
  
    let newNode = document.createElement("textarea");
    newNode.classList.add("form - control");
    newNode.classList.add("weField");
    newNode.classList.add("mt-2");
    newNode.setAttribute("rows", 3);
    newNode.setAttribute("placeholder", "Enter here");
  
    let weOb = document.getElementById("we");
    let weAddButtonOb = document.getElementById("weAddButton");
  
    weOb.insertBefore(newNode, weAddButtonOb);
  }
  
  function addNewAQField() {
    let newNode = document.createElement("textarea");
    newNode.classList.add("form - control");
    newNode.classList.add("eqField");
    newNode.classList.add("mt-2");
    newNode.setAttribute("rows", 3);
    newNode.setAttribute("placeholder", "Enter here");
  
    let aqOb = document.getElementById("we");
    let aqAddButtonOb = document.getElementById("weAddButton");
  
    aqOb.insertBefore(newNode, aqAddButtonOb);
  }
  
  // print cv
  function printCV() {
    window.print();
  }
