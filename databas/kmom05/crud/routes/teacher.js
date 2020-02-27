"use strict";

const express = require("express");
const router = express.Router();
const teacher = require("../src/teacher.js");

router.get("/all", async (req, res) => {
    let data = await teacher.getAll();

    res.render("pages/teacher", {
        title: "Visa alla lärare",
        teachers: data
    });
});

module.exports = router;
