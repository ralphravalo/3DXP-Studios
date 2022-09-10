var basicUSD = document.getElementById("basicUSD");
var basicETH = document.getElementById("basicETH");
var basicPAVIA = document.getElementById("basicPAVIA");

var proUSD = document.getElementById("proUSD");
var proETH = document.getElementById("proETH");
var proPAVIA = document.getElementById("proPAVIA");

var premiumUSD = document.getElementById("premiumUSD");
var premiumETH = document.getElementById("premiumETH");
var premiumPAVIA = document.getElementById("premiumPAVIA");

var basicUSD3x3 = document.getElementById("basicUSD3x3");
var basicETH3x3 = document.getElementById("basicETH3x3");
var basicPAVIA3x3 = document.getElementById("basicPAVIA3x3");

var proUSD3x3 = document.getElementById("proUSD3x3");
var proETH3x3 = document.getElementById("proETH3x3");
var proPAVIA3x3 = document.getElementById("proPAVIA3x3");

var premiumUSD3x3 = document.getElementById("premiumUSD3x3");
var premiumETH3x3 = document.getElementById("premiumETH3x3");
var premiumPAVIA3x3 = document.getElementById("premiumPAVIA3x3");

var liveprice = {
    "async": true,
    "scroosDomain": true,
    "url": "https://api.coingecko.com/api/v3/simple/price?ids=pavia%2Cethereum%2Ccardano&vs_currencies=usd",
    "method": "GET",
    "headers": {}
}

$.ajax(liveprice).done(function(response){
    const basicusd = response.cardano.usd * 350;
    const basiceth = basicusd / response.ethereum.usd;
    const basicpavia = basicusd / response.pavia.usd;

    const prousd = response.cardano.usd * 500;
    const proeth = prousd / response.ethereum.usd;
    const propavia = prousd / response.pavia.usd;

    const premiumusd = response.cardano.usd * 650;
    const premiumeth = premiumusd / response.ethereum.usd;
    const premiumpavia = premiumusd / response.pavia.usd;

    const basicusd3x3 = response.cardano.usd * 2000;
    const basiceth3x3 = basicusd3x3 / response.ethereum.usd;
    const basicpavia3x3 = basicusd3x3 / response.pavia.usd;

    const prousd3x3 = response.cardano.usd * 2500;
    const proeth3x3 = prousd3x3 / response.ethereum.usd;
    const propavia3x3 = prousd3x3 / response.pavia.usd;

    const premiumusd3x3 = response.cardano.usd * 3000;
    const premiumeth3x3 = premiumusd3x3 / response.ethereum.usd;
    const premiumpavia3x3 = premiumusd3x3 / response.pavia.usd;


    basicUSD.innerHTML = (Math.round(basicusd * 100) / 100).toLocaleString("en-US");
    basicETH.innerHTML = basiceth.toFixed(4);
    basicPAVIA.innerHTML = (Math.round(basicpavia * 100) / 100).toLocaleString("en-US");

    proUSD.innerHTML = (Math.round(prousd * 100) / 100).toLocaleString("en-US");
    proETH.innerHTML = proeth.toFixed(4);
    proPAVIA.innerHTML = (Math.round(propavia * 100) / 100).toLocaleString("en-US");

    premiumUSD.innerHTML = (Math.round(premiumusd * 100) / 100).toLocaleString("en-US");
    premiumETH.innerHTML = premiumeth.toFixed(4);
    premiumPAVIA.innerHTML = (Math.round(premiumpavia * 100) / 100).toLocaleString("en-US");

    basicUSD3x3.innerHTML = (Math.round(basicusd3x3 * 100) / 100).toLocaleString("en-US");
    basicETH3x3.innerHTML = basiceth3x3.toFixed(4);
    basicPAVIA3x3.innerHTML = (Math.round(basicpavia3x3 * 100) / 100).toLocaleString("en-US");

    proUSD3x3.innerHTML = (Math.round(prousd3x3 * 100) / 100).toLocaleString("en-US");
    proETH3x3.innerHTML = proeth3x3.toFixed(4);
    proPAVIA3x3.innerHTML = (Math.round(propavia3x3 * 100) / 100).toLocaleString("en-US");

    premiumUSD3x3.innerHTML = (Math.round(premiumusd3x3 * 100) / 100).toLocaleString("en-US");
    premiumETH3x3.innerHTML = premiumeth3x3.toFixed(4);
    premiumPAVIA3x3.innerHTML = (Math.round(premiumpavia3x3 * 100) / 100).toLocaleString("en-US");

});

// init Isotope
var $grid = $(".pricing-list").isotope({
    filter: ".pricing--1x1",
    percentPosition: true,
    transitionDuration: "0.7s",
    layoutMode: "masonry",
    masonry: {
        columnWidth: ".resizerpricing",
    },
});

// bind filter on select change
$('.pricing-filter').on( 'change', function() {
    // get filter value from option value
    var filterValue = this.value;
    $grid.isotope({
        filter: filterValue,
    });
});



