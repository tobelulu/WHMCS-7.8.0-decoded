<?php
/*
 * @ PHP 5.6
 * @ Decoder version : 1.0.0.1
 * @ Release on : 24.03.2018
 * @ Website    : http://EasyToYou.eu
 */

$this->layout("layouts/learn", $serviceOffering);
$this->start("nav-tabs");
echo "<li class=\"active\" role=\"presentation\">\n    <a aria-controls=\"home\" data-toggle=\"tab\" href=\"#about\" role=\"tab\">About</a>\n</li>\n<li role=\"presentation\">\n    <a aria-controls=\"plans\" data-toggle=\"tab\" href=\"#filtering\" role=\"tab\">Email Filtering</a>\n</li>\n<li role=\"presentation\">\n    <a aria-controls=\"plans\" data-toggle=\"tab\" href=\"#archiving\" role=\"tab\">Email Archiving</a>\n</li>\n<li role=\"presentation\">\n    <a aria-controls=\"pricing\" data-toggle=\"tab\" href=\"#pricing\" role=\"tab\">Pricing</a>\n</li>\n";
$this->end();
$this->start("content-tabs");
echo "<div class=\"tab-pane active\" id=\"about\" role=\"tabpanel\">\n    <div class=\"content-padded spamexperts\">\n        <h3>Professional Email Security Solutions</h3>\n        <h4>Block nearly 100% of viruses, malware and spam before they ever reach your inbox</h4>\n        <br>\n        <p>Spam can make email a frustrating experience. Now you can offer your clients the solution: SpamExperts Cloud Based email security services, featuring unmatched accuracy, efficiency and user-friendliness.</p>\n\n        <div class=\"row solutions\">\n            <div class=\"col-sm-4\">\n                <div class=\"item\">\n                    <h4>Incoming Email Filtering</h4>\n                    <div class=\"icon\">\n                        <i class=\"far fa-envelope-open\"></i>\n                    </div>\n                    <span>Protect your network</span>\n                    <p>Eliminate Spam & Viruses from email before they ever reach your network</p>\n                </div>\n            </div>\n            <div class=\"col-sm-4\">\n                <div class=\"item\">\n                    <h4>Outgoing Email Filtering</h4>\n                    <div class=\"icon\">\n                        <i class=\"fas fa-envelope-open\"></i>\n                    </div>\n                    <span>Prevent IP Blacklisting</span>\n                    <p>Stop Spam & Viruses from unknowingly leaving your network</p>\n                </div>\n            </div>\n            <div class=\"col-sm-4\">\n                <div class=\"item\">\n                    <h4>Email Archiving</h4>\n                    <div class=\"icon\">\n                        <i class=\"fas fa-cube\"></i>\n                    </div>\n                    <span>Backup and Compliance</span>\n                    <p>Never lose an email again and ensure legal compliance</p>\n                </div>\n            </div>\n        </div>\n\n        <p><small><strong>About SpamExperts</strong><br>Founded in 2005, SpamExperts is a leading email security provider for Web hosts, ISPs/Telcos and IT Resellers all over the world. Based in Amsterdam, the Netherlands, the SpamExperts mission is to secure email worldwide.</small></p>\n\n    </div>\n</div>\n<div class=\"tab-pane\" id=\"filtering\" role=\"tabpanel\">\n    <div class=\"content-padded spamexperts\">\n\n        <h3>What is Email Filtering?</h3>\n\n        <br>\n\n        <p>There are two flavours of email filtering which you can offer independently or combined:</p>\n\n        <p><strong>Incoming Email Filtering</strong> is a gateway solution which filters all inbound email and eliminates spam & viruses from incoming mail. The SpamExperts filtering solutions can achieve a near 100% accuracy rate.</p>\n\n        <p><strong>Outgoing Email Filtering</strong> prevents your IP(s) from getting blacklisted and ensures all your outgoing email always safely arrives where it should. Outgoing filtering will block spam & viruses from ever leaving your network.</p>\n\n        <div class=\"spamexperts how-it-works\">\n\n            <h3>How it works</h3>\n\n            <br>\n\n            <p>Emails are securely analyzed and scanned by the fully redundant SpamExperts cloud in real time. Threats are quarantined and clean email is sent to the destination mail server.</p>\n            <p>You and your clients remain in full-control through the multi-tenant, multi-lingual, user-friendly SpamPanel control-panel. Plus by using SpamExperts, email continuity is optimized too.</p>\n\n        </div>\n\n    </div>\n\n</div>\n\n<div class=\"tab-pane\" id=\"archiving\" role=\"tabpanel\">\n    <div class=\"content-padded spamexperts\">\n\n        <h3>What is Email Archiving?</h3>\n\n        <br>\n\n        <p>Email Archiving preserves and protects all inbound and outbound email messages for later access. It is a great way to recover lost or accidentally deleted emails, accelerate audit response, secure intellectual property emails and attachments, as well as for “eDiscovery” purposes in case of litigation.</p>\n\n        <p>With Email Archiving from SpamExperts, users get 10GB of compressed email storage and a powerful control panel to manage their archiving from.</p>\n\n        <div class=\"spamexperts how-it-works\">\n\n            <h3>Why is Archiving Important?</h3>\n\n            <br>\n\n            <p>Email Archiving is a critical tool to preserve a secure backup of all email and be legally compliant. As email exchanges have judicial power and are legally binding, so email compliance has become an extremely important concern for organizations. Therefore it is mandatory in certain industries to preserve a secure backup of all email messages and be legally compliant.</p>\n\n        </div>\n\n    </div>\n\n</div>\n<div class=\"tab-pane\" id=\"pricing\" role=\"tabpanel\">\n    <div class=\"content-padded\">\n        ";
if ($feed->isNotAvailable()) {
    echo "            <div class=\"pricing-login-overlay\">\n                <p>To view pricing, you must first register or login to your MarketConnect account.</p>\n                <button type=\"button\" class=\"btn btn-default btn-sm btn-login\">Login</button> <button type=\"button\" class=\"btn btn-default btn-sm btn-register\">Create Account</button>\n            </div>\n        ";
}
echo "        <div class=\"spamexperts-pricing\">\n            <div class=\"item\">\n                <h4>\n                    Incoming Filtering\n                    <span class=\"pull-right text-center\">";
echo $feed->getCostPrice("spamexperts_incoming");
echo "/mo<br>Your Cost Price</span>\n                </h4>\n                <i class=\"fas fa-check\"></i>\n                Easy Setup & Configuration\n                <br>\n                <i class=\"fas fa-check\"></i>\n                Intelligent Auto-learning Filtering with nearly 100% Accuracy\n                <br>\n                <i class=\"fas fa-check\"></i>\n                Includes up to 1000 email boxes per domain\n                <div class=\"pull-right\">\n                    RRP\n                    ";
echo $feed->getRecommendedRetailPrice("spamexperts_incoming");
echo "/mo\n                </div>\n            </div>\n            <div class=\"item\">\n                <h4>\n                    Outgoing Filtering\n                    <span class=\"pull-right text-center\">";
echo $feed->getCostPrice("spamexperts_outgoing");
echo "/mo<br>Your Cost Price</span>\n                </h4>\n                <i class=\"fas fa-check\"></i>\n                Upgrade your email offering and prevent IP blacklisting\n                <br>\n                <i class=\"fas fa-check\"></i>\n                Protect the reputation of your brand and IT-systems\n                <br>\n                <i class=\"fas fa-check\"></i>\n                Includes up to 1000 email boxes per domain\n                <div class=\"pull-right\">\n                    RRP\n                    ";
echo $feed->getRecommendedRetailPrice("spamexperts_outgoing");
echo "/mo\n                </div>\n            </div>\n            <div class=\"item\">\n                <h4>\n                    Email Archiving\n                    <span class=\"pull-right text-center\">";
echo $feed->getCostPrice("spamexperts_incomingoutgoingarchiving");
echo "/mo<br>Your Cost Price</span>\n                </h4>\n                <i class=\"fas fa-check\"></i>\n                Includes Incoming & Outgoing Filtering\n                <br>\n                <i class=\"fas fa-check\"></i>\n                Never lose an email again!\n                <br>\n                <i class=\"fas fa-check\"></i>\n                Achieve legal compliance: emails are compressed, encrypted and securely stored\n                <br>\n                <i class=\"fas fa-check\"></i>\n                Includes 10GB of compressed email archiving storage\n                <div class=\"pull-right\">\n                    RRP\n                    ";
echo $feed->getRecommendedRetailPrice("spamexperts_incomingoutgoingarchiving");
echo "/mo\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n<div class=\"tab-pane\" id=\"activate\" role=\"tabpanel\">\n    ";
$this->insert("shared/configuration-activate", array("currency" => $currency, "service" => $service, "firstBulletPoint" => "Offer all SpamExperts Services", "landingPageRoutePath" => "store-emailservices-index", "serviceOffering" => $serviceOffering, "billingCycles" => $billingCycles, "products" => $products, "serviceTerms" => $serviceTerms));
echo "</div>\n";
$this->end();

?>