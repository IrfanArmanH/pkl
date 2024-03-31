
document.addEventListener('DOMContentLoaded', function () {
    const openEditModalLinks = document.querySelectorAll('.openEditModal');
    const modalBody = document.querySelector('.modal-body');

    openEditModalLinks.forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault(); // Mencegah tautan membuka halaman baru
            const postId = this.getAttribute('data-id');
            fetch(`/posts/${postId}/edit`)
                .then(response => response.text())
                .then(data => {
                    modalBody.innerHTML = data;
                    $('#editModal').modal('show'); // Tampilkan modal
                })
                .catch(error => console.error('Error:', error));
        });
    });
});
