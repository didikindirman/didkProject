const express = require('express');
const app = express();
const PORT = 8008;
const path = require('path');
const PATH_DIR = __dirname + '/public/';

app.use(express.static('public'));

app.get('/', (req, res) => {
    res.sendFile(path.join(__dirname, '..', 'public', 'index.html'))
});

app.get('/cars', (req, res) => {
    res.sendFile(path.join(__dirname, '..', 'public', 'sewa.html'))
});

app.listen(PORT, () => console.log(`Server listening on port: ${PORT}`));


