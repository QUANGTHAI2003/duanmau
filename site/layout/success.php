<style>
    /* ======= Toast message ======== */

    #toast {
        position: fixed;
        top: 32px;
        right: 32px;
        z-index: 999999;
    }

    .toast {
        display: flex;
        align-items: center;
        background-color: #fff;
        border-radius: 6px;
        padding: 20px 0;
        min-width: 400px;
        max-width: 450px;
        border-left: 6px solid;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
        transition: all 1s linear forwards;
    }

    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(calc(100% + 32px));
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeOut {
        to {
            opacity: 0;
        }
    }

    .toast--success {
        border-color: #47d864;
    }

    .toast--success .toast__icon {
        color: #47d864;
    }

    .toast--info {
        border-color: #2f86eb;
    }

    .toast--info .toast__icon {
        color: #2f86eb;
    }

    .toast--warning {
        border-color: #ffc021;
    }

    .toast--warning .toast__icon {
        color: #ffc021;
    }

    .toast--error {
        border-color: #ff623d;
    }

    .toast--error .toast__icon {
        color: #ff623d;
    }

    .toast+.toast {
        margin-top: 24px;
    }

    .toast__icon {
        font-size: 24px;
    }

    .toast__icon,
    .toast__close {
        padding: 0 16px;
    }

    .toast__body {
        flex-grow: 1;
    }

    .toast__title {
        font-size: 16px;
        font-weight: 600;
        color: #333;
    }

    .toast__msg {
        font-size: 14px;
        color: #888;
        margin-top: 6px;
        line-height: 1.5;
    }

    .toast__close {
        font-size: 20px;
        color: rgba(0, 0, 0, 0.3);
        cursor: pointer;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

<div id="toast"></div>

<script>
    function showLoginSuccessToast() {
        toast({
            title: "Đăng nhập thành công!",
            message: "Chào mừng <b><?= $_SESSION['username'] ?></b> với website của chúng tôi",
            type: "success",
            duration: 5000
        });
    }

    function showLogOutSuccessToast() {
        toast({
            title: "Đăng xuất thành công!",
            message: "Hẹn gặp lại <b><?= $_SESSION['username'] ?></b> lần sau",
            type: "info",
            duration: 5000
        });
    }

    function showErrorToast() {
        toast({
            title: "Thất bại!",
            message: "Có lỗi xảy ra, vui lòng liên hệ quản trị viên.",
            type: "info",
            duration: 5000
        });
    }


    // Toast function
    function toast({
        title = "",
        message = "",
        type = "info",
        duration = 3000
    }) {
        const main = document.getElementById("toast");
        if (main) {
            const toast = document.createElement("div");

            // Auto remove toast
            const autoRemoveId = setTimeout(function() {
                main.removeChild(toast);
            }, duration + 1000);

            // Remove toast when clicked
            toast.onclick = function(e) {
                if (e.target.closest(".toast__close")) {
                    main.removeChild(toast);
                    clearTimeout(autoRemoveId);
                }
            };

            const icons = {
                success: "fas fa-check-circle",
                info: "fas fa-info-circle",
                warning: "fas fa-exclamation-circle",
                error: "fas fa-exclamation-circle"
            };
            const icon = icons[type];
            const delay = (duration / 1000).toFixed(2);

            toast.classList.add("toast", `toast--${type}`);
            toast.style.animation = `slideInLeft ease 0.4s, fadeOut linear 1s ${delay}s forwards`;

            toast.innerHTML = `
                    <div class="toast__icon">
                        <i class="${icon}"></i>
                    </div>
                    <div class="toast__body">
                        <h3 class="toast__title">${title}</h3>
                        <p class="toast__msg">${message}</p>
                    </div>
                    <div class="toast__close">
                        <i class="fas fa-times"></i>
                    </div>
                `;
            main.appendChild(toast);
        }
    }
</script>