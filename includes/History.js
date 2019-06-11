
const revs = [
    {
        name: "Oren",
        date: {
            year: 2004,
            month: 03,
            day: 16
        },
        time: "17:04",
        sum: 550
    },
    {
        name: "Moti",
        date: {
            year: 2004,
            month: 03,
            day: 10
        },
        time: "19:04",
        sum: 800
    },
    {
        name: "Ilan",
        date: {
            year: 2010,
            month: 01,
            day: 01
        },
        time: "22:00",
        sum: 500
    },
    {
        name: "Yossi",
        date: {
            year: 2012,
            month: 11,
            day: 01
        },
        time: "11:10",
        sum: 450
    },
    {
        name: "Avner",
        date: {
            year: 2014,
            month: 01,
            day: 13
        },
        time: "13:45",
        sum: 700
    },
    {
        name: "Beti",
        date: {
            year: 2010,
            month: 10,
            day: 10
        },
        time: "18:59",
        sum: 600
    }
]


window.onload = function() {
    const up = document.createElement('class');
    const wrap = document.getElementById('wrapper');
    wrap.appendChild(up);
    up.className = "historyUpperSide";
    
    const userName = document.createElement('h4');
    userName.innerHTML = "Withdrawal history";
    up.appendChild(userName);
    userName.className = "historyUserName";

    const down = document.createElement('class');
    wrap.appendChild(down);
    down.className = "historyDownSise";
    
    for(var i = 0; i < 6; i++){
        let list2 = document.createElement('li');
        if(i % 2 == 0)
            list2.style.backgroundColor = "#83A1D1";
        else 
            list2.style.backgroundColor = "#EAEAEA";
        down.appendChild(list2);
        list2.id = "list2";
        list2.className = "historyList2";
 
        let face = document.createElement('a');
        list2.appendChild(face);
        face.className = "historyFace";
            
        let a1 = document.createElement('a');
        a1.innerHTML = "Withdrawed from user : ";
        list2.appendChild(a1);
        a1.className = "historyA1";

        let a2 = document.createElement('a');
        a2.innerHTML = revs[i].name;
        list2.appendChild(a2);
        a2.className = "historyA2";

        let list3 = document.createElement('li');
        if(i % 2 == 0)
            list3.style.backgroundColor = "#83A1D1";
        else 
            list3.style.backgroundColor = "#EAEAEA";
        down.appendChild(list3);
        list3.className = "historyList3";
        
        let a3 = document.createElement('a');
        a3.innerHTML = revs[i].date.day + "/" + revs[i].date.month + "/" + revs[i].date.year; 
        list3.appendChild(a3);
        a3.className = "historyA3";

        let a4 = document.createElement('a');
        a4.innerHTML = revs[i].time;
        list3.appendChild(a4);
        a4.className = "historyA4";

        let a5 = document.createElement('a');
        a5.innerHTML = revs[i].sum.toString();
        list3.appendChild(a5);
        a5.className = "historyA5";
    }
};


function sortByDate() {
    var swapp;
    var n = revs.length-1;
    do {
        swapp = false;
        for (var i=0; i < n; i++)
        {
            if ((revs[i].date.year < revs[i+1].date.year) 
                || (revs[i].date.year == revs[i+1].date.year && revs[i].date.month < revs[i+1].date.month) 
                || (revs[i].date.year == revs[i+1].date.year && revs[i].date.month == revs[i+1].date.month && revs[i].date.day < revs[i+1].date.day))
            {
               var temp = revs[i];
               revs[i] = revs[i+1];
               revs[i+1] = temp;
               swapp = true;
            }
        }
        n--;
    } while (swapp);

    let a2 = document.getElementsByClassName('historyA2');
    let a3 = document.getElementsByClassName('historyA3');
    let a4 = document.getElementsByClassName('historyA4');
    let a5 = document.getElementsByClassName('historyA5');
    for(var i = 0; i < revs.length; i++){
        a2[i].innerHTML = revs[i].name;
        a3[i].innerHTML = revs[i].date.day + "/" + revs[i].date.month + "/" + revs[i].date.year;
        a4[i].innerHTML = revs[i].time;
        a5[i].innerHTML = revs[i].sum.toString();
    }
}


 function sortBySum(){
    var swapp;
    var n = revs.length-1;
    do {
        swapp = false;
        for (var i=0; i < n; i++)
        {
            if (revs[i].sum < revs[i+1].sum) 
            {
               var temp = revs[i];
               revs[i] = revs[i+1];
               revs[i+1] = temp;
               swapp = true;
            }
        }
        n--;
    } while (swapp);

    let a2 = document.getElementsByClassName('historyA2');
    let a3 = document.getElementsByClassName('historyA3');
    let a4 = document.getElementsByClassName('historyA4');
    let a5 = document.getElementsByClassName('historyA5');
    for(var i = 0; i < revs.length; i++){
        a2[i].innerHTML = revs[i].name;
        a3[i].innerHTML = revs[i].date.day + "/" + revs[i].date.month + "/" + revs[i].date.year;
        a4[i].innerHTML = revs[i].time;
        a5[i].innerHTML = revs[i].sum.toString();
    }
};