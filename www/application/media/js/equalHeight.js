/**
 * equalHeight
 * Cpyright 2013, Viktor Melnikov
 * Делает два блока одинаковыми по высоте
 *
 * @param div1 первый блок
 * @param div2 второй блок
 */
function equalHeight (div1, div2) {
    var tallest = div1.height();
    if ( tallest < div2.height() )
    {
        tallest = div2.height();
    }
    div1.css({minHeight:tallest});
    div2.css({minHeight:tallest});
}