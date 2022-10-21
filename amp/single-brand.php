<?php
    $pagetitle = 'Single Brand';
    include('layouts/header.php');
?>

<section class="pageInfo-breadcrumbs">
    <div class="container-mid">
        <ul class="mb-0">
            <li><a href="#">Home</a></li>
            <li><a href="#">Brands</a></li>
            <li><span>Tata Trucks</span></li>
        </ul>
    </div>
</section>

<section class="sectionpadding25 b-t-1">
    <div class="container-mid">
        <div class="sectionHeading">
            <h1>Tata Trucks</h1>
        </div>
        <div class="content-ckeditor ckeditorBlock">
            <div class="content-ckeditor-show">
                <p style="text-align:justify">Tata Motors started manufacturing commercial vehicles in 1954. It has a
                    wide presence in the trucks,&nbsp; <a href="https://trucks.tractorjunction.com/en/tippers"
                        target="_blank">tippers</a>, tractors, pickup trucks, 3-wheelers, <a
                        href="https://trucks.tractorjunction.com/en/transit-mixer" target="_blank">transit mixers</a>,
                    buses, and defence vehicle segments. Tata trucks price range in India starts from Rs. 4.36 lakhs*
                    and going up to Rs. 50.08 lakhs*. The most popular Tata truck model is Tata Ultra 1918.T truck and
                    its price range is Rs. 18 lakhs* to Rs. 24.23 lakhs*. The most economic truck is the Tata &nbsp;<a
                        href="https://trucks.tractorjunction.com/en/tata-truck/ace-gold" target="_blank"><span
                            style="color:#3498db">Ace Gold</span></a> truck and its price is Rs. 4.36 lakhs* and the
                    most expensive truck is Tata Signa 4225 with Rs. 50.08 lakhs* price.</p>
            </div>
            <div class="content-ckeditor-hide" [class]="topvisible ? 'content-ckeditor-show' : 'content-ckeditor-hide'">
                <p> The company has equipped all
                    its commercial vehicles with the latest BS-VI technology. Currently, the Tata trucks offer a wide
                    range of tata truck models in India. Tata motors product portfolio includes Tata 1412 LPT, Tata 407
                    Gold SFC, Tata Signa 4825.T, Tata LPT 4825, Tata Signa 4825.TK and many more.</p>
                <p>Log on to Truck Junction and get more information on popular Tata models.</p>
            </div>
            <p class="text-right"><a role="button" [text]="topvisible ? 'Read Less' : 'Read More'"
                    on="tap:AMP.setState({topvisible: !topvisible})" class="ckeditor-btn">Read More</a></p>
        </div>
        <div class="accordion-block mt-3">
            <amp-accordion id="myAccordion">
                <section class="accordion-inner sectionShadow white-bg" id="section2"
                    on="collapse:myAccordion.collapse(section='section1')">
                    <h2 class="white-bg accordion-header">Tata Trucks Price List in India</h2>
                    <div class="accordion-content b-t-1">
                        <table class="table tableBlock table-bordered mb-0">
                            <tbody>
                                <tr>
                                    <td><strong>Tata Trucks in India</strong></td>
                                    <td><strong>Trucks GVW</strong></td>
                                    <td><strong>Trucks Price</strong></td>
                                </tr>
                                <tr>
                                    <td>Tata 1412 LPT </td>
                                    <td>13850 KG</td>
                                    <td>Rs. 20.88 Lakh - 22.31 Lakh</td>
                                </tr>
                                <tr>
                                    <td>Tata 407 Gold SFC </td>
                                    <td>4450 KG</td>
                                    <td>Rs. 9.46 Lakh - 10.07 Lakh</td>
                                </tr>
                                <tr>
                                    <td>Tata ULTRA T.7 Electric </td>
                                    <td>7490 KG</td>
                                    <td>Rs. 15.29 Lakh - 16.09 Lakh</td>
                                </tr>
                                <tr>
                                    <td>Tata T.10 Ultra </td>
                                    <td>9600 KG</td>
                                    <td>Rs. 10.7 Lakh - 10.78 Lakh</td>
                                </tr>
                                <tr>
                                    <td>Tata LPT 4225 Cowl </td>
                                    <td>42000 KG</td>
                                    <td>Rs. 38.57 Lakh - 44.03 Lakh</td>
                                </tr>
                                <tr>
                                    <td>Tata 709g LPT </td>
                                    <td>7300 KG</td>
                                    <td>Rs. 14.57 Lakh - 15.18 Lakh</td>
                                </tr>
                                <tr>
                                    <td>Tata Ultra 1918.T </td>
                                    <td>18500 KG</td>
                                    <td>Rs. 18 Lakh - 24.23 Lakh</td>
                                </tr>
                                <tr>
                                    <td>Tata 1512 LPT </td>
                                    <td>16020 KG</td>
                                    <td>Rs. 22.45 Lakh - 23.56 Lakh</td>
                                </tr>
                                <tr>
                                    <td>Tata LPT 3518 Cowl </td>
                                    <td>35000 KG</td>
                                    <td>Rs. 35.26 Lakh - 35.72 Lakh</td>
                                </tr>
                                <tr>
                                    <td>Tata Signa 4825.TK </td>
                                    <td>47500 KG</td>
                                    <td>Rs. 45.32 Lakh - 57.11 Lakh</td>
                                </tr>
                                <tr>
                                    <td>Tata T.7 Ultra </td>
                                    <td>7300 KG</td>
                                    <td>Rs. 14.77 Lakh - 16.35 Lakh</td>
                                </tr>
                                <tr>
                                    <td>Tata LPT 1918 Cowl </td>
                                    <td>18500 KG</td>
                                    <td>Rs. 22.92 Lakh - 23.23 Lakh</td>
                                </tr>
                                <tr>
                                    <td>Tata LPT 4825 </td>
                                    <td>47500 KG</td>
                                    <td>Rs. 42.53 Lakh - 43.53 Lakh</td>
                                </tr>
                                <tr>
                                    <td>Tata Signa 4825.T </td>
                                    <td>47500 KG</td>
                                    <td>Rs. 43.36 Lakh - 49.42 Lakh</td>
                                </tr>
                                <tr>
                                    <td>Tata 1212 LPT </td>
                                    <td>11990 KG</td>
                                    <td>Rs. 19.32 Lakh - 20.8 Lakh</td>
                                </tr>
                                <tr>
                                    <td colspan="3">Data Last Updated On : Oct 14, 2021</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </amp-accordion>
        </div>
    </div>
</section>

<section class="sectionpadding25 whitebg b-t-1">
    <div class="container-mid">
        <div class="sectionHeading">
            <h3>Popular Tata Trucks</h3>
        </div>
        <div class="newTruckMainBlock tj-row">

            <div class="newTruckMainInner tj-col m-b-16">
                <div class="newTruckBlock-inner sectionShadow">
                    <a href="#" title="Volvo FM 370">
                        <div class="newTruckBlock-img">
                            <amp-img width="320" height="187" layout="responsive" src="assets/images/truck1.jpg"
                                class="img-fluid" alt="Amw 3118 TP"></amp-img>
                        </div>
                    </a>
                    <div class="newTruckBlock-content text-center">
                        <a href="#" title="Volvo FM 370">
                            <p class="newTruckBlock-title boldfont">Volvo FM 370</p>
                        </a>
                        <p class="newTruckBlock-price">Price Not Available</p>
                        <a href="#" class="borderBtn newTruckBlock-btn" title="View Details">View Details</a>
                    </div>
                    <amp-accordion id="variant1">
                        <section class="variant-inner white-bg" on="collapse:variant1.collapse(section='section1')">
                            <header class="variant-header">15 Variants Found</header>
                            <div class="variant-content b-t-1">
                                <div class="variant-content-inner">
                                    <table class="table tableBlock table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <td><a href="#">3600/Containers</a></td>
                                                <td>123 HP</td>
                                                <td>13850 KG</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">3600/Containers</a></td>
                                                <td>123 HP</td>
                                                <td>13850 KG</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">3600/Containers</a></td>
                                                <td>123 HP</td>
                                                <td>13850 KG</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">3600/Containers</a></td>
                                                <td>123 HP</td>
                                                <td>13850 KG</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">3600/Containers</a></td>
                                                <td>123 HP</td>
                                                <td>13850 KG</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">3600/Containers</a></td>
                                                <td>123 HP</td>
                                                <td>13850 KG</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">3600/Containers</a></td>
                                                <td>123 HP</td>
                                                <td>13850 KG</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">3600/Containers</a></td>
                                                <td>123 HP</td>
                                                <td>13850 KG</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">3600/Containers</a></td>
                                                <td>123 HP</td>
                                                <td>13850 KG</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </section>
                    </amp-accordion>
                </div>
            </div>

            <div class="newTruckMainInner tj-col m-b-16">
                <div class="newTruckBlock-inner sectionShadow">
                    <a href="#" title="Volvo FM 370">
                        <div class="newTruckBlock-img">
                            <amp-img width="320" height="187" layout="responsive" src="assets/images/truck2.jpg"
                                class="img-fluid" alt="Amw 3118 TP"></amp-img>
                        </div>
                    </a>
                    <div class="newTruckBlock-content text-center">
                        <a href="#" title="Volvo FM 370">
                            <p class="newTruckBlock-title boldfont">Volvo FM 370</p>
                        </a>
                        <p class="newTruckBlock-price">Price Not Available</p>
                        <a href="#" class="borderBtn newTruckBlock-btn" title="View Details">View Details</a>
                    </div>
                    <amp-accordion id="variant2">
                        <section class="variant-inner white-bg" on="collapse:variant2.collapse(section='section1')">
                            <header class="variant-header">15 Variants Found</header>
                            <div class="variant-content b-t-1">
                                <table class="table tableBlock table-bordered mb-0">
                                    <tbody>
                                        <tr>
                                            <td><a href="#">3600/Containers</a></td>
                                            <td>123 HP</td>
                                            <td>13850 KG</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">3600/Containers</a></td>
                                            <td>123 HP</td>
                                            <td>13850 KG</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">3600/Containers</a></td>
                                            <td>123 HP</td>
                                            <td>13850 KG</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </amp-accordion>
                </div>
            </div>

            <div class="newTruckMainInner tj-col m-b-16">
                <div class="newTruckBlock-inner sectionShadow">
                    <a href="#" title="Volvo FM 370">
                        <div class="newTruckBlock-img">
                            <amp-img width="320" height="187" layout="responsive" src="assets/images/truck3.jpg"
                                class="img-fluid" alt="Amw 3118 TP"></amp-img>
                        </div>
                    </a>
                    <div class="newTruckBlock-content text-center">
                        <a href="#" title="Volvo FM 370">
                            <p class="newTruckBlock-title boldfont">Volvo FM 370</p>
                        </a>
                        <p class="newTruckBlock-price">Price Not Available</p>
                        <a href="#" class="borderBtn newTruckBlock-btn" title="View Details">View Details</a>
                    </div>
                    <amp-accordion id="variant3">
                        <section class="variant-inner white-bg" on="collapse:variant3.collapse(section='section1')">
                            <header class="variant-header">15 Variants Found</header>
                            <div class="variant-content b-t-1">
                                <table class="table tableBlock table-bordered mb-0">
                                    <tbody>
                                        <tr>
                                            <td><a href="#">3600/Containers</a></td>
                                            <td>123 HP</td>
                                            <td>13850 KG</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">3600/Containers</a></td>
                                            <td>123 HP</td>
                                            <td>13850 KG</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">3600/Containers</a></td>
                                            <td>123 HP</td>
                                            <td>13850 KG</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </amp-accordion>
                </div>
            </div>

            <div class="newTruckMainInner tj-col m-b-16">
                <div class="newTruckBlock-inner sectionShadow">
                    <a href="#" title="Volvo FM 370">
                        <div class="newTruckBlock-img">
                            <amp-img width="320" height="187" layout="responsive" src="assets/images/truck4.jpg"
                                class="img-fluid" alt="Amw 3118 TP"></amp-img>
                        </div>
                    </a>
                    <div class="newTruckBlock-content text-center">
                        <a href="#" title="Volvo FM 370">
                            <p class="newTruckBlock-title boldfont">Volvo FM 370</p>
                        </a>
                        <p class="newTruckBlock-price">Price Not Available</p>
                        <a href="#" class="borderBtn newTruckBlock-btn" title="View Details">View Details</a>
                    </div>
                    <amp-accordion id="variant4">
                        <section class="variant-inner white-bg" on="collapse:variant4.collapse(section='section1')">
                            <header class="variant-header">15 Variants Found</header>
                            <div class="variant-content b-t-1">
                                <table class="table tableBlock table-bordered mb-0">
                                    <tbody>
                                        <tr>
                                            <td><a href="#">3600/Containers</a></td>
                                            <td>123 HP</td>
                                            <td>13850 KG</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">3600/Containers</a></td>
                                            <td>123 HP</td>
                                            <td>13850 KG</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">3600/Containers</a></td>
                                            <td>123 HP</td>
                                            <td>13850 KG</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </amp-accordion>
                </div>
            </div>

            <div class="tj-col filterBlockTop">
                <div class="filterBlockTopInner greybg sectionpadding25 sectionShadow m-b-16">
                    <div class="container-mid">
                        <div class="sectionHeading">
                            <h2>Tata Trucks By Category</h2>
                        </div>
                        <div class="filterBlock tj-row">

                            <div class="filterBlockMain tj-col">
                                <a class="filterBlock-chips sectionShadow boldfont text-center"
                                    href="https://trucks.tractorjunction.com/en/mini-truck/tata-trucks"
                                    title="Tata Mini Trucks">Tata
                                    Mini Trucks</a>
                            </div>

                            <div class="filterBlockMain tj-col">
                                <a class="filterBlock-chips sectionShadow boldfont text-center"
                                    href="https://trucks.tractorjunction.com/en/mini-truck/tata-trucks"
                                    title="Tata Mini Trucks">Tata
                                    Mini Trucks</a>
                            </div>

                            <div class="filterBlockMain tj-col">
                                <a class="filterBlock-chips sectionShadow boldfont text-center"
                                    href="https://trucks.tractorjunction.com/en/mini-truck/tata-trucks"
                                    title="Tata Mini Trucks">Tata
                                    Mini Trucks</a>
                            </div>

                            <div class="filterBlockMain tj-col">
                                <a class="filterBlock-chips sectionShadow boldfont text-center"
                                    href="https://trucks.tractorjunction.com/en/mini-truck/tata-trucks"
                                    title="Tata Mini Trucks">Tata
                                    Mini Trucks</a>
                            </div>

                            <div class="filterBlockMain tj-col">
                                <a class="filterBlock-chips sectionShadow boldfont text-center"
                                    href="https://trucks.tractorjunction.com/en/mini-truck/tata-trucks"
                                    title="Tata Mini Trucks">Tata
                                    Mini Trucks</a>
                            </div>

                            <div class="filterBlockMain tj-col">
                                <a class="filterBlock-chips sectionShadow boldfont text-center"
                                    href="https://trucks.tractorjunction.com/en/mini-truck/tata-trucks"
                                    title="Tata Mini Trucks">Tata
                                    Mini Trucks</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="newTruckMainInner tj-col m-b-16">
                <div class="newTruckBlock-inner sectionShadow">
                    <a href="#" title="Volvo FM 370">
                        <div class="newTruckBlock-img">
                            <amp-img width="320" height="187" layout="responsive" src="assets/images/truck1.jpg"
                                class="img-fluid" alt="Amw 3118 TP"></amp-img>
                        </div>
                    </a>
                    <div class="newTruckBlock-content text-center">
                        <a href="#" title="Volvo FM 370">
                            <p class="newTruckBlock-title boldfont">Volvo FM 370</p>
                        </a>
                        <p class="newTruckBlock-price">Price Not Available</p>
                        <a href="#" class="borderBtn newTruckBlock-btn" title="View Details">View Details</a>
                    </div>
                </div>
            </div>

            <div class="newTruckMainInner tj-col m-b-16">
                <div class="newTruckBlock-inner sectionShadow">
                    <a href="#" title="Volvo FM 370">
                        <div class="newTruckBlock-img">
                            <amp-img width="320" height="187" layout="responsive" src="assets/images/truck2.jpg"
                                class="img-fluid" alt="Amw 3118 TP"></amp-img>
                        </div>
                    </a>
                    <div class="newTruckBlock-content text-center">
                        <a href="#" title="Volvo FM 370">
                            <p class="newTruckBlock-title boldfont">Volvo FM 370</p>
                        </a>
                        <p class="newTruckBlock-price">Price Not Available</p>
                        <a href="#" class="borderBtn newTruckBlock-btn" title="View Details">View Details</a>
                    </div>
                </div>
            </div>

            <div class="newTruckMainInner tj-col m-b-16">
                <div class="newTruckBlock-inner sectionShadow">
                    <a href="#" title="Volvo FM 370">
                        <div class="newTruckBlock-img">
                            <amp-img width="320" height="187" layout="responsive" src="assets/images/truck3.jpg"
                                class="img-fluid" alt="Amw 3118 TP"></amp-img>
                        </div>
                    </a>
                    <div class="newTruckBlock-content text-center">
                        <a href="#" title="Volvo FM 370">
                            <p class="newTruckBlock-title boldfont">Volvo FM 370</p>
                        </a>
                        <p class="newTruckBlock-price">Price Not Available</p>
                        <a href="#" class="borderBtn newTruckBlock-btn" title="View Details">View Details</a>
                    </div>
                </div>
            </div>

            <div class="newTruckMainInner tj-col m-b-16">
                <div class="newTruckBlock-inner sectionShadow">
                    <a href="#" title="Volvo FM 370">
                        <div class="newTruckBlock-img">
                            <amp-img width="320" height="187" layout="responsive" src="assets/images/truck4.jpg"
                                class="img-fluid" alt="Amw 3118 TP"></amp-img>
                        </div>
                    </a>
                    <div class="newTruckBlock-content text-center">
                        <a href="#" title="Volvo FM 370">
                            <p class="newTruckBlock-title boldfont">Volvo FM 370</p>
                        </a>
                        <p class="newTruckBlock-price">Price Not Available</p>
                        <a href="#" class="borderBtn newTruckBlock-btn" title="View Details">View Details</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="sectionpadding25 whitebg b-t-1">
    <div class="container-mid">
        <div class="sectionHeading">
            <h2>Popular Second Hand Tata Trucks</h2>
        </div>
        <div class="usedTrckBlock tj-row">

            <div class="usedTrckBlock-main tj-col">
                <div class="usedTrckBlock-inner sectionShadow">
                    <a href="#" title="Tata 1613">
                        <div class="usedTrckBlock-img position-relative">
                            <amp-img class="contain" layout="fill" src="assets/images/used/truck1.jpg" alt="Tata 1613">
                            </amp-img>
                        </div>
                    </a>
                    <div class="usedTrckBlock-content">
                        <div class="usedTrckBlock-contentTop">
                            <a href="#" title="Tata 1613">
                                <p class="usedTrckBlock-title boldfont">Tata 1613</p>
                            </a>
                            <p class="usedTrckBlock-price">Price - ₹ 6,50,000</p>
                        </div>
                        <div class="usedTrckBlock-info">
                            <p>
                                <amp-img class="usedTrckBlock-infoIcon" src="assets/images/icons/meter.svg" alt=""
                                    layout="fixed" width="13" height="13"></amp-img> N/A
                            </p>
                            <p>
                                <amp-img class="usedTrckBlock-infoIcon" src="assets/images/icons/location.svg" alt=""
                                    layout="fixed" width="13" height="13"> </amp-img>Beed
                            </p>
                            <p>
                                <amp-img class="usedTrckBlock-infoIcon" src="assets/images/icons/calendar.svg" alt=""
                                    layout="fixed" width="13" height="13"> </amp-img>2007
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="usedTrckBlock-main tj-col">
                <div class="usedTrckBlock-inner sectionShadow">
                    <a href="#" title="Tata 1613">
                        <div class="usedTrckBlock-img position-relative">
                            <amp-img class="contain" layout="fill" src="assets/images/used/truck2.jpg" alt="Tata 1613">
                            </amp-img>
                        </div>
                    </a>
                    <div class="usedTrckBlock-content">
                        <div class="usedTrckBlock-contentTop">
                            <a href="#" title="Tata 1613">
                                <p class="usedTrckBlock-title boldfont">Tata 1613</p>
                            </a>
                            <p class="usedTrckBlock-price">Price - ₹ 6,50,000</p>
                        </div>
                        <div class="usedTrckBlock-info">
                            <p>
                                <amp-img class="usedTrckBlock-infoIcon" src="assets/images/icons/meter.svg" alt=""
                                    layout="fixed" width="13" height="13"></amp-img> N/A
                            </p>
                            <p>
                                <amp-img class="usedTrckBlock-infoIcon" src="assets/images/icons/location.svg" alt=""
                                    layout="fixed" width="13" height="13"> </amp-img>Beed
                            </p>
                            <p>
                                <amp-img class="usedTrckBlock-infoIcon" src="assets/images/icons/calendar.svg" alt=""
                                    layout="fixed" width="13" height="13"> </amp-img>2007
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="usedTrckBlock-main tj-col">
                <div class="usedTrckBlock-inner sectionShadow">
                    <a href="#" title="Tata 1613">
                        <div class="usedTrckBlock-img position-relative">
                            <amp-img class="contain" layout="fill" src="assets/images/used/truck3.jpg" alt="Tata 1613">
                            </amp-img>
                        </div>
                    </a>
                    <div class="usedTrckBlock-content">
                        <div class="usedTrckBlock-contentTop">
                            <a href="#" title="Tata 1613">
                                <p class="usedTrckBlock-title boldfont">Tata 1613</p>
                            </a>
                            <p class="usedTrckBlock-price">Price - ₹ 6,50,000</p>
                        </div>
                        <div class="usedTrckBlock-info">
                            <p>
                                <amp-img class="usedTrckBlock-infoIcon" src="assets/images/icons/meter.svg" alt=""
                                    layout="fixed" width="13" height="13"></amp-img> N/A
                            </p>
                            <p>
                                <amp-img class="usedTrckBlock-infoIcon" src="assets/images/icons/location.svg" alt=""
                                    layout="fixed" width="13" height="13"> </amp-img>Beed
                            </p>
                            <p>
                                <amp-img class="usedTrckBlock-infoIcon" src="assets/images/icons/calendar.svg" alt=""
                                    layout="fixed" width="13" height="13"> </amp-img>2007
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="usedTrckBlock-main tj-col">
                <div class="usedTrckBlock-inner sectionShadow">
                    <a href="#" title="Tata 1613">
                        <div class="usedTrckBlock-img position-relative">
                            <amp-img class="contain" layout="fill" src="assets/images/used/truck4.jpg" alt="Tata 1613">
                            </amp-img>
                        </div>
                    </a>
                    <div class="usedTrckBlock-content">
                        <div class="usedTrckBlock-contentTop">
                            <a href="#" title="Tata 1613">
                                <p class="usedTrckBlock-title boldfont">Tata 1613</p>
                            </a>
                            <p class="usedTrckBlock-price">Price - ₹ 6,50,000</p>
                        </div>
                        <div class="usedTrckBlock-info">
                            <p>
                                <amp-img class="usedTrckBlock-infoIcon" src="assets/images/icons/meter.svg" alt=""
                                    layout="fixed" width="13" height="13"></amp-img> N/A
                            </p>
                            <p>
                                <amp-img class="usedTrckBlock-infoIcon" src="assets/images/icons/location.svg" alt=""
                                    layout="fixed" width="13" height="13"> </amp-img>Beed
                            </p>
                            <p>
                                <amp-img class="usedTrckBlock-infoIcon" src="assets/images/icons/calendar.svg" alt=""
                                    layout="fixed" width="13" height="13"> </amp-img>2007
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="viewall mt-3">
            <a href="#" class="boldfont" title="">View All <amp-img layout="fixed" width="12" height="12"
                    src="assets/images/icons/linkarrow.svg" alt=""></amp-img></a>
        </div>
    </div>
</section>

<section class="b-t-1 sectionpadding25">
    <div class="container-mid">
        <div class="sectionHeading">
            <h2>Tata Trucks By Category</h2>
        </div>
        <div class="filterBlock tj-row">

            <div class="filterBlockMain tj-col">
                <a class="filterBlock-chips sectionShadow boldfont text-center"
                    href="https://trucks.tractorjunction.com/en/mini-truck/tata-trucks" title="Tata Mini Trucks">Tata
                    Mini Trucks</a>
            </div>

            <div class="filterBlockMain tj-col">
                <a class="filterBlock-chips sectionShadow boldfont text-center"
                    href="https://trucks.tractorjunction.com/en/mini-truck/tata-trucks" title="Tata Mini Trucks">Tata
                    Mini Trucks</a>
            </div>

            <div class="filterBlockMain tj-col">
                <a class="filterBlock-chips sectionShadow boldfont text-center"
                    href="https://trucks.tractorjunction.com/en/mini-truck/tata-trucks" title="Tata Mini Trucks">Tata
                    Mini Trucks</a>
            </div>

            <div class="filterBlockMain tj-col">
                <a class="filterBlock-chips sectionShadow boldfont text-center"
                    href="https://trucks.tractorjunction.com/en/mini-truck/tata-trucks" title="Tata Mini Trucks">Tata
                    Mini Trucks</a>
            </div>

            <div class="filterBlockMain tj-col">
                <a class="filterBlock-chips sectionShadow boldfont text-center"
                    href="https://trucks.tractorjunction.com/en/mini-truck/tata-trucks" title="Tata Mini Trucks">Tata
                    Mini Trucks</a>
            </div>

            <div class="filterBlockMain tj-col">
                <a class="filterBlock-chips sectionShadow boldfont text-center"
                    href="https://trucks.tractorjunction.com/en/mini-truck/tata-trucks" title="Tata Mini Trucks">Tata
                    Mini Trucks</a>
            </div>

        </div>
    </div>
</section>

<section class="sectionpadding25 greybg">
    <div class="container-mid">
        <div class="sectionHeading">
            <h2>Similar Brands of Tata</h2>
        </div>
        <div class="brandsMainBlock tj-row">

            <div class="brandsMain tj-col">
                <div class="brandsMainInner m-b-16 text-center">
                    <a href="#">
                        <div class="brandsMainImg position-relative">
                            <amp-img class="contain" layout="fill" src="assets/images/brands/ashok-leyland.png">
                            </amp-img>
                        </div>
                        <p>Ashok Leyland</p>
                    </a>
                </div>
            </div>

            <div class="brandsMain tj-col">
                <div class="brandsMainInner m-b-16 text-center">
                    <a href="#">
                        <div class="brandsMainImg position-relative">
                            <amp-img class="contain" layout="fill" src="assets/images/brands/bharat-benz.png"></amp-img>
                        </div>
                        <p>Ashok Leyland</p>
                    </a>
                </div>
            </div>

            <div class="brandsMain tj-col">
                <div class="brandsMainInner m-b-16 text-center">
                    <a href="#">
                        <div class="brandsMainImg position-relative">
                            <amp-img class="contain" layout="fill" src="assets/images/brands/eicher.png"></amp-img>
                        </div>
                        <p>Ashok Leyland</p>
                    </a>
                </div>
            </div>

            <div class="brandsMain tj-col">
                <div class="brandsMainInner m-b-16 text-center">
                    <a href="#">
                        <div class="brandsMainImg position-relative">
                            <amp-img class="contain" layout="fill" src="assets/images/brands/mahindra.png"></amp-img>
                        </div>
                        <p>Ashok Leyland</p>
                    </a>
                </div>
            </div>

            <div class="brandsMain tj-col">
                <div class="brandsMainInner m-b-16 text-center">
                    <a href="#">
                        <div class="brandsMainImg position-relative">
                            <amp-img class="contain" layout="fill" src="assets/images/brands/piaggio.png"></amp-img>
                        </div>
                        <p>Ashok Leyland</p>
                    </a>
                </div>
            </div>

            <div class="brandsMain tj-col">
                <div class="brandsMainInner m-b-16 text-center">
                    <a href="#">
                        <div class="brandsMainImg position-relative">
                            <amp-img class="contain" layout="fill" src="assets/images/brands/tata.png"></amp-img>
                        </div>
                        <p>Ashok Leyland</p>
                    </a>
                </div>
            </div>

            <div class="brandsMain tj-col">
                <div class="brandsMainInner m-b-16 text-center">
                    <a href="#">
                        <div class="brandsMainImg position-relative">
                            <amp-img class="contain" layout="fill" src="assets/images/brands/ashok-leyland.png">
                            </amp-img>
                        </div>
                        <p>Ashok Leyland</p>
                    </a>
                </div>
            </div>

            <div class="brandsMain tj-col">
                <div class="brandsMainInner m-b-16 text-center">
                    <a href="#">
                        <div class="brandsMainImg position-relative">
                            <amp-img class="contain" layout="fill" src="assets/images/brands/bharat-benz.png"></amp-img>
                        </div>
                        <p>Ashok Leyland</p>
                    </a>
                </div>
            </div>

            <div class="brandsMain tj-col">
                <div class="brandsMainInner m-b-16 text-center">
                    <a href="#">
                        <div class="brandsMainImg position-relative">
                            <amp-img class="contain" layout="fill" src="assets/images/brands/eicher.png"></amp-img>
                        </div>
                        <p>Ashok Leyland</p>
                    </a>
                </div>
            </div>

            <div class="brandsMain tj-col">
                <div class="brandsMainInner m-b-16 text-center">
                    <a href="#">
                        <div class="brandsMainImg position-relative">
                            <amp-img class="contain" layout="fill" src="assets/images/brands/mahindra.png"></amp-img>
                        </div>
                        <p>Ashok Leyland</p>
                    </a>
                </div>
            </div>

            <div class="brandsMain tj-col">
                <div class="brandsMainInner m-b-16 text-center">
                    <a href="#">
                        <div class="brandsMainImg position-relative">
                            <amp-img class="contain" layout="fill" src="assets/images/brands/piaggio.png"></amp-img>
                        </div>
                        <p>Ashok Leyland</p>
                    </a>
                </div>
            </div>

            <div class="brandsMain tj-col">
                <div class="brandsMainInner m-b-16 text-center">
                    <a href="#">
                        <div class="brandsMainImg position-relative">
                            <amp-img class="contain" layout="fill" src="assets/images/brands/tata.png"></amp-img>
                        </div>
                        <p>Ashok Leyland</p>
                    </a>
                </div>
            </div>

        </div>
        <div class="viewall">
            <a href="#" class="boldfont" title="">View All <amp-img layout="fixed" width="12" height="12"
                    src="assets/images/icons/linkarrow.svg" alt=""></amp-img></a>
        </div>
    </div>
</section>

<section class="sectionpadding25">
    <div class="container-mid">
        <div class="sectionHeading">
            <h2>Tata Trucks Dealers &amp; Service Centers</h2>
        </div>
        <div class="tab-block">
            <amp-selector class="tabs-with-selector" role="tablist"
                on="select:truckdealer.toggle(index=event.targetOption, value=true)" keyboard-select-mode="focus">
                <div id="truckdealer-dealer" role="tab" aria-controls="truckdealer-dealercontent" option="0" selected>
                    Dealers</div>
                <div id="truckdealer-service" role="tab" aria-controls="truckdealer-servicecontent" option="1">
                    Service Center
                </div>
                <div id="truckdealer-spare" role="tab" aria-controls="truckdealer-sparecontent" option="2">
                    Spare Parts
                </div>
            </amp-selector>
            <amp-selector id="truckdealer" class="tabpanels mt-3 mb-3">

                <div id="truckdealer-dealercontent" role="tabpanel" aria-labelledby="truckdealer-dealer" option
                    selected>

                    <div class="dealerBlock-inner sectionShadow m-t-16">
                        <h4>Gati Motors Pvt Ltd 1</h4>
                        <div class="dealer-inner-content whitebg">
                            <p class="dealerBlock-location">
                                <amp-img width="13" height="13" layout="fixed"
                                    src="https://trkcdn.tractorjunction.com/images/icons/location.svg"></amp-img>
                                Nalhati College More, Nalhati,west Bengal - 731220
                            </p>
                            <p class="dealerBlock-email oneline">
                                <amp-img width="13" height="13" layout="fixed"
                                    src="https://trkcdn.tractorjunction.com/images/icons/mail.svg"></amp-img>
                                gmpl2000@gmail.com
                            </p>
                            <p class="dealerBlock-contact oneline">
                                <amp-img width="13" height="13" layout="fixed"
                                    src="https://trkcdn.tractorjunction.com/images/icons/phone.svg"></amp-img>
                                7872503111
                            </p>
                        </div>
                    </div>

                    <div class="dealerBlock-inner sectionShadow m-t-16">
                        <h4>Gati Motors Pvt Ltd</h4>
                        <div class="dealer-inner-content whitebg">
                            <p class="dealerBlock-location">
                                <amp-img width="13" height="13" layout="fixed"
                                    src="https://trkcdn.tractorjunction.com/images/icons/location.svg"></amp-img>
                                Nalhati College More, Nalhati,west Bengal - 731220
                            </p>
                            <p class="dealerBlock-email oneline">
                                <amp-img width="13" height="13" layout="fixed"
                                    src="https://trkcdn.tractorjunction.com/images/icons/mail.svg"></amp-img>
                                gmpl2000@gmail.com
                            </p>
                            <p class="dealerBlock-contact oneline">
                                <amp-img width="13" height="13" layout="fixed"
                                    src="https://trkcdn.tractorjunction.com/images/icons/phone.svg"></amp-img>
                                7872503111
                            </p>
                        </div>
                    </div>

                    <div class="dealerBlock-inner sectionShadow m-t-16">
                        <h4>Gati Motors Pvt Ltd</h4>
                        <div class="dealer-inner-content whitebg">
                            <p class="dealerBlock-location">
                                <amp-img width="13" height="13" layout="fixed"
                                    src="https://trkcdn.tractorjunction.com/images/icons/location.svg"></amp-img>
                                Nalhati College More, Nalhati,west Bengal - 731220
                            </p>
                            <p class="dealerBlock-email oneline">
                                <amp-img width="13" height="13" layout="fixed"
                                    src="https://trkcdn.tractorjunction.com/images/icons/mail.svg"></amp-img>
                                gmpl2000@gmail.com
                            </p>
                            <p class="dealerBlock-contact oneline">
                                <amp-img width="13" height="13" layout="fixed"
                                    src="https://trkcdn.tractorjunction.com/images/icons/phone.svg"></amp-img>
                                7872503111
                            </p>
                        </div>
                    </div>

                    <div class="dealerBlock-inner sectionShadow m-t-16">
                        <h4>Gati Motors Pvt Ltd</h4>
                        <div class="dealer-inner-content whitebg">
                            <p class="dealerBlock-location">
                                <amp-img width="13" height="13" layout="fixed"
                                    src="https://trkcdn.tractorjunction.com/images/icons/location.svg"></amp-img>
                                Nalhati College More, Nalhati,west Bengal - 731220
                            </p>
                            <p class="dealerBlock-email oneline">
                                <amp-img width="13" height="13" layout="fixed"
                                    src="https://trkcdn.tractorjunction.com/images/icons/mail.svg"></amp-img>
                                gmpl2000@gmail.com
                            </p>
                            <p class="dealerBlock-contact oneline">
                                <amp-img width="13" height="13" layout="fixed"
                                    src="https://trkcdn.tractorjunction.com/images/icons/phone.svg"></amp-img>
                                7872503111
                            </p>
                        </div>
                    </div>

                    <div class="viewall mt-3">
                        <a href="#" class="boldfont" title="">View All <amp-img layout="fixed" width="12" height="12"
                                src="assets/images/icons/linkarrow.svg" alt=""></amp-img></a>
                    </div>

                </div>

                <div id="truckdealer-servicecontent" role="tabpanel" aria-labelledby="truckdealer-service" option>
                    <div class="dealerBlock-inner sectionShadow m-t-16">
                        <h4>Gati Motors Pvt Ltd 2</h4>
                        <div class="dealer-inner-content whitebg">
                            <p class="dealerBlock-location">
                                <amp-img width="13" height="13" layout="fixed"
                                    src="https://trkcdn.tractorjunction.com/images/icons/location.svg"></amp-img>
                                Nalhati College More, Nalhati,west Bengal - 731220
                            </p>
                            <p class="dealerBlock-email oneline">
                                <amp-img width="13" height="13" layout="fixed"
                                    src="https://trkcdn.tractorjunction.com/images/icons/mail.svg"></amp-img>
                                gmpl2000@gmail.com
                            </p>
                            <p class="dealerBlock-contact oneline">
                                <amp-img width="13" height="13" layout="fixed"
                                    src="https://trkcdn.tractorjunction.com/images/icons/phone.svg"></amp-img>
                                7872503111
                            </p>
                        </div>
                    </div>

                    <div class="dealerBlock-inner sectionShadow m-t-16">
                        <h4>Gati Motors Pvt Ltd</h4>
                        <div class="dealer-inner-content whitebg">
                            <p class="dealerBlock-location">
                                <amp-img width="13" height="13" layout="fixed"
                                    src="https://trkcdn.tractorjunction.com/images/icons/location.svg"></amp-img>
                                Nalhati College More, Nalhati,west Bengal - 731220
                            </p>
                            <p class="dealerBlock-email oneline">
                                <amp-img width="13" height="13" layout="fixed"
                                    src="https://trkcdn.tractorjunction.com/images/icons/mail.svg"></amp-img>
                                gmpl2000@gmail.com
                            </p>
                            <p class="dealerBlock-contact oneline">
                                <amp-img width="13" height="13" layout="fixed"
                                    src="https://trkcdn.tractorjunction.com/images/icons/phone.svg"></amp-img>
                                7872503111
                            </p>
                        </div>
                    </div>

                    <div class="dealerBlock-inner sectionShadow m-t-16">
                        <h4>Gati Motors Pvt Ltd</h4>
                        <div class="dealer-inner-content whitebg">
                            <p class="dealerBlock-location">
                                <amp-img width="13" height="13" layout="fixed"
                                    src="https://trkcdn.tractorjunction.com/images/icons/location.svg"></amp-img>
                                Nalhati College More, Nalhati,west Bengal - 731220
                            </p>
                            <p class="dealerBlock-email oneline">
                                <amp-img width="13" height="13" layout="fixed"
                                    src="https://trkcdn.tractorjunction.com/images/icons/mail.svg"></amp-img>
                                gmpl2000@gmail.com
                            </p>
                            <p class="dealerBlock-contact oneline">
                                <amp-img width="13" height="13" layout="fixed"
                                    src="https://trkcdn.tractorjunction.com/images/icons/phone.svg"></amp-img>
                                7872503111
                            </p>
                        </div>
                    </div>

                    <div class="dealerBlock-inner sectionShadow m-t-16">
                        <h4>Gati Motors Pvt Ltd</h4>
                        <div class="dealer-inner-content whitebg">
                            <p class="dealerBlock-location">
                                <amp-img width="13" height="13" layout="fixed"
                                    src="https://trkcdn.tractorjunction.com/images/icons/location.svg"></amp-img>
                                Nalhati College More, Nalhati,west Bengal - 731220
                            </p>
                            <p class="dealerBlock-email oneline">
                                <amp-img width="13" height="13" layout="fixed"
                                    src="https://trkcdn.tractorjunction.com/images/icons/mail.svg"></amp-img>
                                gmpl2000@gmail.com
                            </p>
                            <p class="dealerBlock-contact oneline">
                                <amp-img width="13" height="13" layout="fixed"
                                    src="https://trkcdn.tractorjunction.com/images/icons/phone.svg"></amp-img>
                                7872503111
                            </p>
                        </div>
                    </div>

                    <div class="viewall mt-3">
                        <a href="#" class="boldfont" title="">View All <amp-img layout="fixed" width="12" height="12"
                                src="assets/images/icons/linkarrow.svg" alt=""></amp-img></a>
                    </div>
                </div>

                <div id="truckdealer-sparecontent" role="tabpanel" aria-labelledby="truckdealer-spare" option>
                    <div class="dealerBlock-inner sectionShadow m-t-16">
                        <h4>Gati Motors Pvt Ltd 3</h4>
                        <div class="dealer-inner-content whitebg">
                            <p class="dealerBlock-location">
                                <amp-img width="13" height="13" layout="fixed"
                                    src="https://trkcdn.tractorjunction.com/images/icons/location.svg"></amp-img>
                                Nalhati College More, Nalhati,west Bengal - 731220
                            </p>
                            <p class="dealerBlock-email oneline">
                                <amp-img width="13" height="13" layout="fixed"
                                    src="https://trkcdn.tractorjunction.com/images/icons/mail.svg"></amp-img>
                                gmpl2000@gmail.com
                            </p>
                            <p class="dealerBlock-contact oneline">
                                <amp-img width="13" height="13" layout="fixed"
                                    src="https://trkcdn.tractorjunction.com/images/icons/phone.svg"></amp-img>
                                7872503111
                            </p>
                        </div>
                    </div>

                    <div class="dealerBlock-inner sectionShadow m-t-16">
                        <h4>Gati Motors Pvt Ltd</h4>
                        <div class="dealer-inner-content whitebg">
                            <p class="dealerBlock-location">
                                <amp-img width="13" height="13" layout="fixed"
                                    src="https://trkcdn.tractorjunction.com/images/icons/location.svg"></amp-img>
                                Nalhati College More, Nalhati,west Bengal - 731220
                            </p>
                            <p class="dealerBlock-email oneline">
                                <amp-img width="13" height="13" layout="fixed"
                                    src="https://trkcdn.tractorjunction.com/images/icons/mail.svg"></amp-img>
                                gmpl2000@gmail.com
                            </p>
                            <p class="dealerBlock-contact oneline">
                                <amp-img width="13" height="13" layout="fixed"
                                    src="https://trkcdn.tractorjunction.com/images/icons/phone.svg"></amp-img>
                                7872503111
                            </p>
                        </div>
                    </div>

                    <div class="dealerBlock-inner sectionShadow m-t-16">
                        <h4>Gati Motors Pvt Ltd</h4>
                        <div class="dealer-inner-content whitebg">
                            <p class="dealerBlock-location">
                                <amp-img width="13" height="13" layout="fixed"
                                    src="https://trkcdn.tractorjunction.com/images/icons/location.svg"></amp-img>
                                Nalhati College More, Nalhati,west Bengal - 731220
                            </p>
                            <p class="dealerBlock-email oneline">
                                <amp-img width="13" height="13" layout="fixed"
                                    src="https://trkcdn.tractorjunction.com/images/icons/mail.svg"></amp-img>
                                gmpl2000@gmail.com
                            </p>
                            <p class="dealerBlock-contact oneline">
                                <amp-img width="13" height="13" layout="fixed"
                                    src="https://trkcdn.tractorjunction.com/images/icons/phone.svg"></amp-img>
                                7872503111
                            </p>
                        </div>
                    </div>

                    <div class="dealerBlock-inner sectionShadow m-t-16">
                        <h4>Gati Motors Pvt Ltd</h4>
                        <div class="dealer-inner-content whitebg">
                            <p class="dealerBlock-location">
                                <amp-img width="13" height="13" layout="fixed"
                                    src="https://trkcdn.tractorjunction.com/images/icons/location.svg"></amp-img>
                                Nalhati College More, Nalhati,west Bengal - 731220
                            </p>
                            <p class="dealerBlock-email oneline">
                                <amp-img width="13" height="13" layout="fixed"
                                    src="https://trkcdn.tractorjunction.com/images/icons/mail.svg"></amp-img>
                                gmpl2000@gmail.com
                            </p>
                            <p class="dealerBlock-contact oneline">
                                <amp-img width="13" height="13" layout="fixed"
                                    src="https://trkcdn.tractorjunction.com/images/icons/phone.svg"></amp-img>
                                7872503111
                            </p>
                        </div>
                    </div>

                    <div class="viewall mt-3">
                        <a href="#" class="boldfont" title="">View All <amp-img layout="fixed" width="12" height="12"
                                src="assets/images/icons/linkarrow.svg" alt=""></amp-img></a>
                    </div>
                </div>

            </amp-selector>
        </div>
    </div>
</section>

<section class="b-t-1 ckeditorBlock sectionpadding20">
    <div class="container-mid">
        <div class="sectionHeading">
            <h3>About Tata Trucks</h3>
        </div>
        <div class="content-ckeditor ckeditorBlock">
            <div class="content-ckeditor-show">
                <p style="text-align:justify">Tata Motors started manufacturing commercial vehicles in 1954. It has a
                    wide presence in the trucks,&nbsp; <a href="https://trucks.tractorjunction.com/en/tippers"
                        target="_blank">tippers</a>, tractors, pickup trucks, 3-wheelers, <a
                        href="https://trucks.tractorjunction.com/en/transit-mixer" target="_blank">transit mixers</a>,
                    buses, and defence vehicle segments. Tata trucks price range in India starts from Rs. 4.36 lakhs*
                    and going up to Rs. 50.08 lakhs*. The most popular Tata truck model is Tata Ultra 1918.T truck and
                    its price range is Rs. 18 lakhs* to Rs. 24.23 lakhs*. The most economic truck is the Tata &nbsp;<a
                        href="https://trucks.tractorjunction.com/en/tata-truck/ace-gold" target="_blank"><span
                            style="color:#3498db">Ace Gold</span></a> truck and its price is Rs. 4.36 lakhs* and the
                    most expensive truck is Tata Signa 4225 with Rs. 50.08 lakhs* price.</p>
            </div>
            <div class="content-ckeditor-hide"
                [class]="bottomvisible ? 'content-ckeditor-show' : 'content-ckeditor-hide'">
                <p style="text-align:justify"><strong><em>Are you searching for your perfect dream Tata
                            Truck?</em></strong></p>
                <p style="text-align:justify">Tata motors are the leading automobile company globally. Tata Motors
                    distinctive
                    product line includes a comprehensive range of Trucks, Cars, Sports utility vehicles, buses and
                    defence
                    vehicles. India's massive OEMs provide an extensive range of intelligent, integrated and e-mobility
                    solutions.</p>
                <p style="text-align:justify">Tata Motors was established in 1945 by Jamsetji Tata. He always works for
                    the
                    customer’s priority, and comfortability and all products reflect their commitment.</p>
                <p style="text-align:justify">In 1954, Tata Motors launched its first Tata commercial vehicle, TMB 312
                    truck.
                    This Tata motors truck was the turning point of the company. After this, they never turned back and
                    set a
                    magnificent level in the industry. &nbsp;Tata Motors also won many awards for its high productive
                    product
                    line.&nbsp;</p>
                <p style="text-align:justify">Their main goal is to innovate mobility solutions with a passion for
                    increasing
                    the quality of customer’s life. Their tagline purely justifies its products ‘Connecting
                    Aspirations’.&nbsp;
                </p>
                <h2 style="text-align:justify"><span style="font-size:14px"><strong>&nbsp;Tata Motors Truck Qualities,
                            Which
                            Makes it a Number 1 Brand</strong></span></h2>
                <p style="text-align:justify">Tata Motors goods vehicles are a perfect blend of driveability,
                    performance and
                    connectivity. It is the largest automobile manufacturer company that is shaping the Indian
                    commercial
                    vehicle.&nbsp;</p>
                <ul>
                    <li style="text-align:justify">Tata Motors truck driving sustainable mobility solutions.&nbsp;</li>
                    <li style="text-align:justify">They are working on exceeding customer expectations.&nbsp;</li>
                    <li style="text-align:justify">Tata Motors has a highly engaged workforce.&nbsp;</li>
                    <li style="text-align:justify">Their product line comes with excellent quality and
                        affordability.&nbsp;</li>
                </ul>
                <h2 style="text-align:justify"><span style="font-size:14px"><strong>Tata Truck Price in India - A Great
                            Reasonability</strong></span></h2>
                <p style="text-align:justify">Tata truck price is the most suitable and reasonable price that every
                    customer can
                    easily buy. Their products come with a tag of performance, power and affordability. Tata truck price
                    list in
                    India starts from Rs. 4.36 Lakh.&nbsp;</p>
                <p style="text-align:justify"><strong>Tata Tipper Price List in India</strong></p>
                <p style="text-align:justify">Truck Tata is providing a premium range of trucks to its consumers. They
                    always
                    work to provide a complete edge solution for ease and convenience. Along with this, they set the
                    price of a
                    Tata Truck according to the budget of the average consumers in India. Here at Truck Junction, you
                    can get
                    every detail regarding the new Tata truck and new tata truck price. Tata commercial vehicle price is
                    super
                    reasonable so that everyone can easily buy it.&nbsp;</p>
                <p style="text-align:justify">Following are some top models of Truck Tata in India with a price
                    list.&nbsp;</p>
                <ul>
                    <li style="text-align:justify">Tata Ultra 1918.T Truck - Rs. 18 Lakh - 24.23 Lakh</li>
                    <li style="text-align:justify">Tata 1512 LPT Truck - Rs. 22.45 Lakh - 23.56 Lakh</li>
                    <li style="text-align:justify">Tata LPT 3518 Cowl Truck - Rs. 35.26 Lakh - 35.72 Lakh</li>
                </ul>
                <p style="text-align:justify">If you want to get a fair Tata Motors Truck price, then TruckJunction is
                    the
                    perfect platform. Here, you can get updated Tata Motors truck price, Tata Motors bs6 price, Tata
                    motors
                    lorry price, Tata motors tempo price and many more.&nbsp;</p>
                <h3 style="text-align:justify"><span style="font-size:14px"><strong>Tata Motors Truck Dealers in
                            India</strong></span></h3>
                <p style="text-align:justify">Tata Motors dealers network is spread all over India. They provide end to
                    end
                    services to their customers. To know more information, visit Tata Motors Dealers Page.&nbsp;</p>
                <h3 style="text-align:justify"><span style="font-size:14px"><strong>Tata Motors Commercial Vehicles
                            &nbsp;-
                            Availability With Truck Junction</strong></span></h3>
                <p style="text-align:justify">TruckJunction is a place where you get a fair market deal on Tata Trucks
                    in India.
                    Here, we provide all the separate Tata Motors trucks, Tata tippers, Tata motors pickup, Tata transit
                    mixer,
                    Tata lorry, Tata tractor and Tata mini truck at a reasonable Tata Motors rate.&nbsp;</p>
                <p style="text-align:justify">For customer comfortability, we provide a filter option from which you can
                    filter
                    according to your need. It is the perfect platform for Tata Commercial Vehicles.&nbsp;</p>
                <h4 style="text-align:justify"><br>
                    <span style="font-size:14px"><strong><span style="background-color:#ffffff">Tata New Trucks Range
                                According
                                To Workload</span></strong></span>
                </h4>
                <p style="text-align:justify">Tata trucks are known for their working efficiency and durability. These
                    tata
                    commercial vehicles have a wide range. Tata motors have three types of commercial vehicles according
                    to
                    workload such as:</p>
                <ul>
                    <li style="text-align:justify">tata heavy commercial vehicles</li>
                    <li style="text-align:justify">tata small commercial vehicles</li>
                    <li style="text-align:justify">tata light commercial vehicles</li>
                </ul>
                <p style="text-align:justify">So be with TruckJunction and get Tata Truck in your budget. We can convey
                    all the
                    information about trucks, tippers, <a href="https://trucks.tractorjunction.com/en/pickup"
                        target="_blank">pickups</a>, and many more, exploring more and taking detailed information.With
                    all
                    these, you can also get Tata lorry price in India, Tata heavy truck price, Tata 8 ton truck and many
                    more.
                    Just log on and get Tata all trucks with the best truck Tata price.&nbsp;</p>
            </div>
            <p class="text-right"><a role="button" [text]="bottomvisible ? 'Read Less' : 'Read More'"
                    on="tap:AMP.setState({bottomvisible: !bottomvisible})" class="ckeditor-btn">Read More</a></p>
        </div>
    </div>
</section>

<section class="newsBlock sectionpadding20 greybg pb-3">
    <div class="container-mid">
        <div class="sectionHeading">
            <h2>Tata Trucks Updates</h2>
        </div>

        <div class="tab-block">
            <amp-selector class="tabs-with-selector" role="tablist"
                on="select:updates.toggle(index=event.targetOption, value=true)" keyboard-select-mode="focus">
                <div id="updates-news" role="tab" aria-controls="updates-newscontent" option="0" selected>
                    Truck News</div>
                <div id="updates-video" role="tab" aria-controls="updates-videocontent" option="1">
                    Truck Videos
                </div>
            </amp-selector>
            <amp-selector id="updates" class="tabpanels mt-3 mb-3">

                <div id="updates-newscontent" role="tabpanel" aria-labelledby="updates-news" option selected>
                    <div class="mainRowFlex tj-row">

                        <div class="newsMainGrid tj-col">
                            <div class="newsBlock-inner m-b-16 sectionShadow">
                                <a href="#">
                                    <div class="imgAmpContainer">
                                        <amp-img class="cover" layout="fill" src="assets/images/news2.jpg" alt="news">
                                        </amp-img>
                                    </div>
                                </a>
                                <div class="newsBlock-content">
                                    <a href="#">
                                        <p class="newsBlock-title boldfont headingfont">Mahindra Supro Maxi Truck:
                                            Key Highlights ...</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="newsMainGrid tj-col">
                            <div class="newsBlock-inner m-b-16 sectionShadow">
                                <a href="#">
                                    <div class="imgAmpContainer">
                                        <amp-img class="cover" layout="fill" src="assets/images/news3.jpg" alt="news">
                                        </amp-img>
                                    </div>
                                </a>
                                <div class="newsBlock-content">
                                    <a href="#">
                                        <p class="newsBlock-title boldfont headingfont">Mahindra Supro Maxi Truck:
                                            Key Highlights ...</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="newsMainGrid tj-col">
                            <div class="newsBlock-inner m-b-16 sectionShadow">
                                <a href="#">
                                    <div class="imgAmpContainer">
                                        <amp-img class="cover" layout="fill" src="assets/images/news4.jpg" alt="news">
                                        </amp-img>
                                    </div>
                                </a>
                                <div class="newsBlock-content">
                                    <a href="#">
                                        <p class="newsBlock-title boldfont headingfont">Mahindra Supro Maxi Truck:
                                            Key Highlights ...</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="newsMainGrid tj-col">
                            <div class="newsBlock-inner m-b-16 sectionShadow">
                                <a href="#">
                                    <div class="imgAmpContainer">
                                        <amp-img class="cover" layout="fill" src="assets/images/news5.jpg" alt="news">
                                        </amp-img>
                                    </div>
                                </a>
                                <div class="newsBlock-content">
                                    <a href="#">
                                        <p class="newsBlock-title boldfont headingfont">Mahindra Supro Maxi Truck:
                                            Key Highlights ...</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="viewall">
                        <a href="#" class="boldfont" title="">View All <amp-img layout="fixed" width="12" height="12"
                                src="assets/images/icons/linkarrow.svg" alt=""></amp-img></a>
                    </div>
                </div>

                <div id="updates-videocontent" role="tabpanel" aria-labelledby="updates-video" option>
                    <div class="mainRowFlex tj-row">

                        <div class="newsMainGrid tj-col">
                            <div class="newsBlock-inner m-b-16 sectionShadow">
                                <a href="#">
                                    <div class="imgAmpContainer">
                                        <amp-img class="cover" layout="fill" src="assets/images/news2.jpg" alt="news">
                                        </amp-img>
                                    </div>
                                </a>
                                <div class="newsBlock-content">
                                    <a href="#">
                                        <p class="newsBlock-title boldfont headingfont">Mahindra Supro Maxi Truck:
                                            Key Highlights ...</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="newsMainGrid tj-col">
                            <div class="newsBlock-inner m-b-16 sectionShadow">
                                <a href="#">
                                    <div class="imgAmpContainer">
                                        <amp-img class="cover" layout="fill" src="assets/images/news3.jpg" alt="news">
                                        </amp-img>
                                    </div>
                                </a>
                                <div class="newsBlock-content">
                                    <a href="#">
                                        <p class="newsBlock-title boldfont headingfont">Mahindra Supro Maxi Truck:
                                            Key Highlights ...</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="newsMainGrid tj-col">
                            <div class="newsBlock-inner m-b-16 sectionShadow">
                                <a href="#">
                                    <div class="imgAmpContainer">
                                        <amp-img class="cover" layout="fill" src="assets/images/news4.jpg" alt="news">
                                        </amp-img>
                                    </div>
                                </a>
                                <div class="newsBlock-content">
                                    <a href="#">
                                        <p class="newsBlock-title boldfont headingfont">Mahindra Supro Maxi Truck:
                                            Key Highlights ...</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="newsMainGrid tj-col">
                            <div class="newsBlock-inner m-b-16 sectionShadow">
                                <a href="#">
                                    <div class="imgAmpContainer">
                                        <amp-img class="cover" layout="fill" src="assets/images/news5.jpg" alt="news">
                                        </amp-img>
                                    </div>
                                </a>
                                <div class="newsBlock-content">
                                    <a href="#">
                                        <p class="newsBlock-title boldfont headingfont">Mahindra Supro Maxi Truck:
                                            Key Highlights ...</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="viewall">
                        <a href="#" class="boldfont" title="">View All <amp-img layout="fixed" width="12" height="12"
                                src="assets/images/icons/linkarrow.svg" alt=""></amp-img></a>
                    </div>
                </div>

            </amp-selector>
        </div>

    </div>
</section>

<section class="sectionpadding25">
    <div class="container-mid">
        <div class="sectionHeading text-center">
            <h2>Frequently Asked Questions on BharatBenz 1923C Tipper</h2>
        </div>
        <div class="accordion-block mt-3">
            <amp-accordion id="myAccordion">
                <section class="accordion-inner sectionShadow white-bg" id="section2"
                    on="collapse:myAccordion.collapse(section='section1')">
                    <h2 class="white-bg accordion-header">Que. What is the HP range of Mahindra Tractors?</h2>
                    <div class="accordion-content b-t-1">
                        <h4>Ans. Mahindra offers models ranging from 15-75 HP.</h4>
                    </div>
                </section>
                <section class="accordion-inner sectionShadow white-bg">
                    <h2 class="white-bg accordion-header">Que. What is the HP range of Mahindra Tractors?</h2>
                    <div class="accordion-content b-t-1">
                        <h4>Ans. Mahindra offers models ranging from 15-75 HP.</h4>
                    </div>
                </section>
            </amp-accordion>
        </div>
    </div>
</section>

<?php 
    include('layouts/footer.php');
?>