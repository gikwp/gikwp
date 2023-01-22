/**
 * External Dependencies
 */
import "jquery";
import Router from "./utils/Router";
import domReady from "./utils/domReady";

import "bootstrap/dist/js/bootstrap.bundle";

import common from "./routes/common";


const routes = new Router({
    common,
});

domReady(() => {
   routes.loadEvents();
});