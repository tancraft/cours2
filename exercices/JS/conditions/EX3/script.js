var _nb1 = parseInt(prompt("entrer un nombre"));
var _nb2 = parseInt(prompt("entrer un nombre"));


var _op = prompt("entrer un operateur");

if (_op == "+" || _op == "-" || _op == "*" || _op == "/") {
    switch (_op) {

        case ("+"):

            _result = _nb1 + _nb2;
            break;

        case ("-"):

            _result = _nb1 - _nb2;
            break;
        case ("*"):

            _result = _nb1 * _nb2;
            break;

        case ("/"):
            if(_nb1 == 0 || _nb2 == 0 )
            {
                alert("on divise pas par zero");
            }
            else
            {
                _result = _nb1 / _nb2;
            }
            
            break;

    }
}
else {
    alert("vous savez pas ce qu'est un operateur ??");
}

console.log(_result);