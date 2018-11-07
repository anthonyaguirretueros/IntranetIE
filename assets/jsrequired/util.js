var isArrayEmpty = function (array) {
    if (typeof array === "undefined" || array === null || array.length === null || array.length > 0) {
        return true;
    } else {
        return false;
    }
};