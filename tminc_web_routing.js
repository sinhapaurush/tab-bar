const __navRootElement_TMINCRouting = (page, title) => {
    document.getElementById("root").innerHTML = page;
    let stateObj = { id: "100" };
            window.history.pushState(stateObj, page, `./${title.replace(" ", "-").toLowerCase()}`);

}