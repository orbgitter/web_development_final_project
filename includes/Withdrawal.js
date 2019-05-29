
var contributes = [["or", 105, 100, "100 meter"], ["bar", 152, 150, "99 meter"], ["ron", 127, 132, "88 meter"], ["shoval", 192, 154, "67 meter"],
                    ["or", 105, 100, "100 meter"], ["bar", 152, 150, "99 meter"], ["ron", 127, 132, "88 meter"], ["shoval", 192, 154, "67 meter"],
                    ["or", 105, 100, "100 meter"], ["bar", 152, 150, "99 meter"], ["ron", 127, 132, "88 meter"], ["shoval", 192, 154, "67 meter"],
                    ["or", 105, 100, "100 meter"], ["bar", 152, 150, "99 meter"], ["ron", 127, 132, "88 meter"], ["shoval", 192, 154, "67 meter"]]

window.onload= function() {

    var nav = document.createElement('class');
    var wrap = document.getElementById('wrapper1');
    wrap.appendChild(nav);
    nav.style.backgroundColor= "#a00d17";
    nav.style.listStyleType= "none";
    nav.style.textAlign= "center";
    nav.style.width= "100%";
    nav.style.display= "flex";

    for(var i = 0; i < 4; i++){
        var list = document.createElement('li');
        list.style.display= "inline-block";
        list.style.fontSize= "20px";
        list.style.width= "25%";
        nav.appendChild(list);

        var a = document.createElement('a');
        a.style.textDecoration= "none";
        a.style.listStyle= "none";
        a.style.color= "white";
        if (i == 0)
            a.innerText = "Donor";
        if (i == 1)
            a.innerText = "Include interest";
        if (i == 2)
            a.innerText = "Offering sum";
        if (i == 3)
            a.innerText = "Distance";
    
        list.appendChild(a);
    }

    var customers = document.createElement('class');
    wrap.appendChild(customers);
    customers.style.listStyleType= "none";
    customers.style.textAlign= "center";

    for(var i = 0; i < contributes.length; i++){
        var list2 = document.createElement('BUTTON');
        list2.style.display = "inline-block";
        list2.style.fontSize= "20px";
        list2.style.backgroundColor= "#ffe6e6";
        list2.style.display= "flex";
        list2.style.width= "100%";
        if(i % 2 == 0)
            list2.style.backgroundColor = "gray";
        customers.appendChild(list2);
        

        for(var j = 0; j < 4; j++){
            var a1 = document.createElement('a');
            a1.href = "UserDetails2.html";
            a1.style.textDecoration= "none";
            a1.style.listStyle= "none";
            a1.style.width= "50%";
            a1.innerHTML = contributes[i][j];
            list2.appendChild(a1);
        }
    }
  };