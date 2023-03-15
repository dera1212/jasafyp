var phone = '6281938347315'+'&text=',
    apiWa = 'https://api.whatsapp.com/send?phone=',
    pesan = 'Halo kak.. saya mau order ';

function openWhatsApp() {
	window.open(apiWa + phone + pesan);
}

function entry() {
	window.open(apiWa + phone + pesan + 'PAKET ENTRY');
}
function small() {
	window.open(apiWa + phone + pesan +'PAKET SMALL');
}

function medium() {
	window.open(apiWa + phone + pesan +'PAKET MEDIUM');
}

function large() {
	window.open(apiWa + phone + pesan +'PAKET LARGE');
}
