function loadBooks(title = '') {
    $.ajax({
        url: '/api/libros',
        data: { titulo: title },
        success: function (response) {
            $('#books-list').empty();

            response.data.forEach(book => {
                $('#books-list').append(`
                    <li>
                        <strong>${book.titulo}</strong><br>
                        Stock: ${book.stock_disponible}
                    </li>
                `);
            });
        },
        error: function () {
            alert('Error al cargar libros');
        }
    });
}

$(document).ready(function () {
    loadBooks();

    $('#search-title').on('keyup', function () {
        loadBooks($(this).val());
    });
});


$('#loan-form').on('submit', function (e) {
    e.preventDefault();

    let data = {
        fkidUsuarios: $('#fkidUsuarios').val(),
        fkidLibros: $('#fkidLibros').val(),
        fecha_prestamo: $('#fecha_prestamo').val(),
        fecha_devolucion_estimada: $('#fecha_devolucion_estimada').val()
    };

    if (!data.fkidUsuarios || !data.fkidLibros) {
        $('#message').text('Todos los campos son obligatorios').css('color', 'red');
        return;
    }

    $.ajax({
        url: '/api/prestamos',
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: data,
        success: function () {
            $('#message').text('Préstamo creado correctamente').css('color', 'green');
            $('#loan-form')[0].reset();
        },
        error: function (xhr) {
            $('#message').text(xhr.responseJSON.message).css('color', 'red');
        }
    });
});
