document.addEventListener("DOMContentLoaded", function () {
    const registerForm = document.getElementById('registerForm');

    registerForm.addEventListener('submit', async function (event) {
        event.preventDefault();

        // Ambil nilai dari input field
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const password = document.getElementById('password').value.trim();

        // Elemen tampilan error
        const nameError = document.getElementById('nameError');
        const emailError = document.getElementById('emailError');
        const passwordError = document.getElementById('passwordError');

        // Hapus pesan error sebelumnya
        if (nameError) nameError.textContent = "";
        if (emailError) emailError.textContent = "";
        if (passwordError) passwordError.textContent = "";

        try {
            const response = await axios.post("/api/register", {
                name,
                email,
                password
            }, {
                headers: {
                    "Content-Type": "application/json"
                },
                withCredentials: true
            });

            // Jika berhasil
            Swal.fire({
                icon: 'success',
                title: response.data.message,
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
            });

            setTimeout(() => {
                window.location.href = "/";
            }, 2000);

        } catch (error) {
            // Jika mendapat respon dari server
            if (error.response) {
                const { status, data } = error.response;

                if (status === 422 && typeof data.errors === "object") {
                    for (const key in data.errors) {
                        const messages = data.errors[key];
                        messages.forEach(message => {
                            if (key === "name" && nameError) nameError.textContent = message;
                            if (key === "email" && emailError) emailError.textContent = message;
                            if (key === "password" && passwordError) passwordError.textContent = message;
                        });
                    }
                } else {
                    // Error lain dari server
                    Swal.fire({
                        icon: 'error',
                        title: 'Registrasi Gagal',
                        text: data.message || 'Terjadi kesalahan, silakan coba lagi',
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 2000,
                        timerProgressBar: true,
                    });
                }
            } else {
                // Jika tidak ada respon dari server
                Swal.fire({
                    icon: 'error',
                    title: 'Server tidak merespon',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 2000,
                    timerProgressBar: true,
                });
            }
        }
    });
});
