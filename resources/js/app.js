require('./bootstrap');
import Alpine from "alpinejs";
import Clipboard from "@ryangjchandler/alpine-clipboard";

Alpine.plugin(Clipboard);

window.Alpine = Alpine;
window.Alpine.start();

function init() {
    const codeEl = document.querySelector('#code');

    codeEl.innerText = code;

    const copyBtn = document.querySelector('#copyBtn')

    copyBtn.addEventListener('click', async () => {
        await navigator.clipboard.writeText(code);
    });
}

init();
