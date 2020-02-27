"use strict";

const database = require("./database.js");

let teacher = {
    getAll: async () => {
        let db = await database.connect();
        let sql = "SELECT * FROM larare;";
        let res = await db.query(sql);

        console.table(res);
        return res;
    }
};

module.exports = teacher;
