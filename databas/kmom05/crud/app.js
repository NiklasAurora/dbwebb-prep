"use strict";

const port    = process.env.DBWEBB_PORT || 1337;
const express = require("express");
const path    = require("path");
const app     = express();

const routesIndex   = require("./routes/index.js");
const routesTeacher = require("./routes/teacher.js");
const routesMovie   = require("./routes/movie.js");
const middleware    = require("./middleware/index.js");

app.set("view engine", "ejs");

app.use(express.static(path.join(__dirname, "public")));
app.use(middleware.logIncomingRequests);

app.use("/", routesIndex);
app.use("/teacher", routesTeacher);
app.use("/movie", routesMovie);

app.listen(port, () => {
    console.info(`Server is listening on port ${port}`);
});
