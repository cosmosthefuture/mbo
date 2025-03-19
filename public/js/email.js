    emailjs.init('5ysAFginMh1whS2EZ');
    document.getElementById('contact-form').addEventListener('submit', function (e) {
        e.preventDefault();
        emailjs.sendForm('service_9mdtod2', 'template_ykree9k', this).then(
            function () {
                alert('Email sent successfully!');
                document.getElementById("contact-form").reset();
            },
            function (error) {
                console.error('Failed to send email:', error);
            }
        );
    });