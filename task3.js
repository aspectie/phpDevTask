/*
1.	Написать функцию перехвата нажатия клавиш left arrow, right arrow, up arrow, down arrow
2.	При нажатии на любую из клавиш появляется alert с названием нажатой клавиши
3.	Запрещается использовать любые плагины, которые осуществляют перехват нажатых клавиш
4.	Необходимо продолжать результат действия этих клавиш после закрытия alert
*/


document.onkeydown = function(e) {
    switch (e.keyCode) {
        case 37:
            //left arrow
            alert('left');
            console.log('some action on left arrow')
            break;
        case 38:
            //up arrow
            alert('up');
            console.log('some action on up arrow')
            break;
        case 39:
            //right arrow
            alert('right');
            console.log('some action on right arrow')
            break;
        case 40:
            //down arrow
            alert('down');
            console.log('some action on down arrow')
            break;
    }
};