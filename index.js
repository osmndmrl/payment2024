const express = require('express');
const bodyParser = require('body-parser');
const crypto = require('crypto');
const app = express();

app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

function generateHash(queryString, secret) {
    return crypto.createHmac('sha256', secret).update(queryString).digest('hex');
}

app.post('/generate-hash', (req, res) => {
    const { queryString, secret } = req.body;
    const hash = generateHash(queryString, secret);
    res.json({ hash });
});

const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
    console.log(`Server is running on port ${PORT}`);
});
