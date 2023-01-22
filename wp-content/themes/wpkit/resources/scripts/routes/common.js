
// const {__} = wp.i18n;

import ModalRequestPrice from "../modules/ModalRequestPrice";

export default {
    init() {
        new ModalRequestPrice();
    },
    finalize() {
        // JavaScript to be fired on all pages, after page specific JS is fired
    }
}