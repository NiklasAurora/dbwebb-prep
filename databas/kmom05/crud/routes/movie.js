"use strict";

const express = require("express");
const bodyParser = require("body-parser");
const router = express.Router();
const urlEncodedParser = bodyParser.urlencoded({ extended: false });
const movie = require("../src/movie.js");

router.get("/", async (req, res) => {
    let data = {
        title: "Show all movies",
        movies: await movie.getAll()
    };

    res.render("movie/index", data);
});

router.get("/add", (req, res) => {
    let data = {
        title: "Add movie",
    };

    res.render("movie/add", data);
});

router.post("/add", urlEncodedParser, async (req, res) => {
    let title = req.body.title;
    let released = req.body.released;

    await movie.addMovie(title, released);

    res.redirect("/movie");
});

router.get("/update/:id", async (req, res) => {
    let id = req.params.id;
    let data = {
        title: "Update movie",
        movie: await movie.getOne(id)
    };

    console.log(data.movie);

    res.render("movie/update", data);
});

router.post("/update/:id", urlEncodedParser, async (req, res) => {
    let id = req.params.id;
    let title = req.body.title;
    let released = req.body.released;

    await movie.updateMovie(title, released, id);

    res.redirect("/movie");
});

router.get("/delete/:id", async (req, res) => {
    let id = req.params.id;
    let data = {
        title: "Delete movie",
        movie: await movie.getOne(id)
    };

    res.render("movie/delete", data);
});

router.post("/delete/:id", urlEncodedParser, async (req, res) => {
    let id = req.params.id;

    await movie.deleteMovie(id);

    res.redirect("/movie");
});

module.exports = router;
