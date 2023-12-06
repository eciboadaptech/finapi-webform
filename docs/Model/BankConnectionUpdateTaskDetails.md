# # BankConnectionUpdateTaskDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bank_connection_id** | **int** | Bank connection identifier. |
**import_new_accounts** | **bool** | Whether new accounts that have not yet been imported will be imported or not.&lt;br/&gt;&lt;br/&gt;By setting this parameter to true, we will try to get new accounts the user might have at the bank. The user will have a possibility to stop the process once he finds the accounts he is interested in have been imported. The set of newly imported accounts can be limited by using \&quot;accountTypes\&quot; parameter.&lt;br/&gt;&lt;br/&gt;&lt;strong&gt;NOTE:&lt;/strong&gt; This parameter is deprecated. Please use &lt;code&gt;importNewAccountsMode&lt;/code&gt; in the future. Not setting or setting this parameter to &lt;code&gt;false&lt;/code&gt; is the same as not setting or setting &lt;code&gt;importNewAccountsMode&#x3D;SKIP&lt;/code&gt;. Setting this parameter to &lt;code&gt;true&lt;/code&gt; is the same as setting &lt;code&gt;importNewAccountsMode&#x3D;CONDITIONAL&lt;/code&gt;. | [optional] [default to false]
**import_new_accounts_mode** | **string** | This parameter defines how we should deal with new accounts that the user might have at the bank but which have not gotten imported yet.&lt;br/&gt;The user will be able to stop the process once he finds his relevant accounts imported. The set of newly imported accounts can get limited also by using the \&quot;accountTypes\&quot; parameter.&lt;br/&gt;&lt;br/&gt;&lt;strong&gt;Import new accounts mode:&lt;/strong&gt;&lt;br/&gt;&amp;bull; &lt;code&gt;SKIP&lt;/code&gt; - no new accounts will get imported;&lt;br/&gt;&amp;bull; &lt;code&gt;CONDITIONAL&lt;/code&gt; -  For the &lt;code&gt;XS2A&lt;/code&gt; interface new accounts will get imported only if the stored consent supports this capability (see: &lt;code&gt;consent.supportsImportNewAccounts &#x3D; true&lt;/code&gt; in Access). For the other interfaces, new accounts will always get imported.&lt;br/&gt;&amp;bull; &lt;code&gt;FORCED&lt;/code&gt; - For the &lt;code&gt;XS2A&lt;/code&gt; interface, the stored consent will get deleted before the update is triggered, in case it doesn&#39;t support importing new accounts. For the other interfaces, new accounts will always get imported.&lt;br/&gt;&lt;br/&gt;&lt;strong&gt;NOTE:&lt;/strong&gt; No matter the option chosen, a web form can still be generated in the background. | [default to 'SKIP']
**account_types** | [**\OpenAPI\Client\Model\AccountType[]**](AccountType.md) | It defines the account types to be added on the bank connection. If no value is given, then all new available accounts will be imported.&lt;br/&gt;Ignored if &lt;code&gt;importNewAccountsMode&#x3D;SKIP&lt;/code&gt; or &lt;code&gt;importNewAccounts&lt;/code&gt; is set to false and active otherwise.&lt;br/&gt;This parameter refers to the same parameters of \&quot;&lt;a target&#x3D;&#39;_blank&#39; href&#x3D;&#39;https://docs.finapi.io/?product&#x3D;access#post-/api/v1/bankConnections/update&#39;&gt;Update a bank connection&lt;/a&gt;\&quot; and \&quot;&lt;a target&#x3D;&#39;_blank&#39; href&#x3D;&#39;https://docs.finapi.io/?product&#x3D;access#post-/api/v1/bankConnections/connectInterface&#39;&gt;Connect a new interface&lt;/a&gt;\&quot; services in the finAPI Access API. | [optional]
**allowed_interfaces** | **string[]** | Restricts the set of interfaces the end user can update and/or connect with the web form: if given, only these interfaces will be updated or considered for offering to the end user to connect (if connecting new interfaces is requested by the &#x60;importNewAccountsMode&#x60; parameter), as if other interfaces wouldn&#39;t exist for the given bank connection and the linked bank.  Please note that if interfaces already connected to the bank connection are filtered out after applying this parameter and there are still interfaces that can be connected, the web form will immediately start in the \&quot;connect\&quot; mode, without asking the end user whether the connection should take place (comparing to the flow when no &#x60;allowedInterfaces&#x60; is provided).  For example, if the bank connection already has &#x60;XS2A&#x60; interface connected, and you call this service with the &#x60;allowedInterfaces&#x60; set to &#x60;FINTS_SERVER&#x60;, the web form - once opened by the end user - will immediately start with connecting the &#x60;FINTS_SERVER&#x60; interface (assuming &#x60;FINTS_SERVER&#x60; is supported by the linked bank). | [optional]
**skip_balances_download** | **bool** | Whether to skip the download of balances or not. May only be set to true if &lt;code&gt;skipPositionsDownload&lt;/code&gt; is also true. &lt;br/&gt;This parameter refers to the same parameters of \&quot;&lt;a target&#x3D;&#39;_blank&#39; href&#x3D;&#39;https://docs.finapi.io/?product&#x3D;access#post-/api/v1/bankConnections/update&#39;&gt;Update a bank connection&lt;/a&gt;\&quot; and \&quot;&lt;a target&#x3D;&#39;_blank&#39; href&#x3D;&#39;https://docs.finapi.io/?product&#x3D;access#post-/api/v1/bankConnections/connectInterface&#39;&gt;Connect a new interface&lt;/a&gt;\&quot; services in the finAPI Access API. | [optional] [default to false]
**skip_positions_download** | **bool** | Whether to skip the download of transactions and securities or not.&lt;br/&gt;This parameter refers to the same parameters of \&quot;&lt;a target&#x3D;&#39;_blank&#39; href&#x3D;&#39;https://docs.finapi.io/?product&#x3D;access#post-/api/v1/bankConnections/update&#39;&gt;Update a bank connection&lt;/a&gt;\&quot; and \&quot;&lt;a target&#x3D;&#39;_blank&#39; href&#x3D;&#39;https://docs.finapi.io/?product&#x3D;access#post-/api/v1/bankConnections/connectInterface&#39;&gt;Connect a new interface&lt;/a&gt;\&quot; services in the finAPI Access API. | [optional] [default to false]
**load_owner_data** | **bool** | Whether to load information about the bank connection owner(s).&lt;br/&gt;This parameter refers to the same parameters of \&quot;&lt;a target&#x3D;&#39;_blank&#39; href&#x3D;&#39;https://docs.finapi.io/?product&#x3D;access#post-/api/v1/bankConnections/update&#39;&gt;Update a bank connection&lt;/a&gt;\&quot; and \&quot;&lt;a target&#x3D;&#39;_blank&#39; href&#x3D;&#39;https://docs.finapi.io/?product&#x3D;access#post-/api/v1/bankConnections/connectInterface&#39;&gt;Connect a new interface&lt;/a&gt;\&quot; services in the finAPI Access API.&lt;br/&gt;&lt;strong&gt;NOTE:&lt;/strong&gt; This feature is supported only by the WEB_SCRAPER interface. | [optional] [default to false]
**manage_saved_settings** | [**\OpenAPI\Client\Model\ManageSavedSettings[]**](ManageSavedSettings.md) | If users have stored bank credentials or their preferred SCA procedure in finAPI, then each time it is necessary, the web form will automatically apply the saved settings. This field will force the web form to be presented. Depending on the value you provide in the API, the end-user will have the possibility to provide new credentials, decide if he wants to store the new credentials in finAPI or delete the stored SCA procedure. He might also be able to save a different SCA procedure as preference if the workflow requires it. Use this parameter, for example, if a previous update failed because of invalid credentials, or you want to allow the end-user to reset his preferred SCA method.&lt;br/&gt;&lt;br/&gt;&lt;strong&gt;Manage saved settings:&lt;/strong&gt;&lt;br/&gt;&amp;bull; &lt;code&gt;CREDENTIALS&lt;/code&gt; - the end user can edit his stored credentials;&lt;br/&gt;&amp;bull; &lt;code&gt;DEFAULT_TWO_STEP_PROCEDURE&lt;/code&gt; - the end user can edit his stored default two step procedure. | [optional]
**callbacks** | [**\OpenAPI\Client\Model\TaskCallbacks**](TaskCallbacks.md) |  | [optional]
**profile_id** | **string** | The profile to be applied to the web form.&lt;br/&gt;This will overwrite the default profile, if such a profile exists. | [optional]
**redirect_url** | **string** | The URL where the end-user will be redirected to after completing the bank login and (possibly) the SCA on the bank&#39;s website. Must always be provided by mandators with &lt;code&gt;FULLY_LICENSED&lt;/code&gt; or &lt;code&gt;AISP&lt;/code&gt; license type, and may not be provided by mandators with other license types. Find more info in the &lt;a target&#x3D;&#39;_blank&#39; href&#x3D;&#39;https://documentation.finapi.io/webform/Licensed-customers-using-the-Web-Form.2832302195.html&#39;&gt;Web Form 2.0 Public Documentation&lt;/a&gt;.&lt;br/&gt;&lt;br/&gt;&lt;strong&gt;NOTE:&lt;/strong&gt; Please note that this URL is used during the bank authentication flow. If you would like to provide a URL to which the end user will get redirected at the &lt;strong&gt;end of the web form flow&lt;/strong&gt;, please check out the &lt;a href&#x3D;&#39;https://documentation.finapi.io/webform/For-best-results!.2477654019.html#Forbestresults!-Enhanceend-userexperience!&#39; target&#x3D;&#39;_blank&#39;&gt;Web Form 2.0 Public Documentation&lt;/a&gt;. | [optional]
**user_metadata** | [**\OpenAPI\Client\Model\UserMetadata**](UserMetadata.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)