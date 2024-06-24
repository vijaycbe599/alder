<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\RequestOptions;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

class AuthController extends Controller
{

    
    public function index(Request $request)
    {
    //     $temp = Crypt::encryptString('FaC920edff534471AE75FB17806bC685');
    // dd($temp);
        return view('home');

    }

    public function register()
    {
        return view('register');
    }
    public function submitForm(Request $request)
    {
        $messages = [
            "FirstName.required" => "This Field is required",
            "LastName.required" => "This Field is required",
            "Email.required" => "This Field is required",
            "MobileNumber1__c.required" => "This Field is required",
            "LeadOrigin__c.required" => "This Field is required",
            "Nationality__c.required" => "This Field is required",
            "g-recaptcha-response.required" => "This Field is required",
            
        ];
        // validate the form data
        $validator = Validator::make($request->all(), [
            'FirstName' => ['required','min:3','max:155'],
            'LastName' => ['required','min:1','max:155'],
            'Email' => ['required','email','min:2','max:155'],
            'MobileNumber1__c' => ['required'],
            'LeadOrigin__c' => ['required'],
            'Nationality__c' => ['required'],
            'g-recaptcha-response' => ['required','captcha'],
            
        ], $messages);
           
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $ipAddress = $request->ip();
        $client = new Client();

        if($request->LeadOrigin__c == "United Arab Emirates"){
            $SalesOrigin__c = "Domestic";
            $Offer1__c = "VerdesByHavenLaunch2024";
        }else{
            $SalesOrigin__c = "International";
            $Offer1__c = "VerdesByHavenLaunchINT2024";
        }

        if($request->Nationality__c == "United Arab Emirates"){
            $ResidentStatus__c = "Resident";
        }else{
            $ResidentStatus__c = "Non-Resident";
        }
        $Project__c = "Verdes by Haven";
       
        
        
        // API endpoint and request body
    //    $endpoint = 'https://x-ald-sferp-api-sit.de-c1.cloudhub.io/api/v1/web/createlead';
        $endpoint = 'https://apihub.aldar.com/sferp/v1/web/createlead';
        $body = [
            'FirstName' => $request->FirstName,
            'LastName' => $request->LastName,
            'Email' => $request->Email,
            'MobileCountryCode__c' => $request->MobileCountryCode__c,
            'MobileNumber1__c' => $request->MobileNumber1__c,
            'LeadOrigin__c' => $request->LeadOrigin__c,
            'SalesOrigin__c' => $SalesOrigin__c,
            'CustomerIP__c' => $ipAddress,
            'CustomerIPLocation__c' => $request->CustomerIPLocation__c,
            'Offer1__c' => $Offer1__c,
            'Project__c' => $Project__c,
            'UnitType__c' => 'Apartment',
            'Nationality__c' => $request->Nationality__c,
            'ResidentStatus__c' => $ResidentStatus__c,
            'PropertyUsage__c' => 'Residential Sale',
            'SalesType__c' => 'Residential Sale',
            'RecordTypeId' => '0128d000001HSKeAAO',
            'BuyRent__c' => 'Buy',
            'LeadSource' => 'Online',
            'EnquiryCategory__c' => 'Aldar Websites',
            'EnquiryTrigger__c' => 'Aldar.com',
            'PropertyReadiness__c' => 'Over one year',
            'LanguagePreference__c' => 'English',
            'CountryOfResidence__c' => $request->LeadOrigin__c
        ];

        try {
            // Send POST request using Guzzle
            $response = $client->post($endpoint, [
                'headers' => [
                    'client_id' => Crypt::decryptString(env('client_id')),
                    'client_secret' => Crypt::decryptString(env('client_secret')),
                    'Content-Type' => 'application/json',
                ],
                'json' => $body,
            ]);

            // Get response body as string
            $responseBody = $response->getBody()->getContents();

            $fileName = 'aldarlog.txt';  // The name of your text file
            // Convert the array to a JSON string
            $contentToAppend = date('Y-m-d H:i:s')."\n".json_encode($body) . "\n\n";
            // Append the JSON string to the file
            Storage::append($fileName, $contentToAppend);

            return back()->with('success', 'Your submission has been received successfully. Thank you for being so interested. We will get back to you as soon as we can.');
        } catch (RequestException $e) {
            // Handle request exception
            return response()->json(['error' => 'Request failed: ' . $e->getMessage()], 500);
        }
        // Redirect back with success message
    //return back()->with('success', 'Thank you for your message! We will get back to you soon.');
    }

    public function phone_validation(Request $request)
    {

        $apiKey = Crypt::decryptString(env('APIKEY_ENCRYPTION'));
        //$phoneNumber = '9180840232';
        $phoneNumber = $request->countryCode . $request->phoneNumber;
        
        $url = "https://api.addressy.com/PhoneNumberValidation/Interactive/Validate/v2.20/json3.ws?Key={$apiKey}&phone={$phoneNumber}";

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        if ($httpCode == 200) {
            $data = json_decode($response, true);
            // Process the response data as needed
            return response()->json($data);
        } else {
            // Handle HTTP errors
            return response()->json(['error' => 'Failed to fetch data from API'], $httpCode);
        }
    
    }

    public function email_validation(Request $request)
    {
        
            $decryptedkey = Crypt::decryptString(env('APIKEY_ENCRYPTION'));
                $curl = curl_init();
                curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://api.addressy.com/EmailValidation/Interactive/Validate/v2.00/json3.ws',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => array('email' => $request->email,'key' => $decryptedkey),
                CURLOPT_HTTPHEADER => array(
                'Cookie: GCLB=CIeRvrT515uvtAEQAw'
                ),
                ));

                $response = curl_exec($curl);
                $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        
                curl_close($curl);
        
                if ($httpCode == 200) {
                    $data = json_decode($response, true);
                    // Process the response data as needed
                    return response()->json($data);
                } else {
                    // Handle HTTP errors
                    return response()->json(['error' => 'Failed to fetch data from API'], $httpCode);
                }
    }
    

}