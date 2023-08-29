// Script for navigation bar


function addToProductInCard(productImgID, productNameID, productPriceID) {

    

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


    giveAway(ActualImg,ActualName,ActualPrice);

}


function giveAway(ActualImg,ActualName,ActualPrice){
    console.log("I am in GiveAway");

    const entry = document.getElementById("EntryCart");


    const card = document.createElement('div');
    card.classList = `flex flex-wrap gap-x-4 overflow-hidden rounded-lg border sm:gap-y-4 lg:gap-6`;

    card.innerHTML = `
                        <a href="#" class="group relative block h-48 w-32 overflow-hidden bg-gray-100 sm:h-56 sm:w-40">
                            <img src="${ActualImg}"
                                loading="lazy" alt="Photo by Thái An"
                                class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                        </a>

                        <div class="flex flex-1 flex-col justify-between py-4">
                            <div>
                                <a href="#"
                                    class="mb-1 inline-block text-lg font-bold text-gray-800 transition duration-100 hover:text-gray-500 lg:text-xl">${ActualName}</a>

                                <span class="block text-gray-500">Size: S</span>
                                <span class="block text-gray-500">Color: White</span>
                            </div>

                            <div>
                                <span class="mb-1 block font-bold text-gray-800 md:text-lg">${ActualPrice}</span>

                                <span class="flex items-center gap-1 text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>

                                    In stock
                                </span>
                            </div>
                        </div>

                        <div
                            class="flex w-full justify-between border-t p-4 sm:w-auto sm:border-none sm:pl-0 lg:p-6 lg:pl-0">
                            <div class="flex flex-col items-start gap-2">
                                <div class="flex h-12 w-20 overflow-hidden rounded border">
                                    <input type="number" value="1"
                                        class="w-full px-4 py-2 outline-none ring-inset ring-indigo-300 transition duration-100 focus:ring" />

                                    <div class="flex flex-col divide-y border-l">
                                        <button
                                            class="flex w-6 flex-1 select-none items-center justify-center bg-white leading-none transition duration-100 hover:bg-gray-100 active:bg-gray-200">+</button>
                                        <button
                                            class="flex w-6 flex-1 select-none items-center justify-center bg-white leading-none transition duration-100 hover:bg-gray-100 active:bg-gray-200">-</button>
                                    </div>
                                </div>

                                <button
                                    class="select-none text-sm font-semibold text-indigo-500 transition duration-100 hover:text-indigo-600 active:text-indigo-700">Delete</button>
                            </div>

                            <div class="ml-4 pt-3 md:ml-8 md:pt-2 lg:ml-16">
                                <span class="block font-bold text-gray-800 md:text-lg">$15.00</span>
                            </div>
                        </div>
                    


    
    `;


    entry.appendChild(card);

}



function cardClick1() {
    addToProductInCard('pro01_img', 'pro01_name', 'pro01_price');
    console.log("Card1Clicked");
}







