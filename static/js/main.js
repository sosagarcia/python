const btnDelete = document.querySelectorAll('.btn-borrar')
if (btnDelete) {
    const btnArray = Array.from(btnDelete);
    btnArray.forEach((btn) => {
        btn.addEventListener('click', (e) => {
            if (!confirm('¿Estás seguro de querer eliminar el contacto?')) {
                e.preventDefault();
            }
        });
    });
}