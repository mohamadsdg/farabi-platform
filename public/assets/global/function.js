function showNotification_iziToast(type, text, overlay, timeout) {

    if (typeof (overlay) === undefined) {
        overlay = true;
    }
    if (typeof (timeout) === undefined) {
        timeout = 3000;
    }

    var positionElm = 'topCenter';
    switch (type) {
        case 'success':
            iziToast.success({
                message: text,
                rtl: true,
                position: positionElm,
                close: true,
                overlay: overlay,
                timeout: timeout
            });
            break;
        case 'error':
            iziToast.error({
                message: text,
                rtl: true,
                position: positionElm,
                close: true,
                overlay: overlay,
                timeout: 3000
            });
            break;
        case 'info':
            iziToast.info({
                message: text,
                rtl: true,
                position: positionElm,
                close: true,
                overlay: overlay,
                timeout: timeout
            });
            break;
        case 'warning':
            iziToast.warning({
                message: text,
                rtl: true,
                position: positionElm,
                close: true,
                overlay: overlay,
                timeout: timeout
            });
            break;
        default:
            break;
    }
}
