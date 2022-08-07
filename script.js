let changePrimaryColor = ()=>{
  let primaryColor = document.getElementById('primaryColor').value;
  let primaryColorElements = document.getElementsByClassName('primaryColor');
  for (let i = 0; i < primaryColorElements.length; i++) {
    primaryColorElements[i].style.color = primaryColor;
  }
  let header = document.getElementById('phone');
    header.style.backgroundColor = primaryColor;
}
let changeBackgroundColor = ()=>{
  let bgColor = document.getElementById('bg-color').value;
  let bg = document.getElementById('phone-page');
  bg.style.backgroundColor = bgColor;
}
let changeTxtPrimaryColor = ()=>{
  let txtPrimaryColor = document.getElementById('txtPrimaryColor').value;
  let txtPrimary = document.getElementsByClassName('txtPrimary');
  for (let i = 0; i < txtPrimary.length; i++) {
    txtPrimary[i].style.color = txtPrimaryColor;
    }
}
let changeTxtSecondaryColor = ()=>{
  let txtSecondaryColor = document.getElementById('txtSecondaryColor').value;
  let txtSecondary = document.getElementsByClassName('txtSecondary');
  for (let i = 0; i < txtSecondary.length; i++) {
    txtSecondary[i].style.color = txtSecondaryColor;
    }
}
let CategoryEnabled = true;
let AdBannerEnabled = true;
let NewCollectionEnabled = true;
let featuredProductEnabled = true;
let saleBannerEnabled = true;
let vendorEnabled = true;
let dealOfTheDayEnabled = true;
let topSellingEnabled = true;
let tradingProductsEnabled = true;
let availableOfferEnabled = true;
let recommendation4uEnabled = true;
let youMightLikeEnabled = true;


let Download = ()=>{
  let primaryColor = document.getElementById('primaryColor').value;
    let txtPrimaryColor = document.getElementById('txtPrimaryColor').value;
    let bgColor = document.getElementById('bg-color').value;
    let txtSecondaryColor = document.getElementById('txtSecondaryColor').value;

    let visibleItems = [];
  let nodes = document.getElementById('phone-page').children;
    Array.from(nodes).forEach((e)=>{
      // if(e.style.display === "flex" || e.style.display === "block"){
        visibleItems.push(e.dataset.item);
      // };
    })

    const jsonData = {
		        "dashboard":{"sorting":visibleItems,"appBar":{"title":"Dashboard","appBarIcon":null,"appBarLayout":null},"sliderView":{"enable":AdBannerEnabled},"category":{"enable":CategoryEnabled},"saleBanner":{"enable":saleBannerEnabled},"newProduct":{"enable":NewCollectionEnabled,"title":"New Collections","viewAll":"See All"},"feature":{"enable":featuredProductEnabled,"title":"Featured Product","viewAll":"See All"},"saleProduct":{"enable":tradingProductsEnabled,"title":"Trading Product","viewAll":"See All"},"dealOfTheDay":{"enable":dealOfTheDayEnabled,"title":"Deal Of the day","viewAll":"See All"},"bestSaleProduct":{"enable":topSellingEnabled,"title":"Top Selling","viewAll":"See All"},"offerProduct":{"enable":availableOfferEnabled,"title":"Available Offers","viewAll":"See All"},"suggestionProduct":{"enable":recommendation4uEnabled,"title":"Recommendation For You","viewAll":"See All"},"vendor":{"enable":vendorEnabled,"title":"Vendors","viewAll":"See All"},"youMayLikeProduct":{"enable":youMightLikeEnabled,"title":"You Might Like","viewAll":"See All"}},"appsetup":{"appName":"Mighty Store","primaryColor":primaryColor,"secondaryColor":txtSecondaryColor,"backgroundColor":bgColor,"textPrimaryColor":txtPrimaryColor,"textSecondaryColor":txtSecondaryColor,"consumerKey":"ck_3b7eb3b2a4e8e1c60ccd271ec02275253d613bbb","consumerSecret":"cs_942d7ea436ffa320e0aabaadeddaff40387563ef","appUrl":"https://mydigitalstore.net.in/wp-json/"}
		};
    onDownload(JSON.stringify(jsonData), "builder.json", "text/plain")
}

function onDownload(content, fileName, contentType) {
  const a = document.createElement("a");
  const file = new Blob([content], { type: contentType });
  a.href = URL.createObjectURL(file);
  a.download = fileName;
  a.click();
}



let hideCategory = (e)=>{
  CategoryEnabled = !CategoryEnabled;
let hideCategoryElement = ()=>{
  if(CategoryEnabled){
    document.getElementById("categories").style.display = "flex";
  }else{
    document.getElementById("categories").style.display = "none";
  }
}
hideCategoryElement();
}

let hideAdBanner = (e)=>{
  AdBannerEnabled = !AdBannerEnabled;
let hideAdBannerElement = ()=>{
  if(AdBannerEnabled){
    document.getElementById("AdBanner").style.display = "flex";
  }else{
    document.getElementById("AdBanner").style.display = "none";
  }
}
hideAdBannerElement();
}

let hideNewCollection = (e)=>{
  NewCollectionEnabled = !NewCollectionEnabled;
let hideNewCollectionElement = ()=>{
  if(NewCollectionEnabled){
    document.getElementById("newCollection").style.display = "block";
  }else{
    document.getElementById("newCollection").style.display = "none";
  }
}
hideNewCollectionElement();
}

let hideFeaturedProduct = (e)=>{
  featuredProductEnabled = !featuredProductEnabled;
let hideFeaturedProductElement = ()=>{
  if(featuredProductEnabled){
    document.getElementById("featuredProduct").style.display = "block";
  }else{
    document.getElementById("featuredProduct").style.display = "none";
  }
}
hideFeaturedProductElement();
}

let hideSaleBanner = (e)=>{
  saleBannerEnabled = !saleBannerEnabled;
let hideSaleBannerElement = ()=>{
  if(saleBannerEnabled){
    document.getElementById("saleBanner").style.display = "block";
  }else{
    document.getElementById("saleBanner").style.display = "none";
  }
}
hideSaleBannerElement();
}

let hideVendor = (e)=>{
  vendorEnabled = !vendorEnabled;
let hideVendorElement = ()=>{
  if(vendorEnabled){
    document.getElementById("vendors").style.display = "block";
  }else{
    document.getElementById("vendors").style.display = "none";
  }
}
hideVendorElement();
}

let hideDealOfTheDay = (e)=>{
  dealOfTheDayEnabled = !dealOfTheDayEnabled;
let hideDealOfTheDayElement = ()=>{
  if(dealOfTheDayEnabled){
    document.getElementById("dealOfTheDay").style.display = "block";
  }else{
    document.getElementById("dealOfTheDay").style.display = "none";
  }
}
hideDealOfTheDayElement();
}

let hideTopSelling = (e)=>{
  topSellingEnabled = !topSellingEnabled;
let topSellingElement = ()=>{
  if(topSellingEnabled){
    document.getElementById("topSelling").style.display = "block";
  }else{
    document.getElementById("topSelling").style.display = "none";
  }
}
topSellingElement();
}

let hideTradingProduct = (e)=>{
  tradingProductsEnabled = !tradingProductsEnabled;
let tradingProductElement = ()=>{
  if(tradingProductsEnabled){
    document.getElementById("tradingProducts").style.display = "block";
  }else{
    document.getElementById("tradingProducts").style.display = "none";
  }
}
tradingProductElement();
}

let hideAvailableOffer = (e)=>{
  availableOfferEnabled = !availableOfferEnabled;
let tradingProductElement = ()=>{
  if(availableOfferEnabled){
    document.getElementById("availableOffer").style.display = "block";
  }else{
    document.getElementById("availableOffer").style.display = "none";
  }
}
tradingProductElement();
}

let hideRecommendation4u = (e)=>{
  recommendation4uEnabled = !recommendation4uEnabled;
let recommendation4uElement = ()=>{
  if(recommendation4uEnabled){
    document.getElementById("recommendation4u").style.display = "block";
  }else{
    document.getElementById("recommendation4u").style.display = "none";
  }
}
recommendation4uElement();
}

let hideYouMightLike = (e)=>{
  youMightLikeEnabled = !youMightLikeEnabled;
let youMightLikeElement = ()=>{
  if(youMightLikeEnabled){
    document.getElementById("youMightLike").style.display = "block";
  }else{
    document.getElementById("youMightLike").style.display = "none";
  }
}
youMightLikeElement();
}

// dragging sections
/*===== DRAG and DROP =====*/
const dropItems = document.getElementById('phone-page')

new Sortable(dropItems, {
    animation: 350,
    chosenClass: "sortable-chosen",
    dragClass: "sortable-drag"
});

//slider


//check div
