# Engine

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Engine ID. | [optional] 
**name** | **string** | Engine name. | [optional] 
**slug** | **string** | URL-friendly name (slug). | [optional] 
**engine_code** | **string** | Engine code. | [optional] 
**year** | **int** | Year of manufacture. | [optional] 
**capacity** | **int** | Engine capacity in cubic cm. | [optional] 
**cylinders** | **int** | Number of cylinders. | [optional] 
**engine_type** | **string** | Engine type. | [optional] 
**fuel** | **string** | Name of the fuel. | [optional] 
**ecus** | [**\RemapDB\Model\EngineEcu[]**](EngineEcu.md) | List of ECU&#x27;s used in this engine. | [optional] 
**tcus** | [**\RemapDB\Model\EngineTcu[]**](EngineTcu.md) | List of TCU&#x27;s used in this engine. | [optional] 
**performance** | [**\RemapDB\Model\EnginePerformance**](EnginePerformance.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

