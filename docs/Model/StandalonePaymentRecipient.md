# # StandalonePaymentRecipient

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the counterparty. Must be provided for the SEPA transfers.&lt;br/&gt;Note that neither finAPI nor the involved bank are guaranteed to validate the counterparty name. Even if the name does not depict the actual registered account holder of the target account, the order might still be successful. | [optional]
**iban** | **string** | A normalized (without spaces) IBAN of the counterparty&#39;s account&lt;br/&gt;&lt;strong&gt;NOTE:&lt;/strong&gt; Must belong to SEPA area. |
**bic** | **string** | BIC of the counterparty&#39;s account | [optional]
**address** | [**\OpenAPIWebForm\Client\Model\AddressData**](AddressData.md) |  | [optional]
**bank_name** | **string** | Bank name of the counterparty&#39;s account.&lt;br/&gt;Note that neither finAPI nor the involved bank are guaranteed to validate the counterparty bank name. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
