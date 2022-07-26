var pericias = document.getElementById('pericias');
var texto = '<span> pericias: </span>';
var peculiaridade = [];

var checkboxis = document.querySelectorAll('.checkbox');

for (var checkbox of checkboxis) {
    checkbox.addEventListener('click', function () {
        if (this.checked == true) {
            peculiaridade.push(this.value);
            pericias.innerHTML = texto + peculiaridade;
        } else {
            peculiaridade = peculiaridade.filter(e => e !== this.value);
            pericias.innerHTML = texto + peculiaridade;
        }
    });
}