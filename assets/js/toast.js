class Toast {
    constructor(message, type = 'success', duration = 3000) {
        this.message = message;
        this.type = type;
        this.duration = duration;
    }

    show() {
        const toast = document.createElement('div');
        toast.classList.add('toast', this.type);
        toast.textContent = this.message;
        document.body.appendChild(toast);

        setTimeout(() => {
            toast.classList.add('toast-hide');
            setTimeout(() => toast.remove(), 400);
        }, this.duration);
    }
}