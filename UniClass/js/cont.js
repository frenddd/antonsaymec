function required()
        {
        var empt = document.forms["form1"]["firstname"].value;
        if (empt == "")
        {
        alert("Please input a Value");
        return false;
        }
        else 
        {
        alert('Code has accepted : you can try another');
        return true; 
        }}
        if(empt=="")
        document.getElementById("myButton").onclick = function () {
                location.href = "index.html";
        };