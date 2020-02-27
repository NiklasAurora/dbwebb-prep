"use strict";

const mysql = require("promise-mysql");

let database = {
    connect: async () => {
        const db = await mysql.createConnection({
            "host": "localhost",
            "user": "root",
            "password": "root",
            "database": "movie"
        });

        return db;
    }
};

module.exports = database;
