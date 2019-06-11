
const reviews = [
    {
        name: "Oren",
        date: "01/01/2007",
        review: "very nice"
    },
    {
        name: "Moti",
        date: "10/02/2007",
        review: "very cool"
    },
    {
        name: "Ilan",
        date: "01/01/2010",
        review: "very kind"
    },
    {
        name: "Yossi",
        date: "01/11/2012",
        review: "very very good"
    },
    {
        name: "Avner",
        date: "13/01/2014",
        review: "outstanding man"
    },
    {
        name: "Beti",
        date: "01/12/2015",
        review: "very ................................"
    }
]



window.onload= function() {
    var up = document.createElement('class');
    var wrap = document.getElementById('wrapper'); 
    wrap.appendChild(up);
    up.className = "userDetailsUp";
    
    var userName = document.createElement('h4');
    userName.innerHTML = "profesor1967";
    up.appendChild(userName);
    userName.className = "userDetailsUserName";

    var headline = document.createElement('div');
    up.appendChild(headline);
    headline.className = "userDetailsHeadline";

    for(var i = 0; i < 6; i++){
        var list = document.createElement('li');
        up.appendChild(list);
        list.className = "userDetailsList";

        var a = document.createElement('a');
        a.style.marginLeft = "10%";
        if (i == 0)
            a.innerText = "num of deposits: 10";
        if (i == 1)
            a.innerText = "num of withdraw: 10";
        if (i == 2)
            a.innerText = "Arrival speed: fast";
        if (i == 3) {
            a.innerHTML = "application's grade: ";
            var rank = document.createElement('a');
            rank.style.cssFloat = "right";
            list.appendChild(rank);
            rank.className = "userDetailsRank";
        }
        if (i == 4) {
            a.innerHTML = "users grade: ";
            var rank = document.createElement('a');
            rank.style.cssFloat = "right";
            list.appendChild(rank);
            rank.className = "userDetailsRank";
        }
        if (i == 5)
            a.innerText = "users said: ";
        list.appendChild(a);
    }

    var down = document.createElement('class');
    wrap.appendChild(down);
    down.className = "userDetailsDown";

    for(var i = 0; i < 6; i++){
        var list2 = document.createElement('li');
        if(i % 2 == 0)
            list2.style.backgroundColor = "#CF868B";
        down.appendChild(list2);
        list2.className = "userDetailsList2";
 
        var face = document.createElement('a');
        list2.appendChild(face);
        face.className = "userDetailsFace";
            
        var a1 = document.createElement('a');
        a1.innerHTML = reviews[i].date;
        list2.appendChild(a1);
        a1.className = "userDetailsA1";
        
        var a2 = document.createElement('a');
        a2.style.cssFloat = "right";
        list2.appendChild(a2);
        a2.className = "userDetailsA2";
            
        var pa = document.createElement('p');
        pa.innerHTML = reviews[i].review;
        list2.appendChild(pa);
        pa.className = "userDetailsParagraphDiv";
    }
  };