function Validate(){
    document.getElementById("disp").style.display = "block";
    var x=document.getElementById("card").value;
    var y =document.getElementById("number");
    if(x == "American Express")
        y.pattern = "^[34,37]{2}\\d{13}$";
    else if(x == "Diners Club")
        y.pattern = "(^[300-305]{3}\\d{11}$)|(^[36,38]{2}\\d{12}$)";
    else if(x == "Discover")
        y.pattern = "(^[6011]{4}\\d{12}$)|(^[65]{2}\\d{14}$)";
    else if(x == "JCB")
        y.pattern = "(^[2131,1800]{4}\\d{11}$)|(^[35]{2}\\d{14}$)";
    else if(x == "MasterCard")
        y.pattern = "^[51-55]{2}\\d{14}$";
    else if(x == "Visa")
        y.pattern = "(^[4]{1}\\d{12}$)|(^[4]{1}\\d{15}$)";
    if(document.getElementById("number").validity.patternMismatch)
        document.getElementById("disp").innerHTML = "Invalid Credit Card Number";
    else
        document.getElementById("disp").innerHTML = "Valid Credit Card Number"; 
}