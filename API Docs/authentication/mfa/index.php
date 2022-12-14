<?php

require_once '../../docs_header.php';

?>
<!-- left -->
<div
    class="flex flex-col sm:max-w-xs px-8 py-8 items-start justify-start gap-6 border-b sm:border-b-0 sm:border-r border-gray-100">
    <!--<div>
                <input placeholder="search"
                    class="px-4 py-2 rounded-xl text-sm text-gray-900 border border-gray-100 focus:ring-0 focus:outline-none">
            </div>-->

    <div class="flex flex-col gap-2 w-full">
        <div href="https://docs.devrift.co/config" class="text-gray-500 inline-flex justify-between items-top w-full">
            <label class="font-bold">API Configuration</label>

            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </div>

        <div class="flex flex-col items-center justify-start max-w-xs text-ellipsis overflow-hidden">
            <a href="https://docs.devrift.co/quick-start"
                class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
                Setting up your API
            </a>
            <a href="https://docs.devrift.co/api-keys"
                class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
                API Keys
            </a>
            <a href="https://docs.devrift.co/environments"
                class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
                Test Environment
            </a>
            <a href="https://docs.devrift.co/going-live"
                class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
                Going Live
            </a>
            <a href="https://docs.devrift.co/versioning"
                class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
                API Versioning
            </a>

        </div>
    </div>

    <div class="flex flex-col gap-2 w-full">
        <div href="https://docs.devrift.co/authentication"
            class="text-gray-500 inline-flex justify-between items-top w-full">
            <label class="font-bold">Authentication</label>

            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </div>

        <div class="flex flex-col items-center justify-start text-ellipsis overflow-hidden">
            <a href="https://docs.devrift.co/authentication/activation-mail"
                class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
                Activation Emails
            </a>
            <a href="https://docs.devrift.co/authentication/mfa"
                class="text-indigo-600 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
                Mutli Factor Authentication (MFA)
            </a>
            <a href="https://docs.devrift.co/authentication/hsm"
                class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
                Integration with Security Keys (HSM)
            </a>
            <a href="https://docs.devrift.co/authentication/sms"
                class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
                SMS with MFA
            </a>
            <a href="https://docs.devrift.co/authentication/mail"
                class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
                Emails with MFA
            </a>
            <a href="https://docs.devrift.co/authentication/dual-mfa"
                class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
                Dual MFA
            </a>
            <a href="https://docs.devrift.co/authentication/custom-mfa"
                class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
                Custom MFA
            </a>

        </div>
    </div>


    <div class="flex flex-col gap-2 w-full">
        <div href="https://docs.devrift.co/prevention"
            class="text-gray-500 inline-flex justify-between items-top w-full hover:text-indigo-600">
            <label class="font-bold">Attack Prevention</label>

            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </div>

        <div class="flex flex-col items-center justify-start max-w-xs text-ellipsis overflow-hidden">
            <a href="https://docs.devrift.co/prevention/brute-force"
                class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
                Brute Force Detection (BFD)
            </a>
            <a href="https://docs.devrift.co/prevention/mitm"
                class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
                Man-in-the-Middle Prevention (MITM)
            </a>
            <a href="https://docs.devrift.co/prevention/breach"
                class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
                Prevention of Data Breaches
            </a>
            <a href="https://docs.devrift.co/prevention/halt"
                class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
                Using HALT to stop Attacks
            </a>
            <!--<a href="#"
						class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
						Title Title Title Title Title Title
					</a>
					<a href="#"
						class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
						Title Title Title Title
					</a>
					<a href="#"
						class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
						Title Title Title Title Title Title
					</a>-->

        </div>
    </div>


    <div class="flex flex-col gap-2 w-full">
        <div href="#" class="text-gray-500 inline-flex justify-between items-top w-full hover:text-indigo-600">
            <label class="font-bold">Logging</label>

            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </div>

        <div class="flex flex-col items-center justify-start max-w-xs text-ellipsis overflow-hidden">
            <a href="https://docs.devrift.co/logging/quick-start"
                class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
                Quick Start Guide
            </a>
            <a href="https://docs.devrift.co/logging/sensitive-actions"
                class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
                Logging Sensitive Actions
            </a>
            <a href="https://docs.devrift.co/logging/actions"
                class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
                Logging everything else
            </a>
            <a href="https://docs.devrift.co/logging/usage"
                class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
                Using Logs to Detect Attacks
            </a>
            <a href="https://docs.devrift.co/logging/user-portal"
                class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
                Allowing Users to View Logs
            </a>

        </div>
    </div>
</div>
<!-- Paid Feature Tag
<span class="inline-flex items-center justify-center rounded-full bg-amber-100 px-2.5 py-0.5 text-amber-700">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="-ml-1 mr-1.5 h-4 w-4">
        <path stroke-linecap="round" stroke-linejoin="round"
            d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
    </svg>

    <p class="whitespace-nowrap text-sm">Paid Feature</p>
</span>
-->
<!-- Free Feature Tag
<span class="inline-flex items-center justify-center rounded-full bg-emerald-100 px-2.5 py-0.5 text-emerald-700">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
        stroke="currentColor" class="-ml-1 mr-1.5 h-4 w-4">
        <path stroke-linecap="round" stroke-linejoin="round"
            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
    </svg>
    <p class="whitespace-nowrap text-sm">Free Feature</p>
</span>
-->

<!-- doc -->
<div class="flex flex-col shrink gap-6 px-12 py-8">

    <div>
        <p class="text-xl font-bold inline-flex">Multi Factor Authentication&nbsp;</p>

        <span
            class="inline-flex items-center justify-center rounded-full bg-emerald-100 px-2.5 py-0.5 text-emerald-700">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="-ml-1 mr-1.5 h-4 w-4">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>

            <p class="whitespace-nowrap text-sm">Free Feature</p>
        </span>
        <span class="inline-flex items-center justify-center rounded-full bg-amber-100 px-2.5 py-0.5 text-amber-700">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="-ml-1 mr-1.5 h-4 w-4">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
            </svg>

            <p class="whitespace-nowrap text-sm">Paid Feature</p>
        </span>
    </div>

    <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4" role="info">
        <p class="font-bold">Information</p>
        <p>MFA via Emails is Free, MFA via SMS and Voice is a Paid Feature available as a pay-as-you-go (PaYG) plan to
            premium developers.</p>
    </div>

    <p class="text-gray-500">
        Multi Factor Authentication (MFA) is a security feature that requires a user to provide more than one form of
        authentication when logging in.
        <br>
        You can use the DevRIFT API to implement MFA easily for your users.
    </p>

    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4" role="alert">
        <p class="font-bold">Warning</p>
        <p>
            You should use a Test Environment to start the MFA Integration Process.
        </p>
    </div>

    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4" role="alert">
        <p class="font-bold">Danger</p>
        <p>
            While you are in test mode, you can only send MFA emails, texts and calls to verified emails and phone
            numbers.
        </p>
    </div>

    <p class="text-xl font-bold inline-flex">Sending an MFA Code via Emails&nbsp;</p>

    <p class="text-gray-500">
        Example Code to send an MFA Email:
    </p>

    <code class="block text-gray-500 bg-gray-100 px-2 whitespace-pre-wrap rounded">
		// Setting your credentials
		\DevRIFT\DevRIFT::setApiKeys("YOUR_PUBLISHER_KEY", "YOUR_SECRET_KEY");
		&nbsp;
		// Sending an MFA Email
        \DevRIFT\DevRIFT::sendMFAEmail(YOUR_USERS_EMAIL);
		&nbsp;
        /*
        What this does:
        - This will send a POST request to https://api.devrift.co/
        - The request will contain your Publisher Key and Secret Key
        - The API will send an MFA Code to the email address provided
        */
        &nbsp;
	</code>

    <p class="text-xl font-bold inline-flex">Sending an MFA Code via SMS&nbsp;</p>

    <p class="text-gray-500">
        Example Code to send an MFA SMS:
    </p>

    <code class="block text-gray-500 bg-gray-100 px-2 whitespace-pre-wrap rounded">
        // Setting your credentials
        \DevRIFT\DevRIFT::setApiKeys("YOUR_PUBLISHER_KEY", "YOUR_SECRET_KEY");
		&nbsp;
		// Sending an MFA SMS
        \DevRIFT\DevRIFT::sendMFAText(YOUR_USERS_EMAIL);
		&nbsp;
        /*
        What this does:
        - This will send a POST request to https://api.devrift.co/
        - The request will contain your Publisher Key and Secret Key
        - The API will send an MFA Code to the phone number provided
        */
        &nbsp;
	</code>

    <p class="text-xl font-bold inline-flex">Sending an MFA Code via Voice Call&nbsp;</p>

    <p class="text-gray-500">
        Example Code to send an MFA Voice Call:
    </p>

    <code class="block text-gray-500 bg-gray-100 px-2 whitespace-pre-wrap rounded">
        // Setting your credentials
        \DevRIFT\DevRIFT::setApiKeys("YOUR_PUBLISHER_KEY", "YOUR_SECRET_KEY");
		&nbsp;
		// Sending an MFA Voice Call
        \DevRIFT\DevRIFT::sendMFAVoice(YOUR_USERS_EMAIL);
		&nbsp;
        /*
        What this does:
        - This will send a POST request to https://api.devrift.co/
        - The request will contain your Publisher Key and Secret Key
        - The API will call phone number provided and give them an MFA Code
        */
    </code>

    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4" role="alert">
        <p class="font-bold">Danger</p>
        <p>
            Both the SMS and Voice Call Features require the phone number to be provided in the E.164 format.
            <br>
            See the Documentation on it here: <a href="https://docs.devrift.co/authentication/sms#E164" class="text-indigo-600">E.164 Format</a>
        </p>
    </div>

    <p class="text-xl font-bold inline-flex">Verifying an MFA Code&nbsp;</p>

    <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4" role="info">
        <p class="font-bold">Information</p>
        <p>
            The MFA Verification is the same for all MFA Methods.
        </p>
    </div>

    <p class="text-gray-500">
        You must then show an inout form to allow a user to input their MFA Code.
        <br>
        The input form should send a POST request to <strong class="text-indigo-600">your server</strong>
        <br>
        You should then verify the MFA Code using the following code:
    </p>

    <code class="block text-gray-500 bg-gray-100 px-2 whitespace-pre-wrap rounded">
        // Setting your credentials
        \DevRIFT\DevRIFT::setApiKeys(YOUR_PUBLISHER_KEY, YOUR_SECRET_KEY);
        &nbsp;
        // Setting Variables
        $mfa_code = $_POST['mfa_code'];
        define('USER_EMAIL', "YOUR USER'S EMAIL")
        &nbsp;
        // Verifying the MFA Code
        if (\DevRIFT\DevRIFT::verifyMFA(USER_EMAIL, $mfa_code)) {
            // MFA Code is valid
        } else {
            // MFA Code is invalid
        }
        &nbsp;
    </code>

    <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4" role="info">
        <p class="font-bold">Information</p>
        <p>
            The following code:
            <br><br>
            <code>
                \DevRIFT\DevRIFT::verifyMFA(USER_EMAIL, MFA_CODE)
            </code>
            <br><br>
            returns a boolean value. True indicates the MFA Code is valid, False indicates the MFA Code is invalid.
        </p>
    </div>

    <a class="inline-flex items-center rounded border border-indigo-600 bg-indigo-600 px-8 py-3 text-white hover:bg-indigo-700 hover:text-white focus:outline-none focus:ring active:text-indigo-500"
        href="https://docs.devrift.co/authentication/hsm">
        <span class="text-sm font-medium"> Next: Authentication | Security Key (HSM) Integration</span>

        <svg class="ml-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
        </svg>
    </a>

</div>

</div>


</body>

</html>