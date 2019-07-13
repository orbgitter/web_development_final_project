const generateDataString = function(arrayOfFields) {
    let dataString = '';
    let i = 0;
    for(let field of arrayOfFields) {
        dataString += `${field.name}=${field.value}`;
        if(i !== arrayOfFields.length - 1) {
            dataString += '&';
        }
        i++;
    }
    return dataString;
};

const findGetParameter =  function(parameterName) {
    var result = null,
        tmp = [];
    location.search
        .substr(1)
        .split("&")
        .forEach(function (item) {
          tmp = item.split("=");
          if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
        });
    return result;
}

const getRandomInt = function(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

const getRandomTime = function() {
    return `${getRandomInt(0, 23)}:${getRandomInt(0, 59)}`;
}

const createHashCode = function(length) {
    var result           = '';
    var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    for ( var i = 0; i < length; i++ ) {
       result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result;
}