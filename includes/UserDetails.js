
window.onload= function() {
    var up = document.createElement('class');
    var wrap = document.getElementById('wrapper2');
    up.style.marginTop = "10%";
    wrap.appendChild(up);
    
    var userName = document.createElement('h4');
    userName.style.fontSize = "1.5em";
    userName.style.marginRight = "auto";
    userName.style.marginLeft = "auto";
    userName.style.textAlign = "center";
    userName.style.marginTop = "5%";
    userName.innerHTML = "profesor1967";
    up.appendChild(userName);

    var headline = document.createElement('div');
    headline.setAttribute('id', 'headline');
    headline.style.width = "100px";
    headline.style.height = "100px";
    headline.style.background = "url(../images/avigabai.jpg)";
    headline.style.backgroundRepeat = "no-repeat";
    headline.style.backgroundPosition  = "top right";
    headline.style.marginTop = "10.5%";
    headline.style.marginRight = "20%";
    headline.style.float = "right";
    up.appendChild(headline);

    for(var i = 0; i < 6; i++){
        var list = document.createElement('li');
        list.style.marginTop= "10%";
        list.style.marginLeft= "2%";
        list.style.listStyleType= "none";
        list.style.fontSize= "21px";
        up.appendChild(list);

        var a = document.createElement('a');
        if (i == 0)
            a.innerText = "num of deposits: 10";
        if (i == 1)
            a.innerText = "num of withdraw: 10";
        if (i == 2)
            a.innerText = "Arrival speed: fast";
        if (i == 3) {
            a.innerHTML = "grade from application: ";
            
            var rank = document.createElement('a');
            rank.setAttribute('id', 'rank');
            rank.style.width = "100px";
            rank.style.height = "100px";
            rank.style.background = "url(../images/3stars.png)";
            rank.style.backgroundRepeat = "no-repeat";
            rank.style.backgroundPosition  = "top right";
            rank.style.marginRight = "50%";
            rank.style.marginTop = "-2.5%";
            rank.style.cssFloat = "right";
            list.appendChild(rank);
        }
        if (i == 4) {
            a.innerHTML = "grade from users: ";
            var rank = document.createElement('a');
            rank.setAttribute('id', 'rank');
            rank.style.width = "100px";
            rank.style.height = "100px";
            rank.style.background = "url(../images/3stars.png)";
            rank.style.backgroundRepeat = "no-repeat";
            rank.style.backgroundPosition  = "top right";
            rank.style.marginRight = "50%";
            rank.style.marginTop = "-2.5%";
            rank.style.cssFloat = "right";
            list.appendChild(rank);
        }
        if (i == 5)
            a.innerText = "users said: ";
        list.appendChild(a);
    }

    var down = document.createElement('class');
    down.style.margin = "0%";
    wrap.appendChild(down);

    for(var i = 0; i < 6; i++){
        var list2 = document.createElement('li');
        list2.style.listStyleType = "none";
        list2.style.fontSize= "21px";
        list2.style.lineHeight= "300%";
        if(i % 2 == 0)
            list2.style.backgroundColor = "gray";
        else
            list2.style.backgroundColor = "#ffe6e6";
        down.appendChild(list2);
 
        var face = document.createElement('a');
        face.setAttribute('id', 'face');
        face.style.width = "90px";
        face.style.height = "75px";
        face.style.background = "url(../images/face.png)";
        face.style.backgroundRepeat = "no-repeat";
        face.style.backgroundPosition  = "top right";
        face.style.marginTop = "1%";
        face.style.float = "left";
        list2.appendChild(face);
            
        var a1 = document.createElement('a');
        a1.innerHTML = "01/01/200" + i;
        list2.appendChild(a1);
        
        var a2 = document.createElement('a');
        a2.setAttribute('id', 'rank');
        a2.style.width = "100px";
        a2.style.height = "100px";
        a2.style.background = "url(../images/3stars.png)";
        a2.style.backgroundRepeat = "no-repeat";
        a2.style.backgroundPosition  = "top right";
        a2.style.marginRight = "50%";
        a2.style.marginTop = "-2.5%";
        a2.style.cssFloat = "right";
        a2.style.marginTop = "0%";
        list2.appendChild(a2);
            
        var pa = document.createElement('p');
        pa.style.fontSize = "15px";
        pa.innerHTML = "blallalalalaa";
        list2.appendChild(pa);
    }
  };