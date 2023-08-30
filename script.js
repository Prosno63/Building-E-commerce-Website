// Script for navigation bar


//function addToProductInCard(productImgID, productNameID, productPriceID) {


/*
    const productImg = document.getElementById(productImgID);
    const ActualImg = productImg.getAttribute('src');

    const productName = document.getElementById(productNameID);
    const ActualName = productName.innerText;


    const productPrice = document.getElementById(productPriceID);
    const ActualPrice = productPrice.innerText;

    //const x = giveAway();
    //console.log(x);
    //const entry = document.getElementById('x');
    //console.log(entry);


    giveAway(ActualImg, ActualName, ActualPrice);

}
*/

function addToProductNameEntry(productNameID) {

    const productName = document.getElementById(productNameID);
    const ActualName = productName.innerText;


    const entry = document.getElementById('EntryCart');


    const p = document.createElement('p');

    const count = entry.childElementCount;
    p.innerHTML = `${count + 1}. ${ActualName}`;

    entry.appendChild(p);

}

/*function giveAway(ActualImg, ActualName, ActualPrice) {
    console.log("I am in GiveAway");

    const container = document.getElementById('EntryCart');


    const p = document.createElement('div');
    p.classList = `flex flex-wrap gap-x-4 overflow-hidden rounded-lg border sm:gap-y-4 lg:gap-6`;

    p.innerHTML = `

    <p>${ActualName}</P>;


    `;


    container.appendChild(p);

}*/


function cardClick1() {
    addToProductNameEntry('pro01_name');
    console.log("Card1Clicked");
}


//function cardClick1() {
  //  addToProductInCard('pro01_img', 'pro01_name', 'pro01_price');
    //console.log("Card1Clicked");
//}







