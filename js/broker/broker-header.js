// JS for Broker Page Header Section

document.addEventListener('DOMContentLoaded', function() {
    const input = document.querySelector("#phoneq");

    intlTelInput(input, {
        // i18n: ar,
        initialCountry: "sa",
        utilsScript: WaffyThemeData.templateDirectoryUri + '/lib/intl-tel/utils.js',
    });
});
