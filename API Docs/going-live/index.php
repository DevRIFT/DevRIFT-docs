<?php

require_once '../docs_header.php';

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
                class="text-indigo-600 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
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
                class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
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
<!-- doc -->
<div class="flex flex-col shrink gap-6 px-12 py-8">

    <p class="text-xl font-bold">Going Live</p>

    <p class="text-gray-500">
        When you are ready to go live with your Application, start using your Live Publisher Key in combination with
        your Live Secret Key.
    </p>

    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4" role="alert">
        <p class="font-bold">Warning</p>
        <p>Before going live, make sure you have properly configured your service to keep your credentials safe. Anyone
            with these credentials can impersonate you.
        </p>
    </div>

    <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4" role="info">
        <p class="font-bold">Information</p>
        <p>DevRIFT does not have access to your Secret Keys and hence we cannot assist you in the event that you lose
            access to them. You must roll your keys if you lose access to them.</p>
    </div>

    <!--<p class="text-gray-500">
        Configuration of API Keys can also be made in the <a href="https://dashboard.devrift.co" class="text-indigo-600">dashboard</a>
    </p>-->


    <a class="inline-flex items-center rounded border border-indigo-600 bg-indigo-600 px-8 py-3 text-white hover:bg-indigo-700 hover:text-white focus:outline-none focus:ring active:text-indigo-500"
        href="https://docs.devrift.co/versioning">
        <span class="text-sm font-medium"> Next: API Versioning </span>

        <svg class="ml-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
        </svg>
    </a>

</div>

</div>


</body>

</html>