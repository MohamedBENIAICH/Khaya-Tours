import QRCode from 'qrcodejs';

// Create a new QR code object
const qrCode = new QRCode(document.getElementById('qrcode'), {
  text: 'https://example.com',
  width: 200,
  height: 200,
  colorDark: '#000000',
  colorLight: '#ffffff',
});

qrCode.make();