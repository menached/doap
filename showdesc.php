<style>
.delivery-description a img {
    display: inline-block;
    vertical-align: middle;
    margin-left: 5px;
    width: 16px;
    height: 16px;
}
.delivery-description {
    background-color: #f9f9f9;
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    padding: 20px;
    margin: 20px 0;
    //max-width: 600px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    font-family: Arial, sans-serif;
    position: relative;
}

.delivery-description p {
    color: #333;
    font-size: 1.2em;
    line-height: 1.4em;
    text-align: center;
    font-weight: 300;
    cursor: pointer; /* Indicates tooltip */
}

.delivery-description p[data-tooltip]:hover:after {
    content: attr(data-tooltip);
    position: absolute;
    top: 100%;
    left: 50%;
    transform: translateX(-50%);
    background-color: rgba(0, 0, 0, 0.8);
    color: #fff;
    padding: 10px;
    border-radius: 5px;
    width: 300px;
    font-size: 0.9em;
    line-height: 1.3em;
    text-align: left;
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.3);
    z-index: 10;
}

.delivery-description p[data-tooltip]:hover:before {
    content: '';
    position: absolute;
    top: 100%;
    left: 50%;
    transform: translateX(-50%);
    border-width: 8px;
    border-style: solid;
    border-color: rgba(0, 0, 0, 0.8) transparent transparent transparent;
    z-index: 10;
}
</style>

<?php
$link = $_SERVER['HTTP_HOST'];
$base = strstr($link, '.');
if ($base == ".doobiefinder.com") {
    $AgencyUserId = str_replace('.doobiefinder.com', '', $_SERVER['SERVER_NAME']);
} elseif ($base == ".doap.com") {
    $AgencyUserId = str_replace('.doap.com', '', $_SERVER['SERVER_NAME']);
} else {
    $AgencyUserId = str_replace('.dooberz.com', '', $_SERVER['SERVER_NAME']);
}

// Define short descriptions
$shortDescriptions = [
    "alamo" => '<p data-tooltip="Discover Alamo Doap, delivering top-quality cannabis throughout Alamo and nearby areas, including the historic Alamo Square Fountain. Enjoy 1-hour delivery from 9 AM to 9 PM, 7 days a week.">
        <a href="/">Quick, reliable cannabis delivery in Alamo. Call us at </a>
        <a href="tel:+19255534710">925-553-4710</a>
        <a href="https://wa.me/18332893627?text=Hello,%20I%20would%20like%20to%20know%20more%20about%20your%20services." target="_blank" title="Chat with us via WhatsApp for fast and efficient communication.">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" 
                 style="width: 16px; height: 16px; margin-left: 5px; vertical-align: middle;">
        </a>
    </p>',
    "burlingame" => '<p data-tooltip="Discover Burlingame Doap, delivering premium cannabis throughout Burlingame and nearby areas.">
        Fast cannabis delivery in Burlingame. Call us at 
        <a href="tel:+16502930880">(650)293-0880</a>
        <a href="https://wa.me/18332893627?text=Hello,%20I%20would%20like%20to%20know%20more%20about%20your%20services." target="_blank" title="Chat with us via WhatsApp for fast and efficient communication.">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" 
                 style="width: 16px; height: 16px; margin-left: 5px; vertical-align: middle;">
        </a>
    </p>',
    "campbell" => '<p data-tooltip="Discover Campbell Doap, delivering premium cannabis to Campbell and nearby neighborhoods.">
        Easy, reliable cannabis delivery in Campbell. For delivery, call us at 
        <a href="tel:+14086456700">(408)645-6700</a>
        <a href="https://wa.me/18332893627?text=Hello,%20I%20would%20like%20to%20know%20more%20about%20your%20services." target="_blank" title="Chat with us via WhatsApp for fast and efficient communication.">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" 
                 style="width: 16px; height: 16px; margin-left: 5px; vertical-align: middle;">
        </a>
    </p>',
    "castrovalley" => '<p data-tooltip="Discover Castro Valley Doap, delivering top-quality cannabis throughout Castro Valley and nearby areas.">
        Trusted cannabis delivery in Castro Valley. Call us at 
        <a href="tel:+19252639209">(925)263-9209</a>
        <a href="https://wa.me/18332893627?text=Hello,%20I%20would%20like%20to%20know%20more%20about%20your%20services." target="_blank" title="Chat with us via WhatsApp for fast and efficient communication.">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" 
                 style="width: 16px; height: 16px; margin-left: 5px; vertical-align: middle;">
        </a>
    </p>',
    "concord" => '<p data-tooltip="Discover Concord Doap, delivering premium cannabis to Concord and nearby areas.">
        Quality cannabis delivery in Concord. Reach us at 
        <a href="tel:+19254124880">(925)412-4880</a>
        <a href="https://wa.me/18332893627?text=Hello,%20I%20would%20like%20to%20know%20more%20about%20your%20services." target="_blank" title="Chat with us via WhatsApp for fast and efficient communication.">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" 
                 style="width: 16px; height: 16px; margin-left: 5px; vertical-align: middle;">
        </a>
    </p>',
    "danville" => '<p data-tooltip="Discover Danville Doap, delivering premium cannabis throughout Danville and nearby neighborhoods.">
        Fast, discreet cannabis delivery in Danville. Order now at 
        <a href="tel:+19257256920">(925)725-6920</a>
        <a href="https://wa.me/18332893627?text=Hello,%20I%20would%20like%20to%20know%20more%20about%20your%20services." target="_blank" title="Chat with us via WhatsApp for fast and efficient communication.">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" 
                 style="width: 16px; height: 16px; margin-left: 5px; vertical-align: middle;">
        </a>
    </p>',
    "dublin" => '<p data-tooltip="Discover Dublin Doap, delivering premium cannabis to Dublin and surrounding areas.">
        Convenient cannabis delivery in Dublin. Call 
        <a href="tel:+19255876777">(925)587-6777</a> to order today
        <a href="https://wa.me/18332893627?text=Hello,%20I%20would%20like%20to%20know%20more%20about%20your%20services." target="_blank" title="Chat with us via WhatsApp for fast and efficient communication.">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" 
                 style="width: 16px; height: 16px; margin-left: 5px; vertical-align: middle;">
        </a>
    </p>',
"hillsborough" => '<p data-tooltip="Discover Hillsborough Doap, delivering high-quality cannabis throughout Hillsborough and nearby neighborhoods.">
    Reliable cannabis delivery in Hillsborough. Call 
    <a href="tel:+16502930880">(650)293-0880</a>
    <a href="https://wa.me/18332893627?text=Hello,%20I%20would%20like%20to%20know%20more%20about%20your%20services." target="_blank" title="Chat with us via WhatsApp for fast and efficient communication.">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" 
             style="width: 16px; height: 16px; margin-left: 5px; vertical-align: middle;">
    </a>
</p>',
"livermore" => '<p data-tooltip="Discover Livermore Doap, delivering premium cannabis throughout Livermore and surrounding areas.">
    Quick cannabis delivery in Livermore. Call 
    <a href="tel:+19257186181">(925)718-6181</a> for details
    <a href="https://wa.me/18332893627?text=Hello,%20I%20would%20like%20to%20know%20more%20about%20your%20services." target="_blank" title="Chat with us via WhatsApp for fast and efficient communication.">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" 
             style="width: 16px; height: 16px; margin-left: 5px; vertical-align: middle;">
    </a>
</p>',
"lafayette" => '<p data-tooltip="Discover Lafayette Doap, delivering premium cannabis throughout Lafayette and nearby neighborhoods.">
    Fast cannabis delivery in Lafayette. Call 
    <a href="tel:+19258711333">(925)871-1333</a> to place an order
    <a href="https://wa.me/18332893627?text=Hello,%20I%20would%20like%20to%20know%20more%20about%20your%20services." target="_blank" title="Chat with us via WhatsApp for fast and efficient communication.">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" 
             style="width: 16px; height: 16px; margin-left: 5px; vertical-align: middle;">
    </a>
</p>',
"orinda" => '<p data-tooltip="Discover Orinda Doap, delivering premium cannabis to Orinda and nearby areas.">
    Trusted cannabis delivery in Orinda. Call 
    <a href="tel:+19258917800">(925)891-7800</a>
    <a href="https://wa.me/18332893627?text=Hello,%20I%20would%20like%20to%20know%20more%20about%20your%20services." target="_blank" title="Chat with us via WhatsApp for fast and efficient communication.">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" 
             style="width: 16px; height: 16px; margin-left: 5px; vertical-align: middle;">
    </a>
</p>',
"pittsburg" => '<p data-tooltip="Discover Pittsburg Doap, delivering high-quality cannabis throughout Pittsburg and nearby areas.">
    Easy cannabis delivery in Pittsburg. Call 
    <a href="tel:+19258258555">(925)825-8555</a>
    <a href="https://wa.me/18332893627?text=Hello,%20I%20would%20like%20to%20know%20more%20about%20your%20services." target="_blank" title="Chat with us via WhatsApp for fast and efficient communication.">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" 
             style="width: 16px; height: 16px; margin-left: 5px; vertical-align: middle;">
    </a>
</p>',
"pleasanthill" => '<p data-tooltip="Discover Pleasant Hill Doap, delivering high-quality cannabis throughout Pleasant Hill and nearby neighborhoods.">
    Fast cannabis delivery in Pleasant Hill. Reach us at 
    <a href="tel:+19258917800">(925)891-7800</a>
    <a href="https://wa.me/18332893627?text=Hello,%20I%20would%20like%20to%20know%20more%20about%20your%20services." target="_blank" title="Chat with us via WhatsApp for fast and efficient communication.">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" 
             style="width: 16px; height: 16px; margin-left: 5px; vertical-align: middle;">
    </a>
</p>',
"pleasanton" => '<p data-tooltip="Discover Pleasanton Doap, delivering premium cannabis throughout Pleasanton and nearby areas.">
    Convenient cannabis delivery in Pleasanton. Order now at 
    <a href="tel:+19255876777">(925)587-6777</a>
    <a href="https://wa.me/18332893627?text=Hello,%20I%20would%20like%20to%20know%20more%20about%20your%20services." target="_blank" title="Chat with us via WhatsApp for fast and efficient communication.">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" 
             style="width: 16px; height: 16px; margin-left: 5px; vertical-align: middle;">
    </a>
</p>',
"sanramon" => '<p data-tooltip="Discover San Ramon Doap, delivering premium cannabis throughout San Ramon and nearby neighborhoods.">
    Reliable cannabis delivery in San Ramon. Call 
    <a href="tel:+19253656030">(925)365-6030</a>
    <a href="https://wa.me/18332893627?text=Hello,%20I%20would%20like%20to%20know%20more%20about%20your%20services." target="_blank" title="Chat with us via WhatsApp for fast and efficient communication.">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" 
             style="width: 16px; height: 16px; margin-left: 5px; vertical-align: middle;">
    </a>
</p>',
"walnutcreek" => '<p data-tooltip="Discover Walnut Creek Doap, delivering high-quality cannabis throughout Walnut Creek and nearby neighborhoods.">
    Quality cannabis delivery in Walnut Creek. Contact us at 
    <a href="tel:+19254642075">(925)464-2075</a>
    <a href="https://wa.me/18332893627?text=Hello,%20I%20would%20like%20to%20know%20more%20about%20your%20services." target="_blank" title="Chat with us via WhatsApp for fast and efficient communication.">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" 
             style="width: 16px; height: 16px; margin-left: 5px; vertical-align: middle;">
    </a>
</p>',
"sunol" => '<p data-tooltip="Discover Sunol Doap, delivering premium cannabis throughout Sunol and nearby neighborhoods.">
    Fast cannabis delivery in Sunol. Order at 
    <a href="tel:+19257186181">(925)718-6181</a> today
    <a href="https://wa.me/18332893627?text=Hello,%20I%20would%20like%20to%20know%20more%20about%20your%20services." target="_blank" title="Chat with us via WhatsApp for fast and efficient communication.">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" 
             style="width: 16px; height: 16px; margin-left: 5px; vertical-align: middle;">
    </a>
</p>',
"california" => '<p data-tooltip="Discover California Doap, delivering premium cannabis statewide.">
    Statewide cannabis delivery in California. Call us at 
    <a href="mailto:california@doap.com">california@doap.com</a>
    <a href="https://wa.me/18332893627?text=Hello,%20I%20would%20like%20to%20know%20more%20about%20your%20services." target="_blank" title="Chat with us via WhatsApp for fast and efficient communication.">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" 
             style="width: 16px; height: 16px; margin-left: 5px; vertical-align: middle;">
    </a>
</p>',
"norcal" => '<p data-tooltip="Discover NorCal Doap, delivering premium cannabis throughout Northern California.">
    Top-tier cannabis delivery in Northern California. Email us at 
    <a href="mailto:norcal@doap.com">norcal@doap.com</a>
    <a href="https://wa.me/18332893627?text=Hello,%20I%20would%20like%20to%20know%20more%20about%20your%20services." target="_blank" title="Chat with us via WhatsApp for fast and efficient communication.">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" 
             style="width: 16px; height: 16px; margin-left: 5px; vertical-align: middle;">
    </a>
</p>',
];


// Define long descriptions for tooltips
$longDescriptions = [
    "alamo" => "Discover Alamo Doap, delivering top-quality cannabis throughout Alamo and nearby areas, including the historic Alamo Square Fountain. Enjoy 1-hour delivery from 9 AM to 9 PM, 7 days a week.",
    "burlingame" => "Burlingame Doap brings premium cannabis to Burlingame and surrounding neighborhoods, inspired by the charm of Washington Park. Count on 1-hour delivery daily from 9 AM to 9 PM.",
    "campbell" => "Campbell Doap provides exceptional cannabis products across Campbell and nearby areas, with a nod to the iconic Campbell Water Tower. Get your cannabis in 1 hour, available daily from 9 AM to 9 PM.",
    "castrovalley" => "Castro Valley Doap offers top-notch cannabis delivery in Castro Valley and nearby communities, near the scenic Lake Chabot. We provide 1-hour delivery from 9 AM to 9 PM every day.",
    "concord" => "Concord Doap is your go-to for premium cannabis delivery in Concord and surrounding towns, inspired by the Concord Pavilion. Enjoy fast, 1-hour delivery from 9 AM to 9 PM, 7 days a week.",
    "danville" => "Danville Doap delivers organic cannabis across Danville and nearby neighborhoods, with a connection to the Iron Horse Trail. We guarantee 1-hour delivery daily from 9 AM to 9 PM.",
    "dublin" => "Dublin Doap provides the best cannabis delivery in Dublin and the surrounding Tri-Valley area, inspired by Emerald Glen Park. Enjoy 1-hour delivery every day from 9 AM to 9 PM.",
    "hillsborough" => "Hillsborough Doap delivers quality cannabis products across Hillsborough and neighboring areas, with roots near Carolands Chateau. Count on 1-hour delivery from 9 AM to 9 PM, 7 days a week.",
    "livermore" => "Livermore Doap serves Livermore and the nearby wine country with premium cannabis, inspired by the beauty of local vineyards. Get fast 1-hour delivery daily from 9 AM to 9 PM.",
    "lafayette" => "Lafayette Doap offers cannabis delivery to Lafayette and nearby towns, inspired by the serene Lafayette Reservoir. We offer 1-hour delivery from 9 AM to 9 PM, 7 days a week.",
    "orinda" => "Orinda Doap delivers high-quality cannabis to Orinda and nearby areas, with a nod to the iconic Orinda Theatre. Enjoy quick 1-hour delivery daily from 9 AM to 9 PM.",
    "pittsburg" => "Pittsburg Doap provides exceptional cannabis delivery in Pittsburg and surrounding regions, inspired by Black Diamond Mines. Get 1-hour delivery every day from 9 AM to 9 PM.",
    "pleasanthill" => "Pleasant Hill Doap delivers premium cannabis to Pleasant Hill and neighboring areas, near the tranquil Paso Nogal Park. We provide 1-hour delivery daily from 9 AM to 9 PM.",
    "pleasanton" => "Pleasanton Doap serves Pleasanton and nearby towns with superior cannabis delivery, inspired by the Pleasanton Farmers' Market. Enjoy fast, 1-hour delivery from 9 AM to 9 PM, 7 days a week.",
    "sanramon" => "San Ramon Doap delivers outstanding cannabis across San Ramon and nearby areas, near the vibrant Central Park. We guarantee 1-hour delivery daily from 9 AM to 9 PM.",
    "walnutcreek" => "Walnut Creek Doap provides premium cannabis delivery in Walnut Creek and surrounding areas, near Broadway Plaza. Count on 1-hour delivery every day from 9 AM to 9 PM.",
    "sunol" => "Sunol Doap delivers cannabis to Sunol and nearby communities, inspired by the scenic Sunol Water Temple. Enjoy 1-hour delivery from 9 AM to 9 PM, 7 days a week.",
    "california" => "California Doap serves communities across the state, delivering top cannabis products from cities to rural areas. Get 1-hour delivery daily from 9 AM to 9 PM.",
    "norcal" => "Norcal Doap brings cannabis delivery across Northern California, covering the Bay Area, Redwoods, and beyond. Enjoy 1-hour delivery every day from 9 AM to 9 PM."
];


// Get the short and long description based on the AgencyUserId
$shortDescription = $shortDescriptions[$AgencyUserId] ?? "Reliable cannabis delivery service.";
$longDescription = $longDescriptions[$AgencyUserId] ?? "Our reliable cannabis delivery service brings quality products to you with convenience and ease.";

// Wrap short description with long description as tooltip
echo "<div class='delivery-description'><p data-tooltip=\"$longDescription\">$shortDescription</p></div>";
?>

