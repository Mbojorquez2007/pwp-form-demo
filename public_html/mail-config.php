<?php

/**
 * mailer-config.php
 * This file contains your reCAPTCHA keys, and your recipients email addresses.
 *
 * @param string $siteKey your public reCAPTCHA API key
 * @param string $secret your secret reCAPTCHA API key
 * @param array $MAIL_RECIPIENTS array of email addresses and corresponding recipient names to send form responses to
 *
 * This file has been gitignored!
 **/

// your Google reCAPTCHA keys here
$siteKey = '6Lel6y4UAAAAAGoVy8IwW4gXvxHKqNecTJlXE69K';
$secret = '6Lel6y4UAAAAACJo2Aqddk8036ih7_5-iAlfyGh6
Step 1: Client side integration
';

/**
 * attach the recipients to the message
 * notice this an array that can include or omit the the recipient's real name
 * use the recipients' real name where possible; this reduces the probability of the Email being marked as spam
 **/
$MAIL_RECIPIENTS = ["mail@email.com" => "Re"];