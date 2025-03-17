    const translations = {
        "en": {
            "welcome": "Welcome to our website!",
            
        },
        "mm": {
            "welcome": "ကျွန်ုပ်တို့၏ ဝဘ်ဆိုက်မှ ကြိုဆိုပါသည်!",
            
        }
    };
    function setLanguage(lang) {
        localStorage.setItem("language", lang);
        
        $("[data-lang]").each(function () {
            let key = $(this).attr("data-lang");
            let translation = translations[lang][key] || key;
            $(this).text(translation);
        });
    }
    $(document).ready(function () {
        let lang = localStorage.getItem("language") || "en";
        setLanguage(lang);

        $("#language-selector").on("change", function () {
            setLanguage(this.value);
        });
        $("#language-selector").val(lang);
        $("#language-selector-mobile").on("change", function () {
            setLanguage(this.value);
        });
        $("#language-selector-mobile").val(lang);
    });
