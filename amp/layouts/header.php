<!DOCTYPE html>
<html ⚡ lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pagetitle; ?> | Truck Junction</title>
    <link rel="canonical" href="#">

    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <script async src="https://cdn.ampproject.org/v0.js"></script>

    <script async custom-element="amp-selector" src="https://cdn.ampproject.org/v0/amp-selector-0.1.js"></script>
    <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
    <script async custom-element="amp-accordion" src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js"></script>
    <script async custom-element="amp-list" src="https://cdn.ampproject.org/v0/amp-list-0.1.js"></script>
    <script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
    <script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
    <script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
    
    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
    <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>

    <script async custom-element="amp-youtube" src="https://cdn.ampproject.org/v0/amp-youtube-0.1.js"></script>

    <style amp-custom=""></style>

    <link rel="stylesheet" href="assets/css/style.css?v=1.3">

</head>
    <body>
        
    <div class="tj-headerTop">
        <div class="container-mid">
            <button class="headerBlock-menu" on="tap:header-sidebar.toggle"><span data-icon="menu"></span></button>
            <a href="/" title="https://trucks.tractorjunction.com/" class="tj-logo"></a>
            <div class="searchBlock">
            <a class="mobileSellBtn" href="#">sell</a>
                <span role="" tabindex="" on="tap:tjampsearch.show">
                    <div class="searchBlock-icon">
                        <svg class="svg-icon" viewBox="-4 1 30 20">
                            <path fill="#fff" d="M18.125,15.804l-4.038-4.037c0.675-1.079,1.012-2.308,1.01-3.534C15.089,4.62,12.199,1.75,8.584,1.75C4.815,1.75,1.982,4.726,2,8.286c0.021,3.577,2.908,6.549,6.578,6.549c1.241,0,2.417-0.347,3.44-0.985l4.032,4.026c0.167,0.166,0.43,0.166,0.596,0l1.479-1.478C18.292,16.234,18.292,15.968,18.125,15.804 M8.578,13.99c-3.198,0-5.716-2.593-5.733-5.71c-0.017-3.084,2.438-5.686,5.74-5.686c3.197,0,5.625,2.493,5.64,5.624C14.242,11.548,11.621,13.99,8.578,13.99 M16.349,16.981l-3.637-3.635c0.131-0.11,0.721-0.695,0.876-0.884l3.642,3.639L16.349,16.981z"></path>
                        </svg>
                    </div>
                </span>
            </div>
            <div>
                <amp-state id="searchState">
                    <script type="application/json">
                        { "searchQuery": "" }
                    </script>
                </amp-state>
                <div id="tjampsearch" hidden="">
                    <span class="backArrow" role="search" tabindex="1" on="tap:tjampsearch.hide, tjampsearchResults.hide">
                        <span data-arrow-left="true"></span>
                    </span>
                    <input
                        type="text" tabindex="2" role="search" placeholder="Search Trucks .." autocomplete="off"
                        autofocus="autofocus" value="" [value]="searchState.searchQuery"
                        on="input-debounced:AMP.setState({searchState : {searchQuery:event.value}}), tjampsearchResults.show"
                    />
                </div>
                <div id="tjampsearchResults" hidden="">
                    
                    <amp-list single-item items="." width="auto" height="200"
                        src="https://trucks.tractorjunction.com/amp/v1/search-result?keywords="
                        [src]="'https://trucks.tractorjunction.com/amp/v1/search-result?keywords='+searchState.searchQuery"
                        class="autosuggest-box" id="search-autosuggest-list" hidden [hidden]="searchState.searchQuery == ''">
                        <template type="amp-mustache">
                            <div class="dataList">
                                {{#data}}
                                <span role="link" tabindex="1" on="tap: AMP.navigateTo(url='{{url}}')">{{brand}} {{model_name}}</span>
                                {{/data}}
                            </div>
                        </template>
                    </amp-list>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="headerMain-bottom">
        <div class="container-mid">
            <a href="https://trucks.tractorjunction.com/en/onroadprice" class="headerMain-bottomLinks" title="On Road Price">On Road Price</a>
            <a href="https://trucks.tractorjunction.com/en/videos" class="headerMain-bottomLinks" title="Videos">Videos</a>
            <a href="https://trucks.tractorjunction.com/en/loan" class="headerMain-bottomLinks" title="Loan">Loan</a>
            <a href="https://trucks.tractorjunction.com/en/news" class="headerMain-bottomLinks" title="News">News</a>
            <a href="https://trucks.tractorjunction.com/en/sell-used-truck" class="headerMain-bottomLinks" title="Sell Truck">Sell Truck</a>
            <a href="https://trucks.tractorjunction.com/en/lcv" class="headerMain-bottomLinks" title="LCV">LCV</a>
            <a href="https://trucks.tractorjunction.com/en/hcv" class="headerMain-bottomLinks" title="HCV">HCV</a>
            <a href="https://trucks.tractorjunction.com/en/scv" class="headerMain-bottomLinks" title="SCV">SCV</a>
            <a href="https://trucks.tractorjunction.com/en/compare" class="headerMain-bottomLinks" title="Small Commercial Vehicles">Compare</a>
        </div>
    </div>

    <amp-sidebar id="header-sidebar" class="ampSidebar" layout="nodisplay">
        <div class="sidebarTop">
            <a href="#"><amp-img width="60" height="60" layout="fixed" src="https://trkcdn.tractorjunction.com/images/icons/profile.svg" alt=""></amp-img></a>
            <a href="#">Login / SignUp</a>
        </div>
        <div class="buySellBtn">
            <a href="#">Buy Old Truck</a>
            <a href="#">Sell Old Truck</a>
        </div>
        <ul class="menuAmp">
            <li class="menuAmp-item"><a href="#" class="menuAmp-link">Brands</a></li>
            <li class="menuAmp-item">
                <amp-accordion layout="container" disable-session-states="" class="ampstart-dropdown ampDropdown">
                    <section>
                        <header class="menuAmp-link">Trucks</header>
                        <ul>
                            <li class="menuAmp-item"><a href="#" class="menuAmp-link">Compare</a></li>
                            <li class="menuAmp-item"><a href="#" class="menuAmp-link">New Trucks</a></li>
                            <li class="menuAmp-item"><a href="#" class="menuAmp-link">Popular Trucks</a></li>
                            <li class="menuAmp-item"><a href="#" class="menuAmp-link">Upcoming Trucks</a></li>
                            <li class="menuAmp-item"><a href="#" class="menuAmp-link">Mini Trucks</a></li>
                            <li class="menuAmp-item"><a href="#" class="menuAmp-link">Latest Trucks <span class="newTag text-white">New</span></a></li>
                        </ul>
                    </section>
                </amp-accordion>
            </li>
            <li class="menuAmp-item">
                <amp-accordion layout="container" disable-session-states="" class="ampstart-dropdown ampDropdown">
                    <section>
                        <header class="menuAmp-link">Used Truck</header>
                        <ul>
                            <li class="menuAmp-item"><a href="#" class="menuAmp-link">Buy Old Truck</a></li>
                            <li class="menuAmp-item"><a href="#" class="menuAmp-link">Sell Old Truck</a></li>
                        </ul>
                    </section>
                </amp-accordion>
            </li>
            <li class="menuAmp-item">
                <amp-accordion layout="container" disable-session-states="" class="ampstart-dropdown ampDropdown">
                    <section>
                        <header class="menuAmp-link">Category</header>
                        <ul>
                            <li class="menuAmp-item"><a href="#" class="menuAmp-link">Trucks</a></li>
                            <li class="menuAmp-item"><a href="#" class="menuAmp-link">Tippers</a></li>
                            <li class="menuAmp-item"><a href="#" class="menuAmp-link">Tractors</a></li>
                            <li class="menuAmp-item"><a href="#" class="menuAmp-link">Mini Trucks</a></li>
                            <li class="menuAmp-item"><a href="#" class="menuAmp-link">Pickups</a></li>
                            <li class="menuAmp-item"><a href="#" class="menuAmp-link">Transit Mixer</a></li>
                        </ul>
                    </section>
                </amp-accordion>
            </li>
            <li class="menuAmp-item">
                <amp-accordion layout="container" disable-session-states="" class="ampstart-dropdown ampDropdown">
                    <section>
                        <header class="menuAmp-link">Wheelers</header>
                        <ul>
                            <li class="menuAmp-item"><a href="#" class="menuAmp-link">3 Wheeler</a></li>
                            <li class="menuAmp-item"><a href="#" class="menuAmp-link">6 Wheeler</a></li>
                            <li class="menuAmp-item"><a href="#" class="menuAmp-link">10 Wheeler</a></li>
                            <li class="menuAmp-item"><a href="#" class="menuAmp-link">12 Wheeler</a></li>
                            <li class="menuAmp-item"><a href="#" class="menuAmp-link">14 Wheeler</a></li>
                            <li class="menuAmp-item"><a href="#" class="menuAmp-link">16 Wheeler</a></li>
                            <li class="menuAmp-item"><a href="#" class="menuAmp-link">18 Wheeler</a></li>
                            <li class="menuAmp-item"><a href="#" class="menuAmp-link">22 Wheeler</a></li>
                        </ul>
                    </section>
                </amp-accordion>
            </li>
            <li class="menuAmp-item">
                <amp-accordion layout="container" disable-session-states="" class="ampstart-dropdown ampDropdown">
                    <section>
                        <header class="menuAmp-link">More</header>
                        <ul>
                            <li class="menuAmp-item"><a href="#" class="menuAmp-link">Loan</a></li>
                            <li class="menuAmp-item"><a href="#" class="menuAmp-link">Find Dealer</a></li>
                            <li class="menuAmp-item"><a href="#" class="menuAmp-link">Find Service Center</a></li>
                            <li class="menuAmp-item"><a href="#" class="menuAmp-link">Spare Parts</a></li>
                            <li class="menuAmp-item"><a href="#" class="menuAmp-link">Body Makers</a></li>
                            <li class="menuAmp-item"><a href="#" class="menuAmp-link">News</a></li>
                            <li class="menuAmp-item"><a href="#" class="menuAmp-link">Blog</a></li>
                        </ul>
                    </section>
                </amp-accordion>
            </li>
        </ul>
        <div class="sidebarSocial text-center">
            <p>Follow us on Social Media</p>
            <a href="#"><amp-img width="25" height="25" layout="fixed" src="https://trkcdn.tractorjunction.com/images/icons/facebook.svg" alt=""></amp-img></a>
            <a href="#"><amp-img width="25" height="25" layout="fixed" src="https://trkcdn.tractorjunction.com/images/icons/twitter.svg" alt=""></amp-img></a>
            <a href="#"><amp-img width="25" height="25" layout="fixed" src="https://trkcdn.tractorjunction.com/images/icons/instagram.svg" alt=""></amp-img></a>
        </div>
    </amp-sidebar>