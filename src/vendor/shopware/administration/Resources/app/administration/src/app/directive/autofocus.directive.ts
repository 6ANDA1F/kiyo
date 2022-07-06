Shopware.Directive.register('autofocus', {
    inserted: (el: HTMLElement) => {
        const inputs = el.getElementsByTagName('input');

        if (inputs.length === 0) {
            return;
        }

        inputs[0].focus();
    },
});

export {};
