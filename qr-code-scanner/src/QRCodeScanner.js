import React, { useState } from 'react';
import QrReader from 'react-qr-scanner';

const QRCodeScanner = () => {
  const [qrCode, setQRCode] = useState('');

  const handleScan = (data) => {
    if (data) {
      setQRCode(data);
    }
  }

  const handleError = (err) => {
    console.error(err);
  }

  return (
    <div>
      <QrReader
        delay={300}
        onError={handleError}
        onScan={handleScan}
        style={{ width: '100%' }}
      />
      <p>{qrCode}</p>
    </div>
  );
}

export default QRCodeScanner;
