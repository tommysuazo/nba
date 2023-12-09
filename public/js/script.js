document.addEventListener("DOMContentLoaded", function() {
    
    
    // INDEX BETS ==================================================
    let inputs = document.querySelectorAll('.bets td input');
    
    inputs.forEach(function (input) {
        checkBet(input);
        
        input.addEventListener('input', function (event) {
            checkBet(event.target);
        });

        input.addEventListener('keydown', function (event) {
            if (event.keyCode === 40) {
                let tdClass = event.target.closest('td').classList[0];
                let statsfield = event.target.closest('.stats');
                if (statsfield){
                    let sibling = statsfield.nextElementSibling;
                    if (sibling){
                        // console.log(sibling.querySelector("." + tdClass));
                        sibling.querySelector("." + tdClass).querySelector("input").focus();
                    }
                }
            }

            if (event.keyCode === 38) {
                let tdClass = event.target.closest('td').classList[0];
                let statsfield = event.target.closest('.stats');
                if (statsfield){
                    let sibling = statsfield.previousElementSibling ;
                    if (sibling){
                        // console.log(sibling.querySelector("." + tdClass));
                        sibling.querySelector("." + tdClass).querySelector("input").focus();
                    }
                }
            }
        });

    });




    // GAME STORE ==================================================================================================
    


});


function checkBet(inputText){
    let newValue = parseInt(inputText.value);
    let td = inputText.closest('td');
    if (td) {
        let spans = td.querySelectorAll('span');
        spans.forEach(function (span) {
            let spanValue = parseInt(span.textContent);

            if (spanValue > newValue) {
                span.style.color = '#00bd27';
            } else {
                span.style.color = 'red';
            }
        });
    }
}

function isJSON(cadena) {
    try {
        return JSON.parse(cadena);
    } catch (error) {
        return false;
    }
}