<
script >
    alert("entra");

function valid() {
    if (confirm("Realmente desea eliminar?")) {
        return true;
    }
    return false;
}

function validate() {

    valor = document.getElementById("name").value;
    console.log(valor);
    if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
        alert('[ERROR] El campo debe ser texto');
        return false;
    }

    valor = document.getElementById("ru").value;
    if (isNaN(valor)) {
        alert('[ERROR] El campo debe ser numero');
        return false;
    }
    return true;
} <
/script>