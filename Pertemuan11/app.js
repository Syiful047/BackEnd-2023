// Import express dan routing
const express = require("express");
const router = require("./routes/api.js");

// Membuat object express
const app = express();

// menggunakan middlewer
app.use(express.json());

// Menggunakan routing (router)
app.use(router);

// Mendefinisikan port.
app.listen(3000);