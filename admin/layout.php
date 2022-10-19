<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../content/css/reset.css">
    <link rel="stylesheet" href="../content/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <nav>
        <?php include __DIR__ . "/menu.php" ?>
    </nav>
    <section class="dashboard">
        <?php include $VIEW_NAME ?>
    </section>
    <script>
        const body = document.querySelector("body"),
            modeToggle = body.querySelector(".mode-toggle");
        sidebar = body.querySelector("nav");
        sidebarToggle = body.querySelector(".sidebar-toggle");

        sidebarToggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
            if (sidebar.classList.contains("close")) {
                localStorage.setItem("status", "close");
            } else {
                localStorage.setItem("status", "open");
            }
        })
    </script>
    <script src="../../content/js/app.js"></script>
    <script>
        const form = document.querySelector('#form');
        form.addEventListener('keyup', function(e) {
            e.preventDefault();
            checkEmptyError(ma_kh, ho_ten, mat_khau, mat_khau2, email);
            checkEmailError(email);
            checkLength(ma_kh, 5, 15);
            checkLength(mat_khau, 8, 20);
            checkLength(ho_ten, 5, 20);
            checkMatchPasswordError(mat_khau, mat_khau2);
            console.log('123');
        });
    </script>
    <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
</body>

</html>