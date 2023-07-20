// Get the video element from the DOM
const videoElement = document.getElementById('video');

// Request access to the user's camera
navigator.mediaDevices.getUserMedia({ video: { facingMode: 'environment' } })
  .then(stream => {
    videoElement.srcObject = stream;
    videoElement.play();
    initializeScanner();
  })
  .catch(error => console.error('Error accessing camera:', error));

// Initialize the scanner
function initializeScanner() {
  // Configure the scanner
  const config = {
    inputStream: {
      name: 'Live',
      type: 'LiveStream',
      target: videoElement,
      constraints: {
        facingMode: 'environment', // Use the rear camera
      },
    },
    decoder: {
      readers: ['code_128_reader', 'ean_reader', 'qr_code_reader'], // QR code reader included
    },
  };

  // Initialize the scanner
  quagga.init(config, (err) => {
    if (err) {
      console.error('Error initializing scanner:', err);
      return;
    }

    // Start the scanner
    quagga.start();

    // Listen for successful scans
    quagga.onDetected((result) => {
      const code = result.codeResult.code;
      console.log('Scanned QR Code:', code);

      // Here, you can take appropriate actions based on the scanned QR code
      // For example, navigate to a specific URL, mark attendance, etc.
    });
  });
}
// Get the QR result element from the DOM
const qrResultElement = document.getElementById('qr-result');

// Listen for successful scans
quagga.onDetected((result) => {
  const code = result.codeResult.code;
  console.log('Scanned QR Code:', code);

  // Display the scanned QR code value on the webpage
  qrResultElement.textContent = code;

  // Here, you can take appropriate actions based on the scanned QR code
  // For example, navigate to a specific URL, mark attendance, etc.
});
navigator.mediaDevices.getUserMedia({ video: { facingMode: 'environment' } })
  .then(stream => {
    videoElement.srcObject = stream;
    videoElement.play();
    initializeScanner();
  })
  .catch(error => {
    console.error('Error accessing camera:', error);
    alert('Camera access is required to use the QR code scanner.');
  });

quagga.init(config, (err) => {
  if (err) {
    console.error('Error initializing scanner:', err);
    alert('Failed to initialize QR code scanner.');
    return;
  }

  // ...
});
// Get the canvas and canvas context from the DOM
const canvas = document.getElementById('canvas');
const canvasCtx = canvas.getContext('2d');

// ...

quagga.onDetected((result) => {
  const code = result.codeResult.code;
  console.log('Scanned QR Code:', code);

  // Display the scanned QR code value on the webpage
  qrResultElement.textContent = code;

  // Draw the video frame on the canvas
  canvas.width = videoElement.videoWidth;
  canvas.height = videoElement.videoHeight;
  canvasCtx.drawImage(videoElement, 0, 0, canvas.width, canvas.height);

  // Draw bounding box around the QR code position
  if (result.box) {
    canvasCtx.beginPath();
    canvasCtx.lineWidth = 4;
    canvasCtx.strokeStyle = 'green';
    result.box.forEach(p => canvasCtx.lineTo(p.x, p.y));
    canvasCtx.closePath();
    canvasCtx.stroke();
  }

  // Here, you can take appropriate actions based on the scanned QR code
  // For example, navigate to a specific URL, mark attendance, etc.
});
