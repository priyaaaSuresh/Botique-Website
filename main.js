function openWhatsApp(){
    const phoneNumber = "9901258266";
    const Msg = "I would like to book an Appointment.";
    const url = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(Msg)}`;
    window.open(url, '_blank');
}
