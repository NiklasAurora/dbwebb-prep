"use strict";

const express = require("express");
const router = express.Router();

router.get("/", (req, res) => {
    res.send("Hello World");
});

router.get("/about", (req, res) => {
    res.send("Hello World from About");
});

router.post("/about", (req, res) => {
    res.send("Hello World from About (POST)");
});

module.exports = router;
