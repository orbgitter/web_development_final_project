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