"use strict";

function logIncomingRequests(req, res, next) {
    console.info(`Got request on ${req.path} (${req.method})`);
    next();
}

module.exports = {
    logIncomingRequests: logIncomingRequests
};

