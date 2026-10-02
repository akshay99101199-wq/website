document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('#contactForm');
    const status = document.querySelector('#formSuccess');

    if (!form || !status) return;

    form.addEventListener('submit', (event) => {
        event.preventDefault();

        const data = new FormData(form);
        const fullName = `${data.get('firstName')} ${data.get('lastName')}`.trim();
        const subject = encodeURIComponent(`Website inquiry from ${fullName}`);
        const body = encodeURIComponent([
            `Name: ${fullName}`,
            `Phone: ${data.get('phone')}`,
            `Email: ${data.get('email')}`,
            '',
            'Message:',
            data.get('message'),
        ].join('\n'));

        status.textContent = 'Your email app will open with your message prepared. Press Send there to complete your inquiry.';
        status.classList.add('is-visible');
        window.location.href = `mailto:sales@dhronixtech.in?subject=${subject}&body=${body}`;
    });
});