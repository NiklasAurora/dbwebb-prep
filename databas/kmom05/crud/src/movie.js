"use strict";

const database = require("./database.js");

let movie = {
    getAll: async () => {
        let db = await database.connect();
        let sql = "SELECT id, title, DATE_FORMAT(released, '%Y-%m-%d') AS released_format FROM movie;";
        let res = await db.query(sql);

        console.info(`SQL: ${sql} got ${res.length} rows.`);

        return res;
    },
    getOne: async (id) => {
        let db = await database.connect();
        let sql = "SELECT id, title, DATE_FORMAT(released, '%Y-%m-%d') AS released_format FROM movie WHERE id = ?;";
        let res = await db.query(sql, [id]);

        console.info(`SQL: ${sql} got ${res.length} rows.`);

        return res[0];
    },
    addMovie: async (title, released) => {
        let db = await database.connect();
        let sql = "INSERT INTO movie (title, released) VALUES (?, ?);";

        await db.query(sql, [title, released]);
    },
    updateMovie: async (title, released, id) => {
        let db = await database.connect();
        let sql = "UPDATE movie SET title = ?, released = ? WHERE id = ?;";

        await db.query(sql, [title, released, id]);
    },
    deleteMovie: async (id) => {
        let db = await database.connect();
        let sql = "DELETE FROM movie WHERE id = ?;";

        await db.query(sql, [id]);
    }
};

module.exports = movie;
